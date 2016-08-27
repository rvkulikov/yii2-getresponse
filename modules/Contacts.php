<?php
namespace rvkulikov\yii2\getResponse\modules;

use rvkulikov\yii2\getResponse\models\contact\Contact;
use rvkulikov\yii2\getResponse\modules\contacts\GetContactsOptions;
use yii\httpclient\Client;

/**
 * Class Contacts
 *
 * @package rvkulikov\yii2\getResponse\modules
 *
 * @author  Roman Kulikov <r.v.kulikov@yandex.ru>
 */
class Contacts extends BaseGRApiModule
{
    /**
     * @var Client
     */
    public $httpClient;

    /**
     * @param GetContactsOptions $options
     *
     * @return Contact[]
     */
    public function getContacts(GetContactsOptions $options)
    {
        $request  = $this->httpClient->get('contacts', $options->toArray());
        $response = $request->send();

        if (!$response->isOk) {
            $this->handleError($response);
        }

        $models = [];
        foreach ($response->getData() as $item) {
            $contact = new Contact();
            $contact->load([$contact->formName() => $item]);

            $models[] = $contact;
        }

        return $models;
    }

    public function getContact($id)
    {

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