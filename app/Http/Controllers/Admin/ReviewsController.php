<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    public function index()
    {
        $reviews = Review::with('user', 'property')->paginate(10);
        return view('admin.reviews.index', compact('reviews'));
    }

    public function approve($id)
    {
        $review = Review::findOrFail($id);
        $review->status = 'approved';
        $review->save();
        return redirect()->back()->with('success', 'Review approved successfully.');
    }

    public function reject($id)
    {
        $review = Review::findOrFail($id);
        $review->status = 'rejected';
        $review->save();
        return redirect()->back()->with('success', 'Review rejected successfully.');
    }

    public function destroy($id)
    {
        $review = Review::findOrFail($id);
        $review->delete();
        return redirect()->back()->with('success', 'Review deleted successfully.');
    }
}
