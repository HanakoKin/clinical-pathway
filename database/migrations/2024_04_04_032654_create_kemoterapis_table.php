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
        Schema::create('kemoterapis', function (Blueprint $table) {
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
            $table->text('hari_penyakit')->nullable()->default(0);

            /* TABEL 1. ASESMEN AWAL */
            $table->text('asesment_igd')->nullable()->default(0);
            $table->text('asesment_spesialis')->nullable()->default(0);
            $table->text('asesment_primer')->nullable()->default(0);

            /* TABEL 2. LABORATORIUM */
            $table->text('lab_darah')->nullable()->default(0);
            $table->text('lab_elektrolit')->nullable()->default(0);
            $table->text('lab_ureum')->nullable()->default(0);

            /* TABEL 3. RADIOLOGI */
            $table->text('radio_foto')->nullable()->default(0);
            $table->text('radio_USG')->nullable()->default(0);

            /* TABEL 4. VARIAN */
            $table->text('varian_pato')->nullable()->default(0);
            $table->text('varian_ekg')->nullable()->default(0);

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
            $table->text('diagnosa_medis')->nullable()->default(0);
            $table->text('diagnosa_nausea')->nullable()->default(0);
            $table->text('diagnosa_gangguan')->nullable()->default(0);
            $table->text('diagnosa_ansietas')->nullable()->default(0);
            $table->text('diagnosa_nyeri')->nullable()->default(0);
            $table->text('diagnosa_intoleransi')->nullable()->default(0);
            $table->text('diagnosa_adekuat')->nullable()->default(0);
            $table->text('diagnosa_malnutrisi')->nullable()->default(0);

            /* TABEL 8. DIAGNOSIS */
            $table->text('displan_kondisi')->nullable()->default(0);
            $table->text('displan_kemoterapi')->nullable()->default(0);
            $table->text('displan_obat')->nullable()->default(0);
            $table->text('displan_tatalaksana')->nullable()->default(0);

            /* TABEL 9. EDUKASI TERINTEGRASI */
            $table->text('edukasi_diagnosis')->nullable()->default(0);
            $table->text('edukasi_terapi')->nullable()->default(0);
            $table->text('edukasi_consent')->nullable()->default(0);
            $table->text('edukasi_gizi')->nullable()->default(0);
            $table->text('edukasi_keluarga')->nullable()->default(0);
            $table->text('edukasi_info')->nullable()->default(0);
            $table->text('edukasi_konseling')->nullable()->default(0);
            $table->text('lembar_edukasi')->nullable()->default(0);

            /* TABEL 10. TERAPI/MEDIKAMENTOSA */
            $table->text('tindakan_prekemo')->nullable()->default(0);
            $table->text('tindakan_kemp')->nullable()->default(0);
            $table->text('tindakan_postkemo')->nullable()->default(0);
            $table->text('terapi_omeprazole')->nullable()->default(0);
            $table->text('terapi_curcuma')->nullable()->default(0);
            $table->text('terapi_ondansetron')->nullable()->default(0);

            /* TABEL 11. TATA LAKSANA/INTERVENSI MEDIS */
            $table->text('intervensi_medika')->nullable()->default(0);
            $table->text('intervensi_nyeri')->nullable()->default(0);
            $table->text('intervensi_energi')->nullable()->default(0);
            $table->text('intervensi_mual')->nullable()->default(0);
            $table->text('intervensi_ansietas')->nullable()->default(0);
            $table->text('intervensi_citra')->nullable()->default(0);
            $table->text('intervensi_gizi')->nullable()->default(0);
            $table->text('intervensi_dpjp')->nullable()->default(0);

            /* TABEL 12. MONITORING & EVALUASI */
            $table->text('monev_dpjp')->nullable()->default(0);
            $table->text('monev_vital')->nullable()->default(0);
            $table->text('monev_mual')->nullable()->default(0);
            $table->text('monev_nutrisi')->nullable()->default(0);
            $table->text('monev_nyeri')->nullable()->default(0);
            $table->text('monev_ADL')->nullable()->default(0);
            $table->text('monev_makanan')->nullable()->default(0);
            $table->text('monev_antropometri')->nullable()->default(0);
            $table->text('monev_efektiv')->nullable()->default(0);
            $table->text('monev_interaksi')->nullable()->default(0);
            $table->text('monev_efek')->nullable()->default(0);

            /* TABEL 13. MOBILISASI/REHABILITASI */
            $table->text('mob_medis')->nullable()->default(0);
            $table->text('mob_keperawatan')->nullable()->default(0);
            $table->text('mob_fisio')->nullable()->default(0);

            /* TABEL 14. OUTCOME/HASIL */
            $table->text('hasil_medis')->nullable()->default(0);
            $table->text('hasil_vital')->nullable()->default(0);
            $table->text('hasil_mual')->nullable()->default(0);
            $table->text('hasil_nyeri')->nullable()->default(0);
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
        Schema::dropIfExists('kemoterapis');
    }
};
