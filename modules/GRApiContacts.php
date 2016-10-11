<?php
namespace rvkulikov\yii2\getResponse\modules;

use rvkulikov\yii2\getResponse\modules\contacts\GRCreateContactOptions;
use rvkulikov\yii2\getResponse\modules\contacts\GRGetContactsOptions;
use rvkulikov\yii2\getResponse\modules\contacts\GRUpdateContactOptions;
use yii\helpers\ArrayHelper;

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
     * @param GRGetContactsOptions|null $options
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

        $data = $response->getData();

        $data['customFieldValues'] = ArrayHelper::index($data['customFieldValues'], 'customFieldId');

        return $data;
    }

    /**
     * @param string $id
     *
     * @return mixed
     */
    public function getContactActivities($id)
    {
        $request  = $this->httpClient->get("contacts/{$id}/activities");
        $response = $request->send();

        if (!$response->isOk) {
            $this->handleError($response);
        }

        return $response->getData();
    }

    /**
     * @param GRCreateContactOptions $options
     *
     * @return mixed
     */
    public function createContact(GRCreateContactOptions $options)
    {
        $request  = $this->httpClient->post("contacts", $options->toArray());
        $response = $request->send();

        if (!$response->isOk) {
            $this->handleError($response);
        }

        return $response->getData();
    }

    /**
     * @param string                 $id
     * @param GRUpdateContactOptions $options
     *
     * @return array|mixed
     */
    public function updateContact($id, GRUpdateContactOptions $options)
    {
        $request  = $this->httpClient->post("contacts/{$id}", $options->toArray());
        $response = $request->send();

        if (!$response->isOk) {
            $this->handleError($response);
        }

        return $response->getData();
    }

    public function deleteContact($id)
    {

    }

    public function copyContactToCampaign($contactId, $campaignId)
    {
        /**
         * contact does not exist
         * campaign does not exist
         * campaign already contains this contact (merge/replace)
         * how to resolve merge conflicts
         */
    }

    public function moveContactToCampaign($contactId, $campaignId)
    {
        /**
         * contact does not exist
         * campaign does not exist
         * campaign already contains this contact (merge/replace/delete)
         * how to resolve merge conflicts
         */
    }
}