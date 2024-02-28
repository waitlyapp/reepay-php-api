<?php
/**
 * MpsTransaction
 *
 * PHP version 5
 *
 * @category Class
 * @package  Reepay
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Reepay API
 *
 * REST API to manage Reepay resources
 *
 * OpenAPI spec version: 1
 *
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Reepay\Model;

use \ArrayAccess;

/**
 * MpsTransaction Class Doc Comment
 *
 * @category    Class
 * @package     Reepay
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class MpsTransaction implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'MpsTransaction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'error' => 'string',
        'ref_transaction' => 'string',
        'error_state' => 'string',
        'acquirer_message' => 'string',
        'mps_id' => 'string',
        'mps_subscription' => '\Reepay\Model\MpsSubscription',
        'mps_payment_type' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'error' => null,
        'ref_transaction' => null,
        'error_state' => null,
        'acquirer_message' => null,
        'mps_id' => null,
        'mps_subscription' => null,
        'mps_payment_type' => null,
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'error' => 'error',
        'ref_transaction' => 'ref_transaction',
        'error_state' => 'error_state',
        'acquirer_message' => 'acquirer_message',
        'mps_id' => 'mps_id',
        'mps_subscription' => 'mps_subscription',
        'mps_payment_type' => 'mps_payment_type',
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'error' => 'setError',
        'ref_transaction' => 'setRefTransaction',
        'error_state' => 'setErrorState',
        'acquirer_message' => 'setAcquirerMessage',
        'mps_id' => 'setMpsId',
        'mps_subscription' => 'setMpsSubscription',
        'mps_payment_type' => 'setMpsPaymentType',
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'error' => 'getError',
        'ref_transaction' => 'getRefTransaction',
        'error_state' => 'getErrorState',
        'acquirer_message' => 'getAcquirerMessage',
        'mps_id' => 'getMpsId',
        'mps_subscription' => 'getMpsSubscription',
        'mps_payment_type' => 'getMpsPaymentType',
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    const ERROR_STATE_PENDING = 'pending';
    const ERROR_STATE_SOFT_DECLINED = 'soft_declined';
    const ERROR_STATE_HARD_DECLINED = 'hard_declined';
    const ERROR_STATE_PROCESSING_ERROR = 'processing_error';
    const MPS_PAYMENT_TYPE_REGULAR = 'regular';
    const MPS_PAYMENT_TYPE_ONE_OFF_CIT = 'one_off_cit';
    const MPS_PAYMENT_TYPE_ONE_OFF_MIT = 'one_off_mit';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getErrorStateAllowableValues()
    {
        return [
            self::ERROR_STATE_PENDING,
            self::ERROR_STATE_SOFT_DECLINED,
            self::ERROR_STATE_HARD_DECLINED,
            self::ERROR_STATE_PROCESSING_ERROR,
        ];
    }

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getMpsPaymentTypeAllowableValues()
    {
        return [
            self::MPS_PAYMENT_TYPE_REGULAR,
            self::MPS_PAYMENT_TYPE_ONE_OFF_CIT,
            self::MPS_PAYMENT_TYPE_ONE_OFF_MIT,
        ];
    }

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['error'] = isset($data['error']) ? $data['error'] : null;
        $this->container['ref_transaction'] = isset($data['ref_transaction']) ? $data['ref_transaction'] : null;
        $this->container['error_state'] = isset($data['error_state']) ? $data['error_state'] : null;
        $this->container['acquirer_message'] = isset($data['acquirer_message']) ? $data['acquirer_message'] : null;
        $this->container['mps_id'] = isset($data['mps_id']) ? $data['mps_id'] : null;
        $this->container['mps_subscription'] = isset($data['mps_subscription']) ? $data['mps_subscription'] : null;
        $this->container['mps_payment_type'] = isset($data['mps_payment_type']) ? $data['mps_payment_type'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = $this->getErrorStateAllowableValues();
        if (!in_array($this->container['error_state'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'error_state', must be one of '%s' got value '%s'",
                implode("', '", $allowed_values),
                $this->container['error_state']
            );
        }
        if ($this->container['mps_id'] === null) {
            $invalid_properties[] = "'mps_id' can't be null";
        }
        if ($this->container['mps_subscription'] === null) {
            $invalid_properties[] = "'mps_subscription' can't be null";
        }
        if ($this->container['mps_payment_type'] === null) {
            $invalid_properties[] = "'mps_payment_type' can't be null";
        }
        $allowed_values = $this->getMpsPaymentTypeAllowableValues();
        if (!in_array($this->container['mps_payment_type'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'mps_payment_type', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        $allowed_values = $this->getErrorStateAllowableValues();
        if (!in_array($this->container['error_state'], $allowed_values)) {
            return false;
        }
        if ($this->container['mps_id'] === null) {
            return false;
        }
        if ($this->container['mps_subscription'] === null) {
            return false;
        }
        if ($this->container['mps_payment_type'] === null) {
            return false;
        }
        return true;
    }

    /**
     * Gets error
     * @return string
     */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
     * Sets error
     * @param string $error Error code if failed. See [transaction errors](https://docs.reepay.com/api/#transaction-errors).
     * @return $this
     */
    public function setError($error)
    {
        $this->container['error'] = $error;

        return $this;
    }

    /**
     * Gets ref_transaction
     * @return string
     */
    public function getRefTransaction()
    {
        return $this->container['ref_transaction'];
    }

    /**
     * Sets ref_transaction
     * @param string $ref_transaction Id of a possible referenced transaction
     * @return $this
     */
    public function setRefTransaction($ref_transaction)
    {
        $this->container['ref_transaction'] = $ref_transaction;

        return $this;
    }

    /**
     * Gets error_state
     * @return string
     */
    public function getErrorState()
    {
        return $this->container['error_state'];
    }

    /**
     * Sets error_state
     * @param string $error_state Error state if failed: `pending`, `soft_declined`, `hard_declined` or `processing_error`
     * @return $this
     */
    public function setErrorState($error_state)
    {
        $allowed_values = $this->getErrorStateAllowableValues();
        if (!is_null($error_state) && !in_array($error_state, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'error_state', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['error_state'] = $error_state;

        return $this;
    }

    /**
     * Gets acquirer_message
     * @return string
     */
    public function getAcquirerMessage()
    {
        return $this->container['acquirer_message'];
    }

    /**
     * Sets acquirer_message
     * @param string $acquirer_message Acquirer message in case of error
     * @return $this
     */
    public function setAcquirerMessage($acquirer_message)
    {
        $this->container['acquirer_message'] = $acquirer_message;

        return $this;
    }

    /**
     * Gets mps_id
     * @return string
     */
    public function getMpsId()
    {
        return $this->container['mps_id'];
    }

    /**
     * Sets mps_id
     * @param string $mps_id MobilePay Subscriptions id
     * @return $this
     */
    public function setMpsId($mps_id)
    {
        $this->container['mps_id'] = $mps_id;

        return $this;
    }

    /**
     * Gets mps_subscription
     * @return string
     */
    public function getMpsSubscription()
    {
        return $this->container['mps_subscription'];
    }

    /**
     * Sets mps_subscription
     * @param string $mps_subscription MobilePay Subscriptions subscription
     * @return $this
     */
    public function setMpsSubscription($mps_subscription)
    {
        $this->container['mps_subscription'] = $mps_subscription;

        return $this;
    }

    /**
     * Gets mps_payment_type
     * @return string
     */
    public function getMpsPaymentType()
    {
        return $this->container['mps_payment_type'];
    }

    /**
     * Sets mps_payment_type
     * @param string $mps_payment_type MobilePay Subscriptions payment_type
     * @return $this
     */
    public function setMpsPaymentType($mps_payment_type)
    {
        $allowed_values = $this->getMpsPaymentTypeAllowableValues();
        if (!in_array($mps_payment_type, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'mps_payment_type', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['mps_payment_type'] = $mps_payment_type;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Reepay\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Reepay\ObjectSerializer::sanitizeForSerialization($this));
    }
}


