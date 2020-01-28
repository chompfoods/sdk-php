# IngredientObjectItems

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Item name as provided by brand owner or as shown on packaging | [optional] 
**categories** | **string[]** |  | [optional] 
**nutrients** | [**\Swagger\Client\Model\IngredientObjectNutrients[]**](IngredientObjectNutrients.md) | An array containing nutrient informatio objects for this food item | [optional] 
**calorie_conversion_factor** | [**\Swagger\Client\Model\IngredientObjectCalorieConversionFactor**](IngredientObjectCalorieConversionFactor.md) |  | [optional] 
**protein_conversion_factor** | **float** | The multiplication factor used to calculate protein from nitrogen | [optional] 
**components** | [**\Swagger\Client\Model\IngredientObjectComponents[]**](IngredientObjectComponents.md) | An array of objects containing the constituent parts of a food (e.g. bone is a component of meat) | [optional] 
**portions** | [**\Swagger\Client\Model\IngredientObjectPortions[]**](IngredientObjectPortions.md) | An array of objects containing information on discrete amounts of a food found in this item | [optional] 
**common_name** | **string** | Common name associated with this item. These generally clarify what the item is (e.g. when the brand name is \&quot;BRAND&#x27;s Spicy Enchilada\&quot; the common name may be \&quot;Chicken enchilada\&quot;) | [optional] 
**footnote** | **string** | Comments on any unusual aspects of this item. Examples might include unusual aspects of the food overall. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

