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
     * @param integer $value
     */
    public function setPerPage($value);

    /**
     * @return integer
     */
    public function getPerPage();
}