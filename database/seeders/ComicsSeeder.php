<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=config('comics');
        
        foreach($data as $comic_db){
            $comic=new Comic();

            $comic->title=$comic_db['title'];
            $comic->description=$comic_db['description'];
            $comic->thumb=$comic_db['thumb'];
            $comic->price=$comic_db['price'];
            $comic->series=$comic_db['series'];
            $comic->sale_date=$comic_db['sale_date'];
            $comic->type=$comic_db['type'];
            $data->artists = implode($comic['artists']);
            $data->writers = implode($comic['writers']);

            $comic->save();
        }
    }
}
