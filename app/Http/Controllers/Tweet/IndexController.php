<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
use App\Models\Tweet;
use App\Services\TweetService;
use Illuminate\Http\Request;
use Illuminate\View\Factory;
use Illuminate\Support\Facades\View;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, TweetService $service)
    {
        //$tweets = Tweet::all()->sortByDesc('created_at');
        $tweets = $service->getTweets();
        //dump($tweets);
        //app(\Illuminate\Foundation\Configuration\Exceptions::class)->render(request(), throw new \Error('dump report.'));
        $data = ['tweets' => $tweets];
        return view('tweet.index', $data);

      // 1つめ.
      //return view('tweet.index', $data);
      // 2つめ
      //return view('tweet.index')->with('name', 'laravel');
      // 3つめ
      //return $factory->make('tweet.index', $data);
      // 3つめ
      //return View::make('tweet.index', $data);
    }
}
