<?php
namespace rvkulikov\yii2\getResponse\modules;

use rvkulikov\yii2\getResponse\modules\searchContacts\GRGetSearchContactsOptions;

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
}