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
        Schema::create('kataraks', function (Blueprint $table) {
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
            $table->text("asesment_mata")->nullable();
            $table->text("catatan_asesDokMata")->nullable();
            $table->text("asesment_internis")->nullable();
            $table->text("catatan_asesDokInternis")->nullable();
            $table->text("asesment_anestesi")->nullable();
            $table->text("catatan_asesDokAnsestesi")->nullable();
            $table->text("asesment_perawat")->nullable();
            $table->text("catatan_asesPer")->nullable();

            /* TABEL 2. LABORATORIUM */
            $table->text("lab_darah")->nullable();
            $table->text("catatan_labDar")->nullable();
            $table->text("lab_UR")->nullable();
            $table->text("catatan_labUR")->nullable();

            /* TABEL 3. RADIOLOGI */
            $table->text("radio_thorax")->nullable();
            $table->text("catatan_radTho")->nullable();
            $table->text("radio_USG")->nullable();
            $table->text("catatan_radUSG")->nullable();

            /* TABEL 4. EKG */
            $table->text("ekg")->nullable();
            $table->text("catatan_ekg")->nullable();

            /* TABEL 5. ASESMEN LANJUTAN */
            $table->text("ases_DPJP")->nullable();
            $table->text("catatan_asesDPJP")->nullable();
            $table->text("ases_nonDPJP")->nullable();
            $table->text("catatan_asesNonDPJP")->nullable();
            $table->text("ases_PPJ")->nullable();
            $table->text("catatan_asesPPJ")->nullable();
            $table->text("ases_gizi")->nullable();
            $table->text("catatan_asesGizi")->nullable();
            $table->text("ases_resep")->nullable();
            $table->text("catatan_asesResep")->nullable();
            $table->text("ases_obat")->nullable();

            /* TABEL 6. DIAGNOSIS */
            $table->text("diagnosa_medis")->nullable();
            $table->text("catatan_diagMedis")->nullable();
            $table->text("diagnosa_akut")->nullable();
            $table->text("catatan_diagAkut")->nullable();
            $table->text("diagnosa_hiper")->nullable();
            $table->text("diagnosa_mual")->nullable();
            $table->text("diagnosa_gizi")->nullable();
            $table->text("catatan_diagGizi")->nullable();

            /* TABEL 7. DISCHARGE PLANNING */
            $table->text("displan_aktiv")->nullable();
            $table->text("catatan_disPlanAk")->nullable();
            $table->text("displan_terapi")->nullable();
            $table->text("displan_diet")->nullable();
            $table->text("displan_istirahat")->nullable();

            /* TABEL 8. EDUKASI TERINTEGRASI */
            $table->text("edukasi_diagnosis")->nullable();
            $table->text("catatan_emedDiag")->nullable();
            $table->text("edukasi_terapi")->nullable();
            $table->text("edukasi_consent")->nullable();
            $table->text("edukasi_gizi")->nullable();
            $table->text("catatan_egiz")->nullable();
            $table->text("edukasi_ADL")->nullable();
            $table->text("catatan_ekepADL")->nullable();
            $table->text("edukasi_nyeri")->nullable();
            $table->text("edukasi_infeksi")->nullable();
            $table->text("edukasi_diet")->nullable();
            $table->text("edukasi_mual")->nullable();
            $table->text("edukasi_info")->nullable();
            $table->text("catatan_efarmInf")->nullable();
            $table->text("edukasi_konseling")->nullable();
            $table->text("lembar_edukasi")->nullable();
            $table->text("catatan_lemEdTer")->nullable();

            /* TABEL 9. TERAPI/MEDIKAMENTOSA */
            $table->text("injeksi_ranitidine")->nullable();
            $table->text("catatan_injectRani")->nullable();
            $table->text("injeksi_ondansentron")->nullable();
            $table->text("catatan_injectOndan")->nullable();
            $table->text("injeksi_kolf")->nullable();
            $table->text("catatan_infusKolf")->nullable();
            $table->text("oral_mefenamat")->nullable();
            $table->text("catatan_oralMefe")->nullable();
            $table->text("oral_ciprofloxacin")->nullable();
            $table->text("catatan_oralCipro")->nullable();
            $table->text("lokal_levofloxacin")->nullable();
            $table->text("catatan_lokalLevo")->nullable();
            $table->text("local_antibiotika")->nullable();
            $table->text("catatan_lokalAnti")->nullable();

            /* TABEL 10. TATA LAKSANA/INTERVENSI MEDIS */
            $table->text("intervensi_ECCE")->nullable();
            $table->text("catatan_tatmedECCE")->nullable();
            $table->text("intervensi_nyeri")->nullable();
            $table->text("catatan_tatkepNyeri")->nullable();
            $table->text("intervensi_terapi")->nullable();
            $table->text("intervensi_demam")->nullable();
            $table->text("intervensi_cairan")->nullable();
            $table->text("intervensi_kontrol")->nullable();
            $table->text("intervensi_infus")->nullable();
            $table->text("intervensi_medikasi")->nullable();
            $table->text("intervensi_operasi")->nullable();
            $table->text("intervensi_luka")->nullable();
            $table->text("intervensi_diet")->nullable();
            $table->text("catatan_tatgiziDiet")->nullable();
            $table->text("intervensi_dpjp")->nullable();
            $table->text("catatan_tatfarmDPJP")->nullable();

            /* TABEL 11. MONITORING & EVALUASI */
            $table->text("monev_operasi")->nullable();
            $table->text("catatan_monevOperasi")->nullable();
            $table->text("monev_periksa")->nullable();
            $table->text("monev_komplikasi")->nullable();
            $table->text("monev_perawatan")->nullable();
            $table->text("monev_skala")->nullable();
            $table->text("catatan_monevkepSkala")->nullable();
            $table->text("monev_vital")->nullable();
            $table->text("monev_hidrasi")->nullable();
            $table->text("monev_makanan")->nullable();
            $table->text("catatan_monevgiziMakanan")->nullable();
            $table->text("monev_antropometri")->nullable();
            $table->text("monev_interaksi")->nullable();
            $table->text("catatan_monevfarmInteraksi")->nullable();
            $table->text("monev_efek")->nullable();
            $table->text("monev_terapi")->nullable();

            /* TABEL 12. MOBILISASI/REHABILITASI */
            $table->text("mob_medis")->nullable();
            $table->text("catatan_mobmed")->nullable();
            $table->text("mob_keperawatan")->nullable();
            $table->text("mob_fisio")->nullable();

            /* TABEL 13. OUTCOME/HASIL */
            $table->text("hasil_visus")->nullable();
            $table->text("catatan_hasmedVisus")->nullable();
            $table->text("hasil_nyeri")->nullable();
            $table->text("catatan_haskepNyeri")->nullable();
            $table->text("hasil_infeksi")->nullable();
            $table->text("hasil_respon")->nullable();
            $table->text("hasil_vital")->nullable();
            $table->text("hasil_asupan")->nullable();
            $table->text("catatan_hasgiziAsupan")->nullable();
            $table->text("hasil_status")->nullable();
            $table->text("hasil_terapi")->nullable();
            $table->text("catatan_hasfarmInd")->nullable();
            $table->text("hasil_obat")->nullable();

            /* TABEL 14. KRITERIA PULANG */
            $table->text("pulang_normal")->nullable();
            $table->text("catatan_pulangNormal")->nullable();
            $table->text("pulang_NOC")->nullable();
            $table->text("pulang_varian")->nullable();
            $table->text("catatan_pulangVarian")->nullable();

            /* TABEL 15. RENCANA PULANG/EDUKASI PELAYANAN LANJUTAN */
            $table->text("rencana_perawatan")->nullable();
            $table->text("catatan_rencanaPerawatan")->nullable();
            $table->text("rencana_penjelasan")->nullable();
            $table->text("rencana_kontrol")->nullable();

            $table->string('tanggal_laporan')->nullable();

            /* TTD DOKTER */
            $table->text('ttd_dokter')->nullable();
            $table->string('nama_dokter')->nullable();

            /* TTD PERAWAT */
            $table->text('ttd_perawat')->nullable();
            $table->string('nama_perawat')->nullable();

            /* TTD PELAKSANA VERIFIKASI */
            $table->text('ttd_pelaksana')->nullable();
            $table->string('nama_pelaksana')->nullable();

            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kataraks');
    }
};
