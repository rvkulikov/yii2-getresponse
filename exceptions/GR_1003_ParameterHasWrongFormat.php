<?php
namespace rvkulikov\yii2\getResponse\exceptions;

/**
 * Class GR1003ParameterHasWrongFormat
 *
 * @package rvkulikov\yii2\getResponse\exceptions
 *
 * @author  Roman Kulikov <r.v.kulikov@yandex.ru>
 */
class GR_1003_ParameterHasWrongFormat extends GRBaseException
{
    public $code = 1003;

    /**
     * @return string
     */
    public function getName()
    {
        return 'Resource state forbids that kind of action';
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return <<<TXT
This is validation error. There are many other validation types, but this particular checks if value of parameters you send in request are in proper type.

Generally we check:

* resource ID format;
* email address syntax;
* IP address syntax;
* reserved words;
* forbidden words;
* checks against dictionary (eg. opt-in type values during adding contact);
* date format;
* phone number format.
TXT;
    }
}