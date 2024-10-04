<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AssetType;
use DB;

class AssetTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('asset_types')->truncate();

        $assets = [
            [
                'type' => 'Laptop',
                'short_code' => 'LP',
            ],
            [
                'type' => 'Keyboard',
                'short_code' => 'KB',
            ],
            [
                'type' => 'Mouse',
                'short_code' => 'MU',
            ],
            [
                'type' => 'Moniter(screen)',
                'short_code' => 'MO',
            ],
            [
                'type' => 'CPU',
                'short_code' => 'CP',
            ],
            [
                'type' => 'Headphone',
                'short_code' => 'HP',
            ],
            [
                'type' => 'Webcam',
                'short_code' => 'wc',
            ],
        ];

        foreach ($assets as $asset) {
            AssetType::create($asset);
        }
    }
}
