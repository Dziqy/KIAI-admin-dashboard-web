<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKajiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kajians', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('asatidz_id');
            $table->string('judul');
            $table->string('poster');
            $table->text('deskripsi')->nullable();
            $table->string('streaming')->nullable();
            $table->string('tanggal');
            $table->string('waktu');
            $table->string('jenis');
            $table->string('status')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kajians');
    }
}