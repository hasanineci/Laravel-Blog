@extends('admin.index')
@section('title')Postlar -@endsection
@section('menu-posts') menu-open @endsection
@section('menu-posts-active') active @endsection
@section('content')




<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Blog Gönderileri</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('admin') }}">Anasayfa</a></li>
                        <li class="breadcrumb-item active">Blog Gönderileri</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 col-12 order-2 order-md-1">
                        <div class="row">
                            <div class="col-md-12 col-12">

                                @foreach ($posts as $post)
                                <div class="post">
                                    <div class="user-block">
                                        <img class="img-circle img-bordered-sm" src="{{ asset('dist/img/user.jpg') }}"
                                            alt="user image">
                                        <span class="username">
                                            <a href="#">{{ $post->title }}</a>
                                        </span>
                                        <span class="description">herkese Açık Olarak Paylaşıldı - {{ $post->created_at }}</span>
                                    </div>
                                    <p>
                                        {!! $post->content !!}
                                    </p>

                                    <p>
                                        <a class="btn btn-primary btn-sm" href="#">
                                            <i class="fas fa-folder-open"></i>
                                            Gözat
                                        </a>
                                        <a class="btn btn-dark btn-sm" href="#">
                                            <i class="fas fa-exclamation-triangle"></i>
                                            Pasif Et
                                        </a>
                                        <a class="btn btn-success btn-sm" href="#">
                                            <i class="fas fa-pencil-alt"></i>
                                            Düzenle
                                        </a>
                                        <a class="btn btn-danger btn-sm" href="#">
                                            <i class="fas fa-trash"></i>
                                            Sil
                                        </a>
                                    </p>
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div><!-- /.card-body -->
            </div><!-- /.card -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->


@endsection