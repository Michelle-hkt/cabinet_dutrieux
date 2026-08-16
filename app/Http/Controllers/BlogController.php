<?php

namespace App\Http\Controllers;

use App\Data\ArticleTable;

class BlogController extends Controller
{
    /**
     * Affiche la liste des articles.
     */
    public function index()
    {
        $articles = ArticleTable::all();

        return view('pages.blog', compact('articles'));
    }


    /**
     * Affiche le détail d'un article.
     */
    public function show(int $id)
    {
        $article = ArticleTable::find($id);

        abort_if($article === null, 404);

        return view('pages.blog-show', compact('article'));
    }
}