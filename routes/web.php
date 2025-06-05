<?php

use App\Models\Items;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/login', function () {
    return view('login', ['title' => 'Login']);
});

Route::get('/register', function () {
    return view('register', ['title' => 'Register']);
});

Route::get('/', function () {
    return view('app', ['title' => 'Beranda', 'items' => Items::paginate(8)]);
});

Route::get('/cart', function () {
    return view('cart', ['title' => 'Keranjangmu', 'items' => Items::paginate(3)]);
});

Route::get('/{item:slug}', function (Items $item) {
    return view('item', ['title' => 'Detail', 'item' => $item]);
});

Route::post('/add-to-cart', function (Request $request) {
    $itemId = $request->input('item_id');
    $item = Items::findOrFail($itemId);

    $cart = session()->get('cart', []);

    if (isset($cart[$itemId])) {
        $cart[$itemId]['quantity']++;
    } else {
        $cart[$itemId] = [
            'id' => $item->id,
            'name' => $item->name,
            'slug' => $item->slug,
            'description' => $item->description,
            'price' => $item->price,
            'image1' => $item->image1,
            'image2' => $item->image2,
            'quantity' => 1,
        ];
    }

    session()->put('cart', $cart);

    return redirect('/cart')->with('success', 'Item berhasil ditambahkan ke keranjang!');
});

Route::post('/cart/update/{id}/{action}', function ($id, $action) {
    $cart = session()->get('cart', []);
    if (isset($cart[$id])) {
        if ($action === 'increment') {
            $cart[$id]['quantity']++;
        } elseif ($action === 'decrement') {
            $cart[$id]['quantity'] = max(1, $cart[$id]['quantity'] - 1);
        }
        session()->put('cart', $cart);
    }
    return back();
})->name('cart.update');

Route::post('/cart/remove/{id}', function ($id) {
    $cart = session()->get('cart', []);
    unset($cart[$id]);
    session()->put('cart', $cart);
    return back();
})->name('cart.remove');



