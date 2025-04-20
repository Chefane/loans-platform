<?php

namespace App\Http\Controllers\Loans;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoanHistoryController extends Controller
{
    public function index(){
        return view ('history.index');
    }

    public function show(){
        return view ('history.show');
    }
}
