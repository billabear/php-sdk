<?php
/**
 * SubscriptionIdCancelBody
 *
 * PHP version 5
 *
 * @category Class
 * @package  BillaBear
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * BillaBear
 *
 * The REST API provided by BillaBear
 *
 * OpenAPI spec version: 1.0.0
 * Contact: support@billabear.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.56
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BillaBear\Model;

use \ArrayAccess;
use \BillaBear\ObjectSerializer;

/**
 * SubscriptionIdCancelBody Class Doc Comment
 *
 * @category Class
 * @package  BillaBear
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SubscriptionIdCancelBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'subscriptionId_cancel_body';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'when' => 'string',
        'refund_type' => 'string',
        'date' => '\DateTime',
        'comment' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'when' => null,
        'refund_type' => null,
        'date' => 'date',
        'comment' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'when' => 'when',
        'refund_type' => 'refund_type',
        'date' => 'date',
        'comment' => 'comment'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'when' => 'setWhen',
        'refund_type' => 'setRefundType',
        'date' => 'setDate',
        'comment' => 'setComment'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'when' => 'getWhen',
        'refund_type' => 'getRefundType',
        'date' => 'getDate',
        'comment' => 'getComment'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    const WHEN_END_OF_RUN = 'end-of-run';
    const WHEN_INSTANTLY = 'instantly';
    const WHEN_SPECIFIC_DATE = 'specific-date';
    const REFUND_TYPE_NONE = 'none';
    const REFUND_TYPE_FULL = 'full';
    const REFUND_TYPE_PRORATE = 'prorate';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getWhenAllowableValues()
    {
        return [
            self::WHEN_END_OF_RUN,
            self::WHEN_INSTANTLY,
            self::WHEN_SPECIFIC_DATE,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRefundTypeAllowableValues()
    {
        return [
            self::REFUND_TYPE_NONE,
            self::REFUND_TYPE_FULL,
            self::REFUND_TYPE_PRORATE,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->container['when'] = isset($data['when']) ? $data['when'] : 'end-of-run';
        $this->container['refund_type'] = isset($data['refund_type']) ? $data['refund_type'] : 'none';
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['when'] === null) {
            $invalidProperties[] = "'when' can't be null";
        }
        $allowedValues = $this->getWhenAllowableValues();
        if (!is_null($this->container['when']) && !in_array($this->container['when'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'when', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['refund_type'] === null) {
            $invalidProperties[] = "'refund_type' can't be null";
        }
        $allowedValues = $this->getRefundTypeAllowableValues();
        if (!is_null($this->container['refund_type']) && !in_array($this->container['refund_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'refund_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets when
     *
     * @return string
     */
    public function getWhen()
    {
        return $this->container['when'];
    }

    /**
     * Sets when
     *
     * @param string $when when
     *
     * @return $this
     */
    public function setWhen($when)
    {
        $allowedValues = $this->getWhenAllowableValues();
        if (!in_array($when, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'when', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['when'] = $when;

        return $this;
    }

    /**
     * Gets refund_type
     *
     * @return string
     */
    public function getRefundType()
    {
        return $this->container['refund_type'];
    }

    /**
     * Sets refund_type
     *
     * @param string $refund_type refund_type
     *
     * @return $this
     */
    public function setRefundType($refund_type)
    {
        $allowedValues = $this->getRefundTypeAllowableValues();
        if (!in_array($refund_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'refund_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['refund_type'] = $refund_type;

        return $this;
    }

    /**
     * Gets date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime $date date
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string $comment comment
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
