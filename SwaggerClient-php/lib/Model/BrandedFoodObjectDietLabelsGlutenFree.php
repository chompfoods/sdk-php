<?php
/**
 * BrandedFoodObjectDietLabelsGlutenFree
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
 * BrandedFoodObjectDietLabelsGlutenFree Class Doc Comment
 *
 * @category Class
 * @description An object containing information on this item&#x27;s compatibility with Gluten Free diets
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BrandedFoodObjectDietLabelsGlutenFree implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BrandedFoodObject_diet_labels_gluten_free';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
'is_compatible' => 'bool',
'compatibility_level' => 'int',
'confidence' => 'int',
'confidence_description' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
'is_compatible' => null,
'compatibility_level' => null,
'confidence' => null,
'confidence_description' => null    ];

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
'is_compatible' => 'is_compatible',
'compatibility_level' => 'compatibility_level',
'confidence' => 'confidence',
'confidence_description' => 'confidence_description'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
'is_compatible' => 'setIsCompatible',
'compatibility_level' => 'setCompatibilityLevel',
'confidence' => 'setConfidence',
'confidence_description' => 'setConfidenceDescription'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
'is_compatible' => 'getIsCompatible',
'compatibility_level' => 'getCompatibilityLevel',
'confidence' => 'getConfidence',
'confidence_description' => 'getConfidenceDescription'    ];

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
        $this->container['is_compatible'] = isset($data['is_compatible']) ? $data['is_compatible'] : null;
        $this->container['compatibility_level'] = isset($data['compatibility_level']) ? $data['compatibility_level'] : null;
        $this->container['confidence'] = isset($data['confidence']) ? $data['confidence'] : null;
        $this->container['confidence_description'] = isset($data['confidence_description']) ? $data['confidence_description'] : null;
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
     * @param string $name Diet name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets is_compatible
     *
     * @return bool
     */
    public function getIsCompatible()
    {
        return $this->container['is_compatible'];
    }

    /**
     * Sets is_compatible
     *
     * @param bool $is_compatible Boolean describing if this item is compatible with this diet
     *
     * @return $this
     */
    public function setIsCompatible($is_compatible)
    {
        $this->container['is_compatible'] = $is_compatible;

        return $this;
    }

    /**
     * Gets compatibility_level
     *
     * @return int
     */
    public function getCompatibilityLevel()
    {
        return $this->container['compatibility_level'];
    }

    /**
     * Sets compatibility_level
     *
     * @param int $compatibility_level Numeric representation of how compatible this item is with this diet. Higher values indicate more compatibility
     *
     * @return $this
     */
    public function setCompatibilityLevel($compatibility_level)
    {
        $this->container['compatibility_level'] = $compatibility_level;

        return $this;
    }

    /**
     * Gets confidence
     *
     * @return int
     */
    public function getConfidence()
    {
        return $this->container['confidence'];
    }

    /**
     * Sets confidence
     *
     * @param int $confidence Boolean that indicates if we are confident in how this item is graded for this diet
     *
     * @return $this
     */
    public function setConfidence($confidence)
    {
        $this->container['confidence'] = $confidence;

        return $this;
    }

    /**
     * Gets confidence_description
     *
     * @return string
     */
    public function getConfidenceDescription()
    {
        return $this->container['confidence_description'];
    }

    /**
     * Sets confidence_description
     *
     * @param string $confidence_description Description of our confidence that this item was graded correctly
     *
     * @return $this
     */
    public function setConfidenceDescription($confidence_description)
    {
        $this->container['confidence_description'] = $confidence_description;

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
