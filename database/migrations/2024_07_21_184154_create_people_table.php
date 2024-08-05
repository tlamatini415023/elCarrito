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
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->enum('type',['Persona Natural','Empresa','Proveedor'])->notNullable(); 
            $table->string('first_name',50)->notNullable();
            $table->string('last_name', 50)->notNullable();
            $table->enum('document_type',['C.C.', 'TI', 'Pasaporte', 'Nit'])->notNullable();
            $table->string('document_number', 20)->notNullable();
            $table->string('email', 100)->unique()->notNullable();
            $table->string('phone', 20)->notNullable();
            $table->string('address', 100)->notNullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('people');
    }
};
