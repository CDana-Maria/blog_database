<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServByDateController extends Controller
{
    public function index()
    {
        $date = Service::whereNotNull('created_at')
            ->orderBy('created_at', 'desc')->get();
        return view('pages.serv_by_date', ['date' => $date]);
    }
}
