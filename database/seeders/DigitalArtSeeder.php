<?php

namespace Database\Seeders;

use App\Models\DigitalArt;
use Illuminate\Database\Seeder;

class DigitalArtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     $arts = [
            [
                'title' => 'Neon Cyberpunk City',
                'artist' => 'Alfian Dewa',
                'resolution' => '3840x2160 (4K)',
                'price' => 450000,
                'image' => 'art1.jpg',
                'software_used' => 'Adobe Photoshop'
            ],
            [
                'title' => 'Abstract Dreams',
                'artist' => 'Dewa Arts',
                'resolution' => '1920x1080 (FHD)',
                'price' => 300000,
                'image' => 'art2.jpg',
                'software_used' => 'Procreate'
            ],
            [
                'title' => 'Fantasy Landscape',
                'artist' => 'Alfian Studio',
                'resolution' => '5120x2880 (5K)',
                'price' => 600000,
                'image' => 'art3.jpg',
                'software_used' => 'Blender 3D'
            ],
            [
                'title' => 'Future Mechanics',
                'artist' => 'Dewa Permana',
                'resolution' => '3840x2160 (4K)',
                'price' => 500000,
                'image' => 'art4.jpg',
                'software_used' => 'Clip Studio Paint'
            ],
        ];

        foreach ($arts as $art) {
            DigitalArt::create($art);
        }   
    }
}
