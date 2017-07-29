<?php
namespace rvkulikov\yii2\getResponse\modules;

use rvkulikov\yii2\getResponse\modules\campaigns\GRGetCampaignsOptions;

/**
 * Class GRApiCampaigns
 *
 * @package rvkulikov\yii2\getResponse\modules
 *
 * @author  Roman Kulikov <r.v.kulikov@yandex.ru>
 */
class GRApiCampaigns extends GRApiBase
{
    /**
     * @param GRGetCampaignsOptions|null $options
     *
     * @return mixed[]
     */
    public function getCampaigns(GRGetCampaignsOptions $options = null)
    {
        $request  = $this->httpClient->get('campaigns', $options ? $options->toArray() : null);
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
    public function getCampaign($id)
    {
        $request  = $this->httpClient->get("campaigns/{$id}");
        $response = $request->send();

        if (!$response->isOk) {
            $this->handleError($response);
        }

        return $response->getData();
    }

}