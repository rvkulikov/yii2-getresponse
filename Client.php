<?php
namespace rvkulikov\yii2\getResponse;

use yii\base\Component;
use yii\base\InvalidConfigException;

/**
 * Class Client
 *
 * @package rvkulikov\yii2\getResponse
 *
 * @author  Roman Kulikov <r.v.kulikov@yandex.ru>
 */
class Client extends Component
{
    public $baseUrl = 'https://api.getresponse.com/v3';
    public $token;
    public $domain;

    private $httpClient;

    public function init()
    {
        parent::init();

        if (!$this->token) {
            throw new InvalidConfigException("'token' property must be set");
        }
    }

    /**
     * @return mixed
     */
    public function getHttpClient()
    {
        if (!$this->httpClient) {
            $requestConfig = ['headers' => []];

            if ($this->token) {
                $requestConfig['headers']['X-Auth-Token'] = "api-key {$this->token}";
            }

            if ($this->domain) {
                $requestConfig['headers']['X-Domain'] = $this->domain;
            }

            $this->httpClient = new \yii\httpclient\Client([
                'baseUrl'       => $this->baseUrl,
                'requestConfig' => $requestConfig
            ]);
        }

        return $this->httpClient;
    }
}