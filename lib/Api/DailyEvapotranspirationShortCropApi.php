<?php
/**
 * DailyEvapotranspirationShortCropApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
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

namespace Swagger\Client\Api;

use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\Configuration;
use \Swagger\Client\ObjectSerializer;

/**
 * DailyEvapotranspirationShortCropApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DailyEvapotranspirationShortCropApi
{
    /**
     * API Client
     *
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Swagger\Client\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     *
     * @return DailyEvapotranspirationShortCropApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation dailyEvapotranspirationShortCropByAsset
     *
     * Daily Evapotranspiration Short Crop by asset
     *
     * @param double $asset_uuid Unique asset id. (required)
     * @param \DateTime $start Start date. June 1, 2016 to 5 days in the future (YYYY-MM-DD) (optional)
     * @param \DateTime $end End date (inclusive). June 1, 2016 to 5 days in the future (YYYY-MM-DD) (optional)
     * @param string $unit et unit (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\DailyProductByAssetData
     */
    public function dailyEvapotranspirationShortCropByAsset($asset_uuid, $start = null, $end = null, $unit = null)
    {
        list($response) = $this->dailyEvapotranspirationShortCropByAssetWithHttpInfo($asset_uuid, $start, $end, $unit);
        return $response;
    }

    /**
     * Operation dailyEvapotranspirationShortCropByAssetWithHttpInfo
     *
     * Daily Evapotranspiration Short Crop by asset
     *
     * @param double $asset_uuid Unique asset id. (required)
     * @param \DateTime $start Start date. June 1, 2016 to 5 days in the future (YYYY-MM-DD) (optional)
     * @param \DateTime $end End date (inclusive). June 1, 2016 to 5 days in the future (YYYY-MM-DD) (optional)
     * @param string $unit et unit (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\DailyProductByAssetData, HTTP status code, HTTP response headers (array of strings)
     */
    public function dailyEvapotranspirationShortCropByAssetWithHttpInfo($asset_uuid, $start = null, $end = null, $unit = null)
    {
        // verify the required parameter 'asset_uuid' is set
        if ($asset_uuid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $asset_uuid when calling dailyEvapotranspirationShortCropByAsset');
        }
        // parse inputs
        $resourcePath = "/daily-evapotranspiration-short-crop/{asset-uuid}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/vnd.wdt+json; version=1']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
<<<<<<< HEAD
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);
=======
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/vnd.wdt+json; version=1']);
>>>>>>> b4b592f0f75f5d6ba0501be7b1212d3e9f9102d2

        // query params
        if ($start !== null) {
            $queryParams['start'] = $this->apiClient->getSerializer()->toQueryValue($start);
        }
        // query params
        if ($end !== null) {
            $queryParams['end'] = $this->apiClient->getSerializer()->toQueryValue($end);
        }
        // query params
        if ($unit !== null) {
            $queryParams['unit'] = $this->apiClient->getSerializer()->toQueryValue($unit);
        }
        // path params
        if ($asset_uuid !== null) {
            $resourcePath = str_replace(
                "{" . "asset-uuid" . "}",
                $this->apiClient->getSerializer()->toPathValue($asset_uuid),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\DailyProductByAssetData',
                '/daily-evapotranspiration-short-crop/{asset-uuid}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\DailyProductByAssetData', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\DailyProductByAssetData', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation dailyEvapotranspirationShortCropByLocation
     *
     * Daily Evapotranspiration Short Crop by location
     *
     * @param double $latitude  (required)
     * @param double $longitude  (required)
     * @param \DateTime $start Start date. June 1, 2016 to 5 days in the future (YYYY-MM-DD) (optional)
     * @param \DateTime $end End date (inclusive). June 1, 2016 to 5 days in the future (YYYY-MM-DD) (optional)
     * @param string $unit et unit (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\DailyProductByLocationData
     */
    public function dailyEvapotranspirationShortCropByLocation($latitude, $longitude, $start = null, $end = null, $unit = null)
    {
        list($response) = $this->dailyEvapotranspirationShortCropByLocationWithHttpInfo($latitude, $longitude, $start, $end, $unit);
        return $response;
    }

    /**
     * Operation dailyEvapotranspirationShortCropByLocationWithHttpInfo
     *
     * Daily Evapotranspiration Short Crop by location
     *
     * @param double $latitude  (required)
     * @param double $longitude  (required)
     * @param \DateTime $start Start date. June 1, 2016 to 5 days in the future (YYYY-MM-DD) (optional)
     * @param \DateTime $end End date (inclusive). June 1, 2016 to 5 days in the future (YYYY-MM-DD) (optional)
     * @param string $unit et unit (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\DailyProductByLocationData, HTTP status code, HTTP response headers (array of strings)
     */
    public function dailyEvapotranspirationShortCropByLocationWithHttpInfo($latitude, $longitude, $start = null, $end = null, $unit = null)
    {
        // verify the required parameter 'latitude' is set
        if ($latitude === null) {
            throw new \InvalidArgumentException('Missing the required parameter $latitude when calling dailyEvapotranspirationShortCropByLocation');
        }
        // verify the required parameter 'longitude' is set
        if ($longitude === null) {
            throw new \InvalidArgumentException('Missing the required parameter $longitude when calling dailyEvapotranspirationShortCropByLocation');
        }
        // parse inputs
        $resourcePath = "/daily-evapotranspiration-short-crop/{latitude}/{longitude}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/vnd.wdt+json; version=1']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
<<<<<<< HEAD
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);
=======
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/vnd.wdt+json; version=1']);
>>>>>>> b4b592f0f75f5d6ba0501be7b1212d3e9f9102d2

        // query params
        if ($start !== null) {
            $queryParams['start'] = $this->apiClient->getSerializer()->toQueryValue($start);
        }
        // query params
        if ($end !== null) {
            $queryParams['end'] = $this->apiClient->getSerializer()->toQueryValue($end);
        }
        // query params
        if ($unit !== null) {
            $queryParams['unit'] = $this->apiClient->getSerializer()->toQueryValue($unit);
        }
        // path params
        if ($latitude !== null) {
            $resourcePath = str_replace(
                "{" . "latitude" . "}",
                $this->apiClient->getSerializer()->toPathValue($latitude),
                $resourcePath
            );
        }
        // path params
        if ($longitude !== null) {
            $resourcePath = str_replace(
                "{" . "longitude" . "}",
                $this->apiClient->getSerializer()->toPathValue($longitude),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\DailyProductByLocationData',
                '/daily-evapotranspiration-short-crop/{latitude}/{longitude}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\DailyProductByLocationData', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\DailyProductByLocationData', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation dailyEvapotranspirationShortCropContoursByAsset
     *
     * Daily Evapotranspiration Short Crop contours by asset
     *
     * @param double $asset_uuid Unique asset id. (required)
     * @param \DateTime $valid_date valid date. June 1, 2016 to 5 days in the future. (YYYY-MM-DD) (optional)
     * @param string $unit et unit (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\DailyEvapotranspirationShortCropContoursByAssetData
     */
    public function dailyEvapotranspirationShortCropContoursByAsset($asset_uuid, $valid_date = null, $unit = null)
    {
        list($response) = $this->dailyEvapotranspirationShortCropContoursByAssetWithHttpInfo($asset_uuid, $valid_date, $unit);
        return $response;
    }

    /**
     * Operation dailyEvapotranspirationShortCropContoursByAssetWithHttpInfo
     *
     * Daily Evapotranspiration Short Crop contours by asset
     *
     * @param double $asset_uuid Unique asset id. (required)
     * @param \DateTime $valid_date valid date. June 1, 2016 to 5 days in the future. (YYYY-MM-DD) (optional)
     * @param string $unit et unit (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\DailyEvapotranspirationShortCropContoursByAssetData, HTTP status code, HTTP response headers (array of strings)
     */
    public function dailyEvapotranspirationShortCropContoursByAssetWithHttpInfo($asset_uuid, $valid_date = null, $unit = null)
    {
        // verify the required parameter 'asset_uuid' is set
        if ($asset_uuid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $asset_uuid when calling dailyEvapotranspirationShortCropContoursByAsset');
        }
        // parse inputs
        $resourcePath = "/daily-evapotranspiration-short-crop/{asset-uuid}/contours";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/vnd.wdt+json; version=1']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
<<<<<<< HEAD
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);
=======
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/vnd.wdt+json; version=1']);
>>>>>>> b4b592f0f75f5d6ba0501be7b1212d3e9f9102d2

        // query params
        if ($valid_date !== null) {
            $queryParams['validDate'] = $this->apiClient->getSerializer()->toQueryValue($valid_date);
        }
        // query params
        if ($unit !== null) {
            $queryParams['unit'] = $this->apiClient->getSerializer()->toQueryValue($unit);
        }
        // path params
        if ($asset_uuid !== null) {
            $resourcePath = str_replace(
                "{" . "asset-uuid" . "}",
                $this->apiClient->getSerializer()->toPathValue($asset_uuid),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\DailyEvapotranspirationShortCropContoursByAssetData',
                '/daily-evapotranspiration-short-crop/{asset-uuid}/contours'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\DailyEvapotranspirationShortCropContoursByAssetData', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\DailyEvapotranspirationShortCropContoursByAssetData', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
