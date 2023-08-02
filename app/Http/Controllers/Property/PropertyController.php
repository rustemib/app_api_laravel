<?php

namespace App\Http\Controllers\Property;

use App\Http\Controllers\Controller;
use App\Models\ProductProperty;

class PropertyController extends Controller
{
    public function index()
    {
        return ProductProperty::all();

    }
}
