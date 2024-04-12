<?php

namespace App\Http\Controllers;

use App\Models\Tbp;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class TbpController extends Controller
{
    public function index()
    {
        $title = 'CP TB Paru Page';

        $datas = Tbp::orderBy('created_at', 'desc')->get();

        return view('pages.tbp.main', compact('datas', 'title'));
    }

    public function add()
    {
        $title = 'Add CP TB Paru';

        $func = 'add';

        return view('pages.tbp.add', compact('func', 'title'));
    }

    public function store(Request $request)
    {

        // dd($request);

        // Array yang berisi nama kolom dan nilai default
        $columns = [
            "hari_penyakit",
            "asesment_igd",
            "asesment_spesialis",
            "asesment_perawat",
            "asesment_kondisi",
            "lab_hb",
            "lab_SGOT",
            "lab_langsung",
            "lab_kultur",
            "lab_expert",
            "radio_foto",
            "radio_CT",
            "konsultasi",
            "ases_DPJP",
            "ases_nonDPJP",
            "ases_PPJ",
            "ases_gizi",
            "ases_resep",
            "ases_obat",
            "diagnosa_medis",
            "diagnosa_diare",
            "diagnosa_cairan",
            "diagnosa_elektrolit",
            "diagnosa_nutrisi",
            "diagnosa_hipertermia",
            "diagnosa_akut",
            "diagnosa_kulit",
            "diagnosa_NI3",
            "diagnosa_NI5",
            "diagnosa_NI2",
            "displan_edukasi",
            "displan_rumah",
            "displan_hygenie",
            "displan_sehat",
            "edukasi_diagnosis",
            "edukasi_terapi",
            "edukasi_consent",
            "edukasi_gizi",
            "edukasi_hygenie",
            "edukasi_kebersihan",
            "edukasi_perianal",
            "edukasi_info",
            "edukasi_konseling",
            "lembar_edukasi",
            "injeksi_levifloksasin",
            "injeksi_streptomisin",
            "injeksi_transenamat",
            "injeksi_kristaloid",
            "oral_rifampicin",
            "oral_INH",
            "oral_pirazinamide",
            "oral_etambutol",
            "oral_ambroksol_A",
            "oral_salbutamol_A",
            "oral_PCT_A",
            "oral_ranitidin_A",
            "oral_ambroksol_B",
            "oral_salbutamol_B",
            "oral_PCT_B",
            "oral_ranitidin_B",
            "intervensi_medika",
            "intervensi_elektrolit",
            "intervensi_nyeri",
            "intervensi_diare",
            "intervensi_nutrisi",
            "intervensi_perianal",
            "intervensi_ADL",
            "intervensi_infus",
            "intervensi_obat",
            "intervensi_gizi",
            "intervensi_dpjp",
            "monev_dpjp",
            "monev_vital",
            "monev_cairan",
            "monev_diare",
            "monev_rehidrasi",
            "monev_perianal",
            "monev_makanan",
            "monev_antropometri",
            "monev_biokimia",
            "monev_fisik",
            "monev_efektiv",
            "monev_interaksi",
            "monev_efek",
            "mob_medis",
            "mob_keperawatan",
            "mob_fisio",
            "hasil_batuk",
            "hasil_demam",
            "hasil_vital",
            "hasil_seimbang",
            "hasil_perianal",
            "hasil_asupan",
            "hasil_status",
            "hasil_terapi",
            "hasil_rasional",
            "pulang_umum",
            "pulang_khusus",
            "rencana_resume",
            "rencana_penjelasan",
            "rencana_surat",
        ];

        // Inisialisasi string kosong untuk setiap tabel
        $tableValues = [];

        // Loop untuk setiap kolom
        foreach ($columns as $column) {
            // Ambil nilai dari request atau gunakan nilai default jika tidak tersedia
            $columnValues = $request->$column ?? []; // Default value []

            // Periksa apakah $columnValues tidak kosong
            if (!empty($columnValues)) {
                // Inisialisasi string kosong untuk setiap kolom
                $columnString = '';

                // Loop untuk setiap nilai dalam kolom
                foreach ($columnValues as $index => $value) {
                    // Tambahkan index dan nilai ke dalam string
                    $columnString .= ($index + 1) . ', ';
                }

                // Hapus koma terakhir dari string
                $columnString = rtrim($columnString, ', ');

                // Tambahkan string kolom ke dalam array tabel
                $tableValues[$column] = $columnString;
            }
        }

        $stringKodeICD = '';

        for ($i = 0; $i < 6; $i++) {
            if ($request->has('kode_icd') && isset($request->kode_icd[$i])) {
                $stringKodeICD .= ($i + 1) . ':' . ($request->kode_icd[$i] ?? '-') . ', ';
            }
        }

        // Menghapus koma dan spasi ekstra di akhir string
        $stringKodeICD = rtrim($stringKodeICD, ', ');

        // Menyimpan dalam variabel
        $kodeICDResult = $stringKodeICD;

        if ($request->has('kode_icd')) {
            $request->merge(['kode_icd' => $kodeICDResult]);
        }

        $stringTindakan = '';

        for ($i = 0; $i < 2; $i++) {
            if ($request->has('tindakan') && isset($request->tindakan[$i])) {
                $stringTindakan .= ($i + 1) . ':' . ($request->tindakan[$i] ?? '-') . ', ';
            }
        }

        // Menghapus koma dan spasi ekstra di akhir string
        $stringTindakan = rtrim($stringTindakan, ', ');

        // Menyimpan dalam variabel
        $tindakanResult = $stringTindakan;

        if ($request->has('tindakan')) {
            $request->merge(['tindakan' => $tindakanResult]);
        }

        foreach ($columns as $data) {
            if ($request->has($data)) {
                $request->merge([$data => $tableValues[$data]]);
            }
        }

        $validator = Validator::make($request->all(), [
            'noReg' => 'string',
            'nama' => 'nullable|string',
            'jenis_kelamin' => 'nullable|string',
            'tanggal_lahir' => 'nullable|string',
            'diagnosa' => 'nullable|string',
            'penyakit_utama' => 'nullable|string',
            'penyakit_penyerta' => 'nullable|string',
            'komplikasi' => 'nullable|string',
            'tindakan' => 'nullable|string',
            'berat_badan' => 'nullable|string',
            'tinggi_badan' => 'nullable|string',
            'tanggal_masuk' => 'nullable|string',
            'tanggal_keluar' => 'nullable|string',
            'kode_icd' => 'nullable|string',
            'jam_masuk' => 'nullable|string',
            'jam_keluar' => 'nullable|string',
            'lama_rawat' => 'nullable|string',
            'rencana_rawat' => 'nullable|string',
            'rawat_kelas' => 'nullable|string',
            'rujukan' => 'nullable|string',
            'hari_penyakit' => 'nullable|string',
            'asesment_igd' => 'nullable|string',
            'catatan_asesDokIgd' => 'nullable|string',
            'asesment_spesialis' => 'nullable|string',
            'catatan_asesDokSpe' => 'nullable|string',
            'asesment_perawat' => 'nullable|string',
            'catatan_asesPer' => 'nullable|string',
            'lab_hb' => 'nullable|string',
            'catatan_labHb' => 'nullable|string',
            'lab_SGOT' => 'nullable|string',
            'catatan_labSGOT' => 'nullable|string',
            'lab_langsung' => 'nullable|string',
            'catatan_labBTALangsung' => 'nullable|string',
            'lab_kultur' => 'nullable|string',
            'catatan_labBTAKultur' => 'nullable|string',
            'lab_expert' => 'nullable|string',
            'catatan_labExpert' => 'nullable|string',
            'radio_foto' => 'nullable|string',
            'catatan_radFoto' => 'nullable|string',
            'radio_CT' => 'nullable|string',
            'catatan_radCT' => 'nullable|string',
            'konsultasi' => 'nullable|string',
            'catatan_konsul' => 'nullable|string',
            'ases_DPJP' => 'nullable|string',
            'catatan_asesDPJP' => 'nullable|string',
            'ases_nonDPJP' => 'nullable|string',
            'catatan_asesNonDPJP' => 'nullable|string',
            'ases_PPJ' => 'nullable|string',
            'catatan_asesPPJ' => 'nullable|string',
            'ases_gizi' => 'nullable|string',
            'catatan_asesGizi' => 'nullable|string',
            'ases_resep' => 'nullable|string',
            'catatan_asesResep' => 'nullable|string',
            'ases_obat' => 'nullable|string',
            'diagnosa_medis' => 'nullable|string',
            'catatan_diagTBParu' => 'nullable|string',
            'diagnosa_diare' => 'nullable|string',
            'catatan_diagDiare' => 'nullable|string',
            'diagnosa_cairan' => 'nullable|string',
            'diagnosa_elektrolit' => 'nullable|string',
            'diagnosa_nutrisi' => 'nullable|string',
            'diagnosa_hipertermia' => 'nullable|string',
            'diagnosa_akut' => 'nullable|string',
            'diagnosa_kulit' => 'nullable|string',
            'diagnosa_NI3' => 'nullable|string',
            'catatan_diagGiziNI3' => 'nullable|string',
            'diagnosa_NI5' => 'nullable|string',
            'diagnosa_NI2' => 'nullable|string',
            'displan_edukasi' => 'nullable|string',
            'catatan_disPlanEdukasi' => 'nullable|string',
            'displan_rumah' => 'nullable|string',
            'displan_hygenie' => 'nullable|string',
            'displan_sehat' => 'nullable|string',
            'edukasi_diagnosis' => 'nullable|string',
            'catatan_emedDiag' => 'nullable|string',
            'edukasi_terapi' => 'nullable|string',
            'edukasi_consent' => 'nullable|string',
            'edukasi_gizi' => 'nullable|string',
            'catatan_egiz' => 'nullable|string',
            'edukasi_hygenie' => 'nullable|string',
            'catatan_ekepHygenie' => 'nullable|string',
            'edukasi_kebersihan' => 'nullable|string',
            'edukasi_perianal' => 'nullable|string',
            'edukasi_info' => 'nullable|string',
            'catatan_efarmInf' => 'nullable|string',
            'edukasi_konseling' => 'nullable|string',
            'lembar_edukasi' => 'nullable|string',
            'catatan_lemEdTer' => 'nullable|string',
            'catatan_injeksi' => 'nullable|string',
            'injeksi_levifloksasin' => 'nullable|string',
            'injeksi_streptomisin' => 'nullable|string',
            'injeksi_transenamat' => 'nullable|string',
            'injeksi_kristaloid' => 'nullable|string',
            'catatan_infusKristaloid' => 'nullable|string',
            'oral_rifampicin' => 'nullable|string',
            'catatan_oralRifampicin' => 'nullable|string',
            'oral_INH' => 'nullable|string',
            'catatan_oralINH' => 'nullable|string',
            'oral_pirazinamide' => 'nullable|string',
            'catatan_oralPirazinamide' => 'nullable|string',
            'oral_etambutol' => 'nullable|string',
            'catatan_oralEtambutol' => 'nullable|string',
            'oral_ambroksol_A' => 'nullable|string',
            'catatan_oralAmbroksol_A' => 'nullable|string',
            'oral_salbutamol_A' => 'nullable|string',
            'catatan_oralSalbutamol_A' => 'nullable|string',
            'oral_PCT_A' => 'nullable|string',
            'catatan_oralPCT_A' => 'nullable|string',
            'oral_ranitidin_A' => 'nullable|string',
            'catatan_oralRanitidin_A' => 'nullable|string',
            'oral_ambroksol_B' => 'nullable|string',
            'catatan_oralAmbroksol_B' => 'nullable|string',
            'oral_salbutamol_B' => 'nullable|string',
            'catatan_oralSalbutamol_B' => 'nullable|string',
            'oral_PCT_B' => 'nullable|string',
            'catatan_oralPCT_B' => 'nullable|string',
            'oral_ranitidin_B' => 'nullable|string',
            'catatan_oralRanitidin_B' => 'nullable|string',
            'intervensi_medika' => 'nullable|string',
            'catatan_tatmedMedika' => 'nullable|string',
            'intervensi_elektrolit' => 'nullable|string',
            'catatan_tatkepElektrolit' => 'nullable|string',
            'intervensi_nyeri' => 'nullable|string',
            'intervensi_diare' => 'nullable|string',
            'intervensi_nutrisi' => 'nullable|string',
            'intervensi_perianal' => 'nullable|string',
            'intervensi_ADL' => 'nullable|string',
            'intervensi_infus' => 'nullable|string',
            'intervensi_obat' => 'nullable|string',
            'intervensi_gizi' => 'nullable|string',
            'catatan_tatgizi' => 'nullable|string',
            'intervensi_dpjp' => 'nullable|string',
            'catatan_tatfarmDPJP' => 'nullable|string',
            'monev_dpjp' => 'nullable|string',
            'catatan_monevDPJP' => 'nullable|string',
            'monev_vital' => 'nullable|string',
            'catatan_monevkepVital' => 'nullable|string',
            'monev_cairan' => 'nullable|string',
            'monev_diare' => 'nullable|string',
            'monev_rehidrasi' => 'nullable|string',
            'monev_perianal' => 'nullable|string',
            'monev_makanan' => 'nullable|string',
            'catatan_monevgiziMakanan' => 'nullable|string',
            'monev_antropometri' => 'nullable|string',
            'catatan_monevgiziAntropometri' => 'nullable|string',
            'monev_biokimia' => 'nullable|string',
            'catatan_monevgiziBiokimia' => 'nullable|string',
            'monev_fisik' => 'nullable|string',
            'catatan_monevgiziFisik' => 'nullable|string',
            'monev_efektiv' => 'nullable|string',
            'catatan_monevfarmEfektiv' => 'nullable|string',
            'monev_interaksi' => 'nullable|string',
            'monev_efek' => 'nullable|string',
            'mob_medis' => 'nullable|string',
            'catatan_mobmed' => 'nullable|string',
            'mob_keperawatan' => 'nullable|string',
            'mob_fisio' => 'nullable|string',
            'hasil_batuk' => 'nullable|string',
            'catatan_hasmedBatuk' => 'nullable|string',
            'hasil_demam' => 'nullable|string',
            'catatan_hasmedDemam' => 'nullable|string',
            'hasil_vital' => 'nullable|string',
            'catatan_hasmedVital' => 'nullable|string',
            'hasil_seimbang' => 'nullable|string',
            'catatan_hasmedSeimbang' => 'nullable|string',
            'hasil_perianal' => 'nullable|string',
            'catatan_haskepPerianal' => 'nullable|string',
            'hasil_asupan' => 'nullable|string',
            'catatan_hasgiziAsupan' => 'nullable|string',
            'hasil_status' => 'nullable|string',
            'hasil_terapi' => 'nullable|string',
            'catatan_hasgiziTerapi' => 'nullable|string',
            'hasil_rasional' => 'nullable|string',
            'pulang_umum' => 'nullable|string',
            'catatan_pulangUmum' => 'nullable|string',
            'pulang_khusus' => 'nullable|string',
            'rencana_resume' => 'nullable|string',
            'catatan_rencanaResume' => 'nullable|string',
            'rencana_penjelasan' => 'nullable|string',
            'rencana_surat' => 'nullable|string',
            'tanggal_laporan' => 'nullable|string',
            'ttd_dokter' => 'nullable|string',
            'ttd_perawat' => 'nullable|string',
            'nama_dokter' => 'nullable|string',
            'nama_perawat' => 'nullable|string',
        ]);

        $validatedData = $validator->validated();

        // dd($validator);

        // Hasil

        Tbp::create($validatedData);

        return redirect('/tbp')->with('success', 'Data added successfully!');
    }

    public function modify($cmd, $id)
    {
        $data = Tbp::findOrFail($id);

        $kode_icd = explode(', ', $data->kode_icd);

        $arr_kode_icd = [];

        foreach ($kode_icd as $item) {
            list($key, $value) = explode(':', $item);
            $arr_kode_icd[trim($key)] = trim($value);
        }

        $tindakan = explode(', ', $data->tindakan);

        $arr_tindakan = [];

        foreach ($tindakan as $item) {
            list($key, $value) = explode(':', $item);
            $arr_tindakan[trim($key)] = trim($value);
        }

        $columns = [
            "hari_penyakit",
            "asesment_igd",
            "asesment_spesialis",
            "asesment_perawat",
            "asesment_kondisi",
            "lab_hb",
            "lab_SGOT",
            "lab_langsung",
            "lab_kultur",
            "lab_expert",
            "radio_foto",
            "radio_CT",
            "konsultasi",
            "ases_DPJP",
            "ases_nonDPJP",
            "ases_PPJ",
            "ases_gizi",
            "ases_resep",
            "ases_obat",
            "diagnosa_medis",
            "diagnosa_diare",
            "diagnosa_cairan",
            "diagnosa_elektrolit",
            "diagnosa_nutrisi",
            "diagnosa_hipertermia",
            "diagnosa_akut",
            "diagnosa_kulit",
            "diagnosa_NI3",
            "diagnosa_NI5",
            "diagnosa_NI2",
            "displan_edukasi",
            "displan_rumah",
            "displan_hygenie",
            "displan_sehat",
            "edukasi_diagnosis",
            "edukasi_terapi",
            "edukasi_consent",
            "edukasi_gizi",
            "edukasi_hygenie",
            "edukasi_kebersihan",
            "edukasi_perianal",
            "edukasi_info",
            "edukasi_konseling",
            "lembar_edukasi",
            "injeksi_levifloksasin",
            "injeksi_streptomisin",
            "injeksi_transenamat",
            "injeksi_kristaloid",
            "oral_rifampicin",
            "oral_INH",
            "oral_pirazinamide",
            "oral_etambutol",
            "oral_ambroksol_A",
            "oral_salbutamol_A",
            "oral_PCT_A",
            "oral_ranitidin_A",
            "oral_ambroksol_B",
            "oral_salbutamol_B",
            "oral_PCT_B",
            "oral_ranitidin_B",
            "intervensi_medika",
            "intervensi_elektrolit",
            "intervensi_nyeri",
            "intervensi_diare",
            "intervensi_nutrisi",
            "intervensi_perianal",
            "intervensi_ADL",
            "intervensi_infus",
            "intervensi_obat",
            "intervensi_gizi",
            "intervensi_dpjp",
            "monev_dpjp",
            "monev_vital",
            "monev_cairan",
            "monev_diare",
            "monev_rehidrasi",
            "monev_perianal",
            "monev_makanan",
            "monev_antropometri",
            "monev_biokimia",
            "monev_fisik",
            "monev_efektiv",
            "monev_interaksi",
            "monev_efek",
            "mob_medis",
            "mob_keperawatan",
            "mob_fisio",
            "hasil_batuk",
            "hasil_demam",
            "hasil_vital",
            "hasil_seimbang",
            "hasil_perianal",
            "hasil_asupan",
            "hasil_status",
            "hasil_terapi",
            "hasil_rasional",
            "pulang_umum",
            "pulang_khusus",
            "rencana_resume",
            "rencana_penjelasan",
            "rencana_surat",
        ];

        foreach ($columns as $column) {
            $data[$column] = explode(', ', $data->$column);
        }

        // dd($data->hari_penyakit);

        if ($cmd === 'show') {
            $title = 'Displaying CP TB Paru';

            return view('pages.tbp.show', compact('data', 'arr_kode_icd', 'arr_tindakan', 'cmd', 'title'));
        } else if ($cmd === 'edit') {
            $title = 'Editing CP TB Paru';

            return view('pages.tbp.edit', compact('data', 'arr_kode_icd', 'arr_tindakan', 'cmd', 'title'));
        } else {
            abort(404);
        }
    }

    public function update(Request $request, $id)
    {

        // dd($request);

        // Array yang berisi nama kolom dan nilai default
        $columns = [
            "hari_penyakit",
            "asesment_igd",
            "asesment_spesialis",
            "asesment_perawat",
            "asesment_kondisi",
            "lab_hb",
            "lab_SGOT",
            "lab_langsung",
            "lab_kultur",
            "lab_expert",
            "radio_foto",
            "radio_CT",
            "konsultasi",
            "ases_DPJP",
            "ases_nonDPJP",
            "ases_PPJ",
            "ases_gizi",
            "ases_resep",
            "ases_obat",
            "diagnosa_medis",
            "diagnosa_diare",
            "diagnosa_cairan",
            "diagnosa_elektrolit",
            "diagnosa_nutrisi",
            "diagnosa_hipertermia",
            "diagnosa_akut",
            "diagnosa_kulit",
            "diagnosa_NI3",
            "diagnosa_NI5",
            "diagnosa_NI2",
            "displan_edukasi",
            "displan_rumah",
            "displan_hygenie",
            "displan_sehat",
            "edukasi_diagnosis",
            "edukasi_terapi",
            "edukasi_consent",
            "edukasi_gizi",
            "edukasi_hygenie",
            "edukasi_kebersihan",
            "edukasi_perianal",
            "edukasi_info",
            "edukasi_konseling",
            "lembar_edukasi",
            "injeksi_levifloksasin",
            "injeksi_streptomisin",
            "injeksi_transenamat",
            "injeksi_kristaloid",
            "oral_rifampicin",
            "oral_INH",
            "oral_pirazinamide",
            "oral_etambutol",
            "oral_ambroksol_A",
            "oral_salbutamol_A",
            "oral_PCT_A",
            "oral_ranitidin_A",
            "oral_ambroksol_B",
            "oral_salbutamol_B",
            "oral_PCT_B",
            "oral_ranitidin_B",
            "intervensi_medika",
            "intervensi_elektrolit",
            "intervensi_nyeri",
            "intervensi_diare",
            "intervensi_nutrisi",
            "intervensi_perianal",
            "intervensi_ADL",
            "intervensi_infus",
            "intervensi_obat",
            "intervensi_gizi",
            "intervensi_dpjp",
            "monev_dpjp",
            "monev_vital",
            "monev_cairan",
            "monev_diare",
            "monev_rehidrasi",
            "monev_perianal",
            "monev_makanan",
            "monev_antropometri",
            "monev_biokimia",
            "monev_fisik",
            "monev_efektiv",
            "monev_interaksi",
            "monev_efek",
            "mob_medis",
            "mob_keperawatan",
            "mob_fisio",
            "hasil_batuk",
            "hasil_demam",
            "hasil_vital",
            "hasil_seimbang",
            "hasil_perianal",
            "hasil_asupan",
            "hasil_status",
            "hasil_terapi",
            "hasil_rasional",
            "pulang_umum",
            "pulang_khusus",
            "rencana_resume",
            "rencana_penjelasan",
            "rencana_surat",
        ];

        // Inisialisasi string kosong untuk setiap tabel
        $tableValues = [];

        // Loop untuk setiap kolom
        foreach ($columns as $column) {
            // Ambil nilai dari request atau gunakan nilai default jika tidak tersedia
            $columnValues = $request->$column ?? []; // Default value []

            // Periksa apakah $columnValues tidak kosong
            if (!empty($columnValues)) {
                // Inisialisasi string kosong untuk setiap kolom
                $columnString = '';

                // Loop untuk setiap nilai dalam kolom
                foreach ($columnValues as $index => $value) {
                    // Tambahkan index dan nilai ke dalam string
                    $columnString .= ($index + 1) . ', ';
                }

                // Hapus koma terakhir dari string
                $columnString = rtrim($columnString, ', ');

                // Tambahkan string kolom ke dalam array tabel
                $tableValues[$column] = $columnString;
            } else {
                $tableValues[$column] = null;
            }
        }

        $stringKodeICD = '';

        for ($i = 0; $i < 6; $i++) {
            if ($request->has('kode_icd') && isset($request->kode_icd[$i])) {
                $stringKodeICD .= ($i + 1) . ':' . ($request->kode_icd[$i] ?? '-') . ', ';
            }
        }

        // Menghapus koma dan spasi ekstra di akhir string
        $stringKodeICD = rtrim($stringKodeICD, ', ');

        // Menyimpan dalam variabel
        $kodeICDResult = $stringKodeICD;

        if ($request->has('kode_icd')) {
            $request->merge(['kode_icd' => $kodeICDResult]);
        }

        $stringTindakan = '';

        for ($i = 0; $i < 2; $i++) {
            if ($request->has('tindakan') && isset($request->tindakan[$i])) {
                $stringTindakan .= ($i + 1) . ':' . ($request->tindakan[$i] ?? '-') . ', ';
            }
        }

        // Menghapus koma dan spasi ekstra di akhir string
        $stringTindakan = rtrim($stringTindakan, ', ');

        // Menyimpan dalam variabel
        $tindakanResult = $stringTindakan;

        if ($request->has('tindakan')) {
            $request->merge(['tindakan' => $tindakanResult]);
        }

        foreach ($columns as $data) {
            $request->merge([$data => $tableValues[$data]]);
        }

        $validator = Validator::make($request->all(), [
            'noReg' => 'string',
            'nama' => 'nullable|string',
            'jenis_kelamin' => 'nullable|string',
            'tanggal_lahir' => 'nullable|string',
            'diagnosa' => 'nullable|string',
            'penyakit_utama' => 'nullable|string',
            'penyakit_penyerta' => 'nullable|string',
            'komplikasi' => 'nullable|string',
            'tindakan' => 'nullable|string',
            'berat_badan' => 'nullable|string',
            'tinggi_badan' => 'nullable|string',
            'tanggal_masuk' => 'nullable|string',
            'tanggal_keluar' => 'nullable|string',
            'kode_icd' => 'nullable|string',
            'jam_masuk' => 'nullable|string',
            'jam_keluar' => 'nullable|string',
            'lama_rawat' => 'nullable|string',
            'rencana_rawat' => 'nullable|string',
            'rawat_kelas' => 'nullable|string',
            'rujukan' => 'nullable|string',
            'hari_penyakit' => 'nullable|string',
            'asesment_igd' => 'nullable|string',
            'catatan_asesDokIgd' => 'nullable|string',
            'asesment_spesialis' => 'nullable|string',
            'catatan_asesDokSpe' => 'nullable|string',
            'asesment_perawat' => 'nullable|string',
            'catatan_asesPer' => 'nullable|string',
            'lab_hb' => 'nullable|string',
            'catatan_labHb' => 'nullable|string',
            'lab_SGOT' => 'nullable|string',
            'catatan_labSGOT' => 'nullable|string',
            'lab_langsung' => 'nullable|string',
            'catatan_labBTALangsung' => 'nullable|string',
            'lab_kultur' => 'nullable|string',
            'catatan_labBTAKultur' => 'nullable|string',
            'lab_expert' => 'nullable|string',
            'catatan_labExpert' => 'nullable|string',
            'radio_foto' => 'nullable|string',
            'catatan_radFoto' => 'nullable|string',
            'radio_CT' => 'nullable|string',
            'catatan_radCT' => 'nullable|string',
            'konsultasi' => 'nullable|string',
            'catatan_konsul' => 'nullable|string',
            'ases_DPJP' => 'nullable|string',
            'catatan_asesDPJP' => 'nullable|string',
            'ases_nonDPJP' => 'nullable|string',
            'catatan_asesNonDPJP' => 'nullable|string',
            'ases_PPJ' => 'nullable|string',
            'catatan_asesPPJ' => 'nullable|string',
            'ases_gizi' => 'nullable|string',
            'catatan_asesGizi' => 'nullable|string',
            'ases_resep' => 'nullable|string',
            'catatan_asesResep' => 'nullable|string',
            'ases_obat' => 'nullable|string',
            'diagnosa_medis' => 'nullable|string',
            'catatan_diagTBParu' => 'nullable|string',
            'diagnosa_diare' => 'nullable|string',
            'catatan_diagDiare' => 'nullable|string',
            'diagnosa_cairan' => 'nullable|string',
            'diagnosa_elektrolit' => 'nullable|string',
            'diagnosa_nutrisi' => 'nullable|string',
            'diagnosa_hipertermia' => 'nullable|string',
            'diagnosa_akut' => 'nullable|string',
            'diagnosa_kulit' => 'nullable|string',
            'diagnosa_NI3' => 'nullable|string',
            'catatan_diagGiziNI3' => 'nullable|string',
            'diagnosa_NI5' => 'nullable|string',
            'diagnosa_NI2' => 'nullable|string',
            'displan_edukasi' => 'nullable|string',
            'catatan_disPlanEdukasi' => 'nullable|string',
            'displan_rumah' => 'nullable|string',
            'displan_hygenie' => 'nullable|string',
            'displan_sehat' => 'nullable|string',
            'edukasi_diagnosis' => 'nullable|string',
            'catatan_emedDiag' => 'nullable|string',
            'edukasi_terapi' => 'nullable|string',
            'edukasi_consent' => 'nullable|string',
            'edukasi_gizi' => 'nullable|string',
            'catatan_egiz' => 'nullable|string',
            'edukasi_hygenie' => 'nullable|string',
            'catatan_ekepHygenie' => 'nullable|string',
            'edukasi_kebersihan' => 'nullable|string',
            'edukasi_perianal' => 'nullable|string',
            'edukasi_info' => 'nullable|string',
            'catatan_efarmInf' => 'nullable|string',
            'edukasi_konseling' => 'nullable|string',
            'lembar_edukasi' => 'nullable|string',
            'catatan_lemEdTer' => 'nullable|string',
            'catatan_injeksi' => 'nullable|string',
            'injeksi_levifloksasin' => 'nullable|string',
            'injeksi_streptomisin' => 'nullable|string',
            'injeksi_transenamat' => 'nullable|string',
            'injeksi_kristaloid' => 'nullable|string',
            'catatan_infusKristaloid' => 'nullable|string',
            'oral_rifampicin' => 'nullable|string',
            'catatan_oralRifampicin' => 'nullable|string',
            'oral_INH' => 'nullable|string',
            'catatan_oralINH' => 'nullable|string',
            'oral_pirazinamide' => 'nullable|string',
            'catatan_oralPirazinamide' => 'nullable|string',
            'oral_etambutol' => 'nullable|string',
            'catatan_oralEtambutol' => 'nullable|string',
            'oral_ambroksol_A' => 'nullable|string',
            'catatan_oralAmbroksol_A' => 'nullable|string',
            'oral_salbutamol_A' => 'nullable|string',
            'catatan_oralSalbutamol_A' => 'nullable|string',
            'oral_PCT_A' => 'nullable|string',
            'catatan_oralPCT_A' => 'nullable|string',
            'oral_ranitidin_A' => 'nullable|string',
            'catatan_oralRanitidin_A' => 'nullable|string',
            'oral_ambroksol_B' => 'nullable|string',
            'catatan_oralAmbroksol_B' => 'nullable|string',
            'oral_salbutamol_B' => 'nullable|string',
            'catatan_oralSalbutamol_B' => 'nullable|string',
            'oral_PCT_B' => 'nullable|string',
            'catatan_oralPCT_B' => 'nullable|string',
            'oral_ranitidin_B' => 'nullable|string',
            'catatan_oralRanitidin_B' => 'nullable|string',
            'intervensi_medika' => 'nullable|string',
            'catatan_tatmedMedika' => 'nullable|string',
            'intervensi_elektrolit' => 'nullable|string',
            'catatan_tatkepElektrolit' => 'nullable|string',
            'intervensi_nyeri' => 'nullable|string',
            'intervensi_diare' => 'nullable|string',
            'intervensi_nutrisi' => 'nullable|string',
            'intervensi_perianal' => 'nullable|string',
            'intervensi_ADL' => 'nullable|string',
            'intervensi_infus' => 'nullable|string',
            'intervensi_obat' => 'nullable|string',
            'intervensi_gizi' => 'nullable|string',
            'catatan_tatgizi' => 'nullable|string',
            'intervensi_dpjp' => 'nullable|string',
            'catatan_tatfarmDPJP' => 'nullable|string',
            'monev_dpjp' => 'nullable|string',
            'catatan_monevDPJP' => 'nullable|string',
            'monev_vital' => 'nullable|string',
            'catatan_monevkepVital' => 'nullable|string',
            'monev_cairan' => 'nullable|string',
            'monev_diare' => 'nullable|string',
            'monev_rehidrasi' => 'nullable|string',
            'monev_perianal' => 'nullable|string',
            'monev_makanan' => 'nullable|string',
            'catatan_monevgiziMakanan' => 'nullable|string',
            'monev_antropometri' => 'nullable|string',
            'catatan_monevgiziAntropometri' => 'nullable|string',
            'monev_biokimia' => 'nullable|string',
            'catatan_monevgiziBiokimia' => 'nullable|string',
            'monev_fisik' => 'nullable|string',
            'catatan_monevgiziFisik' => 'nullable|string',
            'monev_efektiv' => 'nullable|string',
            'catatan_monevfarmEfektiv' => 'nullable|string',
            'monev_interaksi' => 'nullable|string',
            'monev_efek' => 'nullable|string',
            'mob_medis' => 'nullable|string',
            'catatan_mobmed' => 'nullable|string',
            'mob_keperawatan' => 'nullable|string',
            'mob_fisio' => 'nullable|string',
            'hasil_batuk' => 'nullable|string',
            'catatan_hasmedBatuk' => 'nullable|string',
            'hasil_demam' => 'nullable|string',
            'catatan_hasmedDemam' => 'nullable|string',
            'hasil_vital' => 'nullable|string',
            'catatan_hasmedVital' => 'nullable|string',
            'hasil_seimbang' => 'nullable|string',
            'catatan_hasmedSeimbang' => 'nullable|string',
            'hasil_perianal' => 'nullable|string',
            'catatan_haskepPerianal' => 'nullable|string',
            'hasil_asupan' => 'nullable|string',
            'catatan_hasgiziAsupan' => 'nullable|string',
            'hasil_status' => 'nullable|string',
            'hasil_terapi' => 'nullable|string',
            'catatan_hasgiziTerapi' => 'nullable|string',
            'hasil_rasional' => 'nullable|string',
            'pulang_umum' => 'nullable|string',
            'catatan_pulangUmum' => 'nullable|string',
            'pulang_khusus' => 'nullable|string',
            'rencana_resume' => 'nullable|string',
            'catatan_rencanaResume' => 'nullable|string',
            'rencana_penjelasan' => 'nullable|string',
            'rencana_surat' => 'nullable|string',
            'tanggal_laporan' => 'nullable|string',
            'ttd_dokter' => 'nullable|string',
            'ttd_perawat' => 'nullable|string',
            'nama_dokter' => 'nullable|string',
            'nama_perawat' => 'nullable|string',
        ]);

        $validatedData = $validator->validated();

        if ($validator->fails()) {
            $errors = implode(', ', $validator->errors()->all());
            return back()->with('error', $errors)->withInput();
        }

        // dd($validator);

        // Hasil

        Tbp::where('id', $id)->update($validatedData);

        return redirect('/tbp')->with('success', 'Data updated successfully!');
    }

    public function delete($id)
    {
        $data = Tbp::findOrFail($id);

        $data->delete();

        return back()->with('success', 'Data deleted sucessfully!');
    }
}
