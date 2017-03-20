<?php
namespace rvkulikov\yii2\getResponse\modules;

use rvkulikov\yii2\getResponse\modules\contacts\GRCreateContactOptions;
use rvkulikov\yii2\getResponse\modules\contacts\GRDeleteContactOptions;
use rvkulikov\yii2\getResponse\modules\contacts\GRGetContactActivitiesOptions;
use rvkulikov\yii2\getResponse\modules\contacts\GRGetContactsOptions;
use rvkulikov\yii2\getResponse\modules\contacts\GRUpdateContactOptions;
use yii\helpers\ArrayHelper;
use yii\httpclient\Request;

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
     * @param string                        $id
     * @param GRGetContactActivitiesOptions $options
     *
     * @return \mixed[][]
     */
    public function getContactActivities($id, GRGetContactActivitiesOptions $options = null)
    {
        $request  = $this->httpClient->get("contacts/{$id}/activities", $options ? $options->toArray() : null);
        $response = $request->send();

        if (!$response->isOk) {
            $this->handleError($response);
        }

        return $response->getData();
    }

    /**
     * @param string[]                      $ids
     * @param GRGetContactActivitiesOptions $options
     *
     * @return \mixed[][]
     */
    public function getContactActivitiesBatch($ids, GRGetContactActivitiesOptions $options = null)
    {
        /** @var Request[] $requests */
        $requests = [];
        foreach ($ids as $id) {
            $requests[$id] = $this->httpClient->get("contacts/{$id}/activities", $options ? $options->toArray() : null);
        }

        $responses = $this->httpClient->batchSend($requests);
        $dataArray = [];

        foreach ($responses as $id => $response) {
            if ($response->isOk) {
                $dataArray[$id] = $response->getData();
            }
        }

        return $dataArray;
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

    /**
     * @param string                      $id
     * @param GRDeleteContactOptions|null $options
     *
     * @return mixed
     */
    public function deleteContact($id, GRDeleteContactOptions $options = null)
    {
        $query    = http_build_query(array_filter($options ? $options->toArray() : []));
        $url      = "contacts/{$id}" . ($query ? "?{$query}" : "");

        $request  = $this->httpClient->delete($url);
        $response = $request->send();

        if (!$response->isOk) {
            $this->handleError($response);
        }

        return $response->getData();
    }
}