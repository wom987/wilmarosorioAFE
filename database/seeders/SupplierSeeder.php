<?php

namespace Database\Seeders;

use App\Models\Supplier;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Supplier::insert([
            ["supplier_name" => "Unilever", "address" => "San Salvador", "phone_number" => "2525-8794", "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ["supplier_name" => "Orange", "address" => "Santa Ana", "phone_number" => "2525-7897", "created_at" => Carbon::now(), "updated_at" => Carbon::now()]
        ]);
        Supplier::factory(5)->create();
    }
}
