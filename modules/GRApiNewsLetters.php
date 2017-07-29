<?php
namespace rvkulikov\yii2\getResponse\modules;

use rvkulikov\yii2\getResponse\modules\newsLetters\GRGetNewsLettersOptions;

/**
 * Class GRApiNewsLetters
 *
 * @package rvkulikov\yii2\getResponse\modules
 *
 * @author  Roman Kulikov <r.v.kulikov@yandex.ru>
 */
class GRApiNewsLetters extends GRApiBase
{
    /**
     * @param GRGetNewsLettersOptions|null $options
     *
     * @return mixed[]
     */
    public function getNewsLetters(GRGetNewsLettersOptions $options = null)
    {
        $request  = $this->httpClient->get('newsletters', $options ? $options->toArray() : null);
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
    public function getNewsLetter($id)
    {
        $request  = $this->httpClient->get("newsletters/{$id}");
        $response = $request->send();

        if (!$response->isOk) {
            $this->handleError($response);
        }

        return $response->getData();
    }
}