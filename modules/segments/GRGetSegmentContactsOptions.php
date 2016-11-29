<?php
namespace rvkulikov\yii2\getResponse\modules\segments;

use yii\base\Model;

/**
 * Class GRGetSearchContactContactsOptions
 *
 * @package rvkulikov\yii2\getResponse\modules\searchContacts
 *
 * @author  Roman Kulikov <r.v.kulikov@yandex.ru>
 */
class GRGetSegmentContactsOptions extends Model
{
    /**
     * @var string[] // todo ensure
     */
    public $query;
    /**
     * @var string|string[] // todo ensure
     */
    public $fields;
    /**
     * @var string[] // todo ensure
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