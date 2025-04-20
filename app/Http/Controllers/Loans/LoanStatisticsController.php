<?php

namespace App\Http\Controllers\Loans;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoanStatisticsController extends Controller
{
    public function index(){
        return view ('statistics.index');
    }
}
