<?php

use App\Category;
use Illuminate\Database\Seeder;
use Cviebrock\EloquentSluggable\Services\SlugService;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['General', 'Account Settings', 'Security & Billing', 'Using gomac', 'Email campaign', 'gomac Configurations', 'Products', 'Customers', 'Orders', 'Suppliers'];

        foreach($categories as $id => $categories)
            Category::create(['name' => $categories, 'slug' => SlugService::createSlug(Category::class, 'slug', $categories)]);
    }
}
