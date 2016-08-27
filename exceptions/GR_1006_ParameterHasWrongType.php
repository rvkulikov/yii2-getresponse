<?php
namespace rvkulikov\yii2\getResponse\exceptions;

/**
 * Class GR_1006_ParameterHasWrongType
 *
 * @package rvkulikov\yii2\getResponse\exceptions
 *
 * @author  Roman Kulikov <r.v.kulikov@yandex.ru>
 */
class GR_1006_ParameterHasWrongType extends GRBaseException
{
    public $code = 1006;

    /**
     * @return string
     */
    public function getName()
    {
        return 'Parameter has wrong type';
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return <<<TXT
Sometimes we require that some parameters have values of some type. 
We check mostly primitives (string, integer, boolean). 
We will return bad value and name of a parameter it in 'context' section of the error response
TXT;
    }

}