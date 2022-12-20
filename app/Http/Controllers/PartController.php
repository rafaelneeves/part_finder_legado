<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Part;

class PartController extends Controller
{
    public function partList()
    {
        $part_list = Part::get();
        return view('welcome', ['part_list' =>  $part_list,]);
    }
}
