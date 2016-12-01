<?php
namespace rvkulikov\yii2\getResponse\modules\contacts;

use rvkulikov\yii2\getResponse\interfaces\GRPaginationInterface;
use yii\base\Model;

/**
 * Class GRGetContactActivitiesOptions
 *
 * @package rvkulikov\yii2\getResponse\modules\contacts
 *
 * @author  Roman Kulikov <r.v.kulikov@yandex.ru>
 */
class GRGetContactActivitiesOptions extends Model implements GRPaginationInterface
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
     * @inheritdoc
     */
    public function getPerPage()
    {
        return $this->perPage ?: self::PER_PAGE_MAX;
    }

    /**
     * @inheritdoc
     */
    public function setPerPage($perPage)
    {
        $this->perPage = $perPage;
    }
}