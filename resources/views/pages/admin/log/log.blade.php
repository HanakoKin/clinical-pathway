@extends('index')

@section('container')
    <section class="content pt-0">

        @if (session()->has('success'))
            @include('script.alert.success')
        @endif

        @if (session()->has('error'))
            @include('script.alert.error')
        @endif


        <div class="row">
            <div class="col-xl-12 col-12">

                <div class="d-inline-block align-items-center pb-2">
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="/dashboard"><i class="mdi mdi-home-outline"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Tabel Log User</li>
                        </ol>
                    </nav>
                </div>

                {{-- Tabel Content --}}
                <div class="box">
                    <div class="box-header py-4">
                        <h4 class="box-title">Jumlah Log : {{ $totals }} </h4>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-bordered table-hover display margin-top-10">
                                <thead>
                                    <tr class="text-center">
                                        <th scope="col">#</th>
                                        <th scope="col">Name User</th>
                                        <th scope="col">Table</th>
                                        <th scope="col">Url</th>
                                        <th scope="col">Activity</th>
                                        <th scope="col">Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($logs as $log)
                                        <tr class="text-center">
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $log->user->name }}</td>
                                            <td>{{ $log->table }}</td>
                                            <td>{{ $log->resource }}</td>
                                            <td>
                                                @php
                                                    $dataString = $log->activity;
                                                    $dataArray = json_decode(
                                                        substr($dataString, strpos($dataString, '{')),
                                                        true,
                                                    );
                                                @endphp

                                                <a class="btn btn-success btn-sm me-2 mb-2 text-decoration-none"
                                                    data-bs-toggle="modal" data-bs-target="#logModal"
                                                    data-id="{{ $log->id }}"
                                                    data-resource="{{ json_encode($dataArray, JSON_HEX_APOS | JSON_HEX_QUOT) }}"
                                                    onclick="showLogModal('{{ json_encode($dataArray, JSON_HEX_APOS | JSON_HEX_QUOT) }}')">
                                                    <i class="fas fa-eye"></i> Lihat
                                                </a>
                                            </td>
                                            <td>{{ \Carbon\Carbon::parse($log->performed_at)->format('d-m-Y H:i:s') }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('modal.logShow')
        @include('script.modal.logShow')

    </section>
@endsection
