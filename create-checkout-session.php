<?php
// hello
require 'vendor/autoload.php';
\Stripe\Stripe::setApiKey('sk_test_51ItfJ9Dt89XNbtXpWR3NDgTahaxHyi7mexIFWrN4Tu3xIul0netThqm4pN5ZBy5pl1fTbOlpAbN6uKGJn5x64qti003vdOMla4');

header('Content-Type: application/json');

$YOUR_DOMAIN = '';

$checkout_session = \Stripe\Checkout\Session::create([
  'payment_method_types' => ['card'],
  'line_items' => [[
    'price_data' => [
      'currency' => 'usd',
      'unit_amount' => 2000,
      'product_data' => [
        'name' => 'Stubborn Attachments',
        'images' => ["https://i.imgur.com/EHyR2nP.png"],
      ],
    ],
    'quantity' => 1,
  ]],
  'mode' => 'payment',
  'success_url' => $YOUR_DOMAIN . '/success.html',
  'cancel_url' => $YOUR_DOMAIN . '/cancel.html',
]);

echo json_encode(['id' => $checkout_session->id]);