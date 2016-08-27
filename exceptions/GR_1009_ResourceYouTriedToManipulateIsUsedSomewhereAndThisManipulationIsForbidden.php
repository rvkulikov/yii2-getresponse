<?php
namespace rvkulikov\yii2\getResponse\exceptions;

/**
 * Class GR_1009_ResourceYouTriedToManipulateIsUsedSomewhereAndThisManipulationIsForbidden
 *
 * @package rvkulikov\yii2\getResponse\exceptions
 *
 * @author  Roman Kulikov <r.v.kulikov@yandex.ru>
 */
class GR_1009_ResourceYouTriedToManipulateIsUsedSomewhereAndThisManipulationIsForbidden extends GRBaseException
{
    public $code = 1009;

    /**
     * @return string
     */
    public function getName()
    {
        return 'Resource you tried to manipulate is used somewhere and this manipulation is forbidden';
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return <<<TXT
Sometimes it is forbidden to edit some resource because it is used somewhere else. Examples:

* remove custom-field when it is used on webforms;
* remove custom-field when it is used in search-contacts (segmentation);
* remove from-field that is used;
* removing goal when it is used in search-contacts (segmentation);
* removing goal-profile when it is used in search-contacts (segmentation);
* removing newsletter when it is used in search-contacts (segmentation);
* removing search-contacts (segments) when it is used as a target for sending messages.
TXT;
    }
}