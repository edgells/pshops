<?php


namespace app\index\controller;


use think\Db;
use think\Request;

class HealthFood
{
    public function goods(Request $request) {
        var_dump($request->url());
        Db::table('php_shops_health_food')->insertGetId([
            'food_name' => $request->frames
        ]);

        return json(['data' => 'add successfully']);
    }

//    /**
//     * @param $name
//     * @return mixed
//     * @route('healths/:name')
//     */
//    public function lists($name) {
//        return $name;
//    }
}