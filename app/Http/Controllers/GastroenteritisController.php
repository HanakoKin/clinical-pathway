<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gastroenteritis;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class GastroenteritisController extends Controller
{
    public function index()
    {
        $title = 'CP Gastroenteritis Pada Dewasa Page';

        $datas = Gastroenteritis::orderBy('created_at', 'desc')->get();

        return view('pages.gastroenteritis.main', compact('datas', 'title'));
    }

    public function add()
    {
        $title = 'Add CP Gastroenteritis Pada Dewasa';

        $func = 'add';

        return view('pages.gastroenteritis.add', compact('func', 'title'));
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
            "lab_hb",
            "lab_tinja",
            "lab_varian",
            "radiologi",
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
            "injeksi_ciprofloxacin",
            "injeksi_ceftriaxon",
            "injeksi_levofloxacin",
            "injeksi_buscopan",
            "injeksi_antimual",
            "injeksi_antipiretik",
            "injeksi_kristaloid",
            "injeksi_koloid",
            "injeksi_varian",
            "oral_metronidazol",
            "oral_kotrimoksazol",
            "oral_eritromisin",
            "oral_klaritromisin",
            "oral_doksisiklin",
            "oral_cefixime",
            "oral_ciprofloxacin",
            "oral_levofloxacin",
            "oral_amoxicillin",
            "oral_antimotilitas",
            "oral_buscopan",
            "oral_ondansentron",
            "oral_parasetamol",
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
            "hasil_dehidrasi",
            "hasil_BAB",
            "hasil_vital",
            "hasil_Seimbang",
            "hasil_perianal",
            "hasil_asupan",
            "hasil_status",
            "hasil_terapi",
            "hasil_rasional",
            "pulang_umum",
            "pulang_khusus",
            "pulang_varian",
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
            "hari_penyakit" => "nullable|string",
            "asesment_igd" => "nullable|string",
            "asesment_spesialis" => "nullable|string",
            "asesment_primer" => "nullable|string",
            "lab_hb" => "nullable|string",
            "lab_tinja" => "nullable|string",
            "lab_varian" => "nullable|string",
            "radiologi" => "nullable|string",
            "konsultasi" => "nullable|string",
            "ases_DPJP" => "nullable|string",
            "ases_nonDPJP" => "nullable|string",
            "ases_PPJ" => "nullable|string",
            "ases_gizi" => "nullable|string",
            "ases_resep" => "nullable|string",
            "ases_obat" => "nullable|string",
            "diagnosa_medis" => "nullable|string",
            "diagnosa_diare" => "nullable|string",
            "diagnosa_cairan" => "nullable|string",
            "diagnosa_elektrolit" => "nullable|string",
            "diagnosa_nutrisi" => "nullable|string",
            "diagnosa_hipertermia" => "nullable|string",
            "diagnosa_akut" => "nullable|string",
            "diagnosa_kulit" => "nullable|string",
            "diagnosa_NI3" => "nullable|string",
            "diagnosa_NI5" => "nullable|string",
            "diagnosa_NI2" => "nullable|string",
            "displan_edukasi" => "nullable|string",
            "displan_rumah" => "nullable|string",
            "displan_hygenie" => "nullable|string",
            "displan_sehat" => "nullable|string",
            "edukasi_diagnosis" => "nullable|string",
            "edukasi_terapi" => "nullable|string",
            "edukasi_consent" => "nullable|string",
            "edukasi_gizi" => "nullable|string",
            "edukasi_hygenie" => "nullable|string",
            "edukasi_kebersihan" => "nullable|string",
            "edukasi_perianal" => "nullable|string",
            "edukasi_info" => "nullable|string",
            "edukasi_konseling" => "nullable|string",
            "lembar_edukasi" => "nullable|string",
            "injeksi_ciprofloxacin" => "nullable|string",
            "injeksi_ceftriaxon" => "nullable|string",
            "injeksi_levofloxacin" => "nullable|string",
            "injeksi_buscopan" => "nullable|string",
            "injeksi_antimual" => "nullable|string",
            "injeksi_antipiretik" => "nullable|string",
            "injeksi_kristaloid" => "nullable|string",
            "injeksi_koloid" => "nullable|string",
            "injeksi_varian" => "nullable|string",
            "oral_metronidazol" => "nullable|string",
            "oral_kotrimoksazol" => "nullable|string",
            "oral_eritromisin" => "nullable|string",
            "oral_klaritromisin" => "nullable|string",
            "oral_doksisiklin" => "nullable|string",
            "oral_cefixime" => "nullable|string",
            "oral_ciprofloxacin" => "nullable|string",
            "oral_levofloxacin" => "nullable|string",
            "oral_amoxicillin" => "nullable|string",
            "oral_antimotilitas" => "nullable|string",
            "oral_buscopan" => "nullable|string",
            "oral_ondansentron" => "nullable|string",
            "oral_parasetamol" => "nullable|string",
            "intervensi_medika" => "nullable|string",
            "intervensi_elektrolit" => "nullable|string",
            "intervensi_nyeri" => "nullable|string",
            "intervensi_diare" => "nullable|string",
            "intervensi_nutrisi" => "nullable|string",
            "intervensi_perianal" => "nullable|string",
            "intervensi_ADL" => "nullable|string",
            "intervensi_infus" => "nullable|string",
            "intervensi_obat" => "nullable|string",
            "intervensi_gizi" => "nullable|string",
            "intervensi_dpjp" => "nullable|string",
            "monev_dpjp" => "nullable|string",
            "monev_vital" => "nullable|string",
            "monev_cairan" => "nullable|string",
            "monev_diare" => "nullable|string",
            "monev_rehidrasi" => "nullable|string",
            "monev_perianal" => "nullable|string",
            "monev_makanan" => "nullable|string",
            "monev_antropometri" => "nullable|string",
            "monev_biokimia" => "nullable|string",
            "monev_fisik" => "nullable|string",
            "monev_efektiv" => "nullable|string",
            "monev_interaksi" => "nullable|string",
            "monev_efek" => "nullable|string",
            "mob_medis" => "nullable|string",
            "mob_keperawatan" => "nullable|string",
            "mob_fisio" => "nullable|string",
            "hasil_dehidrasi" => "nullable|string",
            "hasil_BAB" => "nullable|string",
            "hasil_vital" => "nullable|string",
            "hasil_Seimbang" => "nullable|string",
            "hasil_perianal" => "nullable|string",
            "hasil_asupan" => "nullable|string",
            "hasil_status" => "nullable|string",
            "hasil_terapi" => "nullable|string",
            "hasil_rasional" => "nullable|string",
            "pulang_umum" => "nullable|string",
            "pulang_khusus" => "nullable|string",
            "pulang_varian" => "nullable|string",
            "rencana_resume" => "nullable|string",
            "rencana_penjelasan" => "nullable|string",
            "rencana_surat" => "nullable|string",
            "tanggal_laporan" => "nullable|string",
            "nama_dokter" => "nullable|string",
            "ttd_dokter" => "nullable|string",
            "nama_perawat" => "nullable|string",
            "ttd_perawat" => "nullable|string",
        ]);

        $validatedData = $validator->validated();

        // dd($validator);

        // Hasil

        Gastroenteritis::create($validatedData);

        return redirect('/gastroenteritis')->with('success', 'Data added successfully!');
    }

    public function modify($cmd, $id)
    {
        $data = Gastroenteritis::findOrFail($id);

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
            "lab_hb",
            "lab_tinja",
            "lab_varian",
            "radiologi",
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
            "injeksi_ciprofloxacin",
            "injeksi_ceftriaxon",
            "injeksi_levofloxacin",
            "injeksi_buscopan",
            "injeksi_antimual",
            "injeksi_antipiretik",
            "injeksi_kristaloid",
            "injeksi_koloid",
            "injeksi_varian",
            "oral_metronidazol",
            "oral_kotrimoksazol",
            "oral_eritromisin",
            "oral_klaritromisin",
            "oral_doksisiklin",
            "oral_cefixime",
            "oral_ciprofloxacin",
            "oral_levofloxacin",
            "oral_amoxicillin",
            "oral_antimotilitas",
            "oral_buscopan",
            "oral_ondansentron",
            "oral_parasetamol",
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
            "hasil_dehidrasi",
            "hasil_BAB",
            "hasil_vital",
            "hasil_Seimbang",
            "hasil_perianal",
            "hasil_asupan",
            "hasil_status",
            "hasil_terapi",
            "hasil_rasional",
            "pulang_umum",
            "pulang_khusus",
            "pulang_varian",
            "rencana_resume",
            "rencana_penjelasan",
            "rencana_surat",
        ];

        foreach ($columns as $column) {
            $data[$column] = explode(', ', $data->$column);
        }

        // dd($data->hari_penyakit);

        if ($cmd === 'show') {
            $title = 'Displaying CP Gastroenteritis Pada Dewasa';

            return view('pages.gastroenteritis.show', compact('data', 'arr_kode_icd', 'arr_tindakan', 'cmd', 'title'));
        } else if ($cmd === 'edit') {
            $title = 'Editing CP Gastroenteritis Pada Dewasa';

            return view('pages.gastroenteritis.edit', compact('data', 'arr_kode_icd', 'arr_tindakan', 'cmd', 'title'));
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
            "lab_hb",
            "lab_tinja",
            "lab_varian",
            "radiologi",
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
            "injeksi_ciprofloxacin",
            "injeksi_ceftriaxon",
            "injeksi_levofloxacin",
            "injeksi_buscopan",
            "injeksi_antimual",
            "injeksi_antipiretik",
            "injeksi_kristaloid",
            "injeksi_koloid",
            "injeksi_varian",
            "oral_metronidazol",
            "oral_kotrimoksazol",
            "oral_eritromisin",
            "oral_klaritromisin",
            "oral_doksisiklin",
            "oral_cefixime",
            "oral_ciprofloxacin",
            "oral_levofloxacin",
            "oral_amoxicillin",
            "oral_antimotilitas",
            "oral_buscopan",
            "oral_ondansentron",
            "oral_parasetamol",
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
            "hasil_dehidrasi",
            "hasil_BAB",
            "hasil_vital",
            "hasil_Seimbang",
            "hasil_perianal",
            "hasil_asupan",
            "hasil_status",
            "hasil_terapi",
            "hasil_rasional",
            "pulang_umum",
            "pulang_khusus",
            "pulang_varian",
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
            "hari_penyakit" => "nullable|string",
            "asesment_igd" => "nullable|string",
            "asesment_spesialis" => "nullable|string",
            "asesment_primer" => "nullable|string",
            "lab_hb" => "nullable|string",
            "lab_tinja" => "nullable|string",
            "lab_varian" => "nullable|string",
            "radiologi" => "nullable|string",
            "konsultasi" => "nullable|string",
            "ases_DPJP" => "nullable|string",
            "ases_nonDPJP" => "nullable|string",
            "ases_PPJ" => "nullable|string",
            "ases_gizi" => "nullable|string",
            "ases_resep" => "nullable|string",
            "ases_obat" => "nullable|string",
            "diagnosa_medis" => "nullable|string",
            "diagnosa_diare" => "nullable|string",
            "diagnosa_cairan" => "nullable|string",
            "diagnosa_elektrolit" => "nullable|string",
            "diagnosa_nutrisi" => "nullable|string",
            "diagnosa_hipertermia" => "nullable|string",
            "diagnosa_akut" => "nullable|string",
            "diagnosa_kulit" => "nullable|string",
            "diagnosa_NI3" => "nullable|string",
            "diagnosa_NI5" => "nullable|string",
            "diagnosa_NI2" => "nullable|string",
            "displan_edukasi" => "nullable|string",
            "displan_rumah" => "nullable|string",
            "displan_hygenie" => "nullable|string",
            "displan_sehat" => "nullable|string",
            "edukasi_diagnosis" => "nullable|string",
            "edukasi_terapi" => "nullable|string",
            "edukasi_consent" => "nullable|string",
            "edukasi_gizi" => "nullable|string",
            "edukasi_hygenie" => "nullable|string",
            "edukasi_kebersihan" => "nullable|string",
            "edukasi_perianal" => "nullable|string",
            "edukasi_info" => "nullable|string",
            "edukasi_konseling" => "nullable|string",
            "lembar_edukasi" => "nullable|string",
            "injeksi_ciprofloxacin" => "nullable|string",
            "injeksi_ceftriaxon" => "nullable|string",
            "injeksi_levofloxacin" => "nullable|string",
            "injeksi_buscopan" => "nullable|string",
            "injeksi_antimual" => "nullable|string",
            "injeksi_antipiretik" => "nullable|string",
            "injeksi_kristaloid" => "nullable|string",
            "injeksi_koloid" => "nullable|string",
            "injeksi_varian" => "nullable|string",
            "oral_metronidazol" => "nullable|string",
            "oral_kotrimoksazol" => "nullable|string",
            "oral_eritromisin" => "nullable|string",
            "oral_klaritromisin" => "nullable|string",
            "oral_doksisiklin" => "nullable|string",
            "oral_cefixime" => "nullable|string",
            "oral_ciprofloxacin" => "nullable|string",
            "oral_levofloxacin" => "nullable|string",
            "oral_amoxicillin" => "nullable|string",
            "oral_antimotilitas" => "nullable|string",
            "oral_buscopan" => "nullable|string",
            "oral_ondansentron" => "nullable|string",
            "oral_parasetamol" => "nullable|string",
            "intervensi_medika" => "nullable|string",
            "intervensi_elektrolit" => "nullable|string",
            "intervensi_nyeri" => "nullable|string",
            "intervensi_diare" => "nullable|string",
            "intervensi_nutrisi" => "nullable|string",
            "intervensi_perianal" => "nullable|string",
            "intervensi_ADL" => "nullable|string",
            "intervensi_infus" => "nullable|string",
            "intervensi_obat" => "nullable|string",
            "intervensi_gizi" => "nullable|string",
            "intervensi_dpjp" => "nullable|string",
            "monev_dpjp" => "nullable|string",
            "monev_vital" => "nullable|string",
            "monev_cairan" => "nullable|string",
            "monev_diare" => "nullable|string",
            "monev_rehidrasi" => "nullable|string",
            "monev_perianal" => "nullable|string",
            "monev_makanan" => "nullable|string",
            "monev_antropometri" => "nullable|string",
            "monev_biokimia" => "nullable|string",
            "monev_fisik" => "nullable|string",
            "monev_efektiv" => "nullable|string",
            "monev_interaksi" => "nullable|string",
            "monev_efek" => "nullable|string",
            "mob_medis" => "nullable|string",
            "mob_keperawatan" => "nullable|string",
            "mob_fisio" => "nullable|string",
            "hasil_dehidrasi" => "nullable|string",
            "hasil_BAB" => "nullable|string",
            "hasil_vital" => "nullable|string",
            "hasil_Seimbang" => "nullable|string",
            "hasil_perianal" => "nullable|string",
            "hasil_asupan" => "nullable|string",
            "hasil_status" => "nullable|string",
            "hasil_terapi" => "nullable|string",
            "hasil_rasional" => "nullable|string",
            "pulang_umum" => "nullable|string",
            "pulang_khusus" => "nullable|string",
            "pulang_varian" => "nullable|string",
            "rencana_resume" => "nullable|string",
            "rencana_penjelasan" => "nullable|string",
            "rencana_surat" => "nullable|string",
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

        Gastroenteritis::where('id', $id)->update($validatedData);

        return redirect('/gastroenteritis')->with('success', 'Data updated successfully!');
    }

    public function delete($id)
    {
        $data = Gastroenteritis::findOrFail($id);

        $data->delete();

        return back()->with('success', 'Data deleted sucessfully!');
    }
}
