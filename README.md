## Инициализация компонента

### main.php

```php
<?php
return [
    'components' => [
        'gr'        => [
            'class'   => 'rvkulikov\yii2\getResponse\GRClient',
            'baseUrl' => null,
            'token'   => null,
            'domain'  => null,
            'fields'  => [
                'customFields' => [
                    'foo' => null,
                    'bar' => null,
                ],
            ],
        ],
    ]
];
```

### main-local.php

```php
<?php
return [
    'components' => [
        'gr'        => [
            'baseUrl' => 'https://api3.getresponse360.pl/v3',
            'token'   => 'token',
            'domain'  => 'domain.com',
            'fields'  => [
                'customFields' => [
                    'foo' => 'value1',
                    'bar' => 'value2',
                ],
            ],
        ],
    ]
];
```

## Использование

```php
<?php
$grClient = \Yii::$app->gr;
$campaign = $grClient->getCampaigns()->getCampaign('<id>');
\yii\helpers\VarDumper::dump($campaign);
?>
```