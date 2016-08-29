<?php
namespace rvkulikov\yii2\getResponse\modules\campaigns;

use yii\base\Model;

/**
 * Class GRGetCampaignsOptions
 *
 * @package rvkulikov\yii2\getResponse\modules\campaigns
 *
 * @author  Roman Kulikov <r.v.kulikov@yandex.ru>
 */
class GRGetCampaignsOptions extends Model
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