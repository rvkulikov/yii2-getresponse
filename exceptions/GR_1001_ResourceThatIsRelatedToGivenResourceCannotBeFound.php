<?php
namespace rvkulikov\yii2\getResponse\exceptions;

/**
 * Class GR1001ResourceThatIsRelatedToGivenResourceCannotBeFound
 *
 * @package rvkulikov\yii2\getResponse\exceptions
 *
 * @author  Roman Kulikov <r.v.kulikov@yandex.ru>
 */
class GR_1001_ResourceThatIsRelatedToGivenResourceCannotBeFound extends GRBaseException
{
    public $code = 1001;

    /**
     * @return string
     */
    public function getName()
    {
        return 'Resource that is related to given resource cannot be found';
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return <<<TXT
Some of our resources are connected to other resources - you cannot get one without the other. 
If in your requests you will specify id of that related resources that will be invalid or not existing, 
then we cannot fulfill the request and this response is our way to notify you about it.

Common examples of this error are:

* creating a new newsletter using invalid campaign;
* searching for valid clicktractId but using wrong autoresponder;
* adding contact with non existent custom-field.
TXT;
    }

}