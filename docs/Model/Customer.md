# Customer

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] 
**email** | **string** |  | 
**tax_number** | **string** | The tax number for the customer &lt;strong&gt;Since 1.1&lt;/strong&gt; | [optional] 
**standard_tax_rate** | **float** | The tax rate for the customer on for standard services a &lt;strong&gt;Since 1.1&lt;/strong&gt; | [optional] 
**digital_tax_rate** | **float** | The tax rate for the customer on digital services &lt;strong&gt;Since 1.1&lt;/strong&gt; | [optional] 
**billing_type** | **string** | Choice between card and invoice | [optional] 
**type** | **string** | Choice between &#x27;individual&#x27; and &#x27;business&#x27;. When not provided &#x27;individual&#x27; is used. &lt;strong&gt;Since 1.1&lt;/strong&gt; | [optional] 
**reference** | **string** |  | [optional] 
**external_reference** | **string** |  | [optional] 
**address** | [**\BillaBear\Model\Address**](Address.md) |  | [optional] 
**locale** | **string** | Defaults to &#x27;en&#x27; if not sent. | [optional] 
**brand** | **string** | Defaults to &#x27;default&#x27; if not sent. | [optional] 
**invoice_format** | **string** | Choice between &#x27;pdf&#x27; and &#x27;xrechnung&#x27;. &lt;strong&gt;Since 2024.02.01&lt;/strong&gt; | [optional] 
**marketing_opt_in** | **bool** | If the customer has opted in for marketing | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

