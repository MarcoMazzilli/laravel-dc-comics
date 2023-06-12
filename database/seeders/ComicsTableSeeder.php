<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('db_comics');

        foreach ($comics as $comic) {

            $newcomic              = new Comic();
            $newcomic->title       = $comic['title'];
            $newcomic->description = $comic['description'];
            $newcomic->thumb       = $comic['thumb'];
            $newcomic->price       = $comic['price'];
            $newcomic->series      = $comic['series'];
            $newcomic->sale_date   = $comic['sale_date'];
            $newcomic->type        = $comic['type'];
            $newcomic->artists     = implode('|', $comic['artists']);
            $newcomic->writers     = implode('|', $comic['writers']);

            $newcomic->save();
        }
    }
}
