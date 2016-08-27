<?php
namespace rvkulikov\yii2\getResponse\models\contact;

use yii\base\Model;

/**
 * Class Contact
 *
 * @package rvkulikov\yii2\getResponse\models\contact
 *
 * @author  Roman Kulikov <r.v.kulikov@yandex.ru>
 */
class Contact extends Model
{
    public $contactId;
    public $href;
    public $name;
    public $email;
    public $note;
    public $origin;
    public $dayOfCycle;
    public $createdOn;
    public $changedOn;
    public $campaign;
    public $geolocation;
    public $timeZone;
    public $ipAddress;
    public $tags;
    public $customFieldValues;
    public $activities;
    public $scoring;
}