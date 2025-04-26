<?php

// checkout.php

// Autoload কম্পোজার লাইব্রেরি, নিশ্চিত করো যে তোমার প্রজেক্টে Stripe PHP SDK ইনস্টল আছে
require 'vendor/autoload.php';

// Stripe সিক্রেট কী সেট করা (আপনার কী দিয়ে পরিবর্তন করুন)
$stripeSecretKey = "sk_test_yourSecretKeyHere"; 
\Stripe\Stripe::setApiKey($stripeSecretKey);

// তোমার ডোমেন, এটা local বা production এর URL হতে পারে
$YOUR_DOMAIN = "http://localhost:4242";

try {
    // Checkout Session তৈরি করা
    $checkout_session = \Stripe\Checkout\Session::create([
        'line_items' => [[
            // এখানে তোমার প্রোডাক্টের Price ID দিন (যেমন: price_12345)
            'price' => 'PRICE_ID',
            'quantity' => 1,
        ]],
        'mode' => 'payment',
        'success_url' => $YOUR_DOMAIN . '/success.php',
        'cancel_url'  => $YOUR_DOMAIN . '/cancel.php',
    ]);

    // Session তৈরি হওয়ার পর, ব্যবহারকারীকে Stripe Checkout পেইজে Redirect করা হচ্ছে
    header("Location: " . $checkout_session->url);
    exit();
} catch (Exception $e) {
    // কোনো ত্রুটি হলে তা প্রদর্শন করা
    echo 'Error: ' . $e->getMessage();
}
