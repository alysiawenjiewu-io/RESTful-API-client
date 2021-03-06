<?php
/*
Retrieves invoices for merchant account filtered by query.

To access resource URI, an API Key will need to be sent within the HTTP headers Authorization: BASIC AccountID:APIKey
encoded in base64 over SSL. Ensure that you use Base64 to encode AccountID:APIKey and replace the value of "REPLACE_WITH_BASE64_ENCODED_CREDENTIALS"

Before making a request to the endpoint, please replace the value of "REPLACE_WITH_VALUE" for each parameter
For detailed schema, parameters, code snippet and returned responses, read https://atomicpay.io/api/en#resource-Invoices
*/

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://merchant.atomicpay.io/api/v1/invoices/REPLACE_WITH_VALUE",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "Authorization: Basic REPLACE_WITH_BASE64_ENCODED_CREDENTIALS",
    "Content-Type: application/json",
    "cache-control: no-cache"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "Error:" . $err;
} else {
  echo $response;
}