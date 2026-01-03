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
        Schema::create('cv_orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('transaction_id')->constrained('transactions')->onDelete('cascade');
            $table->string('nama_lengkap');
            $table->string('email');
            $table->string('phone');
            $table->string('foto')->nullable(); // path to uploaded photo
            $table->text('alamat');
            $table->text('tentang_anda');
            $table->text('pendidikan');
            $table->text('pengalaman_kerja')->nullable();
            $table->text('sertifikat_text')->nullable();
            $table->string('sertifikat_file')->nullable(); // path to uploaded certificate
            $table->json('skills'); // array of skills
            $table->string('hobby')->nullable();
            $table->text('pertanyaan_lainnya')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cv_orders');
    }
};
