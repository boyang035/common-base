<?php
/**
 * Created by RenRenZuJi
 * Author: Xu JunJie
 * Email: 2818365552@qq.com
 * Date: 2021/1/7 14:45
 */

namespace common\helpers;


class Helper
{
    /**
     * 判断值是否为空
     * @param $value
     * @return bool
     */
    public static function isEmpty($value): bool
    {
        return $value === '' || $value === [] || $value === null || is_string($value) && trim($value) === '';
    }
}