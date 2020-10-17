<?php

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a = new Admin();
        $a->user_id = 'admin001';
        $a->email = 'admin@gmail.com';
        $a->password = Hash::make('admin123');
        $a->save();
    }
}
