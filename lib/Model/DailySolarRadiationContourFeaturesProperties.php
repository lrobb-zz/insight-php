<?php
/**
 * DailySolarRadiationContourFeaturesProperties
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * SkyWise Insight API (Beta)
 *
 * The SkyWise Insight API is an interface to WDT’s Weather as a Service® analytics platform,  allowing application developers to leverage high quality weather information  for applications, and products. The SkyWise Insight API provides access to  historical, current, and forecast data for any region of interest,  such as an agriculture field, urban area, or utility service area.  API response formats can include time-series, summaries, or contours.
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * DailySolarRadiationContourFeaturesProperties Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class DailySolarRadiationContourFeaturesProperties implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'DailySolarRadiationContourFeatures_properties';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'solar_radiation' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'solar_radiation' => 'double'
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
        'solar_radiation' => 'solarRadiation'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'solar_radiation' => 'setSolarRadiation'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'solar_radiation' => 'getSolarRadiation'
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
        $this->container['solar_radiation'] = isset($data['solar_radiation']) ? $data['solar_radiation'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

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

        return true;
    }


    /**
     * Gets solar_radiation
     * @return double
     */
    public function getSolarRadiation()
    {
        return $this->container['solar_radiation'];
    }

    /**
     * Sets solar_radiation
     * @param double $solar_radiation
     * @return $this
     */
    public function setSolarRadiation($solar_radiation)
    {
        $this->container['solar_radiation'] = $solar_radiation;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
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
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}

