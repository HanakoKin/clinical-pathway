<div class="table-responsive">
    <table id="" class="table table-bordered display margin-top-10">
        <thead class="text-center">
            <tr>
                <th rowspan="5" class="min-w-100">KEGIATAN</th>
                <th rowspan="5" class="min-w-50">URAIAN KEGIATAN</th>
                <th colspan="5">HARI PENYAKIT </th>
                <th rowspan="5" class="min-w-250">KETERANGAN</th>
            </tr>
            <tr>
                @for ($i = 1; $i <= 5; $i++)
                    <th>{{ $i }}</th>
                @endfor
            </tr>
            <tr>
                @for ($i = 0; $i < 5; $i++)
                    <th class="text-center p-1">
                        <input type="checkbox" id="hp{{ $i }}" value="1"
                            name="hari_penyakit[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="hp{{ $i }}"></label>
                    </th>
                @endfor
            </tr>
            <tr>
                <th colspan="5">HARI RAWAT</th>
            </tr>
            <tr>
                @for ($i = 0; $i < 5; $i++)
                    <th>{{ $i + 1 }}</th>
                @endfor
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1. ASESMEN AWAL</td>
                @for ($i = 0; $i < 7; $i++)
                    <td>
                    </td>
                @endfor
            </tr>
            <tr>
                <td rowspan="2">a. ASESMEN AWAL MEDIS</td>
                <td>Dokter IGD</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="asesDokIgd{{ $i }}" value="1"
                            name="asesment_igd[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="asesDokIgd{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanAsesDokIgd" name="catatan_asesDokIgd">Pasien masuk melalui IGD</textarea>
                </td>
            </tr>
            <tr>
                <td>Dokter Penanggung Jawab Pasien (DPJP) / Dokter Spesialis Konsultan</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="asesDokSpe{{ $i }}" value="1"
                            name="asesment_spesialis[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="asesDokSpe{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanAsesDokSpe" name="catatan_asesDokSpe">Pasien masuk melalui RJ</textarea>
                </td>
            </tr>
            <tr>
                <td>b. ASESMEN AWAL KEPERAWATAN</td>
                <td>
                    <p>Perawat Primer :</p>
                    <p>Kondisi umum, tingkat kesadaran, tanda-tanda vital,riwayat alergi, skrining gizi, nyeri</p>
                </td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="asesPerPri{{ $i }}" value="1"
                            name="asesment_primer[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="asesPerPri{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanAsesPer" name="catatan_asesPer">Dilanjutkan dengan asesmen bio, psiko, sosial, spiritual, dan budaya</textarea>
                </td>
            </tr>
            <tr>
                <td rowspan="3">2. LABORATORIUM</td>
                <td>Darah Lengkap</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="labDarah{{ $i }}" value="1"
                            name="lab_darah[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="labDarah{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanLabDarah" name="catatan_labDarah"></textarea>
                </td>
            </tr>
            <tr>
                <td>Elektrolit Darah (Natrium, Kalium, Klorida)</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="labElektrolit{{ $i }}" value="1"
                            name="lab_elektrolit[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="labElektrolit{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanLabElektrolit" name="catatan_labElektrolit"></textarea>
                </td>
            </tr>
            <tr>
                <td>Ureum dan Creatinin</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="labUreum{{ $i }}" value="1"
                            name="lab_ureum[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="labUreum{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanLabUreum" name="catatan_labUreum"></textarea>
                </td>
            </tr>
            <tr>
                <td rowspan="2">3. RADIOLOGI/IMAGING</td>
                <td>Foto toraks PA</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="radFoto{{ $i }}" value="1"
                            name="radio_foto[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="radFoto{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanRadFoto" name="catatan_radFoto"></textarea>
                </td>
            </tr>
            <tr>
                <td>USG</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #95FFFF" @endif>
                        <input type="checkbox" id="radUSG{{ $i }}" value="1"
                            name="radio_USG[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="radUSG{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanRadUSG" name="catatan_radUSG"></textarea>
                </td>
            </tr>
            <tr>
                <td rowspan="2">4. VARIAN</td>
                <td>PATOLOGI ANATOMI</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="varPato{{ $i }}" value="1"
                            name="varian_pato[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="varPato{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanVarPato" name="catatan_varPato"></textarea>
                </td>
            </tr>
            <tr>
                <td>EKG</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #95FFFF" @endif>
                        <input type="checkbox" id="varEkg{{ $i }}" value="1"
                            name="varian_ekg[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="varEkg{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanVarEkg" name="catatan_varEkg"></textarea>
                </td>
            </tr>
            <tr>
                <td>5. KONSULTASI</td>
                <td></td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #95FFFF" @endif>
                        <input type="checkbox" id="konsul{{ $i }}" value="1"
                            name="konsultasi[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="konsul{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanKonsul" name="catatan_konsul"></textarea>
                </td>
            </tr>
            <tr>
                <td>6. ASESMEN LANJUTAN</td>
                @for ($i = 0; $i < 7; $i++)
                    <td>
                    </td>
                @endfor
            </tr>
            <tr>
                <td rowspan="2">a. ASESMEN MEDIS</td>
                <td>Dokter Penanggung Jawab Pasien (DPJP) / Dokter Spesialis Konsultan</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1" style="background-color: #FEA8B9">
                        <input type="checkbox" id="asesDPJP{{ $i }}" value="1"
                            name="ases_DPJP[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="asesDPJP{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanAsesDPJP" name="catatan_asesDPJP">Visit harian/Follow up</textarea>
                </td>
            </tr>
            <tr>
                <td>Dokter non DPJP/dokter Ruangan</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1" style="background-color: #95FFFF">
                        <input type="checkbox" id="asesNonDPJP{{ $i }}" value="1"
                            name="ases_nonDPJP[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="asesNonDPJP{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanAsesNonDPJP" name="catatan_asesNonDPJP">Atas Indikasi/Emergency</textarea>
                </td>
            </tr>
            <tr>
                <td>b. ASESMEN KEPERAWATAN</td>
                <td>Perawat Penanggung Jawab</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="asesPPJ{{ $i }}" value="1"
                            name="ases_PPJ[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="asesPPJ{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanAsesPPJ" name="catatan_asesPPJ">Dilakukan dalam 3 shift</textarea>
                </td>
            </tr>
            <tr>
                <td>c. ASESMEN GIZI</td>
                <td>Skrining Gizi</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 2) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="asesGizi{{ $i }}" value="1"
                            name="ases_gizi[ {{ $i }} ]" />
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
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1" style="background-color: #FEA8B9">
                        <input type="checkbox" id="asesResep{{ $i }}" value="1"
                            name="ases_resep[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="asesResep{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="2">
                    <textarea rows="5" class="form-control" id="catatanAsesResep" name="catatan_asesResep">Dilanjutkan dengan intervensi farmasi yang sesuai hasil Telaah dan Rekonsiliasi obat</textarea>
                </td>
            </tr>
            <tr>
                <td>Rekonsiliasi Obat</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @else style="background-color: #95FFFF" @endif>
                        <input type="checkbox" id="asesObat{{ $i }}" value="1"
                            name="ases_obat[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="asesObat{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>7. DIAGNOSIS</td>
                @for ($i = 0; $i < 7; $i++)
                    <td>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>a. DIAGNOSIS MEDIS</td>
                <td>Chemotherapy for Cancer</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="diagChemotherapy{{ $i }}" value="1"
                            name="diagnosa_medis[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="diagChemotherapy{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanDiagChemotherapy" name="catatan_diagChemotherapy">Kode ICD-10: Z51.11</textarea>
                </td>
            </tr>
            <tr>
                <td rowspan="5">b. DIAGNOSIS KEPERAWATAN</td>
                <td>a. Kode : 0076 Nausea</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1" style="background-color: #FEA8B9">
                        <input type="checkbox" id="diagNausea{{ $i }}" value="1"
                            name="diagnosa_nausea[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="diagNausea{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="5">
                    <textarea rows="10" class="form-control" id="catatanDiagNausea" name="catatan_diagNausea">Masalah keperawatan yang dijumpai setiap hari. Dibuat oleh perawat penanggung jawab dan mengacu pada SDKI</textarea>
                </td>
            </tr>
            <tr>
                <td>b. Kode : 0083 Gangguan Citra Tubuh</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1" style="background-color: #FEA8B9">
                        <input type="checkbox" id="diagGangguan{{ $i }}" value="1"
                            name="diagnosa_gangguan[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="diagGangguan{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>c. Kode : 0080 Ansietas</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1" style="background-color: #FEA8B9">
                        <input type="checkbox" id="diagAnsietas{{ $i }}" value="1"
                            name="diagnosa_ansietas[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="diagAnsietas{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>d. Kode : 0078 Nyeri Kronis</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1" style="background-color: #FEA8B9">
                        <input type="checkbox" id="diagNyeri{{ $i }}" value="1"
                            name="diagnosa_nyeri[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="diagNyeri{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>e. Kode : 0056 Intoleransi Aktivitas</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1" style="background-color: #FEA8B9">
                        <input type="checkbox" id="diagIntoleransi{{ $i }}" value="1"
                            name="diagnosa_intoleransi[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="diagIntoleransi{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td rowspan="2">c. DIAGNOSIS GIZI</td>
                <td>Tidak adekuat masukan makan berkaitan dengan tidak nafsu makan, mual, dan muntah ditandai dengan
                    asupan energi protein kurang dari kebutuhan</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 2) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="diagAdekuat{{ $i }}" value="1"
                            name="diagnosa_adekuat[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="diagAdekuat{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="2">
                    <textarea rows="12" class="form-control" id="catatanDiagAdekuat" name="catatan_diagAdekuat">Sesuai dengan data asesmen, kemungkinan saja ada diagnosis lain atau diagnosis berubah selama perawatan</textarea>
                </td>
            </tr>
            <tr>
                <td>Malnutrisi berkaitan dengan asupan makan yang kurang ditandai dengan berat badan yang menurun IMT
                    dibawah standar normal dan terlihat kehilangan massa lemak dan massa otot</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 2) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="diagMalnutrisi{{ $i }}" value="1"
                            name="diagnosa_malnutrisi[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="diagMalnutrisi{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td rowspan="4">8. DISCHARGE PLANNING</td>
                <td>Edukasi Kondisi Pasien</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1" style="background-color: #FEA8B9">
                        <input type="checkbox" id="disPlanKondisi{{ $i }}" value="1"
                            name="displan_kondisi[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="disPlanKondisi{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="4">
                    <textarea rows="9" class="form-control" id="catatanDisPlanKondisi" name="catatan_disPlanKondisi">Program pendidikan pasien dan keluarga</textarea>
                </td>
            </tr>
            <tr>
                <td>Edukasi rencana Kemoterapi</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1" style="background-color: #FEA8B9">
                        <input type="checkbox" id="disPlanKemoterapi{{ $i }}" value="1"
                            name="displan_kemoterapi[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="disPlanKemoterapi{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>Edukasi obat-obatan rutin</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1" style="background-color: #FEA8B9">
                        <input type="checkbox" id="disPlanObat{{ $i }}" value="1"
                            name="displan_obat[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="disPlanObat{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>Edukasi rencana tatalaksana lanjutan dan kontrol</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1" style="background-color: #FEA8B9">
                        <input type="checkbox" id="disPlanTatalaksana{{ $i }}" value="1"
                            name="displan_tatalaksana[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="disPlanTatalaksana{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>9. EDUKASI TERINTEGRASI</td>
                @for ($i = 0; $i < 7; $i++)
                    <td>
                    </td>
                @endfor
            </tr>
            <tr>
                <td rowspan="3">a. EDUKASI/INFORMASI MEDIS</td>
                <td>Penjelasan Diagnosis</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="emedDiag{{ $i }}" value="1"
                            name="edukasi_diagnosis[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="emedDiag{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="3">
                    <textarea rows="6" class="form-control" id="catatanEmedDiag" name="catatan_emedDiag">Oleh semua pemberi asuhan berdasarkan kebutuhan dan juga berdasarkan Discharge Planning</textarea>
                </td>
            </tr>
            <tr>
                <td>Rencana terapi</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="emedTerapi{{ $i }}" value="1"
                            name="edukasi_terapi[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="emedTerapi{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>Informed Consent</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="emedConsent{{ $i }}" value="1"
                            name="edukasi_consent[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="emedConsent{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>b. EDUKASI DAN KONSELING GIZI</td>
                <td>Menginformasikan status gizi, jenis diet, tujuan diet, bentuk makanan</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 2) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="egiz{{ $i }}" value="1"
                            name="edukasi_gizi[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="egiz{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanEgiz" name="catatan_egiz">Edukasi gizi dilakukan saat awal masuk dan atau pada hari ke 1/hari ke 2</textarea>
                </td>
            </tr>
            <tr>
                <td>c. EDUKASI KEPERAWATAN</td>
                <td>Pentingnya dukungan keluarga</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="ekepKeluarga{{ $i }}" value="1"
                            name="edukasi_keluarga[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="ekepKeluarga{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanEkepKeluarga" name="catatan_ekepKeluarga">Pengisian formulir informasi dan edukasi terintegrasi oleh pasien dan atau keluarga</textarea>
                </td>
            </tr>
            <tr>
                <td rowspan="2">d. EDUKASI FARMASI</td>
                <td>Informasi Obat</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0 || $i === 4) style="background-color: #FEA8B9" @else style="background-color: #95FFFF" @endif>
                        <input type="checkbox" id="efarmInf{{ $i }}" value="1"
                            name="edukasi_info[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="efarmInf{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="2">
                    <textarea rows="5" class="form-control" id="catatanEfarmInf" name="catatan_efarmInf">Meningkatkan kepatuhan pasien meminum/menggunakan obat</textarea>
                </td>
            </tr>
            <tr>
                <td>Konseling Obat</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0 || $i === 4) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="efarmKons{{ $i }}" value="1"
                            name="edukasi_konseling[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="efarmKons{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>PENGISIAN FORMULIR INFORMASI DAN EDUKASI TERINTEGRASI</td>
                <td>Lembar Edukasi Terintegrasi</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #95FFFF" @endif>
                        <input type="checkbox" id="lemEdTer{{ $i }}" value="1"
                            name="lembar_edukasi[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="lemEdTer{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanLemEdTer" name="catatan_lemEdTer">DTT keluarga/pasien</textarea>
                </td>
            </tr>
            <tr>
                <td>10. TERAPI MEDIKAMENTOSA</td>
                @for ($i = 0; $i < 7; $i++)
                    <td>
                    </td>
                @endfor
            </tr>
            <tr>
                <td rowspan="3">a. TINDAKAN</td>
                <td>
                    <p>Pre Kemoterapi</p>
                    <ul>
                        <li>Infus kristaliod (ex. RL)</li>
                        <li>Antiemetik (ex. Ondansetron)</li>
                        <li>H2-receptor antagonist (ex. Cimetidine) atau PPI (ex. Omeprazole)</li>
                        <li>Antihistamin (ex. Diphenhydramine Hydrochloride)</li>
                    </ul>
                </td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="tindakanPreKemo{{ $i }}" value="1"
                            name="tindakan_prekemo[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="tindakanPreKemo{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="10" class="form-control" id="catatanTindakanPreKemo" name="catatan_tindakanPreKemo"></textarea>
                </td>
            </tr>
            <tr>
                <td>Kemoterapi</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="tindakanKemo{{ $i }}" value="1"
                            name="tindakan_kemp[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="tindakanKemo{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanTindakanKemo" name="catatan_tindakanKemo"></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Post Kemoterapi</p>
                    <ul>
                        <li>Antiemetik (ex. Ondansetron)</li>
                    </ul>
                </td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="tindakanPostKemo{{ $i }}" value="1"
                            name="tindakan_postkemo[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="tindakanPostKemo{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanTindakanPostKemo" name="catatan_tindakanPostKemo"></textarea>
                </td>
            </tr>
            <tr>
                <td rowspan="3">b. TERAPI PASIEN PULANG</td>
                <td>Omeprazole</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1" style="background-color: #FEA8B9">
                        <input type="checkbox" id="terapiOmeprazole{{ $i }}" value="1"
                            name="terapi_omeprazole[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="terapiOmeprazole{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanTerapiOmeprazole" name="catatan_terapiOmeprazole"></textarea>
                </td>
            </tr>
            <tr>
                <td>Curcuma</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1" style="background-color: #FEA8B9">
                        <input type="checkbox" id="terapiCurcuma{{ $i }}" value="1"
                            name="terapi_curcuma[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="terapiCurcuma{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanTerapiCurcuma" name="catatan_terapiCurcuma"></textarea>
                </td>
            </tr>
            <tr>
                <td>Ondansetron</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1" style="background-color: #FEA8B9">
                        <input type="checkbox" id="terapiOndansetron{{ $i }}" value="1"
                            name="terapi_ondansetron[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="terapiOndansetron{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanTerapiOndansetron" name="catatan_terapiOndansetron"></textarea>
                </td>
            </tr>
            <tr>
                <td>11. TATA LAKSANA/INTERVENSI</td>
                @for ($i = 0; $i < 7; $i++)
                    <td>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>a. TATA LAKSANA/INTERVENSI MEDIS</td>
                <td>Medikamentosa</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 3) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="tatmedMedika{{ $i }}" value="1"
                            name="intervensi_medika[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="tatmedMedika{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanTatmedMedika" name="catatan_tatmedMedika"></textarea>
                </td>
            </tr>
            <tr>
                <td rowspan="5">b. TATA LAKSANA/INTERVENSI KEPERAWATAN</td>
                <td>a. SIKI : I.08238 Manajemen Nyeri</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 3) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="tatkepNyeri{{ $i }}" value="1"
                            name="intervensi_nyeri[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="tatkepNyeri{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="5">
                    <textarea rows="10" class="form-control" id="catatanTatkepNyeri" name="catatan_tatkepNyeri">Mengaju pada SIKI</textarea>
                </td>
            </tr>
            <tr>
                <td>b. SIKI : I.05178 Manajemen Energi</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 3) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="tatkepEnergi{{ $i }}" value="1"
                            name="intervensi_energi[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="tatkepEnergi{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>c. SIKI : I.03117 Manajemen Mual</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 3) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="tatkepMual{{ $i }}" value="1"
                            name="intervensi_mual[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="tatkepMual{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>d. SIKI : I.09134 Reduksi Ansietas</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 3) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="tatkepAnsietas{{ $i }}" value="1"
                            name="intervensi_ansietas[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="tatkepAnsietas{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>e. SIKI : I.09305 Promosi Citra Tubuh</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 3) style="background-color: #95FFFF" @endif>
                        <input type="checkbox" id="tatkepCitra{{ $i }}" value="1"
                            name="intervensi_citra[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="tatkepCitra{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>c. TATA LAKSANA/INTERVENSI GIZI</td>
                <td>Memberikan makanan berdasarkan kebutuhan gizi dalam bentuk cair, saring, lunak, biasa, secara
                    bertahap sesuai dengan kondisi klinis, dengan jenis diet Tinggi Kalori, Tinggi Protein</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1" style="background-color: #FEA8B9">
                        <input type="checkbox" id="tatgizi{{ $i }}" value="1"
                            name="intervensi_gizi[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="tatgizi{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanTatgizi" name="catatan_tatgizi"></textarea>
                </td>
            </tr>
            <tr>
                <td>d. TATA LAKSANA/INTERVENSI FARMASI</td>
                <td>Rekomendasi kepala DPJP</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1" style="background-color: #95FFFF">
                        <input type="checkbox" id="tatfarmDPJP{{ $i }}" value="1"
                            name="intervensi_dpjp[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="tatfarmDPJP{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanTatfarmDPJP" name="catatan_tatfarmDPJP">Sesuai dengan hasil monitoring</textarea>
                </td>
            </tr>
            <tr>
                <td>12. MONITORING & EVALUASI (monitor perkembangan pasien)</td>
                @for ($i = 0; $i < 7; $i++)
                    <td>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>a. DOKTER DPJP</td>
                <td>Asesmen Ulang & Review Verifikasi Rencana Asuhan</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1" style="background-color: #FEA8B9">
                        <input type="checkbox" id="monevDPJP{{ $i }}" value="1"
                            name="monev_dpjp[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="monevDPJP{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanMonevDPJP" name="catatan_monevDPJP">Monitor perkembangan pasien</textarea>
                </td>
            </tr>
            <tr>
                <td rowspan="5">b. KEPERAWATAN</td>
                <td>a. Monitoring vital sign pasien</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1" style="background-color: #FEA8B9">
                        <input type="checkbox" id="monevkepVital{{ $i }}" value="1"
                            name="monev_vital[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="monevkepVital{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="5">
                    <textarea rows="10" class="form-control" id="catatanMonevkepVital" name="catatan_monevkepVital">Mengacu pada SKLI</textarea>
                </td>
            </tr>
            <tr>
                <td>b. Monitoring mual</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1" style="background-color: #FEA8B9">
                        <input type="checkbox" id="monevkepMual{{ $i }}" value="1"
                            name="monev_mual[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="monevkepMual{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>c. Monitoring nutrisi</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1" style="background-color: #FEA8B9">
                        <input type="checkbox" id="monevkepNutrisi{{ $i }}" value="1"
                            name="monev_nutrisi[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="monevkepNutrisi{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>d. Monitoring skala nyeri</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1" style="background-color: #FEA8B9">
                        <input type="checkbox" id="monevkepNyeri{{ $i }}" value="1"
                            name="monev_nyeri[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="monevkepNyeri{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>e. Monitoring pemenuhan ADL</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1" style="background-color: #FEA8B9">
                        <input type="checkbox" id="monevkepADL{{ $i }}" value="1"
                            name="monev_ADL[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="monevkepADL{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td rowspan="2">c. GIZI</td>
                <td>Monitoring asupan makanan</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1" style="background-color: #FEA8B9">
                        <input type="checkbox" id="monevgiziMakanan{{ $i }}" value="1"
                            name="monev_makanan[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="monevgiziMakanan{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanMonevgiziMakanan" name="catatan_monevgiziMakanan">Sesuai dengan masalah gizi dan tanda gejala yang akan dilihat kemajuannya. Monev pada hari ke 4 atau ke 5 kecuali asupan makanan</textarea>
                </td>
            </tr>
            <tr>
                <td>Monitoring Antropometri</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 2) style="background-color: #95FFFF" @endif>
                        <input type="checkbox" id="monevgiziAntropometri{{ $i }}" value="1"
                            name="monev_antropometri[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="monevgiziAntropometri{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanMonevgiziAntropometri"
                        name="catatan_monevgiziAntropometri"></textarea>
                </td>
            </tr>
            <tr>
                <td rowspan="3">d. FARMASI</td>
                <td>Monitoring efektivitas obat</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1" style="background-color: #FEA8B9">
                        <input type="checkbox" id="monevfarmEfektiv{{ $i }}" value="1"
                            name="monev_efektiv[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="monevfarmEfektiv{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="3">
                    <textarea rows="6" class="form-control" id="catatanMonevfarmEfektiv" name="catatan_monevfarmEfektiv">Dilanjutkan dengan intervensi farmasi yang sesuai hasil monitoring</textarea>
                </td>
            </tr>
            <tr>
                <td>Monitoring interaksi obat</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1" style="background-color: #FEA8B9">
                        <input type="checkbox" id="monevfarmInteraksi{{ $i }}" value="1"
                            name="monev_interaksi[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="monevfarmInteraksi{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>Monitoring efek samping obat</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1" style="background-color: #FEA8B9">
                        <input type="checkbox" id="monevfarmEfek{{ $i }}" value="1"
                            name="monev_efek[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="monevfarmEfek{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>13. MOBILISASI/REHABILITASI</td>
                @for ($i = 0; $i < 7; $i++)
                    <td>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>a. MEDIS</td>
                <td></td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1" style="background-color: #95FFFF">
                        <input type="checkbox" id="mobmed{{ $i }}" value="1"
                            name="mob_medis[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="mobmed{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="3">
                    <textarea rows="6" class="form-control" id="catatanMobmed" name="catatan_mobmed">Tahapan mobilisasi sesuai kondisi pasien</textarea>
                </td>
            </tr>
            <tr>
                <td>b. KEPERAWATAN</td>
                <td>Dibantu sebagian/mandiri</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1" style="background-color: #95FFFF">
                        <input type="checkbox" id="mobkep{{ $i }}" value="1"
                            name="mob_keperawatan[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="mobkep{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>c. FISIOTERAPI</td>
                <td></td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1" style="background-color: #95FFFF">
                        <input type="checkbox" id="mobfisio{{ $i }}" value="1"
                            name="mob_fisio[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="mobfisio{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>14. OUTCOME/HASIL</td>
                @for ($i = 0; $i < 7; $i++)
                    <td>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>a. MEDIS</td>
                <td></td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 4) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="hasilMedis{{ $i }}" value="1"
                            name="hasil_medis[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="hasilMedis{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanHasilMedis" name="catatan_hasilMedis">Tahapan mobilisasi sesuai kondisi pasien</textarea>
                </td>
            </tr>
            <tr>
                <td rowspan="3">b. KEPERAWATAN</td>
                <td>a. Tanda vital dalam batas normal</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1" style="background-color: #FEA8B9">
                        <input type="checkbox" id="haskepVital{{ $i }}" value="1"
                            name="hasil_vital[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="haskepVital{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanHaskepVital" name="catatan_haskepVital">Mengacu pada SKLI</textarea>
                </td>
            </tr>
            <tr>
                <td>b. Mual terminimalisir</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1" style="background-color: #FEA8B9">
                        <input type="checkbox" id="haskepMual{{ $i }}" value="1"
                            name="hasil_mual[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="haskepMual{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanHaskepMual" name="catatan_haskepMual"></textarea>
                </td>
            </tr>
            <tr>
                <td>c. Nyeri berkurang</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1" style="background-color: #FEA8B9">
                        <input type="checkbox" id="haskepNyeri{{ $i }}" value="1"
                            name="hasil_nyeri[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="haskepNyeri{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanHaskepNyeri" name="catatan_haskepNyeri">Dilakukan dalam 3 shift</textarea>
                </td>
            </tr>
            <tr>
                <td rowspan="2">c. GIZI</td>
                <td>Asupan makanan >= 80%</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 4) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="hasgiziAsupan{{ $i }}" value="1"
                            name="hasil_asupan[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="hasgiziAsupan{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="2">
                    <textarea rows="5" class="form-control" id="catatanHasgiziAsupan" name="catatan_hasgiziAsupan">Status Gizi berdasarkan antropometri, biokimia, fisik/klinis</textarea>
                </td>
            </tr>
            <tr>
                <td>Optimalisasi Status Gizi</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 4) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="hasgiziStatus{{ $i }}" value="1"
                            name="hasil_status[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="hasgiziStatus{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td rowspan="2">d. FARMASI</td>
                <td>Terapi obat sesuai indikasi</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1" style="background-color: #FEA8B9">
                        <input type="checkbox" id="hasgiziTerapi{{ $i }}" value="1"
                            name="hasil_terapi[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="hasgiziTerapi{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="2">
                    <textarea rows="5" class="form-control" id="catatanHasgiziTerapi" name="catatan_hasgiziTerapi">Meningkatkan kualitas hidup pasien</textarea>
                </td>
            </tr>
            <tr>
                <td>Obat rasional</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1" style="background-color: #FEA8B9">
                        <input type="checkbox" id="hasgiziRasional{{ $i }}" value="1"
                            name="hasil_rasional[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="hasgiziRasional{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td rowspan="2">15. KRITERIA PULANG</td>
                <td>Umum: hemodinamik stabil, keluhan berkurang atau hilang</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 4) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="pulangUmum{{ $i }}" value="1"
                            name="pulang_umum[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="pulangUmum{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="2">
                    <textarea rows="5" class="form-control" id="catatanPulangUmum" name="catatan_pulangUmum">Status pasien/tanda vital sesuai dengan PPK</textarea>
                </td>
            </tr>
            <tr>
                <td>Khusus: tidak ada komplikasi</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 4) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="pulangKhusus{{ $i }}" value="1"
                            name="pulang_khusus[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="pulangKhusus{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td rowspan="3">
                    16. RENCANA PULANG/EDUKASI PELAYANAN LANJUTAN
                </td>
                <td>Resume Medis dan Keperawatan</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 4) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="rencanaResume{{ $i }}" value="1"
                            name="rencana_resume[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="rencanaResume{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="3">
                    <textarea rows="6" class="form-control" id="catatanRencanaResume" name="catatan_rencanaResume">Pasien membawa Resume Perawatan/Surat Rujukan/Surat Kontrol/Homecare saat pulang</textarea>
                </td>
            </tr>
            <tr>
                <td>Penjelasan diberikan sesuai dengan keadaan umum pasien</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 4) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="rencanaPenjelasan{{ $i }}" value="1"
                            name="rencana_penjelasan[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="rencanaPenjelasan{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>Surat pengantar kontrol</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 4) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="rencanaSurat{{ $i }}" value="1"
                            name="rencana_surat[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="rencanaSurat{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>VARIAN</td>
                @for ($i = 0; $i < 7; $i++)
                    <td>
                    </td>
                @endfor
            </tr>
        </tbody>
    </table>
</div>
