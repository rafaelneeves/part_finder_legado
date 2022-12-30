<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Part;

class PartController extends Controller
{
    public function partList(Request $request)
    {
        if ($request->search) {
            $part_list = Part::where('name', $request->search)->paginate(5);
            return view('welcome', compact('part_list'));
        } else {
            return view('welcome');
        }
    }
}
