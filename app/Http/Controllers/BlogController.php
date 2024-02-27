<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;


class BlogController extends Controller
{
    public function index(Request $request)
    {
        $blogs = Blog::paginate(5);
        return view('home', compact('blogs'));
    }

    public function paginate(Request $request)
    {
        if ($request->ajax()) {
            $blogs = Blog::paginate(5);
            if ($request->has('from') && $request->has('to')) {
                $from = $request->get('from');
                $to = $request->get('to');
                if (((int)$from > 0) > 0 && ((int)$to) > 0) {
                    $blogs = Blog::where('id', '>', $from)->where('id', '<', $to)->paginate(5);
                }
            }
            return view('pagination', compact('blogs'))->render();
        }
    }
}
