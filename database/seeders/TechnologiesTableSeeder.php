<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PhpParser\Node\Stmt\TryCatch;

class TechnologiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologies = [
            'Vue' => '#42b883',
            'React' => '#61dafb',
            'JS' => '#f7df1e',
            'CSS' => '#563d7c',
            'SCSS' => '#c6538c',
            'Bootstrap' => '#7952b3',
            'Tailwind' => '#38a169',
            'PHP' => '#777bb4',
            'Laravel' => '#ff2d20',
            'NodeJs' => '#68a063',
        ];

        foreach ($technologies as $name => $color) {
            $new_technology = new Technology();
            $new_technology->name = $name;
            $new_technology->color = $color;
            try {
                $new_technology->save();
            } catch (\Illuminate\Database\QueryException $ex) {
                dd($ex->getMessage());
                // Note any method of class PDOException can be called on $ex.
            } catch (\Exception $e) {
                dd($e->getMessage());
            }
        }

        // $new_technology = new Technology();
        // $new_technology->name = 'ciao';
        // $new_technology->color = 'blu';
        // $new_technology->save();
    }
}
