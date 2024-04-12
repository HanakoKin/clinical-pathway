<div class="table-responsive">
    <table id="" class="table table-bordered display margin-top-10">
        <thead class="text-center">
            <tr>
                <th rowspan="5" class="min-w-100">KEGIATAN</th>
                <th rowspan="5"
                    class="@if ($cmd === 'edit') min-w-50 @elseif ($cmd === 'show') min-w-180 @endif">
                    URAIAN KEGIATAN</th>
                <th colspan="7">HARI PENYAKIT </th>
                <th rowspan="5"
                    class="@if ($cmd === 'edit') min-w-250 @elseif ($cmd === 'show') min-w-100 @endif">
                    KETERANGAN</th>
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
                <td>Dokter Spesialis</td>
                @for ($i = 0; $i < 7; $i++)
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
                <td>Perawat Primer :
                    <p>Kondisi umum, tingkat kesadaran, tanda-tanda vital, riwayat alergi,
                        skrining gizi, suhu</p>
                </td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->asesment_perawat))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="asesPer{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="asesment_perawat[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="asesPer{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="asesPer{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="asesment_perawat[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="asesPer{{ $i }}"></label>
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
                <td rowspan="4">2. LABORATORIUM </td>
                <td>Darah rutin serial per hari</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->lab_darah))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="labDar{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="lab_darah[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="labDar{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="labDar{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="lab_darah[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="labDar{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_labDar)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanLabDar" name="catatan_labDar">{{ $data->catatan_labDar }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>NS1 (hari 1-3 demam)</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->lab_NS))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="labNS{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="lab_NS[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="labNS{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="labNS{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="lab_NS[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="labNS{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_labNS)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanLabNS" name="catatan_labNS">{{ $data->catatan_labNS }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>DBT IgG, IgM (hari 6-7 demam)</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->lab_DBT))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="labDBT{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="lab_DBT[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="labDBT{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="labDBT{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="lab_DBT[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="labDBT{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_labDBT)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanLabDBT" name="catatan_labDBT">{{ $data->catatan_labDBT }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Ur, Cr, SGOT, SGPT, Na, K</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->lab_ur))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="labUr{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="lab_ur[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="labUr{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="labUr{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="lab_ur[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="labUr{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_labUr)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanLabUr" name="catatan_labUr">{{ $data->catatan_labUr }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td rowspan="2">3. RADIOLOGI/IMAGING</td>
                <td>THORAX AP</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->radio_thorax))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="radTho{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="radio_thorax[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="radTho{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="radTho{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="radio_thorax[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="radTho{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_radTho)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanRadTho" name="catatan_radTho">{{ $data->catatan_radTho }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>USG ABDOMEN</td>
                @for ($i = 0; $i < 7; $i++)
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
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_konsul)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanKonsul" name="catatan_konsul">{{ $data->catatan_konsul }}</textarea>
                    @endif
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
                    @if (in_array($i + 1, $data->ases_DPJP))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i !== 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="asesDPJP{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="ases_DPJP[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="asesDPJP{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i !== 0) style="background-color: #FEA8B9" @endif>
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
                <td>Dokter non DPJP/dr. Ruangan</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->ases_nonDPJP))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i !== 0) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="asesNonDPJP{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="ases_nonDPJP[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="asesNonDPJP{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i !== 0) style="background-color: #95FFFF" @endif>
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
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->ases_PPJ))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i !== 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="asesPPJ{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="ases_PPJ[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="asesPPJ{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i !== 0) style="background-color: #FEA8B9" @endif>
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
                <td>Tenaga Gizi (Nutrisionis/Dietisien)</td>
                @for ($i = 0; $i < 7; $i++)
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
                @for ($i = 0; $i < 7; $i++)
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
                        <textarea rows="3" class="form-control" id="catatanAsesResep" name="catatan_asesResep">{{ $data->catatan_asesResep }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Rekonsiliasi Obat</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->ases_obat))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="asesObat{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="ases_obat[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="asesObat{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
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
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="diagMedis{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_medis[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="diagMedis{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="diagMedis{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_medis[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="diagMedis{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_diagMedis)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanDiagMedis" name="catatan_diagMedis">{{ $data->catatan_diagMedis }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td rowspan="4">b. DIAGNOSIS KEPERAWATAN</td>
                <td>Kode : 00132 Nyeri Akut</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->diagnosa_akut))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="diagAkut{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_akut[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="diagAkut{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="diagAkut{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_akut[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="diagAkut{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td rowspan="4">
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_diagAkut)) !!}
                    @else
                        <textarea rows="9" class="form-control" id="catatanDiagAkut" name="catatan_diagAkut">{{ $data->catatan_diagAkut }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Kode : 00007 Hipertermia</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->diagnosa_hiper))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="diagHiper{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_hiper[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="diagHiper{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="diagHiper{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_hiper[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="diagHiper{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>Kode : 00134 Mual</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->diagnosa_mual))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="diagMual{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_mual[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="diagMual{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="diagMual{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_mual[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="diagMual{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>Kode : 00027 Kekurangan Volume Cairan</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->diagnosa_cairan))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="diagCair{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_cairan[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="diagCair{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="diagCair{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_cairan[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="diagCair{{ $i }}"></label>
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
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="diagGizi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_gizi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="diagGizi{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="diagGizi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_gizi[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="diagGizi{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_diagGizi)) !!}
                    @else
                        <textarea rows="5" class="form-control" id="catatanDiagGizi" name="catatan_diagGizi">{{ $data->catatan_diagGizi }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td rowspan="4">7. DISCHARGE PLANNING</td>
                <td>Informasi tentang aktivitas yang dapat dilakukan sesuai dengan tingkat kondisi pasien</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->displan_aktiv))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 2) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="disPlanAk{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="displan_aktiv[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="disPlanAk{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 2) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="disPlanAk{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="displan_aktiv[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="disPlanAk{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td rowspan="4">
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_disPlanAk)) !!}
                    @else
                        <textarea rows="17" class="form-control" id="catatanDisPlanAk" name="catatan_disPlanAk">{{ $data->catatan_disPlanAk }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Terapi yang diberikan meliputi kegunaan obat, dosis dan efek samping</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->displan_terapi))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 2) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="disPlanTer{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="displan_terapi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="disPlanTer{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 2) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="disPlanTer{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="displan_terapi[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="disPlanTer{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>Diet yang dapat dikonsumsi selama pemulihan kondisi, terutama
                    banyaknya input cairan</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->displan_diet))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 2) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="disPlanDiet{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="displan_diet[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="disPlanDiet{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 2) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="disPlanDiet{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="displan_diet[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="disPlanDiet{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>Informasi mengenali tanda-tanda dengue dengan peringatan dan dengue berat serta cara pencegahan
                    penularan dengue</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->displan_dengue))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 2) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="disPlanDengu{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="displan_dengue[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="disPlanDengu{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 2) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="disPlanDengu{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="displan_dengue[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="disPlanDengu{{ $i }}"></label>
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
                        <textarea rows="17" class="form-control" id="catatanEmedDiag" name="catatan_emedDiag">{{ $data->catatan_emedDiag }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Rencana terapi</td>
                @for ($i = 0; $i < 7; $i++)
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
                @for ($i = 0; $i < 7; $i++)
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
                <td>Diet lunak bertahap, cairan adekuat</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->edukasi_gizi))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="egiz{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_gizi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="egiz{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
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
                <td rowspan="4">c. EDUKASI KEPERAWATAN</td>
                <td>1. Hipertermia</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->edukasi_hipertermia))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="ekepHiper{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_hipertermia[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="ekepHiper{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="ekepHiper{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_hipertermia[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="ekepHiper{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_ekepHiper)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanEkepHiper" name="catatan_ekepHiper">{{ $data->catatan_ekepHiper }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>2. Manajemen nyeri</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->edukasi_nyeri))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="ekepNyeri{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_nyeri[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="ekepNyeri{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="ekepNyeri{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_nyeri[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="ekepNyeri{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_ekepNyeri)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanEkepNyeri" name="catatan_ekepNyeri">{{ $data->catatan_ekepNyeri }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>3. Monitoring cairan</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->edukasi_cairan))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="ekepCair{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_cairan[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="ekepCair{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="ekepCair{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_cairan[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="ekepCair{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_ekepCair)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanEkepCair" name="catatan_ekepCair">{{ $data->catatan_ekepCair }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>4. Pengelolaan hidup sehat</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->edukasi_hidup))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="ekepHidup{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_hidup[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="ekepHidup{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="ekepHidup{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_hidup[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="ekepHidup{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_ekepHidup)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanEkepHidup" name="catatan_ekepHidup">{{ $data->catatan_ekepHidup }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td rowspan="2">d. EDUKASI FARMASI </td>
                <td>Informasi Obat</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->edukasi_info))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="efarmInf{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_info[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="efarmInf{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="efarmInf{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_info[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="efarmInf{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_efarmInf)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanEfarmInf" name="catatan_efarmInf">{{ $data->catatan_efarmInf }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Konseling Obat</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->edukasi_konseling))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="efarmKons{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_konseling[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="efarmKons{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="efarmKons{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_konseling[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="efarmKons{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_efarmKons)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanEfarmKons" name="catatan_efarmKons">{{ $data->catatan_efarmKons }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>PENGISIAN FORMULIR INFORMASI DAN EDUKASI TERINTEGRASI</td>
                <td>Lembar Edukasi Terintegrasi</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->lembar_edukasi))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="lemEdTer{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="lembar_edukasi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="lemEdTer{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
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
                <td>9. TERAPI/MEDIKAMENTOSA</td>
                @for ($i = 0; $i < 9; $i++)
                    <td> </td>
                @endfor
            </tr>
            <tr>
                <td rowspan="2">a. INJEKSI</td>
                <td>Parasetamol 10 - 15 mg /Kg BB/intravena</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->injeksi_parasetamol))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="injectPara{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="injeksi_parasetamol[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="injectPara{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="injectPara{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="injeksi_parasetamol[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="injectPara{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_injectPara)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanInjectPara" name="catatan_injectPara">{{ $data->catatan_injectPara }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Ranitidin atau PPI</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->injeksi_ranitidin))
                        <td class="text-center p-1">
                            <input type="checkbox" id="injectRanit{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="injeksi_ranitidin[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="injectRanit{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="injectRanit{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="injeksi_ranitidin[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="injectRanit{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_injectRanit)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanInjectRanit" name="catatan_injectRanit">{{ $data->catatan_injectRanit }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td rowspan="2">b. CAIRAN INFUS</td>
                <td>RL atau NaCl atau ringet asetat</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->injeksi_NaCl))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="infusNaCl{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="injeksi_NaCl[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="infusNaCl{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="infusNaCl{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="injeksi_NaCl[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="infusNaCl{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_infusNaCl)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanInfusNaCl" name="catatan_infusNaCl">{{ $data->catatan_infusNaCl }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Koloid</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->injeksi_koloid))
                        <td class="text-center p-1">
                            <input type="checkbox" id="infusKoloid{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="injeksi_koloid[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="infusKoloid{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="infusKoloid{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="injeksi_koloid[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="infusKoloid{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_infusKoloid)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanInfusKoloid" name="catatan_infusKoloid">{{ $data->catatan_infusKoloid }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td rowspan="2">c. OBAT ORAL</td>
                <td>Parasetamol oral 3-4x 500mg</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->oral_paracetamol))
                        <td class="text-center p-1">
                            <input type="checkbox" id="oral_para{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="oral_paracetamol[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="oral_para{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="oral_para{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="oral_paracetamol[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="oral_para{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_oralPara)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanOralPara" name="catatan_oralPara">{{ $data->catatan_oralPara }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td> </td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->oral_varian))
                        <td class="text-center p-1">
                            <input type="checkbox" id="oral_varian{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="oral_varian[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="oral_varian{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="oral_varian{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="oral_varian[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="oral_varian{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_oralVarian)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanOralVarian" name="catatan_oralVarian">{{ $data->catatan_oralVarian }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>d. TRANSFUSI</td>
                <td>TC 10-20 unit</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->transfusi))
                        <td class="text-center p-1">
                            <input type="checkbox" id="transfusi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="transfusi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="transfusi{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="transfusi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="transfusi[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="transfusi{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_transfusi)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanTransfusi" name="catatan_transfusi">{{ $data->catatan_transfusi }}</textarea>
                    @endif
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
                    @if (in_array($i + 1, $data->intervensi_medika))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="tatmedMedika{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_medika[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="tatmedMedika{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
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
                <td rowspan="4">b. TATA LAKSANA/INTERVENSI KEPERAWATAN</td>
                <td>a. NIC: 1400 Manajemen Nyeri</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->intervensi_nyeri))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="tatkepNyeri{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_nyeri[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="tatkepNyeri{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="tatkepNyeri{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_nyeri[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="tatkepNyeri{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td rowspan="4">
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_tatkepNyeri)) !!}
                    @else
                        <textarea rows="8" class="form-control" id="catatanTatkepNyeri" name="catatan_tatkepNyeri">{{ $data->catatan_tatkepNyeri }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>b. NIC: 3740 Pengobatan Demam </td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->intervensi_demam))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="tatkepDemam{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_demam[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="tatkepDemam{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="tatkepDemam{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_demam[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="tatkepDemam{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>c. NIC: 4120 Manajemen Cairan</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->intervensi_cairan))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="tatkepCairan{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_cairan[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="tatkepCairan{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="tatkepCairan{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_cairan[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="tatkepCairan{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>d. NIC: 4190 Pemasangan Infus</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->intervensi_infus))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="tatkepInfus{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_infus[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="tatkepInfus{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
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
                <td>Diet cair/saring/lunak/biasa secara bertahap. Diet Tinggi Energi dan Tinggi Protein (TETP) selama
                    pemulihan</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->intervensi_tetp))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="tatgiziTETP{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_tetp[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="tatgiziTETP{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="tatgiziTETP{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_tetp[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="tatgiziTETP{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_tatgiziTETP)) !!}
                    @else
                        <textarea rows="5" class="form-control" id="catatanTatgiziTETP" name="catatan_tatgiziTETP">{{ $data->catatan_tatgiziTETP }}</textarea>
                    @endif
                </td>
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
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_tatfarmDPJP)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanTatfarmDPJP" name="catatan_tatfarmDPJP">{{ $data->catatan_tatfarmDPJP }}</textarea>
                    @endif
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
                <td rowspan="6">b. KEPERAWATAN</td>
                <td>a. Monitoring tanda perdarahan</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->monev_perdarahan))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="monevkepPerdarah{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_perdarahan[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="monevkepPerdarah{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="monevkepPerdarah{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_perdarahan[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="monevkepPerdarah{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td rowspan="6">
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_monevkepPerdarah)) !!}
                    @else
                        <textarea rows="14" class="form-control" id="catatanMonevkepPerdarah" name="catatan_monevkepPerdarah">{{ $data->catatan_monevkepPerdarah }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>b. Monitoring tanda-tanda vital pasien</td>
                @for ($i = 0; $i < 7; $i++)
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
            </tr>
            <tr>
                <td>c. Monitoring status hidrasi pasien meliputi <span class="fst-italic">balance</span> cairan,
                    terapi intravena dan tanda-tanda dehidrasi</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->monev_hidrasi))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="monevkepHidrasi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_hidrasi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="monevkepHidrasi{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="monevkepHidrasi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_hidrasi[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="monevkepHidrasi{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>d. Monitoring hasil laboratorium</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->monev_lab))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="monevkepLab{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_lab[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="monevkepLab{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="monevkepLab{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_lab[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="monevkepLab{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>e. Monitoring keluhan nyeri</td>
                @for ($i = 0; $i < 7; $i++)
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
                <td>f. Monitoring status nutrisi</td>
                @for ($i = 0; $i < 7; $i++)
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
                <td rowspan="2">c. GIZI</td>
                <td>Monitoring asupan makanan</td>
                @for ($i = 0; $i < 7; $i++)
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
                <td rowspan="2">
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_monevgiziMakanan)) !!}
                    @else
                        <textarea rows="8" class="form-control" id="catatanMonevgiziMakanan" name="catatan_monevgiziMakanan">{{ $data->catatan_monevgiziMakanan }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Monitoring Antropometri</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->monev_antropometri))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="monevgiziAntropometri{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_antropometri[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="monevgiziAntropometri{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
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
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="monevfarmInteraksi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_interaksi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="monevfarmInteraksi{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="monevfarmInteraksi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_interaksi[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="monevfarmInteraksi{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td rowspan="3">
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_monevfarmInteraksi)) !!}
                    @else
                        <textarea rows="8" class="form-control" id="catatanMonevfarmInteraksi" name="catatan_monevfarmInteraksi">{{ $data->catatan_monevfarmInteraksi }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Monitoring Efek Samping Obat</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->monev_efek))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="monevfarmEfsam{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_efek[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="monevfarmEfsam{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
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
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="monevfarmTerapi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_terapi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="monevfarmTerapi{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
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
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->mob_keperawatan))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="mobkep{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="mob_keperawatan[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="mobkep{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
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
                <td>Demam Hilang</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->hasil_demam))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 6) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="hasmedDemam{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_demam[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="hasmedDemam{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 6) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="hasmedDemam{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_demam[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="hasmedDemam{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_hasmedDemam)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanHasmedDemam" name="catatan_hasmedDemam">{{ $data->catatan_hasmedDemam }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Trombosit > 50,000</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->hasil_trombosit))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 6) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="hasmedTrombosit{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_trombosit[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="hasmedTrombosit{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 6) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="hasmedTrombosit{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_trombosit[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="hasmedTrombosit{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_hasmedTrombosit)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanHasmedTrombosit" name="catatan_hasmedTrombosit">{{ $data->catatan_hasmedTrombosit }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td rowspan="5">b. KEPERAWATAN</td>
                <td>a. NOC : 1605 Kontrol Nyeri</td>
                @for ($i = 0; $i < 7; $i++)
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
                <td rowspan="5">
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_haskepNyeri)) !!}
                    @else
                        <textarea rows="12" class="form-control" id="catatanHaskepNyeri" name="catatan_haskepNyeri">{{ $data->catatan_haskepNyeri }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>b. Hipertermi</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->hasil_hipertermi))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="haskepHipertermi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_hipertermi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="haskepHipertermi{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="haskepHipertermi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_hipertermi[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="haskepHipertermi{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>c. Komplikasi</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->hasil_komplikasi))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="haskepKomplikasi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_komplikasi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="haskepKomplikasi{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="haskepKomplikasi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_komplikasi[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="haskepKomplikasi{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>d. NOC : 0802 Tanda-tanda vital</td>
                @for ($i = 0; $i < 7; $i++)
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
            </tr>
            <tr>
                <td>e. Efek gangguan mual yang dapat diterima</td>
                @for ($i = 0; $i < 7; $i++)
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
            </tr>
            <tr>
                <td rowspan="2">c. GIZI</td>
                <td>Asupan makanan >= 80%</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->hasil_asupan))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="hasgiziAsupan{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_asupan[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="hasgiziAsupan{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
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
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->hasil_status))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="hasgiziStatus{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_status[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="hasgiziStatus{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
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
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="hasfarmInd{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_terapi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="hasfarmInd{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="hasfarmInd{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_terapi[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="hasfarmInd{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td rowspan="2">
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_hasfarmInd)) !!}
                    @else
                        <textarea rows="5" class="form-control" id="catatanHasfarmInd" name="catatan_hasfarmInd">{{ $data->catatan_hasfarmInd }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Obat rasional</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->hasil_obat))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="hasfarmObat{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_obat[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="hasfarmObat{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
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
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 6) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="pulangNormal{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="pulang_normal[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="pulangNormal{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 6) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="pulangNormal{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="pulang_normal[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="pulangNormal{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td rowspan="2">
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_pulangNormal)) !!}
                    @else
                        <textarea rows="5" class="form-control" id="catatanPulangNormal" name="catatan_pulangNormal">{{ $data->catatan_pulangNormal }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Sesuai NOC</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->pulang_NOC))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 6) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="pulangNOC{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="pulang_NOC[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="pulangNOC{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 6) style="background-color: #FEA8B9" @endif>
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
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_pulangVarian)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanPulangVarian" name="catatan_pulangVarian">{{ $data->catatan_pulangVarian }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td rowspan="3">15. RENCANA PULANG/EDUKASI PELAYANAN LANJUTAN</td>
                <td>Resume Medis dan Keperawatan</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->rencana_resume))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 6) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="rencanaResume{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="rencana_resume[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="rencanaResume{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 6) style="background-color: #FEA8B9" @endif>
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
                        <textarea rows="5" class="form-control" id="catatanRencanaResume" name="catatan_rencanaResume">{{ $data->catatan_rencanaResume }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Penjelasan diberikan sesuai dengan keadaan umum pasien</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->rencana_penjelasan))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 6) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="rencanaPenjelasan{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="rencana_penjelasan[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="rencanaPenjelasan{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 6) style="background-color: #FEA8B9" @endif>
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
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 6) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="rencanaSurat{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="rencana_surat[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="rencanaSurat{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 6) style="background-color: #FEA8B9" @endif>
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
