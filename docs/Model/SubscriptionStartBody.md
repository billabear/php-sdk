# SubscriptionStartBody

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**subscription_plan** | **string** | The ID for the subscription plan to be used (Can also be the code name) | 
**payment_details** | **string** | The Id for the customer&#x27;s payment details to be used | [optional] 
**card_token** | **string** | A stripe card token that&#x27;s been created using Stripe&#x27;s js sdk. It&#x27;ll create the payment details for the customer. | [optional] 
**price** | **string** | The ID for the price to be used | [optional] 
**schedule** | **string** | The schedule of the plan that is to be started. Only used if price isn&#x27;t given. Requires currency as well. | [optional] 
**currency** | **string** | The currency of the plan that is to be started. Only used if price isn&#x27;t given. Requires schedule as well. | [optional] 
**seat_numbrers** | **int** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

