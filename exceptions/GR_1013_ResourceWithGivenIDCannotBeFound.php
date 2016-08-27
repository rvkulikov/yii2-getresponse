<?php
namespace rvkulikov\yii2\getResponse\exceptions;

/**
 * Class GR_1013_ResourceWithGivenIDCannotBeFound
 *
 * @package rvkulikov\yii2\getResponse\exceptions
 *
 * @author  Roman Kulikov <r.v.kulikov@yandex.ru>
 */
class GR_1013_ResourceWithGivenIDCannotBeFound extends GRBaseException
{
    public $code = 1013;

    /**
     * @return string
     */
    public function getName()
    {
        return 'Resource with given ID cannot be found';
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return <<<TXT
There is simply no resource of given ID
TXT;
    }
}