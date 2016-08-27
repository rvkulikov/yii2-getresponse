<?php
namespace rvkulikov\yii2\getResponse\exceptions;

/**
 * Class GR_1010_ErrorInExternalResources
 *
 * @package rvkulikov\yii2\getResponse\exceptions
 *
 * @author  Roman Kulikov <r.v.kulikov@yandex.ru>
 */
class GR_1010_ErrorInExternalResources extends GRBaseException
{
    public $code = 1010;

    /**
     * @return string
     */
    public function getName()
    {
        return 'Error in external resources';
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return <<<TXT
This error related to any external checks we need to do in order to fulfill request. 
If for any reason this external call fails we return this error and try to add some detailed information to 'context' section in the error response. 
One example could be check during GoalProfile creation.
TXT;
    }
}