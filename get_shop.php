<?php

	session_start();

	require __DIR__.'/vendor/autoload.php';
	use phpish\shopify;

	require __DIR__.'/conf.php';

	$shopify = shopify\client(SHOPIFY_SHOP, SHOPIFY_APP_API_KEY, SHOPIFY_APP_PASSWORD, true);

	try
	{
		// Making an API request can throw an exception
		$shop = $shopify('GET /admin/shop.json');
		print_r($shop);
	}
	catch (shopify\ApiException $e)
	{
		// HTTP status code was >= 400 or response contained the key 'errors'
		echo $e;
		print_r($e->getRequest());
		print_r($e->getResponse());
	}
	catch (shopify\CurlException $e)
	{
		// cURL error
		echo $e;
		print_r($e->getRequest());
		print_r($e->getResponse());
	}

?>
