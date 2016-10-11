<?php
namespace rvkulikov\yii2\getResponse\models;

use yii\base\Model;
use yii\helpers\ArrayHelper;

/**
 * Class GRContactModel
 *
 * @package rvkulikov\yii2\getResponse\models
 *
 * @author  Roman Kulikov <r.v.kulikov@yandex.ru>
 */
class GRContactModel extends Model
{
    public $contactId;
    public $href;
    public $campaign;
    public $name;
    public $email;
    public $note;
    public $origin;
    public $dayOfCycle;
    public $createdOn;
    public $changedOn;
    public $geolocation;
    public $timeZone;
    public $ipAddress;
    public $scoring;
    public $tags;
    public $customFieldValues;
    public $activities;

    /**
     * @inheritdoc
     */
    public function setAttributes($values, $safeOnly = true)
    {
        $values = $this->prepareAttributes($values);
        parent::setAttributes($values, $safeOnly);
    }

    /**
     * @param mixed $values
     *
     * @return mixed
     */
    private function prepareAttributes($values)
    {
        $campaign          = ArrayHelper::getValue($values, 'campaign');
        $geolocation       = ArrayHelper::getValue($values, 'geolocation');
        $customFieldValues = ArrayHelper::getValue($values, 'customFieldValues');

        $classNameCampaign    = GRCampaignModel::className();
        $classNameGeolocation = GRGeolocationModel::className();
        $classNameCustomField = GRCustomFieldModel::className();


        if (is_array($campaign)) {
            $values['campaign'] = \Yii::createObject($classNameCampaign, $campaign);
        }

        if (is_array($geolocation)) {
            $values['geolocation'] = \Yii::createObject($classNameGeolocation, $geolocation);
        }

        if (is_array($customFieldValues)) {
            $objectsPool = [];
            foreach ($customFieldValues as $customFieldValue) {
                $objectsPool[] = is_array($customFieldValues)
                    ? \Yii::createObject($classNameCustomField, $customFieldValue)
                    : $customFieldValues;
            }

            $objectsPool = array_filter($objectsPool);

            $values['customFieldValues'] = ArrayHelper::index($objectsPool, 'customFieldId');
        }

        return $values;
    }
}