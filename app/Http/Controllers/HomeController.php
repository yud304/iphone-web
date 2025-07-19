<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $iphones = [
            [
                'name' => 'iPhone 16 ProMax',
                'image' => 'storage/images/iPhones/Apple iPhone 16 Pro Max.jpeg',
                'wa' => 'https://api.whatsapp.com/send?phone=6285777010436&text=Hi%20admin%2C%20saya%20mau%20beli%20iPhone%2016%20ProMax%2C%20bisa%20dibantu%3F',
                'series' => 'iPhone 16',
            ],
            [
                'name' => 'iPhone 16 Pro',
                'image' => 'storage/images/iPhones/iPhone 16 Pro.jpeg',
                'wa' => 'https://api.whatsapp.com/send?phone=6285777010436&text=Hi%20admin%2C%20saya%20mau%20beli%20iPhone%2016%20Pro%2C%20bisa%20dibantu%3F',
                'series' => 'iPhone 16',
            ],
            [
                'name' => 'iPhone 16 Plus',
                'image' => 'storage/images/iPhones/iPhone 16 Plus.jpeg',
                'wa' => 'https://api.whatsapp.com/send?phone=6285777010436&text=Hi%20admin%2C%20saya%20mau%20beli%20iPhone%2016%20Plus%2C%20bisa%20dibantu%3F',
                'series' => 'iPhone 16',
            ],
            [
                'name' => 'iPhone 16',
                'image' => 'storage/images/iPhones/iPhone 16.jpeg',
                'wa' => 'https://api.whatsapp.com/send?phone=6285777010436&text=Hi%20admin%2C%20saya%20mau%20beli%20iPhone%2016%2C%20bisa%20dibantu%3F',
                'series' => 'iPhone 16',
            ],
            [
                'name' => 'iPhone 16e',
                'image' => 'storage/images/iPhones/iPhone 16e.jpeg',
                'wa' => 'https://api.whatsapp.com/send?phone=6285777010436&text=Hi%20admin%2C%20saya%20mau%20beli%20iPhone%2016e%2C%20bisa%20dibantu%3F',
                'series' => 'iPhone 16',
            ],
            [
                'name' => 'iPhone 15 ProMax',
                'image' => 'storage/images/iPhones/iPhone 15 Pro Max.jpeg',
                'wa' => 'https://api.whatsapp.com/send?phone=6285777010436&text=Hi%20admin%2C%20saya%20mau%20beli%20iPhone%2015%20ProMax%2C%20bisa%20dibantu%3F',
                'series' => 'iPhone 15',
            ],
            [
                'name' => 'iPhone 15 Pro',
                'image' => 'storage/images/iPhones/iPhone 15 Pro.jpeg',
                'wa' => 'https://api.whatsapp.com/send?phone=6285777010436&text=Hi%20admin%2C%20saya%20mau%20beli%20iPhone%2015%20Pro%2C%20bisa%20dibantu%3F',
                'series' => 'iPhone 15',
            ],
            [
                'name' => 'iPhone 15 Plus',
                'image' => 'storage/images/iPhones/iPhone 15 Plus.jpeg',
                'wa' => 'https://api.whatsapp.com/send?phone=6285777010436&text=Hi%20admin%2C%20saya%20mau%20beli%20iPhone%2015%20Plus%2C%20bisa%20dibantu%3F',
                'series' => 'iPhone 15',
            ],
            [
                'name' => 'iPhone 15',
                'image' => 'storage/images/iPhones/iPhone 15.jpeg',
                'wa' => 'https://api.whatsapp.com/send?phone=6285777010436&text=Hi%20admin%2C%20saya%20mau%20beli%20iPhone%2015%2C%20bisa%20dibantu%3F',
                'series' => 'iPhone 15',
            ],
        ];

        return view('home', compact('iphones'));
    }
}
