@extends('index')

@section('container')
    <section class="content">

        @if (session()->has('success'))
            @include('script.success')
        @endif

        @if (session()->has('error'))
            @include('script.error')
        @endif

        <div class="row">

            {{-- Greeting --}}
            <div class="col-12">

                <div class="box bg-primary-light overflow-hidden pull-up">
                    <div class="box-body d-flex px-0 pb-0">
                        <div class="flex-grow-1 p-30 flex-grow-1 bg-img dask-bg bg-none-md">
                            <div class="row">
                                <div class="col-12 col-lg-8">
                                    <h2>Welcome back, <strong>Haki !</strong></h2>

                                    <p class="text-dark my-10 fs-16">
                                        <span id="greetingMessage"></span>, anda sedang login sebagai
                                        <span class="text-bold">Admin </span>
                                    </p>
                                    <p class="text-dark my-10 fs-16">
                                        Total Kasus : 10 laporan</strong>
                                    </p>
                                </div>
                                <div class="col-12 col-lg-4 py-2 px-4"><img
                                        src="{{ asset('assets/images/logo-dashboard.png') }}" alt=""
                                        class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
