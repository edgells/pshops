<?php


namespace app\index\controller;


use think\Controller;
use think\Db;
use think\Request;
use think\response\Json;

class Users extends Controller
{
    /**
     * @route('user/register/')
     * @param $request
     * @return Json
     */
    public function register(Request $request) {
        Db::transaction(function () {
          Db::table("php_shops_user")->insert(
              [
                  'username'=>'test',
                  'password'=>'password'
              ]
          )  ;
        });

        return \json(['data'=>'register successfully']);
    }

}