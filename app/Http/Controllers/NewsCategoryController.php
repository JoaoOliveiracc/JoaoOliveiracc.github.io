<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsCategoriesFormRequest;
use App\Models\NewsCategories;
use Illuminate\Http\Request;

class NewsCategoryController extends Controller
{
    public function index(Request $request)
    {
        $categories = NewsCategories::all();
        $msgSuccess = session('msg.success');
        $request->session()->forget('msg.success');

        return view('news-category.index', [
            'categories' => $categories,
            'msgSuccess' => $msgSuccess,
        ]);
    }

    public function create()
    {
        return view('news-category.create');
    }

    public function store(NewsCategoriesFormRequest $request)
    {
        $validatedData = $request->validated();
        NewsCategories::create($validatedData);

        return to_route('news.categories.index')->with(['msg.success' => 'Categoria adicionada com sucesso!']);
    }
}
