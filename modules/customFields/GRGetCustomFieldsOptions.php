<?php
namespace rvkulikov\yii2\getResponse\modules\customFields;

use yii\base\Model;

/**
 * Class GRGetCustomFieldsOptions
 *
 * @package rvkulikov\yii2\getResponse\modules\customFields
 *
 * @author  Roman Kulikov <r.v.kulikov@yandex.ru>
 */
class GRGetCustomFieldsOptions extends Model
{
    /**
     * @var string|string[]
     */
    public $fields;
    /**
     * @var string[]
     */
    public $sort;
    /**
     * @var integer
     */
    public $page;
    /**
     * @var integer
     */
    public $perPage;
}