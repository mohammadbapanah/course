@extends('admin.layouts.master')

@section('head-tag')
    <title>تنظیمات</title>
@endsection

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item font-size-12"><a href="#">خانه</a></li>
            <li class="breadcrumb-item font-size-12 active" aria-current="page"> تنظیمات</li>
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
                    <a href="" class="btn btn-info btn-sm disabled">ایجاد تنظیمات جدید</a>
                    <div class="max-width-16-rem">
                        <input type="text" class="form-control form-control-sm form-text" placeholder="جستجو">
                    </div>
                </section>

                <section class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr class="text-center">

                            <th>لوگوی سایت</th>
                            <th>درصد کمیسیون</th>
                            <th>کپی رایت</th>
                            <th>لینک تلگرام</th>
                            <th>لینک اینستاگرام</th>
                            <th>لینک فیس بوک</th>
                            <th>لینک یوتیوب</th>
                            <th class="max-width-16-rem text-center"><i class="fa fa-cogs"></i> تنظیمات</th>
                        </tr>
                        </thead>
                        @foreach($settings as $setting)
                            <tbody>
                            <tr>
                                <td class="text-center">
                                    <img src="{{ asset('/assets/img/'.$setting->logo) }}" alt="" width="30">
                                </td>
                                <td class="text-center">{{ $setting->commissions }}</td>
                                <td class="text-center">{{ $setting->copy_right }}</td>
                                <td class="text-center">{{ $setting->telegram }}</td>
                                <td class="text-center">{{ $setting->instagram }}</td>
                                <td class="text-center">{{ $setting->facebook }}</td>
                                <td class="text-center">{{ $setting->youtube }}</td>
                                <td class="width-22-rem text-left">
                                    <a style="margin-left: 115px" href="{{ route('admin.setting.edit',$setting->id)  }}"
                                       class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> ویرایش</a>
                                </td>
                            </tr>
                            </tbody>
                        @endforeach
                    </table>
                </section>

            </section>
        </section>
    </section>


@endsection
