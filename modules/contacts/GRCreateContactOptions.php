<?php
namespace rvkulikov\yii2\getResponse\modules\contacts;

use yii\base\Model;

/**
 * Class GRCreateContactOptions
 *
 * @package rvkulikov\yii2\getResponse\modules\contacts
 *
 * @author  Roman Kulikov <r.v.kulikov@yandex.ru>
 */
class GRCreateContactOptions extends Model
{
    public $name;
    public $email;
    public $dayOfCycle;
    public $campaign;
    public $customFieldValues;
    public $ipAddress;
    public $tags;
}
