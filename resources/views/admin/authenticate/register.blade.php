@extends('admin.authenticate.layouts.main')

@section('content')
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Registration Form</h2>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row row-space">

                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">user name</label>
                                    <input class="input--style-4" type="text" name="username">
                                </div>
                                @error('username')
                                <span class="text-danger">
                                {{ $message }}
                            </span>
                                @enderror
                            </div>

                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">email</label>
                                    <input class="input--style-4" type="email" name="email">
                                </div>
                                @error('email')
                                <span class="text-danger">
                                {{ $message }}
                            </span>
                                @enderror
                            </div>

                        </div>

                        <div class="row row-space">

                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">password</label>
                                    <input class="input--style-4" type="password" name="password">
                                </div>
                                @error('password')
                                <span class="text-danger">
                                {{ $message }}
                            </span>
                                @enderror
                            </div>


                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">password confirmation</label>
                                    <input class="input--style-4" type="password" name="password_confirmation">
                                </div>
                                @error('password_confirmation')
                                <span class="text-danger">
                                {{ $message }}
                            </span>
                                @enderror
                            </div>

                        </div>

                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
