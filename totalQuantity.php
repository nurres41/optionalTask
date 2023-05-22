<?php

// JSON file read
$jsonData = file_get_contents('data.json');

// JSON data convert to array
$data = json_decode($jsonData, true);

$products = array();

//Check each user's purchase history
foreach ($data as $user) {
    foreach ($user['purchase_history'] as $purchase) {

        $productName = $purchase['product'];
        $quantity = $purchase['quantity'];

        //Check if the product is in the array
        if (isset($products[$productName])) {
            //There is a product, increase the quantity
            $products[$productName] += $quantity;
        }
        else {
            //No product, create a new entry
            $products[$productName] = $quantity;
        }
    }
}

arsort($products); //Sort by value (Descending)

$topThreePurchasedKeys = array_keys(array_slice($products, 0, 3, true));

$quantityFirstProduct =$products[$topThreePurchasedKeys[0]];
$quantitySecondProduct =$products[$topThreePurchasedKeys[1]];
$quantityThirdProduct =$products[$topThreePurchasedKeys[2]];
