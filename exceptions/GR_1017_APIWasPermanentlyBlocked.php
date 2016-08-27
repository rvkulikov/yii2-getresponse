<?php
namespace rvkulikov\yii2\getResponse\exceptions;

/**
 * Class GR_1017_APIWasPermanentlyBlocked
 *
 * @package rvkulikov\yii2\getResponse\exceptions
 *
 * @author  Roman Kulikov <r.v.kulikov@yandex.ru>
 */
class GR_1017_APIWasPermanentlyBlocked extends GRBaseException
{
    public $code = 1017;

    /**
     * @return string
     */
    public function getName()
    {
        return 'Suspected behaviour, API was permanently blocked, please contact with our support';
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