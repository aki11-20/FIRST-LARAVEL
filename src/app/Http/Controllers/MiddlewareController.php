<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiddlewareController extends Controller
{
    public function index()
    {
        $item = [
          'content' => '自由入力してください',
        ];
        return view('middleware', $item);
    }
        public function post(Request $request)
        {
            $content = $request->content;
            $item = [
                'content' => $content . 'と入力しましたね'
            ];
        return view('middleware', $item);
    }
}
