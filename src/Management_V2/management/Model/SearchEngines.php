<?php
/**
 * SearchEngines
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
 * # Introduction  Doofinder's management API allows you to perform some of the administrative tasks you can do on your search engines using the doofinder control panel, directly from your code.  # Basics  ## Endpoint  All requests should be done with `https` protocol in our API location.  `https://{search_zone}-api.doofinder.com`  where `{search_zone}` depends on your location, is the geographic zone your search engine is located at. i.e.: eu1. Also, indicates which host to use in your API calls.  ## Authentication  We provide two methods of authentication for our API. In any of these you need a management API key that you could obtain in our [management control panel](https://www.doofinder.com/admin).  You can generate it in your user account -> API Keys.  Example of a generated API Key: `eu1-ab46030xza33960aac71a10248489b6c26172f07`  ### API Token  You can authenticate with the previous API key in header as a Token. The correct way to authenticate is to send a HTTP Header with the name `Authorization` and the value `Token <API Key>`  For example, for the key shown above:  `Authorization: Token eu1-ab46030xza33960aac71a10248489b6c26172f07`  ### JWT Token (Draft)  Also you can authenticate with a [JSON Web Token](https://jwt.io) generating JWT keys with your API Key. To authenticate using JWT you need to send a HTTP Header with the name `Authorization` and the value `Bearer <JWT token>`.  For example, with the key shown above:  `Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJuYW1lIjoidGVzdCIsImlhdCI6MTUxNjIzOTAyMn0.QX_3HF-T2-vlvzGDbAzZyc1Cd-J9qROSes3bxlgB4uk`  ## Conventions  Along most of the code samples you will find placeholders for some common variable values. They are:  - `{hashid}`: The search engine's unique id. i.e.: d8fdeab7fce96a19d3fc7b0ca7a1e98b - `{index}`: When storing items, they're always stored under a certain \"index\". i.e.: product. - `{token}`: Your personal authentication token obtained in the control panel. - `{uid}`: The Id of a Doofinder User  # Objects  ## Search Engines  A Search Engine is a set of multiple Indices, and some options to configure them. It must contain at least one indice.  A Search Engine can be uniquely identified by the parameter called `hashid`.  A Search Engine can be processed, which means the process of reading the data from the Data Sources (usually an url), indexing the data in a temporary index and finally build the index ready for use.  ## Indices  An Index is a collection of Items, the same way a Search Engine is a collection of Indices. It has options that define the schema used for Items, Data Sources that define where to get the data, and some searching options.  Each Index may also have one temporary index. A temporary index shares the same options of its main index. There are operations to manage temporary indices like create, delete, reindex, etc. The usual flow for a temporary index is create one, index items on it and replace the main index with the temporary one. This way you can reindex your whole data having zero downtime of the search service.  ## Data Sources  A Data Source defines a source of items for indexing. There are many kinds but they are basically a location for taking items for indexing and the most common is just an url with a file. These are the sources that are read when calling a Search Engine processing. An Index does not need a Data Source if you index the items directly using the API.  ## Items  Items are the objects stored in an Index, and the ones returned after executing a search. Items may have an schema (a collection of fields) depending on their Index preset. This way a `product` item has price, category, etc.
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

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * SearchEngines Class Doc Comment
 *
 * @category Class
 * @description A list all of your search engines.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SearchEngines implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SearchEngines';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
            ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
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
            ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
            ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
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
    public function __construct(array $data = null)
    {
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

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
