<?php
namespace rvkulikov\yii2\getResponse\exceptions;

/**
 * Class GR_1012_ErrorDuringParsingMessageContent
 *
 * @package rvkulikov\yii2\getResponse\exceptions
 *
 * @author  Roman Kulikov <r.v.kulikov@yandex.ru>
 */
class GR_1012_ErrorDuringParsingMessageContent extends GRBaseException
{
    public $code = 1012;

    /**
     * @return string
     */
    public function getName()
    {
        return 'Error during parsing message content';
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return <<<TXT
Error in the message body. We tried to analyze message body and cannot find one of mandatory word. 
We will try to give you more details in 'context' section in the error response.
TXT;
    }
}