<?php
	// Multi dimensional array for storing data
	$subscriptionData = array(
    	"id" => "sub_1NiGuB2eZ",
    	"object" => "subscription",
    	"items" => array(
        	"object" => "list",
        	"data" => array(
            	array(
                	"id" => "si_OVHTBQE",
                	"object" => "subscription_item",
                	"price" => array(
                    	"id" => "plan_OUwcmF6",
                    	"object" => "price",
                    	"amount" => 24.99,
                    	"currency" => "USD",
                	),
            	),
        	),
    	),
	);

	// Printing the amount the user pays
	echo $subscriptionData['items']['data'][0]['price']['amount'];
?>