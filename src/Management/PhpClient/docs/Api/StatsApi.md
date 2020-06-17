# DoofinderManagement\StatsApi

All URIs are relative to *https://{search_zone}-api.doofinder.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bannersClicks**](StatsApi.md#bannersclicks) | **GET** /api/v2/stats/banners/clicks | Gets the total amount of clicks performed in banners.
[**bannersDisplay**](StatsApi.md#bannersdisplay) | **GET** /api/v2/stats/banners/displays | Gets how many times a banner has been displayed.
[**checkoutsByDate**](StatsApi.md#checkoutsbydate) | **GET** /api/v2/stats/checkouts | Gets the checkouts by dates
[**clicksByDate**](StatsApi.md#clicksbydate) | **GET** /api/v2/stats/clicks | Get the clicks by dates
[**clicksByQuery**](StatsApi.md#clicksbyquery) | **GET** /api/v2/stats/clicks/by-query/{query} | Get the products clicked given a certain query term.
[**clicksTop**](StatsApi.md#clickstop) | **GET** /api/v2/stats/clicks/top | Get the most common clicks.
[**initsByDate**](StatsApi.md#initsbydate) | **GET** /api/v2/stats/inits | Get the search sessions by dates.
[**redirects**](StatsApi.md#redirects) | **GET** /api/v2/stats/redirects | Get the total amount of redirections done.
[**searchesByClick**](StatsApi.md#searchesbyclick) | **GET** /api/v2/stats/clicks/{dfid}/searches/top | Get the top searches that got a product clicked
[**searchesByDate**](StatsApi.md#searchesbydate) | **GET** /api/v2/stats/searches | Get the searches by dates
[**searchesTop**](StatsApi.md#searchestop) | **GET** /api/v2/stats/searches/top | Get the most common searches.
[**usage**](StatsApi.md#usage) | **GET** /api/v2/stats/usage | Get the search engines usage.

# **bannersClicks**
> \DoofinderManagement\Model\StatsBannersResult bannersClicks($from, $to, $hashid, $id, $tz, $device, $format)

Gets the total amount of clicks performed in banners.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = DoofinderManagement\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = DoofinderManagement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');// Configure API key authorization: jwt_token
$config = DoofinderManagement\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = DoofinderManagement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new DoofinderManagement\Api\StatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = "from_example"; // string | Start date of the interval in the format of UNIX timestamp or YYYYMMDD.
$to = "to_example"; // string | End date of the interval in the format of UNIX timestamp or YYYYMMDD.
$hashid = new \DoofinderManagement\Model\Hashid(); // \DoofinderManagement\Model\Hashid | Unique id of the search engine. It accepts a single value or an array of values. If you want to work with all user search engines you can use the special parameter value `_all`.
$id = 56; // int | Unique id of the banner.
$tz = "+00:00"; // string | Timezone for the given dates, by default assumes UTC. Timezones may be specified as an ISO 8601 UTC offset.
$device = "device_example"; // string | Filter by kind of device.
$format = "json"; // string | Indicates which response format should be used

try {
    $result = $apiInstance->bannersClicks($from, $to, $hashid, $id, $tz, $device, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatsApi->bannersClicks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **string**| Start date of the interval in the format of UNIX timestamp or YYYYMMDD. |
 **to** | **string**| End date of the interval in the format of UNIX timestamp or YYYYMMDD. |
 **hashid** | [**\DoofinderManagement\Model\Hashid**](../Model/.md)| Unique id of the search engine. It accepts a single value or an array of values. If you want to work with all user search engines you can use the special parameter value &#x60;_all&#x60;. |
 **id** | **int**| Unique id of the banner. | [optional]
 **tz** | **string**| Timezone for the given dates, by default assumes UTC. Timezones may be specified as an ISO 8601 UTC offset. | [optional] [default to +00:00]
 **device** | **string**| Filter by kind of device. | [optional]
 **format** | **string**| Indicates which response format should be used | [optional] [default to json]

### Return type

[**\DoofinderManagement\Model\StatsBannersResult**](../Model/StatsBannersResult.md)

### Authorization

[api_token](../../README.md#api_token), [jwt_token](../../README.md#jwt_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bannersDisplay**
> \DoofinderManagement\Model\StatsBannersResult bannersDisplay($from, $to, $hashid, $id, $tz, $device, $format)

Gets how many times a banner has been displayed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = DoofinderManagement\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = DoofinderManagement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');// Configure API key authorization: jwt_token
$config = DoofinderManagement\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = DoofinderManagement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new DoofinderManagement\Api\StatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = "from_example"; // string | Start date of the interval in the format of UNIX timestamp or YYYYMMDD.
$to = "to_example"; // string | End date of the interval in the format of UNIX timestamp or YYYYMMDD.
$hashid = new \DoofinderManagement\Model\Hashid(); // \DoofinderManagement\Model\Hashid | Unique id of the search engine. It accepts a single value or an array of values. If you want to work with all user search engines you can use the special parameter value `_all`.
$id = 56; // int | Unique id of the banner.
$tz = "+00:00"; // string | Timezone for the given dates, by default assumes UTC. Timezones may be specified as an ISO 8601 UTC offset.
$device = "device_example"; // string | Filter by kind of device.
$format = "json"; // string | Indicates which response format should be used

try {
    $result = $apiInstance->bannersDisplay($from, $to, $hashid, $id, $tz, $device, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatsApi->bannersDisplay: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **string**| Start date of the interval in the format of UNIX timestamp or YYYYMMDD. |
 **to** | **string**| End date of the interval in the format of UNIX timestamp or YYYYMMDD. |
 **hashid** | [**\DoofinderManagement\Model\Hashid**](../Model/.md)| Unique id of the search engine. It accepts a single value or an array of values. If you want to work with all user search engines you can use the special parameter value &#x60;_all&#x60;. |
 **id** | **int**| Unique id of the banner. | [optional]
 **tz** | **string**| Timezone for the given dates, by default assumes UTC. Timezones may be specified as an ISO 8601 UTC offset. | [optional] [default to +00:00]
 **device** | **string**| Filter by kind of device. | [optional]
 **format** | **string**| Indicates which response format should be used | [optional] [default to json]

### Return type

[**\DoofinderManagement\Model\StatsBannersResult**](../Model/StatsBannersResult.md)

### Authorization

[api_token](../../README.md#api_token), [jwt_token](../../README.md#jwt_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkoutsByDate**
> \DoofinderManagement\Model\StatsTimeResult checkoutsByDate($from, $to, $hashid, $tz, $device, $interval, $format)

Gets the checkouts by dates

Gets the total of checkouts in a time period aggregated by day intervals

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = DoofinderManagement\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = DoofinderManagement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');// Configure API key authorization: jwt_token
$config = DoofinderManagement\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = DoofinderManagement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new DoofinderManagement\Api\StatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = "from_example"; // string | Start date of the interval in the format of UNIX timestamp or YYYYMMDD.
$to = "to_example"; // string | End date of the interval in the format of UNIX timestamp or YYYYMMDD.
$hashid = new \DoofinderManagement\Model\Hashid(); // \DoofinderManagement\Model\Hashid | Unique id of the search engine. It accepts a single value or an array of values. If you want to work with all user search engines you can use the special parameter value `_all`.
$tz = "+00:00"; // string | Timezone for the given dates, by default assumes UTC. Timezones may be specified as an ISO 8601 UTC offset.
$device = "device_example"; // string | Filter by kind of device.
$interval = "1d"; // string | Time interval for aggregations.
$format = "json"; // string | Indicates which response format should be used

try {
    $result = $apiInstance->checkoutsByDate($from, $to, $hashid, $tz, $device, $interval, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatsApi->checkoutsByDate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **string**| Start date of the interval in the format of UNIX timestamp or YYYYMMDD. |
 **to** | **string**| End date of the interval in the format of UNIX timestamp or YYYYMMDD. |
 **hashid** | [**\DoofinderManagement\Model\Hashid**](../Model/.md)| Unique id of the search engine. It accepts a single value or an array of values. If you want to work with all user search engines you can use the special parameter value &#x60;_all&#x60;. |
 **tz** | **string**| Timezone for the given dates, by default assumes UTC. Timezones may be specified as an ISO 8601 UTC offset. | [optional] [default to +00:00]
 **device** | **string**| Filter by kind of device. | [optional]
 **interval** | **string**| Time interval for aggregations. | [optional] [default to 1d]
 **format** | **string**| Indicates which response format should be used | [optional] [default to json]

### Return type

[**\DoofinderManagement\Model\StatsTimeResult**](../Model/StatsTimeResult.md)

### Authorization

[api_token](../../README.md#api_token), [jwt_token](../../README.md#jwt_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clicksByDate**
> \DoofinderManagement\Model\StatsTimeResult clicksByDate($from, $to, $hashid, $tz, $device, $interval, $format, $custom_results_id)

Get the clicks by dates

Gets the total of clicks in a time period aggregated by day intervals

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = DoofinderManagement\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = DoofinderManagement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');// Configure API key authorization: jwt_token
$config = DoofinderManagement\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = DoofinderManagement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new DoofinderManagement\Api\StatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = "from_example"; // string | Start date of the interval in the format of UNIX timestamp or YYYYMMDD.
$to = "to_example"; // string | End date of the interval in the format of UNIX timestamp or YYYYMMDD.
$hashid = new \DoofinderManagement\Model\Hashid(); // \DoofinderManagement\Model\Hashid | Unique id of the search engine. It accepts a single value or an array of values. If you want to work with all user search engines you can use the special parameter value `_all`.
$tz = "+00:00"; // string | Timezone for the given dates, by default assumes UTC. Timezones may be specified as an ISO 8601 UTC offset.
$device = "device_example"; // string | Filter by kind of device.
$interval = "1d"; // string | Time interval for aggregations.
$format = "json"; // string | Indicates which response format should be used
$custom_results_id = "custom_results_id_example"; // string | Filter by some custom result.

try {
    $result = $apiInstance->clicksByDate($from, $to, $hashid, $tz, $device, $interval, $format, $custom_results_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatsApi->clicksByDate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **string**| Start date of the interval in the format of UNIX timestamp or YYYYMMDD. |
 **to** | **string**| End date of the interval in the format of UNIX timestamp or YYYYMMDD. |
 **hashid** | [**\DoofinderManagement\Model\Hashid**](../Model/.md)| Unique id of the search engine. It accepts a single value or an array of values. If you want to work with all user search engines you can use the special parameter value &#x60;_all&#x60;. |
 **tz** | **string**| Timezone for the given dates, by default assumes UTC. Timezones may be specified as an ISO 8601 UTC offset. | [optional] [default to +00:00]
 **device** | **string**| Filter by kind of device. | [optional]
 **interval** | **string**| Time interval for aggregations. | [optional] [default to 1d]
 **format** | **string**| Indicates which response format should be used | [optional] [default to json]
 **custom_results_id** | **string**| Filter by some custom result. | [optional]

### Return type

[**\DoofinderManagement\Model\StatsTimeResult**](../Model/StatsTimeResult.md)

### Authorization

[api_token](../../README.md#api_token), [jwt_token](../../README.md#jwt_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clicksByQuery**
> \DoofinderManagement\Model\InlineResponse200 clicksByQuery($from, $to, $hashid, $query, $tz, $device, $format)

Get the products clicked given a certain query term.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = DoofinderManagement\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = DoofinderManagement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');// Configure API key authorization: jwt_token
$config = DoofinderManagement\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = DoofinderManagement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new DoofinderManagement\Api\StatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = "from_example"; // string | Start date of the interval in the format of UNIX timestamp or YYYYMMDD.
$to = "to_example"; // string | End date of the interval in the format of UNIX timestamp or YYYYMMDD.
$hashid = new \DoofinderManagement\Model\Hashid(); // \DoofinderManagement\Model\Hashid | Unique id of the search engine. It accepts a single value or an array of values. If you want to work with all user search engines you can use the special parameter value `_all`.
$query = "query_example"; // string | Search query term
$tz = "+00:00"; // string | Timezone for the given dates, by default assumes UTC. Timezones may be specified as an ISO 8601 UTC offset.
$device = "device_example"; // string | Filter by kind of device.
$format = "json"; // string | Indicates which response format should be used

try {
    $result = $apiInstance->clicksByQuery($from, $to, $hashid, $query, $tz, $device, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatsApi->clicksByQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **string**| Start date of the interval in the format of UNIX timestamp or YYYYMMDD. |
 **to** | **string**| End date of the interval in the format of UNIX timestamp or YYYYMMDD. |
 **hashid** | [**\DoofinderManagement\Model\Hashid**](../Model/.md)| Unique id of the search engine. It accepts a single value or an array of values. If you want to work with all user search engines you can use the special parameter value &#x60;_all&#x60;. |
 **query** | **string**| Search query term |
 **tz** | **string**| Timezone for the given dates, by default assumes UTC. Timezones may be specified as an ISO 8601 UTC offset. | [optional] [default to +00:00]
 **device** | **string**| Filter by kind of device. | [optional]
 **format** | **string**| Indicates which response format should be used | [optional] [default to json]

### Return type

[**\DoofinderManagement\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[api_token](../../README.md#api_token), [jwt_token](../../README.md#jwt_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clicksTop**
> \DoofinderManagement\Model\InlineResponse2001 clicksTop($from, $to, $hashid, $tz, $device, $format, $query)

Get the most common clicks.

Gets the top clicked items in a time period.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = DoofinderManagement\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = DoofinderManagement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');// Configure API key authorization: jwt_token
$config = DoofinderManagement\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = DoofinderManagement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new DoofinderManagement\Api\StatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = "from_example"; // string | Start date of the interval in the format of UNIX timestamp or YYYYMMDD.
$to = "to_example"; // string | End date of the interval in the format of UNIX timestamp or YYYYMMDD.
$hashid = new \DoofinderManagement\Model\Hashid(); // \DoofinderManagement\Model\Hashid | Unique id of the search engine. It accepts a single value or an array of values. If you want to work with all user search engines you can use the special parameter value `_all`.
$tz = "+00:00"; // string | Timezone for the given dates, by default assumes UTC. Timezones may be specified as an ISO 8601 UTC offset.
$device = "device_example"; // string | Filter by kind of device.
$format = "json"; // string | Indicates which response format should be used
$query = "query_example"; // string | Search query term.

try {
    $result = $apiInstance->clicksTop($from, $to, $hashid, $tz, $device, $format, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatsApi->clicksTop: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **string**| Start date of the interval in the format of UNIX timestamp or YYYYMMDD. |
 **to** | **string**| End date of the interval in the format of UNIX timestamp or YYYYMMDD. |
 **hashid** | [**\DoofinderManagement\Model\Hashid**](../Model/.md)| Unique id of the search engine. It accepts a single value or an array of values. If you want to work with all user search engines you can use the special parameter value &#x60;_all&#x60;. |
 **tz** | **string**| Timezone for the given dates, by default assumes UTC. Timezones may be specified as an ISO 8601 UTC offset. | [optional] [default to +00:00]
 **device** | **string**| Filter by kind of device. | [optional]
 **format** | **string**| Indicates which response format should be used | [optional] [default to json]
 **query** | **string**| Search query term. | [optional]

### Return type

[**\DoofinderManagement\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[api_token](../../README.md#api_token), [jwt_token](../../README.md#jwt_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **initsByDate**
> \DoofinderManagement\Model\StatsTimeResult initsByDate($from, $to, $hashid, $tz, $device, $interval, $format)

Get the search sessions by dates.

Gets the total of search sessions in a time period aggregated by day intervals

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = DoofinderManagement\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = DoofinderManagement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');// Configure API key authorization: jwt_token
$config = DoofinderManagement\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = DoofinderManagement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new DoofinderManagement\Api\StatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = "from_example"; // string | Start date of the interval in the format of UNIX timestamp or YYYYMMDD.
$to = "to_example"; // string | End date of the interval in the format of UNIX timestamp or YYYYMMDD.
$hashid = new \DoofinderManagement\Model\Hashid(); // \DoofinderManagement\Model\Hashid | Unique id of the search engine. It accepts a single value or an array of values. If you want to work with all user search engines you can use the special parameter value `_all`.
$tz = "+00:00"; // string | Timezone for the given dates, by default assumes UTC. Timezones may be specified as an ISO 8601 UTC offset.
$device = "device_example"; // string | Filter by kind of device.
$interval = "1d"; // string | Time interval for aggregations.
$format = "json"; // string | Indicates which response format should be used

try {
    $result = $apiInstance->initsByDate($from, $to, $hashid, $tz, $device, $interval, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatsApi->initsByDate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **string**| Start date of the interval in the format of UNIX timestamp or YYYYMMDD. |
 **to** | **string**| End date of the interval in the format of UNIX timestamp or YYYYMMDD. |
 **hashid** | [**\DoofinderManagement\Model\Hashid**](../Model/.md)| Unique id of the search engine. It accepts a single value or an array of values. If you want to work with all user search engines you can use the special parameter value &#x60;_all&#x60;. |
 **tz** | **string**| Timezone for the given dates, by default assumes UTC. Timezones may be specified as an ISO 8601 UTC offset. | [optional] [default to +00:00]
 **device** | **string**| Filter by kind of device. | [optional]
 **interval** | **string**| Time interval for aggregations. | [optional] [default to 1d]
 **format** | **string**| Indicates which response format should be used | [optional] [default to json]

### Return type

[**\DoofinderManagement\Model\StatsTimeResult**](../Model/StatsTimeResult.md)

### Authorization

[api_token](../../README.md#api_token), [jwt_token](../../README.md#jwt_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **redirects**
> \DoofinderManagement\Model\StatsRedirectsResult redirects($from, $to, $hashid, $id, $tz, $device, $format)

Get the total amount of redirections done.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = DoofinderManagement\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = DoofinderManagement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');// Configure API key authorization: jwt_token
$config = DoofinderManagement\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = DoofinderManagement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new DoofinderManagement\Api\StatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = "from_example"; // string | Start date of the interval in the format of UNIX timestamp or YYYYMMDD.
$to = "to_example"; // string | End date of the interval in the format of UNIX timestamp or YYYYMMDD.
$hashid = new \DoofinderManagement\Model\Hashid(); // \DoofinderManagement\Model\Hashid | Unique id of the search engine. It accepts a single value or an array of values. If you want to work with all user search engines you can use the special parameter value `_all`.
$id = 56; // int | Unique id of the redirection.
$tz = "+00:00"; // string | Timezone for the given dates, by default assumes UTC. Timezones may be specified as an ISO 8601 UTC offset.
$device = "device_example"; // string | Filter by kind of device.
$format = "json"; // string | Indicates which response format should be used

try {
    $result = $apiInstance->redirects($from, $to, $hashid, $id, $tz, $device, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatsApi->redirects: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **string**| Start date of the interval in the format of UNIX timestamp or YYYYMMDD. |
 **to** | **string**| End date of the interval in the format of UNIX timestamp or YYYYMMDD. |
 **hashid** | [**\DoofinderManagement\Model\Hashid**](../Model/.md)| Unique id of the search engine. It accepts a single value or an array of values. If you want to work with all user search engines you can use the special parameter value &#x60;_all&#x60;. |
 **id** | **int**| Unique id of the redirection. | [optional]
 **tz** | **string**| Timezone for the given dates, by default assumes UTC. Timezones may be specified as an ISO 8601 UTC offset. | [optional] [default to +00:00]
 **device** | **string**| Filter by kind of device. | [optional]
 **format** | **string**| Indicates which response format should be used | [optional] [default to json]

### Return type

[**\DoofinderManagement\Model\StatsRedirectsResult**](../Model/StatsRedirectsResult.md)

### Authorization

[api_token](../../README.md#api_token), [jwt_token](../../README.md#jwt_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchesByClick**
> \DoofinderManagement\Model\StatsTopSearchesResult searchesByClick($from, $to, $hashid, $dfid, $tz, $device, $format)

Get the top searches that got a product clicked

Gets the top searches that got a click in a product, and how many times.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = DoofinderManagement\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = DoofinderManagement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');// Configure API key authorization: jwt_token
$config = DoofinderManagement\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = DoofinderManagement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new DoofinderManagement\Api\StatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = "from_example"; // string | Start date of the interval in the format of UNIX timestamp or YYYYMMDD.
$to = "to_example"; // string | End date of the interval in the format of UNIX timestamp or YYYYMMDD.
$hashid = new \DoofinderManagement\Model\Hashid(); // \DoofinderManagement\Model\Hashid | Unique id of the search engine. It accepts a single value or an array of values. If you want to work with all user search engines you can use the special parameter value `_all`.
$dfid = "dfid_example"; // string | Doofinder ID to filter by
$tz = "+00:00"; // string | Timezone for the given dates, by default assumes UTC. Timezones may be specified as an ISO 8601 UTC offset.
$device = "device_example"; // string | Filter by kind of device.
$format = "json"; // string | Indicates which response format should be used

try {
    $result = $apiInstance->searchesByClick($from, $to, $hashid, $dfid, $tz, $device, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatsApi->searchesByClick: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **string**| Start date of the interval in the format of UNIX timestamp or YYYYMMDD. |
 **to** | **string**| End date of the interval in the format of UNIX timestamp or YYYYMMDD. |
 **hashid** | [**\DoofinderManagement\Model\Hashid**](../Model/.md)| Unique id of the search engine. It accepts a single value or an array of values. If you want to work with all user search engines you can use the special parameter value &#x60;_all&#x60;. |
 **dfid** | **string**| Doofinder ID to filter by |
 **tz** | **string**| Timezone for the given dates, by default assumes UTC. Timezones may be specified as an ISO 8601 UTC offset. | [optional] [default to +00:00]
 **device** | **string**| Filter by kind of device. | [optional]
 **format** | **string**| Indicates which response format should be used | [optional] [default to json]

### Return type

[**\DoofinderManagement\Model\StatsTopSearchesResult**](../Model/StatsTopSearchesResult.md)

### Authorization

[api_token](../../README.md#api_token), [jwt_token](../../README.md#jwt_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchesByDate**
> \DoofinderManagement\Model\StatsTimeResult searchesByDate($from, $to, $hashid, $tz, $device, $interval, $format, $custom_results_id, $query_name, $source, $total_hits)

Get the searches by dates

Gets the total of searches in a time period aggregated by day intervals

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = DoofinderManagement\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = DoofinderManagement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');// Configure API key authorization: jwt_token
$config = DoofinderManagement\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = DoofinderManagement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new DoofinderManagement\Api\StatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = "from_example"; // string | Start date of the interval in the format of UNIX timestamp or YYYYMMDD.
$to = "to_example"; // string | End date of the interval in the format of UNIX timestamp or YYYYMMDD.
$hashid = new \DoofinderManagement\Model\Hashid(); // \DoofinderManagement\Model\Hashid | Unique id of the search engine. It accepts a single value or an array of values. If you want to work with all user search engines you can use the special parameter value `_all`.
$tz = "+00:00"; // string | Timezone for the given dates, by default assumes UTC. Timezones may be specified as an ISO 8601 UTC offset.
$device = "device_example"; // string | Filter by kind of device.
$interval = "1d"; // string | Time interval for aggregations.
$format = "json"; // string | Indicates which response format should be used
$custom_results_id = "custom_results_id_example"; // string | Filter by some custom result.
$query_name = new \DoofinderManagement\Model\QueryName(); // \DoofinderManagement\Model\QueryName | Type of query to filter by
$source = "source_example"; // string | Filter by search source.
$total_hits = 56; // int | Filter by the number of search results.

try {
    $result = $apiInstance->searchesByDate($from, $to, $hashid, $tz, $device, $interval, $format, $custom_results_id, $query_name, $source, $total_hits);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatsApi->searchesByDate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **string**| Start date of the interval in the format of UNIX timestamp or YYYYMMDD. |
 **to** | **string**| End date of the interval in the format of UNIX timestamp or YYYYMMDD. |
 **hashid** | [**\DoofinderManagement\Model\Hashid**](../Model/.md)| Unique id of the search engine. It accepts a single value or an array of values. If you want to work with all user search engines you can use the special parameter value &#x60;_all&#x60;. |
 **tz** | **string**| Timezone for the given dates, by default assumes UTC. Timezones may be specified as an ISO 8601 UTC offset. | [optional] [default to +00:00]
 **device** | **string**| Filter by kind of device. | [optional]
 **interval** | **string**| Time interval for aggregations. | [optional] [default to 1d]
 **format** | **string**| Indicates which response format should be used | [optional] [default to json]
 **custom_results_id** | **string**| Filter by some custom result. | [optional]
 **query_name** | [**\DoofinderManagement\Model\QueryName**](../Model/.md)| Type of query to filter by | [optional]
 **source** | **string**| Filter by search source. | [optional]
 **total_hits** | **int**| Filter by the number of search results. | [optional]

### Return type

[**\DoofinderManagement\Model\StatsTimeResult**](../Model/StatsTimeResult.md)

### Authorization

[api_token](../../README.md#api_token), [jwt_token](../../README.md#jwt_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchesTop**
> \DoofinderManagement\Model\StatsTopSearchesResult searchesTop($from, $to, $hashid, $tz, $device, $format, $query_name, $total_hits, $exclude)

Get the most common searches.

Gets a top of the searches in a time period.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = DoofinderManagement\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = DoofinderManagement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');// Configure API key authorization: jwt_token
$config = DoofinderManagement\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = DoofinderManagement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new DoofinderManagement\Api\StatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = "from_example"; // string | Start date of the interval in the format of UNIX timestamp or YYYYMMDD.
$to = "to_example"; // string | End date of the interval in the format of UNIX timestamp or YYYYMMDD.
$hashid = new \DoofinderManagement\Model\Hashid(); // \DoofinderManagement\Model\Hashid | Unique id of the search engine. It accepts a single value or an array of values. If you want to work with all user search engines you can use the special parameter value `_all`.
$tz = "+00:00"; // string | Timezone for the given dates, by default assumes UTC. Timezones may be specified as an ISO 8601 UTC offset.
$device = "device_example"; // string | Filter by kind of device.
$format = "json"; // string | Indicates which response format should be used
$query_name = new \DoofinderManagement\Model\QueryName(); // \DoofinderManagement\Model\QueryName | Type of query to filter by
$total_hits = 56; // int | Filter by the number of search results.
$exclude = new \stdClass; // object | Exclude filters

try {
    $result = $apiInstance->searchesTop($from, $to, $hashid, $tz, $device, $format, $query_name, $total_hits, $exclude);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatsApi->searchesTop: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **string**| Start date of the interval in the format of UNIX timestamp or YYYYMMDD. |
 **to** | **string**| End date of the interval in the format of UNIX timestamp or YYYYMMDD. |
 **hashid** | [**\DoofinderManagement\Model\Hashid**](../Model/.md)| Unique id of the search engine. It accepts a single value or an array of values. If you want to work with all user search engines you can use the special parameter value &#x60;_all&#x60;. |
 **tz** | **string**| Timezone for the given dates, by default assumes UTC. Timezones may be specified as an ISO 8601 UTC offset. | [optional] [default to +00:00]
 **device** | **string**| Filter by kind of device. | [optional]
 **format** | **string**| Indicates which response format should be used | [optional] [default to json]
 **query_name** | [**\DoofinderManagement\Model\QueryName**](../Model/.md)| Type of query to filter by | [optional]
 **total_hits** | **int**| Filter by the number of search results. | [optional]
 **exclude** | [**object**](../Model/.md)| Exclude filters | [optional]

### Return type

[**\DoofinderManagement\Model\StatsTopSearchesResult**](../Model/StatsTopSearchesResult.md)

### Authorization

[api_token](../../README.md#api_token), [jwt_token](../../README.md#jwt_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usage**
> \DoofinderManagement\Model\StatsTimeResult usage($from, $to, $hashid, $type, $format)

Get the search engines usage.

Gets the search engines usage during a period.  It sums the query and API requests made to the service. Since usage is computed in UTC time, there is no need to specify the timezone in this endpoint.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_token
$config = DoofinderManagement\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = DoofinderManagement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');// Configure API key authorization: jwt_token
$config = DoofinderManagement\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = DoofinderManagement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new DoofinderManagement\Api\StatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = "from_example"; // string | Start date of the interval in the format of YYYYMMDD.
$to = "to_example"; // string | End date of the interval in the format of YYYYMMDD.
$hashid = new \DoofinderManagement\Model\Hashid(); // \DoofinderManagement\Model\Hashid | Unique id of the search engine. It accepts a single value or an array of values. If you want to work with all user search engines you can use the special parameter value `_all`.
$type = "type_example"; // string | Filter by the given usage type.
$format = "json"; // string | Indicates which response format should be used

try {
    $result = $apiInstance->usage($from, $to, $hashid, $type, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatsApi->usage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **string**| Start date of the interval in the format of YYYYMMDD. |
 **to** | **string**| End date of the interval in the format of YYYYMMDD. |
 **hashid** | [**\DoofinderManagement\Model\Hashid**](../Model/.md)| Unique id of the search engine. It accepts a single value or an array of values. If you want to work with all user search engines you can use the special parameter value &#x60;_all&#x60;. |
 **type** | **string**| Filter by the given usage type. | [optional]
 **format** | **string**| Indicates which response format should be used | [optional] [default to json]

### Return type

[**\DoofinderManagement\Model\StatsTimeResult**](../Model/StatsTimeResult.md)

### Authorization

[api_token](../../README.md#api_token), [jwt_token](../../README.md#jwt_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

