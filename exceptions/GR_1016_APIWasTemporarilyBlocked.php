<?php
namespace rvkulikov\yii2\getResponse\exceptions;

/**
 * Class GR_1016_SuspectedBehavior
 *
 * @package rvkulikov\yii2\getResponse\exceptions
 *
 * @author  Roman Kulikov <r.v.kulikov@yandex.ru>
 */
class GR_1016_APIWasTemporarilyBlocked extends GRBaseException
{
    public $code = 1016;

    /**
     * @return string
     */
    public function getName()
    {
        return 'Too many request to API or suspected behaviour, API was temporarily blocked, please wait';
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