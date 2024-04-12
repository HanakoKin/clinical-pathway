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
        Schema::create('tbps', function (Blueprint $table) {
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
            $table->text("asesment_igd")->nullable();
            $table->text("catatan_asesDokIgd")->nullable();
            $table->text("asesment_spesialis")->nullable();
            $table->text("catatan_asesDokSpe")->nullable();
            $table->text("asesment_perawat")->nullable();
            $table->text("catatan_asesPer")->nullable();

            /* TABEL 2. LABORATORIUM */
            $table->text("lab_hb")->nullable();
            $table->text("catatan_labHb")->nullable();
            $table->text("lab_SGOT")->nullable();
            $table->text("catatan_labSGOT")->nullable();
            $table->text("lab_langsung")->nullable();
            $table->text("catatan_labBTALangsung")->nullable();
            $table->text("lab_kultur")->nullable();
            $table->text("catatan_labBTAKultur")->nullable();
            $table->text("lab_expert")->nullable();
            $table->text("catatan_labExpert")->nullable();

            /* TABEL 3. RADIOLOGI */
            $table->text("radio_foto")->nullable();
            $table->text("catatan_radFoto")->nullable();
            $table->text("radio_CT")->nullable();
            $table->text("catatan_radCT")->nullable();

            /* TABEL 4. KONSULTASI */
            $table->text('konsultasi')->nullable();
            $table->text('catatan_konsul')->nullable();

            /* TABEL 5. ASESMEN LANJUTAN */
            $table->text('ases_DPJP')->nullable();
            $table->text('catatan_asesDPJP')->nullable();
            $table->text('ases_nonDPJP')->nullable();
            $table->text('catatan_asesNonDPJP')->nullable();
            $table->text('ases_PPJ')->nullable();
            $table->text('catatan_asesPPJ')->nullable();
            $table->text('ases_gizi')->nullable();
            $table->text('catatan_asesGizi')->nullable();
            $table->text('ases_resep')->nullable();
            $table->text('catatan_asesResep')->nullable();
            $table->text('ases_obat')->nullable();

            /* TABEL 6. DIAGNOSIS */
            $table->text('diagnosa_medis')->nullable();
            $table->text('catatan_diagTBParu')->nullable();
            $table->text('diagnosa_diare')->nullable();
            $table->text('catatan_diagDiare')->nullable();
            $table->text('diagnosa_cairan')->nullable();
            $table->text('diagnosa_elektrolit')->nullable();
            $table->text('diagnosa_nutrisi')->nullable();
            $table->text('diagnosa_hipertermia')->nullable();
            $table->text('diagnosa_akut')->nullable();
            $table->text('diagnosa_kulit')->nullable();
            $table->text('diagnosa_NI3')->nullable();
            $table->text('catatan_diagGiziNI3')->nullable();
            $table->text('diagnosa_NI5')->nullable();
            $table->text('diagnosa_NI2')->nullable();

            /* TABEL 7. DISCHARGE PLANNING */
            $table->text('displan_edukasi')->nullable();
            $table->text('catatan_disPlanEdukasi')->nullable();
            $table->text('displan_rumah')->nullable();
            $table->text('displan_hygenie')->nullable();
            $table->text('displan_sehat')->nullable();

            /* TABEL 8. EDUKASI TERINTEGRASI */
            $table->text('edukasi_diagnosis')->nullable();
            $table->text('catatan_emedDiag')->nullable();
            $table->text('edukasi_terapi')->nullable();
            $table->text('edukasi_consent')->nullable();
            $table->text('edukasi_gizi')->nullable();
            $table->text('catatan_egiz')->nullable();
            $table->text('edukasi_hygenie')->nullable();
            $table->text('catatan_ekepHygenie')->nullable();
            $table->text('edukasi_kebersihan')->nullable();
            $table->text('edukasi_perianal')->nullable();
            $table->text('edukasi_info')->nullable();
            $table->text('catatan_efarmInf')->nullable();
            $table->text('edukasi_konseling')->nullable();
            $table->text('lembar_edukasi')->nullable();
            $table->text('catatan_lemEdTer')->nullable();

            /* TABEL 9. TERAPI/MEDIKAMENTOSA */
            $table->text('injeksi_levifloksasin')->nullable();
            $table->text('injeksi_streptomisin')->nullable();
            $table->text('injeksi_transenamat')->nullable();
            $table->text('injeksi_kristaloid')->nullable();
            $table->text('catatan_infusKristaloid')->nullable();
            $table->text('oral_rifampicin')->nullable();
            $table->text('catatan_oralRifampicin')->nullable();
            $table->text('oral_INH')->nullable();
            $table->text('catatan_oralINH')->nullable();
            $table->text('oral_pirazinamide')->nullable();
            $table->text('catatan_oralPirazinamide')->nullable();
            $table->text('oral_etambutol')->nullable();
            $table->text('catatan_oralEtambutol')->nullable();
            $table->text('oral_ambroksol_A')->nullable();
            $table->text('catatan_oralAmbroksol_A')->nullable();
            $table->text('oral_salbutamol_A')->nullable();
            $table->text('catatan_oralSalbutamol_A')->nullable();
            $table->text('oral_PCT_A')->nullable();
            $table->text('catatan_oralPCT_A')->nullable();
            $table->text('oral_ranitidin_A')->nullable();
            $table->text('catatan_oralRanitidin_A')->nullable();
            $table->text('oral_ambroksol_B')->nullable();
            $table->text('catatan_oralAmbroksol_B')->nullable();
            $table->text('oral_salbutamol_B')->nullable();
            $table->text('catatan_oralSalbutamol_B')->nullable();
            $table->text('oral_PCT_B')->nullable();
            $table->text('catatan_oralPCT_B')->nullable();
            $table->text('oral_ranitidin_B')->nullable();
            $table->text('catatan_oralRanitidin_B')->nullable();

            /* TABEL 10. TATA LAKSANA/INTERVENSI MEDIS */
            $table->text('intervensi_medika')->nullable();
            $table->text('catatan_tatmedMedika')->nullable();
            $table->text('intervensi_elektrolit')->nullable();
            $table->text('catatan_tatkepElektrolit')->nullable();
            $table->text('intervensi_nyeri')->nullable();
            $table->text('intervensi_diare')->nullable();
            $table->text('intervensi_nutrisi')->nullable();
            $table->text('intervensi_perianal')->nullable();
            $table->text('intervensi_ADL')->nullable();
            $table->text('intervensi_infus')->nullable();
            $table->text('intervensi_obat')->nullable();
            $table->text('intervensi_gizi')->nullable();
            $table->text('catatan_tatgizi')->nullable();
            $table->text('intervensi_dpjp')->nullable();
            $table->text('catatan_tatfarmDPJP')->nullable();

            /* TABEL 11. MONITORING & EVALIASI */
            $table->text('monev_dpjp')->nullable();
            $table->text('catatan_monevDPJP')->nullable();
            $table->text('monev_vital')->nullable();
            $table->text('catatan_monevkepVital')->nullable();
            $table->text('monev_cairan')->nullable();
            $table->text('monev_diare')->nullable();
            $table->text('monev_rehidrasi')->nullable();
            $table->text('monev_perianal')->nullable();
            $table->text('monev_makanan')->nullable();
            $table->text('catatan_monevgiziMakanan')->nullable();
            $table->text('monev_antropometri')->nullable();
            $table->text('catatan_monevgiziAntropometri')->nullable();
            $table->text('monev_biokimia')->nullable();
            $table->text('catatan_monevgiziBiokimia')->nullable();
            $table->text('monev_fisik')->nullable();
            $table->text('catatan_monevgiziFisik')->nullable();
            $table->text('monev_efektiv')->nullable();
            $table->text('catatan_monevfarmEfektiv')->nullable();
            $table->text('monev_interaksi')->nullable();
            $table->text('monev_efek')->nullable();

            /* TABEL 12. MOBILISASI/REHABILITASI */
            $table->text('mob_medis')->nullable();
            $table->text('catatan_mobmed')->nullable();
            $table->text('mob_keperawatan')->nullable();
            $table->text('mob_fisio')->nullable();

            /* TABEL 13. OUTCOME/HASIL */
            $table->text('hasil_batuk')->nullable();
            $table->text('catatan_hasmedBatuk')->nullable();
            $table->text('hasil_demam')->nullable();
            $table->text('catatan_hasmedDemam')->nullable();
            $table->text('hasil_vital')->nullable();
            $table->text('catatan_hasmedVital')->nullable();
            $table->text('hasil_seimbang')->nullable();
            $table->text('catatan_hasmedSeimbang')->nullable();
            $table->text('hasil_perianal')->nullable();
            $table->text('catatan_haskepPerianal')->nullable();
            $table->text('hasil_asupan')->nullable();
            $table->text('catatan_hasgiziAsupan')->nullable();
            $table->text('hasil_status')->nullable();
            $table->text('hasil_terapi')->nullable();
            $table->text('catatan_hasgiziTerapi')->nullable();
            $table->text('hasil_rasional')->nullable();

            /* TABEL 14. KRITERIA PULANG */
            $table->text('pulang_umum')->nullable();
            $table->text('catatan_pulangUmum')->nullable();
            $table->text('pulang_khusus')->nullable();

            /* TABEL 15. RENCANA PULANG/EDUKASI PELAYANAN LANJUTAN */
            $table->text('rencana_resume')->nullable();
            $table->text('catatan_rencanaResume')->nullable();
            $table->text('rencana_penjelasan')->nullable();
            $table->text('rencana_surat')->nullable();

            $table->string('tanggal_laporan')->nullable();

            /* TTD DOKTER */
            $table->text('ttd_dokter')->nullable();
            $table->string('nama_dokter')->nullable();

            /* TTD PERAWAT */
            $table->text('ttd_perawat')->nullable();
            $table->string('nama_perawat')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbps');
    }
};
