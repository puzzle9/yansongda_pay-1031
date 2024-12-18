<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Yansongda\Pay\Pay;

class Index extends Controller
{
    public function start()
    {
        Pay::config(config('pay'));
        Pay::wechat()->callback();
    }
}
