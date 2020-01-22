# IngredientObjectItems

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Item name as provided by brand owner or as shown on packaging | [optional] 
**categories** | **string[]** |  | [optional] 
**nutrients** | [**\Swagger\Client\Model\IngredientObjectNutrients**](IngredientObjectNutrients.md) |  | [optional] 
**calorie_conversion_factor** | [**\Swagger\Client\Model\BrandedFoodObjectCalorieConversionFactor**](BrandedFoodObjectCalorieConversionFactor.md) |  | [optional] 
**protein_conversion_factor** | **float** | The multiplication factor used to calculate protein from nitrogen | [optional] 
**diet_labels** | [**\Swagger\Client\Model\BrandedFoodObjectDietLabels**](BrandedFoodObjectDietLabels.md) |  | [optional] 
**components** | [**\Swagger\Client\Model\BrandedFoodObjectComponents[]**](BrandedFoodObjectComponents.md) | An array of objects containing the constituent parts of a food (e.g. bone is a component of meat) | [optional] 
**portions** | [**\Swagger\Client\Model\BrandedFoodObjectPortions[]**](BrandedFoodObjectPortions.md) | An array of objects containing information on discrete amounts of a food found in this item | [optional] 
**common_names** | **string** | Common names associated with this item. These generally clarify what the item is (e.g. when the brand name is \&quot;BRAND&#x27;s Spicy Enchilada\&quot; the common name may be \&quot;Chicken enchilada\&quot;) | [optional] 
**description** | **string** | A description of this item | [optional] 
**footnote** | **string** | Comments on any unusual aspects of this item. Examples might include unusual aspects of the food overall. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

