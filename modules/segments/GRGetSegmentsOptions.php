<?php
namespace rvkulikov\yii2\getResponse\modules\segments;

use rvkulikov\yii2\getResponse\interfaces\GRPaginationInterface;
use yii\base\Model;

/**
 * Class GRGetSearchContactsOptions
 *
 * @package rvkulikov\yii2\getResponse\modules\searchContacts
 *
 * @author  Roman Kulikov <r.v.kulikov@yandex.ru>
 */
class GRGetSegmentsOptions extends Model implements GRPaginationInterface
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