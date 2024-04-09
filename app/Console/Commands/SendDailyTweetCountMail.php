<?php

namespace App\Console\Commands;

use App\Mail\DailyTweetCount;
use App\Models\User;
use App\Services\TweetService;
use Illuminate\Console\Command;
use Illuminate\Mail\Mailer;

class SendDailyTweetCountMail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-daily-tweet-count-mail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '前日のつぐや奇数を集計してつぶやきを数のメールを送ります';

    private TweetService $tweetService;
    private Mailer $mailer;

    public function __construct(TweetService $tweetService, Mailer $mailer)
    {
        parent::__construct();
        $this->tweetService = $tweetService;
        $this->mailer = $mailer;
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $count = $this->tweetService->countYesterdayTweets();
        /** @var $users Illuminate\Database\Eloquent\Collection */
        $user = User::get()->first();
        $this->mailer->to($user->email)->send(new DailyTweetCount($user, $count));
        return 0;
    }
}
