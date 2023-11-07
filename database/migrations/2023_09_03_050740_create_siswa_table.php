<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->string('nama_siswa')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('agama')->nullable();
            $table->string('suku')->nullable();
            $table->string('pendidikan')->nullable();
            $table->string('pekerjaan')->nullable();
            $table->text('alamat')->nullable();
            $table->tinyInteger('kondisi_siswa')->comment('1 = Normal, 2 = Cacat/Terganggu, 3 = Tidak Diketahui')->nullable();
            $table->string('tinggi_badan')->nullable();
            $table->string('berat_badan')->nullable();
            $table->string('hobby')->nullable();
            $table->string('cita_cita')->nullable();
            $table->string('prestasi_yang_diraih')->nullable();
            $table->tinyInteger('masalah_anak')->comment('1 = Anak Terlantar/Anak Jalanan, 2 = Anak Balita Terlantar, 3 = ABH, 4 = AMPK')->nullable();
            $table->string('penyakit_yang_pernah_diderita')->nullable();
            $table->string('catatan_khusus')->nullable();
            $table->string('nama_ayah')->nullable();
            $table->string('tempat_lahir_ayah')->nullable();
            $table->date('tanggal_lahir_ayah')->nullable();
            $table->string('agama_ayah')->nullable();
            $table->string('suku_ayah')->nullable();
            $table->string('pendidikan_ayah')->nullable();
            $table->string('pekerjaan_ayah')->nullable();
            $table->string('status_ayah')->nullable();
            $table->integer('penghasilan_ayah')->nullable();
            $table->string('no_telp_ayah')->nullable();
            $table->text('alamat_ayah')->nullable();
            $table->tinyInteger('keberadaan_ayah')->comment('1 = Masih Hidup, 2 = Meninggal, 3 = Tidak Diketahui')->nullable();
            $table->string('catatan_khusus_ayah')->nullable();
            $table->string('nama_ibu')->nullable();
            $table->string('tempat_lahir_ibu')->nullable();
            $table->date('tanggal_lahir_ibu')->nullable();
            $table->string('agama_ibu')->nullable();
            $table->string('suku_ibu')->nullable();
            $table->string('pendidikan_ibu')->nullable();
            $table->string('pekerjaan_ibu')->nullable();
            $table->string('status_ibu')->nullable();
            $table->integer('penghasilan_ibu')->nullable();
            $table->string('no_telp_ibu')->nullable();
            $table->text('alamat_ibu')->nullable();
            $table->tinyInteger('keberadaan_ibu')->comment('1 = Masih Hidup, 2 = Meninggal, 3 = Tidak Diketahui')->nullable();
            $table->string('catatan_khusus_ibu');
            $table->string('nama_wali')->nullable();
            $table->string('tempat_lahir_wali')->nullable();
            $table->date('tanggal_lahir_wali')->nullable();
            $table->string('agama_wali')->nullable();
            $table->string('suku_wali')->nullable();
            $table->string('pendidikan_wali')->nullable();
            $table->string('pekerjaan_wali')->nullable();
            $table->string('status_wali')->nullable();
            $table->integer('penghasilan_wali')->nullable();
            $table->string('no_telp_wali')->nullable();
            $table->text('alamat_wali')->nullable();
            $table->tinyInteger('keberadaan_wali')->comment('1 = Masih Hidup, 2 = Meninggal, 3 = Tidak Diketahui')->nullable();
            $table->string('catatan_khusus_wali')->nullable();
            $table->string('status')->default(0)->comment('0 = Menunggu, 1 = Diterima, 2 = Tidak Diterima')->nullable();
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
        Schema::dropIfExists('siswas');
    }
};
