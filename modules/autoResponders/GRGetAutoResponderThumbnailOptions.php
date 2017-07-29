<?php
namespace rvkulikov\yii2\getResponse\modules\autoResponders;

use yii\base\Model;

/**
 * Class GRGetAutoResponderThumbnailOptions
 *
 * @package rvkulikov\yii2\getResponse\modules\autoResponders
 *
 * @author  Kulikov Roman <r.v.kulikov@yandex.ru>
 */
class GRGetAutoResponderThumbnailOptions extends Model
{
    const SIZE_DEFAULT = 'default';
    const SIZE_SMALL   = 'small';

    /**
     * @var string
     */
    public $size;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['size', 'default', 'value' => self::SIZE_DEFAULT],
        ];
    }
}