<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LocalizationController extends Controller
{
    public function setLocale($locale) {
        App::setlocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    }
}
