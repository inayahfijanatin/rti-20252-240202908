<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   public function up(): void
{
    Schema::create('guru', function (Blueprint $table) {
        $table->id();
        $table->string('nip')->unique();
        $table->string('nama_guru');
        $table->string('jabatan');
        $table->enum('jenis_kelamin', ['L', 'P']);
        $table->string('no_hp')->nullable();
        $table->string('email')->nullable();
        $table->text('alamat')->nullable();
        $table->string('foto')->nullable();
        $table->string('qr_code')->nullable();
        $table->timestamps();
    });
}

    public function down(): void
    {
        Schema::dropIfExists('guru');
    }
};
