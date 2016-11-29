<?php
namespace rvkulikov\yii2\getResponse\modules\segments;

use yii\base\Model;

/**
 * Class GRUpdateSearchContactOptions
 *
 * @package rvkulikov\yii2\getResponse\modules\searchContacts
 *
 * @author  Roman Kulikov <r.v.kulikov@yandex.ru>
 */
class GRUpdateSegmentOptions extends Model
{
    public $name;
    public $subscribersType;
    public $sectionLogicOperator;
    public $section;
}