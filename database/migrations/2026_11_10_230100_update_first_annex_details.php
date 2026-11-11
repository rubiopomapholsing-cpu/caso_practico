<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (! Schema::hasTable('anexos') || ! DB::table('anexos')->where('id', 1)->exists()) {
            return;
        }

        DB::table('anexos')
            ->where('id', 1)
            ->update([
                'titulo' => 'PRIMER ENTREGABLE',
                'responsable' => 'DARWIN UZURIAGA CLAUDIO',
                'periodo_ejecucion_contractual' => 'DESDE EL 06 DE ABRIL DE 2026 AL 05 DE MAYO DE 2026',
                'fecha_contractual_ingreso_entregable' => '2026-04-06',
                'estado' => 'activo',
                'updated_at' => now(),
            ]);
    }

    public function down(): void
    {
        // The previous values differ between installations, so they cannot be restored safely.
    }
};
