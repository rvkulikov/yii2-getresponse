<?php
namespace rvkulikov\yii2\getResponse\modules\customFields;

use rvkulikov\yii2\getResponse\interfaces\GRPaginationInterface;
use yii\base\Model;

/**
 * Class GRGetCustomFieldsOptions
 *
 * @package rvkulikov\yii2\getResponse\modules\customFields
 *
 * @author  Roman Kulikov <r.v.kulikov@yandex.ru>
 */
class GRGetCustomFieldsOptions extends Model implements GRPaginationInterface
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