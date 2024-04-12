@extends('index')

@section('container')
    <section class="printableArea content">
        <div class="row">

            <div class="col-xl-12 col-12">

                <div class="d-inline-block align-items-center pb-0 clearFix no-print">
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="/dashboard"><i class="mdi mdi-home-outline"></i></a>
                            </li>
                            <li class="breadcrumb-item"><a href="/dhf">Kelola Clinical Pathway DHF</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Print Clinical Pathway DHF</li>
                        </ol>
                    </nav>
                </div>

                {{-- Caption --}}
                <div class="box b-0 shadow-none">
                    <div class="box-header clearFix no-print d-flex justify-content-between">
                        <h5 class="box-title">Data for {{ $data->nama }}</h5>
                        <button id="print2" class="btn btn-info" type="button"> <span><i class="fa fa-print"></i>
                                Print</span> </button>
                    </div>
                    <div class="box-body">
                        <div class="header text-center pb-30">
                            <h4>CLINICAL PATHWAY DHF</h4>
                            <h5>(LOS 7 Hari)</h5>
                        </div>
                        <div class="patient-data row">
                            <div class="col-lg-5 col-12">
                                <div class="row">
                                    <div class="col-5">
                                        <p>Nama Pasien</p>
                                        <p>Jenis Kelamin</p>
                                        <p>Tanggal Lahir</p>
                                        <p>Diagnosa Masuk RS</p>
                                        <p>Penyakit Utama</p>
                                        <p>Penyakit Penyerta</p>
                                        <p>Komplikasi</p>
                                        <p>Tindakan</p>
                                    </div>
                                    <div class="col-7">
                                        <p>: {{ $data->nama }}</p>
                                        <p>: {{ $data->jenis_kelamin }}</p>
                                        <p>: {{ $data->tanggal_lahir }}</p>
                                        <p>: {{ $data->diagnosa }}</p>
                                        <p>: {{ $data->penyakit_utama }}</p>
                                        <p>: {{ $data->penyakit_penyerta }}</p>
                                        <p>: {{ $data->komplikasi }}</p>
                                        @for ($i = 1; $i <= 2; $i++)
                                            @if (isset($arr_tindakan[$i]))
                                                <p>: {{ $arr_tindakan[$i] }}</p>
                                            @else
                                                <p>:</p>
                                            @endif
                                        @endfor
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-12">
                                <div class="row">
                                    <div class="col-6">
                                        <p>Berat Badan (kg)</p>
                                        <p>Tinggi Badan (cm)</p>
                                        <p>Tanggal Masuk</p>
                                        <p>Tanggal Keluar</p>
                                        @for ($i = 1; $i <= 6; $i++)
                                            <p>Kode ICD</p>
                                        @endfor
                                    </div>
                                    <div class="col-6">
                                        <p>: {{ $data->berat_badan }}</p>
                                        <p>: {{ $data->tinggi_badan }}</p>
                                        <p>: {{ $data->tanggal_masuk }}</p>
                                        <p>: {{ $data->tanggal_keluar }}</p>
                                        @for ($i = 1; $i <= 6; $i++)
                                            @if (isset($arr_kode_icd[$i]))
                                                <p>: {{ $arr_kode_icd[$i] }}</p>
                                            @else
                                                <p>:</p>
                                            @endif
                                        @endfor
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-12">
                                <div class="row">
                                    <div class="col-6">
                                        <p>No Reg</p>
                                        <p>Jam</p>
                                        <p>Jam</p>
                                        <p>Lama Rawat</p>
                                        <p>Rencana Rawat</p>
                                        <p>R. Rawat/kelas</p>
                                        <p>Rujukan</p>
                                    </div>
                                    <div class="col-6">
                                        <p>: {{ $data->noReg }}</p>
                                        <p>: {{ $data->jam_masuk }}</p>
                                        <p>: {{ $data->jam_keluar }}</p>
                                        <p>: {{ $data->lama_rawat }}</p>
                                        <p>: {{ $data->rencana_rawat }}</p>
                                        <p>: {{ $data->rawat_kelas }}</p>
                                        <p>: {{ $data->rujukan }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @include('pages.dhf.table_show')

                        <div class="row mt-30">

                            <div class="col-4 text-center">
                                <h5 class="">{{ $data->tanggal_laporan }}</h5>
                            </div>

                            <div class="col-12">
                                <div class="row">
                                    <div class="col-lg-4 col-12 text-center">
                                        <p>Dokter Penanggung Jawab Pelayanan</p>
                                        <img src="{{ $data->ttd_dokter }}" alt="" width="200">
                                        <p>( {{ $data->nama_dokter }} )</p>
                                    </div>

                                    <div class="col-lg-4 col-12 text-center">
                                        <p>Perawat Penanggung Jawab</p>
                                        <img src="{{ $data->ttd_perawat }}" alt="" width="200">
                                        <p>( {{ $data->nama_perawat }} )</p>
                                    </div>

                                    <div class="col-lg-4 col-12 text-center">
                                        <p>Pelaksana Verifikasi</p>
                                        <img src="{{ $data->ttd_pelaksana }}" alt="" width="200">
                                        <p>( {{ $data->nama_pelaksana }} )</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
