<?php
namespace rvkulikov\yii2\getResponse\exceptions;

/**
 * Class GR_1011_MessageIsAlreadyInSendingMode
 *
 * @package rvkulikov\yii2\getResponse\exceptions
 *
 * @author  Roman Kulikov <r.v.kulikov@yandex.ru>
 */
class GR_1011_MessageIsAlreadyInSendingMode extends GRBaseException
{
    public $code = 1011;

    /**
     * @return string
     */
    public function getName()
    {
        return 'Message is already in "sending" mode, you cannot change its properties';
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return <<<TXT
You tried to edit newsletter that is already sending.
TXT;
    }
}