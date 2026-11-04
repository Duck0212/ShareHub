<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Máy ảnh & Quay phim', 'icon' => 'photo_camera'],
            ['name' => 'Thiết bị công nghệ', 'icon' => 'devices'],
            ['name' => 'Công cụ & Thiết bị', 'icon' => 'construction'],
            ['name' => 'Thể thao & Dã ngoại', 'icon' => 'sports_basketball'],
            ['name' => 'Nhà cửa & Đời sống', 'icon' => 'chair'],
            ['name' => 'Khác', 'icon' => 'category'],
        ];

        foreach ($categories as $index => $category) {
            Category::updateOrCreate(
                ['slug' => Str::slug($category['name'])],
                [
                    'name' => $category['name'],
                    'icon' => $category['icon'],
                    'is_active' => true,
                    'sort_order' => $index,
                ]
            );
        }
    }
}
