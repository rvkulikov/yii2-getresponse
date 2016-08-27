<?php
namespace rvkulikov\yii2\getResponse\exceptions;

/**
 * Class GR_1021_ThereIsSomethingWrongWithYourRequestHeaders
 *
 * @package rvkulikov\yii2\getResponse\exceptions
 *
 * @author  Roman Kulikov <r.v.kulikov@yandex.ru>
 */
class GR_1021_ThereIsSomethingWrongWithYourRequestHeaders extends GRBaseException
{
    public $code = 1021;

    /**
     * @return string
     */
    public function getName()
    {
        return 'There is something wrong with your request headers';
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return <<<TXT
This error is all about you request headers.

In most cases you should send us at least:

* X-Auth-Token - if you are using api-key authorization;
* Authorization - if you are using oAuth2 authorization;
* Content-Type - this should be sent always, and for now it should be set to 'application/json';
* If you get this error then please check you request headers!.
TXT;
    }
}