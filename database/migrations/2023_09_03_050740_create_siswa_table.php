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
            $table->string('nama_siswa');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('agama');
            $table->string('suku');
            $table->string('pendidikan');
            $table->string('pekerjaan');
            $table->text('alamat');
            $table->tinyInteger('kondisi_siswa')->comment('1 = Normal, 2 = Cacat/Terganggu, 3 = Tidak Diketahui');
            $table->string('tinggi_badan');
            $table->string('berat_badan');
            $table->string('hobby');
            $table->string('cita_cita');
            $table->string('prestasi_yang_diraih');
            $table->tinyInteger('masalah_anak')->comment('1 = Anak Terlantar/Anak Jalanan, 2 = Anak Balita Terlantar, 3 = ABH, 4 = AMPK');
            $table->string('penyakit_yang_pernah_diderita');
            $table->string('catatan_khusus');
            $table->string('nama_ayah');
            $table->string('tempat_lahir_ayah');
            $table->date('tanggal_lahir_ayah');
            $table->string('agama_ayah');
            $table->string('suku_ayah');
            $table->string('pendidikan_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('status_ayah');
            $table->integer('penghasilan_ayah');
            $table->string('no_telp_ayah');
            $table->text('alamat_ayah');
            $table->tinyInteger('keberadaan_ayah')->comment('1 = Masih Hidup, 2 = Meninggal, 3 = Tidak Diketahui');
            $table->string('catatan_khusus_ayah');
            $table->string('nama_ibu');
            $table->string('tempat_lahir_ibu');
            $table->date('tanggal_lahir_ibu');
            $table->string('agama_ibu');
            $table->string('suku_ibu');
            $table->string('pendidikan_ibu');
            $table->string('pekerjaan_ibu');
            $table->string('status_ibu');
            $table->integer('penghasilan_ibu');
            $table->string('no_telp_ibu');
            $table->text('alamat_ibu');
            $table->tinyInteger('keberadaan_ibu')->comment('1 = Masih Hidup, 2 = Meninggal, 3 = Tidak Diketahui');
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
            $table->string('status')->default(0)->comment('0 = Menunggu, 1 = Diterima, 2 = Tidak Diterima');
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
