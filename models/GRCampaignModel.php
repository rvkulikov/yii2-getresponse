<?php
namespace rvkulikov\yii2\getResponse\models;

use yii\base\Model;

/**
 * Class GRCampaignModel
 *
 * @package rvkulikov\yii2\getResponse\models
 *
 * @author  Roman Kulikov <r.v.kulikov@yandex.ru>
 */
class GRCampaignModel extends Model
{
    public $campaignId;
    public $href;
    public $name;
    public $languageCode;
    public $isDefault;
    public $createdOn;
    public $confirmation;
    public $profile;
    public $postal;
    public $optinTypes;
    public $subscriberNotifications;
}