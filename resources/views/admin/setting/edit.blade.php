@extends('admin.layouts.master')

@section('head-tag')
    <title>تنظیمات</title>
@endsection

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item font-size-12"><a href="{{ route('admin.home') }}">خانه</a></li>
            <li class="breadcrumb-item font-size-12 active" aria-current="page"> ویرایش تنظیمات</li>
        </ol>
    </nav>
    <section class="row">
        <section class="col-12">
            <section class="main-body-container">
                <section class="main-body-container-header">
                    <h5>
                        تنظیمات
                    </h5>
                </section>
                <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                    <a href="{{ route('admin.setting.index') }}" class="btn btn-info btn-sm">بازگشت</a>
                </section>
                <section>
                    <form action="{{ route('admin.setting.update',$setting->id) }}" method="post">
                        @csrf
                        @method('put')
                        <section class="row">
                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">لوگوی سایت </label>
                                    <input type="file" value="{{ $setting->logo }}"
                                           class="form-control form-control-sm"
                                           name="logo">
                                </div>
                                @error('name')
                                <span class="alert text-danger">
                        <strong>
                            {{ $message }}
                        </strong>
                    </span>
                                @enderror
                            </section>
                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">درصد کمیسیون</label>
                                    <input type="text" value="{{ $setting->commissions }}"
                                           class="form-control form-control-sm"
                                           name="commissions" placeholder="عدد وارد شده بر حسب کمیسیون خواهد بود...">
                                </div>
                                @error('name')
                                <span class="alert text-danger">
                        <strong>
                            {{ $message }}
                        </strong>
                    </span>
                                @enderror
                            </section>
                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">لینک تلگرام</label>
                                    <input type="text" value="{{ $setting->telegram }}"
                                           class="form-control form-control-sm"
                                           name="telegram" placeholder="عدد وارد شده بر حسب کمیسیون خواهد بود...">
                                </div>
                                @error('name')
                                <span class="alert text-danger">
                        <strong>
                            {{ $message }}
                        </strong>
                    </span>
                                @enderror
                            </section>
                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">لینک اینستاگرام</label>
                                    <input type="text" value="{{ $setting->instagram }}"
                                           class="form-control form-control-sm"
                                           name="instagram" placeholder="عدد وارد شده بر حسب کمیسیون خواهد بود...">
                                </div>
                                @error('name')
                                <span class="alert text-danger">
                        <strong>
                            {{ $message }}
                        </strong>
                    </span>
                                @enderror
                            </section>
                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">لینک فیس بوک</label>
                                    <input type="text" value="{{ $setting->facebook }}"
                                           class="form-control form-control-sm"
                                           name="facebook" placeholder="عدد وارد شده بر حسب کمیسیون خواهد بود...">
                                </div>
                                @error('name')
                                <span class="alert text-danger">
                        <strong>
                            {{ $message }}
                        </strong>
                    </span>
                                @enderror
                            </section>
                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">لینک یوتیوب</label>
                                    <input type="text" value="{{ $setting->youtube }}"
                                           class="form-control form-control-sm"
                                           name="youtube" placeholder="عدد وارد شده بر حسب کمیسیون خواهد بود...">
                                </div>
                                @error('name')
                                <span class="alert text-danger">
                        <strong>
                            {{ $message }}
                        </strong>
                    </span>
                                @enderror
                            </section>

                            <section class="col-12">
                                <button class="btn btn-primary btn-sm">ثبت</button>
                            </section>
                        </section>
                    </form>
                </section>

            </section>
        </section>
    </section>


@endsection
