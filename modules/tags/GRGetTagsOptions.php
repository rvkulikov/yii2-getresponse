<?php
namespace rvkulikov\yii2\getResponse\modules\tags;

use yii\base\Model;

/**
 * Class GRGetTagsOptions
 *
 * @package rvkulikov\yii2\getResponse\modules\tags
 *
 * @author  Roman Kulikov <r.v.kulikov@yandex.ru>
 */
class GRGetTagsOptions extends Model
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