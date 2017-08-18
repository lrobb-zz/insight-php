<?php
/**
 * DailyProductByAssetData
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
 * DailyProductByAssetData Class Doc Comment
 *
 * @category    Class
 * @description By Asset Response
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class DailyProductByAssetData implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'DailyProductByAssetData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'asset' => 'string',
        'start_date' => '\DateTime',
        'end_date' => '\DateTime',
        'contours' => 'string',
        'unit' => '\Swagger\Client\Model\DegreeDaysByLocationDataUnit',
        'time_series_statistics' => '\Swagger\Client\Model\DegreeDaysByAssetDataAccumulationStatistics',
        'series' => '\Swagger\Client\Model\DailyAssetSeries[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'asset' => null,
        'start_date' => 'date',
        'end_date' => 'date',
        'contours' => null,
        'unit' => null,
        'time_series_statistics' => null,
        'series' => null
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
        'asset' => 'asset',
        'start_date' => 'startDate',
        'end_date' => 'endDate',
        'contours' => 'contours',
        'unit' => 'unit',
        'time_series_statistics' => 'timeSeriesStatistics',
        'series' => 'series'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'asset' => 'setAsset',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'contours' => 'setContours',
        'unit' => 'setUnit',
        'time_series_statistics' => 'setTimeSeriesStatistics',
        'series' => 'setSeries'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'asset' => 'getAsset',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'contours' => 'getContours',
        'unit' => 'getUnit',
        'time_series_statistics' => 'getTimeSeriesStatistics',
        'series' => 'getSeries'
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
        $this->container['asset'] = isset($data['asset']) ? $data['asset'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['contours'] = isset($data['contours']) ? $data['contours'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
        $this->container['time_series_statistics'] = isset($data['time_series_statistics']) ? $data['time_series_statistics'] : null;
        $this->container['series'] = isset($data['series']) ? $data['series'] : null;
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
     * Gets asset
     * @return string
     */
    public function getAsset()
    {
        return $this->container['asset'];
    }

    /**
     * Sets asset
     * @param string $asset Link to asset info.
     * @return $this
     */
    public function setAsset($asset)
    {
        $this->container['asset'] = $asset;

        return $this;
    }

    /**
     * Gets start_date
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     * @param \DateTime $start_date
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets end_date
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     * @param \DateTime $end_date
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets contours
     * @return string
     */
    public function getContours()
    {
        return $this->container['contours'];
    }

    /**
     * Sets contours
     * @param string $contours Link to contours for this query.
     * @return $this
     */
    public function setContours($contours)
    {
        $this->container['contours'] = $contours;

        return $this;
    }

    /**
     * Gets unit
     * @return \Swagger\Client\Model\DegreeDaysByLocationDataUnit
     */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
     * Sets unit
     * @param \Swagger\Client\Model\DegreeDaysByLocationDataUnit $unit
     * @return $this
     */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;

        return $this;
    }

    /**
     * Gets time_series_statistics
     * @return \Swagger\Client\Model\DegreeDaysByAssetDataAccumulationStatistics
     */
    public function getTimeSeriesStatistics()
    {
        return $this->container['time_series_statistics'];
    }

    /**
     * Sets time_series_statistics
     * @param \Swagger\Client\Model\DegreeDaysByAssetDataAccumulationStatistics $time_series_statistics
     * @return $this
     */
    public function setTimeSeriesStatistics($time_series_statistics)
    {
        $this->container['time_series_statistics'] = $time_series_statistics;

        return $this;
    }

    /**
     * Gets series
     * @return \Swagger\Client\Model\DailyAssetSeries[]
     */
    public function getSeries()
    {
        return $this->container['series'];
    }

    /**
     * Sets series
     * @param \Swagger\Client\Model\DailyAssetSeries[] $series
     * @return $this
     */
    public function setSeries($series)
    {
        $this->container['series'] = $series;

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

