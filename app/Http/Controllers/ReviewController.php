<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    // Получение всех отзывов
    public function index()
    {
        return response()->json(Review::with('user', 'product')->get());
    }

    // Показ формы для создания отзыва
    public function create()
    {
        return view('reviews.create');
    }

    // Создание нового отзыва
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'product_id' => 'required|exists:products,id',
            'review' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        Review::create($request->all());

        return redirect()->route('reviews.create')->with('success', 'Ваш отзыв успешно добавлен!');
    }
}
