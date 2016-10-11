<?php
namespace rvkulikov\yii2\getResponse\models;

use yii\base\Model;

/**
 * Class GRGeolocationModel
 *
 * @package rvkulikov\yii2\getResponse\models
 *
 * @author  Roman Kulikov <r.v.kulikov@yandex.ru>
 */
class GRGeolocationModel extends Model
{
    public $latitude;
    public $longitude;
    public $continentCode;
    public $countryCode;
    public $region;
    public $postalCode;
    public $dmaCode;
    public $city;
}