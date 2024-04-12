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
        Schema::create('hemodialises', function (Blueprint $table) {
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
            $table->text('asesment_igd')->nullable()->default(0);
            $table->text('asesment_spesialis')->nullable()->default(0);
            $table->text('asesment_primer')->nullable()->default(0);

            /* TABEL 2. LABORATORIUM */
            $table->text('lab_darah')->nullable()->default(0);
            $table->text('lab_elektrolit')->nullable()->default(0);
            $table->text('lab_ureum')->nullable()->default(0);
            $table->text('lab_hcv')->nullable()->default(0);
            $table->text('lab_pt')->nullable()->default(0);
            $table->text('lab_magnesium')->nullable()->default(0);
            $table->text('lab_tibc')->nullable()->default(0);
            $table->text('lab_pth')->nullable()->default(0);

            /* TABEL 3. RADIOLOGI */
            $table->text('radio_foto')->nullable()->default(0);

            /* TABEL 4. VARIAN */
            $table->text('var_ekg')->nullable()->default(0);
            $table->text('var_echo')->nullable()->default(0);

            /* TABEL 5. KONSULTASI */
            $table->text('konsultasi')->nullable()->default(0);

            /* TABEL 6. ASESMEN LANJUTAN */
            $table->text('ases_DPJP')->nullable()->default(0);
            $table->text('ases_nonDPJP')->nullable()->default(0);
            $table->text('ases_PPJ')->nullable()->default(0);
            $table->text('ases_gizi')->nullable()->default(0);
            $table->text('ases_resep')->nullable()->default(0);
            $table->text('ases_obat')->nullable()->default(0);

            /* TABEL 7. DIAGNOSIS */
            $table->text('diagnosa_aki')->nullable()->default(0);
            $table->text('diagnosa_end')->nullable()->default(0);
            $table->text('diagnosa_napas')->nullable()->default(0);
            $table->text('diagnosa_perfusi')->nullable()->default(0);
            $table->text('diagnosa_hipervolemia')->nullable()->default(0);
            $table->text('diagnosa_nutrisi')->nullable()->default(0);
            $table->text('diagnosa_nausea')->nullable()->default(0);
            $table->text('diagnosa_aktivitas')->nullable()->default(0);
            $table->text('diagnosa_kulit')->nullable()->default(0);
            $table->text('diagnosa_jantung')->nullable()->default(0);
            $table->text('diagnosa_perifer')->nullable()->default(0);
            $table->text('diagnosa_infeksi')->nullable()->default(0);
            $table->text('diagnosa_cairan')->nullable()->default(0);
            $table->text('diagnosa_garam')->nullable()->default(0);
            $table->text('diagnosa_protein')->nullable()->default(0);

            /* TABEL 8. DISCHARGE PLANNING */
            $table->text('displan_edukasi')->nullable()->default(0);
            $table->text('displan_rencana')->nullable()->default(0);
            $table->text('displan_obat')->nullable()->default(0);
            $table->text('displan_kontrol')->nullable()->default(0);

            /* TABEL 9. EDUKASI TERINTEGRASI */
            $table->text('edukasi_diagnosis')->nullable()->default(0);
            $table->text('edukasi_terapi')->nullable()->default(0);
            $table->text('edukasi_consent')->nullable()->default(0);
            $table->text('edukasi_gizi')->nullable()->default(0);
            $table->text('edukasi_ginjal')->nullable()->default(0);
            $table->text('edukasi_hemodialisa')->nullable()->default(0);
            $table->text('edukasi_cdl')->nullable()->default(0);
            $table->text('edukasi_output')->nullable()->default(0);
            $table->text('edukasi_dukungan')->nullable()->default(0);
            $table->text('edukasi_info')->nullable()->default(0);
            $table->text('edukasi_konseling')->nullable()->default(0);
            $table->text('lembar_edukasi')->nullable()->default(0);

            /* TABEL 10. TERAPI/MEDIKAMENTOSA */
            $table->text('tindakan_cartheter')->nullable()->default(0);
            $table->text('tindakan_nasal')->nullable()->default(0);
            $table->text('injeksi_kristaloid')->nullable()->default(0);
            $table->text('inject_antikoagulan')->nullable()->default(0);
            $table->text('inject_bolus')->nullable()->default(0);
            $table->text('inject_heparin')->nullable()->default(0);
            $table->text('inject_eritropoetin')->nullable()->default(0);
            $table->text('oral_asamFolat')->nullable()->default(0);
            $table->text('oral_hipertensi')->nullable()->default(0);

            /* TABEL 11. TATA LAKSANA/INTERVENSI MEDIS */
            $table->text('intervensi_medika')->nullable()->default(0);
            $table->text('intervensi_elektrolit')->nullable()->default(0);
            $table->text('intervensi_hipertermia')->nullable()->default(0);
            $table->text('intervensi_infeksi')->nullable()->default(0);
            $table->text('intervensi_nutrisi')->nullable()->default(0);
            $table->text('intervensi_ADL')->nullable()->default(0);
            $table->text('intervensi_infus')->nullable()->default(0);
            $table->text('intervensi_obat')->nullable()->default(0);
            $table->text('intervensi_gizi')->nullable()->default(0);
            $table->text('intervensi_dpjp')->nullable()->default(0);

            /* TABEL 12. MONITORING & EVALIASI */
            $table->text('monev_dpjp')->nullable()->default(0);
            $table->text('monev_vital')->nullable()->default(0);
            $table->text('monev_cairan')->nullable()->default(0);
            $table->text('monev_nutrisi')->nullable()->default(0);
            $table->text('monev_nyeri')->nullable()->default(0);
            $table->text('monev_infeksi')->nullable()->default(0);
            $table->text('monev_makanan')->nullable()->default(0);
            $table->text('monev_antropometri')->nullable()->default(0);
            $table->text('monev_biokimia')->nullable()->default(0);
            $table->text('monev_fisik')->nullable()->default(0);
            $table->text('monev_efektiv')->nullable()->default(0);
            $table->text('monev_interaksi')->nullable()->default(0);
            $table->text('monev_efek')->nullable()->default(0);

            /* TABEL 13. MOBILISASI/REHABILITASI */
            $table->text('mob_medis')->nullable()->default(0);
            $table->text('mob_keperawatan')->nullable()->default(0);
            $table->text('mob_fisio')->nullable()->default(0);

            /* TABEL 14. OUTCOME/HASIL */
            $table->text('hasil_batuk')->nullable()->default(0);
            $table->text('hasil_lab')->nullable()->default(0);
            $table->text('hasil_vital')->nullable()->default(0);
            $table->text('hasil_seimbang')->nullable()->default(0);
            $table->text('hasil_infeksi')->nullable()->default(0);
            $table->text('hasil_asupan')->nullable()->default(0);
            $table->text('hasil_status')->nullable()->default(0);
            $table->text('hasil_terapi')->nullable()->default(0);
            $table->text('hasil_rasional')->nullable()->default(0);

            /* TABEL 15. KRITERIA PULANG */
            $table->text('pulang_umum')->nullable()->default(0);
            $table->text('pulang_khusus')->nullable()->default(0);

            /* TABEL 16. RENCANA PULANG/EDUKASI PELAYANAN LANJUTAN */
            $table->text('rencana_resume')->nullable()->default(0);
            $table->text('rencana_penjelasan')->nullable()->default(0);
            $table->text('rencana_surat')->nullable()->default(0);
            $table->text('varian_rencana')->nullable()->default(0);

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
        Schema::dropIfExists('hemodialises');
    }
};
