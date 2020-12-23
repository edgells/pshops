<?php


namespace app\index\validates;


use think\Validate;

class UserValidate extends Validate
{
    protected $rule = [
        'name' => 'require|max:25',
        'age' => 'number|between:1, 100000',
        'email' => 'email',
    ];

}