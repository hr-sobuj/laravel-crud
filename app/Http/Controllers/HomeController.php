<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\Post;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $query = Post::query();

        if ($request->has('start_date')) {
            $startDate = Carbon::parse($request->start_date)->startOfDay();
            $query->where('created_at', '>=', $startDate);
        }

        if ($request->has('end_date')) {
            $endDate = Carbon::parse($request->end_date)->endOfDay();
            $query->where('created_at', '<=', $endDate);
        }

        $posts = $query->get();

        return view('home.index', ['posts' => $posts]);
    }

    public function show(Post $post)
    {
        return view('home.show', ['post' => $post]);
    }
}
