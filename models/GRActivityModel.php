<?php
namespace rvkulikov\yii2\getResponse\models;

use yii\base\Model;

/**
 * Class GRActivityModel
 *
 * @package rvkulikov\yii2\getResponse\models
 *
 * @author  Roman Kulikov <r.v.kulikov@yandex.ru>
 */
class GRActivityModel extends Model
{
    public $activity;
    public $subject;
    public $createdOn;
    public $previewUrl;
}