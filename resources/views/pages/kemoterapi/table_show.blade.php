<div class="table-responsive">
    <table id="" class="table table-bordered display margin-top-10">
        <thead class="text-center">
            <tr>
                <th rowspan="5" class="min-w-100">KEGIATAN</th>
                <th rowspan="5"
                    class="@if ($cmd === 'edit') min-w-50 @elseif ($cmd === 'show') min-w-180 @endif">
                    URAIAN KEGIATAN</th>
                <th colspan="5">HARI PENYAKIT </th>
                <th rowspan="5"
                    class="@if ($cmd === 'edit') min-w-250 @elseif ($cmd === 'show') min-w-100 @endif">
                    KETERANGAN</th>
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
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="asesDokIgd{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="asesment_igd[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="asesDokIgd{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="asesDokIgd{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="asesment_igd[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="asesDokIgd{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_asesDokIgd)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanAsesDokIgd" name="catatan_asesDokIgd">{{ $data->catatan_asesDokIgd }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Dokter Penanggung Jawab Pasien (DPJP) / Dokter Spesialis Konsultan</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->asesment_spesialis))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="asesDokSpe{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="asesment_spesialis[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="asesDokSpe{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="asesDokSpe{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="asesment_spesialis[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="asesDokSpe{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_asesDokSpe)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanAsesDokSpe" name="catatan_asesDokSpe">{{ $data->catatan_asesDokSpe }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>b. ASESMEN AWAL KEPERAWATAN</td>
                <td>
                    <p>Perawat Primer :</p>
                    <p>Kondisi umum, tingkat kesadaran, tanda-tanda vital,riwayat alergi, skrining gizi, nyeri</p>
                </td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->asesment_primer))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="asesPerPri{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="asesment_primer[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="asesPerPri{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="asesPerPri{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="asesment_primer[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="asesPerPri{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_asesPer)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanAsesPer" name="catatan_asesPer">{{ $data->catatan_asesPer }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td rowspan="3">2. LABORATORIUM</td>
                <td>Darah Lengkap</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->lab_darah))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="labDarah{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="lab_darah[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="labDarah{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="labDarah{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="lab_darah[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="labDarah{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_labDarah)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanLabDarah" name="catatan_labDarah">{{ $data->catatan_labDarah }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Elektrolit Darah (Natrium, Kalium, Klorida)</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->lab_elektrolit))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="labElektrolit{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="lab_elektrolit[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="labElektrolit{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="labElektrolit{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="lab_elektrolit[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="labElektrolit{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_labElektrolit)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanLabElektrolit" name="catatan_labElektrolit">{{ $data->catatan_labElektrolit }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Ureum dan Creatinin</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->lab_ureum))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="labUreum{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="lab_ureum[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="labUreum{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="labUreum{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="lab_ureum[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="labUreum{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_labUreum)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanLabUreum" name="catatan_labUreum">{{ $data->catatan_labUreum }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td rowspan="2">3. RADIOLOGI/IMAGING</td>
                <td>Foto toraks PA</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->radio_foto))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="radFoto{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="radio_foto[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="radFoto{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="radFoto{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="radio_foto[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="radFoto{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_radFoto)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanRadFoto" name="catatan_radFoto">{{ $data->catatan_radFoto }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>USG</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->radio_USG))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="radUSG{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="radio_USG[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="radUSG{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="radUSG{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="radio_USG[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="radUSG{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_radUSG)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanRadUSG" name="catatan_radUSG">{{ $data->catatan_radUSG }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td rowspan="2">4. VARIAN</td>
                <td>PATOLOGI ANATOMI</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->varian_pato))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="varPato{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="varian_pato[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="varPato{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="varPato{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="varian_pato[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="varPato{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_varPato)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanVarPato" name="catatan_varPato">{{ $data->catatan_varPato }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>EKG</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->varian_ekg))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="varEkg{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="varian_ekg[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="varEkg{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="varEkg{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="varian_ekg[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="varEkg{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_varEkg)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanVarEkg" name="catatan_varEkg">{{ $data->catatan_varEkg }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>5. KONSULTASI</td>
                <td></td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->konsultasi))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="konsul{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="konsultasi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="konsul{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="konsul{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="konsultasi[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="konsul{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_konsul)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanKonsul" name="catatan_konsul">{{ $data->catatan_konsul }}</textarea>
                    @endif
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
                    @if (in_array($i + 1, $data->ases_DPJP))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="asesDPJP{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="ases_DPJP[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="asesDPJP{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="asesDPJP{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="ases_DPJP[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="asesDPJP{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_asesDPJP)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanAsesDPJP" name="catatan_asesDPJP">{{ $data->catatan_asesDPJP }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Dokter non DPJP/dokter Ruangan</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->ases_nonDPJP))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="asesNonDPJP{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="ases_nonDPJP[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="asesNonDPJP{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="asesNonDPJP{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="ases_nonDPJP[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="asesNonDPJP{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_asesNonDPJP)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanAsesNonDPJP" name="catatan_asesNonDPJP">{{ $data->catatan_asesNonDPJP }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>b. ASESMEN KEPERAWATAN</td>
                <td>Perawat Penanggung Jawab</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->ases_PPJ))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="asesPPJ{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="ases_PPJ[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="asesPPJ{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="asesPPJ{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="ases_PPJ[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="asesPPJ{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_asesPPJ)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanAsesPPJ" name="catatan_asesPPJ">{{ $data->catatan_asesPPJ }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>c. ASESMEN GIZI</td>
                <td>Skrining Gizi</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->ases_gizi))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="asesGizi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="ases_gizi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="asesGizi{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="asesGizi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="ases_gizi[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="asesGizi{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_asesGizi)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanAsesGizi" name="catatan_asesGizi">{{ $data->catatan_asesGizi }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td rowspan="2">d. ASESMEN FARMASI</td>
                <td>Telaah Resep</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->ases_resep))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="asesResep{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="ases_resep[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="asesResep{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="asesResep{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="ases_resep[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="asesResep{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td rowspan="2">
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_asesResep)) !!}
                    @else
                        <textarea rows="5" class="form-control" id="catatanAsesResep" name="catatan_asesResep">{{ $data->catatan_asesResep }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Rekonsiliasi Obat</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->ases_obat))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @elseif ($cmd === 'edit' && $i !== 0) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="asesObat{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="ases_obat[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="asesObat{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @elseif ($cmd === 'edit' && $i !== 0) style="background-color: #95FFFF" @endif>
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
                <td>a. DIAGNOSIS MEDIS</td>
                <td>Chemotherapy for Cancer</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->diagnosa_medis))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="diagChemotherapy{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_medis[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="diagChemotherapy{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="diagChemotherapy{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_medis[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="diagChemotherapy{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_diagChemotherapy)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanDiagChemotherapy" name="catatan_diagChemotherapy">{{ $data->catatan_diagChemotherapy }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td rowspan="5">b. DIAGNOSIS KEPERAWATAN</td>
                <td>a. Kode : 0076 Nausea</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->diagnosa_nausea))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="diagNausea{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_nausea[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="diagNausea{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="diagNausea{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_nausea[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="diagNausea{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td rowspan="5">
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_diagNausea)) !!}
                    @else
                        <textarea rows="10" class="form-control" id="catatanDiagNausea" name="catatan_diagNausea">{{ $data->catatan_diagNausea }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>b. Kode : 0083 Gangguan Citra Tubuh</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->diagnosa_gangguan))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="diagGangguan{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_gangguan[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="diagGangguan{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="diagGangguan{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_gangguan[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="diagGangguan{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>c. Kode : 0080 Ansietas</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->diagnosa_ansietas))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="diagAnsietas{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_ansietas[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="diagAnsietas{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="diagAnsietas{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_ansietas[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="diagAnsietas{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>d. Kode : 0078 Nyeri Kronis</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->diagnosa_nyeri))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="diagNyeri{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_nyeri[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="diagNyeri{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="diagNyeri{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_nyeri[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="diagNyeri{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>e. Kode : 0056 Intoleransi Aktivitas</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->diagnosa_intoleransi))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="diagIntoleransi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_intoleransi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="diagIntoleransi{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="diagIntoleransi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_intoleransi[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="diagIntoleransi{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td rowspan="2">c. DIAGNOSIS GIZI</td>
                <td>Tidak adekuat masukan makan berkaitan dengan tidak nafsu makan, mual, dan muntah ditandai dengan
                    asupan energi protein kurang dari kebutuhan</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->diagnosa_adekuat))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 2) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="diagAdekuat{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_adekuat[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="diagAdekuat{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 2) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="diagAdekuat{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_adekuat[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="diagAdekuat{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td rowspan="2">
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_diagAdekuat)) !!}
                    @else
                        <textarea rows="12" class="form-control" id="catatanDiagAdekuat" name="catatan_diagAdekuat">{{ $data->catatan_diagAdekuat }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Malnutrisi berkaitan dengan asupan makan yang kurang ditandai dengan berat badan yang menurun IMT
                    dibawah standar normal dan terlihat kehilangan massa lemak dan massa otot</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->diagnosa_malnutrisi))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 2) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="diagMalnutrisi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_malnutrisi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="diagMalnutrisi{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 2) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="diagMalnutrisi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_malnutrisi[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="diagMalnutrisi{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td rowspan="4">8. DISCHARGE PLANNING</td>
                <td>Edukasi Kondisi Pasien</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->displan_kondisi))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="disPlanKondisi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="displan_kondisi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="disPlanKondisi{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="disPlanKondisi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="displan_kondisi[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="disPlanKondisi{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td rowspan="4">
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_disPlanKondisi)) !!}
                    @else
                        <textarea rows="9" class="form-control" id="catatanDisPlanKondisi" name="catatan_disPlanKondisi">{{ $data->catatan_disPlanKondisi }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Edukasi rencana Kemoterapi</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->displan_kemoterapi))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="disPlanKemoterapi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="displan_kemoterapi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="disPlanKemoterapi{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="disPlanKemoterapi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="displan_kemoterapi[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="disPlanKemoterapi{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>Edukasi obat-obatan rutin</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->displan_obat))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="disPlanObat{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="displan_obat[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="disPlanObat{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
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
                    @if (in_array($i + 1, $data->displan_tatalaksana))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="disPlanTatalaksana{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="displan_tatalaksana[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="disPlanTatalaksana{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="disPlanTatalaksana{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="displan_tatalaksana[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="disPlanTatalaksana{{ $i }}"></label>
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
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="emedDiag{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_diagnosis[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="emedDiag{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="emedDiag{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_diagnosis[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="emedDiag{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td rowspan="3">
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_emedDiag)) !!}
                    @else
                        <textarea rows="6" class="form-control" id="catatanEmedDiag" name="catatan_emedDiag">{{ $data->catatan_emedDiag }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Rencana terapi</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->edukasi_terapi))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="emedTerapi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_terapi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="emedTerapi{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
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
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="emedConsent{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_consent[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="emedConsent{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
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
                <td>
                    Menginformasikan status gizi, jenis diet, tujuan diet,
                    bentuk makanan
                </td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->edukasi_gizi))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 2) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="egiz{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_gizi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="egiz{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 2) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="egiz{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_gizi[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="egiz{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_egiz)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanEgiz" name="catatan_egiz">{{ $data->catatan_egiz }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>c. EDUKASI KEPERAWATAN</td>
                <td>Pentingnya dukungan keluarga</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->edukasi_keluarga))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="ekepKeluarga{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_keluarga[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="ekepKeluarga{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="ekepKeluarga{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_keluarga[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="ekepKeluarga{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_ekepKeluarga)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanEkepKeluarga" name="catatan_ekepKeluarga">{{ $data->catatan_ekepKeluarga }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td rowspan="2">d. EDUKASI FARMASI</td>
                <td>Informasi Obat</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->edukasi_info))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && ($i === 0 || $i === 4)) style="background-color: #FEA8B9" @elseif ($cmd === 'edit' && ($i !== 0 || $i !== 4)) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="efarmInf{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_info[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="efarmInf{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && ($i === 0 || $i === 4)) style="background-color: #FEA8B9" @elseif ($cmd === 'edit' && ($i !== 0 || $i !== 4)) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="efarmInf{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_info[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="efarmInf{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td rowspan="2">
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_efarmInf)) !!}
                    @else
                        <textarea rows="5" class="form-control" id="catatanEfarmInf" name="catatan_efarmInf">{{ $data->catatan_efarmInf }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Konseling Obat</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->edukasi_konseling))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && ($i === 0 || $i === 4)) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="efarmKons{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_konseling[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="efarmKons{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && ($i === 0 || $i === 4)) style="background-color: #FEA8B9" @endif>
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
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="lemEdTer{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="lembar_edukasi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="lemEdTer{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="lemEdTer{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="lembar_edukasi[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="lemEdTer{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_lemEdTer)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanLemEdTer" name="catatan_lemEdTer">{{ $data->catatan_lemEdTer }}</textarea>
                    @endif
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
                    @if (in_array($i + 1, $data->tindakan_prekemo))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="tindakanPreKemo{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="tindakan_prekemo[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="tindakanPreKemo{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="tindakanPreKemo{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="tindakan_prekemo[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="tindakanPreKemo{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_tindakanPreKemo)) !!}
                    @else
                        <textarea rows="10" class="form-control" id="catatanTindakanPreKemo" name="catatan_tindakanPreKemo">{{ $data->catatan_tindakanPreKemo }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Kemoterapi</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->tindakan_kemp))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="tindakanKemo{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="tindakan_kemp[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="tindakanKemo{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="tindakanKemo{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="tindakan_kemp[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="tindakanKemo{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_tindakanKemo)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanTindakanKemo" name="catatan_tindakanKemo">{{ $data->catatan_tindakanKemo }}</textarea>
                    @endif
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
                    @if (in_array($i + 1, $data->tindakan_postkemo))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="tindakanPostKemo{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="tindakan_postkemo[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="tindakanPostKemo{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="tindakanPostKemo{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="tindakan_postkemo[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="tindakanPostKemo{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_tindakanPostKemo)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanTindakanPostKemo" name="catatan_tindakanPostKemo">{{ $data->catatan_tindakanPostKemo }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td rowspan="3">b. TERAPI PASIEN PULANG</td>
                <td>Omeprazole</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->terapi_omeprazole))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="terapiOmeprazole{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="terapi_omeprazole[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="terapiOmeprazole{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="terapiOmeprazole{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="terapi_omeprazole[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="terapiOmeprazole{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_terapiOmeprazole)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanTerapiOmeprazole" name="catatan_terapiOmeprazole">{{ $data->catatan_terapiOmeprazole }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Curcuma</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->terapi_curcuma))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="terapiCurcuma{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="terapi_curcuma[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="terapiCurcuma{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="terapiCurcuma{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="terapi_curcuma[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="terapiCurcuma{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_terapiCurcuma)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanTerapiCurcuma" name="catatan_terapiCurcuma">{{ $data->catatan_terapiCurcuma }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Ondansetron</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->terapi_ondansetron))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="terapiOndansetron{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="terapi_ondansetron[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="terapiOndansetron{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="terapiOndansetron{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="terapi_ondansetron[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="terapiOndansetron{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_terapiOndansetron)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanTerapiOndansetron" name="catatan_terapiOndansetron">{{ $data->catatan_terapiOndansetron }}</textarea>
                    @endif
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
                    @if (in_array($i + 1, $data->intervensi_medika))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="tatmedMedika{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_medika[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="tatmedMedika{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="tatmedMedika{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_medika[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="tatmedMedika{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_tatmedMedika)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanTatmedMedika" name="catatan_tatmedMedika">{{ $data->catatan_tatmedMedika }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td rowspan="5">b. TATA LAKSANA/INTERVENSI KEPERAWATAN</td>
                <td>a. SIKI : I.08238 Manajemen Nyeri</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->intervensi_nyeri))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="tatkepNyeri{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_nyeri[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="tatkepNyeri{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="tatkepNyeri{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_nyeri[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="tatkepNyeri{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td rowspan="5">
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_tatkepNyeri)) !!}
                    @else
                        <textarea rows="10" class="form-control" id="catatanTatkepNyeri" name="catatan_tatkepNyeri">{{ $data->catatan_tatkepNyeri }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>b. SIKI : I.05178 Manajemen Energi</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->intervensi_energi))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="tatkepEnergi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_energi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="tatkepEnergi{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="tatkepEnergi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_energi[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="tatkepEnergi{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>c. SIKI : I.03117 Manajemen Mual</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->intervensi_mual))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="tatkepMual{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_mual[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="tatkepMual{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="tatkepMual{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_mual[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="tatkepMual{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>d. SIKI : I.09134 Reduksi Ansietas</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->intervensi_ansietas))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="tatkepAnsietas{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_ansietas[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="tatkepAnsietas{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="tatkepAnsietas{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_ansietas[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="tatkepAnsietas{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>e. SIKI : I.09305 Promosi Citra Tubuh</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->intervensi_citra))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="tatkepCitra{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_citra[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="tatkepCitra{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="tatkepCitra{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_citra[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="tatkepCitra{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>c. TATA LAKSANA/INTERVENSI GIZI</td>
                <td>Memberikan makanan berdasarkan kebutuhan gizi dalam bentuk cair, saring, lunak, biasa, secara
                    bertahap sesuai dengan kondisi klinis, dengan jenis diet Tinggi Kalori, Tinggi Protein
                </td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->intervensi_gizi))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="tatgizi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_gizi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="tatgizi{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="tatgizi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_gizi[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="tatgizi{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_tatgizi)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanTatgizi" name="catatan_tatgizi">{{ $data->catatan_tatgizi }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>d. TATA LAKSANA/INTERVENSI FARMASI</td>
                <td>Rekomendasi kepala DPJP</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->intervensi_dpjp))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="tatfarmDPJP{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_dpjp[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="tatfarmDPJP{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="tatfarmDPJP{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_dpjp[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="tatfarmDPJP{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_tatfarmDPJP)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanTatfarmDPJP" name="catatan_tatfarmDPJP">{{ $data->catatan_tatfarmDPJP }}</textarea>
                    @endif
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
                    @if (in_array($i + 1, $data->monev_dpjp))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="monevDPJP{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_dpjp[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="monevDPJP{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="monevDPJP{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_dpjp[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="monevDPJP{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_monevDPJP)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanMonevDPJP" name="catatan_monevDPJP">{{ $data->catatan_monevDPJP }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td rowspan="5">b. KEPERAWATAN</td>
                <td>a. Monitoring vital sign pasien</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->monev_vital))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="monevkepVital{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_vital[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="monevkepVital{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="monevkepVital{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_vital[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="monevkepVital{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td rowspan="5">
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_monevkepVital)) !!}
                    @else
                        <textarea rows="10" class="form-control" id="catatanMonevkepVital" name="catatan_monevkepVital">{{ $data->catatan_monevkepVital }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>b. Monitoring mual</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->monev_mual))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="monevkepMual{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_mual[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="monevkepMual{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="monevkepMual{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_mual[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="monevkepMual{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>c. Monitoring nutrisi</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->monev_nutrisi))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="monevkepNutrisi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_nutrisi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="monevkepNutrisi{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
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
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="monevkepNyeri{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_nyeri[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="monevkepNyeri{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="monevkepNyeri{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_nyeri[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="monevkepNyeri{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>e. Monitoring pemenuhan ADL</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->monev_ADL))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="monevkepADL{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_ADL[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="monevkepADL{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="monevkepADL{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_ADL[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="monevkepADL{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td rowspan="2">c. GIZI</td>
                <td>Monitoring asupan makanan</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->monev_makanan))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="monevgiziMakanan{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_makanan[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="monevgiziMakanan{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="monevgiziMakanan{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_makanan[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="monevgiziMakanan{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_monevgiziMakanan)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanMonevgiziMakanan" name="catatan_monevgiziMakanan">{{ $data->catatan_monevgiziMakanan }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Monitoring Antropometri</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->monev_antropometri))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 2) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="monevgiziAntropometri{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_antropometri[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="monevgiziAntropometri{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 2) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="monevgiziAntropometri{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_antropometri[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="monevgiziAntropometri{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_monevgiziAntropometri)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanMonevgiziAntropometri"
                            name="catatan_monevgiziAntropometri">{{ $data->catatan_monevgiziAntropometri }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td rowspan="3">d. FARMASI</td>
                <td>Monitoring efektivitas obat</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->monev_efektiv))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="monevfarmEfektiv{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_efektiv[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="monevfarmEfektiv{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="monevfarmEfektiv{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_efektiv[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="monevfarmEfektiv{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td rowspan="3">
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_monevfarmEfektiv)) !!}
                    @else
                        <textarea rows="6" class="form-control" id="catatanMonevfarmEfektiv" name="catatan_monevfarmEfektiv">{{ $data->catatan_monevfarmEfektiv }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Monitoring interaksi obat</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->monev_interaksi))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="monevfarmInteraksi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_interaksi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="monevfarmInteraksi{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
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
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="monevfarmEfek{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_efek[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="monevfarmEfek{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
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
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="mobmed{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="mob_medis[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="mobmed{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="mobmed{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="mob_medis[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="mobmed{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td rowspan="3">
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_mobmed)) !!}
                    @else
                        <textarea rows="6" class="form-control" id="catatanMobmed" name="catatan_mobmed">{{ $data->catatan_mobmed }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>b. KEPERAWATAN</td>
                <td>Dibantu sebagian/mandiri</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->mob_keperawatan))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="mobkep{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="mob_keperawatan[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="mobkep{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #95FFFF" @endif>
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
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="mobfisio{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="mob_fisio[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="mobfisio{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #95FFFF" @endif>
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
                <td>a. MEDIS</td>
                <td></td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->hasil_medis))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 4) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="hasilMedis{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_medis[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="hasilMedis{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 4) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="hasilMedis{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_medis[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="hasilMedis{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_hasilMedis)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanHasilMedis" name="catatan_hasilMedis">{{ $data->catatan_hasilMedis }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td rowspan="3">b. KEPERAWATAN</td>
                <td>a. Tanda vital dalam batas normal</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->hasil_vital))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="haskepVital{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_vital[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="haskepVital{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="haskepVital{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_vital[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="haskepVital{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_haskepVital)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanHaskepVital" name="catatan_haskepVital">{{ $data->catatan_haskepVital }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>b. Mual terminimalisir</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->hasil_mual))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="haskepMual{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_mual[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="haskepMual{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="haskepMual{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_mual[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="haskepMual{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_haskepMual)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanHaskepMual" name="catatan_haskepMual">{{ $data->catatan_haskepMual }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>c. Nyeri berkurang</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->hasil_nyeri))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="haskepNyeri{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_nyeri[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="haskepNyeri{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="haskepNyeri{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_nyeri[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="haskepNyeri{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_haskepNyeri)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanHaskepNyeri" name="catatan_haskepNyeri">{{ $data->catatan_haskepNyeri }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td rowspan="2">c. GIZI</td>
                <td>Asupan makanan >= 80%</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->hasil_asupan))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 4) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="hasgiziAsupan{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_asupan[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="hasgiziAsupan{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 4) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="hasgiziAsupan{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_asupan[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="hasgiziAsupan{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td rowspan="2">
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_hasgiziAsupan)) !!}
                    @else
                        <textarea rows="5" class="form-control" id="catatanHasgiziAsupan" name="catatan_hasgiziAsupan">{{ $data->catatan_hasgiziAsupan }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Optimalisasi Status Gizi</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->hasil_status))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 4) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="hasgiziStatus{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_status[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="hasgiziStatus{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 4) style="background-color: #FEA8B9" @endif>
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
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="hasgiziTerapi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_terapi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="hasgiziTerapi{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="hasgiziTerapi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_terapi[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="hasgiziTerapi{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td rowspan="2">
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_hasgiziTerapi)) !!}
                    @else
                        <textarea rows="5" class="form-control" id="catatanHasgiziTerapi" name="catatan_hasgiziTerapi">{{ $data->catatan_hasgiziTerapi }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Obat rasional</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->hasil_rasional))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="hasgiziRasional{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_rasional[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="hasgiziRasional{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
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
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 4) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="pulangUmum{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="pulang_umum[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="pulangUmum{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 4) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="pulangUmum{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="pulang_umum[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="pulangUmum{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td rowspan="2">
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_pulangUmum)) !!}
                    @else
                        <textarea rows="5" class="form-control" id="catatanPulangUmum" name="catatan_pulangUmum">{{ $data->catatan_pulangUmum }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Khusus: tidak ada komplikasi</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->pulang_khusus))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 4) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="pulangKhusus{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="pulang_khusus[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="pulangKhusus{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 4) style="background-color: #FEA8B9" @endif>
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
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 4) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="rencanaResume{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="rencana_resume[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="rencanaResume{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 4) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="rencanaResume{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="rencana_resume[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="rencanaResume{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td rowspan="3">
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_rencanaResume)) !!}
                    @else
                        <textarea rows="6" class="form-control" id="catatanRencanaResume" name="catatan_rencanaResume">{{ $data->catatan_rencanaResume }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Penjelasan diberikan sesuai dengan keadaan umum pasien</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->rencana_penjelasan))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 4) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="rencanaPenjelasan{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="rencana_penjelasan[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="rencanaPenjelasan{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 4) style="background-color: #FEA8B9" @endif>
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
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 4) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="rencanaSurat{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="rencana_surat[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="rencanaSurat{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 4) style="background-color: #FEA8B9" @endif>
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
                @for ($i = 0; $i < 7; $i++)
                    <td>
                    </td>
                @endfor
            </tr>
        </tbody>
    </table>
</div>
