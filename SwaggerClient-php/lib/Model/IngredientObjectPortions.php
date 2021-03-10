<?php
/**
 * IngredientObjectPortions
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Chomp Food & Recipe Database API Documentation
 *
 * ## Important An **[API key](https://chompthis.com/api/)** is required for access to this API. * Get a **Food Data API** key at **[https://chompthis.com/api](https://chompthis.com/api/)**. * Get a **Recipe Data API** key at **[https://chompthis.com/api/recipes](https://chompthis.com/api/recipes/)**.  ### Getting Started   * Subscribe to the **[Food Data API](https://chompthis.com/api/#pricing)** or the **[Recipe Data API](https://chompthis.com/api/recipes/#pricing)**.   * Scroll down and click the \"**Authorize**\" button.   * Enter your API key into the \"**value**\" input, click the \"**Authorize**\" button, then click the \"**Close**\" button.   * Scroll down to the section titled \"**default**\" and click on the API endpoint you wish to use.   * Click the \"**Try it out**\" button.   * Enter the information the endpoint requires.   * Click the \"**Execute**\" button.  ### Example    * Branded food response object: **[View example &raquo;](https://raw.githubusercontent.com/chompfoods/examples/master/branded-food-response-object.json)**   * Ingredient response object: **[View example &raquo;](https://raw.githubusercontent.com/chompfoods/examples/master/ingredient-response-object.json)**   * Recipe response object: **[View example &raquo;](https://raw.githubusercontent.com/chompfoods/examples/master/example-recipe-response.json)**   * Error response object: **[View example &raquo;](https://raw.githubusercontent.com/chompfoods/examples/master/error-response-object.json)**  ### How Do I Find My API Key?   * Your API key was sent to the email address you used to create your subscription.   * You will also find your API key in the **[Client Center](https://chompthis.com/api/manage.php)**.   * Read **[this article](https://desk.zoho.com/portal/chompthis/kb/articles/how-do-i-find-my-api-key)** for more information.  ### I'm a Premium subscriber. How do I access the API?   * All Premium subscribers must pass in a unique user ID for each user on their platform that is accessing data from the Chomp API. A user ID can be any string of letters and numbers that you assign to your user. Simply add \"user_id\" as a URL parameter when calling the API. *You must add a \"user_id\" URL parameter to every call you make to ANY endpoint.*     * **Example**        > ```ENDPOINT.php?api_key=API_KEY&code=CODE&user_id=USER_ID```  ### Helpful Links   * **Help & Support**     * [Knowledge Base &raquo;](https://desk.zoho.com/portal/chompthis/kb/chomp)     * [Support &raquo;](https://chompthis.com/api/ticket-new.php)     * [Client Center &raquo;](https://chompthis.com/api/manage.php)   * **Pricing**     * [Food Data API Subscription Options &raquo;](https://chompthis.com/api/)     * [Recipe Data API Subscription Options &raquo;](https://chompthis.com/api/recipes/)     * [Food Data API Cost Calculator &raquo;](https://chompthis.com/api/cost-calculator.php)     * [Recipe Data API Cost Calculator &raquo;](https://chompthis.com/api/recipes/cost-calculator.php)   * **Guidelines**     * [Terms & License &raquo;](https://chompthis.com/api/terms.php)     * [Attribution &raquo;](https://chompthis.com/api/docs/attribution.php)
 *
 * OpenAPI spec version: 1.0.0-oas3
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.24
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
 * IngredientObjectPortions Class Doc Comment
 *
 * @category Class
 * @description An object containing information on a specific food portion found in this item
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IngredientObjectPortions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'IngredientObject_portions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'measurement_unit' => 'string',
'description' => 'string',
'modifier' => 'string',
'gram_weight' => 'float',
'data_points' => 'int',
'footnote' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'measurement_unit' => null,
'description' => null,
'modifier' => null,
'gram_weight' => null,
'data_points' => null,
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
        'measurement_unit' => 'measurement_unit',
'description' => 'description',
'modifier' => 'modifier',
'gram_weight' => 'gram_weight',
'data_points' => 'data_points',
'footnote' => 'footnote'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'measurement_unit' => 'setMeasurementUnit',
'description' => 'setDescription',
'modifier' => 'setModifier',
'gram_weight' => 'setGramWeight',
'data_points' => 'setDataPoints',
'footnote' => 'setFootnote'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'measurement_unit' => 'getMeasurementUnit',
'description' => 'getDescription',
'modifier' => 'getModifier',
'gram_weight' => 'getGramWeight',
'data_points' => 'getDataPoints',
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
        $this->container['measurement_unit'] = isset($data['measurement_unit']) ? $data['measurement_unit'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['modifier'] = isset($data['modifier']) ? $data['modifier'] : null;
        $this->container['gram_weight'] = isset($data['gram_weight']) ? $data['gram_weight'] : null;
        $this->container['data_points'] = isset($data['data_points']) ? $data['data_points'] : null;
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
     * Gets measurement_unit
     *
     * @return string
     */
    public function getMeasurementUnit()
    {
        return $this->container['measurement_unit'];
    }

    /**
     * Sets measurement_unit
     *
     * @param string $measurement_unit The unit used for measure (e.g. if mesure is 3 tsp, the unit is tsp)
     *
     * @return $this
     */
    public function setMeasurementUnit($measurement_unit)
    {
        $this->container['measurement_unit'] = $measurement_unit;

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
     * @param string $description Comments that provide more specificity on the measure. For example, for a pizza measure the dissemination text might be 1 slice is 1/8th of a 14 inch pizza.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets modifier
     *
     * @return string
     */
    public function getModifier()
    {
        return $this->container['modifier'];
    }

    /**
     * Sets modifier
     *
     * @param string $modifier Qualifier of the measure (e.g. related to food shape or form) (e.g. melted, crushed, diced)
     *
     * @return $this
     */
    public function setModifier($modifier)
    {
        $this->container['modifier'] = $modifier;

        return $this;
    }

    /**
     * Gets gram_weight
     *
     * @return float
     */
    public function getGramWeight()
    {
        return $this->container['gram_weight'];
    }

    /**
     * Sets gram_weight
     *
     * @param float $gram_weight The weight of the measure in grams
     *
     * @return $this
     */
    public function setGramWeight($gram_weight)
    {
        $this->container['gram_weight'] = $gram_weight;

        return $this;
    }

    /**
     * Gets data_points
     *
     * @return int
     */
    public function getDataPoints()
    {
        return $this->container['data_points'];
    }

    /**
     * Sets data_points
     *
     * @param int $data_points The number of observations on which the measure is based
     *
     * @return $this
     */
    public function setDataPoints($data_points)
    {
        $this->container['data_points'] = $data_points;

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
     * @param string $footnote Comments on any unusual aspects of the measure. Examples might includes caveats on the usage of a measure, or reasons why a measure gram weight is an unexpected value.
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
