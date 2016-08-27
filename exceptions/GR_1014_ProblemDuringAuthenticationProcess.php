<?php
namespace rvkulikov\yii2\getResponse\exceptions;

/**
 * Class GR_1014_ProblemDuringAuthenticationProcess
 *
 * @package rvkulikov\yii2\getResponse\exceptions
 *
 * @author  Roman Kulikov <r.v.kulikov@yandex.ru>
 */
class GR_1014_ProblemDuringAuthenticationProcess extends GRBaseException
{
    public $code = 1014;

    /**
     * @return string
     */
    public function getName()
    {
        return 'Problem during authentication process';
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return <<<TXT
This could be couple of different reason:

* Authorization headers were not sent (check headers if there is X-Auth-Token header send during every request);
* Authorization headers were ok, but there is no token (it should be passed as X-Auth-Token: token_type your_api_key;
* Authorization headers were ok, but token type is unknown (it should be passed as X-Auth-Token: api-key your_api_key;
* Headers were ok, but api-key is invalid.
TXT;
    }
}