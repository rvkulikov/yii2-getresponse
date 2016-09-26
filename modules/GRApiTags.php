<?php
namespace rvkulikov\yii2\getResponse\modules;

use rvkulikov\yii2\getResponse\modules\tags\GRGetTagsOptions;

/**
 * Class GRApiTags
 *
 * @package rvkulikov\yii2\getResponse\modules
 *
 * @author  Roman Kulikov <r.v.kulikov@yandex.ru>
 */
class GRApiTags extends GRApiBase
{
    /**
     * @param GRGetTagsOptions|null $options
     *
     * @return mixed[]
     */
    public function getTags(GRGetTagsOptions $options = null)
    {
        $request  = $this->httpClient->get('tags', $options ? $options->toArray() : null);
        $response = $request->send();

        if (!$response->isOk) {
            $this->handleError($response);
        }

        return $response->getData();
    }

}