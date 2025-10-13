<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('biodata', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->date('tanggal_lahir');
        $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
        $table->string('agama');
        $table->text('alamat');
        $table->string('foto')->nullable();
        $table->float('tinggi_badan')->nullable();
        $table->float('berat_badan')->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biodata');

    }
};
