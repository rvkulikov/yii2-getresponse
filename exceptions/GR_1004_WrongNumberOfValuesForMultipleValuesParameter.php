<?php
namespace rvkulikov\yii2\getResponse\exceptions;

/**
 * Class GRWrongNumberOfValuesForMultipleValuesParameter
 *
 * @package rvkulikov\yii2\getResponse\exceptions
 *
 * @author  Roman Kulikov <r.v.kulikov@yandex.ru>
 */
class GR_1004_WrongNumberOfValuesForMultipleValuesParameter extends GRBaseException
{
    public $code = 1004;

    /**
     * @return string
     */
    public function getName()
    {
        return 'Wrong number of values for multiple values parameter (hash, table)';
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return <<<TXT
Sometimes we expect that parameters should be an array (table) with multiple values inside. 
There can be limits (max or min) to number of values inside that parameter, and when you see this error, you go past that limits. 
We will tell you what are the limits in any particular case - just take a look into 'context' section of error response.
TXT;
    }

}