<?php
/**
 * Index
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Doofinder Management API
 *
 * # Introduction Doofinder's management API allows you to perform the same administrative tasks you can do on your search engines using the doofinder control panel, directly from your code.  You could found here our legacy [Management API V1](https://www.doofinder.com/support/developer/api/management-api).  # Basics ## Endpoint All requests should be done with `https` protocol in our api location.  `https://{search_zone}-api.doofinder.com`  where `{search_zone}` depends on your location, is the geographic zone your search engine is located at. i.e.: eu1. Also, indicates which host to use in your API calls.  ## Authentication  We provide two methods of authentication for our API. In any of theese you need a management api key that you could obtain in our [management control panel](https://www.doofinder.com/admin).  You can generate it in your user account -> Api Keys.  Example of the generated API Key: `eu1-ab46030xza33960aac71a10248489b6c26172f07`  ### API Token You could authenticate with the previous API key in header as a Token. The correct way to authenticate is to send a HTTP Header with the name `Authorization` and the value `Token <API Key>`  For example, for the key shown above:  `Authorization: Token eu1-ab46030xza33960aac71a10248489b6c26172f07`  ### JWT Token (Draft) Also you could authenticate with a JSON Web Token generating jwt keys with your API Key. To authenticate using JWT you need to send a HTTP Header with the name `Authorization` and the value `Bearer <JWT token>`.  For example, with the key shown above:  `Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJuYW1lIjoidGVzdCIsImlhdCI6MTUxNjIzOTAyMn0.QX_3HF-T2-vlvzGDbAzZyc1Cd-J9qROSes3bxlgB4uk`  ## Conventions Along most of the code samples you will find placeholders for some common variable values. They are:  - `{hashid}`: The search engine's unique id. i.e.: d8fdeab7fce96a19d3fc7b0ca7a1e98b - `{index}`: When storing items, they're always stored under a certain \"index\". i.e.: product. - `{token}`: Your personal authentication token obtained in the control panel. - `{uid}`: The Id of a Doofinder User
 *
 * OpenAPI spec version: 2.0
 * Contact: support@doofinder.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.18
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;
use \Swagger\Client\ObjectSerializer;

/**
 * Index Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Index extends UpdateIndex 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Index';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'preset' => 'string',
'name' => 'string',
'datasources' => '\Swagger\Client\Model\DataSources'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'preset' => null,
'name' => null,
'datasources' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes + parent::swaggerTypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats + parent::swaggerFormats();
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'preset' => 'preset',
'name' => 'name',
'datasources' => 'datasources'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'preset' => 'setPreset',
'name' => 'setName',
'datasources' => 'setDatasources'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'preset' => 'getPreset',
'name' => 'getName',
'datasources' => 'getDatasources'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
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

    const PRESET_GENERIC = 'generic';
const PRESET_PRODUCT = 'product';
const PRESET_PAGE = 'page';
const PRESET_CATEGORY = 'category';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPresetAllowableValues()
    {
        return [
            self::PRESET_GENERIC,
self::PRESET_PRODUCT,
self::PRESET_PAGE,
self::PRESET_CATEGORY,        ];
    }


    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['preset'] = isset($data['preset']) ? $data['preset'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['datasources'] = isset($data['datasources']) ? $data['datasources'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['preset'] === null) {
            $invalidProperties[] = "'preset' can't be null";
        }
        $allowedValues = $this->getPresetAllowableValues();
        if (!is_null($this->container['preset']) && !in_array($this->container['preset'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'preset', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
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
     * Gets preset
     *
     * @return string
     */
    public function getPreset()
    {
        return $this->container['preset'];
    }

    /**
     * Sets preset
     *
     * @param string $preset Preset of the Index. One of (generic, product, page, category).
     *
     * @return $this
     */
    public function setPreset($preset)
    {
        $allowedValues = $this->getPresetAllowableValues();
        if (!in_array($preset, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'preset', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['preset'] = $preset;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name of the Index
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets datasources
     *
     * @return \Swagger\Client\Model\DataSources
     */
    public function getDatasources()
    {
        return $this->container['datasources'];
    }

    /**
     * Sets datasources
     *
     * @param \Swagger\Client\Model\DataSources $datasources datasources
     *
     * @return $this
     */
    public function setDatasources($datasources)
    {
        $this->container['datasources'] = $datasources;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
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
