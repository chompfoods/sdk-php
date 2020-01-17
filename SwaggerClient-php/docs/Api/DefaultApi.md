# Swagger\Client\DefaultApi

All URIs are relative to *https://chompthis.com/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**foodBrandedBarcodePhpGet**](DefaultApi.md#foodbrandedbarcodephpget) | **GET** /food/branded/barcode.php | Get a branded food item using a barcode
[**foodBrandedIdPhpGet**](DefaultApi.md#foodbrandedidphpget) | **GET** /food/branded/id.php | Get a branded food item using an ID number
[**foodBrandedNamePhpGet**](DefaultApi.md#foodbrandednamephpget) | **GET** /food/branded/name.php | Get a branded food item by name
[**foodBrandedSearchPhpGet**](DefaultApi.md#foodbrandedsearchphpget) | **GET** /food/branded/search.php | Get data for branded food items using various search parameters
[**ingredientSearchPhpGet**](DefaultApi.md#ingredientsearchphpget) | **GET** /ingredient/search.php | Get raw/generic food ingredient item(s)

# **foodBrandedBarcodePhpGet**
> \Swagger\Client\Model\BrandedFoodObject foodBrandedBarcodePhpGet($code)

Get a branded food item using a barcode

# Get data for a branded food using the food's UPC/EAN barcode.  __Example:__ ```https://chompthis.com/api/v2/food/branded/barcode.php?api_key=API_KEY&code=CODE```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = "code_example"; // string | UPC/EAN barcode  __Example:__ 0842234000988  __Resources:__ [Database search](https://chompthis.com/api/lookup.php)  _Read [this article](https://desk.zoho.com/portal/chompthis/kb/articles/im-having-trouble-getting-matches-for-barcodes-what-can-id-do) for tips and tricks._

try {
    $result = $apiInstance->foodBrandedBarcodePhpGet($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->foodBrandedBarcodePhpGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| UPC/EAN barcode  __Example:__ 0842234000988  __Resources:__ [Database search](https://chompthis.com/api/lookup.php)  _Read [this article](https://desk.zoho.com/portal/chompthis/kb/articles/im-having-trouble-getting-matches-for-barcodes-what-can-id-do) for tips and tricks._ |

### Return type

[**\Swagger\Client\Model\BrandedFoodObject**](../Model/BrandedFoodObject.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **foodBrandedIdPhpGet**
> \Swagger\Client\Model\BrandedFoodObject foodBrandedIdPhpGet($id, $source)

Get a branded food item using an ID number

# Get data for a branded food using Chomp's internal ID number.  _Alternatively, set the \"source\" parameter to \"USDA\" and use the food's FDC ID._  __Example:__ ```https://chompthis.com/api/v2/food/branded/id.php?api_key=API_KEY&id=ID```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Chomp branded food ID.  _Set \"source=USDA\" if you wish to pass in the food's FoodData Central ID (fdc_id)._  __Example #1:__ 15  __Resources:__ [Find branded food IDs](https://chompthis.com/api/lookup.php)
$source = "source_example"; // string | Specify the data source (optional).  You must pass in \"USDA\" if you want to look up a food item using a USDA FDC ID.  __Example:__ USDA _(defaults to \"Chomp\")_

try {
    $result = $apiInstance->foodBrandedIdPhpGet($id, $source);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->foodBrandedIdPhpGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Chomp branded food ID.  _Set \&quot;source&#x3D;USDA\&quot; if you wish to pass in the food&#x27;s FoodData Central ID (fdc_id)._  __Example #1:__ 15  __Resources:__ [Find branded food IDs](https://chompthis.com/api/lookup.php) |
 **source** | **string**| Specify the data source (optional).  You must pass in \&quot;USDA\&quot; if you want to look up a food item using a USDA FDC ID.  __Example:__ USDA _(defaults to \&quot;Chomp\&quot;)_ | [optional]

### Return type

[**\Swagger\Client\Model\BrandedFoodObject**](../Model/BrandedFoodObject.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **foodBrandedNamePhpGet**
> \Swagger\Client\Model\BrandedFoodObject foodBrandedNamePhpGet($name, $limit)

Get a branded food item by name

# Search for branded food items by name.  __Example:__ ```https://chompthis.com/api/v2/food/branded/name.php?api_key=API_KEY&name=NAME```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = "name_example"; // string | Branded food name  __Example:__ Starburst  __Resources:__ [Find branded food names](https://chompthis.com/api/lookup.php)
$limit = 56; // int | Set maximum number of records you want the API to return.  ___Note:__ The maximum value is 10._  __Example:__ 3 _(defaults to 10)_

try {
    $result = $apiInstance->foodBrandedNamePhpGet($name, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->foodBrandedNamePhpGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Branded food name  __Example:__ Starburst  __Resources:__ [Find branded food names](https://chompthis.com/api/lookup.php) |
 **limit** | **int**| Set maximum number of records you want the API to return.  ___Note:__ The maximum value is 10._  __Example:__ 3 _(defaults to 10)_ | [optional]

### Return type

[**\Swagger\Client\Model\BrandedFoodObject**](../Model/BrandedFoodObject.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **foodBrandedSearchPhpGet**
> \Swagger\Client\Model\BrandedFoodObject foodBrandedSearchPhpGet($allergen, $brand, $category, $country, $diet, $ingredient, $keyword, $mineral, $nutrient, $palm_oil, $trace, $vitamin, $limit, $page)

Get data for branded food items using various search parameters

# Search for branded food items using various parameters.  __Example:__ ```https://chompthis.com/api/v2/food/branded/search.php?api_key=API_KEY&brand=BRAND&country=COUNTRY&page=1```  ___Tip:__ Get started by using the [Query Builder](https://chompthis.com/api/build.php)._

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$allergen = "allergen_example"; // string | Specify a required allergen ingredient (optional)  __Example__: Peanuts  __Resources__: [List of allergens](https://chompthis.com/api/data/allergen.php)
$brand = "brand_example"; // string | Specify a required brand (optional)  __Example__: Starbucks  __Resources__: [List of brands](https://chompthis.com/api/data/brand.php)
$category = "category_example"; // string | Specify a required category (optional)  __Example__: Pasta Dishes  __Resources__: [List of categories](https://chompthis.com/api/data/category.php)
$country = "country_example"; // string | Specify a required country (optional)  __Example__: United States  __Resources__: [List of countries](https://chompthis.com/api/data/country.php)
$diet = "diet_example"; // string | Specify a required diet (optional)  _Filters the search to only include food items that are considered compatible with the following diets: Vegan, Vegetarian, Gluten Free_  __Example__: Gluten Free  __Resources__: [List of diets](https://chompthis.com/api/data/lifestyle.php)
$ingredient = "ingredient_example"; // string | Specify a required ingredient (optional)  __Example__: Salt  __Resources__: [List of ingredients](https://chompthis.com/api/data/ingredient.php)
$keyword = "keyword_example"; // string | Specify a required keyword (optional)  __Example__: Starbucks  __Resources__: [List of brands](https://chompthis.com/api/data/brand.php)
$mineral = "mineral_example"; // string | Specify a required mineral (optional)  __Example__: Potassium  __Resources__: [List of minerals](https://chompthis.com/api/data/mineral.php)
$nutrient = "nutrient_example"; // string | Specify a required nutrition label item (optional)  __Example__: Caffeine  __Resources__: [List of nutrition label items](https://chompthis.com/api/data/nutrition.php)
$palm_oil = "palm_oil_example"; // string | Specify a required palm oil ingredient (optional)  __Example__: E160a Beta Carotene  __Resources__: [List of palm oil ingredients](https://chompthis.com/api/data/palm-oil.php)
$trace = "trace_example"; // string | Specify a required trace ingredient (optional)  __Example__: Tree Nuts  __Resources__: [List of trace ingredients](https://chompthis.com/api/data/trace.php)
$vitamin = "vitamin_example"; // string | Specify a required vitamin (optional)  __Example__: Biotin  __Resources__: [List of vitamins](https://chompthis.com/api/data/vitamin.php)
$limit = 56; // int | Set maximum number of records you want the API to return.  ___Note:__ The maximum value is 10._  __Example:__ 3 _(defaults to 10)_
$page = 56; // int | Specify the search response page number.  _Each page will contain up to 10 items._  __Example__: 1 _(default)_

try {
    $result = $apiInstance->foodBrandedSearchPhpGet($allergen, $brand, $category, $country, $diet, $ingredient, $keyword, $mineral, $nutrient, $palm_oil, $trace, $vitamin, $limit, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->foodBrandedSearchPhpGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **allergen** | **string**| Specify a required allergen ingredient (optional)  __Example__: Peanuts  __Resources__: [List of allergens](https://chompthis.com/api/data/allergen.php) | [optional]
 **brand** | **string**| Specify a required brand (optional)  __Example__: Starbucks  __Resources__: [List of brands](https://chompthis.com/api/data/brand.php) | [optional]
 **category** | **string**| Specify a required category (optional)  __Example__: Pasta Dishes  __Resources__: [List of categories](https://chompthis.com/api/data/category.php) | [optional]
 **country** | **string**| Specify a required country (optional)  __Example__: United States  __Resources__: [List of countries](https://chompthis.com/api/data/country.php) | [optional]
 **diet** | **string**| Specify a required diet (optional)  _Filters the search to only include food items that are considered compatible with the following diets: Vegan, Vegetarian, Gluten Free_  __Example__: Gluten Free  __Resources__: [List of diets](https://chompthis.com/api/data/lifestyle.php) | [optional]
 **ingredient** | **string**| Specify a required ingredient (optional)  __Example__: Salt  __Resources__: [List of ingredients](https://chompthis.com/api/data/ingredient.php) | [optional]
 **keyword** | **string**| Specify a required keyword (optional)  __Example__: Starbucks  __Resources__: [List of brands](https://chompthis.com/api/data/brand.php) | [optional]
 **mineral** | **string**| Specify a required mineral (optional)  __Example__: Potassium  __Resources__: [List of minerals](https://chompthis.com/api/data/mineral.php) | [optional]
 **nutrient** | **string**| Specify a required nutrition label item (optional)  __Example__: Caffeine  __Resources__: [List of nutrition label items](https://chompthis.com/api/data/nutrition.php) | [optional]
 **palm_oil** | **string**| Specify a required palm oil ingredient (optional)  __Example__: E160a Beta Carotene  __Resources__: [List of palm oil ingredients](https://chompthis.com/api/data/palm-oil.php) | [optional]
 **trace** | **string**| Specify a required trace ingredient (optional)  __Example__: Tree Nuts  __Resources__: [List of trace ingredients](https://chompthis.com/api/data/trace.php) | [optional]
 **vitamin** | **string**| Specify a required vitamin (optional)  __Example__: Biotin  __Resources__: [List of vitamins](https://chompthis.com/api/data/vitamin.php) | [optional]
 **limit** | **int**| Set maximum number of records you want the API to return.  ___Note:__ The maximum value is 10._  __Example:__ 3 _(defaults to 10)_ | [optional]
 **page** | **int**| Specify the search response page number.  _Each page will contain up to 10 items._  __Example__: 1 _(default)_ | [optional]

### Return type

[**\Swagger\Client\Model\BrandedFoodObject**](../Model/BrandedFoodObject.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ingredientSearchPhpGet**
> \Swagger\Client\Model\IngredientObject ingredientSearchPhpGet($find, $list, $raw, $limit)

Get raw/generic food ingredient item(s)

# Get data for a specific ingredient or a specific set of ingredients.  __Example:__ ```https://chompthis.com/api/v2/ingredient/search.php?api_key=API_KEY&find=STRING/LIST&list=BOOLEAN&raw=BOOLEAN```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$find = 56; // int | Specify the ingredient name(s).  __Example #1:__ broccoli  __Example #2:__ broccoli,cauliflower,spinach  ___Important Note:__ Set the \"is_list\" parameter to true before passing in a comma-separated list of ingredients._
$list = true; // bool | Specify if you are searching for multiple ingredients.  _Setting this to true will configure this endpoint so that it accepts a comma-separated list of ingredients._  _By default, this endpoint expects a single ingredient._  __Example:__ true _(defaults to false)_
$raw = true; // bool | Specify if you only want data for raw ingredients.  __Example:__ true _(defaults to true)_
$limit = 56; // int | Set maximum number of records you want the API to return.  ___Important Note:__ Setting this to \"1\" will return 1 record per search term._  __Example:__ 1 _(defaults to 1, max is 3)_

try {
    $result = $apiInstance->ingredientSearchPhpGet($find, $list, $raw, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->ingredientSearchPhpGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **find** | **int**| Specify the ingredient name(s).  __Example #1:__ broccoli  __Example #2:__ broccoli,cauliflower,spinach  ___Important Note:__ Set the \&quot;is_list\&quot; parameter to true before passing in a comma-separated list of ingredients._ |
 **list** | **bool**| Specify if you are searching for multiple ingredients.  _Setting this to true will configure this endpoint so that it accepts a comma-separated list of ingredients._  _By default, this endpoint expects a single ingredient._  __Example:__ true _(defaults to false)_ |
 **raw** | **bool**| Specify if you only want data for raw ingredients.  __Example:__ true _(defaults to true)_ | [optional]
 **limit** | **int**| Set maximum number of records you want the API to return.  ___Important Note:__ Setting this to \&quot;1\&quot; will return 1 record per search term._  __Example:__ 1 _(defaults to 1, max is 3)_ | [optional]

### Return type

[**\Swagger\Client\Model\IngredientObject**](../Model/IngredientObject.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

