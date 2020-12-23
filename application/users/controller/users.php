<?php

namespace app\users\controller;


use think\Controller;
use think\Request;

class users extends Controller
{
    public function getUser(): string
    {
        return "user page";
    }

    /**
     * @route('user/register/', 'post')
     * @param $request
     */
    public function register(Request $request) {
//        $data = $request->
    }
}

