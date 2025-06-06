<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


Route::get('/', function () {
    return view('pages.home');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/tools', function () {
    return view('pages.tools');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::post('/contact', function (Request $request) {
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required',
    ]);

    Mail::raw($request->message, function ($mail) use ($request) {
        $mail->from($request->email, $request->name);
        $mail->to('danielrvazquez190805@gmail.com')
             ->subject('Nuevo mensaje desde tu portfolio');
    });

    return back()->with('success', 'Mensaje enviado correctamente.');
});
