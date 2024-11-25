<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsFormRequest;
use App\Models\News;
use App\Models\NewsCategories;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $news = News::query()
            ->when($search, function ($query, $search) {
                return $query->where('title', 'like', "%{$search}%")
                            ->orWhere('category', 'like', "%{$search}%");
            })
            ->orderBy('title')
            ->get();

        
        $msgSuccess = session('msg.success');
        $request->session()->forget('msg.success');

        return view('news.index', [
            'news' => $news,
            'msgSuccess' => $msgSuccess,
            'search' => $search
        ]);
    }

    public function create()
    {
        $categories = NewsCategories::query()->orderBy('category_name')->get();

        return view('news.create', [
            'categories' => $categories
        ]);
    }

    public function store(NewsFormRequest $request)
    {
        $validatedData = $request->validated();

        // Verifica se o formulário enviou uma imagem de capa
        if ($request->hasFile('cover_image')) {
            $path = $request->file('cover_image')->store('images', 'public');
            $validatedData['cover_image'] = $path;
        }

        News::create($validatedData);

        return to_route('news.index')->with(['msg.success' => 'Notícia adicionada com sucesso!']);
    }
}
