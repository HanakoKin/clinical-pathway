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

            /* TABEL 3. RADIOLOGI */
            $table->text('radio_foto')->nullable();
            $table->text('catatan_radFoto')->nullable();
            $table->text('radio_USG')->nullable();
            $table->text('catatan_radUSG')->nullable();

            /* TABEL 4. VARIAN */
            $table->text('varian_pato')->nullable();
            $table->text('catatan_varPato')->nullable();
            $table->text('varian_ekg')->nullable();
            $table->text('catatan_varEkg')->nullable();

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
            $table->text('diagnosa_medis')->nullable();
            $table->text('catatan_diagChemotherapy')->nullable();
            $table->text('diagnosa_nausea')->nullable();
            $table->text('catatan_diagNausea')->nullable();
            $table->text('diagnosa_gangguan')->nullable();
            $table->text('diagnosa_ansietas')->nullable();
            $table->text('diagnosa_nyeri')->nullable();
            $table->text('diagnosa_intoleransi')->nullable();
            $table->text('diagnosa_adekuat')->nullable();
            $table->text('catatan_diagAdekuat')->nullable();
            $table->text('diagnosa_malnutrisi')->nullable();

            /* TABEL 8. DIAGNOSIS */
            $table->text('displan_kondisi')->nullable();
            $table->text('catatan_disPlanKondisi')->nullable();
            $table->text('displan_kemoterapi')->nullable();
            $table->text('displan_obat')->nullable();
            $table->text('displan_tatalaksana')->nullable();

            /* TABEL 9. EDUKASI TERINTEGRASI */
            $table->text('edukasi_diagnosis')->nullable();
            $table->text('catatan_emedDiag')->nullable();
            $table->text('edukasi_terapi')->nullable();
            $table->text('edukasi_consent')->nullable();
            $table->text('edukasi_gizi')->nullable();
            $table->text('catatan_egiz')->nullable();
            $table->text('edukasi_keluarga')->nullable();
            $table->text('catatan_ekepKeluarga')->nullable();
            $table->text('edukasi_info')->nullable();
            $table->text('catatan_efarmInf')->nullable();
            $table->text('edukasi_konseling')->nullable();
            $table->text('lembar_edukasi')->nullable();
            $table->text('catatan_lemEdTer')->nullable();

            /* TABEL 10. TERAPI/MEDIKAMENTOSA */
            $table->text('tindakan_prekemo')->nullable();
            $table->text('catatan_tindakanPreKemo')->nullable();
            $table->text('tindakan_kemp')->nullable();
            $table->text('catatan_tindakanKemo')->nullable();
            $table->text('tindakan_postkemo')->nullable();
            $table->text('catatan_tindakanPostKemo')->nullable();
            $table->text('terapi_omeprazole')->nullable();
            $table->text('catatan_terapiOmeprazole')->nullable();
            $table->text('terapi_curcuma')->nullable();
            $table->text('catatan_terapiCurcuma')->nullable();
            $table->text('terapi_ondansetron')->nullable();
            $table->text('catatan_terapiOndansetron')->nullable();

            /* TABEL 11. TATA LAKSANA/INTERVENSI MEDIS */
            $table->text('intervensi_medika')->nullable();
            $table->text('catatan_tatmedMedika')->nullable();
            $table->text('intervensi_nyeri')->nullable();
            $table->text('catatan_tatkepNyeri')->nullable();
            $table->text('intervensi_energi')->nullable();
            $table->text('intervensi_mual')->nullable();
            $table->text('intervensi_ansietas')->nullable();
            $table->text('intervensi_citra')->nullable();
            $table->text('intervensi_gizi')->nullable();
            $table->text('catatan_tatgizi')->nullable();
            $table->text('intervensi_dpjp')->nullable();
            $table->text('catatan_tatfarmDPJP')->nullable();

            /* TABEL 12. MONITORING & EVALUASI */
            $table->text('monev_dpjp')->nullable();
            $table->text('catatan_monevDPJP')->nullable();
            $table->text('monev_vital')->nullable();
            $table->text('catatan_monevkepVital')->nullable();
            $table->text('monev_mual')->nullable();
            $table->text('monev_nutrisi')->nullable();
            $table->text('monev_nyeri')->nullable();
            $table->text('monev_ADL')->nullable();
            $table->text('monev_makanan')->nullable();
            $table->text('catatan_monevgiziMakanan')->nullable();
            $table->text('monev_antropometri')->nullable();
            $table->text('catatan_monevgiziAntropometri')->nullable();
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
            $table->text('hasil_medis')->nullable();
            $table->text('catatan_hasilMedis')->nullable();
            $table->text('hasil_vital')->nullable();
            $table->text('catatan_haskepVital')->nullable();
            $table->text('hasil_mual')->nullable();
            $table->text('catatan_haskepMual')->nullable();
            $table->text('hasil_nyeri')->nullable();
            $table->text('catatan_haskepNyeri')->nullable();
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
