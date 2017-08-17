<?php
namespace rvkulikov\yii2\getResponse\modules;

use rvkulikov\yii2\getResponse\modules\segments\GRCreateSegmentOptions;
use rvkulikov\yii2\getResponse\modules\segments\GRGetSegmentContactsOptions;
use rvkulikov\yii2\getResponse\modules\segments\GRGetSegmentsOptions;
use rvkulikov\yii2\getResponse\modules\segments\GRUpdateSegmentOptions;

/**
 * Class GRApiSegments
 *
 * @package rvkulikov\yii2\getResponse\modules
 *
 * @author  Roman Kulikov <r.v.kulikov@yandex.ru>
 */
class GRApiSegments extends GRApiBase
{
    /**
     * @param GRGetSegmentsOptions $options
     *
     * @return mixed[]
     */
    public function getSegments(GRGetSegmentsOptions $options = null)
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
    public function getSegment($id)
    {
        $request  = $this->httpClient->get("search-contacts/{$id}");
        $response = $request->send();

        if (!$response->isOk) {
            $this->handleError($response);
        }

        return $response->getData();
    }

    /**
     * @param string                      $id
     * @param GRGetSegmentContactsOptions $options
     *
     * @return \mixed[]
     */
    public function getSegmentContacts($id, GRGetSegmentContactsOptions $options = null)
    {
        $request  = $this->httpClient->get("search-contacts/{$id}/contacts", $options ? $options->toArray() : null);
        $response = $request->send();

        if (!$response->isOk) {
            $this->handleError($response);
        }

        return $response->getData();
    }

    /**
     * @param GRCreateSegmentOptions $options
     *
     * @return mixed[]
     */
    public function createSegment(GRCreateSegmentOptions $options)
    {
        $request  = $this->httpClient->post("search-contacts", $options->toArray());
        $response = $request->send();

        if (!$response->isOk) {
            $this->handleError($response);
        }

        return $response->getData();
    }


    /**
     * @param string                 $id
     * @param GRUpdateSegmentOptions $options
     *
     * @return mixed[]
     */
    public function updateSegment($id, GRUpdateSegmentOptions $options)
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
    public function deleteSegment($id)
    {
        $request  = $this->httpClient->delete("search-contacts/{$id}");
        $response = $request->send();

        if (!$response->isOk) {
            $this->handleError($response);
        }

        return $response->getData();
    }
}