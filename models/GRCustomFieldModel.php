<?php
namespace rvkulikov\yii2\getResponse\models;

use yii\base\Model;

/**
 * Class GRCustomFieldModel
 *
 * @package rvkulikov\yii2\getResponse\models
 *
 * @author  Roman Kulikov <r.v.kulikov@yandex.ru>
 */
class GRCustomFieldModel extends Model
{
    public $customFieldId;
    public $name;
    public $fieldType;
    public $valueType;
    public $type;
    public $hidden;
    public $values;
}