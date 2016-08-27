<?php
namespace rvkulikov\yii2\getResponse\exceptions;

/**
 * Class GR_1015_TooManyRequestToAPI
 *
 * @package rvkulikov\yii2\getResponse\exceptions
 *
 * @author  Roman Kulikov <r.v.kulikov@yandex.ru>
 */
class GR_1015_TooManyRequestToAPI extends GRBaseException
{
    public $code = 1015;

    /**
     * @return string
     */
    public function getName()
    {
        return 'Too many request to API, quota reached';
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return <<<TXT
In this error there could be couple reasons you should look for:

* You reach quota limit and throttling system was activated
* Our monitoring system recognise you requests pattern as a potential threat and temporarily disable access to api. 
  It will be enable in next 15 minutes. 
  Please contact us, we will check and explain what could be wrong.
* Our monitoring system recognise you requests pattern as a risky behaviour and permanently disable access to api. 
  Blockade could be remove only by our support.
* Restrictions policy for that account forbids access from this IP address. 
  Please contact with ou support.
TXT;
    }
}