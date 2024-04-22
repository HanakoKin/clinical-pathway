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
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-7 col-12">
                        <div class="box">
                            <div class="text-white box-body bg-img text-center pt-50 pb-20"
                                style="background-image: url(https://source.unsplash.com/600x400?flower);" data-overlay="5">
                                <img class="avatar avatar-xxl rounded-circle bg-warning-light"
                                    src="https://source.unsplash.com/200x200?people" alt="">
                                <h5 class="my-2">{{ $user->name }}</h5>
                                <span>{{ ucFirst(trans($user->role)) }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-12">
                        <div class="box">
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    <div class="box-header">{{ __('Profile') }}</div>

                                    <div class="box-body">
                                        <div class="max-w-xl mx-auto space-y-6">
                                            <div class="bg-white shadow-sm rounded-lg p-4 sm:p-8">
                                                @include('user.partials.update-profile')
                                            </div>

                                            <div class="bg-white shadow-sm rounded-lg p-4 sm:p-8">
                                                @include('user.partials.update-password')
                                            </div>

                                            <div class="bg-white shadow-sm rounded-lg p-4 sm:p-8">
                                                @include('user.partials.delete-user')
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box -->
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
