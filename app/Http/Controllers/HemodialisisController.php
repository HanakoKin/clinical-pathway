<?php

namespace App\Http\Controllers;

use App\Models\Hemodialisis;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class HemodialisisController extends Controller
{
    public function index()
    {
        $title = 'CP Hemodialisis Page';

        $datas = Hemodialisis::orderBy('created_at', 'desc')->get();

        return view('pages.hemodialisis.main', compact('datas', 'title'));
    }

    public function add()
    {
        $title = 'Add CP Hemodialisis';

        $func = 'add';

        return view('pages.hemodialisis.add', compact('func', 'title'));
    }

    public function store(Request $request)
    {

        // dd($request);

        // Array yang berisi nama kolom dan nilai default
        $columns = [
            "hari_penyakit",
            "asesment_igd",
            "asesment_spesialis",
            "asesment_primer",
            "lab_darah",
            "lab_elektrolit",
            "lab_ureum",
            "lab_hcv",
            "lab_pt",
            "lab_magnesium",
            "lab_tibc",
            "lab_pth",
            "radio_foto",
            "var_ekg",
            "var_echo",
            "konsultasi",
            "ases_DPJP",
            "ases_nonDPJP",
            "ases_PPJ",
            "ases_gizi",
            "ases_resep",
            "ases_obat",
            "diagnosa_aki",
            "diagnosa_end",
            "diagnosa_napas",
            "diagnosa_perfusi",
            "diagnosa_hipervolemia",
            "diagnosa_nutrisi",
            "diagnosa_nausea",
            "diagnosa_aktivitas",
            "diagnosa_kulit",
            "diagnosa_jantung",
            "diagnosa_perifer",
            "diagnosa_infeksi",
            "diagnosa_cairan",
            "diagnosa_garam",
            "diagnosa_protein",
            "displan_edukasi",
            "displan_rencana",
            "displan_obat",
            "displan_kontrol",
            "edukasi_diagnosis",
            "edukasi_terapi",
            "edukasi_consent",
            "edukasi_gizi",
            "edukasi_ginjal",
            "edukasi_hemodialisa",
            "edukasi_cdl",
            "edukasi_output",
            "edukasi_dukungan",
            "edukasi_info",
            "edukasi_konseling",
            "lembar_edukasi",
            "tindakan_cartheter",
            "tindakan_nasal",
            "injeksi_kristaloid",
            "inject_antikoagulan",
            "inject_bolus",
            "inject_heparin",
            "inject_eritropoetin",
            "oral_asamFolat",
            "oral_hipertensi",
            "intervensi_medika",
            "intervensi_elektrolit",
            "intervensi_hipertermia",
            "intervensi_infeksi",
            "intervensi_nutrisi",
            "intervensi_ADL",
            "intervensi_infus",
            "intervensi_obat",
            "intervensi_gizi",
            "intervensi_dpjp",
            "monev_dpjp",
            "monev_vital",
            "monev_cairan",
            "monev_nutrisi",
            "monev_nyeri",
            "monev_infeksi",
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
            "hasil_lab",
            "hasil_vital",
            "hasil_seimbang",
            "hasil_infeksi",
            "hasil_asupan",
            "hasil_status",
            "hasil_terapi",
            "hasil_rasional",
            "pulang_umum",
            "pulang_khusus",
            "rencana_resume",
            "rencana_penjelasan",
            "rencana_surat",
            "varian_rencana",
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
            "noReg" => "string",
            "nama" => "nullable|string",
            "jenis_kelamin" => "nullable|string",
            "tanggal_lahir" => "nullable|string",
            "diagnosa" => "nullable|string",
            "penyakit_utama" => "nullable|string",
            "penyakit_penyerta" => "nullable|string",
            "komplikasi" => "nullable|string",
            "tindakan" => "nullable|string",
            "berat_badan" => "nullable|string",
            "tinggi_badan" => "nullable|string",
            "tanggal_masuk" => "nullable|string",
            "tanggal_keluar" => "nullable|string",
            "kode_icd" => "nullable|string",
            "jam_masuk" => "nullable|string",
            "jam_keluar" => "nullable|string",
            "lama_rawat" => "nullable|string",
            "rencana_rawat" => "nullable|string",
            "rawat_kelas" => "nullable|string",
            "rujukan" => "nullable|string",
            "hari_penyakit" => 'nullable|string',
            "asesment_igd" => 'nullable|string',
            "asesment_spesialis" => 'nullable|string',
            "asesment_primer" => 'nullable|string',
            "lab_darah" => 'nullable|string',
            "lab_elektrolit" => 'nullable|string',
            "lab_ureum" => 'nullable|string',
            "lab_hcv" => 'nullable|string',
            "lab_pt" => 'nullable|string',
            "lab_magnesium" => 'nullable|string',
            "lab_tibc" => 'nullable|string',
            "lab_pth" => 'nullable|string',
            "radio_foto" => 'nullable|string',
            "var_ekg" => 'nullable|string',
            "var_echo" => 'nullable|string',
            "konsultasi" => 'nullable|string',
            "ases_DPJP" => 'nullable|string',
            "ases_nonDPJP" => 'nullable|string',
            "ases_PPJ" => 'nullable|string',
            "ases_gizi" => 'nullable|string',
            "ases_resep" => 'nullable|string',
            "ases_obat" => 'nullable|string',
            "diagnosa_aki" => 'nullable|string',
            "diagnosa_end" => 'nullable|string',
            "diagnosa_napas" => 'nullable|string',
            "diagnosa_perfusi" => 'nullable|string',
            "diagnosa_hipervolemia" => 'nullable|string',
            "diagnosa_nutrisi" => 'nullable|string',
            "diagnosa_nausea" => 'nullable|string',
            "diagnosa_aktivitas" => 'nullable|string',
            "diagnosa_kulit" => 'nullable|string',
            "diagnosa_jantung" => 'nullable|string',
            "diagnosa_perifer" => 'nullable|string',
            "diagnosa_infeksi" => 'nullable|string',
            "diagnosa_cairan" => 'nullable|string',
            "diagnosa_garam" => 'nullable|string',
            "diagnosa_protein" => 'nullable|string',
            "displan_edukasi" => 'nullable|string',
            "displan_rencana" => 'nullable|string',
            "displan_obat" => 'nullable|string',
            "displan_kontrol" => 'nullable|string',
            "edukasi_diagnosis" => 'nullable|string',
            "edukasi_terapi" => 'nullable|string',
            "edukasi_consent" => 'nullable|string',
            "edukasi_gizi" => 'nullable|string',
            "edukasi_ginjal" => 'nullable|string',
            "edukasi_hemodialisa" => 'nullable|string',
            "edukasi_cdl" => 'nullable|string',
            "edukasi_output" => 'nullable|string',
            "edukasi_dukungan" => 'nullable|string',
            "edukasi_info" => 'nullable|string',
            "edukasi_konseling" => 'nullable|string',
            "lembar_edukasi" => 'nullable|string',
            "tindakan_cartheter" => 'nullable|string',
            "tindakan_nasal" => 'nullable|string',
            "injeksi_kristaloid" => 'nullable|string',
            "inject_antikoagulan" => 'nullable|string',
            "inject_bolus" => 'nullable|string',
            "inject_heparin" => 'nullable|string',
            "inject_eritropoetin" => 'nullable|string',
            "oral_asamFolat" => 'nullable|string',
            "oral_hipertensi" => 'nullable|string',
            "intervensi_medika" => 'nullable|string',
            "intervensi_elektrolit" => 'nullable|string',
            "intervensi_hipertermia" => 'nullable|string',
            "intervensi_infeksi" => 'nullable|string',
            "intervensi_nutrisi" => 'nullable|string',
            "intervensi_ADL" => 'nullable|string',
            "intervensi_infus" => 'nullable|string',
            "intervensi_obat" => 'nullable|string',
            "intervensi_gizi" => 'nullable|string',
            "intervensi_dpjp" => 'nullable|string',
            "monev_dpjp" => 'nullable|string',
            "monev_vital" => 'nullable|string',
            "monev_cairan" => 'nullable|string',
            "monev_nutrisi" => 'nullable|string',
            "monev_nyeri" => 'nullable|string',
            "monev_infeksi" => 'nullable|string',
            "monev_makanan" => 'nullable|string',
            "monev_antropometri" => 'nullable|string',
            "monev_biokimia" => 'nullable|string',
            "monev_fisik" => 'nullable|string',
            "monev_efektiv" => 'nullable|string',
            "monev_interaksi" => 'nullable|string',
            "monev_efek" => 'nullable|string',
            "mob_medis" => 'nullable|string',
            "mob_keperawatan" => 'nullable|string',
            "mob_fisio" => 'nullable|string',
            "hasil_batuk" => 'nullable|string',
            "hasil_lab" => 'nullable|string',
            "hasil_vital" => 'nullable|string',
            "hasil_seimbang" => 'nullable|string',
            "hasil_infeksi" => 'nullable|string',
            "hasil_asupan" => 'nullable|string',
            "hasil_status" => 'nullable|string',
            "hasil_terapi" => 'nullable|string',
            "hasil_rasional" => 'nullable|string',
            "pulang_umum" => 'nullable|string',
            "pulang_khusus" => 'nullable|string',
            "rencana_resume" => 'nullable|string',
            "rencana_penjelasan" => 'nullable|string',
            "rencana_surat" => 'nullable|string',
            "varian_rencana" => 'nullable|string',
            "tanggal_laporan" => "nullable|string",
            "nama_dokter" => "nullable|string",
            "ttd_dokter" => "nullable|string",
            "nama_perawat" => "nullable|string",
            "ttd_perawat" => "nullable|string",
        ]);

        $validatedData = $validator->validated();

        // dd($validator);

        // Hasil

        Hemodialisis::create($validatedData);

        return redirect('/hemodialisis')->with('success', 'Data added successfully!');
    }

    public function modify($cmd, $id)
    {
        $data = Hemodialisis::findOrFail($id);

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
            "asesment_primer",
            "lab_darah",
            "lab_elektrolit",
            "lab_ureum",
            "lab_hcv",
            "lab_pt",
            "lab_magnesium",
            "lab_tibc",
            "lab_pth",
            "radio_foto",
            "var_ekg",
            "var_echo",
            "konsultasi",
            "ases_DPJP",
            "ases_nonDPJP",
            "ases_PPJ",
            "ases_gizi",
            "ases_resep",
            "ases_obat",
            "diagnosa_aki",
            "diagnosa_end",
            "diagnosa_napas",
            "diagnosa_perfusi",
            "diagnosa_hipervolemia",
            "diagnosa_nutrisi",
            "diagnosa_nausea",
            "diagnosa_aktivitas",
            "diagnosa_kulit",
            "diagnosa_jantung",
            "diagnosa_perifer",
            "diagnosa_infeksi",
            "diagnosa_cairan",
            "diagnosa_garam",
            "diagnosa_protein",
            "displan_edukasi",
            "displan_rencana",
            "displan_obat",
            "displan_kontrol",
            "edukasi_diagnosis",
            "edukasi_terapi",
            "edukasi_consent",
            "edukasi_gizi",
            "edukasi_ginjal",
            "edukasi_hemodialisa",
            "edukasi_cdl",
            "edukasi_output",
            "edukasi_dukungan",
            "edukasi_info",
            "edukasi_konseling",
            "lembar_edukasi",
            "tindakan_cartheter",
            "tindakan_nasal",
            "injeksi_kristaloid",
            "inject_antikoagulan",
            "inject_bolus",
            "inject_heparin",
            "inject_eritropoetin",
            "oral_asamFolat",
            "oral_hipertensi",
            "intervensi_medika",
            "intervensi_elektrolit",
            "intervensi_hipertermia",
            "intervensi_infeksi",
            "intervensi_nutrisi",
            "intervensi_ADL",
            "intervensi_infus",
            "intervensi_obat",
            "intervensi_gizi",
            "intervensi_dpjp",
            "monev_dpjp",
            "monev_vital",
            "monev_cairan",
            "monev_nutrisi",
            "monev_nyeri",
            "monev_infeksi",
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
            "hasil_lab",
            "hasil_vital",
            "hasil_seimbang",
            "hasil_infeksi",
            "hasil_asupan",
            "hasil_status",
            "hasil_terapi",
            "hasil_rasional",
            "pulang_umum",
            "pulang_khusus",
            "rencana_resume",
            "rencana_penjelasan",
            "rencana_surat",
            "varian_rencana",
        ];

        foreach ($columns as $column) {
            $data[$column] = explode(', ', $data->$column);
        }

        // dd($data->hari_penyakit);

        if ($cmd === 'show') {
            $title = 'Displaying CP Hemodialisis';

            return view('pages.hemodialisis.show', compact('data', 'arr_kode_icd', 'arr_tindakan', 'cmd', 'title'));
        } else if ($cmd === 'edit') {
            $title = 'Editing CP Hemodialisis';

            return view('pages.hemodialisis.edit', compact('data', 'arr_kode_icd', 'arr_tindakan', 'cmd', 'title'));
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
            "asesment_primer",
            "lab_darah",
            "lab_elektrolit",
            "lab_ureum",
            "lab_hcv",
            "lab_pt",
            "lab_magnesium",
            "lab_tibc",
            "lab_pth",
            "radio_foto",
            "var_ekg",
            "var_echo",
            "konsultasi",
            "ases_DPJP",
            "ases_nonDPJP",
            "ases_PPJ",
            "ases_gizi",
            "ases_resep",
            "ases_obat",
            "diagnosa_aki",
            "diagnosa_end",
            "diagnosa_napas",
            "diagnosa_perfusi",
            "diagnosa_hipervolemia",
            "diagnosa_nutrisi",
            "diagnosa_nausea",
            "diagnosa_aktivitas",
            "diagnosa_kulit",
            "diagnosa_jantung",
            "diagnosa_perifer",
            "diagnosa_infeksi",
            "diagnosa_cairan",
            "diagnosa_garam",
            "diagnosa_protein",
            "displan_edukasi",
            "displan_rencana",
            "displan_obat",
            "displan_kontrol",
            "edukasi_diagnosis",
            "edukasi_terapi",
            "edukasi_consent",
            "edukasi_gizi",
            "edukasi_ginjal",
            "edukasi_hemodialisa",
            "edukasi_cdl",
            "edukasi_output",
            "edukasi_dukungan",
            "edukasi_info",
            "edukasi_konseling",
            "lembar_edukasi",
            "tindakan_cartheter",
            "tindakan_nasal",
            "injeksi_kristaloid",
            "inject_antikoagulan",
            "inject_bolus",
            "inject_heparin",
            "inject_eritropoetin",
            "oral_asamFolat",
            "oral_hipertensi",
            "intervensi_medika",
            "intervensi_elektrolit",
            "intervensi_hipertermia",
            "intervensi_infeksi",
            "intervensi_nutrisi",
            "intervensi_ADL",
            "intervensi_infus",
            "intervensi_obat",
            "intervensi_gizi",
            "intervensi_dpjp",
            "monev_dpjp",
            "monev_vital",
            "monev_cairan",
            "monev_nutrisi",
            "monev_nyeri",
            "monev_infeksi",
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
            "hasil_lab",
            "hasil_vital",
            "hasil_seimbang",
            "hasil_infeksi",
            "hasil_asupan",
            "hasil_status",
            "hasil_terapi",
            "hasil_rasional",
            "pulang_umum",
            "pulang_khusus",
            "rencana_resume",
            "rencana_penjelasan",
            "rencana_surat",
            "varian_rencana",
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
            "noReg" => "string",
            "nama" => "nullable|string",
            "jenis_kelamin" => "nullable|string",
            "tanggal_lahir" => "nullable|string",
            "diagnosa" => "nullable|string",
            "penyakit_utama" => "nullable|string",
            "penyakit_penyerta" => "nullable|string",
            "komplikasi" => "nullable|string",
            "tindakan" => "nullable|string",
            "berat_badan" => "nullable|string",
            "tinggi_badan" => "nullable|string",
            "tanggal_masuk" => "nullable|string",
            "tanggal_keluar" => "nullable|string",
            "kode_icd" => "nullable|string",
            "jam_masuk" => "nullable|string",
            "jam_keluar" => "nullable|string",
            "lama_rawat" => "nullable|string",
            "rencana_rawat" => "nullable|string",
            "rawat_kelas" => "nullable|string",
            "rujukan" => "nullable|string",
            "hari_penyakit" => 'nullable|string',
            "asesment_igd" => 'nullable|string',
            "asesment_spesialis" => 'nullable|string',
            "asesment_primer" => 'nullable|string',
            "lab_darah" => 'nullable|string',
            "lab_elektrolit" => 'nullable|string',
            "lab_ureum" => 'nullable|string',
            "lab_hcv" => 'nullable|string',
            "lab_pt" => 'nullable|string',
            "lab_magnesium" => 'nullable|string',
            "lab_tibc" => 'nullable|string',
            "lab_pth" => 'nullable|string',
            "radio_foto" => 'nullable|string',
            "var_ekg" => 'nullable|string',
            "var_echo" => 'nullable|string',
            "konsultasi" => 'nullable|string',
            "ases_DPJP" => 'nullable|string',
            "ases_nonDPJP" => 'nullable|string',
            "ases_PPJ" => 'nullable|string',
            "ases_gizi" => 'nullable|string',
            "ases_resep" => 'nullable|string',
            "ases_obat" => 'nullable|string',
            "diagnosa_aki" => 'nullable|string',
            "diagnosa_end" => 'nullable|string',
            "diagnosa_napas" => 'nullable|string',
            "diagnosa_perfusi" => 'nullable|string',
            "diagnosa_hipervolemia" => 'nullable|string',
            "diagnosa_nutrisi" => 'nullable|string',
            "diagnosa_nausea" => 'nullable|string',
            "diagnosa_aktivitas" => 'nullable|string',
            "diagnosa_kulit" => 'nullable|string',
            "diagnosa_jantung" => 'nullable|string',
            "diagnosa_perifer" => 'nullable|string',
            "diagnosa_infeksi" => 'nullable|string',
            "diagnosa_cairan" => 'nullable|string',
            "diagnosa_garam" => 'nullable|string',
            "diagnosa_protein" => 'nullable|string',
            "displan_edukasi" => 'nullable|string',
            "displan_rencana" => 'nullable|string',
            "displan_obat" => 'nullable|string',
            "displan_kontrol" => 'nullable|string',
            "edukasi_diagnosis" => 'nullable|string',
            "edukasi_terapi" => 'nullable|string',
            "edukasi_consent" => 'nullable|string',
            "edukasi_gizi" => 'nullable|string',
            "edukasi_ginjal" => 'nullable|string',
            "edukasi_hemodialisa" => 'nullable|string',
            "edukasi_cdl" => 'nullable|string',
            "edukasi_output" => 'nullable|string',
            "edukasi_dukungan" => 'nullable|string',
            "edukasi_info" => 'nullable|string',
            "edukasi_konseling" => 'nullable|string',
            "lembar_edukasi" => 'nullable|string',
            "tindakan_cartheter" => 'nullable|string',
            "tindakan_nasal" => 'nullable|string',
            "injeksi_kristaloid" => 'nullable|string',
            "inject_antikoagulan" => 'nullable|string',
            "inject_bolus" => 'nullable|string',
            "inject_heparin" => 'nullable|string',
            "inject_eritropoetin" => 'nullable|string',
            "oral_asamFolat" => 'nullable|string',
            "oral_hipertensi" => 'nullable|string',
            "intervensi_medika" => 'nullable|string',
            "intervensi_elektrolit" => 'nullable|string',
            "intervensi_hipertermia" => 'nullable|string',
            "intervensi_infeksi" => 'nullable|string',
            "intervensi_nutrisi" => 'nullable|string',
            "intervensi_ADL" => 'nullable|string',
            "intervensi_infus" => 'nullable|string',
            "intervensi_obat" => 'nullable|string',
            "intervensi_gizi" => 'nullable|string',
            "intervensi_dpjp" => 'nullable|string',
            "monev_dpjp" => 'nullable|string',
            "monev_vital" => 'nullable|string',
            "monev_cairan" => 'nullable|string',
            "monev_nutrisi" => 'nullable|string',
            "monev_nyeri" => 'nullable|string',
            "monev_infeksi" => 'nullable|string',
            "monev_makanan" => 'nullable|string',
            "monev_antropometri" => 'nullable|string',
            "monev_biokimia" => 'nullable|string',
            "monev_fisik" => 'nullable|string',
            "monev_efektiv" => 'nullable|string',
            "monev_interaksi" => 'nullable|string',
            "monev_efek" => 'nullable|string',
            "mob_medis" => 'nullable|string',
            "mob_keperawatan" => 'nullable|string',
            "mob_fisio" => 'nullable|string',
            "hasil_batuk" => 'nullable|string',
            "hasil_lab" => 'nullable|string',
            "hasil_vital" => 'nullable|string',
            "hasil_seimbang" => 'nullable|string',
            "hasil_infeksi" => 'nullable|string',
            "hasil_asupan" => 'nullable|string',
            "hasil_status" => 'nullable|string',
            "hasil_terapi" => 'nullable|string',
            "hasil_rasional" => 'nullable|string',
            "pulang_umum" => 'nullable|string',
            "pulang_khusus" => 'nullable|string',
            "rencana_resume" => 'nullable|string',
            "rencana_penjelasan" => 'nullable|string',
            "rencana_surat" => 'nullable|string',
            "varian_rencana" => 'nullable|string',
            "tanggal_laporan" => "nullable|string",
            "nama_dokter" => "nullable|string",
            "ttd_dokter" => "nullable|string",
            "nama_perawat" => "nullable|string",
            "ttd_perawat" => "nullable|string",
        ]);

        $validatedData = $validator->validated();

        if ($validator->fails()) {
            $errors = implode(', ', $validator->errors()->all());
            return back()->with('error', $errors)->withInput();
        }

        // dd($validator);

        // Hasil

        Hemodialisis::where('id', $id)->update($validatedData);

        return redirect('/hemodialisis')->with('success', 'Data updated successfully!');
    }

    public function delete($id)
    {
        $data = Hemodialisis::findOrFail($id);

        $data->delete();

        return back()->with('success', 'Data deleted sucessfully!');
    }
}
