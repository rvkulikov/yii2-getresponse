<?php
namespace rvkulikov\yii2\getResponse\modules;

use rvkulikov\yii2\getResponse\modules\customFields\GRGetCustomFieldsOptions;
use rvkulikov\yii2\getResponse\modules\customFields\GRUpdateCustomFieldOptions;

/**
 * Class GRApiCustomFields
 *
 * @package rvkulikov\yii2\getResponse\modules
 *
 * @author  Roman Kulikov <r.v.kulikov@yandex.ru>
 */
class GRApiCustomFields extends GRApiBase
{
    /**
     * @param GRGetCustomFieldsOptions|null $options
     *
     * @return mixed[]
     */
    public function getCustomFields(GRGetCustomFieldsOptions $options = null)
    {
        $request  = $this->httpClient->get('custom-fields', $options ? $options->toArray() : null);
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
    public function getCustomField($id)
    {
        $request  = $this->httpClient->get("custom-fields/{$id}");
        $response = $request->send();

        if (!$response->isOk) {
            $this->handleError($response);
        }

        return $response->getData();
    }

    /**
     * @param string                     $id
     * @param GRUpdateCustomFieldOptions $options
     *
     * @return mixed
     */
    public function updateCustomField($id, GRUpdateCustomFieldOptions $options)
    {
        $request  = $this->httpClient->post("custom-fields/{$id}", $options->toArray());
        $response = $request->send();

        if (!$response->isOk) {
            $this->handleError($response);
        }

        return $response->getData();
    }
}