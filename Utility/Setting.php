<?php
/**
 * Created by PhpStorm.
 * User: yuanxr
 * Date: 2018/6/10
 * Time: 上午4:58
 */

namespace Utility;


class Setting
{
    public $name;

    /**
     * Setting constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

}