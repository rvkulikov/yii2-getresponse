<?php
namespace rvkulikov\yii2\getResponse\exceptions;

/**
 * Class GR1005ParameterHasEmptyValue
 *
 * @package rvkulikov\yii2\getResponse\exceptions
 *
 * @author  Roman Kulikov <r.v.kulikov@yandex.ru>
 */
class GR_1005_ParameterHasEmptyValue extends GRBaseException
{
    public $code = 1005;

    /**
     * @return string
     */
    public function getName()
    {
        return 'Parameter has empty value';
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return <<<TXT
We sometimes expect that some fields must have value in them. 
You send us a parameter without it. 
We will tell you where we expect an value - look at 'context' section in error response
TXT;
    }
}