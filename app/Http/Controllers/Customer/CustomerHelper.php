<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;

class CustomerHelper extends Controller
{
    public function __contruct() {

    }

    public function isCompleted($user) {
        if ($user->isCompleted) {
            return true;
        }

        return false;
    }

    public function checkLogin() {
        if (Session::has('user')) {
            return true;
        }

        return false;
    }
}
