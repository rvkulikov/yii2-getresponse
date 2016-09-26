<?php
namespace rvkulikov\yii2\getResponse\modules\contacts;

use yii\base\Model;

/**
 * Class GRGetContactsOptions
 *
 * @package rvkulikov\yii2\getResponse\modules\contacts
 *
 * @author  Roman Kulikov <r.v.kulikov@yandex.ru>
 */
class GRGetContactsOptions extends Model
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
    /**
     * @var string
     */
    public $additionalFlags;
}