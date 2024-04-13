<div class="table-responsive">
    <table id="" class="table table-bordered display margin-top-10">
        <thead class="text-center">
            <tr>
                <th rowspan="5" class="min-w-100">KEGIATAN</th>
                <th rowspan="5" class="min-w-50">URAIAN KEGIATAN</th>
                <th colspan="7">HARI PENYAKIT </th>
                <th rowspan="5" class="min-w-250">KETERANGAN</th>
            </tr>
            <tr>
                @for ($i = 1; $i <= 7; $i++)
                    <th>{{ $i }}</th>
                @endfor
            </tr>
            <tr>
                @for ($i = 0; $i < 7; $i++)
                    <th class="text-center p-1">
                        <input type="checkbox" id="hp{{ $i }}" value="1"
                            name="hari_penyakit[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="hp{{ $i }}"></label>
                    </th>
                @endfor
            </tr>
            <tr>
                <th colspan="7">HARI RAWAT</th>
            </tr>
            <tr>
                @for ($i = 0; $i < 7; $i++)
                    <th>{{ $i + 1 }}</th>
                @endfor
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1. ASESMEN AWAL </td>
                @for ($i = 0; $i < 9; $i++)
                    <td> </td>
                @endfor
            </tr>
            <tr>
                <td rowspan="2">a. ASESMEN AWAL MEDIS</td>
                <td>Dokter IGD</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="asesDokIgd{{ $i }}" value="1"
                            name="asesment_igd[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="asesDokIgd{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanAsesDokIgd" name="catatan_asesDokIgd">Pasien masuk melalui IGD</textarea>
                </td>
            </tr>
            <tr>
                <td>Dokter Spesialis</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="asesDokSpe{{ $i }}" value="1"
                            name="asesment_spesialis[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="asesDokSpe{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanAsesDokSpe" name="catatan_asesDokSpe">Pasien masuk melalui RJ</textarea>
                </td>
            </tr>
            <tr>
                <td>b. ASESMEN AWAL KEPERAWATAN</td>
                <td>Perawat Primer :
                    <p>Kondisi umum, tingkat kesadaran, tanda-tanda vital, riwayat alergi,
                        skrining gizi, suhu</p>
                </td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="asesPer{{ $i }}" value="1"
                            name="asesment_perawat[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="asesPer{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanAsesPer" name="catatan_asesPer">Dilanjutkan dengan asesmen bio, psiko, sosial, spiritual, dan budaya</textarea>
                </td>
            </tr>
            <tr>
                <td rowspan="4">2. LABORATORIUM </td>
                <td>Darah rutin</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="labDar{{ $i }}" value="1"
                            name="lab_darah[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="labDar{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanLabDar" name="catatan_labDar"></textarea>
                </td>
            </tr>
            <tr>
                <td>Feses Lengkap</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #95FFFF" @endif>
                        <input type="checkbox" id="labFeses{{ $i }}" value="1"
                            name="lab_feses[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="labFeses{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanLabFeses" name="catatan_labFeses">Atas Indikasi</textarea>
                </td>
            </tr>
            <tr>
                <td>GDS, Na, K, Cl</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #95FFFF" @endif>
                        <input type="checkbox" id="labGDS{{ $i }}" value="1"
                            name="lab_GDS[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="labGDS{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanLabGDS" name="catatan_labGDS">Dehidrasi Berat</textarea>
                </td>
            </tr>
            <tr>
                <td> </td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="labVarian{{ $i }}" value="1"
                            name="lab_varian[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="labVarian{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanLabVarian" name="catatan_labVarian">Varian</textarea>
                </td>
            </tr>
            <tr>
                <td>3. RADIOLOGI/IMAGING</td>
                <td></td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="radiologi{{ $i }}" value="1"
                            name="radiologi[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="radiologi{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanRadiologi" name="catatan_radiologi"></textarea>
                </td>
            </tr>
            <tr>
                <td>4. KONSULTASI</td>
                <td> </td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="konsul{{ $i }}" value="1"
                            name="konsultasi[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="konsul{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanKonsultasi" name="catatan_konsultasi"></textarea>
                </td>
            </tr>
            <tr>
                <td>5. ASESMEN LANJUTAN</td>
                @for ($i = 0; $i < 9; $i++)
                    <td> </td>
                @endfor
            </tr>
            <tr>
                <td rowspan="2">a. ASESMEN MEDIS</td>
                <td>Dokter DPJP</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i > 0 && $i < 5) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="asesDPJP{{ $i }}" value="1"
                            name="ases_DPJP[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="asesDPJP{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanAsesDPJP" name="catatan_asesDPJP">Visit harian/Follow up</textarea>
                </td>
            </tr>
            <tr>
                <td>Dokter non DPJP/dr. Ruangan</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i > 0 && $i < 5) style="background-color: #95FFFF" @endif>
                        <input type="checkbox" id="asesNonDPJP{{ $i }}" value="1"
                            name="ases_nonDPJP[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="asesNonDPJP{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanAsesNonDPJP" name="catatan_asesNonDPJP">Atas Indikasi Emergency</textarea>
                </td>
            </tr>
            <tr>
                <td>b. ASESMEN KEPERAWATAN</td>
                <td>Perawat Penanggung Jawab</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="asesPPJ{{ $i }}" value="1"
                            name="ases_PPJ[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="asesPPJ{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanAsesPPJ" name="catatan_asesPPJ">Dilakukan dalam 3 shift</textarea>
                </td>
            </tr>
            <tr>
                <td>c. ASESMEN GIZI</td>
                <td>Tenaga Gizi (Nutrisionis/Dietisien)</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="asesGizi{{ $i }}" value="1"
                            name="ases_gizi[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="asesGizi{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanAsesGizi" name="catatan_asesGizi">Lihat risiko malnutrisi melalui skrining gizi dan mengkaji data antropometri, biokimia, fisik/klinis, riwayat makan termasuk alergi makanan serta riwayat personal. Asesmen dilakukan dalam waktu 48 jam</textarea>
                </td>
            </tr>
            <tr>
                <td rowspan="2">d. ASESMEN FARMASI</td>
                <td>Telaah Resep</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i < 5) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="asesResep{{ $i }}" value="1"
                            name="ases_resep[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="asesResep{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="2">
                    <textarea rows="5" class="form-control" id="catatanAsesResep" name="catatan_asesResep">Dilanjutkan dengan intervensi farmasi yang sesuai hasil Telaah dan Rekonsiliasi obat</textarea>
                </td>
            </tr>
            <tr>
                <td>Rekonsiliasi Obat</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="asesObat{{ $i }}" value="1"
                            name="ases_obat[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="asesObat{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>6. DIAGNOSIS</td>
                @for ($i = 0; $i < 9; $i++)
                    <td> </td>
                @endfor
            </tr>
            <tr>
                <td>a. DIAGNOSIS MEDIS</td>
                <td>Diare akut dehidrasi ringan / sedang / berat</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="diagMedis{{ $i }}" value="1"
                            name="diagnosa_medis[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="diagMedis{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanDiagMedis" name="catatan_diagMedis"></textarea>
                </td>
            </tr>
            <tr>
                <td rowspan="7">b. DIAGNOSIS KEPERAWATAN</td>
                <td>Kode : 00013 Diare</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="diagDiare{{ $i }}" value="1"
                            name="diagnosa_diare[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="diagDiare{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="7">
                    <textarea rows="19" class="form-control" id="catatanDiagDiare" name="catatan_diagDiare">Masalah keperawatan yang dijumpai setiap hari. Dibuat oleh perawat penanggung jawab</textarea>
                </td>
            </tr>
            <tr>
                <td>Kode : 00027 Kekurangan Volume Cairan</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="diagCair{{ $i }}" value="1"
                            name="diagnosa_cairan[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="diagCair{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>Kode : 00195 Risiko Ketidakseimbangan Elektrolit</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="diagElektrolit{{ $i }}" value="1"
                            name="diagnosa_elektrolit[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="diagElektrolit{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>Kode : 00002 Ketidakseimbangan Nutrisi Kurang dari Kebutuhan Tubuh</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="diagNutrisi{{ $i }}" value="1"
                            name="diagnosa_nutrisi[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="diagNutrisi{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>Kode : 00132 Nyeri Akut</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="diagAkut{{ $i }}" value="1"
                            name="diagnosa_akut[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="diagAkut{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>Kode : 00007 Hipertermia</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="diagHiper{{ $i }}" value="1"
                            name="diagnosa_hiper[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="diagHiper{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>Kode : 00046 Kerusakan Integritas Kulit</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="diagKulit{{ $i }}" value="1"
                            name="diagnosa_kulit[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="diagKulit{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>c. DIAGNOSIS GIZI</td>
                <td>Prediksi suboptimal asupan energi berkaitan rencana tindakan bedah/operasi ditandai dengan asupan
                    energi lebih rendah dari kebutuhan (NI - 1.4)</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="diagGizi{{ $i }}" value="1"
                            name="diagnosa_gizi[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="diagGizi{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="5" class="form-control" id="catatanDiagGizi" name="catatan_diagGizi">Sesuai dengan data asesmen, kemungkinan saja ada diagnosis lain atau diagnosis berubah selama perawatan</textarea>
                </td>
            </tr>
            <tr>
                <td rowspan="3">7. DISCHARGE PLANNING</td>
                <td>Identifikasi kebutuhan di rumah</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 2) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="disPlanRumah{{ $i }}" value="1"
                            name="displan_rumah[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="disPlanRumah{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="3">
                    <textarea rows="8" class="form-control" id="catatanDisPlanRumah" name="catatan_disPlanRumah">Program pendidikan pasien dan keluarga (diisi 3x24 jam)</textarea>
                </td>
            </tr>
            <tr>
                <td>Terapi yang diberikan meliputi kegunaan obat, dosis dan efek samping</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 2) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="disPlanTer{{ $i }}" value="1"
                            name="displan_terapi[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="disPlanTer{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>Hand hygiene, kualitas hidup sehat</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 2) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="disPlanHygiene{{ $i }}" value="1"
                            name="displan_hygiene[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="disPlanHygiene{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>
                    8. EDUKASI TERINTEGRASI</td>
                @for ($i = 0; $i < 9; $i++)
                    <td> </td>
                @endfor
            </tr>
            <tr>
                <td rowspan="3">a. EDUKASI/INFORMASI MEDIS</td>
                <td>Penjelasan Diagnosis</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="emedDiag{{ $i }}" value="1"
                            name="edukasi_diagnosis[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="emedDiag{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="3">
                    <textarea rows="6" class="form-control" id="catatanEmedDiag" name="catatan_emedDiag">
- Oleh semua pemberi asuhan berdasarkan kebutuhan dan juga berdasarkan Discharge Planning

- Pengisian formulir informasi dan edukasi terintegrasi oleh pasien dan atau keluarga

- Edukasi gizi dapat dilakukan saat awal masuk pada hari 1 atau hari ke 2

- Meningkatkan kepatuhan pasien meminum/menggunakan obat

- Di TTD Keluarga/Pasien
                    </textarea>
                </td>
            </tr>
            <tr>
                <td>Rencana terapi</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="emedTerapi{{ $i }}" value="1"
                            name="edukasi_terapi[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="emedTerapi{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>Informed Consent</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="emedConsent{{ $i }}" value="1"
                            name="edukasi_consent[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="emedConsent{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>b. EDUKASI DAN KONSELING GIZI</td>
                <td>Diberikan cairan rehidrasi oral, ASI tetap diteruskan, diet lunak bertahap porsi kecil tapi sering
                    (6x)</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="egiz{{ $i }}" value="1"
                            name="edukasi_gizi[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="egiz{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanEgiz" name="catatan_egiz"></textarea>
                </td>
            </tr>
            <tr>
                <td rowspan="3">c. EDUKASI KEPERAWATAN</td>
                <td>1. Hand hygiene</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="ekepHygiene{{ $i }}" value="1"
                            name="edukasi_hygiene[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="ekepHygiene{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanEkepHygiene" name="catatan_ekepHygiene"></textarea>
                </td>
            </tr>
            <tr>
                <td>2. Menjaga kebersihan makanan</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="ekepMakanan{{ $i }}" value="1"
                            name="edukasi_makanan[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="ekepMakanan{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanEkepMakanan" name="catatan_ekepMakanan"></textarea>
                </td>
            </tr>
            <tr>
                <td>3. Perawatan perianal</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="ekepPerianal{{ $i }}" value="1"
                            name="edukasi_perianal[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="ekepPerianal{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanEkepPerianal" name="catatan_ekepPerianal"></textarea>
                </td>
            </tr>
            <tr>
                <td rowspan="2">d. EDUKASI FARMASI </td>
                <td>Informasi Obat</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i < 5) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="efarmInf{{ $i }}" value="1"
                            name="edukasi_info[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="efarmInf{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanEfarmInf" name="catatan_efarmInf"></textarea>
                </td>
            </tr>
            <tr>
                <td>Konseling Obat</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="efarmKons{{ $i }}" value="1"
                            name="edukasi_konseling[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="efarmKons{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanEfarmKons" name="catatan_efarmKons"></textarea>
                </td>
            </tr>
            <tr>
                <td>PENGISIAN FORMULIR INFORMASI DAN EDUKASI TERINTEGRASI</td>
                <td>Lembar Edukasi Terintegrasi</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="lemEdTer{{ $i }}" value="1"
                            name="lembar_edukasi[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="lemEdTer{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanLemEdTer" name="catatan_lemEdTer"></textarea>
                </td>
            </tr>
            <tr>
                <td>9. TERAPI/MEDIKAMENTOSA</td>
                @for ($i = 0; $i < 9; $i++)
                    <td> </td>
                @endfor
            </tr>
            <tr>
                <td rowspan="2">a. INJEKSI</td>
                <td>Antibiotik : Ceftriaxon</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="injectCeftriaxon{{ $i }}" value="1"
                            name="injeksi_ceftriaxon[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="injectCeftriaxon{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanInjectCeftriaxon" name="catatan_injectCeftriaxon">Atas Indikasi</textarea>
                </td>
            </tr>
            <tr>
                <td>Parasetamol 10-15 mg/Kg BB</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="injectParasetamol{{ $i }}" value="1"
                            name="injeksi_Parasetamol[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="injectParasetamol{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanInjectParasetamol" name="catatan_injectParasetamol">Suhu > 38</textarea>
                </td>
            </tr>
            <tr>
                <td>b. CAIRAN INFUS</td>
                <td>RL atau NaCl atau KaEN3B</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i < 5) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="infusNaCl{{ $i }}" value="1"
                            name="injeksi_NaCl[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="infusNaCl{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanInfusNaCl" name="catatan_infusNaCl"></textarea>
                </td>
            </tr>
            <tr>
                <td rowspan="2">c. OBAT ORAL</td>
                <td>Domperidon, metochlopramid, ondansetron</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="oralDompridon{{ $i }}" value="1"
                            name="oral_dompridon[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="oralDompridon{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanOralDompridon" name="catatan_oralDompridon">Bila muntah</textarea>
                </td>
            </tr>
            <tr>
                <td>Zinc: < 6 bulan 1x10 mg 10 hari, dan> 6 bulan 1x20 mg 10 hari</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i < 5) style="background-color: #95FFFF" @endif>
                        <input type="checkbox" id="oralZinc{{ $i }}" value="1"
                            name="oral_zinc[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="oralZinc{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanOralZinc" name="catatan_oralZinc">Varian</textarea>
                </td>
            </tr>
            <tr>
                <td>d. CAIRAN REHIDRASI ORAL</td>
                <td>Oralit 5-10 cc/kg BB / kali diare</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i < 5) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="rehidrasiOral{{ $i }}" value="1"
                            name="rehidrasi_oral[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="rehidrasiOral{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanRehidrasiOral" name="catatan_rehidrasiOral"></textarea>
                </td>
            </tr>
            <tr>
                <td>10. TATA LAKSANA/INTERVENSI</td>
                @for ($i = 0; $i < 9; $i++)
                    <td> </td>
                @endfor
            </tr>
            <tr>
                <td>a. TATA LAKSANA/INTERVENSI MEDIS</td>
                <td>Medikamentosa</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i < 5) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="tatmedMedika{{ $i }}" value="1"
                            name="intervensi_medika[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="tatmedMedika{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanTatmedMedika" name="catatan_tatmedMedika"></textarea>
                </td>
            </tr>
            <tr>
                <td rowspan="9">b. TATA LAKSANA/INTERVENSI KEPERAWATAN</td>
                <td>a. Manajemen Cairan</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i < 5) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="tatkepCairan{{ $i }}" value="1"
                            name="intervensi_cairan[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="tatkepCairan{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="9">
                    <textarea rows="20" class="form-control" id="catatanTatkepCairan" name="catatan_tatkepCairan">Mengaju pada NIC</textarea>
                </td>
            </tr>
            <tr>
                <td>b. Manajemen Diare</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i < 5) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="tatkepDiare{{ $i }}" value="1"
                            name="intervensi_diare[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="tatkepDiare{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>c. Monitoring cairan dan elektrolit</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i < 5) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="tatkepElektrolit{{ $i }}" value="1"
                            name="intervensi_elektrolit[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="tatkepElektrolit{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>d. Manajemen Demam</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i < 5) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="tatkepDemam{{ $i }}" value="1"
                            name="intervensi_demam[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="tatkepDemam{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>e. Manajemen Nutrisi</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i < 5) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="tatkepNutrisi{{ $i }}" value="1"
                            name="intervensi_nutrisi[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="tatkepNutrisi{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>f. Manajemen Nyeri</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i < 5) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="tatkepNyeri{{ $i }}" value="1"
                            name="intervensi_nyeri[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="tatkepNyeri{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>g. Pengawasan Kulit</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i < 5) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="tatkepKulit{{ $i }}" value="1"
                            name="intervensi_kulit[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="tatkepKulit{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>h. Resusitasi Cairan</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i < 5) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="tatkepResusitasi{{ $i }}" value="1"
                            name="intervensi_resusitasi[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="tatkepResusitasi{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>i. Pemasangan Infus</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i < 5) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="tatkepInfus{{ $i }}" value="1"
                            name="intervensi_infus[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="tatkepInfus{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>c. TATA LAKSANA/INTERVENSI GIZI</td>
                <td>Diet cair/saring/lunak/biasa secara bertahap. ASI diteruskan</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="tatgiziASI{{ $i }}" value="1"
                            name="intervensi_ASI[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="tatgiziASI{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanTatgiziASI" name="catatan_tatgiziASI">Bentuk makanan, kebutuhan zat gizi disesuaikan dengan usia dan kondisi klinis secara bertahap</textarea>
                </td>
            </tr>
            <tr>
                <td>d. TATA LAKSANA/INTERVENSI FARMASI</td>
                <td>Rekomendasi kepala DPJP</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="tatfarmDPJP{{ $i }}" value="1"
                            name="intervensi_dpjp[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="tatfarmDPJP{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanTatfarmDPJP" name="catatan_tatfarmDPJP">Sesuai dengan hasil monitoring</textarea>
                </td>
            </tr>
            <tr>
                <td>11. MONITORING & EVALUASI</td>
                @for ($i = 0; $i < 9; $i++)
                    <td> </td>
                @endfor
            </tr>
            <tr>
                <td>a. DOKTER DPJP</td>
                <td>Asesmen Ulang & Review Verifikasi Rencana Asuhan</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i < 5) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="monevDPJP{{ $i }}" value="1"
                            name="monev_dpjp[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="monevDPJP{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanMonevDPJP" name="catatan_monevDPJP">Monitor Perkembangan Pasien</textarea>
                </td>
            </tr>
            <tr>
                <td rowspan="6">b. KEPERAWATAN</td>
                <td>a. Monitoring Intake</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i < 5) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="monevkepIntake{{ $i }}" value="1"
                            name="monev_intake[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="monevkepIntake{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="6">
                    <textarea rows="16" class="form-control" id="catatanMonevkepIntake" name="catatan_monevkepIntake">Mengacu pada NOC</textarea>
                </td>
            </tr>
            <tr>
                <td>b. Monitoring tanda-tanda vital pasien</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i < 5) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="monevkepVital{{ $i }}" value="1"
                            name="monev_vital[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="monevkepVital{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>c. Monitoring status hidrasi pasien meliputi <span class="fst-italic">balance</span> cairan,
                    terapi intravena dan tanda-tanda dehidrasi</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i < 5) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="monevkepHidrasi{{ $i }}" value="1"
                            name="monev_hidrasi[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="monevkepHidrasi{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>d. Diare dikendalikan</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i < 5) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="monevkepKendali{{ $i }}" value="1"
                            name="monev_kendali[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="monevkepKendali{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>e. Eliminasi efektif</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i < 5) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="monevkepEliminasi{{ $i }}" value="1"
                            name="monev_eliminasi[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="monevkepEliminasi{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>f. Integritas kulit</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i < 5) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="monevkepKulit{{ $i }}" value="1"
                            name="monev_kulit[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="monevkepKulit{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td rowspan="2">c. GIZI</td>
                <td>Monitoring asupan makanan</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @elseif ($i === 4) style="background-color: #95FFFF" @endif>
                        <input type="checkbox" id="monevgiziMakanan{{ $i }}" value="1"
                            name="monev_makanan[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="monevgiziMakanan{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="2">
                    <textarea rows="5" class="form-control" id="catatanMonevgiziMakanan" name="catatan_monevgiziMakanan">
- Sesuai dengan masalah gizi dan tanda gejala yang akan dilihat kemajuannya

-Mengacu pada IDNT (International Dietetics & Nutrition Terminology)
                    </textarea>
                </td>
            </tr>
            <tr>
                <td>Monitoring Antropometri</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @elseif ($i === 4) style="background-color: #95FFFF" @endif>
                        <input type="checkbox" id="monevgiziAntropometri{{ $i }}" value="1"
                            name="monev_antropometri[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="monevgiziAntropometri{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td rowspan="3">d. FARMASI</td>
                <td>Monitoring Interaksi Obat</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i < 5) style="background-color: #95FFFF" @endif>
                        <input type="checkbox" id="monevfarmInteraksi{{ $i }}" value="1"
                            name="monev_interaksi[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="monevfarmInteraksi{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="3">
                    <textarea rows="6" class="form-control" id="catatanMonevfarmInteraksi" name="catatan_monevfarmInteraksi">
- Menyusun Software interaksi

-Dilanjutkan dengan intervensi farmasi sesuai hasil monitoring
                    </textarea>
                </td>
            </tr>
            <tr>
                <td>Monitoring Efek Samping Obat</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i < 5) style="background-color: #95FFFF" @endif>
                        <input type="checkbox" id="monevfarmEfsam{{ $i }}" value="1"
                            name="monev_efek[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="monevfarmEfsam{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>Pemantauan Terapi Obat</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i < 5) style="background-color: #95FFFF" @endif>
                        <input type="checkbox" id="monevfarmTerapi{{ $i }}" value="1"
                            name="monev_terapi[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="monevfarmTerapi{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>12. MOBILISASI / REHABILITASI</td>
                @for ($i = 0; $i < 9; $i++)
                    <td> </td>
                @endfor
            </tr>
            <tr>
                <td>a. MEDIS</td>
                <td> </td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="mobmed{{ $i }}" value="1"
                            name="mob_medis[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="mobmed{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="3">
                    <textarea rows="6" class="form-control" id="catatanMobmed" name="catatan_mobmed">Tahapan mobilisasi sesuai kondisi pasien</textarea>
                </td>
            </tr>
            <tr>
                <td>b. KEPERAWATAN</td>
                <td> </td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i < 5) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="mobkep{{ $i }}" value="1"
                            name="mob_keperawatan[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="mobkep{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>c. FISIOTERAPI</td>
                <td> </td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="mobfisio{{ $i }}" value="1"
                            name="mob_fisio[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="mobfisio{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>13. OUTCOME/HASIL</td>
                @for ($i = 0; $i < 9; $i++)
                    <td> </td>
                @endfor
            </tr>
            <tr>
                <td rowspan="2">a. MEDIS</td>
                <td>Diare &lt; 3x dengan ampas</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 4) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="hasmedDiare{{ $i }}" value="1"
                            name="hasil_diare[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="hasmedDiare{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanHasmedDiare" name="catatan_hasmedDiare"></textarea>
                </td>
            </tr>
            <tr>
                <td>Dehidrasi teratasi</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 4) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="hasmedDehidrasi{{ $i }}" value="1"
                            name="hasil_dehidrasi[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="hasmedDehidrasi{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanHasmedDehidrasi" name="catatan_hasmedDehidrasi"></textarea>
                </td>
            </tr>
            <tr>
                <td rowspan="3">b. KEPERAWATAN</td>
                <td>a. Keseimbangan Cairan</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 4) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="haskepSeimbang{{ $i }}" value="1"
                            name="hasil_seimbang[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="haskepSeimbang{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="3">
                    <textarea rows="6" class="form-control" id="catatanHasmedSeimbang" name="catatan_hasmedSeimbang">
- Mengacu pada NOC

- Dilakukan dalam 3 shift
                    </textarea>
                </td>
            </tr>
            <tr>
                <td>b. Komplikasi</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 4) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="haskepKomplikasi{{ $i }}" value="1"
                            name="hasil_komplikasi[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="haskepKomplikasi{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>c. NOC : 0802 Tanda-tanda vital</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 4) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="haskepVital{{ $i }}" value="1"
                            name="hasil_vital[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="haskepVital{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td rowspan="2">c. GIZI</td>
                <td>Asupan makanan >= 80%</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 4) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="hasgiziAsupan{{ $i }}" value="1"
                            name="hasil_asupan[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="hasgiziAsupan{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="2">
                    <textarea rows="5" class="form-control" id="catatanHasgiziAsupan" name="catatan_hasgiziAsupan">Status Gizi berdasarkan antropometri, biokimia, fisik/klinis</textarea>
                </td>
            </tr>
            <tr>
                <td>Optimalisasi Status Gizi</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 4) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="hasgiziStatus{{ $i }}" value="1"
                            name="hasil_status[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="hasgiziStatus{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td rowspan="2">d. FARMASI</td>
                <td>Terapi obat sesuai indikasi</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 4) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="hasfarmInd{{ $i }}" value="1"
                            name="hasil_terapi[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="hasfarmInd{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="2">
                    <textarea rows="5" class="form-control" id="catatanHasfarmInd" name="catatan_hasfarmInd">Meningkatkan kualitas hidup pasien</textarea>
                </td>
            </tr>
            <tr>
                <td>Obat rasional</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 4) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="hasfarmObat{{ $i }}" value="1"
                            name="hasil_obat[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="hasfarmObat{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td rowspan="3">14. KRITERIA PULANG</td>
                <td>Tanda Vital Normal</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 4) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="pulangNormal{{ $i }}" value="1"
                            name="pulang_normal[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="pulangNormal{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="2">
                    <textarea rows="5" class="form-control" id="catatanPulangNormal" name="catatan_pulangNormal">Status pasien/tanda vital sesuai dengan PPK</textarea>
                </td>
            </tr>
            <tr>
                <td>Sesuai NOC</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 4) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="pulangNOC{{ $i }}" value="1"
                            name="pulang_NOC[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="pulangNOC{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td> </td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="pulangVarian{{ $i }}" value="1"
                            name="pulang_varian[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="pulangVarian{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanPulangVarian" name="catatan_pulangVarian">Varian</textarea>
                </td>
            </tr>
            <tr>
                <td rowspan="3">15. RENCANA PULANG/EDUKASI PELAYANAN LANJUTAN</td>
                <td>Resume Medis dan Keperawatan</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 4) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="rencanaResume{{ $i }}" value="1"
                            name="rencana_resume[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="rencanaResume{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="3">
                    <textarea rows="5" class="form-control" id="catatanRencanaResume" name="catatan_rencanaResume">Pasien membawa Resume Perawatan/Surat Rujukan/Surat Kontrol/Homecare saat pulang</textarea>
                </td>
            </tr>
            <tr>
                <td>Penjelasan diberikan sesuai dengan keadaan umum pasien</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 4) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="rencanaPenjelasan{{ $i }}" value="1"
                            name="rencana_penjelasan[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="rencanaPenjelasan{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>Surat pengantar kontrol</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 4) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="rencanaSurat{{ $i }}" value="1"
                            name="rencana_surat[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="rencanaSurat{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>VARIAN</td>
                @for ($i = 0; $i < 9; $i++)
                    <td> </td>
                @endfor
            </tr>
        </tbody>
    </table>
</div>
