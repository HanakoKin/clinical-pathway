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
                <td>Dokter Spesialis</td>
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
                    Perawat Primer :
                    <p>Kondisi umum, tingkat kesadaran, tanda-tanda vital,
                        riwayat alergi, skrining gizi, nyeri</p>
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
                <td rowspan="8">2. LABORATORIUM</td>
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
                    <textarea rows="3" class="form-control" id="catatanLabDarah" name="catatan_labDarah">Hemoglobin tiap 1 bulan</textarea>
                </td>
            </tr>
            <tr>
                <td>Elektrolit darah (Natrium, Kalium, Klorida, Kalsium, Fosfor)</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="labElektrolit{{ $i }}" value="1"
                            name="lab_elektrolit[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="labElektrolit{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanLabElektrolit" name="catatan_labElektrolit">Pertama kali HD dan setiap 3 bulan</textarea>
                </td>
            </tr>
            <tr>
                <td>Ureum, Creatinin, dan eGFR</td>
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
                <td>HbsAg, Anti HCV, HIV</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="labHCV{{ $i }}" value="1"
                            name="lab_hcv[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="labHCV{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanLabHCV" name="catatan_labHCV">Pertama kali HD dan dalam 6 bulan</textarea>
                </td>
            </tr>
            <tr>
                <td>PT, APTT</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="labPT{{ $i }}" value="1"
                            name="lab_pt[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="labPT{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanLabPT" name="catatan_labPT"></textarea>
                </td>
            </tr>
            <tr>
                <td>Magnesium (Mg)</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #95FFFF" @endif>
                        <input type="checkbox" id="labMagnesium{{ $i }}" value="1"
                            name="lab_magnesium[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="labMagnesium{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanLabMagnesium" name="catatan_labMagnesium">Pemeriksaan khusus pada pasien aritmia, diperiksa setiap tahun</textarea>
                </td>
            </tr>
            <tr>
                <td>Serum Iron, TIBC, Ferritin</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #95FFFF" @endif>
                        <input type="checkbox" id="labTIBC{{ $i }}" value="1"
                            name="lab_tibc[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="labTIBC{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanLabTIBC" name="catatan_labTIBC">Peserta yang menjalani HD rutin dengan anemia renal</textarea>
                </td>
            </tr>
            <tr>
                <td>PTH</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #95FFFF" @endif>
                        <input type="checkbox" id="labPTH{{ $i }}" value="1"
                            name="lab_pth[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="labPTH{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanLabPTH" name="catatan_labPTH">Setiap tahun</textarea>
                </td>
            </tr>
            <tr>
                <td>3. RADIOLOGI/IMAGING</td>
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
                    <textarea rows="3" class="form-control" id="catatanRadFoto" name="catatan_radFoto">Pasien Pertama kali HD</textarea>
                </td>
            </tr>
            <tr>
                <td rowspan="2">4. VARIAN</td>
                <td>EKG / Echocardiogram</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="varEKG{{ $i }}" value="1"
                            name="var_ekg[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="varEKG{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanVarEKG" name="catatan_varEKG">Pasien Pertama kali HD dan setiap 6 bulan</textarea>
                </td>
            </tr>
            <tr>
                <td>Echocardiogram</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #95FFFF" @endif>
                        <input type="checkbox" id="varEcho{{ $i }}" value="1"
                            name="var_echo[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="varEcho{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanVarEcho" name="catatan_varEcho">Setiap 3 tahun atau setiap tahun bila ada heart failure</textarea>
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
                    <textarea rows="3" class="form-control" id="catatanKonsul" name="catatan_konsul">Varian</textarea>
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
                <td>Dokter DPJP</td>
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
                <td rowspan="2">a. DIAGNOSIS MEDIS</td>
                <td>AKI dd/ Akut on CKD</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="diagAKI{{ $i }}" value="1"
                            name="diagnosa_aki[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="diagAKI{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanDiagAKI" name="catatan_diagAKI">Kode ICD-10: N17.9</textarea>
                </td>
            </tr>
            <tr>
                <td>End Stage Renal Disease</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="diagEnd{{ $i }}" value="1"
                            name="diagnosa_end[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="diagEnd{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanDiagEnd" name="catatan_diagEnd">Kode ICD-10: N18.6</textarea>
                </td>
            </tr>
            <tr>
                <td rowspan="10">b. DIAGNOSIS KEPERAWATAN</td>
                <td>a. Kode : 0005 Pola Napas Tidak Efektif</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 3) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="diagNapas{{ $i }}" value="1"
                            name="diagnosa_napas[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="diagNapas{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="10">
                    <textarea rows="24" class="form-control" id="catatanDiagNapas" name="catatan_diagNapas">Masalah keperawatan yang dijumpai setiap hari. Dibuat oleh perawat penanggung jawab</textarea>
                </td>
            </tr>
            <tr>
                <td>b. Kode : 0016 Risiko Perfusi Renal Tidak Efektif</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 3) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="diagPerfusi{{ $i }}" value="1"
                            name="diagnosa_perfusi[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="diagPerfusi{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>c. Kode : 0022 Hipervolemia</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 3) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="diagHipervolemia{{ $i }}" value="1"
                            name="diagnosa_hipervolemia[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="diagHipervolemia{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>d. Kode : 0019 Defisit Nutrisi</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 3) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="diagNutrisi{{ $i }}" value="1"
                            name="diagnosa_nutrisi[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="diagNutrisi{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>e. Kode : 0076 Nausea</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 3) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="diagNausea{{ $i }}" value="1"
                            name="diagnosa_nausea[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="diagNausea{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>f. Kode : 0056 Intoleransi Aktivitas</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 3) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="diagAktivitas{{ $i }}" value="1"
                            name="diagnosa_aktivitas[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="diagAktivitas{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>g. Kode : 0129 Gangguan Integritas Kulit / Jaringan</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 3) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="diagKulit{{ $i }}" value="1"
                            name="diagnosa_kulit[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="diagKulit{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>h. Kode : 0008 Penurunan Curah Jantung</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 3) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="diagJantung{{ $i }}" value="1"
                            name="diagnosa_jantung[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="diagJantung{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>i. Kode : 0009 Perfusi Perifer Tidak Efektif</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 3) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="diagPerifer{{ $i }}" value="1"
                            name="diagnosa_perifer[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="diagPerifer{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>j. Kode : 0142 Risiko Infeksi</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 3) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="diagInfeksi{{ $i }}" value="1"
                            name="diagnosa_infeksi[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="diagInfeksi{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td rowspan="3">c. DIAGNOSIS GIZI</td>
                <td>Restriksi Cairan 600cc / 24 jam</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 2) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="diagGiziCairan{{ $i }}" value="1"
                            name="diagnosa_cairan[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="diagGiziCairan{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="3">
                    <textarea rows="6" class="form-control" id="catatanDiagGiziCairan" name="catatan_diagGiziCairan">Sesuai dengan data asesmen, kemungkinan saja ada diagnosis lain atau diagnosis berubah selama perawatan</textarea>
                </td>
            </tr>
            <tr>
                <td>Diet Rendah Garam (Natrium &lt; 2gr / hari)</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 2) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="diagGiziGaram{{ $i }}" value="1"
                            name="diagnosa_garam[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="diagGiziGaram{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>Diet Protein (1.2 gr / kg BB / hari)</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 2) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="diagGiziProtein{{ $i }}" value="1"
                            name="diagnosa_protein[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="diagGiziProtein{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td rowspan="4">8. DISCHARGE PLANNING</td>
                <td>Edukasi kondisi pasien</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 2) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="disPlanEdukasi{{ $i }}" value="1"
                            name="displan_edukasi[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="disPlanEdukasi{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="4">
                    <textarea rows="9" class="form-control" id="catatanDisPlanEdukasi" name="catatan_disPlanEdukasi"></textarea>
                </td>
            </tr>
            <tr>
                <td>Edukasi rencana dialysis (Resiko dan komplikasi)</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 3) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="disPlanRencana{{ $i }}" value="1"
                            name="displan_rencana[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="disPlanRencana{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>Edukasi obat-obatan rutin</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 3) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="disPlanObat{{ $i }}" value="1"
                            name="displan_obat[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="disPlanObat{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>Edukasi rencana tatalaksana lanjutan dan kontrol</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 3) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="disPlanKontrol{{ $i }}" value="1"
                            name="displan_kontrol[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="disPlanKontrol{{ $i }}"></label>
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
                <td rowspan="2">
                    <textarea rows="5" class="form-control" id="catatanEmedDiag" name="catatan_emedDiag">Oleh semua pemberi asuhan berdasarkan kebutuhan dan juga berdasarkan Discharge Planning</textarea>
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
                <td>
                    <textarea rows="3" class="form-control" id="catatanEmedConsent" name="catatan_emedConsent">Informed consent HD diulang tiap 6 bulan</textarea>
                </td>
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
                <td rowspan="5">c. EDUKASI KEPERAWATAN</td>
                <td>a. Diet pada pasien gagal ginjal</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="ekepGinjal{{ $i }}" value="1"
                            name="edukasi_ginjal[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="ekepGinjal{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="5">
                    <textarea rows="10" class="form-control" id="catatanEkepGinjal" name="catatan_ekepGinjal">Pengisian formulir informasi dan edukasi terintegrasi oleh pasien dan atau keluarga</textarea>
                </td>
            </tr>
            <tr>
                <td>b. Penjelasan kelebihan dan kekurangan hemodialisa</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="ekepHemodialisa{{ $i }}" value="1"
                            name="edukasi_hemodialisa[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="ekepHemodialisa{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>c. Perawatan catheter doblelumen (CDL) di rumah</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="ekepCDL{{ $i }}" value="1"
                            name="edukasi_cdl[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="ekepCDL{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>d. Kebutuhan intake dan output cairan</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="ekepOutput{{ $i }}" value="1"
                            name="edukasi_output[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="ekepOutput{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>e. Pentingnya dukungan keluarga</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="ekepDukungan{{ $i }}" value="1"
                            name="edukasi_dukungan[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="ekepDukungan{{ $i }}"></label>
                    </td>
                @endfor
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
                    <textarea rows="3" class="form-control" id="catatanLemEdTer" name="catatan_lemEdTer">TTD keluarga/pasien. Lembar informed consent diperbaharui setiap 6 bulan</textarea>
                </td>
            </tr>
            <tr>
                <td>10. TERAPI/MEDIKAMENTOSA</td>
                @for ($i = 0; $i < 7; $i++)
                    <td>
                    </td>
                @endfor
            </tr>
            <tr>
                <td rowspan="2">a. TINDAKAN</td>
                <td>Cartheter double lumen jugularis dextra temporer (Akses Vena HD)</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="tindakanCartheter{{ $i }}" value="1"
                            name="tindakan_cartheter[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="tindakanCartheter{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanTindakanCartheter" name="catatan_tindakanCartheter"></textarea>
                </td>
            </tr>
            <tr>
                <td>O2 Nasal Canul 4L / Menit</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #95FFFF" @endif>
                        <input type="checkbox" id="tindakanNasal{{ $i }}" value="1"
                            name="tindakan_nasal[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="tindakanNasal{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanTindakanNasal" name="catatan_tindakanNasal"></textarea>
                </td>
            </tr>
            <tr>
                <td>b. CAIRAN INFUS</td>
                <td>Kristaloid : NaCol 0,9% / D5%</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #95FFFF" @endif>
                        <input type="checkbox" id="infusKristaloid{{ $i }}" value="1"
                            name="injeksi_kristaloid[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="infusKristaloid{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanInfusKristaloid" name="catatan_infusKristaloid">Optional</textarea>
                </td>
            </tr>
            <tr>
                <td rowspan="4">c. INJEKSI</td>
                <td>Antikoagulan</td>
                @for ($i = 0; $i < 6; $i++)
                    <td>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>Diberikan dosis awal secara bolus 2000 IU, tunggu 3-5 menit untuk membiarkan heparin menyebar merata
                    kepermukaan dialyzer</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #95FFFF" @endif>
                        <input type="checkbox" id="injectBolus{{ $i }}" value="1"
                            name="inject_bolus[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="injectBolus{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanInjectBolus" name="catatan_injectBolus">Pada pasien tanpa resiko perdarahan</textarea>
                </td>
            </tr>
            <tr>
                <td>Heparin kontinyu dengan kecepatan 1000 IU/ jam</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #95FFFF" @endif>
                        <input type="checkbox" id="injectHeparin{{ $i }}" value="1"
                            name="inject_heparin[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="injectHeparin{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanInjectHeparin" name="catatan_injectHeparin"></textarea>
                </td>
            </tr>
            <tr>
                <td>Eritropoetin</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #95FFFF" @endif>
                        <input type="checkbox" id="injectEritropoetin{{ $i }}" value="1"
                            name="inject_eritropoetin[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="injectEritropoetin{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanInjectEritropoetin" name="catatan_injectEritropoetin"></textarea>
                </td>
            </tr>
            <tr>
                <td rowspan="2">d. OBAT ORAL</td>
                <td>Asam Folat 1x5 mg</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1" style="background-color: #95FFFF">
                        <input type="checkbox" id="oralAsamFolat{{ $i }}" value="1"
                            name="oral_asamFolat[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="oralAsamFolat{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanOralAsamFolat" name="catatan_oralAsamFolat"></textarea>
                </td>
            </tr>
            <tr>
                <td>Anti Hipertensi</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1" style="background-color: #FEA8B9">
                        <input type="checkbox" id="oralHipertensi{{ $i }}" value="1"
                            name="oral_hipertensi[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="oralHipertensi{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanOralHipertensi" name="catatan_oralHipertensi"></textarea>
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
                    <textarea rows="3" class="form-control" id="catatanTatmedMedika" name="catatan_tatmedMedika">Resep careplan HD (UFG, durasi atau frekuensi, Qb, Qd, antikoagulan, akses)</textarea>
                </td>
            </tr>
            <tr>
                <td rowspan="7">b. TATA LAKSANA/INTERVENSI KEPERAWATAN</td>
                <td>a. NIC : 4120 Manajemen cairan dan elektrolit</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 3) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="tatkepElektrolit{{ $i }}" value="1"
                            name="intervensi_elektrolit[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="tatkepElektrolit{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="7">
                    <textarea rows="15" class="form-control" id="catatanTatkepElektrolit" name="catatan_tatkepElektrolit">Mengaju pada NIC ; Reuse dialyzer</textarea>
                </td>
            </tr>
            <tr>
                <td>b. NIC: 3786 Manajemen hipertermia</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 3) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="tatkepHipertermia{{ $i }}" value="1"
                            name="intervensi_hipertermia[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="tatkepHipertermia{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>c. NIC: 6540 Manajemen infeksi</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 3) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="tatkepInfeksi{{ $i }}" value="1"
                            name="intervensi_infeksi[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="tatkepInfeksi{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>d. NIC : 1100 Manajemen nutrisi</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 3) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="tatkepNutrisi{{ $i }}" value="1"
                            name="intervensi_nutrisi[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="tatkepNutrisi{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>e. NIC : 4310 Pemenuhan ADL</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 3) style="background-color: #95FFFF" @endif>
                        <input type="checkbox" id="tatkepADL{{ $i }}" value="1"
                            name="intervensi_ADL[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="tatkepADL{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>f. NIC : 4190 Kolaborasi pemasangan infus</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 3) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="tatkepInfus{{ $i }}" value="1"
                            name="intervensi_infus[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="tatkepInfus{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>g. NIC : 2380 Kolaborasi pemberian obat</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 3) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="tatkepObat{{ $i }}" value="1"
                            name="intervensi_obat[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="tatkepObat{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>c. TATA LAKSANA/INTERVENSI GIZI</td>
                <td>Memberikan makanan berdasarkan kebutuhan gizi dalam bentuk cair, saring, lunak, biasa, secara
                    bertahap sesuai dengan kondisi klinis, dengan jenis sesuai dengan assesmen gizi masing- masing
                    pasien</td>
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
                <td>12. MONITORING & EVALUASI</td>
                @for ($i = 0; $i < 7; $i++)
                    <td>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>a. DOKTER DPJP</td>
                <td>Asesmen ulang & review verifikasi rencana asuhan</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1" style="background-color: #FEA8B9">
                        <input type="checkbox" id="monevDPJP{{ $i }}" value="1"
                            name="monev_dpjp[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="monevDPJP{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanMonevDPJP" name="catatan_monevDPJP">Monitor perkembangan pasien dan adekuasi HD</textarea>
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
                    <textarea rows="10" class="form-control" id="catatanMonevkepVital" name="catatan_monevkepVital">Mengacu pada NOC</textarea>
                </td>
            </tr>
            <tr>
                <td>b. Monitoring intake dan output cairan</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1" style="background-color: #FEA8B9">
                        <input type="checkbox" id="monevkepCairan{{ $i }}" value="1"
                            name="monev_cairan[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="monevkepCairan{{ $i }}"></label>
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
                <td>e. Monitoring tanda-tanda infeksi</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1" style="background-color: #FEA8B9">
                        <input type="checkbox" id="monevkepInfeksi{{ $i }}" value="1"
                            name="monev_infeksi[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="monevkepInfeksi{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td rowspan="4">c. GIZI</td>
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
                        @if ($i === 2) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="monevgiziAntropometri{{ $i }}" value="1"
                            name="monev_antropometri[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="monevgiziAntropometri{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanMonevAntropometri" name="catatan_monevAntropometri"></textarea>
                </td>
            </tr>
            <tr>
                <td>Monitoring biokimia</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 2) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="monevgiziBiokimia{{ $i }}" value="1"
                            name="monev_biokimia[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="monevgiziBiokimia{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanMonevgiziBiokimia" name="catatan_monevgiziBiokimia"></textarea>
                </td>
            </tr>
            <tr>
                <td>Monitoring fisik/klinis terkait gizi</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 2) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="monevgiziFisik{{ $i }}" value="1"
                            name="monev_fisik[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="monevgiziFisik{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanMonevgiziFisik" name="catatan_monevgiziFisik"></textarea>
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
                <td rowspan="2">a. MEDIS</td>
                <td>Batuk atau sesak teratasi</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 4) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="hasmedBatuk{{ $i }}" value="1"
                            name="hasil_batuk[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="hasmedBatuk{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanHasmedBatuk" name="catatan_hasmedBatuk"></textarea>
                </td>
            </tr>
            <tr>
                <td>Laboratorium (Ur, Cr, eGFR) paska HD perbaikan</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 4) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="hasmedLab{{ $i }}" value="1"
                            name="hasil_lab[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="hasmedLab{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanHasmedLab" name="catatan_hasmedLab"></textarea>
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
                    <textarea rows="3" class="form-control" id="catatanHaskepVital" name="catatan_haskepVital"></textarea>
                </td>
            </tr>
            <tr>
                <td>b. Indeks output seimbang</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1" style="background-color: #FEA8B9">
                        <input type="checkbox" id="haskepSeimbang{{ $i }}" value="1"
                            name="hasil_seimbang[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="haskepSeimbang{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanHaskepSeimbang" name="catatan_haskepSeimbang"></textarea>
                </td>
            </tr>
            <tr>
                <td>c. Tidak ada tanda-tanda infeksi</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1" style="background-color: #FEA8B9">
                        <input type="checkbox" id="haskepInfeksi{{ $i }}" value="1"
                            name="hasil_infeksi[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="haskepInfeksi{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanHaskepInfeksi" name="catatan_haskepInfeksi">Dilakukan dalam 3 shift</textarea>
                </td>
            </tr>
            <tr>
                <td rowspan="2">c. GIZI</td>
                <td>Asupan makanan >= 80%</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 3) style="background-color: #FEA8B9" @endif>
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
                        @if ($i < 3) style="background-color: #FEA8B9" @endif>
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
                    <textarea rows="8" class="form-control" id="catatanRencanaResume" name="catatan_rencanaResume">Pasien membawa Resume Perawatan/Surat Rujukan/Surat Kontrol/Homecare saat pulang</textarea>
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
                <td>Rencana operasi AV Shunt (untuk akses permanen)</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 4) style="background-color: #95FFFF" @endif>
                        <input type="checkbox" id="varianRencana{{ $i }}" value="1"
                            name="varian_rencana[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="varianRencana{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanVarianRencana" name="catatan_varianRencana"></textarea>
                </td>
            </tr>
        </tbody>
    </table>
</div>
