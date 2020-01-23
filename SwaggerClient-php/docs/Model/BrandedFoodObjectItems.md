# BrandedFoodObjectItems

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**barcode** | **string** | EAN/UPC barcode | [optional] 
**name** | **string** | Item name as provided by brand owner or as shown on packaging | [optional] 
**brand** | **string** | The brand name that owns this item | [optional] 
**ingredients** | [**\Swagger\Client\Model\BrandedFoodObjectIngredients**](BrandedFoodObjectIngredients.md) |  | [optional] 
**package** | [**\Swagger\Client\Model\BrandedFoodObjectPackage**](BrandedFoodObjectPackage.md) |  | [optional] 
**serving** | [**\Swagger\Client\Model\BrandedFoodObjectServing**](BrandedFoodObjectServing.md) |  | [optional] 
**categories** | **string[]** |  | [optional] 
**nutrients** | [**\Swagger\Client\Model\BrandedFoodObjectNutrients**](BrandedFoodObjectNutrients.md) |  | [optional] 
**calorie_conversion_factor** | [**\Swagger\Client\Model\BrandedFoodObjectCalorieConversionFactor**](BrandedFoodObjectCalorieConversionFactor.md) |  | [optional] 
**protein_conversion_factor** | **float** | The multiplication factor used to calculate protein from nitrogen | [optional] 
**diet_labels** | [**\Swagger\Client\Model\BrandedFoodObjectDietLabels**](BrandedFoodObjectDietLabels.md) |  | [optional] 
**diet_flags** | [**\Swagger\Client\Model\BrandedFoodObjectDietFlags[]**](BrandedFoodObjectDietFlags.md) | An array of ingredient objects that were flagged while grading this item for compatibility with each diet | [optional] 
**packaging_photos** | [**\Swagger\Client\Model\BrandedFoodObjectPackagingPhotos**](BrandedFoodObjectPackagingPhotos.md) |  | [optional] 
**allergens** | **string[]** | An array of ingredients in this item that may cause allergic reactions in people | [optional] 
**brand_list** | **string[]** | An array of brands we have associated with this item. Some items are sold by more than 1 brand. | [optional] 
**countries** | **string[]** | An array of countries where this item is sold | [optional] 
**country_details** | [**\Swagger\Client\Model\BrandedFoodObjectCountryDetails**](BrandedFoodObjectCountryDetails.md) |  | [optional] 
**palm_oil_ingredients** | **string[]** | An array of ingredients made from palm oil | [optional] 
**ingredient_list** | **string[]** | An array of this item&#x27;s ingredients | [optional] 
**has_english_ingredients** | **bool** | A boolean indicating if we have English ingredients for this item | [optional] 
**minerals** | **string[]** | An array of minerals that this item contains | [optional] 
**traces** | **string[]** | An array of trace ingredients that may be found in this item | [optional] 
**vitamins** | **string[]** | An array of vitamins that are found in this item | [optional] 
**description** | **string** | A description of this item | [optional] 
**keywords** | **string[]** | An array of keywords that can be used to describe this item | [optional] 
**footnote** | **string** | Comments on any unusual aspects of this item. Examples might include unusual aspects of the food overall. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

