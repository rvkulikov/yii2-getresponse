<?php
namespace rvkulikov\yii2\getResponse\exceptions;

/**
 * Class GR_1023_AccessForbidden
 *
 * @package rvkulikov\yii2\getResponse\exceptions
 *
 * @author  Roman Kulikov <r.v.kulikov@yandex.ru>
 */
class GR_1023_AccessForbidden extends GRBaseException
{
    public $code = 1023;

    /**
     * @return string
     */
    public function getName()
    {
        return 'Access forbidden';
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return <<<TXT
TXT;
    }
}