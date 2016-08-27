<?php
namespace rvkulikov\yii2\getResponse\exceptions;

/**
 * Class GR_1018_YourIPWasBlocked
 *
 * @package rvkulikov\yii2\getResponse\exceptions
 *
 * @author  Roman Kulikov <r.v.kulikov@yandex.ru>
 */
class GR_1018_YourIPWasBlocked extends GRBaseException
{
    public $code = 1018;

    /**
     * @return string
     */
    public function getName()
    {
        return 'Your IP was blocked';
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