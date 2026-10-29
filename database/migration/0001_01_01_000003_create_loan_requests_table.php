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
        Schema ::create('loan_requests', function  (Blueprint $tabel) {
            $tabel->id(); //Primary Key
            $tabel->foreignId("equipments_id")->constrained('equipments');
            $tabel->string('borrower_name', 100);
            $tabel->string('borrower_nim', 10);
            $tabel->string('borrower_email', 100);
            $tabel->date('loan_date');
            $tabel->date('expected_return_date');
            $tabel->text('purpose');
            $tabel->enum('status', ['diajukan', 'disetujui', 'ditolak']->default('diajukan'));
            $tabel->integer('total_estimated_fee');
            $tabel->timestamps();
        });
    }

    
    public function down(): void
    {
        Schema ::dropIfExists('loan_request');

    }
};