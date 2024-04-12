<div class="table-responsive">
    <table id="" class="table table-bordered display margin-top-10">
        <thead class="text-center">
            <tr>
                <th rowspan="5">KEGIATAN</th>
                <th rowspan="5" class="min-w-180">URAIAN KEGIATAN</th>
                <th colspan="5" class="min-w-250">HARI PENYAKIT</th>
                <th rowspan="5">KETERANGAN</th>
            </tr>
            <tr>
                @for ($i = 1; $i <= 5; $i++)
                    <th>{{ $i }}</th>
                @endfor
            </tr>
            <tr>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->hari_penyakit))
                        <th class="text-center p-1">
                            <input type="checkbox" id="hp{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false"
                            @elseif ($cmd === 'edit') name="hari_penyakit[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="hp{{ $i }}"></label>
                        </th>
                    @else
                        <th class="text-center p-1">
                            <input type="checkbox" id="hp{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false"
                            @elseif ($cmd === 'edit') name="hari_penyakit[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="hp{{ $i }}"></label>
                        </th>
                    @endif
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
                @for ($i = 0; $i < 5; $i++)
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
                    <p>Kondisi umum, tingkat kesadaran, tanda-tanda vital, riwayat
                        alergi, skrining gizi, nyeri</p>
                </td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->asesment_primer))
                        <td class="text-center p-1">
                            <input type="checkbox" id="asesPerPri{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="asesment_primer[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="asesPerPri{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="asesPerPri{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="asesment_primer[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="asesPerPri{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    Dilanjutkan dengan asesmen bio, psiko, sosial, spiritual,
                    dan budaya
                </td>
            </tr>
            <tr>
                <td rowspan="8">2. LABORATORIUM</td>
                <td>Darah Lengkap</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->lab_darah))
                        <td class="text-center p-1">
                            <input type="checkbox" id="labDarah{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="lab_darah[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="labDarah{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="labDarah{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="lab_darah[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="labDarah{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>Hemoglobin tiap 1 bulan</td>
            </tr>
            <tr>
                <td>Elektrolit darah (Natrium, Kalium, Klorida, Kalsium, Fosfor)</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->lab_elektrolit))
                        <td class="text-center p-1">
                            <input type="checkbox" id="labElektrolit{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="lab_elektrolit[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="labElektrolit{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="labElektrolit{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="lab_elektrolit[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="labElektrolit{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>Pertama kali HD dan setiap 3 bulan</td>
            </tr>
            <tr>
                <td>Ureum, Creatinin, dan eGFR</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->lab_ureum))
                        <td class="text-center p-1">
                            <input type="checkbox" id="labUreum{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="lab_ureum[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="labUreum{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="labUreum{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="lab_ureum[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="labUreum{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td></td>
            </tr>
            <tr>
                <td>HbsAg, Anti HCV, HIV</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->lab_hcv))
                        <td class="text-center p-1">
                            <input type="checkbox" id="labHCV{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="lab_hcv[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="labHCV{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="labHCV{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="lab_hcv[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="labHCV{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>Pertama kali HD dan dalam 6 bulan</td>
            </tr>
            <tr>
                <td>PT, APTT</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->lab_pt))
                        <td class="text-center p-1">
                            <input type="checkbox" id="labPT{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="lab_pt[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="labPT{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="labPT{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="lab_pt[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="labPT{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td></td>
            </tr>
            <tr>
                <td>Magnesium (Mg)</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->lab_magnesium))
                        <td class="text-center p-1">
                            <input type="checkbox" id="labMagnesium{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="lab_magnesium[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="labMagnesium{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="labMagnesium{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="lab_magnesium[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="labMagnesium{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>Pemeriksaan khusus pada pasien aritmia, diperiksa setiap tahun</td>
            </tr>
            <tr>
                <td>Serum Iron, TIBC, Ferritin</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->lab_tibc))
                        <td class="text-center p-1">
                            <input type="checkbox" id="labTIBC{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="lab_tibc[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="labTIBC{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="labTIBC{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="lab_tibc[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="labTIBC{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>Peserta yang menjalani HD rutin dengan anemia renal</td>
            </tr>
            <tr>
                <td>PTH</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->lab_pth))
                        <td class="text-center p-1">
                            <input type="checkbox" id="labPTH{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="lab_pth[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="labPTH{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="labPTH{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="lab_pth[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="labPTH{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>Setiap tahun</td>
            </tr>
            <tr>
                <td>3. RADIOLOGI/IMAGING</td>
                <td>Foto toraks PA</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->radio_foto))
                        <td class="text-center p-1">
                            <input type="checkbox" id="radFoto{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="radio_foto[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="radFoto{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="radFoto{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="radio_foto[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="radFoto{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>Pasien Pertama kali HD</td>
            </tr>
            <tr>
                <td rowspan="2">4. VARIAN</td>
                <td>EKG / Echocardiogram</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->var_ekg))
                        <td class="text-center p-1">
                            <input type="checkbox" id="varEKG{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="var_ekg[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="varEKG{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="varEKG{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="var_ekg[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="varEKG{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>Pasien Pertama kali HD dan setiap 6 bulan</td>
            </tr>
            <tr>
                <td>Echocardiogram</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->var_echo))
                        <td class="text-center p-1">
                            <input type="checkbox" id="varEcho{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="var_echo[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="varEcho{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="varEcho{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="var_echo[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="varEcho{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>Setiap 3 tahun atau setiap tahun bila ada heart failure</td>
            </tr>
            <tr>
                <td>5. KONSULTASI</td>
                <td></td>
                @for ($i = 0; $i < 5; $i++)
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
                <td>Varian</td>
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
                <td>Dokter non DPJP/dokter Ruangan</td>
                @for ($i = 0; $i < 5; $i++)
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
                @for ($i = 0; $i < 5; $i++)
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
                <td>Skrining Gizi</td>
                @for ($i = 0; $i < 5; $i++)
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
                <td>
                    Lihat risiko malnutrisi melalui skrining gizi dan mengkaji
                    data antropometri, biokimia, fisik/klinis, riwayat makan
                    termasuk alergi makanan serta riwayat personal. Asesmen
                    dilakukan dalam waktu 48 jam
                </td>
            </tr>
            <tr>
                <td rowspan="2">d. ASESMEN FARMASI</td>
                <td>Telaah Resep</td>
                @for ($i = 0; $i < 5; $i++)
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
                <td rowspan="2">
                    Dilanjutkan dengan intervensi farmasi yang sesuai hasil
                    Telaah dan Rekonsiliasi obat
                </td>
            </tr>
            <tr>
                <td>Rekonsiliasi Obat</td>
                @for ($i = 0; $i < 5; $i++)
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
                    @if (in_array($i + 1, $data->diagnosa_aki))
                        <td class="text-center p-1">
                            <input type="checkbox" id="diagAKI{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_aki[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="diagAKI{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="diagAKI{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_aki[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="diagAKI{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>Kode ICD-10: N17.9</td>
            </tr>
            <tr>
                <td>End Stage Renal Disease</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->diagnosa_end))
                        <td class="text-center p-1">
                            <input type="checkbox" id="diagEnd{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_end[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="diagEnd{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="diagEnd{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_end[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="diagEnd{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>Kode ICD-10: N18.6</td>
            </tr>
            <tr>
                <td rowspan="10">b. DIAGNOSIS KEPERAWATAN</td>
                <td>a. Kode : 0005 Pola Napas Tidak Efektif</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->diagnosa_napas))
                        <td class="text-center p-1">
                            <input type="checkbox" id="diagNapas{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_napas[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="diagNapas{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="diagNapas{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_napas[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="diagNapas{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td rowspan="10">
                    Masalah keperawatan yang dijumpai setiap hari. Dibuat oleh
                    perawat penanggung jawab
                </td>
            </tr>
            <tr>
                <td>b. Kode : 0016 Risiko Perfusi Renal Tidak Efektif</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->diagnosa_perfusi))
                        <td class="text-center p-1">
                            <input type="checkbox" id="diagPerfusi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_perfusi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="diagPerfusi{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="diagPerfusi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_perfusi[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="diagPerfusi{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>c. Kode : 0022 Hipervolemia</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->diagnosa_hipervolemia))
                        <td class="text-center p-1">
                            <input type="checkbox" id="diagHipervolemia{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_hipervolemia[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="diagHipervolemia{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="diagHipervolemia{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_hipervolemia[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="diagHipervolemia{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>d. Kode : 0019 Defisit Nutrisi</td>
                @for ($i = 0; $i < 5; $i++)
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
                <td>e. Kode : 0076 Nausea</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->diagnosa_nausea))
                        <td class="text-center p-1">
                            <input type="checkbox" id="diagNausea{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_nausea[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="diagNausea{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="diagNausea{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_nausea[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="diagNausea{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>f. Kode : 0056 Intoleransi Aktivitas</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->diagnosa_aktivitas))
                        <td class="text-center p-1">
                            <input type="checkbox" id="diagAktivitas{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_aktivitas[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="diagAktivitas{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="diagAktivitas{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_aktivitas[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="diagAktivitas{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>g. Kode : 0129 Gangguan Integritas Kulit / Jaringan</td>
                @for ($i = 0; $i < 5; $i++)
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
                <td>h. Kode : 0008 Penurunan Curah Jantung</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->diagnosa_jantung))
                        <td class="text-center p-1">
                            <input type="checkbox" id="diagJantung{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_jantung[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="diagJantung{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="diagJantung{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_jantung[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="diagJantung{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>i. Kode : 0009 Perfusi Perifer Tidak Efektif</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->diagnosa_perifer))
                        <td class="text-center p-1">
                            <input type="checkbox" id="diagPerifer{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_perifer[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="diagPerifer{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="diagPerifer{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_perifer[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="diagPerifer{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>j. Kode : 0142 Risiko Infeksi</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->diagnosa_infeksi))
                        <td class="text-center p-1">
                            <input type="checkbox" id="diagInfeksi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_infeksi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="diagInfeksi{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="diagInfeksi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_infeksi[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="diagInfeksi{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td rowspan="3">c. DIAGNOSIS GIZI</td>
                <td>Restriksi Cairan 600cc / 24 jam</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->diagnosa_cairan))
                        <td class="text-center p-1">
                            <input type="checkbox" id="diagGiziCairan{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_cairan[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="diagGiziCairan{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="diagGiziCairan{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_cairan[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="diagGiziCairan{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td rowspan="3">
                    Sesuai dengan data asesmen, kemungkinan saja ada diagnosis
                    lain atau diagnosis berubah selama perawatan
                </td>
            </tr>
            <tr>
                <td>Diet Rendah Garam (Natrium &lt; 2gr / hari)</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->diagnosa_garam))
                        <td class="text-center p-1">
                            <input type="checkbox" id="diagGiziGaram{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_garam[{{ $i }}]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="diagGiziGaram{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="diagGiziGaram{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_garam[{{ $i }}]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="diagGiziGaram{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>Diet Protein (1.2 gr / kg BB / hari)</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->diagnosa_protein))
                        <td class="text-center p-1">
                            <input type="checkbox" id="diagGiziProtein{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_protein[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="diagGiziProtein{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="diagGiziProtein{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_protein[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="diagGiziProtein{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td rowspan="4">8. DISCHARGE PLANNING</td>
                <td>Edukasi kondisi pasien</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->displan_edukasi))
                        <td class="text-center p-1">
                            <input type="checkbox" id="disPlanEdukasi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="displan_edukasi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="disPlanEdukasi{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="disPlanEdukasi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="displan_edukasi[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="disPlanEdukasi{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td rowspan="4"></td>
            </tr>
            <tr>
                <td>Edukasi rencana dialysis (Resiko dan komplikasi)</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->displan_rencana))
                        <td class="text-center p-1">
                            <input type="checkbox" id="disPlanRencana{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="displan_rencana[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="disPlanRencana{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="disPlanRencana{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="displan_rencana[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="disPlanRencana{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>Edukasi obat-obatan rutin</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->displan_obat))
                        <td class="text-center p-1">
                            <input type="checkbox" id="disPlanObat{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="displan_obat[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="disPlanObat{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="disPlanObat{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="displan_obat[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="disPlanObat{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>Edukasi rencana tatalaksana lanjutan dan kontrol</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->displan_kontrol))
                        <td class="text-center p-1">
                            <input type="checkbox" id="disPlanKontrol{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="displan_kontrol[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="disPlanKontrol{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="disPlanKontrol{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="displan_kontrol[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="disPlanKontrol{{ $i }}"></label>
                        </td>
                    @endif
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
                <td rowspan="2">
                    Oleh semua pemberi asuhan berdasarkan kebutuhan dan juga
                    berdasarkan Discharge Planning
                </td>
            </tr>
            <tr>
                <td>Rencana terapi</td>
                @for ($i = 0; $i < 5; $i++)
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
                @for ($i = 0; $i < 5; $i++)
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
                <td>Informed consent HD diulang tiap 6 bulan</td>
            </tr>
            <tr>
                <td>b. EDUKASI DAN KONSELING GIZI</td>
                <td>
                    Menginformasikan status gizi, jenis diet, tujuan diet,
                    bentuk makanan
                </td>
                @for ($i = 0; $i < 5; $i++)
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
                <td>
                    Edukasi gizi dilakukan saat awal masuk dan atau pada hari ke
                    1/hari ke 2
                </td>
            </tr>
            <tr>
                <td rowspan="5">c. EDUKASI KEPERAWATAN</td>
                <td>a. Diet pada pasien gagal ginjal</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->edukasi_ginjal))
                        <td class="text-center p-1">
                            <input type="checkbox" id="ekepGinjal{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_ginjal[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="ekepGinjal{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="ekepGinjal{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_ginjal[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="ekepGinjal{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td rowspan="5">Pengisian formulir informasi dan edukasi terintegrasi oleh pasien dan atau keluarga
                </td>
            </tr>
            <tr>
                <td>b. Penjelasan kelebihan dan kekurangan hemodialisa</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->edukasi_hemodialisa))
                        <td class="text-center p-1">
                            <input type="checkbox" id="ekepHemodialisa{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_hemodialisa[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="ekepHemodialisa{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="ekepHemodialisa{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_hemodialisa[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="ekepHemodialisa{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>c. Perawatan catheter doblelumen (CDL) di rumah</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->edukasi_cdl))
                        <td class="text-center p-1">
                            <input type="checkbox" id="ekepCDL{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_cdl[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="ekepCDL{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="ekepCDL{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_cdl[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="ekepCDL{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>d. Kebutuhan intake dan output cairan</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->edukasi_output))
                        <td class="text-center p-1">
                            <input type="checkbox" id="ekepOutput{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_output[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="ekepOutput{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="ekepOutput{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_output[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="ekepOutput{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>e. Pentingnya dukungan keluarga</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->edukasi_dukungan))
                        <td class="text-center p-1">
                            <input type="checkbox" id="ekepDukungan{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_dukungan[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="ekepDukungan{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="ekepDukungan{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_dukungan[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="ekepDukungan{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td rowspan="2">d. EDUKASI FARMASI</td>
                <td>Informasi Obat</td>
                @for ($i = 0; $i < 5; $i++)
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
                <td rowspan="2">
                    Meningkatkan kepatuhan pasien meminum/menggunakan obat
                </td>
            </tr>
            <tr>
                <td>Konseling Obat</td>
                @for ($i = 0; $i < 5; $i++)
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
                @for ($i = 0; $i < 5; $i++)
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
                <td>DTT keluarga/pasien</td>
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
                    @if (in_array($i + 1, $data->tindakan_cartheter))
                        <td class="text-center p-1">
                            <input type="checkbox" id="tindakanCartheter{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="tindakan_cartheter[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="tindakanCartheter{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="tindakanCartheter{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="tindakan_cartheter[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="tindakanCartheter{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td></td>
            </tr>
            <tr>
                <td>O2 Nasal Canul 4L / Menit</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->tindakan_nasal))
                        <td class="text-center p-1">
                            <input type="checkbox" id="tindakanNasal{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="tindakan_nasal[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="tindakanNasal{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="tindakanNasal{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="tindakan_nasal[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="tindakanNasal{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td></td>
            </tr>
            <tr>
                <td>b. CAIRAN INFUS</td>
                <td>Kristaloid : NaCol 0,9% / D5%</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->injeksi_kristaloid))
                        <td class="text-center p-1">
                            <input type="checkbox" id="infusKristaloid{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="injeksi_kristaloid[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="infusKristaloid{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="infusKristaloid{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="injeksi_kristaloid[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="infusKristaloid{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>Optional</td>
            </tr>
            <tr>
                <td rowspan="4">c. INJEKSI</td>
                <td>Antikoagulan</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->inject_antikoagulan))
                        <td class="text-center p-1">
                            <input type="checkbox" id="injectAntikoagulan{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="inject_antikoagulan[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="injectAntikoagulan{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="injectAntikoagulan{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="inject_antikoagulan[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="injectAntikoagulan{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td></td>
            </tr>
            <tr>
                <td>Diberikan dosis awal secara bolus 2000 IU, tunggu 3-5 menit untuk membiarkan heparin menyebar merata
                    kepermukaan dialyzer</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->inject_bolus))
                        <td class="text-center p-1">
                            <input type="checkbox" id="injectBolus{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="inject_bolus[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="injectBolus{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="injectBolus{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="inject_bolus[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="injectBolus{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>Pada pasien tanpa resiko perdarahan</td>
            </tr>
            <tr>
                <td>Heparin kontinyu dengan kecepatan 1000 IU/ jam</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->inject_heparin))
                        <td class="text-center p-1">
                            <input type="checkbox" id="injectHeparin{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="inject_heparin[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="injectHeparin{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="injectHeparin{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="inject_heparin[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="injectHeparin{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td></td>
            </tr>
            <tr>
                <td>Eritropoetin</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->inject_eritropoetin))
                        <td class="text-center p-1">
                            <input type="checkbox" id="injectEritropoetin{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="inject_eritropoetin[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="injectEritropoetin{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="injectEritropoetin{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="inject_eritropoetin[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="injectEritropoetin{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td></td>
            </tr>
            <tr>
                <td rowspan="2">d. OBAT ORAL</td>
                <td>Asam Folat 1x5 mg</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->oral_asamFolat))
                        <td class="text-center p-1">
                            <input type="checkbox" id="oralAsamFolat{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="oral_asamFolat[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="oralAsamFolat{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="oralAsamFolat{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="oral_asamFolat[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="oralAsamFolat{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td></td>
            </tr>
            <tr>
                <td>Anti Hipertensi</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->oral_hipertensi))
                        <td class="text-center p-1">
                            <input type="checkbox" id="oralHipertensi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="oral_hipertensi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="oralHipertensi{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="oralHipertensi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="oral_hipertensi[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="oralHipertensi{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td></td>
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
                <td></td>
            </tr>
            <tr>
                <td rowspan="7">b. TATA LAKSANA/INTERVENSI KEPERAWATAN</td>
                <td>a. NIC : 4120 Manajemen cairan dan elektrolit</td>
                @for ($i = 0; $i < 5; $i++)
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
                <td rowspan="7">Mengaju pada NIC</td>
            </tr>
            <tr>
                <td>b. NIC: 3786 Manajemen hipertermia</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->intervensi_hipertermia))
                        <td class="text-center p-1">
                            <input type="checkbox" id="tatkepHipertermia{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_hipertermia[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="tatkepHipertermia{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="tatkepHipertermia{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_hipertermia[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="tatkepHipertermia{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>b. NIC: 6540 Manajemen infeksi</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->intervensi_infeksi))
                        <td class="text-center p-1">
                            <input type="checkbox" id="tatkepInfeksi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_infeksi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="tatkepInfeksi{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="tatkepInfeksi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_infeksi[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="tatkepInfeksi{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>d. NIC : 1100 Manajemen nutrisi</td>
                @for ($i = 0; $i < 5; $i++)
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
                <td>e. NIC : 4310 Pemenuhan ADL</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->intervensi_ADL))
                        <td class="text-center p-1">
                            <input type="checkbox" id="tatkepADL{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_ADL[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="tatkepADL{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="tatkepADL{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_ADL[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="tatkepADL{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>f. NIC : 4190 Kolaborasi pemasangan infus</td>
                @for ($i = 0; $i < 5; $i++)
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
                <td>g. NIC : 2380 Kolaborasi pemberian obat</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->intervensi_obat))
                        <td class="text-center p-1">
                            <input type="checkbox" id="tatkepObat{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_obat[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="tatkepObat{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="tatkepObat{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_obat[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="tatkepObat{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>c. TATA LAKSANA/INTERVENSI GIZI</td>
                <td>Memberikan makanan berdasarkan kebutuhan gizi dalam bentuk cair, saring, lunak, biasa, secara
                    bertahap sesuai dengan kondisi klinis, dengan jenis sesuai dengan assesmen gizi masing- masing
                    pasien</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->intervensi_gizi))
                        <td class="text-center p-1">
                            <input type="checkbox" id="tatgizi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_gizi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="tatgizi{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="tatgizi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_gizi[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="tatgizi{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td></td>
            </tr>
            <tr>
                <td>d. TATA LAKSANA/INTERVENSI FARMASI</td>
                <td>Rekomendasi kepala DPJP</td>
                @for ($i = 0; $i < 5; $i++)
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
                <td>Monitor perkembangan pasien</td>
            </tr>
            <tr>
                <td rowspan="5">b. KEPERAWATAN</td>
                <td>a. Monitoring vital sign pasien</td>
                @for ($i = 0; $i < 5; $i++)
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
                <td rowspan="5">Mengacu pada NOC</td>
            </tr>
            <tr>
                <td>b. Monitoring intake dan output cairan</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->monev_cairan))
                        <td class="text-center p-1">
                            <input type="checkbox" id="monevkepCairan{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_cairan[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="monevkepCairan{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="monevkepCairan{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_cairan[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="monevkepCairan{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>c. Monitoring nutrisi</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->monev_nutrisi))
                        <td class="text-center p-1">
                            <input type="checkbox" id="monevkepNutrisi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_nutrisi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="monevkepNutrisi{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="monevkepNutrisi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_nutrisi[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="monevkepNutrisi{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>d. Monitoring skala nyeri</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->monev_nyeri))
                        <td class="text-center p-1">
                            <input type="checkbox" id="monevkepNyeri{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_nyeri[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="monevkepNyeri{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="monevkepNyeri{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_nyeri[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="monevkepNyeri{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>e. Monitoring tanda-tanda infeksi</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->monev_infeksi))
                        <td class="text-center p-1">
                            <input type="checkbox" id="monevkepInfeksi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_infeksi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="monevkepInfeksi{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="monevkepInfeksi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_infeksi[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="monevkepInfeksi{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td rowspan="4">c. GIZI</td>
                <td>Monitoring asupan makanan</td>
                @for ($i = 0; $i < 5; $i++)
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
                <td>
                    Sesuai dengan masalah gizi dan tanda gejala yang akan
                    dilihat kemajuannya. Monev pada hari ke 4 atau ke 5 kecuali
                    asupan makanan
                </td>
            </tr>
            <tr>
                <td>Monitoring Antropometri</td>
                @for ($i = 0; $i < 5; $i++)
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
                <td></td>
            </tr>
            <tr>
                <td>Monitoring biokimia</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->monev_biokimia))
                        <td class="text-center p-1">
                            <input type="checkbox" id="monevgiziBiokimia{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_biokimia[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="monevgiziBiokimia{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="monevgiziBiokimia{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_biokimia[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="monevgiziBiokimia{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td></td>
            </tr>
            <tr>
                <td>Monitoring fisik/klinis terkait gizi</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->monev_fisik))
                        <td class="text-center p-1">
                            <input type="checkbox" id="monevgiziFisik{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_fisik[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="monevgiziFisik{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="monevgiziFisik{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_fisik[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="monevgiziFisik{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td></td>
            </tr>
            <tr>
                <td rowspan="3">d. FARMASI</td>
                <td>Monitoring efektivitas obat</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->monev_efektiv))
                        <td class="text-center p-1">
                            <input type="checkbox" id="monevfarmEfektiv{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_efektiv[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="monevfarmEfektiv{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="monevfarmEfektiv{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_efektiv[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="monevfarmEfektiv{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td rowspan="3">
                    Dilanjutkan dengan intervensi farmasi yang sesuai hasil
                    monitoring
                </td>
            </tr>
            <tr>
                <td>Monitoring interaksi obat</td>
                @for ($i = 0; $i < 5; $i++)
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
            </tr>
            <tr>
                <td>Monitoring efek samping obat</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->monev_efek))
                        <td class="text-center p-1">
                            <input type="checkbox" id="monevfarmEfek{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_efek[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="monevfarmEfek{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="monevfarmEfek{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_efek[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="monevfarmEfek{{ $i }}"></label>
                        </td>
                    @endif
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
                <td>Dibantu sebagian/mandiri</td>
                @for ($i = 0; $i < 5; $i++)
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
                <td></td>
                @for ($i = 0; $i < 5; $i++)
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
                    @if (in_array($i + 1, $data->hasil_batuk))
                        <td class="text-center p-1">
                            <input type="checkbox" id="hasmedBatuk{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_batuk[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="hasmedBatuk{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="hasmedBatuk{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_batuk[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="hasmedBatuk{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td></td>
            </tr>
            <tr>
                <td>Laboratorium (Ur, Cr, eGFR) paska HD perbaikan</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->hasil_lab))
                        <td class="text-center p-1">
                            <input type="checkbox" id="hasmedLab{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_lab[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="hasmedLab{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="hasmedLab{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_lab[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="hasmedLab{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td></td>
            </tr>
            <tr>
                <td rowspan="3">b. KEPERAWATAN</td>
                <td>a. Tanda vital dalam batas normal</td>
                @for ($i = 0; $i < 5; $i++)
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
                <td>Mengacu pada NOC</td>
            </tr>
            <tr>
                <td>b. Indeks output seimbang</td>
                @for ($i = 0; $i < 5; $i++)
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
                <td></td>
            </tr>
            <tr>
                <td>c. Tidak ada tanda-tanda infeksi</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->hasil_infeksi))
                        <td class="text-center p-1">
                            <input type="checkbox" id="haskepInfeksi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_infeksi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="haskepInfeksi{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="haskepInfeksi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_infeksi[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="haskepInfeksi{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>Dilakukan dalam 3 shift</td>
            </tr>
            <tr>
                <td rowspan="2">c. GIZI</td>
                <td>Asupan makanan >= 80%</td>
                @for ($i = 0; $i < 5; $i++)
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
                <td rowspan="2">
                    Status Gizi berdasarkan antropometri, biokimia, fisik/klinis
                </td>
            </tr>
            <tr>
                <td>Optimalisasi Status Gizi</td>
                @for ($i = 0; $i < 5; $i++)
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
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->hasil_terapi))
                        <td class="text-center p-1">
                            <input type="checkbox" id="hasgiziTerapi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_terapi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="hasgiziTerapi{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="hasgiziTerapi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_terapi[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="hasgiziTerapi{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td rowspan="2">Meningkatkan kualitas hidup pasien</td>
            </tr>
            <tr>
                <td>Obat rasional</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->hasil_rasional))
                        <td class="text-center p-1">
                            <input type="checkbox" id="hasgiziRasional{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_rasional[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="hasgiziRasional{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="hasgiziRasional{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_rasional[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="hasgiziRasional{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td rowspan="2">15. KRITERIA PULANG</td>
                <td>Umum: hemodinamik stabil, keluhan berkurang atau hilang</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->pulang_umum))
                        <td class="text-center p-1">
                            <input type="checkbox" id="pulangUmum{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="pulang_umum[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="pulangUmum{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="pulangUmum{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="pulang_umum[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="pulangUmum{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td rowspan="2">Status pasien/tanda vital sesuai dengan PPK</td>
            </tr>
            <tr>
                <td>Khusus: tidak ada komplikasi</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->pulang_khusus))
                        <td class="text-center p-1">
                            <input type="checkbox" id="pulangKhusus{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="pulang_khusus[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="pulangKhusus{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="pulangKhusus{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="pulang_khusus[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="pulangKhusus{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td rowspan="3">
                    16. RENCANA PULANG/EDUKASI PELAYANAN LANJUTAN
                </td>
                <td>Resume Medis dan Keperawatan</td>
                @for ($i = 0; $i < 5; $i++)
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
                <td rowspan="3">
                    Pasien membawa Resume Perawatan/Surat Rujukan/Surat
                    Kontrol/Homecare saat pulang
                </td>
            </tr>
            <tr>
                <td>Penjelasan diberikan sesuai dengan keadaan umum pasien</td>
                @for ($i = 0; $i < 5; $i++)
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
                @for ($i = 0; $i < 5; $i++)
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
                <td>Rencana operasi AV Shunt (untuk akses permanen)</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->varian_rencana))
                        <td class="text-center p-1">
                            <input type="checkbox" id="varianRencana{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="varian_rencana[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="varianRencana{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="varianRencana{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="varian_rencana[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="varianRencana{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td></td>
            </tr>
        </tbody>
    </table>
</div>
