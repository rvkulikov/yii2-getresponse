<?php
namespace rvkulikov\yii2\getResponse;

use rvkulikov\yii2\getResponse\modules\GRApiAutoResponders;
use rvkulikov\yii2\getResponse\modules\GRApiCampaigns;
use rvkulikov\yii2\getResponse\modules\GRApiContacts;
use rvkulikov\yii2\getResponse\modules\GRApiCustomFields;
use rvkulikov\yii2\getResponse\modules\GRApiNewsLetters;
use rvkulikov\yii2\getResponse\modules\GRApiSegments;
use rvkulikov\yii2\getResponse\modules\GRApiTags;
use yii\base\Component;
use yii\base\InvalidConfigException;
use yii\helpers\ArrayHelper;
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
    public $fields  = [];

    /**
     * @var Client|array|string
     */
    public $httpClient = [];

    /**
     * @var GRApiContacts
     */
    private $contacts;

    /**
     * @var GRApiCampaigns
     */
    private $campaigns;

    /**
     * @var GRApiCustomFields
     */
    private $customFields;

    /**
     * @var GRApiTags
     */
    private $tags;

    /**
     * @var GRApiNewsLetters
     */
    private $newsLetters;

    /**
     * @var GRApiAutoResponders
     */
    private $autoResponders;

    /**
     * @var GRApiSegments
     */
    private $segments;

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        if (!$this->token) {
            throw new InvalidConfigException("'token' property must be set");
        }

        if(!$this->httpClient instanceof Client){
            $requestConfig = ['headers' => []];

            if ($this->token) {
                $requestConfig['headers']['X-Auth-Token'] = "api-key {$this->token}";
            }

            if ($this->domain) {
                $requestConfig['headers']['X-Domain'] = $this->domain;
            }

            if(is_string($this->httpClient)){
                $this->httpClient = ['class' => $this->httpClient];
            }

            if(empty($this->httpClient['class'])){
                $this->httpClient['class'] = 'yii\httpclient\Client';
            }

            $this->httpClient = \Yii::createObject(ArrayHelper::merge([
                'baseUrl'       => $this->baseUrl,
                'requestConfig' => $requestConfig
            ], $this->httpClient));
        }
    }

    /**
     * @return mixed
     */
    public function getHttpClient()
    {
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

    /**
     * @return GRApiCampaigns
     */
    public function getCampaigns()
    {
        if (!$this->campaigns) {
            $this->campaigns = new GRApiCampaigns([
                'httpClient' => $this->getHttpClient()
            ]);
        }

        return $this->campaigns;
    }

    /**
     * @return GRApiCustomFields
     */
    public function getCustomFields()
    {
        if (!$this->customFields) {
            $this->customFields = new GRApiCustomFields([
                'httpClient' => $this->getHttpClient()
            ]);
        }

        return $this->customFields;
    }

    /**
     * @return GRApiTags
     */
    public function getTags()
    {
        if (!$this->tags) {
            $this->tags = new GRApiTags([
                'httpClient' => $this->getHttpClient()
            ]);
        }

        return $this->tags;
    }

    /**
     * @return GRApiNewsLetters
     */
    public function getNewsLetters()
    {
        if (!$this->newsLetters) {
            $this->newsLetters = new GRApiNewsLetters([
                'httpClient' => $this->getHttpClient()
            ]);
        }

        return $this->newsLetters;
    }

    /**
     * @return GRApiAutoResponders
     */
    public function getAutoResponders()
    {
        if (!$this->autoResponders) {
            $this->autoResponders = new GRApiAutoResponders([
                'httpClient' => $this->getHttpClient()
            ]);
        }

        return $this->autoResponders;
    }

    /**
     * @return GRApiSegments
     */
    public function getSegments()
    {
        if (!$this->segments) {
            $this->segments = new GRApiSegments([
                'httpClient' => $this->getHttpClient()
            ]);
        }

        return $this->segments;
    }
}