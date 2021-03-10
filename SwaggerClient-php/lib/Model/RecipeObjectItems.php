<?php
/**
 * RecipeObjectItems
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
 * RecipeObjectItems Class Doc Comment
 *
 * @category Class
 * @description An object containing information for this specific item.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RecipeObjectItems implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RecipeObject_items';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'title' => 'string',
'meta' => '\Swagger\Client\Model\RecipeObjectMeta',
'categories' => 'string[]',
'author' => 'string',
'keywords' => 'string[]',
'topics' => 'string[]',
'attributes' => '\Swagger\Client\Model\RecipeObjectAttributes',
'ingredients' => '\Swagger\Client\Model\RecipeObjectIngredients[]',
'base_ingredients' => 'string[]',
'nutrients' => '\Swagger\Client\Model\RecipeObjectNutrients',
'diabetic_exchanges' => 'string[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'title' => null,
'meta' => null,
'categories' => null,
'author' => null,
'keywords' => null,
'topics' => null,
'attributes' => null,
'ingredients' => null,
'base_ingredients' => null,
'nutrients' => null,
'diabetic_exchanges' => null    ];

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
        'id' => 'id',
'title' => 'title',
'meta' => 'meta',
'categories' => 'categories',
'author' => 'author',
'keywords' => 'keywords',
'topics' => 'topics',
'attributes' => 'attributes',
'ingredients' => 'ingredients',
'base_ingredients' => 'base_ingredients',
'nutrients' => 'nutrients',
'diabetic_exchanges' => 'diabetic_exchanges'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'title' => 'setTitle',
'meta' => 'setMeta',
'categories' => 'setCategories',
'author' => 'setAuthor',
'keywords' => 'setKeywords',
'topics' => 'setTopics',
'attributes' => 'setAttributes',
'ingredients' => 'setIngredients',
'base_ingredients' => 'setBaseIngredients',
'nutrients' => 'setNutrients',
'diabetic_exchanges' => 'setDiabeticExchanges'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'title' => 'getTitle',
'meta' => 'getMeta',
'categories' => 'getCategories',
'author' => 'getAuthor',
'keywords' => 'getKeywords',
'topics' => 'getTopics',
'attributes' => 'getAttributes',
'ingredients' => 'getIngredients',
'base_ingredients' => 'getBaseIngredients',
'nutrients' => 'getNutrients',
'diabetic_exchanges' => 'getDiabeticExchanges'    ];

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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['meta'] = isset($data['meta']) ? $data['meta'] : null;
        $this->container['categories'] = isset($data['categories']) ? $data['categories'] : null;
        $this->container['author'] = isset($data['author']) ? $data['author'] : null;
        $this->container['keywords'] = isset($data['keywords']) ? $data['keywords'] : null;
        $this->container['topics'] = isset($data['topics']) ? $data['topics'] : null;
        $this->container['attributes'] = isset($data['attributes']) ? $data['attributes'] : null;
        $this->container['ingredients'] = isset($data['ingredients']) ? $data['ingredients'] : null;
        $this->container['base_ingredients'] = isset($data['base_ingredients']) ? $data['base_ingredients'] : null;
        $this->container['nutrients'] = isset($data['nutrients']) ? $data['nutrients'] : null;
        $this->container['diabetic_exchanges'] = isset($data['diabetic_exchanges']) ? $data['diabetic_exchanges'] : null;
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Unique recipe ID
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title Recipe title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets meta
     *
     * @return \Swagger\Client\Model\RecipeObjectMeta
     */
    public function getMeta()
    {
        return $this->container['meta'];
    }

    /**
     * Sets meta
     *
     * @param \Swagger\Client\Model\RecipeObjectMeta $meta meta
     *
     * @return $this
     */
    public function setMeta($meta)
    {
        $this->container['meta'] = $meta;

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
     * Gets author
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->container['author'];
    }

    /**
     * Sets author
     *
     * @param string $author The author of this recipe. You must attribute this author when displaying this recipe.
     *
     * @return $this
     */
    public function setAuthor($author)
    {
        $this->container['author'] = $author;

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
     * @param string[] $keywords keywords
     *
     * @return $this
     */
    public function setKeywords($keywords)
    {
        $this->container['keywords'] = $keywords;

        return $this;
    }

    /**
     * Gets topics
     *
     * @return string[]
     */
    public function getTopics()
    {
        return $this->container['topics'];
    }

    /**
     * Sets topics
     *
     * @param string[] $topics topics
     *
     * @return $this
     */
    public function setTopics($topics)
    {
        $this->container['topics'] = $topics;

        return $this;
    }

    /**
     * Gets attributes
     *
     * @return \Swagger\Client\Model\RecipeObjectAttributes
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     *
     * @param \Swagger\Client\Model\RecipeObjectAttributes $attributes attributes
     *
     * @return $this
     */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;

        return $this;
    }

    /**
     * Gets ingredients
     *
     * @return \Swagger\Client\Model\RecipeObjectIngredients[]
     */
    public function getIngredients()
    {
        return $this->container['ingredients'];
    }

    /**
     * Sets ingredients
     *
     * @param \Swagger\Client\Model\RecipeObjectIngredients[] $ingredients An array containing this recipe's ingredients
     *
     * @return $this
     */
    public function setIngredients($ingredients)
    {
        $this->container['ingredients'] = $ingredients;

        return $this;
    }

    /**
     * Gets base_ingredients
     *
     * @return string[]
     */
    public function getBaseIngredients()
    {
        return $this->container['base_ingredients'];
    }

    /**
     * Sets base_ingredients
     *
     * @param string[] $base_ingredients base_ingredients
     *
     * @return $this
     */
    public function setBaseIngredients($base_ingredients)
    {
        $this->container['base_ingredients'] = $base_ingredients;

        return $this;
    }

    /**
     * Gets nutrients
     *
     * @return \Swagger\Client\Model\RecipeObjectNutrients
     */
    public function getNutrients()
    {
        return $this->container['nutrients'];
    }

    /**
     * Sets nutrients
     *
     * @param \Swagger\Client\Model\RecipeObjectNutrients $nutrients nutrients
     *
     * @return $this
     */
    public function setNutrients($nutrients)
    {
        $this->container['nutrients'] = $nutrients;

        return $this;
    }

    /**
     * Gets diabetic_exchanges
     *
     * @return string[]
     */
    public function getDiabeticExchanges()
    {
        return $this->container['diabetic_exchanges'];
    }

    /**
     * Sets diabetic_exchanges
     *
     * @param string[] $diabetic_exchanges diabetic_exchanges
     *
     * @return $this
     */
    public function setDiabeticExchanges($diabetic_exchanges)
    {
        $this->container['diabetic_exchanges'] = $diabetic_exchanges;

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
