<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_depan'); // ini akan membuat kolom nam_depan yg bernilai string $table->string('nama_belakang'); $table->string('jenis_kelamin'); $table->string('agama'); $table->string('alamat'); $table->string('no_telephone');
            $table->string('nama_belakang'); 
            $table->string('alamat'); 
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
        Schema::dropIfExists('students');
    }
}
