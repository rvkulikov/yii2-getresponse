<?php
namespace rvkulikov\yii2\getResponse\exceptions;

use yii\base\Exception;
use yii\helpers\ArrayHelper;
use yii\helpers\VarDumper;
use yii\httpclient\Response;

/**
 * Class GRBaseException
 *
 * @package rvkulikov\yii2\getResponse\exceptions
 *
 * @author  Roman Kulikov <r.v.kulikov@yandex.ru>
 */
class GRBaseException extends Exception
{
    public $code;
    public $httpCode;
    public $codeDescription;
    public $message;
    public $moreInfo;
    public $context;
    public $uuid;

    /**
     * @var string[]
     */
    public static $exceptionsMap = [
        1    => 'rvkulikov\yii2\getResponse\exceptions\GR_0001_InternalError',
        1000 => 'rvkulikov\yii2\getResponse\exceptions\GR_1000_GeneralErrorOfValidationProcess',
        1001 => 'rvkulikov\yii2\getResponse\exceptions\GR_1001_ResourceThatIsRelatedToGivenResourceCannotBeFound',
        1002 => 'rvkulikov\yii2\getResponse\exceptions\GR_1002_ResourceStateForbidsThatKindOfAction',
        1003 => 'rvkulikov\yii2\getResponse\exceptions\GR_1003_ParameterHasWrongFormat',
        1004 => 'rvkulikov\yii2\getResponse\exceptions\GR_1004_WrongNumberOfValuesForMultipleValuesParameter',
        1005 => 'rvkulikov\yii2\getResponse\exceptions\GR_1005_ParameterHasEmptyValue',
        1006 => 'rvkulikov\yii2\getResponse\exceptions\GR_1006_ParameterHasWrongType',
        1007 => 'rvkulikov\yii2\getResponse\exceptions\GR_1007_ParameterValueHasIncorrectLength',
        1008 => 'rvkulikov\yii2\getResponse\exceptions\GR_1008_ThereIsAnotherResourceWithTheSameValueOfUniqueProperty',
        1009 => 'rvkulikov\yii2\getResponse\exceptions\GR_1009_ResourceYouTriedToManipulateIsUsedSomewhereAndThisManipulationIsForbidden',
        1010 => 'rvkulikov\yii2\getResponse\exceptions\GR_1010_ErrorInExternalResources',
        1011 => 'rvkulikov\yii2\getResponse\exceptions\GR_1011_MessageIsAlreadyInSendingMode',
        1012 => 'rvkulikov\yii2\getResponse\exceptions\GR_1012_ErrorDuringParsingMessageContent',
        1013 => 'rvkulikov\yii2\getResponse\exceptions\GR_1013_ResourceWithGivenIDCannotBeFound',
        1014 => 'rvkulikov\yii2\getResponse\exceptions\GR_1014_ProblemDuringAuthenticationProcess',
        1015 => 'rvkulikov\yii2\getResponse\exceptions\GR_1015_TooManyRequestToAPI',
        1016 => 'rvkulikov\yii2\getResponse\exceptions\GR_1016_APIWasTemporarilyBlocked',
        1017 => 'rvkulikov\yii2\getResponse\exceptions\GR_1017_APIWasPermanentlyBlocked',
        1018 => 'rvkulikov\yii2\getResponse\exceptions\GR_1018_YourIPWasBlocked',
        1021 => 'rvkulikov\yii2\getResponse\exceptions\GR_1021_ThereIsSomethingWrongWithYourRequestHeaders',
        1023 => 'rvkulikov\yii2\getResponse\exceptions\GR_1023_AccessForbidden',
    ];

    /**
     * @param Response $response
     *
     * @return GRBaseException
     */
    public static function buildExceptionViaResponse(Response $response)
    {
        $data  = $response->getData();
        $class = ArrayHelper::getValue(self::$exceptionsMap, $data['code'], __CLASS__);

        /** @var GRBaseException $exception */
        $exception = \Yii::createObject([
            'class'           => $class,
            'httpCode'        => $response->statusCode,
            'codeDescription' => $data['codeDescription'],
            'moreInfo'        => $data['moreInfo'],
            'context'         => $data['context'],
            'uuid'            => $data['uuid'],
        ], [$data['message'], $data['code'], null]);

        $exception->message = implode(';', [$exception->message, VarDumper::dumpAsString($exception->context)]);

        /** @noinspection PhpIncompatibleReturnTypeInspection */
        return $exception;
    }
}