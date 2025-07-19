<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

    Route::get('/products', function () {
        $products = [
            ['id' => 1, 'name' => 'iPhone 14 Pro', 'description' => 'Latest iPhone with Pro features', 'price' => 999, 'image' => 'https://via.placeholder.com/600x400?text=iPhone+14+Pro'],
            ['id' => 2, 'name' => 'iPhone 14', 'description' => 'Latest iPhone with great features', 'price' => 799, 'image' => 'https://via.placeholder.com/600x400?text=iPhone+14'],
            ['id' => 3, 'name' => 'iPhone SE', 'description' => 'Affordable iPhone with classic design', 'price' => 399, 'image' => 'https://via.placeholder.com/600x400?text=iPhone+SE'],
        ];
        return view('products', ['products' => $products]);
    });

Route::get('/product/{id}', function ($id) {
    return redirect('https://api.whatsapp.com/send?phone=6285777010436&text=Hi%20admin%20Jualiphone%2C%20saya%20Mau%20Jual%20iPhone%2015%20ProMax%2C%20Bisa%20dibantu%20%3F');
});

Route::get('/cart', function () {
    $cart = session('cart', []);
    $total = 0;
    foreach ($cart as $item) {
        $total += $item['price'] * $item['quantity'];
    }
    return view('cart', ['cart' => $cart, 'total' => $total]);
});

Route::post('/cart/add/{id}', function ($id) {
    $products = [
        1 => ['id' => 1, 'name' => 'iPhone 14 Pro', 'price' => 999],
        2 => ['id' => 2, 'name' => 'iPhone 14', 'price' => 799],
        3 => ['id' => 3, 'name' => 'iPhone SE', 'price' => 399],
    ];
    if (!isset($products[$id])) {
        abort(404);
    }
    $cart = session('cart', []);
    if (isset($cart[$id])) {
        $cart[$id]['quantity']++;
    } else {
        $cart[$id] = ['id' => $id, 'name' => $products[$id]['name'], 'price' => $products[$id]['price'], 'quantity' => 1];
    }
    session(['cart' => $cart]);
    return redirect('/cart');
});

Route::post('/cart/remove/{id}', function ($id) {
    $cart = session('cart', []);
    if (isset($cart[$id])) {
        unset($cart[$id]);
    }
    session(['cart' => $cart]);
    return redirect('/cart');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/products/{id}', function ($id) {
    return redirect('https://api.whatsapp.com/send?phone=6285777010436&text=Hi%20admin%20Jualiphone%2C%20saya%20Mau%20Jual%20iPhone%2015%20ProMax%2C%20Bisa%20dibantu%20%3F');
});

Route::get('/cart', function () {
    $cart = [
        ['name' => 'iPhone 14 Pro', 'price' => 999, 'quantity' => 1],
        ['name' => 'iPhone SE', 'price' => 399, 'quantity' => 2],
    ];
    $total = 999 * 1 + 399 * 2;
    return view('cart', ['cart' => $cart, 'total' => $total]);
});
