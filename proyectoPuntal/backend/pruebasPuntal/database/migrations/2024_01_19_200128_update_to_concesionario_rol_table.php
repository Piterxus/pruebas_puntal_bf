<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('concesionario_rol', function (Blueprint $table) {
            // Verificar y agregar la columna created_at si no existe
            if (!Schema::hasColumn('concesionario_rol', 'created_at')) {
                $table->timestamps();
            }

            // Verificar y agregar la columna deleted_at si no existe
            // if (!Schema::hasColumn('concesionario_rol', 'deleted_at')) {
            //     $table->softDeletes();
            // }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('concesionario_rol', function (Blueprint $table) {
            // Verificar y eliminar la columna created_at
            if (Schema::hasColumn('concesionario_rol', 'created_at')) {
                $table->dropTimestamps();
            }

            // Verificar y eliminar la columna deleted_at
            if (Schema::hasColumn('concesionario_rol', 'deleted_at')) {
                $table->dropSoftDeletes();
            }
        });
    }
};
