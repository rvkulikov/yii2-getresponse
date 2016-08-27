<?php
namespace rvkulikov\yii2\getResponse\exceptions;

/**
 * Class GRInternalError
 *
 * @package rvkulikov\yii2\getResponse\exceptions
 *
 * @author  Roman Kulikov <r.v.kulikov@yandex.ru>
 */
class GR_0001_InternalError extends GRBaseException
{
    public $code = 1;

    /**
     * @return string
     */
    public function getName()
    {
        return 'Internal error';
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return <<<TXT
Something went wrong on our side, and there is nothing you can do to fix that. 
We will get notified about all errors immediately, but if you are experience this often then please let us know!

This errors are connected to system failures, database connection ost or DDoS attack
TXT;
    }
}