<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $data = [
        'judul' => 'Tugas Rutin 9',
        'nama' => 'Rico Maulana Sumantri',
        'kelas' => 'Kelas Kamu',
        'deskripsi' => 'Setup Laravel'
    ];

    return view('home', compact('data'));
});

Route::get('/about', function () {
    $data = [
        'judul' => 'About',
        'isi' => 'Halaman About Tugas Rutin 9 Laravel.'
    ];

    return view('about', compact('data'));
});

Route::get('/contact', function () {
    $data = [
        'judul' => 'Contact',
        'email' => 'ricomaulanasumantri36@email.com',
        'telepon' => '082277395980'
    ];

    return view('contact', compact('data'));
});
Route::get('/hello/{nama}', function ($nama) {
    return "Halo, $nama! Selamat datang di Tugas Rutin 9 Laravel.";
});