<?php // routes/breadcrumbs.php

use App\Models\Post;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

Breadcrumbs::for('dashboard', function (BreadcrumbTrail $trail) {
    $trail->push('Dashboard', route('dashboard'));
});

Breadcrumbs::for('tanaman.semua', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Data Tanaman', route('tanaman.semua'));
});

Breadcrumbs::for('tanaman.detail', function (BreadcrumbTrail $trail, $id) {
    $trail->parent('tanaman.semua');
    $trail->push('Detail Tanaman', route('tanaman.detail', $id));
});

Breadcrumbs::for('tanaman.tambah', function (BreadcrumbTrail $trail){
    $trail->parent('tanaman.semua');
    $trail->push('Tambah Tanaman', route('tanaman.tambah'));
});

Breadcrumbs::for('analityc.index', function (BreadcrumbTrail $trail){
    $trail->parent('dashboard');
    $trail->push('Analityc', route('analityc.index'));
});

Breadcrumbs::for('pengguna.semua', function (BreadcrumbTrail $trail){
    $trail->parent('dashboard');
    $trail->push('Data Pengguna', route('pengguna.semua'));
});

Breadcrumbs::for('pengguna.tambah', function (BreadcrumbTrail $trail){
    $trail->parent('pengguna.semua');
    $trail->push('Tambah Pengguna', route('pengguna.tambah'));
});
