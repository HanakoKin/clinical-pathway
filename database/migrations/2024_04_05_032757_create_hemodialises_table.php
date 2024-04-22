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
            $table->string('table');
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
            $table->text('asesment_igd')->nullable();
            $table->text('catatan_asesDokIgd')->nullable();
            $table->text('asesment_spesialis')->nullable();
            $table->text('catatan_asesDokSpe')->nullable();
            $table->text('asesment_primer')->nullable();
            $table->text('catatan_asesPer')->nullable();

            /* TABEL 2. LABORATORIUM */
            $table->text('lab_darah')->nullable();
            $table->text('catatan_labDarah')->nullable();
            $table->text('lab_elektrolit')->nullable();
            $table->text('catatan_labElektrolit')->nullable();
            $table->text('lab_ureum')->nullable();
            $table->text('catatan_labUreum')->nullable();
            $table->text('lab_hcv')->nullable();
            $table->text('catatan_labHCV')->nullable();
            $table->text('lab_pt')->nullable();
            $table->text('catatan_labPT')->nullable();
            $table->text('lab_magnesium')->nullable();
            $table->text('catatan_labMagnesium')->nullable();
            $table->text('lab_tibc')->nullable();
            $table->text('catatan_labTIBC')->nullable();
            $table->text('lab_pth')->nullable();
            $table->text('catatan_labPTH')->nullable();

            /* TABEL 3. RADIOLOGI */
            $table->text('radio_foto')->nullable();
            $table->text('catatan_radFoto')->nullable();

            /* TABEL 4. VARIAN */
            $table->text('var_ekg')->nullable();
            $table->text('catatan_varEKG')->nullable();
            $table->text('var_echo')->nullable();
            $table->text('catatan_varEcho')->nullable();

            /* TABEL 5. KONSULTASI */
            $table->text('konsultasi')->nullable();
            $table->text('catatan_konsul')->nullable();

            /* TABEL 6. ASESMEN LANJUTAN */
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

            /* TABEL 7. DIAGNOSIS */
            $table->text('diagnosa_aki')->nullable();
            $table->text('catatan_diagAKI')->nullable();
            $table->text('diagnosa_end')->nullable();
            $table->text('catatan_diagEnd')->nullable();
            $table->text('diagnosa_napas')->nullable();
            $table->text('catatan_diagNapas')->nullable();
            $table->text('diagnosa_perfusi')->nullable();
            $table->text('diagnosa_hipervolemia')->nullable();
            $table->text('diagnosa_nutrisi')->nullable();
            $table->text('diagnosa_nausea')->nullable();
            $table->text('diagnosa_aktivitas')->nullable();
            $table->text('diagnosa_kulit')->nullable();
            $table->text('diagnosa_jantung')->nullable();
            $table->text('diagnosa_perifer')->nullable();
            $table->text('diagnosa_infeksi')->nullable();
            $table->text('diagnosa_cairan')->nullable();
            $table->text('catatan_diagGiziCairan')->nullable();
            $table->text('diagnosa_garam')->nullable();
            $table->text('diagnosa_protein')->nullable();

            /* TABEL 8. DISCHARGE PLANNING */
            $table->text('displan_edukasi')->nullable();
            $table->text('catatan_disPlanEdukasi')->nullable();
            $table->text('displan_rencana')->nullable();
            $table->text('displan_obat')->nullable();
            $table->text('displan_kontrol')->nullable();

            /* TABEL 9. EDUKASI TERINTEGRASI */
            $table->text('edukasi_diagnosis')->nullable();
            $table->text('catatan_emedDiag')->nullable();
            $table->text('edukasi_terapi')->nullable();
            $table->text('edukasi_consent')->nullable();
            $table->text('catatan_emedConsent')->nullable();
            $table->text('edukasi_gizi')->nullable();
            $table->text('catatan_egiz')->nullable();
            $table->text('edukasi_ginjal')->nullable();
            $table->text('catatan_ekepGinjal')->nullable();
            $table->text('edukasi_hemodialisa')->nullable();
            $table->text('edukasi_cdl')->nullable();
            $table->text('edukasi_output')->nullable();
            $table->text('edukasi_dukungan')->nullable();
            $table->text('edukasi_info')->nullable();
            $table->text('catatan_efarmInf')->nullable();
            $table->text('edukasi_konseling')->nullable();
            $table->text('lembar_edukasi')->nullable();
            $table->text('catatan_lemEdTer')->nullable();

            /* TABEL 10. TERAPI/MEDIKAMENTOSA */
            $table->text('tindakan_cartheter')->nullable();
            $table->text('catatan_tindakanCartheter')->nullable();
            $table->text('tindakan_nasal')->nullable();
            $table->text('catatan_tindakanNasal')->nullable();
            $table->text('injeksi_kristaloid')->nullable();
            $table->text('catatan_infusKristaloid')->nullable();
            $table->text('inject_bolus')->nullable();
            $table->text('catatan_injectBolus')->nullable();
            $table->text('inject_heparin')->nullable();
            $table->text('catatan_injectHeparin')->nullable();
            $table->text('inject_eritropoetin')->nullable();
            $table->text('catatan_injectEritropoetin')->nullable();
            $table->text('oral_asamFolat')->nullable();
            $table->text('catatan_oralAsamFolat')->nullable();
            $table->text('oral_hipertensi')->nullable();
            $table->text('catatan_oralHipertensi')->nullable();

            /* TABEL 11. TATA LAKSANA/INTERVENSI MEDIS */
            $table->text('intervensi_medika')->nullable();
            $table->text('catatan_tatmedMedika')->nullable();
            $table->text('intervensi_elektrolit')->nullable();
            $table->text('catatan_tatkepElektrolit')->nullable();
            $table->text('intervensi_hipertermia')->nullable();
            $table->text('intervensi_infeksi')->nullable();
            $table->text('intervensi_nutrisi')->nullable();
            $table->text('intervensi_ADL')->nullable();
            $table->text('intervensi_infus')->nullable();
            $table->text('intervensi_obat')->nullable();
            $table->text('intervensi_gizi')->nullable();
            $table->text('catatan_tatgizi')->nullable();
            $table->text('intervensi_dpjp')->nullable();
            $table->text('catatan_tatfarmDPJP')->nullable();

            /* TABEL 12. MONITORING & EVALIASI */
            $table->text('monev_dpjp')->nullable();
            $table->text('catatan_monevDPJP')->nullable();
            $table->text('monev_vital')->nullable();
            $table->text('catatan_monevkepVital')->nullable();
            $table->text('monev_cairan')->nullable();
            $table->text('monev_nutrisi')->nullable();
            $table->text('monev_nyeri')->nullable();
            $table->text('monev_infeksi')->nullable();
            $table->text('monev_makanan')->nullable();
            $table->text('catatan_monevgiziMakanan')->nullable();
            $table->text('monev_antropometri')->nullable();
            $table->text('catatan_monevAntropometri')->nullable();
            $table->text('monev_biokimia')->nullable();
            $table->text('catatan_monevgiziBiokimia')->nullable();
            $table->text('monev_fisik')->nullable();
            $table->text('catatan_monevgiziFisik')->nullable();
            $table->text('monev_efektiv')->nullable();
            $table->text('catatan_monevfarmEfektiv')->nullable();
            $table->text('monev_interaksi')->nullable();
            $table->text('monev_efek')->nullable();

            /* TABEL 13. MOBILISASI/REHABILITASI */
            $table->text('mob_medis')->nullable();
            $table->text('catatan_mobmed')->nullable();
            $table->text('mob_keperawatan')->nullable();
            $table->text('mob_fisio')->nullable();

            /* TABEL 14. OUTCOME/HASIL */
            $table->text('hasil_batuk')->nullable();
            $table->text('catatan_hasmedBatuk')->nullable();
            $table->text('hasil_lab')->nullable();
            $table->text('catatan_hasmedLab')->nullable();
            $table->text('hasil_vital')->nullable();
            $table->text('catatan_haskepVital')->nullable();
            $table->text('hasil_seimbang')->nullable();
            $table->text('catatan_haskepSeimbang')->nullable();
            $table->text('hasil_infeksi')->nullable();
            $table->text('catatan_haskepInfeksi')->nullable();
            $table->text('hasil_asupan')->nullable();
            $table->text('catatan_hasgiziAsupan')->nullable();
            $table->text('hasil_status')->nullable();
            $table->text('hasil_terapi')->nullable();
            $table->text('catatan_hasgiziTerapi')->nullable();
            $table->text('hasil_rasional')->nullable();

            /* TABEL 15. KRITERIA PULANG */
            $table->text('pulang_umum')->nullable();
            $table->text('catatan_pulangUmum')->nullable();
            $table->text('pulang_khusus')->nullable();

            /* TABEL 16. RENCANA PULANG/EDUKASI PELAYANAN LANJUTAN */
            $table->text('rencana_resume')->nullable();
            $table->text('catatan_rencanaResume')->nullable();
            $table->text('rencana_penjelasan')->nullable();
            $table->text('rencana_surat')->nullable();
            $table->text('varian_rencana')->nullable();
            $table->text('catatan_varianRencana')->nullable();

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
