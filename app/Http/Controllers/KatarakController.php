<?php

namespace App\Http\Controllers;

use App\Models\Katarak;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class KatarakController extends Controller
{
    public function index()
    {
        $title = 'CP Katarak Senilis Page';

        $datas = Katarak::orderBy('created_at', 'desc')->get();

        return view('pages.katarak.main', compact('datas', 'title'));
    }

    public function add()
    {
        $title = 'Add CP Katarak Senilis';

        $func = 'add';

        return view('pages.katarak.add', compact('func', 'title'));
    }

    public function store(Request $request)
    {

        // dd($request);

        // Array yang berisi nama kolom dan nilai default
        $columns = [
            "hari_penyakit",
            "asesment_mata",
            "asesment_internis",
            "asesment_anestesi",
            "asesment_perawat",
            "lab_darah",
            "lab_UR",
            "radio_thorax",
            "radio_USG",
            "ekg",
            "ases_DPJP",
            "ases_nonDPJP",
            "ases_PPJ",
            "ases_gizi",
            "ases_resep",
            "ases_obat",
            "diagnosa_medis",
            "diagnosa_akut",
            "diagnosa_hiper",
            "diagnosa_mual",
            "diagnosa_gizi",
            "displan_aktiv",
            "displan_terapi",
            "displan_diet",
            "displan_istirahat",
            "edukasi_diagnosis",
            "edukasi_terapi",
            "edukasi_consent",
            "edukasi_gizi",
            "edukasi_ADL",
            "edukasi_nyeri",
            "edukasi_infeksi",
            "edukasi_diet",
            "edukasi_mual",
            "edukasi_info",
            "edukasi_konseling",
            "lembar_edukasi",
            "injeksi_ranitidine",
            "injeksi_ondansentron",
            "injeksi_kolf",
            "oral_mefenamat",
            "oral_ciprofloxacin",
            "lokal_levofloxacin",
            "local_antibiotika",
            "intervensi_ECCE",
            "intervensi_nyeri",
            "intervensi_terapi",
            "intervensi_demam",
            "intervensi_cairan",
            "intervensi_kontrol",
            "intervensi_infus",
            "intervensi_medikasi",
            "intervensi_operasi",
            "intervensi_luka",
            "intervensi_diet",
            "intervensi_dpjp",
            "monev_operasi",
            "monev_periksa",
            "monev_komplikasi",
            "monev_perawatan",
            "monev_skala",
            "monev_vital",
            "monev_hidrasi",
            "monev_makanan",
            "monev_antropometri",
            "monev_interaksi",
            "monev_efek",
            "monev_terapi",
            "mob_medis",
            "mob_keperawatan",
            "mob_fisio",
            "hasil_visus",
            "hasil_nyeri",
            "hasil_infeksi",
            "hasil_respon",
            "hasil_vital",
            "hasil_asupan",
            "hasil_status",
            "hasil_terapi",
            "hasil_obat",
            "pulang_normal",
            "pulang_NOC",
            "pulang_varian",
            "rencana_perawatan",
            "rencana_penjelasan",
            "rencana_kontrol",
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
            "table" => 'string',
            "noReg" => 'string',
            "nama" => 'nullable|string',
            "jenis_kelamin" => 'nullable|string',
            "tanggal_lahir" => 'nullable|string',
            "diagnosa" => 'nullable|string',
            "penyakit_utama" => 'nullable|string',
            "penyakit_penyerta" => 'nullable|string',
            "komplikasi" => 'nullable|string',
            "tindakan" => 'nullable|string',
            "berat_badan" => 'nullable|string',
            "tinggi_badan" => 'nullable|string',
            "tanggal_masuk" => 'nullable|string',
            "tanggal_keluar" => 'nullable|string',
            "kode_icd" => 'nullable|string',
            "jam_masuk" => 'nullable|string',
            "jam_keluar" => 'nullable|string',
            "lama_rawat" => 'nullable|string',
            "rencana_rawat" => 'nullable|string',
            "rawat_kelas" => 'nullable|string',
            "rujukan" => 'nullable|string',
            "hari_penyakit" => 'nullable|string',
            "asesment_mata" => 'nullable|string',
            "catatan_asesDokMata" => 'nullable|string',
            "asesment_internis" => 'nullable|string',
            "catatan_asesDokInternis" => 'nullable|string',
            "asesment_anestesi" => 'nullable|string',
            "catatan_asesDokAnsestesi" => 'nullable|string',
            "asesment_perawat" => 'nullable|string',
            "catatan_asesPer" => 'nullable|string',
            "lab_darah" => 'nullable|string',
            "catatan_labDar" => 'nullable|string',
            "lab_UR" => 'nullable|string',
            "catatan_labUR" => 'nullable|string',
            "radio_thorax" => 'nullable|string',
            "catatan_radTho" => 'nullable|string',
            "radio_USG" => 'nullable|string',
            "catatan_radUSG" => 'nullable|string',
            "ekg" => 'nullable|string',
            "catatan_ekg" => 'nullable|string',
            "ases_DPJP" => 'nullable|string',
            "catatan_asesDPJP" => 'nullable|string',
            "ases_nonDPJP" => 'nullable|string',
            "catatan_asesNonDPJP" => 'nullable|string',
            "ases_PPJ" => 'nullable|string',
            "catatan_asesPPJ" => 'nullable|string',
            "ases_gizi" => 'nullable|string',
            "catatan_asesGizi" => 'nullable|string',
            "ases_resep" => 'nullable|string',
            "catatan_asesResep" => 'nullable|string',
            "ases_obat" => 'nullable|string',
            "diagnosa_medis" => 'nullable|string',
            "catatan_diagMedis" => 'nullable|string',
            "diagnosa_akut" => 'nullable|string',
            "catatan_diagAkut" => 'nullable|string',
            "diagnosa_hiper" => 'nullable|string',
            "diagnosa_mual" => 'nullable|string',
            "diagnosa_gizi" => 'nullable|string',
            "catatan_diagGizi" => 'nullable|string',
            "displan_aktiv" => 'nullable|string',
            "catatan_disPlanAk" => 'nullable|string',
            "displan_terapi" => 'nullable|string',
            "displan_diet" => 'nullable|string',
            "displan_istirahat" => 'nullable|string',
            "edukasi_diagnosis" => 'nullable|string',
            "catatan_emedDiag" => 'nullable|string',
            "edukasi_terapi" => 'nullable|string',
            "edukasi_consent" => 'nullable|string',
            "edukasi_gizi" => 'nullable|string',
            "catatan_egiz" => 'nullable|string',
            "edukasi_ADL" => 'nullable|string',
            "catatan_ekepADL" => 'nullable|string',
            "edukasi_nyeri" => 'nullable|string',
            "edukasi_infeksi" => 'nullable|string',
            "edukasi_diet" => 'nullable|string',
            "edukasi_mual" => 'nullable|string',
            "edukasi_info" => 'nullable|string',
            "catatan_efarmInf" => 'nullable|string',
            "edukasi_konseling" => 'nullable|string',
            "lembar_edukasi" => 'nullable|string',
            "catatan_lemEdTer" => 'nullable|string',
            "injeksi_ranitidine" => 'nullable|string',
            "catatan_injectRani" => 'nullable|string',
            "injeksi_ondansentron" => 'nullable|string',
            "catatan_injectOndan" => 'nullable|string',
            "injeksi_kolf" => 'nullable|string',
            "catatan_infusKolf" => 'nullable|string',
            "oral_mefenamat" => 'nullable|string',
            "catatan_oralMefe" => 'nullable|string',
            "oral_ciprofloxacin" => 'nullable|string',
            "catatan_oralCipro" => 'nullable|string',
            "lokal_levofloxacin" => 'nullable|string',
            "catatan_lokalLevo" => 'nullable|string',
            "local_antibiotika" => 'nullable|string',
            "catatan_lokalAnti" => 'nullable|string',
            "intervensi_ECCE" => 'nullable|string',
            "catatan_tatmedECCE" => 'nullable|string',
            "intervensi_nyeri" => 'nullable|string',
            "catatan_tatkepNyeri" => 'nullable|string',
            "intervensi_terapi" => 'nullable|string',
            "intervensi_demam" => 'nullable|string',
            "intervensi_cairan" => 'nullable|string',
            "intervensi_kontrol" => 'nullable|string',
            "intervensi_infus" => 'nullable|string',
            "intervensi_medikasi" => 'nullable|string',
            "intervensi_operasi" => 'nullable|string',
            "intervensi_luka" => 'nullable|string',
            "intervensi_diet" => 'nullable|string',
            "catatan_tatgiziDiet" => 'nullable|string',
            "intervensi_dpjp" => 'nullable|string',
            "catatan_tatfarmDPJP" => 'nullable|string',
            "monev_operasi" => 'nullable|string',
            "catatan_monevOperasi" => 'nullable|string',
            "monev_periksa" => 'nullable|string',
            "monev_komplikasi" => 'nullable|string',
            "monev_perawatan" => 'nullable|string',
            "monev_skala" => 'nullable|string',
            "catatan_monevkepSkala" => 'nullable|string',
            "monev_vital" => 'nullable|string',
            "monev_hidrasi" => 'nullable|string',
            "monev_makanan" => 'nullable|string',
            "catatan_monevgiziMakanan" => 'nullable|string',
            "monev_antropometri" => 'nullable|string',
            "monev_interaksi" => 'nullable|string',
            "catatan_monevfarmInteraksi" => 'nullable|string',
            "monev_efek" => 'nullable|string',
            "monev_terapi" => 'nullable|string',
            "mob_medis" => 'nullable|string',
            "catatan_mobmed" => 'nullable|string',
            "mob_keperawatan" => 'nullable|string',
            "mob_fisio" => 'nullable|string',
            "hasil_visus" => 'nullable|string',
            "catatan_hasmedVisus" => 'nullable|string',
            "hasil_nyeri" => 'nullable|string',
            "catatan_haskepNyeri" => 'nullable|string',
            "hasil_infeksi" => 'nullable|string',
            "hasil_respon" => 'nullable|string',
            "hasil_vital" => 'nullable|string',
            "hasil_asupan" => 'nullable|string',
            "catatan_hasgiziAsupan" => 'nullable|string',
            "hasil_status" => 'nullable|string',
            "hasil_terapi" => 'nullable|string',
            "catatan_hasfarmInd" => 'nullable|string',
            "hasil_obat" => 'nullable|string',
            "pulang_normal" => 'nullable|string',
            "catatan_pulangNormal" => 'nullable|string',
            "pulang_NOC" => 'nullable|string',
            "pulang_varian" => 'nullable|string',
            "catatan_pulangVarian" => 'nullable|string',
            "rencana_perawatan" => 'nullable|string',
            "catatan_rencanaPerawatan" => 'nullable|string',
            "rencana_penjelasan" => 'nullable|string',
            "rencana_kontrol" => 'nullable|string',
            "tanggal_laporan" => 'nullable|string',
            "nama_dokter" => 'nullable|string',
            "ttd_dokter" => 'nullable|string',
            "nama_perawat" => 'nullable|string',
            "ttd_perawat" => 'nullable|string',
            "nama_pelaksana" => 'nullable|string',
            "ttd_pelaksana" => 'nullable|string',
        ]);

        $validatedData = $validator->validated();

        // dd($validator);

        // Hasil

        Katarak::create($validatedData);

        return redirect('/katarak')->with('success', 'Data added successfully!');
    }

    public function modify($cmd, $id)
    {
        $data = Katarak::findOrFail($id);

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
            "asesment_mata",
            "asesment_internis",
            "asesment_anestesi",
            "asesment_perawat",
            "lab_darah",
            "lab_UR",
            "radio_thorax",
            "radio_USG",
            "ekg",
            "ases_DPJP",
            "ases_nonDPJP",
            "ases_PPJ",
            "ases_gizi",
            "ases_resep",
            "ases_obat",
            "diagnosa_medis",
            "diagnosa_akut",
            "diagnosa_hiper",
            "diagnosa_mual",
            "diagnosa_gizi",
            "displan_aktiv",
            "displan_terapi",
            "displan_diet",
            "displan_istirahat",
            "edukasi_diagnosis",
            "edukasi_terapi",
            "edukasi_consent",
            "edukasi_gizi",
            "edukasi_ADL",
            "edukasi_nyeri",
            "edukasi_infeksi",
            "edukasi_diet",
            "edukasi_mual",
            "edukasi_info",
            "edukasi_konseling",
            "lembar_edukasi",
            "injeksi_ranitidine",
            "injeksi_ondansentron",
            "injeksi_kolf",
            "oral_mefenamat",
            "oral_ciprofloxacin",
            "lokal_levofloxacin",
            "local_antibiotika",
            "intervensi_ECCE",
            "intervensi_nyeri",
            "intervensi_terapi",
            "intervensi_demam",
            "intervensi_cairan",
            "intervensi_kontrol",
            "intervensi_infus",
            "intervensi_medikasi",
            "intervensi_operasi",
            "intervensi_luka",
            "intervensi_diet",
            "intervensi_dpjp",
            "monev_operasi",
            "monev_periksa",
            "monev_komplikasi",
            "monev_perawatan",
            "monev_skala",
            "monev_vital",
            "monev_hidrasi",
            "monev_makanan",
            "monev_antropometri",
            "monev_interaksi",
            "monev_efek",
            "monev_terapi",
            "mob_medis",
            "mob_keperawatan",
            "mob_fisio",
            "hasil_visus",
            "hasil_nyeri",
            "hasil_infeksi",
            "hasil_respon",
            "hasil_vital",
            "hasil_asupan",
            "hasil_status",
            "hasil_terapi",
            "hasil_obat",
            "pulang_normal",
            "pulang_NOC",
            "pulang_varian",
            "rencana_perawatan",
            "rencana_penjelasan",
            "rencana_kontrol",
        ];

        foreach ($columns as $column) {
            $data[$column] = explode(', ', $data->$column);
        }

        // dd($data->hari_penyakit);

        if ($cmd === 'show') {
            $title = 'Displaying CP Katarak Senilis';

            return view('pages.katarak.show', compact('data', 'arr_kode_icd', 'arr_tindakan', 'cmd', 'title'));
        } else if ($cmd === 'edit') {
            $title = 'Editing CP Katarak Senilis';

            return view('pages.katarak.edit', compact('data', 'arr_kode_icd', 'arr_tindakan', 'cmd', 'title'));
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
            "asesment_mata",
            "asesment_internis",
            "asesment_anestesi",
            "asesment_perawat",
            "lab_darah",
            "lab_UR",
            "radio_thorax",
            "radio_USG",
            "ekg",
            "ases_DPJP",
            "ases_nonDPJP",
            "ases_PPJ",
            "ases_gizi",
            "ases_resep",
            "ases_obat",
            "diagnosa_medis",
            "diagnosa_akut",
            "diagnosa_hiper",
            "diagnosa_mual",
            "diagnosa_gizi",
            "displan_aktiv",
            "displan_terapi",
            "displan_diet",
            "displan_istirahat",
            "edukasi_diagnosis",
            "edukasi_terapi",
            "edukasi_consent",
            "edukasi_gizi",
            "edukasi_ADL",
            "edukasi_nyeri",
            "edukasi_infeksi",
            "edukasi_diet",
            "edukasi_mual",
            "edukasi_info",
            "edukasi_konseling",
            "lembar_edukasi",
            "injeksi_ranitidine",
            "injeksi_ondansentron",
            "injeksi_kolf",
            "oral_mefenamat",
            "oral_ciprofloxacin",
            "lokal_levofloxacin",
            "local_antibiotika",
            "intervensi_ECCE",
            "intervensi_nyeri",
            "intervensi_terapi",
            "intervensi_demam",
            "intervensi_cairan",
            "intervensi_kontrol",
            "intervensi_infus",
            "intervensi_medikasi",
            "intervensi_operasi",
            "intervensi_luka",
            "intervensi_diet",
            "intervensi_dpjp",
            "monev_operasi",
            "monev_periksa",
            "monev_komplikasi",
            "monev_perawatan",
            "monev_skala",
            "monev_vital",
            "monev_hidrasi",
            "monev_makanan",
            "monev_antropometri",
            "monev_interaksi",
            "monev_efek",
            "monev_terapi",
            "mob_medis",
            "mob_keperawatan",
            "mob_fisio",
            "hasil_visus",
            "hasil_nyeri",
            "hasil_infeksi",
            "hasil_respon",
            "hasil_vital",
            "hasil_asupan",
            "hasil_status",
            "hasil_terapi",
            "hasil_obat",
            "pulang_normal",
            "pulang_NOC",
            "pulang_varian",
            "rencana_perawatan",
            "rencana_penjelasan",
            "rencana_kontrol",
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
            "table" => 'string',
            "noReg" => 'string',
            "nama" => 'nullable|string',
            "jenis_kelamin" => 'nullable|string',
            "tanggal_lahir" => 'nullable|string',
            "diagnosa" => 'nullable|string',
            "penyakit_utama" => 'nullable|string',
            "penyakit_penyerta" => 'nullable|string',
            "komplikasi" => 'nullable|string',
            "tindakan" => 'nullable|string',
            "berat_badan" => 'nullable|string',
            "tinggi_badan" => 'nullable|string',
            "tanggal_masuk" => 'nullable|string',
            "tanggal_keluar" => 'nullable|string',
            "kode_icd" => 'nullable|string',
            "jam_masuk" => 'nullable|string',
            "jam_keluar" => 'nullable|string',
            "lama_rawat" => 'nullable|string',
            "rencana_rawat" => 'nullable|string',
            "rawat_kelas" => 'nullable|string',
            "rujukan" => 'nullable|string',
            "hari_penyakit" => 'nullable|string',
            "asesment_mata" => 'nullable|string',
            "catatan_asesDokMata" => 'nullable|string',
            "asesment_internis" => 'nullable|string',
            "catatan_asesDokInternis" => 'nullable|string',
            "asesment_anestesi" => 'nullable|string',
            "catatan_asesDokAnsestesi" => 'nullable|string',
            "asesment_perawat" => 'nullable|string',
            "catatan_asesPer" => 'nullable|string',
            "lab_darah" => 'nullable|string',
            "catatan_labDar" => 'nullable|string',
            "lab_UR" => 'nullable|string',
            "catatan_labUR" => 'nullable|string',
            "radio_thorax" => 'nullable|string',
            "catatan_radTho" => 'nullable|string',
            "radio_USG" => 'nullable|string',
            "catatan_radUSG" => 'nullable|string',
            "ekg" => 'nullable|string',
            "catatan_ekg" => 'nullable|string',
            "ases_DPJP" => 'nullable|string',
            "catatan_asesDPJP" => 'nullable|string',
            "ases_nonDPJP" => 'nullable|string',
            "catatan_asesNonDPJP" => 'nullable|string',
            "ases_PPJ" => 'nullable|string',
            "catatan_asesPPJ" => 'nullable|string',
            "ases_gizi" => 'nullable|string',
            "catatan_asesGizi" => 'nullable|string',
            "ases_resep" => 'nullable|string',
            "catatan_asesResep" => 'nullable|string',
            "ases_obat" => 'nullable|string',
            "diagnosa_medis" => 'nullable|string',
            "catatan_diagMedis" => 'nullable|string',
            "diagnosa_akut" => 'nullable|string',
            "catatan_diagAkut" => 'nullable|string',
            "diagnosa_hiper" => 'nullable|string',
            "diagnosa_mual" => 'nullable|string',
            "diagnosa_gizi" => 'nullable|string',
            "catatan_diagGizi" => 'nullable|string',
            "displan_aktiv" => 'nullable|string',
            "catatan_disPlanAk" => 'nullable|string',
            "displan_terapi" => 'nullable|string',
            "displan_diet" => 'nullable|string',
            "displan_istirahat" => 'nullable|string',
            "edukasi_diagnosis" => 'nullable|string',
            "catatan_emedDiag" => 'nullable|string',
            "edukasi_terapi" => 'nullable|string',
            "edukasi_consent" => 'nullable|string',
            "edukasi_gizi" => 'nullable|string',
            "catatan_egiz" => 'nullable|string',
            "edukasi_ADL" => 'nullable|string',
            "catatan_ekepADL" => 'nullable|string',
            "edukasi_nyeri" => 'nullable|string',
            "edukasi_infeksi" => 'nullable|string',
            "edukasi_diet" => 'nullable|string',
            "edukasi_mual" => 'nullable|string',
            "edukasi_info" => 'nullable|string',
            "catatan_efarmInf" => 'nullable|string',
            "edukasi_konseling" => 'nullable|string',
            "lembar_edukasi" => 'nullable|string',
            "catatan_lemEdTer" => 'nullable|string',
            "injeksi_ranitidine" => 'nullable|string',
            "catatan_injectRani" => 'nullable|string',
            "injeksi_ondansentron" => 'nullable|string',
            "catatan_injectOndan" => 'nullable|string',
            "injeksi_kolf" => 'nullable|string',
            "catatan_infusKolf" => 'nullable|string',
            "oral_mefenamat" => 'nullable|string',
            "catatan_oralMefe" => 'nullable|string',
            "oral_ciprofloxacin" => 'nullable|string',
            "catatan_oralCipro" => 'nullable|string',
            "lokal_levofloxacin" => 'nullable|string',
            "catatan_lokalLevo" => 'nullable|string',
            "local_antibiotika" => 'nullable|string',
            "catatan_lokalAnti" => 'nullable|string',
            "intervensi_ECCE" => 'nullable|string',
            "catatan_tatmedECCE" => 'nullable|string',
            "intervensi_nyeri" => 'nullable|string',
            "catatan_tatkepNyeri" => 'nullable|string',
            "intervensi_terapi" => 'nullable|string',
            "intervensi_demam" => 'nullable|string',
            "intervensi_cairan" => 'nullable|string',
            "intervensi_kontrol" => 'nullable|string',
            "intervensi_infus" => 'nullable|string',
            "intervensi_medikasi" => 'nullable|string',
            "intervensi_operasi" => 'nullable|string',
            "intervensi_luka" => 'nullable|string',
            "intervensi_diet" => 'nullable|string',
            "catatan_tatgiziDiet" => 'nullable|string',
            "intervensi_dpjp" => 'nullable|string',
            "catatan_tatfarmDPJP" => 'nullable|string',
            "monev_operasi" => 'nullable|string',
            "catatan_monevOperasi" => 'nullable|string',
            "monev_periksa" => 'nullable|string',
            "monev_komplikasi" => 'nullable|string',
            "monev_perawatan" => 'nullable|string',
            "monev_skala" => 'nullable|string',
            "catatan_monevkepSkala" => 'nullable|string',
            "monev_vital" => 'nullable|string',
            "monev_hidrasi" => 'nullable|string',
            "monev_makanan" => 'nullable|string',
            "catatan_monevgiziMakanan" => 'nullable|string',
            "monev_antropometri" => 'nullable|string',
            "monev_interaksi" => 'nullable|string',
            "catatan_monevfarmInteraksi" => 'nullable|string',
            "monev_efek" => 'nullable|string',
            "monev_terapi" => 'nullable|string',
            "mob_medis" => 'nullable|string',
            "catatan_mobmed" => 'nullable|string',
            "mob_keperawatan" => 'nullable|string',
            "mob_fisio" => 'nullable|string',
            "hasil_visus" => 'nullable|string',
            "catatan_hasmedVisus" => 'nullable|string',
            "hasil_nyeri" => 'nullable|string',
            "catatan_haskepNyeri" => 'nullable|string',
            "hasil_infeksi" => 'nullable|string',
            "hasil_respon" => 'nullable|string',
            "hasil_vital" => 'nullable|string',
            "hasil_asupan" => 'nullable|string',
            "catatan_hasgiziAsupan" => 'nullable|string',
            "hasil_status" => 'nullable|string',
            "hasil_terapi" => 'nullable|string',
            "catatan_hasfarmInd" => 'nullable|string',
            "hasil_obat" => 'nullable|string',
            "pulang_normal" => 'nullable|string',
            "catatan_pulangNormal" => 'nullable|string',
            "pulang_NOC" => 'nullable|string',
            "pulang_varian" => 'nullable|string',
            "catatan_pulangVarian" => 'nullable|string',
            "rencana_perawatan" => 'nullable|string',
            "catatan_rencanaPerawatan" => 'nullable|string',
            "rencana_penjelasan" => 'nullable|string',
            "rencana_kontrol" => 'nullable|string',
            "tanggal_laporan" => 'nullable|string',
            "nama_dokter" => 'nullable|string',
            "ttd_dokter" => 'nullable|string',
            "nama_perawat" => 'nullable|string',
            "ttd_perawat" => 'nullable|string',
            "nama_pelaksana" => 'nullable|string',
            "ttd_pelaksana" => 'nullable|string',
        ]);

        // dd($validator);

        $validatedData = $validator->validated();

        if ($validator->fails()) {
            $errors = implode(', ', $validator->errors()->all());
            return back()->with('error', $errors)->withInput();
        }

        // dd($validator);

        // Hasil

        Katarak::where('id', $id)->update($validatedData);

        return redirect('/katarak')->with('success', 'Data updated successfully!');
    }

    public function delete($id)
    {
        $data = Katarak::findOrFail($id);

        $data->delete();

        return back()->with('success', 'Data deleted sucessfully!');
    }
}
