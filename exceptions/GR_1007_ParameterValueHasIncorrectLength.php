<?php
namespace rvkulikov\yii2\getResponse\exceptions;

/**
 * Class GR_1007_ParameterValueHasIncorrectLength
 *
 * @package rvkulikov\yii2\getResponse\exceptions
 *
 * @author  Roman Kulikov <r.v.kulikov@yandex.ru>
 */
class GR_1007_ParameterValueHasIncorrectLength extends GRBaseException
{
    public $code = 1007;

    /**
     * @return string
     */
    public function getName()
    {
        return 'Parameter value has incorrect length';
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return <<<TXT
Some parameters have restriction on how long or short they can be. 
We always return in the 'context' section what is the limit in that case.
TXT;
    }
}