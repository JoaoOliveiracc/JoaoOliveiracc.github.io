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
                            ->orWhereHas('category', function ($query) use ($search) {
                                $query->where('category_name', 'like', "%{$search}%");
                            });
            })
            ->with('category')
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
        
        $validatedData['category_id'] = (int) $validatedData['category_id'];

        News::create($validatedData);

        return to_route('news.index')->with(['msg.success' => 'Notícia adicionada com sucesso!']);
    }

    public function destroy(News $news)
    {
        $news->delete();

        return to_route('news.index')->with('msg.success', 'Notícia removida com sucesso');
    }

    public function edit(News $news)
    {
        return view('news.edit')->with('news', $news);
    }
}
