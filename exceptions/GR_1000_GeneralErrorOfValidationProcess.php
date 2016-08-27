<?php
namespace rvkulikov\yii2\getResponse\exceptions;

/**
 * Class GRGeneralErrorOfValidationProcess
 *
 * @package rvkulikov\yii2\getResponse\exceptions
 *
 * @author  Roman Kulikov <r.v.kulikov@yandex.ru>
 */
class GR_1000_GeneralErrorOfValidationProcess extends GRBaseException
{
    public $code = 1000;

    /**
     * @return string
     */
    public function getName()
    {
        return 'General error of validation process';
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return <<<TXT
This is an general validation error - usually you will see this if there is more then one type of validation error in request message. 
We will gives you more detailed information in the 'context' part of the error response. 
Please look there to see what went wrong.
TXT;
    }
}