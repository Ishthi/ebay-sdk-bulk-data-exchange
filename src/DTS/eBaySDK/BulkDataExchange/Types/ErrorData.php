<?php
/**
 * Copyright 2014 David T. Sadler
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace DTS\eBaySDK\BulkDataExchange\Types;

/**
 *
 * @property \DTS\eBaySDK\BulkDataExchange\Enums\ErrorCategory $category
 * @property string $domain
 * @property integer $errorId
 * @property string $exceptionId
 * @property string $message
 * @property \DTS\eBaySDK\BulkDataExchange\Types\ErrorParameter[] $parameter
 * @property \DTS\eBaySDK\BulkDataExchange\Enums\ErrorSeverity $severity
 * @property string $subdomain
 */
class ErrorData extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'category' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'category'
        ),
        'domain' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'domain'
        ),
        'errorId' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'errorId'
        ),
        'exceptionId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'exceptionId'
        ),
        'message' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'message'
        ),
        'parameter' => array(
            'type' => 'DTS\eBaySDK\BulkDataExchange\Types\ErrorParameter',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'parameter'
        ),
        'severity' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'severity'
        ),
        'subdomain' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'subdomain'
        )
    );

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = array())
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'http://www.ebay.com/marketplace/services';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
