<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\Factory;
use Illuminate\Support\Facades\View;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, Factory $factory)
    {
        $data = ['name' => 'laravel'];
      // 1つめ.
      return view('tweet.index', $data);
      // 2つめ
      //return view('tweet.index')->with('name', 'laravel');
      // 3つめ
      //return $factory->make('tweet.index', $data);
      // 3つめ
      //return View::make('tweet.index', $data);
    }
}
