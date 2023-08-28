<?php

namespace App\Http\Controllers\CustomerAuth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function index() {
        auth()->guard('Customerlaravel')->logout();
        return redirect()->route('coustomerlaravel.login');
    }
}
