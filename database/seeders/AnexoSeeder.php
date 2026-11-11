<?php

namespace Database\Seeders;

use App\Models\Anexo;
use Illuminate\Database\Seeder;

class AnexoSeeder extends Seeder
{
    public function run(): void
    {
        Anexo::query()->updateOrCreate(
            ['id' => 1],
            [
                'titulo' => 'PRIMER ENTREGABLE',
                'periodo_ejecucion_contractual' => 'DESDE EL 06 DE ABRIL DE 2026 AL 05 DE MAYO DE 2026',
                'fecha_contractual_ingreso_entregable' => '2026-04-06',
                'responsable' => 'DARWIN UZURIAGA CLAUDIO',
                'estado' => 'activo',
            ],
        );
    }
}
