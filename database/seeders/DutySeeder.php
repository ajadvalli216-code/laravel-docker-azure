<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Duty;          // 👈 then imports
class DutySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Duty::create(['name'=>'post.create','description'=>'Create posts']);
        Duty::create(['name'=>'post.update','description'=>'Update posts']);
        Duty::create(['name'=>'post.delete','description'=>'Delete posts']);
        Duty::create(['name'=>'post.view','description'=>'View posts']);
    }
}
