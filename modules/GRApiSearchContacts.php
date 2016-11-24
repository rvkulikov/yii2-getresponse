<?php
namespace rvkulikov\yii2\getResponse\modules;

use rvkulikov\yii2\getResponse\modules\searchContacts\GRGetSearchContactsOptions;
use rvkulikov\yii2\getResponse\modules\searchContacts\GRUpdateSearchContactOptions;

/**
 * Class GRApiSearchContacts
 *
 * @package rvkulikov\yii2\getResponse\modules
 *
 * @author  Roman Kulikov <r.v.kulikov@yandex.ru>
 */
class GRApiSearchContacts extends GRApiBase
{
    /**
     * @param GRGetSearchContactsOptions $options
     *
     * @return mixed[]
     */
    public function getSearchContacts(GRGetSearchContactsOptions $options = null)
    {
        $request  = $this->httpClient->get('search-contacts', $options ? $options->toArray() : null);
        $response = $request->send();

        if (!$response->isOk) {
            $this->handleError($response);
        }

        return $response->getData();
    }

    /**
     * @param string $id
     *
     * @return mixed[]
     */
    public function getSearchContact($id)
    {
        $request  = $this->httpClient->get("search-contacts/{$id}");
        $response = $request->send();

        if (!$response->isOk) {
            $this->handleError($response);
        }

        return $response->getData();
    }

    /**
     * @param string $id
     *
     * @return mixed[]
     */
    public function getSearchContactContacts($id){
        $request  = $this->httpClient->get("search-contacts/{$id}/contacts");
        $response = $request->send();

        if (!$response->isOk) {
            $this->handleError($response);
        }

        return $response->getData();
    }

    /**
     * @param string                       $id
     * @param GRUpdateSearchContactOptions $options
     *
     * @return mixed[]
     */
    public function updateSearchContact($id, GRUpdateSearchContactOptions $options)
    {
        $request  = $this->httpClient->post("search-contacts/{$id}", $options->toArray());
        $response = $request->send();

        if (!$response->isOk) {
            $this->handleError($response);
        }

        return $response->getData();
    }

    /**
     * @param string $id
     *
     * @return mixed[]
     */
    public function deleteSearchContact($id)
    {
        $request  = $this->httpClient->delete("search-contacts/{$id}");
        $response = $request->send();

        if (!$response->isOk) {
            $this->handleError($response);
        }

        return $response->getData();
    }
}