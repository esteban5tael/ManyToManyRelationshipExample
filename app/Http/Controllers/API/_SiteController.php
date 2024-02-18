<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;

class _SiteController extends Controller
{
    public function index()
    {
        $users = User::query()
            ->with('categories')
            ->get();
        $categories = Category::query()
            ->with('users')
            ->get();;

        return response()->json([
            'Categories' => $categories,
            'Users' => $users,
        ], 200);
    }
}
