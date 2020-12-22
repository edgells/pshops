<?php


namespace app\healths\controller;


use think\Controller;

class Foods
{
    /**
     * @route('healths/:name')
     */
    public function healthFood($name){
        return $name;
    }

    /**
     * @param $name
     * @return mixed
     * @route('heals/:name')
     */
    public function heals($name){
        return $name;
    }

    /**
     * @return \think\response\Redirect
     * @route('red/')
     */
    public function baidu(){
        return redirect("http://www.baidu.com/");
    }
}