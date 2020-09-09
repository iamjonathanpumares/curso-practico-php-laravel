<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Nota;

class NotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Nota::create([
            'title' => 'Nota de mi modelo',
            'content' => 'Contenido de la nota',
        ]);

        Nota::create([
            'title' => 'Nota de mi modelo',
            'content' => 'Contenido de la nota',
        ]);

        Nota::create([
            'title' => 'Nota de mi modelo',
            'content' => 'Contenido de la nota',
        ]);

        Nota::create([
            'title' => 'Nota de mi modelo',
            'content' => 'Contenido de la nota',
        ]);

    }
}
