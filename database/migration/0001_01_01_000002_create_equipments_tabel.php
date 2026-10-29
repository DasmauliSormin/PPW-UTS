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
        Schema ::create('equipments', function  (Blueprint $tabel) {
            $tabel->id(); //Primary Key
            $tabel->foreignId("category_id")->constrained('categories')->onDelete('restrict');
            $tabel->string('asset_code', 20)->unique(); //format: EQ-[KODE_KAT]-[NOMOR]
            $tabel->string('name', 150);
            $tabel->text('specification');
            $tabel->enum('condition', ['baik', 'rusak_ringan', 'rusak_berat']->default('baik'));
            $tabel->enum('status', ['tersedia', 'dipinjam', 'dalam_perbaikan']->default('tersedia'));
            $tabel->integer('daily_rental_fee');
            $tabel-> string('image_path', 255)->nullable();
            $tabel->timestamps();
        });
    }

    
    public function down(): void
    {
        Schema ::dropIfExists('equipments');

    }
};