<?php

namespace Database\Seeders;

use App\Models\Catgory;
use App\Models\Catgoryservice;
use Illuminate\Database\Seeder;

class CatgoryAndservicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Catgory::create([
            'name_ar'                =>          'ملابس',
            'name_en'                =>          'Clothes',

        ]);
        Catgory::create([
            'name_ar'                =>          'سجاد',
            'name_en'                =>          'Clothes',

        ]);



    }
}
