<?php

namespace Ebay\Commerce\Translation;

use OpenAPI\Runtime\ResponseTypes as AbstractResponseTypes;

class ResponseTypes extends AbstractResponseTypes
{
    public static $types = [
        'translate' => [
            '200.' => 'Ebay\\Commerce\\Translation\\Model\\TranslateResponse',
        ],
    ];
}
