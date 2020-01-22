<?php
/**
 * BrandedFoodObjectItems
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Chomp Food Database API Documentation
 *
 * __Important:__   - An __[API key](https://chompthis.com/api/)__ is required for access to this API.   - Get yours at __[https://chompthis.com/api](https://chompthis.com/api/)__.  -----  __Getting Started:__   - __[Subscribe](https://chompthis.com/api/#pricing)__ to the API.   - Scroll down and click the \"__Authorize__\" button.   - Enter your API key into the \"__value__\" input, click the \"__Authorize__\" button, then click the \"__Close__\" button.   - Scroll down to the section titled \"__default__\" and click on the API endpoint you wish to use.   - Click the \"__Try it out__\" button.   - Enter the information the endpoint requires.   - Click the \"__Execute__\" button.  __Example:__    - Branded Food: __[View example](https://raw.githubusercontent.com/chompfoods/examples/master/branded-food-response-object.json)__ API response object.   - Ingredient: __[View example](https://raw.githubusercontent.com/chompfoods/examples/master/ingredient-response-object.json)__ API response object.  -----  __How Do I Find My API Key?__   - Your API key was sent to the email address you used to create your subscription.   - You will also find your API key in the __[Client Center](https://chompthis.com/api/manage.php)__.   - _Read __[this article](https://desk.zoho.com/portal/chompthis/kb/articles/how-do-i-find-my-api-key)__ for more information._  ||| | ------- | -------- | | [Knowledge Base](https://desk.zoho.com/portal/chompthis/kb/chomp) | [Pricing](https://chompthis.com/api/) | | [Attribution](https://chompthis.com/api/docs/attribution.php) | [Cost Calculator](https://chompthis.com/api/cost-calculator.php) | | [Terms & License](https://chompthis.com/api/terms.php) | [Database Search](https://chompthis.com/api/lookup.php) | | [Support](https://chompthis.com/api/ticket-new.php) | [Query Builder](https://chompthis.com/api/build.php) | | [Client Center](https://chompthis.com/api/manage.php) | |
 *
 * OpenAPI spec version: 1.0.0-oas3
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.14
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
 * BrandedFoodObjectItems Class Doc Comment
 *
 * @category Class
 * @description An object containing information for this specific item.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BrandedFoodObjectItems implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BrandedFoodObject_items';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'barcode' => 'string',
'name' => 'string',
'brand' => 'string',
'ingredients' => '\Swagger\Client\Model\BrandedFoodObjectIngredients',
'package' => '\Swagger\Client\Model\BrandedFoodObjectPackage',
'serving' => '\Swagger\Client\Model\BrandedFoodObjectServing',
'categories' => 'string[]',
'nutrients' => '\Swagger\Client\Model\BrandedFoodObjectNutrients',
'calorie_conversion_factor' => '\Swagger\Client\Model\BrandedFoodObjectCalorieConversionFactor',
'protein_conversion_factor' => 'float',
'diet_labels' => '\Swagger\Client\Model\BrandedFoodObjectDietLabels',
'diet_flags' => '\Swagger\Client\Model\BrandedFoodObjectDietFlags[]',
'packaging_photos' => '\Swagger\Client\Model\BrandedFoodObjectPackagingPhotos',
'components' => '\Swagger\Client\Model\BrandedFoodObjectComponents[]',
'portions' => '\Swagger\Client\Model\BrandedFoodObjectPortions[]',
'allergens' => 'string[]',
'brand_list' => 'string[]',
'countries' => 'string[]',
'country_details' => '\Swagger\Client\Model\BrandedFoodObjectCountryDetails',
'palm_oil_ingredients' => 'string[]',
'ingredient_list' => 'string[]',
'has_english_ingredients' => 'bool',
'minerals' => 'string[]',
'traces' => 'string[]',
'vitamins' => 'string[]',
'common_names' => 'string[]',
'description' => 'string',
'keywords' => 'string[]',
'footnote' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'barcode' => null,
'name' => null,
'brand' => null,
'ingredients' => null,
'package' => null,
'serving' => null,
'categories' => null,
'nutrients' => null,
'calorie_conversion_factor' => null,
'protein_conversion_factor' => null,
'diet_labels' => null,
'diet_flags' => null,
'packaging_photos' => null,
'components' => null,
'portions' => null,
'allergens' => null,
'brand_list' => null,
'countries' => null,
'country_details' => null,
'palm_oil_ingredients' => null,
'ingredient_list' => null,
'has_english_ingredients' => null,
'minerals' => null,
'traces' => null,
'vitamins' => null,
'common_names' => null,
'description' => null,
'keywords' => null,
'footnote' => null    ];

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
        'barcode' => 'barcode',
'name' => 'name',
'brand' => 'brand',
'ingredients' => 'ingredients',
'package' => 'package',
'serving' => 'serving',
'categories' => 'categories',
'nutrients' => 'nutrients',
'calorie_conversion_factor' => 'calorie_conversion_factor',
'protein_conversion_factor' => 'protein_conversion_factor',
'diet_labels' => 'diet_labels',
'diet_flags' => 'diet_flags',
'packaging_photos' => 'packaging_photos',
'components' => 'components',
'portions' => 'portions',
'allergens' => 'allergens',
'brand_list' => 'brand_list',
'countries' => 'countries',
'country_details' => 'country_details',
'palm_oil_ingredients' => 'palm_oil_ingredients',
'ingredient_list' => 'ingredient_list',
'has_english_ingredients' => 'has_english_ingredients',
'minerals' => 'minerals',
'traces' => 'traces',
'vitamins' => 'vitamins',
'common_names' => 'common_names',
'description' => 'description',
'keywords' => 'keywords',
'footnote' => 'footnote'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'barcode' => 'setBarcode',
'name' => 'setName',
'brand' => 'setBrand',
'ingredients' => 'setIngredients',
'package' => 'setPackage',
'serving' => 'setServing',
'categories' => 'setCategories',
'nutrients' => 'setNutrients',
'calorie_conversion_factor' => 'setCalorieConversionFactor',
'protein_conversion_factor' => 'setProteinConversionFactor',
'diet_labels' => 'setDietLabels',
'diet_flags' => 'setDietFlags',
'packaging_photos' => 'setPackagingPhotos',
'components' => 'setComponents',
'portions' => 'setPortions',
'allergens' => 'setAllergens',
'brand_list' => 'setBrandList',
'countries' => 'setCountries',
'country_details' => 'setCountryDetails',
'palm_oil_ingredients' => 'setPalmOilIngredients',
'ingredient_list' => 'setIngredientList',
'has_english_ingredients' => 'setHasEnglishIngredients',
'minerals' => 'setMinerals',
'traces' => 'setTraces',
'vitamins' => 'setVitamins',
'common_names' => 'setCommonNames',
'description' => 'setDescription',
'keywords' => 'setKeywords',
'footnote' => 'setFootnote'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'barcode' => 'getBarcode',
'name' => 'getName',
'brand' => 'getBrand',
'ingredients' => 'getIngredients',
'package' => 'getPackage',
'serving' => 'getServing',
'categories' => 'getCategories',
'nutrients' => 'getNutrients',
'calorie_conversion_factor' => 'getCalorieConversionFactor',
'protein_conversion_factor' => 'getProteinConversionFactor',
'diet_labels' => 'getDietLabels',
'diet_flags' => 'getDietFlags',
'packaging_photos' => 'getPackagingPhotos',
'components' => 'getComponents',
'portions' => 'getPortions',
'allergens' => 'getAllergens',
'brand_list' => 'getBrandList',
'countries' => 'getCountries',
'country_details' => 'getCountryDetails',
'palm_oil_ingredients' => 'getPalmOilIngredients',
'ingredient_list' => 'getIngredientList',
'has_english_ingredients' => 'getHasEnglishIngredients',
'minerals' => 'getMinerals',
'traces' => 'getTraces',
'vitamins' => 'getVitamins',
'common_names' => 'getCommonNames',
'description' => 'getDescription',
'keywords' => 'getKeywords',
'footnote' => 'getFootnote'    ];

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
        $this->container['barcode'] = isset($data['barcode']) ? $data['barcode'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['brand'] = isset($data['brand']) ? $data['brand'] : null;
        $this->container['ingredients'] = isset($data['ingredients']) ? $data['ingredients'] : null;
        $this->container['package'] = isset($data['package']) ? $data['package'] : null;
        $this->container['serving'] = isset($data['serving']) ? $data['serving'] : null;
        $this->container['categories'] = isset($data['categories']) ? $data['categories'] : null;
        $this->container['nutrients'] = isset($data['nutrients']) ? $data['nutrients'] : null;
        $this->container['calorie_conversion_factor'] = isset($data['calorie_conversion_factor']) ? $data['calorie_conversion_factor'] : null;
        $this->container['protein_conversion_factor'] = isset($data['protein_conversion_factor']) ? $data['protein_conversion_factor'] : null;
        $this->container['diet_labels'] = isset($data['diet_labels']) ? $data['diet_labels'] : null;
        $this->container['diet_flags'] = isset($data['diet_flags']) ? $data['diet_flags'] : null;
        $this->container['packaging_photos'] = isset($data['packaging_photos']) ? $data['packaging_photos'] : null;
        $this->container['components'] = isset($data['components']) ? $data['components'] : null;
        $this->container['portions'] = isset($data['portions']) ? $data['portions'] : null;
        $this->container['allergens'] = isset($data['allergens']) ? $data['allergens'] : null;
        $this->container['brand_list'] = isset($data['brand_list']) ? $data['brand_list'] : null;
        $this->container['countries'] = isset($data['countries']) ? $data['countries'] : null;
        $this->container['country_details'] = isset($data['country_details']) ? $data['country_details'] : null;
        $this->container['palm_oil_ingredients'] = isset($data['palm_oil_ingredients']) ? $data['palm_oil_ingredients'] : null;
        $this->container['ingredient_list'] = isset($data['ingredient_list']) ? $data['ingredient_list'] : null;
        $this->container['has_english_ingredients'] = isset($data['has_english_ingredients']) ? $data['has_english_ingredients'] : null;
        $this->container['minerals'] = isset($data['minerals']) ? $data['minerals'] : null;
        $this->container['traces'] = isset($data['traces']) ? $data['traces'] : null;
        $this->container['vitamins'] = isset($data['vitamins']) ? $data['vitamins'] : null;
        $this->container['common_names'] = isset($data['common_names']) ? $data['common_names'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['keywords'] = isset($data['keywords']) ? $data['keywords'] : null;
        $this->container['footnote'] = isset($data['footnote']) ? $data['footnote'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets barcode
     *
     * @return string
     */
    public function getBarcode()
    {
        return $this->container['barcode'];
    }

    /**
     * Sets barcode
     *
     * @param string $barcode EAN/UPC barcode
     *
     * @return $this
     */
    public function setBarcode($barcode)
    {
        $this->container['barcode'] = $barcode;

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
     * @param string $name Item name as provided by brand owner or as shown on packaging
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets brand
     *
     * @return string
     */
    public function getBrand()
    {
        return $this->container['brand'];
    }

    /**
     * Sets brand
     *
     * @param string $brand The brand name that owns this item
     *
     * @return $this
     */
    public function setBrand($brand)
    {
        $this->container['brand'] = $brand;

        return $this;
    }

    /**
     * Gets ingredients
     *
     * @return \Swagger\Client\Model\BrandedFoodObjectIngredients
     */
    public function getIngredients()
    {
        return $this->container['ingredients'];
    }

    /**
     * Sets ingredients
     *
     * @param \Swagger\Client\Model\BrandedFoodObjectIngredients $ingredients ingredients
     *
     * @return $this
     */
    public function setIngredients($ingredients)
    {
        $this->container['ingredients'] = $ingredients;

        return $this;
    }

    /**
     * Gets package
     *
     * @return \Swagger\Client\Model\BrandedFoodObjectPackage
     */
    public function getPackage()
    {
        return $this->container['package'];
    }

    /**
     * Sets package
     *
     * @param \Swagger\Client\Model\BrandedFoodObjectPackage $package package
     *
     * @return $this
     */
    public function setPackage($package)
    {
        $this->container['package'] = $package;

        return $this;
    }

    /**
     * Gets serving
     *
     * @return \Swagger\Client\Model\BrandedFoodObjectServing
     */
    public function getServing()
    {
        return $this->container['serving'];
    }

    /**
     * Sets serving
     *
     * @param \Swagger\Client\Model\BrandedFoodObjectServing $serving serving
     *
     * @return $this
     */
    public function setServing($serving)
    {
        $this->container['serving'] = $serving;

        return $this;
    }

    /**
     * Gets categories
     *
     * @return string[]
     */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
     * Sets categories
     *
     * @param string[] $categories categories
     *
     * @return $this
     */
    public function setCategories($categories)
    {
        $this->container['categories'] = $categories;

        return $this;
    }

    /**
     * Gets nutrients
     *
     * @return \Swagger\Client\Model\BrandedFoodObjectNutrients
     */
    public function getNutrients()
    {
        return $this->container['nutrients'];
    }

    /**
     * Sets nutrients
     *
     * @param \Swagger\Client\Model\BrandedFoodObjectNutrients $nutrients nutrients
     *
     * @return $this
     */
    public function setNutrients($nutrients)
    {
        $this->container['nutrients'] = $nutrients;

        return $this;
    }

    /**
     * Gets calorie_conversion_factor
     *
     * @return \Swagger\Client\Model\BrandedFoodObjectCalorieConversionFactor
     */
    public function getCalorieConversionFactor()
    {
        return $this->container['calorie_conversion_factor'];
    }

    /**
     * Sets calorie_conversion_factor
     *
     * @param \Swagger\Client\Model\BrandedFoodObjectCalorieConversionFactor $calorie_conversion_factor calorie_conversion_factor
     *
     * @return $this
     */
    public function setCalorieConversionFactor($calorie_conversion_factor)
    {
        $this->container['calorie_conversion_factor'] = $calorie_conversion_factor;

        return $this;
    }

    /**
     * Gets protein_conversion_factor
     *
     * @return float
     */
    public function getProteinConversionFactor()
    {
        return $this->container['protein_conversion_factor'];
    }

    /**
     * Sets protein_conversion_factor
     *
     * @param float $protein_conversion_factor The multiplication factor used to calculate protein from nitrogen
     *
     * @return $this
     */
    public function setProteinConversionFactor($protein_conversion_factor)
    {
        $this->container['protein_conversion_factor'] = $protein_conversion_factor;

        return $this;
    }

    /**
     * Gets diet_labels
     *
     * @return \Swagger\Client\Model\BrandedFoodObjectDietLabels
     */
    public function getDietLabels()
    {
        return $this->container['diet_labels'];
    }

    /**
     * Sets diet_labels
     *
     * @param \Swagger\Client\Model\BrandedFoodObjectDietLabels $diet_labels diet_labels
     *
     * @return $this
     */
    public function setDietLabels($diet_labels)
    {
        $this->container['diet_labels'] = $diet_labels;

        return $this;
    }

    /**
     * Gets diet_flags
     *
     * @return \Swagger\Client\Model\BrandedFoodObjectDietFlags[]
     */
    public function getDietFlags()
    {
        return $this->container['diet_flags'];
    }

    /**
     * Sets diet_flags
     *
     * @param \Swagger\Client\Model\BrandedFoodObjectDietFlags[] $diet_flags An array of ingredient objects that were flagged while grading this item for compatibility with each diet
     *
     * @return $this
     */
    public function setDietFlags($diet_flags)
    {
        $this->container['diet_flags'] = $diet_flags;

        return $this;
    }

    /**
     * Gets packaging_photos
     *
     * @return \Swagger\Client\Model\BrandedFoodObjectPackagingPhotos
     */
    public function getPackagingPhotos()
    {
        return $this->container['packaging_photos'];
    }

    /**
     * Sets packaging_photos
     *
     * @param \Swagger\Client\Model\BrandedFoodObjectPackagingPhotos $packaging_photos packaging_photos
     *
     * @return $this
     */
    public function setPackagingPhotos($packaging_photos)
    {
        $this->container['packaging_photos'] = $packaging_photos;

        return $this;
    }

    /**
     * Gets components
     *
     * @return \Swagger\Client\Model\BrandedFoodObjectComponents[]
     */
    public function getComponents()
    {
        return $this->container['components'];
    }

    /**
     * Sets components
     *
     * @param \Swagger\Client\Model\BrandedFoodObjectComponents[] $components An array of objects containing the constituent parts of a food (e.g. bone is a component of meat)
     *
     * @return $this
     */
    public function setComponents($components)
    {
        $this->container['components'] = $components;

        return $this;
    }

    /**
     * Gets portions
     *
     * @return \Swagger\Client\Model\BrandedFoodObjectPortions[]
     */
    public function getPortions()
    {
        return $this->container['portions'];
    }

    /**
     * Sets portions
     *
     * @param \Swagger\Client\Model\BrandedFoodObjectPortions[] $portions An array of objects containing information on discrete amounts of a food found in this item
     *
     * @return $this
     */
    public function setPortions($portions)
    {
        $this->container['portions'] = $portions;

        return $this;
    }

    /**
     * Gets allergens
     *
     * @return string[]
     */
    public function getAllergens()
    {
        return $this->container['allergens'];
    }

    /**
     * Sets allergens
     *
     * @param string[] $allergens An array of ingredients in this item that may cause allergic reactions in people
     *
     * @return $this
     */
    public function setAllergens($allergens)
    {
        $this->container['allergens'] = $allergens;

        return $this;
    }

    /**
     * Gets brand_list
     *
     * @return string[]
     */
    public function getBrandList()
    {
        return $this->container['brand_list'];
    }

    /**
     * Sets brand_list
     *
     * @param string[] $brand_list An array of brands we have associated with this item. Some items are sold by more than 1 brand.
     *
     * @return $this
     */
    public function setBrandList($brand_list)
    {
        $this->container['brand_list'] = $brand_list;

        return $this;
    }

    /**
     * Gets countries
     *
     * @return string[]
     */
    public function getCountries()
    {
        return $this->container['countries'];
    }

    /**
     * Sets countries
     *
     * @param string[] $countries An array of countries where this item is sold
     *
     * @return $this
     */
    public function setCountries($countries)
    {
        $this->container['countries'] = $countries;

        return $this;
    }

    /**
     * Gets country_details
     *
     * @return \Swagger\Client\Model\BrandedFoodObjectCountryDetails
     */
    public function getCountryDetails()
    {
        return $this->container['country_details'];
    }

    /**
     * Sets country_details
     *
     * @param \Swagger\Client\Model\BrandedFoodObjectCountryDetails $country_details country_details
     *
     * @return $this
     */
    public function setCountryDetails($country_details)
    {
        $this->container['country_details'] = $country_details;

        return $this;
    }

    /**
     * Gets palm_oil_ingredients
     *
     * @return string[]
     */
    public function getPalmOilIngredients()
    {
        return $this->container['palm_oil_ingredients'];
    }

    /**
     * Sets palm_oil_ingredients
     *
     * @param string[] $palm_oil_ingredients An array of ingredients made from palm oil
     *
     * @return $this
     */
    public function setPalmOilIngredients($palm_oil_ingredients)
    {
        $this->container['palm_oil_ingredients'] = $palm_oil_ingredients;

        return $this;
    }

    /**
     * Gets ingredient_list
     *
     * @return string[]
     */
    public function getIngredientList()
    {
        return $this->container['ingredient_list'];
    }

    /**
     * Sets ingredient_list
     *
     * @param string[] $ingredient_list An array of this item's ingredients
     *
     * @return $this
     */
    public function setIngredientList($ingredient_list)
    {
        $this->container['ingredient_list'] = $ingredient_list;

        return $this;
    }

    /**
     * Gets has_english_ingredients
     *
     * @return bool
     */
    public function getHasEnglishIngredients()
    {
        return $this->container['has_english_ingredients'];
    }

    /**
     * Sets has_english_ingredients
     *
     * @param bool $has_english_ingredients A boolean indicating if we have English ingredients for this item
     *
     * @return $this
     */
    public function setHasEnglishIngredients($has_english_ingredients)
    {
        $this->container['has_english_ingredients'] = $has_english_ingredients;

        return $this;
    }

    /**
     * Gets minerals
     *
     * @return string[]
     */
    public function getMinerals()
    {
        return $this->container['minerals'];
    }

    /**
     * Sets minerals
     *
     * @param string[] $minerals An array of minerals that this item contains
     *
     * @return $this
     */
    public function setMinerals($minerals)
    {
        $this->container['minerals'] = $minerals;

        return $this;
    }

    /**
     * Gets traces
     *
     * @return string[]
     */
    public function getTraces()
    {
        return $this->container['traces'];
    }

    /**
     * Sets traces
     *
     * @param string[] $traces An array of trace ingredients that may be found in this item
     *
     * @return $this
     */
    public function setTraces($traces)
    {
        $this->container['traces'] = $traces;

        return $this;
    }

    /**
     * Gets vitamins
     *
     * @return string[]
     */
    public function getVitamins()
    {
        return $this->container['vitamins'];
    }

    /**
     * Sets vitamins
     *
     * @param string[] $vitamins An array of vitamins that are found in this item
     *
     * @return $this
     */
    public function setVitamins($vitamins)
    {
        $this->container['vitamins'] = $vitamins;

        return $this;
    }

    /**
     * Gets common_names
     *
     * @return string[]
     */
    public function getCommonNames()
    {
        return $this->container['common_names'];
    }

    /**
     * Sets common_names
     *
     * @param string[] $common_names An array containing other names commonly associated with this item. These generally clarify what the item is (e.g. when the brand name is \"BRAND's Spicy Enchilada\" a common name may be \"Chicken enchilada\")
     *
     * @return $this
     */
    public function setCommonNames($common_names)
    {
        $this->container['common_names'] = $common_names;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description A description of this item
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets keywords
     *
     * @return string[]
     */
    public function getKeywords()
    {
        return $this->container['keywords'];
    }

    /**
     * Sets keywords
     *
     * @param string[] $keywords An array of keywords that can be used to describe this item
     *
     * @return $this
     */
    public function setKeywords($keywords)
    {
        $this->container['keywords'] = $keywords;

        return $this;
    }

    /**
     * Gets footnote
     *
     * @return string
     */
    public function getFootnote()
    {
        return $this->container['footnote'];
    }

    /**
     * Sets footnote
     *
     * @param string $footnote Comments on any unusual aspects of this item. Examples might include unusual aspects of the food overall.
     *
     * @return $this
     */
    public function setFootnote($footnote)
    {
        $this->container['footnote'] = $footnote;

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
