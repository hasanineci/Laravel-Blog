<?php

use App\Models\kategori;

function menuList()
{
    $query = kategori::get();
    return $query;
}