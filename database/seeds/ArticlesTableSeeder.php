<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $articles = [["記事1", "本文1"], ["記事2", "本文2"], ["記事3", "本文3"]];
        foreach ($articles as $article) {
            DB::table("articles")->insert([
                "title" => $article[0],
                "body" => $article[1],
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ]);
        }
    }
}
