<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Earring;

class EarringSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $earrings = config('earrings.earrings');
        foreach ($earrings as $earring) {
            $new_earring = new Earring();
            $new_earring->name = $earring['name'];
            $new_earring->code = $earring['code'];
            $new_earring->price = $earring['price'];
            $new_earring->description = $earring['description'];
            $new_earring->img = $earring['img'];
            $new_earring->save();
        }
    }
}