<?php
namespace rvkulikov\yii2\getResponse\modules\contacts;

use yii\base\Model;

/**
 * Class GRUpdateContactOptions
 *
 * @package rvkulikov\yii2\getResponse\modules\contacts
 *
 * @author  Roman Kulikov <r.v.kulikov@yandex.ru>
 */
class GRUpdateContactOptions extends Model
{
    public $name;
    public $note;
    public $dayOfCycle;
    public $tags;
    public $customFieldValues;
    public $ipAddress;
}