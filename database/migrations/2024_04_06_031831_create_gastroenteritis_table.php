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
        Schema::create('gastroenteritis', function (Blueprint $table) {
            $table->id();

            /* DATA PASIEN */
            $table->string('noReg')->nullable();
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
            $table->text('hari_penyakit')->nullable()->default(0);

            /* TABEL 1. ASESMEN AWAL */
            $table->text('asesment_igd')->nullable()->default(0);
            $table->text('asesment_spesialis')->nullable()->default(0);
            $table->text('asesment_primer')->nullable()->default(0);

            /* TABEL 2. LABORATORIUM */
            $table->text('lab_hb')->nullable()->default(0);
            $table->text('lab_tinja')->nullable()->default(0);
            $table->text('lab_varian')->nullable()->default(0);

            /* TABEL 3. RADIOLOGI */
            $table->text('radiologi')->nullable()->default(0);

            /* TABEL 4. KONSULTASI */
            $table->text('konsultasi')->nullable()->default(0);

            /* TABEL 5. ASESMEN LANJUTAN */
            $table->text('ases_DPJP')->nullable()->default(0);
            $table->text('ases_nonDPJP')->nullable()->default(0);
            $table->text('ases_PPJ')->nullable()->default(0);
            $table->text('ases_gizi')->nullable()->default(0);
            $table->text('ases_resep')->nullable()->default(0);
            $table->text('ases_obat')->nullable()->default(0);

            /* TABEL 6. DIAGNOSIS */
            $table->text('diagnosa_medis')->nullable()->default(0);
            $table->text('diagnosa_diare')->nullable()->default(0);
            $table->text('diagnosa_cairan')->nullable()->default(0);
            $table->text('diagnosa_elektrolit')->nullable()->default(0);
            $table->text('diagnosa_nutrisi')->nullable()->default(0);
            $table->text('diagnosa_hipertermia')->nullable()->default(0);
            $table->text('diagnosa_akut')->nullable()->default(0);
            $table->text('diagnosa_kulit')->nullable()->default(0);
            $table->text('diagnosa_NI3')->nullable()->default(0);
            $table->text('diagnosa_NI5')->nullable()->default(0);
            $table->text('diagnosa_NI2')->nullable()->default(0);

            /* TABEL 7. DISCHARGE PLANNING */
            $table->text('displan_edukasi')->nullable()->default(0);
            $table->text('displan_rumah')->nullable()->default(0);
            $table->text('displan_hygenie')->nullable()->default(0);
            $table->text('displan_sehat')->nullable()->default(0);

            /* TABEL 8. EDUKASI TERINTEGRASI */
            $table->text('edukasi_diagnosis')->nullable()->default(0);
            $table->text('edukasi_terapi')->nullable()->default(0);
            $table->text('edukasi_consent')->nullable()->default(0);
            $table->text('edukasi_gizi')->nullable()->default(0);
            $table->text('edukasi_hygenie')->nullable()->default(0);
            $table->text('edukasi_kebersihan')->nullable()->default(0);
            $table->text('edukasi_perianal')->nullable()->default(0);
            $table->text('edukasi_info')->nullable()->default(0);
            $table->text('edukasi_konseling')->nullable()->default(0);
            $table->text('lembar_edukasi')->nullable()->default(0);

            /* TABEL 9. TERAPI/MEDIKAMENTOSA */
            $table->text('injeksi_ciprofloxacin')->nullable()->default(0);
            $table->text('injeksi_ceftriaxon')->nullable()->default(0);
            $table->text('injeksi_levofloxacin')->nullable()->default(0);
            $table->text('injeksi_buscopan')->nullable()->default(0);
            $table->text('injeksi_antimual')->nullable()->default(0);
            $table->text('injeksi_antipiretik')->nullable()->default(0);
            $table->text('injeksi_kristaloid')->nullable()->default(0);
            $table->text('injeksi_koloid')->nullable()->default(0);
            $table->text('injeksi_varian')->nullable()->default(0);
            $table->text('oral_metronidazol')->nullable()->default(0);
            $table->text('oral_kotrimoksazol')->nullable()->default(0);
            $table->text('oral_eritromisin')->nullable()->default(0);
            $table->text('oral_klaritromisin')->nullable()->default(0);
            $table->text('oral_doksisiklin')->nullable()->default(0);
            $table->text('oral_cefixime')->nullable()->default(0);
            $table->text('oral_ciprofloxacin')->nullable()->default(0);
            $table->text('oral_levofloxacin')->nullable()->default(0);
            $table->text('oral_amoxicillin')->nullable()->default(0);
            $table->text('oral_antimotilitas')->nullable()->default(0);
            $table->text('oral_buscopan')->nullable()->default(0);
            $table->text('oral_ondansentron')->nullable()->default(0);
            $table->text('oral_parasetamol')->nullable()->default(0);

            /* TABEL 10. TATA LAKSANA/INTERVENSI MEDIS */
            $table->text('intervensi_medika')->nullable()->default(0);
            $table->text('intervensi_elektrolit')->nullable()->default(0);
            $table->text('intervensi_nyeri')->nullable()->default(0);
            $table->text('intervensi_diare')->nullable()->default(0);
            $table->text('intervensi_nutrisi')->nullable()->default(0);
            $table->text('intervensi_perianal')->nullable()->default(0);
            $table->text('intervensi_ADL')->nullable()->default(0);
            $table->text('intervensi_infus')->nullable()->default(0);
            $table->text('intervensi_obat')->nullable()->default(0);
            $table->text('intervensi_gizi')->nullable()->default(0);
            $table->text('intervensi_dpjp')->nullable()->default(0);

            /* TABEL 11. MONITORING & EVALIASI */
            $table->text('monev_dpjp')->nullable()->default(0);
            $table->text('monev_vital')->nullable()->default(0);
            $table->text('monev_cairan')->nullable()->default(0);
            $table->text('monev_diare')->nullable()->default(0);
            $table->text('monev_rehidrasi')->nullable()->default(0);
            $table->text('monev_perianal')->nullable()->default(0);
            $table->text('monev_makanan')->nullable()->default(0);
            $table->text('monev_antropometri')->nullable()->default(0);
            $table->text('monev_biokimia')->nullable()->default(0);
            $table->text('monev_fisik')->nullable()->default(0);
            $table->text('monev_efektiv')->nullable()->default(0);
            $table->text('monev_interaksi')->nullable()->default(0);
            $table->text('monev_efek')->nullable()->default(0);

            /* TABEL 12. MOBILISASI/REHABILITASI */
            $table->text('mob_medis')->nullable()->default(0);
            $table->text('mob_keperawatan')->nullable()->default(0);
            $table->text('mob_fisio')->nullable()->default(0);

            /* TABEL 13. OUTCOME/HASIL */
            $table->text('hasil_dehidrasi')->nullable()->default(0);
            $table->text('hasil_BAB')->nullable()->default(0);
            $table->text('hasil_vital')->nullable()->default(0);
            $table->text('hasil_Seimbang')->nullable()->default(0);
            $table->text('hasil_perianal')->nullable()->default(0);
            $table->text('hasil_asupan')->nullable()->default(0);
            $table->text('hasil_status')->nullable()->default(0);
            $table->text('hasil_terapi')->nullable()->default(0);
            $table->text('hasil_rasional')->nullable()->default(0);

            /* TABEL 14. KRITERIA PULANG */
            $table->text('pulang_umum')->nullable()->default(0);
            $table->text('pulang_khusus')->nullable()->default(0);
            $table->text('pulang_varian')->nullable()->default(0);

            /* TABEL 15. RENCANA PULANG/EDUKASI PELAYANAN LANJUTAN */
            $table->text('rencana_resume')->nullable()->default(0);
            $table->text('rencana_penjelasan')->nullable()->default(0);
            $table->text('rencana_surat')->nullable()->default(0);

            $table->string('tanggal_laporan')->nullable();

            /* TTD DOKTER */
            $table->string('nama_dokter')->nullable();
            $table->text('ttd_dokter')->nullable();

            /* TTD PERAWAT */
            $table->string('nama_perawat')->nullable();
            $table->text('ttd_perawat')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gastroenteritis');
    }
};
