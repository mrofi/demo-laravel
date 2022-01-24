<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Author;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $authors = Author::all();
        $categories = Category::get()->pluck('id')->toArray();

        foreach ($authors as $author) {
            $articles = Article::factory()
                    ->count(10)
                    ->make([
                        'author_id' => $author->id,
                        'category_id' => rand(1, max($categories))
                    ]);
            foreach($articles as $article) {
                $article->save();
            }
        }

    }
}
