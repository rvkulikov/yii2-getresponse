<?php
namespace rvkulikov\yii2\getResponse\models\contact;

use yii\base\Model;

/**
 * Class GeoLocation
 *
 * @package rvkulikov\yii2\getResponse\models\contact
 *
 * @author  Roman Kulikov <r.v.kulikov@yandex.ru>
 */
class GeoLocation extends Model
{
    /** @var float */
    public $latitude;
    /** @var float */
    public $longitude;
    /** @var string */
    public $continentCode;
    /** @var string */
    public $countryCode;
    /** @var string */
    public $region;
    /** @var string */
    public $postalCode;
    /** @var string */
    public $dmaCode;
    /** @var string */
    public $city;
}