<?php
namespace rvkulikov\yii2\getResponse\modules\newsLetters;

use yii\base\Model;

/**
 * Class GRGetNewsLettersOptions
 *
 * @package rvkulikov\yii2\getResponse\modules\newsLetters
 *
 * @author  Roman Kulikov <r.v.kulikov@yandex.ru>
 */
class GRGetNewsLettersOptions extends Model
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