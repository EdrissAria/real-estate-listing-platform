<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Favorite;

class FavoriteController extends Controller
{
    public function index()
    {
        $favorites = Favorite::with('user', 'property')->paginate(10);
        return view('admin.favorites.index', compact('favorites'));
    }

    public function destroy($id)
    {
        $favorite = Favorite::findOrFail($id);
        $favorite->delete();
        return redirect()->back()->with('success', 'Favorite removed successfully.');
    }
}
