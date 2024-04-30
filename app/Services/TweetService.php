<?php

namespace App\Services;

use App\Models\Image;
use App\Models\Tweet;
use App\Modules\ImageUpload\ImageManagerInterface;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class TweetService
{

    public function __construct(private ImageManagerInterface $imageManager) {}

    public function getTweets()
    {
        return Tweet::with('images')->orderBy('created_at', 'DESC')->get();
    }

    public function checkOwnTweet(int $userId, int $tweetId): bool
    {
        $tweet = Tweet::where('id', $tweetId)->first();
        if (!$tweet) {
            return false;
        }
        return $tweet->user_id === $userId;
    }

    public function countYesterdayTweets(): int
    {
        return Tweet::whereDate('created_at', '>=', Carbon::yesterday()->toDateTimeString())
          ->whereDate('created_at', '<', Carbon::today()->toDateTimeString())
          ->count();
    }

    public function saveTweet(int $userId, string $content, array $images)
    {
        DB::transaction(function () use ($userId, $content, $images) {
            $tweet = new Tweet();
            $tweet->user_id = $userId;
            $tweet->content = $content;
            $tweet->save();
            foreach ($images as $image) {
                //Storage::putFile('public/images', $image);
                $name = $this->imageManager->save($image);
                $imageModel = new Image();
                //$imageModel->name = $image->hashName();
                $imageModel->name = $name;
                $imageModel->save();
                $tweet->images()->attach($imageModel->id);
            }
        });
    }

    public function deleteTweet(int $tweetId)
    {
        DB::transaction(function () use ($tweetId) {
            $tweet = Tweet::where('id', $tweetId)->firstOrFail();
            $tweet->images()->each(function ($image) use ($tweet) {
//                $filePath = 'public/images/' . $image->name;
//                if (Storage::exists($filePath)) {
//                    Storage::delete($filePath);
//                }
                $this->imageManager->delete($image->name);
                $tweet->images()->detach($image->id);
                $image->delete();
            });

            $tweet->delete();
        });
    }

}

