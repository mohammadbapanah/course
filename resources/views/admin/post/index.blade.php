@extends('admin.layouts.master')

@section('head-tag')
    <title>پست ها</title>
@endsection

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item font-size-12"><a href="#">خانه</a></li>
            <li class="breadcrumb-item font-size-12"><a href="#">بخش محتوی</a></li>
            <li class="breadcrumb-item font-size-12 active" aria-current="page">پست ها</li>
        </ol>
    </nav>

    <section class="row">
        <section class="col-12">
            <section class="main-body-container">
                <section class="main-body-container-header">
                    <h5>
                        پست ها
                    </h5>
                </section>

                <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                    <a href="{{ route('posts.create') }}" class="btn btn-info btn-sm">ایجاد پست </a>
                    <div class="max-width-16-rem">
                        <input type="text" class="form-control form-control-sm form-text" placeholder="جستجو">
                    </div>
                </section>

                <section class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>عنوان پست</th>
                            <th>دسته</th>
                            <th>اسلاگ</th>
                            <th>تصویر</th>
                            <th>وضعیت</th>
                            <th>تاریخ انتشار</th>

                            <th class="max-width-16-rem text-center"><i class="fa fa-cogs"></i> تنظیمات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $k=>$post)
                            <tr>
                                <th> {{ $post->firstItem+$k+1 }}</th>
                                <td>{{ $post->title }}</td>
                                <td>
                                    {{ $post->category->title }}
                                </td>
                                <td>
                                    {{ $post->slug }}
                                </td>
                                <td>
                                    <img src="{{ asset('uploads/'.$post->image) }}" alt="image" width="100">

                                </td>
                                <td>
                                    <form action="{{ route('changePostStatus',$post->id) }}" method="get">
                                        @if($post->status==1)
                                            <button class="btn btn-success" type="submit">تایید</button>
                                        @else
                                            <button class="btn btn-danger" type="submit">عدم تایید</button>
                                        @endif
                                    </form>
                                </td>
                                <td>{{ $post->created_at }}</td>

                                <td class="width-16-rem text-left">
                                    <a href="{{ route('posts.edit',$post->id) }}"
                                       class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> ویرایش</a>
                                    <form action="{{ route('posts.destroy',$post->id) }}" method="post"
                                          style="display: inline-block">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger btn-sm delete" type="submit"><i
                                                class="fa fa-trash-alt"></i>
                                            حذف
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </section>

            </section>
        </section>
    </section>

@endsection

