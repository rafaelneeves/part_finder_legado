<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Part;


class AdminPartController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function new()
    {
        return view('admin.new');
    }

    public function list(Request $request)
    {
        if ($request->search) {
            $part_list = Part::where('name', $request->search)->paginate(5);
            return view('admin.list', compact('part_list'));
        } else {
            $part_list = Part::get();
            return view('admin.list', compact('part_list'));
        }
    }

    public function edit()
    {
        return view('admin.edit');
    }
}
