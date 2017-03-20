<?php
namespace rvkulikov\yii2\getResponse\modules\contacts;

use yii\base\Model;

/**
 * Class GRDeleteContactOptions
 *
 * @package rvkulikov\yii2\getResponse\modules\contacts
 *
 * @author  Roman Kulikov <r.v.kulikov@yandex.ru>
 */
class GRDeleteContactOptions extends Model
{
    public $messageId;
    public $ipAddress;
}