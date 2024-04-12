@extends('index')

@section('container')
    <section class="content">

        @if (session()->has('success'))
            @include('script.alert.success')
        @endif

        @if (session()->has('error'))
            @include('script.alert.error')
        @endif

        <div class="row">

            <div class="col-xl-12 col-12">

                <div class="d-inline-block align-items-center pb-0">
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="/dashboard"><i class="mdi mdi-home-outline"></i></a>
                            </li>
                            <li class="breadcrumb-item"><a href="/gastroenteritis">Kelola Clinical Pathway Gastroenteritis
                                    Pada Dewasa</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tambah Clinical Pathway Gastroenteritis
                                Pada Dewasa</li>
                        </ol>
                    </nav>
                </div>

                {{-- Caption --}}
                <div class="box bg-transparent no-shadow mb-0">
                    <div class="box-header no-border">
                        <h4 class="box-title">Tambah Clinical Pathway Gastroenteritis Pada Dewasa</h4>
                    </div>
                </div>

                <div class="box">
                    <div class="box-header with-border header text-center">
                        <h4>CLINICAL PATHWAY GASTROENTERITIS PADA DEWASA</h4>
                        <h5>(LOS 3 Hari)</h5>
                    </div>
                    <!-- /.box-header -->
                    <form class="form" action="{{ url('/gastroenteritis/add') }}" method="POST"
                        enctype="multipart/form-data">

                        @csrf

                        <div class="box-body row">

                            <div class="col-lg-4 col-12">
                                <div class="form-group">
                                    <label for="nama" class="form-label">Nama Pasien</label>
                                    <input type="text" id="nama" class="form-control" name="nama"
                                        placeholder="Nama Pasien" readonly>
                                </div>

                                <div class="form-group">
                                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                    <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin"
                                        placeholder="Jenis Kelamin" readonly>
                                </div>

                                <div class="form-group">
                                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                    <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir"
                                        placeholder="Tanggal Lahir" readonly>
                                </div>

                                <div class="form-group">
                                    <label for="diagnosa" class="form-label">Diagnosa masuk RS</label>
                                    <input type="text" class="form-control" id="diagnosa" name="diagnosa"
                                        placeholder="Diagnosa">
                                </div>

                                <div class="form-group">
                                    <label for="penyakit_utama" class="form-label">Penyakit Utama</label>
                                    <input type="text" class="form-control" id="penyakit_utama" name="penyakit_utama"
                                        placeholder="Penyakit Utama">
                                </div>

                                <div class="form-group">
                                    <label for="penyakit_penyerta" class="form-label">Penyakit Penyerta</label>
                                    <input type="text" class="form-control" id="penyakit_penyerta"
                                        name="penyakit_penyerta" placeholder="Penyakit Penyerta">
                                </div>

                                <div class="form-group">
                                    <label for="komplikasi" class="form-label">Komplikasi</label>
                                    <input type="text" class="form-control" id="komplikasi" name="komplikasi"
                                        placeholder="Komplikasi">
                                </div>

                                <div class="form-group">
                                    <label for="tindakan" class="form-label">Tindakan</label>
                                    <input type="text" class="form-control" id="tindakan" name="tindakan[0]"
                                        placeholder="Tindakan">
                                    <input type="text" class="form-control mt-2" id="tindakan" name="tindakan[1]"
                                        placeholder="Tindakan" value="Dietary Counseling and Surveillance" readonly>
                                </div>

                            </div>

                            <div class="col-lg-4 col-12">
                                <div class="form-group">
                                    <label for="berat_badan" class="form-label">Berat Badan (kg)</label>
                                    <input type="text" class="form-control" id="berat_badan" name="berat_badan"
                                        placeholder="Berat Badan">
                                </div>

                                <div class="form-group">
                                    <label for="tinggi_badan" class="form-label">Tinggi Badan (cm)</label>
                                    <input type="text" class="form-control" id="tinggi_badan" name="tinggi_badan"
                                        placeholder="Tinggi Badan">
                                </div>

                                <div class="form-group">
                                    <label for="tanggal_masuk" class="form-label">Tanggal Masuk</label>
                                    <input type="text" class="form-control" id="tanggal_masuk" name="tanggal_masuk"
                                        placeholder="Tanggal Masuk" readonly>
                                </div>

                                <div class="form-group">
                                    <label for="tanggal_keluar" class="form-label">Tanggal Keluar</label>
                                    <input type="text" class="form-control" id="tanggal_keluar" name="tanggal_keluar"
                                        placeholder="Tanggal Keluar" readonly>
                                </div>

                                @for ($i = 0; $i < 5; $i++)
                                    <div class="form-group">
                                        <label for="kode_icd[{{ $i }}]" class="form-label">Kode ICD</label>
                                        <input type="text" class="form-control" id="kode_icd[{{ $i }}]"
                                            name="kode_icd[{{ $i }}]" placeholder="Kode ICD">
                                    </div>
                                @endfor

                                <div class="form-group">
                                    <label for="kode_icd[5]" class="form-label">Kode ICD</label>
                                    <input type="text" class="form-control" id="kode_icd[5]" name="kode_icd[5]"
                                        placeholder="Kode ICD" value="Z71.3" readonly>
                                </div>

                            </div>

                            <div class="col-lg-4 col-12">

                                <div class="form-group">
                                    <label for="noReg" class="form-label">No Reg</label>
                                    <input type="text" class="form-control" id="noReg" name="noReg"
                                        placeholder="No Registrasi" required>
                                </div>

                                <div class="form-group mt-90">
                                    <label for="jam_masuk" class="form-label">Jam</label>
                                    <input type="text" class="form-control" id="jam_masuk" name="jam_masuk"
                                        placeholder="Jam Masuk" readonly>
                                </div>

                                <div class="form-group">
                                    <label for="jam_keluar" class="form-label">Jam</label>
                                    <input type="text" class="form-control" id="jam_keluar" name="jam_keluar"
                                        placeholder="Jam Keluar" readonly>
                                </div>

                                <div class="form-group">
                                    <label for="lama_rawat" class="form-label">Lama Rawat</label>
                                    <input type="text" class="form-control" id="lama_rawat" name="lama_rawat"
                                        placeholder="Lama Rawat" readonly>
                                </div>

                                <div class="form-group">
                                    <label for="rencana_rawat" class="form-label">Rencana Rawat</label>
                                    <input type="text" class="form-control" id="rencana_rawat" name="rencana_rawat"
                                        placeholder="Rencana Rawat">
                                </div>

                                <div class="form-group">
                                    <label for="rawat_kelas" class="form-label">R. Rawat/kelas</label>
                                    <input type="text" class="form-control" id="rawat_kelas" name="rawat_kelas"
                                        placeholder="R. Rawat/kelas">
                                </div>

                                <div class="form-group">
                                    <label for="rujukan" class="form-label">Rujukan</label>
                                    <input type="text" class="form-control" id="rujukan" name="rujukan"
                                        placeholder="Rujukan">
                                </div>
                            </div>

                            @include('pages.gastroenteritis.table_add')

                            <div class="col-lg-4 col-12">
                                <div class="form-group">
                                    <label for="tanggal_laporan" class="form-label">Tanggal Laporan</label>
                                    <input type="text" id="tanggal_laporan" class="form-control"
                                        name="tanggal_laporan" placeholder="Tanggal Laporan">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="row">

                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label for="nama_dokter" class="form-label">Nama Dokter</label>
                                            <input type="text" id="nama_dokter" class="form-control"
                                                name="nama_dokter" placeholder="Nama Dokter">
                                        </div>
                                        <div class="signature">
                                            <div class="text-center">
                                                <label class="form-label text-bold fs-16">TTD Dokter Penanggung Jawab
                                                    Pelayanan</label>
                                            </div>
                                            <div class="form-group">
                                                <div class="signature mb-3">
                                                    <div class="text-right  d-flex justify-content-center">
                                                        <button type="button" class="btn btn-default btn-sm me-1"
                                                            id="undo-dokter"><i class="fa fa-undo"></i> Undo</button>
                                                        <button type="button" class="btn btn-danger btn-sm"
                                                            id="clear-dokter"><i class="fa fa-eraser"></i>
                                                            Clear</button>
                                                    </div>
                                                    <div class="wrapper mt-2">
                                                        <canvas id="signature-pad-dokter"
                                                            class="signature-pad b-5 border-dark" style="width: 100%;"
                                                            height="250"></canvas>
                                                    </div>

                                                    <div class="form-control-feedback"><small>Pastikan menekan tombol
                                                            <code>Preview &
                                                                Confirm</code> sebelum mengisi form selanjutnya!</small>
                                                    </div>

                                                    <div class="button mt-2">
                                                        <button type="button" class="btn btn-info btn-sm"
                                                            id="save-dokter"><i class="fas fa-check-circle"></i>
                                                            Preview &
                                                            Confirm</button>
                                                    </div>
                                                    <!-- Modal untuk tampil preview tanda tangan-->
                                                    <div class="modal fade" id="modal-dokter" tabindex="-1"
                                                        role="dialog" aria-labelledby="myModalLabel">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" id="myModalLabel">Preview
                                                                        Tanda
                                                                        Tangan</h4>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label for="nama_perawat" class="form-label">Nama Perawat</label>
                                            <input type="text" id="nama_perawat" class="form-control"
                                                name="nama_perawat" placeholder="Nama Perawat">
                                        </div>
                                        <div class="signature">
                                            <div class="text-center">
                                                <label class="form-label text-bold fs-16">TTD Perawat Penanggung
                                                    Jawab</label>
                                            </div>
                                            <div class="form-group">
                                                <div class="signature mb-3">
                                                    <div class="text-right  d-flex justify-content-center">
                                                        <button type="button" class="btn btn-default btn-sm me-1"
                                                            id="undo-perawat"><i class="fa fa-undo"></i> Undo</button>
                                                        <button type="button" class="btn btn-danger btn-sm"
                                                            id="clear-perawat"><i class="fa fa-eraser"></i>
                                                            Clear</button>
                                                    </div>
                                                    <div class="wrapper mt-2">
                                                        <canvas id="signature-pad-perawat"
                                                            class="signature-pad b-5 border-dark" style="width: 100%;"
                                                            height="250"></canvas>
                                                    </div>

                                                    <div class="form-control-feedback"><small>Pastikan menekan tombol
                                                            <code>Preview &
                                                                Confirm</code> sebelum mengisi form selanjutnya!</small>
                                                    </div>

                                                    <div class="button mt-2">
                                                        <button type="button" class="btn btn-info btn-sm"
                                                            id="save-perawat"><i class="fas fa-check-circle"></i>
                                                            Preview &
                                                            Confirm</button>
                                                    </div>
                                                    <!-- Modal untuk tampil preview tanda tangan-->
                                                    <div class="modal fade" id="modal-perawat" tabindex="-1"
                                                        role="dialog" aria-labelledby="myModalLabel">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" id="myModalLabel">Preview
                                                                        Tanda
                                                                        Tangan</h4>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="box-footer">
                                <button type="button" class="btn btn-warning me-1">
                                    <i class="ti-trash"></i> Cancel
                                </button>
                                <button type="submit" class="btn btn-primary">
                                    <i class="ti-save-alt"></i> Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    @include('script.signature.addSignature')
    @include('script.api.getData')
@endsection
