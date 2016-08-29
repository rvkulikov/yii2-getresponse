<?php
namespace rvkulikov\yii2\getResponse;

use rvkulikov\yii2\getResponse\modules\GRApiContacts;
use yii\base\Component;
use yii\base\InvalidConfigException;
use yii\httpclient\Client;

/**
 * Class GRClient
 *
 * @package rvkulikov\yii2\getResponse
 *
 * @author  Roman Kulikov <r.v.kulikov@yandex.ru>
 */
class GRClient extends Component
{
    public $baseUrl = 'https://api.getresponse.com/v3';
    public $token;
    public $domain;

    /**
     * @var Client
     */
    private $httpClient;

    /**
     * @var GRApiContacts
     */
    private $contacts;

    /**
     * @inheritdoc
     */
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

            $this->httpClient = new Client([
                'baseUrl'       => $this->baseUrl,
                'requestConfig' => $requestConfig
            ]);
        }

        return $this->httpClient;
    }

    /**
     * @return GRApiContacts
     */
    public function getContacts()
    {
        if (!$this->contacts) {
            $this->contacts = new GRApiContacts([
                'httpClient' => $this->getHttpClient()
            ]);
        }

        return $this->contacts;
    }
}