<?php
namespace rvkulikov\yii2\getResponse\modules;

use rvkulikov\yii2\getResponse\modules\autoResponders\GRGetAutoRespondersOptions;
use rvkulikov\yii2\getResponse\modules\autoResponders\GRGetAutoResponderThumbnailOptions;

/**
 * Class GRApiAutoResponders
 *
 * @package rvkulikov\yii2\getResponse\modules
 *
 * @author  Kulikov Roman <r.v.kulikov@yandex.ru>
 */
class GRApiAutoResponders extends GRApiBase
{
    /**
     * @param GRGetAutoRespondersOptions|null $options
     *
     * @return mixed[]
     */
    public function getAutoResponders(GRGetAutoRespondersOptions $options = null)
    {
        $request  = $this->httpClient->get('autoresponders', $options ? $options->toArray() : null);
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
    public function getAutoResponder($id)
    {
        $request  = $this->httpClient->get("autoresponders/{$id}");
        $response = $request->send();

        if (!$response->isOk) {
            $this->handleError($response);
        }

        return $response->getData();
    }

    /**
     * @param string                             $id
     * @param GRGetAutoResponderThumbnailOptions $options
     *
     * @return mixed
     */
    public function getAutoResponderThumbnail($id, GRGetAutoResponderThumbnailOptions $options = null)
    {
        $request  = $this->httpClient->get("autoresponders/{$id}", $options ? $options->toArray() : null);
        $response = $request->send();

        if (!$response->isOk) {
            $this->handleError($response);
        }

        return $response->getData();
    }
}