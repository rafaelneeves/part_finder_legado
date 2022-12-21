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

    // public function partList(Request $request)
    // {
    //     $part = $request->part_list;

    //     dd($part);

    //     if ($part) {
    //         $part_list = Part::where('name', $request->part_list)->get();
    //         return view('welcome', compact('part_list'));
    //     } else {
    //         $part_list = Part::get();
    //         return view('welcome', ['part_list' =>  $part_list,]);
    //     }
    // }
}
