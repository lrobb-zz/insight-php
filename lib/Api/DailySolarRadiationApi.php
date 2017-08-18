<?php
/**
 * DailySolarRadiationApi
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
 * DailySolarRadiationApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DailySolarRadiationApi
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
     * @return DailySolarRadiationApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation dailySolarRadiationByAsset
     *
     * Daily Solar Radiation by asset
     *
     * @param double $asset_uuid Unique asset id. (required)
     * @param \DateTime $start Start date. Start of 2015 to 5 days in the future. (optional)
     * @param \DateTime $end End date. Start of 2015 to 5 days in the future. (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\DailySolarRadiationByAssetData
     */
    public function dailySolarRadiationByAsset($asset_uuid, $start = null, $end = null)
    {
        list($response) = $this->dailySolarRadiationByAssetWithHttpInfo($asset_uuid, $start, $end);
        return $response;
    }

    /**
     * Operation dailySolarRadiationByAssetWithHttpInfo
     *
     * Daily Solar Radiation by asset
     *
     * @param double $asset_uuid Unique asset id. (required)
     * @param \DateTime $start Start date. Start of 2015 to 5 days in the future. (optional)
     * @param \DateTime $end End date. Start of 2015 to 5 days in the future. (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\DailySolarRadiationByAssetData, HTTP status code, HTTP response headers (array of strings)
     */
    public function dailySolarRadiationByAssetWithHttpInfo($asset_uuid, $start = null, $end = null)
    {
        // verify the required parameter 'asset_uuid' is set
        if ($asset_uuid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $asset_uuid when calling dailySolarRadiationByAsset');
        }
        // parse inputs
        $resourcePath = "/daily-solar-radiation/{asset-uuid}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/vnd.wdt+json; version=1']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($start !== null) {
            $queryParams['start'] = $this->apiClient->getSerializer()->toQueryValue($start);
        }
        // query params
        if ($end !== null) {
            $queryParams['end'] = $this->apiClient->getSerializer()->toQueryValue($end);
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
                '\Swagger\Client\Model\DailySolarRadiationByAssetData',
                '/daily-solar-radiation/{asset-uuid}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\DailySolarRadiationByAssetData', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\DailySolarRadiationByAssetData', $e->getResponseHeaders());
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
     * Operation dailySolarRadiationByLocation
     *
     * Daily Solar Radiation by location
     *
     * @param double $latitude  (required)
     * @param double $longitude  (required)
     * @param \DateTime $start Start date. Start of 2015 to 5 days in the future. (YYYY-MM-DD) (optional)
     * @param \DateTime $end End date. Start of 2015 to 5 days in the future. (YYYY-MM-DD) (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\DailySolarRadiationByLocationData
     */
    public function dailySolarRadiationByLocation($latitude, $longitude, $start = null, $end = null)
    {
        list($response) = $this->dailySolarRadiationByLocationWithHttpInfo($latitude, $longitude, $start, $end);
        return $response;
    }

    /**
     * Operation dailySolarRadiationByLocationWithHttpInfo
     *
     * Daily Solar Radiation by location
     *
     * @param double $latitude  (required)
     * @param double $longitude  (required)
     * @param \DateTime $start Start date. Start of 2015 to 5 days in the future. (YYYY-MM-DD) (optional)
     * @param \DateTime $end End date. Start of 2015 to 5 days in the future. (YYYY-MM-DD) (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\DailySolarRadiationByLocationData, HTTP status code, HTTP response headers (array of strings)
     */
    public function dailySolarRadiationByLocationWithHttpInfo($latitude, $longitude, $start = null, $end = null)
    {
        // verify the required parameter 'latitude' is set
        if ($latitude === null) {
            throw new \InvalidArgumentException('Missing the required parameter $latitude when calling dailySolarRadiationByLocation');
        }
        // verify the required parameter 'longitude' is set
        if ($longitude === null) {
            throw new \InvalidArgumentException('Missing the required parameter $longitude when calling dailySolarRadiationByLocation');
        }
        // parse inputs
        $resourcePath = "/daily-solar-radiation/{latitude}/{longitude}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/vnd.wdt+json; version=1']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($start !== null) {
            $queryParams['start'] = $this->apiClient->getSerializer()->toQueryValue($start);
        }
        // query params
        if ($end !== null) {
            $queryParams['end'] = $this->apiClient->getSerializer()->toQueryValue($end);
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
                '\Swagger\Client\Model\DailySolarRadiationByLocationData',
                '/daily-solar-radiation/{latitude}/{longitude}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\DailySolarRadiationByLocationData', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\DailySolarRadiationByLocationData', $e->getResponseHeaders());
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
     * Operation dailySolarRadiationContoursByAsset
     *
     * Daily Solar Radiation contours by asset
     *
     * @param double $asset_uuid Unique asset id. (required)
     * @param \DateTime $start Start date. Start of 2015 to 5 days in the future. (YYYY-MM-DD) (optional)
     * @param \DateTime $end End date. Start of 2015 to 5 days in the future. (YYYY-MM-DD) (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\DailySolarRadiationContoursByAssetData
     */
    public function dailySolarRadiationContoursByAsset($asset_uuid, $start = null, $end = null)
    {
        list($response) = $this->dailySolarRadiationContoursByAssetWithHttpInfo($asset_uuid, $start, $end);
        return $response;
    }

    /**
     * Operation dailySolarRadiationContoursByAssetWithHttpInfo
     *
     * Daily Solar Radiation contours by asset
     *
     * @param double $asset_uuid Unique asset id. (required)
     * @param \DateTime $start Start date. Start of 2015 to 5 days in the future. (YYYY-MM-DD) (optional)
     * @param \DateTime $end End date. Start of 2015 to 5 days in the future. (YYYY-MM-DD) (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\DailySolarRadiationContoursByAssetData, HTTP status code, HTTP response headers (array of strings)
     */
    public function dailySolarRadiationContoursByAssetWithHttpInfo($asset_uuid, $start = null, $end = null)
    {
        // verify the required parameter 'asset_uuid' is set
        if ($asset_uuid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $asset_uuid when calling dailySolarRadiationContoursByAsset');
        }
        // parse inputs
        $resourcePath = "/daily-solar-radiation/{asset-uuid}/contours";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/vnd.wdt+json; version=1']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($start !== null) {
            $queryParams['start'] = $this->apiClient->getSerializer()->toQueryValue($start);
        }
        // query params
        if ($end !== null) {
            $queryParams['end'] = $this->apiClient->getSerializer()->toQueryValue($end);
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
                '\Swagger\Client\Model\DailySolarRadiationContoursByAssetData',
                '/daily-solar-radiation/{asset-uuid}/contours'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\DailySolarRadiationContoursByAssetData', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\DailySolarRadiationContoursByAssetData', $e->getResponseHeaders());
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