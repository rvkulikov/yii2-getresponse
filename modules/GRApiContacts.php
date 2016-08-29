<?php
namespace rvkulikov\yii2\getResponse\modules;

use rvkulikov\yii2\getResponse\modules\contacts\GRGetContactsOptions;
use yii\httpclient\Client;

/**
 * Class Contacts
 *
 * @package rvkulikov\yii2\getResponse\modules
 *
 * @author  Roman Kulikov <r.v.kulikov@yandex.ru>
 */
class GRApiContacts extends GRApiBase
{
    /**
     * @var Client
     */
    public $httpClient;

    /**
     * @param GRGetContactsOptions $options
     *
     * @return mixed[]
     */
    public function getContacts(GRGetContactsOptions $options = null)
    {
        $request  = $this->httpClient->get('contacts', $options ? $options->toArray() : null);
        $response = $request->send();

        if (!$response->isOk) {
            $this->handleError($response);
        }

        return $response->getData();
    }

    /**
     * @param string $id
     *
     * @return mixed
     */
    public function getContact($id)
    {
        $request  = $this->httpClient->get("contacts/{$id}");
        $response = $request->send();

        if (!$response->isOk) {
            $this->handleError($response);
        }

        return $response->getData();
    }

    public function getContactActivities($id)
    {

    }

    public function createContact()
    {

    }

    public function updateContact($id)
    {

    }

    public function deleteContact($id)
    {

    }
}