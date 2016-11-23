<?php
namespace rvkulikov\yii2\getResponse\modules\searchContacts;

use yii\base\Model;

/**
 * Class GRUpdateSearchContactOptions
 *
 * @package rvkulikov\yii2\getResponse\modules\searchContacts
 *
 * @author  Roman Kulikov <r.v.kulikov@yandex.ru>
 */
class GRUpdateSearchContactOptions extends Model
{
    public $name;
    public $subscribersType;
    public $sectionLogicOperator;
    public $section;
}