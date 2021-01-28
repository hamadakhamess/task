<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CatgoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        ///main Catgoreis
        Category::create([
            'name_ar'                =>          'ملابس',
            'name_en'                =>          'Clothes',

        ]);
        Category::create([
            'name_ar'                =>          'الكترونبات',
            'name_en'                =>          'ُElectronic',

        ]);
        Category::create([
            'name_ar'                =>          'اثاث',
            'name_en'                =>          'Furniture',

        ]);



        ////subCatgoires

        Category::create([
            'name_ar'                =>          'ملابس رجالي',
            'name_en'                =>          'Men Clothes',
            'parent_id'              =>          1,
        ]);
        Category::create([
            'name_ar'                =>          'ملابس حريمي',
            'name_en'                =>          'Women Clothes',
            'parent_id'              =>          1,

        ]);

        Category::create([
            'name_ar'                =>          'ملابس أطفال',
            'name_en'                =>          'Children Clothes',
            'parent_id'              =>          1,

        ]);




        Category::create([
            'name_ar'                =>          'لاب توب',
            'name_en'                =>          'LapTop',
            'parent_id'              =>          2,
        ]);
        Category::create([
            'name_ar'                =>          'اجهزة حاسب',
            'name_en'                =>          'Personal Computer',
            'parent_id'              =>          2,
        ]);




        Category::create([
            'name_ar'                =>          'اثاث منزلي',
            'name_en'                =>          'House Furniture',
            'parent_id'              =>          3,

        ]);
        Category::create([
            'name_ar'                =>          'اثاث مكتب',
            'name_en'                =>          'Office Furniture',
            'parent_id'              =>          3,
        ]);



    }
}
