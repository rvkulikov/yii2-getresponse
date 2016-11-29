<?php
namespace rvkulikov\yii2\getResponse\modules\segments;

use yii\base\Model;

/**
 * Class GRGetSearchContactsOptions
 *
 * @package rvkulikov\yii2\getResponse\modules\searchContacts
 *
 * @author  Roman Kulikov <r.v.kulikov@yandex.ru>
 */
class GRGetSegmentsOptions extends Model
{
    /**
     * @var string[]
     */
    public $query;
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