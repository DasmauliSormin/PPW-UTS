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
        Schema ::create('categories', function  (Blueprint $tabel) {
            $tabel->id(); //Primary key auto Increment
            $tabel->string('name', 100)->unique;
            $tabel->string('code', 10)->unique(); //misalnya : IOT,SRV,DRN
            $tabel->timestamps(); // created_id & updated_at
        })
    }

    
    public function down(): void
    {
        Schema ::dropIfExists('categories');
    }
}