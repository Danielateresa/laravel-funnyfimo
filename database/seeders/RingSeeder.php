<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ring;

class RingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rings = config('rings.rings');
        foreach ($rings as $ring) {
            $new_ring = new Ring();
            $new_ring->name = $ring['name'];
            $new_ring->code = $ring['code'];
            $new_ring->price = $ring['price'];
            $new_ring->size = $ring['size'];
            $new_ring->description = $ring['description'];
            $new_ring->img = $ring['img'];
            $new_ring->save();
        }
    }
}