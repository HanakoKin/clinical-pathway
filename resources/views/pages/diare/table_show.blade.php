<div class="table-responsive">
    <table id="" class="table table-bordered display margin-top-10">
        <thead class="text-center">
            <tr>
                <th rowspan="5" class="min-w-100">KEGIATAN</th>
                <th rowspan="5" class="min-w-180">URAIAN KEGIATAN</th>
                <th colspan="7">HARI PENYAKIT </th>
                <th rowspan="5" class="min-w-100">KETERANGAN</th>
            </tr>
            <tr>
                @for ($i = 1; $i <= 7; $i++)
                    <th>{{ $i }}</th>
                @endfor
            </tr>
            <tr>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->hari_penyakit))
                        <th class="text-center p-1">
                            <input type="checkbox" id="hp{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hari_penyakit[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="hp{{ $i }}"></label>
                        </th>
                    @else
                        <th class="text-center p-1">
                            <input type="checkbox" id="hp{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hari_penyakit[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="hp{{ $i }}"></label>
                        </th>
                    @endif
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
                    @if (in_array($i + 1, $data->asesment_igd))
                        <td class="text-center p-1">
                            <input type="checkbox" id="asesDokIgd{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="asesment_igd[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="asesDokIgd{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="asesDokIgd{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="asesment_igd[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="asesDokIgd{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>Pasien masuk melalui IGD</td>
            </tr>
            <tr>
                <td>Dokter Spesialis</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->asesment_spesialis))
                        <td class="text-center p-1">
                            <input type="checkbox" id="asesDokSpe{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="asesment_spesialis[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="asesDokSpe{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="asesDokSpe{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="asesment_spesialis[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="asesDokSpe{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>Pasien masuk melalui RJ</td>
            </tr>
            <tr>
                <td>b. ASESMEN AWAL KEPERAWATAN</td>
                <td>Perawat Primer :
                    <p>Kondisi umum, tingkat kesadaran, tanda-tanda vital, riwayat alergi,
                        skrining gizi, suhu</p>
                </td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->asesment_perawat))
                        <td class="text-center p-1">
                            <input type="checkbox" id="asesPer{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="asesment_perawat[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="asesPer{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="asesPer{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="asesment_perawat[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="asesPer{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>Dilanjutkan dengan asesmen bio, psiko, sosial, spiritual, dan budaya</td>
            </tr>
            <tr>
                <td rowspan="4">2. LABORATORIUM </td>
                <td>Darah rutin</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->lab_darah))
                        <td class="text-center p-1">
                            <input type="checkbox" id="labDar{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="lab_darah[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="labDar{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="labDar{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="lab_darah[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="labDar{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td> </td>
            </tr>
            <tr>
                <td>Feses Lengkap</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->lab_feses))
                        <td class="text-center p-1">
                            <input type="checkbox" id="labFeses{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="lab_feses[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="labFeses{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="labFeses{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="lab_feses[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="labFeses{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>Atas Indikasi</td>
            </tr>
            <tr>
                <td>GDS, Na, K, Cl</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->lab_GDS))
                        <td class="text-center p-1">
                            <input type="checkbox" id="labGDS{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="lab_GDS[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="labGDS{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="labGDS{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="lab_GDS[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="labGDS{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>Dehidrasi Berat</td>
            </tr>
            <tr>
                <td> </td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->lab_varian))
                        <td class="text-center p-1">
                            <input type="checkbox" id="labVarian{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="lab_varian[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="labVarian{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="labVarian{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="lab_varian[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="labVarian{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>Varian</td>
            </tr>
            <tr>
                <td>3. RADIOLOGI/IMAGING</td>
                <td></td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->radiologi))
                        <td class="text-center p-1">
                            <input type="checkbox" id="radiologi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="radiologi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="radiologi{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="radiologi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="radiologi[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="radiologi{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td></td>
            </tr>
            <tr>
                <td>4. KONSULTASI</td>
                <td> </td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->konsultasi))
                        <td class="text-center p-1">
                            <input type="checkbox" id="konsul{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="konsultasi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="konsul{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="konsul{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="konsultasi[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="konsul{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td> </td>
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
                    @if (in_array($i + 1, $data->ases_DPJP))
                        <td class="text-center p-1">
                            <input type="checkbox" id="asesDPJP{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="ases_DPJP[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="asesDPJP{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="asesDPJP{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="ases_DPJP[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="asesDPJP{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>Visit harian/Follow up</td>
            </tr>
            <tr>
                <td>Dokter non DPJP/dr. Ruangan</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->ases_nonDPJP))
                        <td class="text-center p-1">
                            <input type="checkbox" id="asesNonDPJP{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="ases_nonDPJP[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="asesNonDPJP{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="asesNonDPJP{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="ases_nonDPJP[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="asesNonDPJP{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>Atas Indikasi/Emergency</td>
            </tr>
            <tr>
                <td>b. ASESMEN KEPERAWATAN</td>
                <td>Perawat Penanggung Jawab</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->ases_PPJ))
                        <td class="text-center p-1">
                            <input type="checkbox" id="asesPPJ{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="ases_PPJ[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="asesPPJ{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="asesPPJ{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="ases_PPJ[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="asesPPJ{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>Dilakukan dalam 3 shift</td>
            </tr>
            <tr>
                <td>c. ASESMEN GIZI</td>
                <td>Tenaga Gizi (Nutrisionis/Dietisien)</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->ases_gizi))
                        <td class="text-center p-1">
                            <input type="checkbox" id="asesGizi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="ases_gizi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="asesGizi{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="asesGizi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="ases_gizi[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="asesGizi{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>Lihat risiko malnutrisi melalui skrining gizi dan mengkaji data antropometri, biokimia,
                    fisik/klinis, riwayat makan termasuk alergi makanan serta riwayat personal. Asesmen dilakukan dalam
                    waktu 48 jam</td>
            </tr>
            <tr>
                <td rowspan="2">d. ASESMEN FARMASI</td>
                <td>Telaah Resep</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->ases_resep))
                        <td class="text-center p-1">
                            <input type="checkbox" id="asesResep{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="ases_resep[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="asesResep{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="asesResep{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="ases_resep[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="asesResep{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td rowspan="2">Dilanjutkan dengan intervensi farmasi yang sesuai hasil Telaah dan Rekonsiliasi obat
                </td>
            </tr>
            <tr>
                <td>Rekonsiliasi Obat</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->ases_obat))
                        <td class="text-center p-1">
                            <input type="checkbox" id="asesObat{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="ases_obat[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="asesObat{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="asesObat{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="ases_obat[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="asesObat{{ $i }}"></label>
                        </td>
                    @endif
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
                <td> </td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->diagnosa_medis))
                        <td class="text-center p-1">
                            <input type="checkbox" id="diagMedis{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_medis[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="diagMedis{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="diagMedis{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_medis[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="diagMedis{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td> </td>
            </tr>
            <tr>
                <td rowspan="7">b. DIAGNOSIS KEPERAWATAN</td>
                <td>Kode : 00013 Diare</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->diagnosa_diare))
                        <td class="text-center p-1">
                            <input type="checkbox" id="diagDiare{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_diare[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="diagDiare{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="diagDiare{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_diare[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="diagDiare{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td rowspan="7">Masalah keperawatan yang dijumpai setiap hari. Dibuat oleh perawat penanggung jawab
                </td>
            </tr>
            <tr>
                <td>Kode : 00027 Kekurangan Volume Cairan</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->diagnosa_cairan))
                        <td class="text-center p-1">
                            <input type="checkbox" id="diagCair{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_cairan[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="diagCair{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="diagCair{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_cairan[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="diagCair{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>Kode : 00195 Risiko Ketidakseimbangan Elektrolit</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->diagnosa_elektrolit))
                        <td class="text-center p-1">
                            <input type="checkbox" id="diagElektrolit{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_elektrolit[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="diagElektrolit{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="diagElektrolit{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_elektrolit[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="diagElektrolit{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>Kode : 00002 Ketidakseimbangan Nutrisi Kurang dari Kebutuhan Tubuh</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->diagnosa_nutrisi))
                        <td class="text-center p-1">
                            <input type="checkbox" id="diagNutrisi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_nutrisi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="diagNutrisi{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="diagNutrisi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_nutrisi[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="diagNutrisi{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>Kode : 00132 Nyeri Akut</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->diagnosa_akut))
                        <td class="text-center p-1">
                            <input type="checkbox" id="diagAkut{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_akut[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="diagAkut{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="diagAkut{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_akut[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="diagAkut{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>Kode : 00007 Hipertermia</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->diagnosa_hiper))
                        <td class="text-center p-1">
                            <input type="checkbox" id="diagHiper{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_hiper[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="diagHiper{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="diagHiper{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_hiper[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="diagHiper{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>Kode : 00046 Kerusakan Integritas Kulit</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->diagnosa_kulit))
                        <td class="text-center p-1">
                            <input type="checkbox" id="diagKulit{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_kulit[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="diagKulit{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="diagKulit{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_kulit[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="diagKulit{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>c. DIAGNOSIS GIZI</td>
                <td>Prediksi suboptimal asupan energi berkaitan rencana tindakan bedah/operasi ditandai dengan asupan
                    energi lebih rendah dari kebutuhan (NI - 1.4)</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->diagnosa_gizi))
                        <td class="text-center p-1">
                            <input type="checkbox" id="diagGizi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_gizi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="diagGizi{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="diagGizi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_gizi[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="diagGizi{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>Sesuai dengan data asesmen, kemungkinan saja ada diagnosis lain atau diagnosis berubah selama
                    perawatan</td>
            </tr>
            <tr>
                <td rowspan="3">7. DISCHARGE PLANNING</td>
                <td>Identifikasi kebutuhan di rumah</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->displan_rumah))
                        <td class="text-center p-1">
                            <input type="checkbox" id="disPlanRumah{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="displan_rumah[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="disPlanRumah{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="disPlanRumah{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="displan_rumah[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="disPlanRumah{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td rowspan="3">Program pendidikan pasien dan keluarga (diisi 3x24 jam)</td>
            </tr>
            <tr>
                <td>Terapi yang diberikan meliputi kegunaan obat, dosis dan efek samping</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->displan_terapi))
                        <td class="text-center p-1">
                            <input type="checkbox" id="disPlanTer{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="displan_terapi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="disPlanTer{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="disPlanTer{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="displan_terapi[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="disPlanTer{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>Hand hygiene, kualitas hidup sehat</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->displan_hygiene))
                        <td class="text-center p-1">
                            <input type="checkbox" id="disPlanHygiene{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="displan_hygiene[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="disPlanHygiene{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="disPlanHygiene{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="displan_hygiene[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="disPlanHygiene{{ $i }}"></label>
                        </td>
                    @endif
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
                    @if (in_array($i + 1, $data->edukasi_diagnosis))
                        <td class="text-center p-1">
                            <input type="checkbox" id="emedDiag{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_diagnosis[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="emedDiag{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="emedDiag{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_diagnosis[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="emedDiag{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td rowspan="3">
                    <p>Oleh semua pemberi asuhan berdasarkan kebutuhan dan juga berdasarkan Discharge Planning</p>
                    <p>Pengisian formulir informasi dan edukasi terintegrasi oleh pasien dan atau keluarga</p>
                    <p>Edukasi gizi dapat dilakukan saat awal masuk pada hari 1 atau hari ke 2</p>
                    <p>Meningkatkan kepatuhan pasien meminum/menggunakan obat</p>
                    <p>Di DTT Keluarga/Pasien</p>
                </td>
            </tr>
            <tr>
                <td>Rencana terapi</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->edukasi_terapi))
                        <td class="text-center p-1">
                            <input type="checkbox" id="emedTerapi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_terapi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="emedTerapi{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="emedTerapi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_terapi[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="emedTerapi{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>Informed Consent</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->edukasi_consent))
                        <td class="text-center p-1">
                            <input type="checkbox" id="emedConsent{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_consent[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="emedConsent{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="emedConsent{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_consent[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="emedConsent{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>b. EDUKASI DAN KONSELING GIZI</td>
                <td>Diberikan cairan rehidrasi oral, ASI tetap diteruskan, diet lunak bertahap porsi kecil tapi sering
                    (6x)</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->edukasi_gizi))
                        <td class="text-center p-1">
                            <input type="checkbox" id="egiz{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_gizi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="egiz{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="egiz{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_gizi[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="egiz{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td> </td>
            </tr>
            <tr>
                <td rowspan="3">c. EDUKASI KEPERAWATAN</td>
                <td>1. Hand hygiene</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->edukasi_hygiene))
                        <td class="text-center p-1">
                            <input type="checkbox" id="ekepHygiene{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_hygiene[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="ekepHygiene{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="ekepHygiene{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_hygiene[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="ekepHygiene{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td rowspan="3"> </td>
            </tr>
            <tr>
                <td>2. Menjaga kebersihan makanan</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->edukasi_makanan))
                        <td class="text-center p-1">
                            <input type="checkbox" id="ekepMakanan{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_makanan[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="ekepMakanan{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="ekepMakanan{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_makanan[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="ekepMakanan{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>3. Perawatan perianal</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->edukasi_perianal))
                        <td class="text-center p-1">
                            <input type="checkbox" id="ekepPerianal{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_perianal[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="ekepPerianal{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="ekepPerianal{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_perianal[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="ekepPerianal{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td rowspan="2">d. EDUKASI FARMASI </td>
                <td>Informasi Obat</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->edukasi_info))
                        <td class="text-center p-1">
                            <input type="checkbox" id="efarmInf{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_info[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="efarmInf{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="efarmInf{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_info[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="efarmInf{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td rowspan="2"> </td>
            </tr>
            <tr>
                <td>Konseling Obat</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->edukasi_konseling))
                        <td class="text-center p-1">
                            <input type="checkbox" id="efarmKons{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_konseling[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="efarmKons{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="efarmKons{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_konseling[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="efarmKons{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>PENGISIAN FORMULIR INFORMASI DAN EDUKASI TERINTEGRASI</td>
                <td>Lembar Edukasi Terintegrasi</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->lembar_edukasi))
                        <td class="text-center p-1">
                            <input type="checkbox" id="lemEdTer{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="lembar_edukasi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="lemEdTer{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="lemEdTer{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="lembar_edukasi[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="lemEdTer{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td> </td>
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
                    @if (in_array($i + 1, $data->injeksi_ceftriaxon))
                        <td class="text-center p-1">
                            <input type="checkbox" id="injectCeftriaxon{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="injeksi_ceftriaxon[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="injectCeftriaxon{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="injectCeftriaxon{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="injeksi_ceftriaxon[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="injectCeftriaxon{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>Atas Indikasi</td>
            </tr>
            <tr>
                <td>Parasetamol 10-15 mg/Kg BB</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->injeksi_Parasetamol))
                        <td class="text-center p-1">
                            <input type="checkbox" id="injectParasetamol{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="injeksi_Parasetamol[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="injectParasetamol{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="injectParasetamol{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="injeksi_Parasetamol[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="injectParasetamol{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>Suhu > 38</td>
            </tr>
            <tr>
                <td>b. CAIRAN INFUS</td>
                <td>RL atau NaCl atau KaEN3B</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->injeksi_NaCl))
                        <td class="text-center p-1">
                            <input type="checkbox" id="infusNaCl{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="injeksi_NaCl[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="infusNaCl{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="infusNaCl{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="injeksi_NaCl[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="infusNaCl{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td> </td>
            </tr>
            <tr>
                <td rowspan="2">c. OBAT ORAL</td>
                <td>Domperidon, metochlopramid, ondansetron</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->oral_dompridon))
                        <td class="text-center p-1">
                            <input type="checkbox" id="oralDompridon{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="oral_dompridon[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="oralDompridon{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="oralDompridon{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="oral_dompridon[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="oralDompridon{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>Bila muntah</td>
            </tr>
            <tr>
                <td>Zinc: < 6 bulan 1x10 mg 10 hari, dan> 6 bulan 1x20 mg 10 hari</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->oral_zinc))
                        <td class="text-center p-1">
                            <input type="checkbox" id="oralZinc{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="oral_zinc[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="oralZinc{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="oralZinc{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="oral_zinc[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="oralZinc{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>Varian</td>
            </tr>
            <tr>
                <td>d. CAIRAN REHIDRASI ORAL</td>
                <td>Oralit 5-10 cc/kg BB / kali diare</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->rehidrasi_oral))
                        <td class="text-center p-1">
                            <input type="checkbox" id="rehidrasiOral{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="rehidrasi_oral[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="rehidrasiOral{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="rehidrasiOral{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="rehidrasi_oral[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="rehidrasiOral{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td></td>
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
                    @if (in_array($i + 1, $data->intervensi_medika))
                        <td class="text-center p-1">
                            <input type="checkbox" id="tatmedMedika{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_medika[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="tatmedMedika{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="tatmedMedika{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_medika[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="tatmedMedika{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td> </td>
            </tr>
            <tr>
                <td rowspan="9">b. TATA LAKSANA/INTERVENSI KEPERAWATAN</td>
                <td>a. Manajemen Cairan</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->intervensi_cairan))
                        <td class="text-center p-1">
                            <input type="checkbox" id="tatkepCairan{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_cairan[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="tatkepCairan{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="tatkepCairan{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_cairan[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="tatkepCairan{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td rowspan="9">Mengaju pada NIC</td>
            </tr>
            <tr>
                <td>b. Manajemen Diare</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->intervensi_diare))
                        <td class="text-center p-1">
                            <input type="checkbox" id="tatkepDiare{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_diare[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="tatkepDiare{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="tatkepDiare{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_diare[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="tatkepDiare{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>c. Monitoring cairan dan elektrolit</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->intervensi_elektrolit))
                        <td class="text-center p-1">
                            <input type="checkbox" id="tatkepElektrolit{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_elektrolit[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="tatkepElektrolit{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="tatkepElektrolit{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_elektrolit[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="tatkepElektrolit{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>d. Manajemen Demam</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->intervensi_demam))
                        <td class="text-center p-1">
                            <input type="checkbox" id="tatkepDemam{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_demam[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="tatkepDemam{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="tatkepDemam{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_demam[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="tatkepDemam{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>e. Manajemen Nutrisi</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->intervensi_nutrisi))
                        <td class="text-center p-1">
                            <input type="checkbox" id="tatkepNutrisi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_nutrisi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="tatkepNutrisi{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="tatkepNutrisi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_nutrisi[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="tatkepNutrisi{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>f. Manajemen Nyeri</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->intervensi_nyeri))
                        <td class="text-center p-1">
                            <input type="checkbox" id="tatkepNyeri{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_nyeri[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="tatkepNyeri{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="tatkepNyeri{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_nyeri[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="tatkepNyeri{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>g. Pengawasan Kulit</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->intervensi_kulit))
                        <td class="text-center p-1">
                            <input type="checkbox" id="tatkepKulit{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_kulit[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="tatkepKulit{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="tatkepKulit{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_kulit[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="tatkepKulit{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>h. Resusitasi Cairan</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->intervensi_resusitasi))
                        <td class="text-center p-1">
                            <input type="checkbox" id="tatkepResusitasi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_resusitasi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="tatkepResusitasi{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="tatkepResusitasi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_resusitasi[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="tatkepResusitasi{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>i. Pemasangan Infus</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->intervensi_infus))
                        <td class="text-center p-1">
                            <input type="checkbox" id="tatkepInfus{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_infus[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="tatkepInfus{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="tatkepInfus{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_infus[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="tatkepInfus{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>c. TATA LAKSANA/INTERVENSI GIZI</td>
                <td>Diet cair/saring/lunak/biasa secara bertahap. ASI diteruskan</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->intervensi_ASI))
                        <td class="text-center p-1">
                            <input type="checkbox" id="tatgiziASI{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_ASI[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="tatgiziASI{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="tatgiziASI{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_ASI[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="tatgiziASI{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>Bentuk makanan, kebutuhan zat gizi disesuaikan dengan usia dan kondisi klinis secara bertahap</td>
            </tr>
            <tr>
                <td>d. TATA LAKSANA/INTERVENSI FARMASI</td>
                <td>Rekomendasi kepala DPJP</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->intervensi_dpjp))
                        <td class="text-center p-1">
                            <input type="checkbox" id="tatfarmDPJP{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_dpjp[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="tatfarmDPJP{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="tatfarmDPJP{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_dpjp[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="tatfarmDPJP{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>Sesuai dengan hasil monitoring</td>
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
                    @if (in_array($i + 1, $data->monev_dpjp))
                        <td class="text-center p-1">
                            <input type="checkbox" id="monevDPJP{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_dpjp[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="monevDPJP{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="monevDPJP{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_dpjp[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="monevDPJP{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>Monitor Perkembangan Pasien</td>
            </tr>
            <tr>
                <td rowspan="6">b. KEPERAWATAN</td>
                <td>a. Monitoring Intake</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->monev_intake))
                        <td class="text-center p-1">
                            <input type="checkbox" id="monevkepIntake{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_intake[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="monevkepIntake{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="monevkepIntake{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_intake[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="monevkepIntake{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td rowspan="6">Mengacu pada NOC</td>
            </tr>
            <tr>
                <td>b. Monitoring tanda-tanda vital pasien</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->monev_vital))
                        <td class="text-center p-1">
                            <input type="checkbox" id="monevkepVital{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_vital[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="monevkepVital{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="monevkepVital{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_vital[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="monevkepVital{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>c. Monitoring status hidrasi pasien meliputi <span class="fst-italic">balance</span> cairan,
                    terapi intravena dan tanda-tanda dehidrasi</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->monev_hidrasi))
                        <td class="text-center p-1">
                            <input type="checkbox" id="monevkepHidrasi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_hidrasi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="monevkepHidrasi{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="monevkepHidrasi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_hidrasi[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="monevkepHidrasi{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>d. Diare dikendalikan</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->monev_kendali))
                        <td class="text-center p-1">
                            <input type="checkbox" id="monevkepKendali{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_kendali[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="monevkepKendali{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="monevkepKendali{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_kendali[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="monevkepKendali{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>e. Eliminasi efektif</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->monev_eliminasi))
                        <td class="text-center p-1">
                            <input type="checkbox" id="monevkepEliminasi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_eliminasi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="monevkepEliminasi{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="monevkepEliminasi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_eliminasi[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="monevkepEliminasi{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>f. Integritas kulit</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->monev_kulit))
                        <td class="text-center p-1">
                            <input type="checkbox" id="monevkepKulit{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_kulit[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="monevkepKulit{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="monevkepKulit{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_kulit[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="monevkepKulit{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td rowspan="2">c. GIZI</td>
                <td>Monitoring asupan makanan</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->monev_makanan))
                        <td class="text-center p-1">
                            <input type="checkbox" id="monevgiziMakanan{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_makanan[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="monevgiziMakanan{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="monevgiziMakanan{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_makanan[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="monevgiziMakanan{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td rowspan="2">
                    <p>Sesuai dengan masalah gizi dan tanda gejala yang akan dilihat kemajuannya</p>
                    <p>Mengacu pada IDNT (International Dietetics & Nutrition Terminology)</p>
                </td>
            </tr>
            <tr>
                <td>Monitoring Antropometri</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->monev_antropometri))
                        <td class="text-center p-1">
                            <input type="checkbox" id="monevgiziAntropometri{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_antropometri[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="monevgiziAntropometri{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="monevgiziAntropometri{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_antropometri[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="monevgiziAntropometri{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td rowspan="3">d. FARMASI</td>
                <td>Monitoring Interaksi Obat</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->monev_interaksi))
                        <td class="text-center p-1">
                            <input type="checkbox" id="monevfarmInteraksi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_interaksi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="monevfarmInteraksi{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="monevfarmInteraksi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_interaksi[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="monevfarmInteraksi{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td rowspan="3">
                    <p>Menyusun Software interaksi</p>
                    <p>Dilanjutkan dengan intervensi farmasi sesuai hasil monitoring</p>
                </td>
            </tr>
            <tr>
                <td>Monitoring Efek Samping Obat</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->monev_efek))
                        <td class="text-center p-1">
                            <input type="checkbox" id="monevfarmEfsam{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_efek[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="monevfarmEfsam{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="monevfarmEfsam{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_efek[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="monevfarmEfsam{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>Pemantauan Terapi Obat</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->monev_terapi))
                        <td class="text-center p-1">
                            <input type="checkbox" id="monevfarmTerapi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_terapi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="monevfarmTerapi{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="monevfarmTerapi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_terapi[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="monevfarmTerapi{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>12. MOBILISASI/REHABILITASI</td>
                @for ($i = 0; $i < 9; $i++)
                    <td> </td>
                @endfor
            </tr>
            <tr>
                <td>a. MEDIS</td>
                <td> </td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->mob_medis))
                        <td class="text-center p-1">
                            <input type="checkbox" id="mobmed{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="mob_medis[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="mobmed{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="mobmed{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="mob_medis[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="mobmed{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td rowspan="3">Tahapan mobilisasi sesuai kondisi pasien</td>
            </tr>
            <tr>
                <td>b. KEPERAWATAN</td>
                <td> </td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->mob_keperawatan))
                        <td class="text-center p-1">
                            <input type="checkbox" id="mobkep{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="mob_keperawatan[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="mobkep{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="mobkep{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="mob_keperawatan[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="mobkep{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>c. FISIOTERAPI</td>
                <td> </td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->mob_fisio))
                        <td class="text-center p-1">
                            <input type="checkbox" id="mobfisio{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="mob_fisio[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="mobfisio{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="mobfisio{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="mob_fisio[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="mobfisio{{ $i }}"></label>
                        </td>
                    @endif
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
                <td>Diare < 3x dengan ampas</td>
                        @for ($i = 0; $i < 7; $i++)
                            @if (in_array($i + 1, $data->hasil_diare))
                <td class="text-center p-1">
                    <input type="checkbox" id="hasmedDiare{{ $i }}" value="1"
                        @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_diare[ {{ $i }} ]" @endif
                        checked>
                    <label class="p-1 me-2 mt-2" for="hasmedDiare{{ $i }}"></label>
                </td>
            @else
                <td class="text-center p-1">
                    <input type="checkbox" id="hasmedDiare{{ $i }}" value="1"
                        @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_diare[ {{ $i }} ]" @endif>
                    <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                        for="hasmedDiare{{ $i }}"></label>
                </td>
                @endif
                @endfor
                <td> </td>
            </tr>
            <tr>
                <td>Dehidrasi teratasi</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->hasil_dehidrasi))
                        <td class="text-center p-1">
                            <input type="checkbox" id="hasmedDehidrasi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_dehidrasi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="hasmedDehidrasi{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="hasmedDehidrasi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_dehidrasi[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="hasmedDehidrasi{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td> </td>
            </tr>
            <tr>
                <td rowspan="3">b. KEPERAWATAN</td>
                <td>a. Keseimbangan Cairan</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->hasil_seimbang))
                        <td class="text-center p-1">
                            <input type="checkbox" id="haskepSeimbang{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_seimbang[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="haskepSeimbang{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="haskepSeimbang{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_seimbang[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="haskepSeimbang{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td rowspan="3">
                    <p>Mengacu pada NOC</p>
                    <p>Dilakukan dalam 3 shift</p>
                </td>
            </tr>
            <tr>
                <td>b. Komplikasi</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->hasil_komplikasi))
                        <td class="text-center p-1">
                            <input type="checkbox" id="haskepKomplikasi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_komplikasi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="haskepKomplikasi{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="haskepKomplikasi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_komplikasi[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="haskepKomplikasi{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>c. NOC : 0802 Tanda-tanda vital</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->hasil_vital))
                        <td class="text-center p-1">
                            <input type="checkbox" id="haskepVital{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_vital[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="haskepVital{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="haskepVital{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_vital[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="haskepVital{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td rowspan="2">c. GIZI</td>
                <td>Asupan makanan >= 80%</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->hasil_asupan))
                        <td class="text-center p-1">
                            <input type="checkbox" id="hasgiziAsupan{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_asupan[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="hasgiziAsupan{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="hasgiziAsupan{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_asupan[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="hasgiziAsupan{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td rowspan="2">Status Gizi berdasarkan antropometri, biokimia, fisik/klinis</td>
            </tr>
            <tr>
                <td>Optimalisasi Status Gizi</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->hasil_status))
                        <td class="text-center p-1">
                            <input type="checkbox" id="hasgiziStatus{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_status[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="hasgiziStatus{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="hasgiziStatus{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_status[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="hasgiziStatus{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td rowspan="2">d. FARMASI</td>
                <td>Terapi obat sesuai indikasi</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->hasil_terapi))
                        <td class="text-center p-1">
                            <input type="checkbox" id="hasfarmInd{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_terapi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="hasfarmInd{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="hasfarmInd{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_terapi[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="hasfarmInd{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td rowspan="2">Meningkatkan kualitas hidup pasien</td>
            </tr>
            <tr>
                <td>Obat rasional</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->hasil_obat))
                        <td class="text-center p-1">
                            <input type="checkbox" id="hasfarmObat{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_obat[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="hasfarmObat{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="hasfarmObat{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_obat[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="hasfarmObat{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td rowspan="3">14. KRITERIA PULANG</td>
                <td>Tanda Vital Normal</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->pulang_normal))
                        <td class="text-center p-1">
                            <input type="checkbox" id="pulangNormal{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="pulang_normal[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="pulangNormal{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="pulangNormal{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="pulang_normal[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="pulangNormal{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td rowspan="2">Status pasien/tanda vital sesuai dengan PPK</td>
            </tr>
            <tr>
                <td>Sesuai NOC</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->pulang_NOC))
                        <td class="text-center p-1">
                            <input type="checkbox" id="pulangNOC{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="pulang_NOC[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="pulangNOC{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="pulangNOC{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="pulang_NOC[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="pulangNOC{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td> </td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->pulang_varian))
                        <td class="text-center p-1">
                            <input type="checkbox" id="pulangVarian{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="pulang_varian[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="pulangVarian{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="pulangVarian{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="pulang_varian[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="pulangVarian{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>Varian</td>
            </tr>
            <tr>
                <td rowspan="3">15. RENCANA PULANG/EDUKASI PELAYANAN LANJUTAN</td>
                <td>Resume Medis dan Keperawatan</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->rencana_resume))
                        <td class="text-center p-1">
                            <input type="checkbox" id="rencanaResume{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="rencana_resume[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="rencanaResume{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="rencanaResume{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="rencana_resume[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="rencanaResume{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td rowspan="3">Pasien membawa Resume Perawatan/Surat Rujukan/Surat Kontrol/Homecare saat pulang
                </td>
            </tr>
            <tr>
                <td>Penjelasan diberikan sesuai dengan keadaan umum pasien</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->rencana_penjelasan))
                        <td class="text-center p-1">
                            <input type="checkbox" id="rencanaPenjelasan{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="rencana_penjelasan[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="rencanaPenjelasan{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="rencanaPenjelasan{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="rencana_penjelasan[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="rencanaPenjelasan{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>Surat pengantar kontrol</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->rencana_surat))
                        <td class="text-center p-1">
                            <input type="checkbox" id="rencanaSurat{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="rencana_surat[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="rencanaSurat{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="rencanaSurat{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="rencana_surat[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="rencanaSurat{{ $i }}"></label>
                        </td>
                    @endif
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
