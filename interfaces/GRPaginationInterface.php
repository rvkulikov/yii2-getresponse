<?php
namespace rvkulikov\yii2\getResponse\interfaces;

/**
 * Class GRPaginationInterface
 *
 * @package rvkulikov\yii2\getResponse\interfaces
 *
 * @property integer $perPage
 *
 * @author  Roman Kulikov <r.v.kulikov@yandex.ru>
 */
interface GRPaginationInterface
{
    /**
     * @const integer
     */
    const PER_PAGE_MAX = 500;

    /**
     * @param integer $value
     */
    public function setPerPage($value);

    /**
     * @return integer
     */
    public function getPerPage();
}