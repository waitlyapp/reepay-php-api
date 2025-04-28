<?php
namespace Reepay\Model;

use \ArrayAccess;

class VippsRecurringTransaction implements ArrayAccess, \JsonSerializable
{
    const DISCRIMINATOR = null;

    const ERROR_STATE_PENDING = 'pending';
    const ERROR_STATE_SOFT_DECLINED = 'soft_declined';
    const ERROR_STATE_HARD_DECLINED = 'hard_declined';
    const ERROR_STATE_PROCESSING_ERROR = 'processing_error';

    protected static $swaggerModelName = 'VippsRecurringTransaction';

    protected static $swaggerTypes = [
        'error' => 'string',
        'ref_transaction' => 'string',
        'error_state' => 'string',
        'acquirer_message' => 'string',
        'vipps_recurring_id' => 'string',
        'vipps_recurring_mandate' => 'object'
    ];

    protected static $swaggerFormats = [
        'error' => null,
        'ref_transaction' => null,
        'error_state' => null,
        'acquirer_message' => null,
        'vipps_recurring_id' => null,
        'vipps_recurring_mandate' => null
    ];

    protected static array $swaggerNullables = [
        'error' => false,
        'ref_transaction' => false,
        'error_state' => false,
        'acquirer_message' => false,
        'vipps_recurring_id' => false,
        'vipps_recurring_mandate' => false
    ];

    protected array $swaggerNullablesSetToNull = [];

    protected static $attributeMap = [
        'error' => 'error',
        'ref_transaction' => 'ref_transaction',
        'error_state' => 'error_state',
        'acquirer_message' => 'acquirer_message',
        'vipps_recurring_id' => 'vipps_recurring_id',
        'vipps_recurring_mandate' => 'vipps_recurring_mandate'
    ];

    protected static $setters = [
        'error' => 'setError',
        'ref_transaction' => 'setRefTransaction',
        'error_state' => 'setErrorState',
        'acquirer_message' => 'setAcquirerMessage',
        'vipps_recurring_id' => 'setVippsRecurringId',
        'vipps_recurring_mandate' => 'setVippsRecurringMandate'
    ];

    protected static $getters = [
        'error' => 'getError',
        'ref_transaction' => 'getRefTransaction',
        'error_state' => 'getErrorState',
        'acquirer_message' => 'getAcquirerMessage',
        'vipps_recurring_id' => 'getVippsRecurringId',
        'vipps_recurring_mandate' => 'getVippsRecurringMandate'
    ];

    protected $container = [];

    public function __construct(array $data = null)
    {
        $this->container['error'] = $data['error'] ?? null;
        $this->container['ref_transaction'] = $data['ref_transaction'] ?? null;
        $this->container['error_state'] = $data['error_state'] ?? null;
        $this->container['acquirer_message'] = $data['acquirer_message'] ?? null;
        $this->container['vipps_recurring_id'] = $data['vipps_recurring_id'] ?? null;
    }

    public function getErrorStateAllowableValues()
    {
        return [
            self::ERROR_STATE_PENDING,
            self::ERROR_STATE_SOFT_DECLINED,
            self::ERROR_STATE_HARD_DECLINED,
            self::ERROR_STATE_PROCESSING_ERROR,
        ];
    }

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

        return $invalid_properties;
    }

    public function valid()
    {
        $allowed_values = $this->getErrorStateAllowableValues();
        return in_array($this->container['error_state'], $allowed_values);
    }

    public function getError()
    {
        return $this->container['error'];
    }

    public function setError($error)
    {
        $this->container['error'] = $error;
        return $this;
    }

    public function getRefTransaction()
    {
        return $this->container['ref_transaction'];
    }

    public function setRefTransaction($ref_transaction)
    {
        $this->container['ref_transaction'] = $ref_transaction;
        return $this;
    }

    public function getErrorState()
    {
        return $this->container['error_state'];
    }

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

    public function getAcquirerMessage()
    {
        return $this->container['acquirer_message'];
    }

    public function setAcquirerMessage($acquirer_message)
    {
        $this->container['acquirer_message'] = $acquirer_message;
        return $this;
    }

    public function getVippsRecurringId()
    {
        return $this->container['vipps_recurring_id'];
    }

    public function setVippsRecurringId($vipps_recurring_id)
    {
        $this->container['vipps_recurring_id'] = $vipps_recurring_id;
        return $this;
    }

    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    public function jsonSerialize()
    {
        return \Reepay\ObjectSerializer::sanitizeForSerialization($this);
    }

    public function __toString()
    {
        return json_encode(\Reepay\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
    }
}
