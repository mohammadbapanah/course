@extends('admin.layouts.master')

@section('head-tag')
    <title>نمایش نظر ها</title>
@endsection

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item font-size-12"><a href="{{ route('admin.home') }}"> خانه</a></li>
            <li class="breadcrumb-item font-size-12"><a href="#"> بخش فروش</a></li>
            <li class="breadcrumb-item font-size-12"><a href="#"> نظرات</a></li>
            <li class="breadcrumb-item font-size-12 active" aria-current="page"> نمایش نظر ها</li>
        </ol>
    </nav>


    <section class="row">
        <section class="col-12">
            <section class="main-body-container">
                <section class="main-body-container-header">
                    <h5>
                        نمایش نظرها
                    </h5>
                </section>

                <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                    <a href="{{ route('admin.content.doctor_ads.index') }}" class="btn btn-info btn-sm">بازگشت</a>
                </section>

                    <section class="card mb-3">
                        <section class="card-header text-white bg-custom-yellow">
                            {{ $comment->id }}
                        </section>
                        <section class="card-body">
                            <h5 class="card-title">
                                {{ $comment->writer }}
                            </h5>
                            <p class="card-text">
                                {{ $comment->description }}
                            </p>
                        </section>
                    </section>

                <section>
                    <form action="" method="">
                        <section class="row">
                            <section class="col-12">
                                <div class="form-group">
                                    <label for="">پاسخ ادمین</label>
                                    ‍<textarea class="form-control form-control-sm" rows="4"></textarea>
                                </div>
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
