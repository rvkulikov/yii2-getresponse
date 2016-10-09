<?php
namespace rvkulikov\yii2\getResponse\models;

use yii\base\Model;

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
}