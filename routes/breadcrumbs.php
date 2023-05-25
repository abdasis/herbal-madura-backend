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
