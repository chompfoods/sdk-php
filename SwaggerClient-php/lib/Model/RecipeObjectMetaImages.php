<?php
/**
 * RecipeObjectMetaImages
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
 * RecipeObjectMetaImages Class Doc Comment
 *
 * @category Class
 * @description An object containing this recipe&#x27;s image URLs
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RecipeObjectMetaImages implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RecipeObject_meta_images';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'extra_large' => 'string',
'large' => 'string',
'standard' => 'string',
'grid_view' => 'string',
'small' => 'string',
'thumbnail' => 'string',
'extra_small' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'extra_large' => null,
'large' => null,
'standard' => null,
'grid_view' => null,
'small' => null,
'thumbnail' => null,
'extra_small' => null    ];

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
        'extra_large' => 'extra_large',
'large' => 'large',
'standard' => 'standard',
'grid_view' => 'grid_view',
'small' => 'small',
'thumbnail' => 'thumbnail',
'extra_small' => 'extra_small'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'extra_large' => 'setExtraLarge',
'large' => 'setLarge',
'standard' => 'setStandard',
'grid_view' => 'setGridView',
'small' => 'setSmall',
'thumbnail' => 'setThumbnail',
'extra_small' => 'setExtraSmall'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'extra_large' => 'getExtraLarge',
'large' => 'getLarge',
'standard' => 'getStandard',
'grid_view' => 'getGridView',
'small' => 'getSmall',
'thumbnail' => 'getThumbnail',
'extra_small' => 'getExtraSmall'    ];

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
        $this->container['extra_large'] = isset($data['extra_large']) ? $data['extra_large'] : null;
        $this->container['large'] = isset($data['large']) ? $data['large'] : null;
        $this->container['standard'] = isset($data['standard']) ? $data['standard'] : null;
        $this->container['grid_view'] = isset($data['grid_view']) ? $data['grid_view'] : null;
        $this->container['small'] = isset($data['small']) ? $data['small'] : null;
        $this->container['thumbnail'] = isset($data['thumbnail']) ? $data['thumbnail'] : null;
        $this->container['extra_small'] = isset($data['extra_small']) ? $data['extra_small'] : null;
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
     * Gets extra_large
     *
     * @return string
     */
    public function getExtraLarge()
    {
        return $this->container['extra_large'];
    }

    /**
     * Sets extra_large
     *
     * @param string $extra_large Extra large recipe image
     *
     * @return $this
     */
    public function setExtraLarge($extra_large)
    {
        $this->container['extra_large'] = $extra_large;

        return $this;
    }

    /**
     * Gets large
     *
     * @return string
     */
    public function getLarge()
    {
        return $this->container['large'];
    }

    /**
     * Sets large
     *
     * @param string $large Large recipe image
     *
     * @return $this
     */
    public function setLarge($large)
    {
        $this->container['large'] = $large;

        return $this;
    }

    /**
     * Gets standard
     *
     * @return string
     */
    public function getStandard()
    {
        return $this->container['standard'];
    }

    /**
     * Sets standard
     *
     * @param string $standard Standard recipe image
     *
     * @return $this
     */
    public function setStandard($standard)
    {
        $this->container['standard'] = $standard;

        return $this;
    }

    /**
     * Gets grid_view
     *
     * @return string
     */
    public function getGridView()
    {
        return $this->container['grid_view'];
    }

    /**
     * Sets grid_view
     *
     * @param string $grid_view Grid view recipe image
     *
     * @return $this
     */
    public function setGridView($grid_view)
    {
        $this->container['grid_view'] = $grid_view;

        return $this;
    }

    /**
     * Gets small
     *
     * @return string
     */
    public function getSmall()
    {
        return $this->container['small'];
    }

    /**
     * Sets small
     *
     * @param string $small Small recipe image
     *
     * @return $this
     */
    public function setSmall($small)
    {
        $this->container['small'] = $small;

        return $this;
    }

    /**
     * Gets thumbnail
     *
     * @return string
     */
    public function getThumbnail()
    {
        return $this->container['thumbnail'];
    }

    /**
     * Sets thumbnail
     *
     * @param string $thumbnail Thumbnail recipe image
     *
     * @return $this
     */
    public function setThumbnail($thumbnail)
    {
        $this->container['thumbnail'] = $thumbnail;

        return $this;
    }

    /**
     * Gets extra_small
     *
     * @return string
     */
    public function getExtraSmall()
    {
        return $this->container['extra_small'];
    }

    /**
     * Sets extra_small
     *
     * @param string $extra_small Extra small recipe image
     *
     * @return $this
     */
    public function setExtraSmall($extra_small)
    {
        $this->container['extra_small'] = $extra_small;

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
