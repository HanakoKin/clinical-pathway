<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TbpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('tbps')->insert([
            [
                'table' => 'TB Paru',
                'noReg' => 'RG03299949',
                'nama' => 'FAJAR HAQQY ASHBAHANIE',
                'jenis_kelamin' => 'Laki-laki',
                'tanggal_lahir' => '01-05-1999',
                'diagnosa' => 'Batuk',
                'penyakit_utama' => 'Batuk',
                'penyakit_penyerta' => null,
                'komplikasi' => null,
                'tindakan' => '1:-, 2:Dietary Counseling and Surveillance',
                'berat_badan' => '60',
                'tinggi_badan' => '165',
                'tanggal_masuk' => '26-03-2024',
                'tanggal_keluar' => '28-03-2024',
                'kode_icd' => '6:Z71.3',
                'jam_masuk' => '09:02:31',
                'jam_keluar' => '14:36:19',
                'lama_rawat' => '2 Hari',
                'rencana_rawat' => 'Ya',
                'rawat_kelas' => 'A',
                'rujukan' => null,
                'hari_penyakit' => '1',
                'asesment_igd' => '1',
                'asesment_spesialis' => '1',
                'asesment_perawat' => '1',
                'lab_hb' => '1',
                'lab_SGOT' => '1',
                'lab_langsung' => '1',
                'lab_kultur' => '1',
                'lab_expert' => '1',
                'radio_foto' => '1',
                'radio_CT' => '1',
                'konsultasi' => '1',
                'ases_DPJP' => '1',
                'ases_nonDPJP' => '1',
                'ases_PPJ' => '1',
                'ases_gizi' => '1',
                'ases_resep' => '1',
                'ases_obat' => '1',
                'diagnosa_medis' => '1',
                'diagnosa_diare' => '1',
                'diagnosa_cairan' => '1',
                'diagnosa_elektrolit' => '1',
                'diagnosa_nutrisi' => '1',
                'diagnosa_hipertermia' => '1',
                'diagnosa_akut' => '1',
                'diagnosa_kulit' => '1',
                'diagnosa_NI3' => '1',
                'diagnosa_NI5' => '1',
                'diagnosa_NI2' => '1',
                'displan_edukasi' => '1',
                'displan_rumah' => '1',
                'displan_hygenie' => '1',
                'displan_sehat' => '1',
                'edukasi_diagnosis' => '1',
                'edukasi_terapi' => '1',
                'edukasi_consent' => '1',
                'edukasi_gizi' => '1',
                'edukasi_hygenie' => '1',
                'edukasi_kebersihan' => '1',
                'edukasi_perianal' => '1',
                'edukasi_info' => '1',
                'edukasi_konseling' => '1',
                'lembar_edukasi' => '1',
                'injeksi_levifloksasin' => '1',
                'injeksi_streptomisin' => '1',
                'injeksi_transenamat' => '1',
                'injeksi_kristaloid' => '1',
                'oral_rifampicin' => '1',
                'oral_INH' => '1',
                'oral_pirazinamide' => '1',
                'oral_etambutol' => '1',
                'oral_ambroksol_A' => '1',
                'oral_salbutamol_A' => '1',
                'oral_PCT_A' => '1',
                'oral_ranitidin_A' => '1',
                'oral_ambroksol_B' => '1',
                'oral_salbutamol_B' => '1',
                'oral_PCT_B' => '1',
                'oral_ranitidin_B' => '1',
                'intervensi_medika' => '1',
                'intervensi_elektrolit' => '1',
                'intervensi_nyeri' => '1',
                'intervensi_diare' => '1',
                'intervensi_nutrisi' => '1',
                'intervensi_perianal' => '1',
                'intervensi_ADL' => '1',
                'intervensi_infus' => '1',
                'intervensi_obat' => '1',
                'intervensi_gizi' => '1',
                'intervensi_dpjp' => '1',
                'monev_dpjp' => '1',
                'monev_vital' => '1',
                'monev_cairan' => '1',
                'monev_diare' => '1',
                'monev_rehidrasi' => '1',
                'monev_perianal' => '1',
                'monev_makanan' => '1',
                'monev_antropometri' => '1',
                'monev_biokimia' => '1',
                'monev_fisik' => '1',
                'monev_efektiv' => '1',
                'monev_interaksi' => '1',
                'monev_efek' => '1',
                'mob_medis' => '1',
                'mob_keperawatan' => '1',
                'mob_fisio' => '1',
                'hasil_batuk' => '1',
                'hasil_demam' => '1',
                'hasil_vital' => '1',
                'hasil_Seimbang' => '1',
                'hasil_perianal' => '1',
                'hasil_asupan' => '1',
                'hasil_status' => '1',
                'hasil_terapi' => '1',
                'hasil_rasional' => '1',
                'pulang_umum' => '1',
                'pulang_khusus' => '1',
                'rencana_resume' => '1',
                'rencana_penjelasan' => '1',
                'rencana_surat' => '1',
                'tanggal_laporan' => '08-04-2024',
                'ttd_dokter' => null,
                'nama_dokter' => null,
                'ttd_perawat' => null,
                'nama_perawat' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
