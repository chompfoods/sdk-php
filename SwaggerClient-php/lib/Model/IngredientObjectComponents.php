<?php
/**
 * IngredientObjectComponents
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
 * ## Important An **[API key](https://chompthis.com/api/)** is required for access to this API. Get yours at **[https://chompthis.com/api](https://chompthis.com/api/)**.  ### Getting Started   * **[Subscribe](https://chompthis.com/api/#pricing)** to the API.   * Scroll down and click the \"**Authorize**\" button.   * Enter your API key into the \"**value**\" input, click the \"**Authorize**\" button, then click the \"**Close**\" button.   * Scroll down to the section titled \"**default**\" and click on the API endpoint you wish to use.   * Click the \"**Try it out**\" button.   * Enter the information the endpoint requires.   * Click the \"**Execute**\" button.  ### Example    * Branded food response object: **[View example &raquo;](https://raw.githubusercontent.com/chompfoods/examples/master/branded-food-response-object.json)**   * Ingredient response object: **[View example &raquo;](https://raw.githubusercontent.com/chompfoods/examples/master/ingredient-response-object.json)**  ### How Do I Find My API Key?   * Your API key was sent to the email address you used to create your subscription.   * You will also find your API key in the **[Client Center](https://chompthis.com/api/manage.php)**.   * Read **[this article](https://desk.zoho.com/portal/chompthis/kb/articles/how-do-i-find-my-api-key)** for more information.  ### Helpful Links   * **Help & Support**     * [Knowledge Base &raquo;](https://desk.zoho.com/portal/chompthis/kb/chomp)     * [Support &raquo;](https://chompthis.com/api/ticket-new.php)     * [Client Center &raquo;](https://chompthis.com/api/manage.php)   * **Pricing**     * [Subscription Options &raquo;](https://chompthis.com/api/)     * [Cost Calculator &raquo;](https://chompthis.com/api/cost-calculator.php)   * **Guidelines**     * [Terms & License &raquo;](https://chompthis.com/api/terms.php)     * [Attribution &raquo;](https://chompthis.com/api/docs/attribution.php)
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
 * IngredientObjectComponents Class Doc Comment
 *
 * @category Class
 * @description An object containing information on a specific component of this food item
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IngredientObjectComponents implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'IngredientObject_components';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
'pct_weight' => 'float',
'gram_weight' => 'float',
'is_refuse' => 'bool',
'data_points' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
'pct_weight' => null,
'gram_weight' => null,
'is_refuse' => null,
'data_points' => null    ];

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
        'name' => 'name',
'pct_weight' => 'pct_weight',
'gram_weight' => 'gram_weight',
'is_refuse' => 'is_refuse',
'data_points' => 'data_points'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
'pct_weight' => 'setPctWeight',
'gram_weight' => 'setGramWeight',
'is_refuse' => 'setIsRefuse',
'data_points' => 'setDataPoints'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
'pct_weight' => 'getPctWeight',
'gram_weight' => 'getGramWeight',
'is_refuse' => 'getIsRefuse',
'data_points' => 'getDataPoints'    ];

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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['pct_weight'] = isset($data['pct_weight']) ? $data['pct_weight'] : null;
        $this->container['gram_weight'] = isset($data['gram_weight']) ? $data['gram_weight'] : null;
        $this->container['is_refuse'] = isset($data['is_refuse']) ? $data['is_refuse'] : null;
        $this->container['data_points'] = isset($data['data_points']) ? $data['data_points'] : null;
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
     * @param string $name The kind of component, e.g. bone
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets pct_weight
     *
     * @return float
     */
    public function getPctWeight()
    {
        return $this->container['pct_weight'];
    }

    /**
     * Sets pct_weight
     *
     * @param float $pct_weight The weight of the component as a percentage of the total weight of the food
     *
     * @return $this
     */
    public function setPctWeight($pct_weight)
    {
        $this->container['pct_weight'] = $pct_weight;

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
     * @param float $gram_weight The weight of the component in grams
     *
     * @return $this
     */
    public function setGramWeight($gram_weight)
    {
        $this->container['gram_weight'] = $gram_weight;

        return $this;
    }

    /**
     * Gets is_refuse
     *
     * @return bool
     */
    public function getIsRefuse()
    {
        return $this->container['is_refuse'];
    }

    /**
     * Sets is_refuse
     *
     * @param bool $is_refuse Whether the component is refuse, i.e. not edible
     *
     * @return $this
     */
    public function setIsRefuse($is_refuse)
    {
        $this->container['is_refuse'] = $is_refuse;

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
     * @param int $data_points The number of obersvations on which the measure is based
     *
     * @return $this
     */
    public function setDataPoints($data_points)
    {
        $this->container['data_points'] = $data_points;

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
