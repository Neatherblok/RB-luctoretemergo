@extends('layout.mainlayout')

@section('content')
    <div class="content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header text-capitalize">{{__('register.register')}}</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group row justify-content-center">
                                    @include('auth.register_sections.firstname')

                                    @include('auth.register_sections.lastname')
                                </div>

                                <div class="form-group row justify-content-center">
                                    @include('auth.register_sections.gender')

                                    @include('auth.register_sections.birthday')

                                    @include('auth.register_sections.birthtown')
                                </div>

                                <div class="form-group row justify-content-center">
                                    @include('auth.register_sections.adress')

                                    @include('auth.register_sections.postcode')

                                    @include('auth.register_sections.hometown')
                                </div>

                                <hr>

                                @include('auth.register_sections.email')

                                @include('auth.register_sections.password')

                                @include('auth.register_sections.confirm_password')

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('register.register') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
