<?php
namespace rvkulikov\yii2\getResponse\modules;

use rvkulikov\yii2\getResponse\exceptions\GRBaseException;
use yii\base\Component;
use yii\httpclient\Client;
use yii\httpclient\Response;

/**
 * Class BaseGRApiModule
 *
 * @package rvkulikov\yii2\getResponse\modules
 *
 * @author  Roman Kulikov <r.v.kulikov@yandex.ru>
 */
class GRApiBase extends Component
{
    /**
     * @var Client
     */
    public $httpClient;

    /**
     * @param Response $response
     *
     * @throws GRBaseException
     */
    public function handleError(Response $response)
    {
        $exception = GRBaseException::buildExceptionViaResponse($response);
        throw $exception;
    }
}
