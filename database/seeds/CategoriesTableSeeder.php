<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
        	[
        		'paren_id' =>'0',
        		'name' => 'categorie 1'
        	],
        	[
        		'paren_id' =>'1',
        		'name' => 'categorie 2'
        	],
        	[
        		'paren_id' =>'0',
        		'name' => 'categorie 3'
        	],
        	[
        		'paren_id' =>'1',
        		'name' => 'categorie 4'
        	]
        	]
        );
    }
}
