<?php
namespace rvkulikov\yii2\getResponse\exceptions;

/**
 * Class GR_1008_ThereIsAnotherResourceWithTheSameValueOfUniqueProperty
 *
 * @package rvkulikov\yii2\getResponse\exceptions
 *
 * @author  Roman Kulikov <r.v.kulikov@yandex.ru>
 */
class GR_1008_ThereIsAnotherResourceWithTheSameValueOfUniqueProperty extends GRBaseException
{
    public $code = 1008;

    /**
     * @return string
     */
    public function getName()
    {
        return 'There is another resource with the same value of unique property';
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return <<<TXT
We cannot add resource because there is already resource with the same unique properties. This can be:

* autoresponder name;
* contact email in campaign;
* campaign name;
* custom-field name;
* goal name;
* goal url;
* goal update when;
* goal profile name;
* search-contacts name;
* suppression name.
TXT;
    }
}