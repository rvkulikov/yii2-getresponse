<?php
namespace rvkulikov\yii2\getResponse\modules\tags;

use rvkulikov\yii2\getResponse\interfaces\GRPaginationInterface;
use yii\base\Model;

/**
 * Class GRGetTagsOptions
 *
 * @package rvkulikov\yii2\getResponse\modules\tags
 *
 * @author  Roman Kulikov <r.v.kulikov@yandex.ru>
 */
class GRGetTagsOptions extends Model implements GRPaginationInterface
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