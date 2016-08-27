<?php
namespace rvkulikov\yii2\getResponse\exceptions;

/**
 * Class ResourceStateForbidsThatKindOfAction
 *
 * @package rvkulikov\yii2\getResponse\exceptions
 *
 * @author  Roman Kulikov <r.v.kulikov@yandex.ru>
 */
class GR_1002_ResourceStateForbidsThatKindOfAction extends GRBaseException
{
    public $code = 1002;

    /**
     * @return string
     */
    public function getName()
    {
        return 'Resource state forbids that kind of action';
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return <<<TXT
Whatever you tried to do, this cannot be accomplished. There are many reasons:

* You tried to add contact that is already on your blacklist;
* You tried to add contact, but his email address is invalid (domain don't exist or domain don't have this email registered);
* You tried to add contact that was previously deleted or bounced;
* You tried to send draft but given message is not a draft;
* You tried to set not active from-field as a default one.
TXT;
    }

}