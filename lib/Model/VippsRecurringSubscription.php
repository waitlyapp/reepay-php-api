<?php
namespace Reepay\Model;

use \ArrayAccess;

/**
 * VippsRecurringSubscription Class Doc Comment
 *
 * @category    Class
 * @package     Reepay
 */
class VippsRecurringSubscription implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     * @var string
     */
    protected static $swaggerModelName = 'VippsRecurringSubscription';

    /**
     * Array of property to type mappings. Used for (de)serialization
     * @var string[]
     */
    protected static $swaggerTypes = [
        'merchant_serial_number' => 'string',
        'currency' => 'string',
        'minimum_user_age' => 'int',
        'vipps_configuration_settings' => 'array<string,object>'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     * @var string[]
     */
    protected static $swaggerFormats = [
        'merchant_serial_number' => null,
        'currency' => null,
        'minimum_user_age' => 'int32',
        'vipps_configuration_settings' => null
    ];

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'merchant_serial_number' => 'merchantSerialNumber',
        'currency' => 'currency',
        'minimum_user_age' => 'minimumUserAge',
        'vipps_configuration_settings' => 'vippsConfigurationSettings'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'merchant_serial_number' => 'setMerchantSerialNumber',
        'currency' => 'setCurrency',
        'minimum_user_age' => 'setMinimumUserAge',
        'vipps_configuration_settings' => 'setVippsConfigurationSettings'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'merchant_serial_number' => 'getMerchantSerialNumber',
        'currency' => 'getCurrency',
        'minimum_user_age' => 'getMinimumUserAge',
        'vipps_configuration_settings' => 'getVippsConfigurationSettings'
    ];

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
        $this->container['merchant_serial_number'] = $data['merchant_serial_number'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['minimum_user_age'] = $data['minimum_user_age'] ?? null;
        $this->container['vipps_configuration_settings'] = $data['vipps_configuration_settings'] ?? null;
    }

    public function setMerchantSerialNumber($merchantSerialNumber)
    {
        $this->container['merchant_serial_number'] = $merchantSerialNumber;

        return $this;
    }

    public function getMerchantSerialNumber()
    {
        return $this->container['merchant_serial_number'];
    }

    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    public function getCurrency()
    {
        return $this->container['currency'];
    }

    public function setMinimumUserAge($minimumUserAge)
    {
        $this->container['minimum_user_age'] = $minimumUserAge;

        return $this;
    }

    public function getMinimumUserAge()
    {
        return $this->container['minimum_user_age'];
    }

    public function setVippsConfigurationSettings($vippsConfigurationSettings)
    {
        $this->container['vipps_configuration_settings'] = $vippsConfigurationSettings;

        return $this;
    }

    public function getVippsConfigurationSettings()
    {
        return $this->container['vipps_configuration_settings'];
    }

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

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
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
        return $this->container[$offset] ?? null;
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
}
