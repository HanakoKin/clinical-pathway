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
        Schema::create('diares', function (Blueprint $table) {
            $table->id();

            /* DATA PASIEN */
            $table->string('noReg');
            $table->string('nama')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('tanggal_lahir')->nullable();
            $table->string('diagnosa')->nullable();
            $table->string('penyakit_utama')->nullable();
            $table->string('penyakit_penyerta')->nullable();
            $table->string('komplikasi')->nullable();
            $table->text('tindakan')->nullable();
            $table->string('berat_badan')->nullable();
            $table->string('tinggi_badan')->nullable();
            $table->string('tanggal_masuk')->nullable();
            $table->string('tanggal_keluar')->nullable();
            $table->text('kode_icd')->nullable();
            $table->string('jam_masuk')->nullable();
            $table->string('jam_keluar')->nullable();
            $table->string('lama_rawat')->nullable();
            $table->string('rencana_rawat')->nullable();
            $table->string('rawat_kelas')->nullable();
            $table->string('rujukan')->nullable();

            /* DATA DARI TABEL */
            $table->text('hari_penyakit')->nullable();

            /* TABEL 1. ASESMEN AWAL */
            $table->text("asesment_igd")->nullable()->default(0);
            $table->text("asesment_spesialis")->nullable()->default(0);
            $table->text("asesment_perawat")->nullable()->default(0);

            /* TABEL 2. LABORATORIUM */
            $table->text("lab_darah")->nullable()->default(0);
            $table->text("lab_feses")->nullable()->default(0);
            $table->text("lab_GDS")->nullable()->default(0);
            $table->text("lab_varian")->nullable()->default(0);

            /* TABEL 3. RADIOLOGI */
            $table->text("radiologi")->nullable()->default(0);

            /* TABEL 4. KONSULTASI */
            $table->text("konsultasi")->nullable()->default(0);

            /* TABEL 5. ASESMEN LANJUTAN */
            $table->text("ases_DPJP")->nullable()->default(0);
            $table->text("ases_nonDPJP")->nullable()->default(0);
            $table->text("ases_PPJ")->nullable()->default(0);
            $table->text("ases_gizi")->nullable()->default(0);
            $table->text("ases_resep")->nullable()->default(0);
            $table->text("ases_obat")->nullable()->default(0);

            /* TABEL 6. DIAGNOSIS */
            $table->text("diagnosa_medis")->nullable()->default(0);
            $table->text("diagnosa_diare")->nullable()->default(0);
            $table->text("diagnosa_cairan")->nullable()->default(0);
            $table->text("diagnosa_elektrolit")->nullable()->default(0);
            $table->text("diagnosa_nutrisi")->nullable()->default(0);
            $table->text("diagnosa_akut")->nullable()->default(0);
            $table->text("diagnosa_hiper")->nullable()->default(0);
            $table->text("diagnosa_kulit")->nullable()->default(0);
            $table->text("diagnosa_gizi")->nullable()->default(0);

            /* TABEL 7. DISCHARGE PLANNING */
            $table->text("displan_rumah")->nullable()->default(0);
            $table->text("displan_terapi")->nullable()->default(0);
            $table->text("displan_hygiene")->nullable()->default(0);

            /* TABEL 8. EDUKASI TERINTEGRASI */
            $table->text("edukasi_diagnosis")->nullable()->default(0);
            $table->text("edukasi_terapi")->nullable()->default(0);
            $table->text("edukasi_consent")->nullable()->default(0);
            $table->text("edukasi_gizi")->nullable()->default(0);
            $table->text("edukasi_hygiene")->nullable()->default(0);
            $table->text("edukasi_makanan")->nullable()->default(0);
            $table->text("edukasi_perianal")->nullable()->default(0);
            $table->text("edukasi_info")->nullable()->default(0);
            $table->text("edukasi_konseling")->nullable()->default(0);
            $table->text("lembar_edukasi")->nullable()->default(0);

            /* TABEL 9. TERAPI/MEDIKAMENTOSA */
            $table->text("injeksi_ceftriaxon")->nullable()->default(0);
            $table->text("injeksi_Parasetamol")->nullable()->default(0);
            $table->text("injeksi_NaCl")->nullable()->default(0);
            $table->text("oral_dompridon")->nullable()->default(0);
            $table->text("oral_zinc")->nullable()->default(0);
            $table->text("rehidrasi_oral")->nullable()->default(0);

            /* TABEL 10. TATA LAKSANA/INTERVENSI MEDIS */
            $table->text("intervensi_medika")->nullable()->default(0);
            $table->text("intervensi_cairan")->nullable()->default(0);
            $table->text("intervensi_diare")->nullable()->default(0);
            $table->text("intervensi_elektrolit")->nullable()->default(0);
            $table->text("intervensi_demam")->nullable()->default(0);
            $table->text("intervensi_nutrisi")->nullable()->default(0);
            $table->text("intervensi_nyeri")->nullable()->default(0);
            $table->text("intervensi_kulit")->nullable()->default(0);
            $table->text("intervensi_resusitasi")->nullable()->default(0);
            $table->text("intervensi_infus")->nullable()->default(0);
            $table->text("intervensi_ASI")->nullable()->default(0);
            $table->text("intervensi_dpjp")->nullable()->default(0);

            /* TABEL 11. MONITORING & EVALIASI */
            $table->text("monev_dpjp")->nullable()->default(0);
            $table->text("monev_intake")->nullable()->default(0);
            $table->text("monev_vital")->nullable()->default(0);
            $table->text("monev_hidrasi")->nullable()->default(0);
            $table->text("monev_kendali")->nullable()->default(0);
            $table->text("monev_eliminasi")->nullable()->default(0);
            $table->text("monev_kulit")->nullable()->default(0);
            $table->text("monev_makanan")->nullable()->default(0);
            $table->text("monev_antropometri")->nullable()->default(0);
            $table->text("monev_interaksi")->nullable()->default(0);
            $table->text("monev_efek")->nullable()->default(0);
            $table->text("monev_terapi")->nullable()->default(0);

            /* TABEL 12. MOBILISASI/REHABILITASI */
            $table->text("mob_medis")->nullable()->default(0);
            $table->text("mob_keperawatan")->nullable()->default(0);
            $table->text("mob_fisio")->nullable()->default(0);

            /* TABEL 13. OUTCOME/HASIL */
            $table->text("hasil_diare")->nullable()->default(0);
            $table->text("hasil_dehidrasi")->nullable()->default(0);
            $table->text("hasil_seimbang")->nullable()->default(0);
            $table->text("hasil_komplikasi")->nullable()->default(0);
            $table->text("hasil_vital")->nullable()->default(0);
            $table->text("hasil_asupan")->nullable()->default(0);
            $table->text("hasil_status")->nullable()->default(0);
            $table->text("hasil_terapi")->nullable()->default(0);
            $table->text("hasil_obat")->nullable()->default(0);

            /* TABEL 14. KRITERIA PULANG */
            $table->text("pulang_normal")->nullable()->default(0);
            $table->text("pulang_NOC")->nullable()->default(0);
            $table->text("pulang_varian")->nullable()->default(0);

            /* TABEL 15. RENCANA PULANG/EDUKASI PELAYANAN LANJUTAN */
            $table->text("rencana_resume")->nullable()->default(0);
            $table->text("rencana_penjelasan")->nullable()->default(0);
            $table->text("rencana_surat")->nullable()->default(0);

            $table->text("tanggal_laporan")->nullable();

            /* TTD DOKTER */
            $table->text("nama_dokter")->nullable();
            $table->text("ttd_dokter")->nullable();

            /* TTD PERAWAT */
            $table->text("nama_perawat")->nullable();
            $table->text("ttd_perawat")->nullable();

            /* TTD PELAKSANA */
            $table->text("nama_pelaksana")->nullable();
            $table->text("ttd_pelaksana")->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diares');
    }
};
