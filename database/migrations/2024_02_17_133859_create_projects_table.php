<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('Proyectos', function (Blueprint $table) {
            $table->id();
            $table->string('NombreProyecto', 255); //'NombreProyecto' con una longitud máxima de 255 caracteres
            $table->string('FuenteFondos', 100); //'FuenteFondos' con una longitud máxima de 100 caracteres
            $table->decimal('MontoPlanificado', 10, 2); //'MontoPlanificado' como un número decimal con 10 dígitos en total y 2 decimales
            $table->decimal('MontoPatrocinado', 10, 2); //'MontoPatrocinado'
            $table->decimal('MontoFondosPropios', 10, 2); //'MontoFondosPropios'
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
