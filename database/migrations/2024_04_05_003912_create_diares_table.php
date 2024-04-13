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
            $table->text('asesment_igd')->nullable();
            $table->text('catatan_asesDokIgd')->nullable();
            $table->text('asesment_spesialis')->nullable();
            $table->text('catatan_asesDokSpe')->nullable();
            $table->text('asesment_perawat')->nullable();
            $table->text('catatan_asesPer')->nullable();

            /* TABEL 2. LABORATORIUM */
            $table->text('lab_darah')->nullable();
            $table->text('catatan_labDar')->nullable();
            $table->text('lab_feses')->nullable();
            $table->text('catatan_labFeses')->nullable();
            $table->text('lab_GDS')->nullable();
            $table->text('catatan_labGDS')->nullable();
            $table->text('lab_varian')->nullable();
            $table->text('catatan_labVarian')->nullable();

            /* TABEL 3. RADIOLOGI */
            $table->text('radiologi')->nullable();
            $table->text('catatan_radiologi')->nullable();

            /* TABEL 4. KONSULTASI */
            $table->text('konsultasi')->nullable();
            $table->text('catatan_konsultasi')->nullable();

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
            $table->text('catatan_diagMedis')->nullable();
            $table->text('diagnosa_diare')->nullable();
            $table->text('catatan_diagDiare')->nullable();
            $table->text('diagnosa_cairan')->nullable();
            $table->text('diagnosa_elektrolit')->nullable();
            $table->text('diagnosa_nutrisi')->nullable();
            $table->text('diagnosa_akut')->nullable();
            $table->text('diagnosa_hiper')->nullable();
            $table->text('diagnosa_kulit')->nullable();
            $table->text('diagnosa_gizi')->nullable();
            $table->text('catatan_diagGizi')->nullable();

            /* TABEL 7. DISCHARGE PLANNING */
            $table->text('displan_rumah')->nullable();
            $table->text('catatan_disPlanRumah')->nullable();
            $table->text('displan_terapi')->nullable();
            $table->text('displan_hygiene')->nullable();

            /* TABEL 8. EDUKASI TERINTEGRASI */
            $table->text('edukasi_diagnosis')->nullable();
            $table->text('catatan_emedDiag')->nullable();
            $table->text('edukasi_terapi')->nullable();
            $table->text('edukasi_consent')->nullable();
            $table->text('edukasi_gizi')->nullable();
            $table->text('catatan_egiz')->nullable();
            $table->text('edukasi_hygiene')->nullable();
            $table->text('catatan_ekepHygiene')->nullable();
            $table->text('edukasi_makanan')->nullable();
            $table->text('catatan_ekepMakanan')->nullable();
            $table->text('edukasi_perianal')->nullable();
            $table->text('catatan_ekepPerianal')->nullable();
            $table->text('edukasi_info')->nullable();
            $table->text('catatan_efarmInf')->nullable();
            $table->text('edukasi_konseling')->nullable();
            $table->text('catatan_efarmKons')->nullable();
            $table->text('lembar_edukasi')->nullable();
            $table->text('catatan_lemEdTer')->nullable();

            /* TABEL 9. TERAPI/MEDIKAMENTOSA */
            $table->text('injeksi_ceftriaxon')->nullable();
            $table->text('catatan_injectCeftriaxon')->nullable();
            $table->text('injeksi_Parasetamol')->nullable();
            $table->text('catatan_injectParasetamol')->nullable();
            $table->text('injeksi_NaCl')->nullable();
            $table->text('catatan_infusNaCl')->nullable();
            $table->text('oral_dompridon')->nullable();
            $table->text('catatan_oralDompridon')->nullable();
            $table->text('oral_zinc')->nullable();
            $table->text('catatan_oralZinc')->nullable();
            $table->text('rehidrasi_oral')->nullable();
            $table->text('catatan_rehidrasiOral')->nullable();

            /* TABEL 10. TATA LAKSANA/INTERVENSI MEDIS */
            $table->text('intervensi_medika')->nullable();
            $table->text('catatan_tatmedMedika')->nullable();
            $table->text('intervensi_cairan')->nullable();
            $table->text('catatan_tatkepCairan')->nullable();
            $table->text('intervensi_diare')->nullable();
            $table->text('intervensi_elektrolit')->nullable();
            $table->text('intervensi_demam')->nullable();
            $table->text('intervensi_nutrisi')->nullable();
            $table->text('intervensi_nyeri')->nullable();
            $table->text('intervensi_kulit')->nullable();
            $table->text('intervensi_resusitasi')->nullable();
            $table->text('intervensi_infus')->nullable();
            $table->text('intervensi_ASI')->nullable();
            $table->text('catatan_tatgiziASI')->nullable();
            $table->text('intervensi_dpjp')->nullable();
            $table->text('catatan_tatfarmDPJP')->nullable();

            /* TABEL 11. MONITORING & EVALIASI */
            $table->text('monev_dpjp')->nullable();
            $table->text('catatan_monevDPJP')->nullable();
            $table->text('monev_intake')->nullable();
            $table->text('catatan_monevkepIntake')->nullable();
            $table->text('monev_vital')->nullable();
            $table->text('monev_hidrasi')->nullable();
            $table->text('monev_kendali')->nullable();
            $table->text('monev_eliminasi')->nullable();
            $table->text('monev_kulit')->nullable();
            $table->text('monev_makanan')->nullable();
            $table->text('catatan_monevgiziMakanan')->nullable();
            $table->text('monev_antropometri')->nullable();
            $table->text('monev_interaksi')->nullable();
            $table->text('catatan_monevfarmInteraksi')->nullable();
            $table->text('monev_efek')->nullable();
            $table->text('monev_terapi')->nullable();

            /* TABEL 12. MOBILISASI/REHABILITASI */
            $table->text('mob_medis')->nullable();
            $table->text('catatan_mobmed')->nullable();
            $table->text('mob_keperawatan')->nullable();
            $table->text('mob_fisio')->nullable();

            /* TABEL 13. OUTCOME/HASIL */
            $table->text('hasil_diare')->nullable();
            $table->text('catatan_hasmedDiare')->nullable();
            $table->text('hasil_dehidrasi')->nullable();
            $table->text('catatan_hasmedDehidrasi')->nullable();
            $table->text('hasil_seimbang')->nullable();
            $table->text('catatan_hasmedSeimbang')->nullable();
            $table->text('hasil_komplikasi')->nullable();
            $table->text('hasil_vital')->nullable();
            $table->text('hasil_asupan')->nullable();
            $table->text('catatan_hasgiziAsupan')->nullable();
            $table->text('hasil_status')->nullable();
            $table->text('hasil_terapi')->nullable();
            $table->text('catatan_hasfarmInd')->nullable();
            $table->text('hasil_obat')->nullable();

            /* TABEL 14. KRITERIA PULANG */
            $table->text('pulang_normal')->nullable();
            $table->text('catatan_pulangNormal')->nullable();
            $table->text('pulang_NOC')->nullable();
            $table->text('pulang_varian')->nullable();
            $table->text('catatan_pulangVarian')->nullable();

            /* TABEL 15. RENCANA PULANG/EDUKASI PELAYANAN LANJUTAN */
            $table->text('rencana_resume')->nullable();
            $table->text('catatan_rencanaResume')->nullable();
            $table->text('rencana_penjelasan')->nullable();
            $table->text('rencana_surat')->nullable();

            $table->string("tanggal_laporan")->nullable();

            /* TTD DOKTER */
            $table->string("nama_dokter")->nullable();
            $table->text("ttd_dokter")->nullable();

            /* TTD PERAWAT */
            $table->string("nama_perawat")->nullable();
            $table->text("ttd_perawat")->nullable();

            /* TTD PELAKSANA */
            $table->string("nama_pelaksana")->nullable();
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
