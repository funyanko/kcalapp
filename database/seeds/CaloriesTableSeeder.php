<?php

use Illuminate\Database\Seeder;
use App\Calorie;
class CaloriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $params = 
            [
                'protein' => 0,
                'carbohydrate' => 0,
                'fat' => 0,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ];
            

            DB::table('calories')->insert($params);
    }
}
