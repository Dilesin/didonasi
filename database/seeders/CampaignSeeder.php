<?php

namespace Database\Seeders;

use App\Models\Campaign;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CampaignSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Campaign::create([
            'thumbnail' => 'campaigns/1.jpg',
            'title' => 'Bantu saya untuk melanjutkan kuliah',
            'slug' => 'bantu-saya-untuk-melanjutkan-kuliah',
            'story' => 'Saya adalah seorang mahasiswa yang sedang menempuh pendidikan di salah satu universitas di Indonesia. Saya membutuhkan bantuan untuk melanjutkan kuliah saya karena saya tidak memiliki biaya untuk membayar uang kuliah. Saya berharap ada orang yang bisa membantu saya untuk melanjutkan kuliah saya.',
            'target' => 10000000,
            'end_date' => '2021-12-31'
        ]);

        Campaign::create([
            'thumbnail' => 'campaigns/2.jpg',
            'title' => 'Bantu saya untuk membeli laptop',
            'slug' => 'bantu-saya-untuk-membeli-laptop',
            'story' => 'Saya adalah seorang mahasiswa yang sedang menempuh pendidikan di salah satu universitas di Indonesia. Saya membutuhkan bantuan untuk membeli laptop karena laptop saya sudah tidak bisa digunakan lagi. Saya berharap ada orang yang bisa membantu saya untuk membeli laptop baru.',
            'target' => 5000000,
            'end_date' => '2021-12-31'
        ]);
    }
}
