<?php
namespace rvkulikov\yii2\getResponse\modules\segments;

use yii\base\Model;

/**
 * Class GRCreateSegmentOptions
 *
 * @package rvkulikov\yii2\getResponse\modules\segments
 *
 * @author  Kulikov Roman <r.v.kulikov@yandex.ru>
 */
class GRCreateSegmentOptions extends Model
{
    public $name;
    public $subscribersType;
    public $sectionLogicOperator;
    public $section;
}