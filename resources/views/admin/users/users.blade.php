@extends('admin.index')
@section('title')Kullanıcılar - @endsection
@section('menu-users-active') active @endsection

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Kullanıcılar</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('admin') }}">Anasayfa</a></li>
                    <li class="breadcrumb-item active">Kullanıcılar</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card card-solid">
        <div class="card-header">
            <a href="{{ url('admin/yeni-Kullanici') }}" type="button" class="btn btn-primary">
                Yeni Kullanıcı
            </a>
        </div>
        <div class="card-body pb-0">
            <div class="row">
                @foreach ($user as $user)
                <div class="col-12 col-sm-12 col-md-12 d-flex align-items-stretch flex-column">
                    <div class="card bg-light d-flex flex-fill">
                        <div class="card-header text-muted border-bottom-0">
                            {{ $user->jobs}}
                        </div>
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-sm-6 col-6">
                                    <h2 class="lead"><b>{{ $user->name}}</b></h2>
                                    <p class="text-muted text-sm"><b>Hakkımda: </b> {{ $user->about}} </p>
                                    <ul class="ml-4 mb-0 fa-ul text-muted">
                                        <li class="small">
                                            <span class="fa-li">
                                                <i class="fas fa-lg fa-building"></i>
                                            </span>
                                            <b>Adres:</b> {{ $user->address}}
                                        </li>
                                        <li class="small mt-2">
                                            <span class="fa-li">
                                                <i class="fas fa-lg fa-phone"></i>
                                            </span>
                                            <b> Telefon:</b> {{ $user->phone}}
                                        </li>
                                        <li class="small mt-2">
                                            <span class="fa-li">
                                                <i class="fas fa-lg fa-at"></i>
                                            </span>
                                            <b>Email:</b> {{ $user->email}}
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-sm-4 col-4 text-center">
                                    <img src="{{ asset('dist/img/user.jpg') }}" alt="user-avatar"
                                        class="img-circle img-fluid">
                                </div>
                                <div class="col-sm-2 col-2 text-center">
                                    <div class="row">
                                        <div class="col-sm-12 col-12">
                                            <a class="btn btn-info btn-sm p-2" style="width: 150px;" href="#">
                                                <i class="fas fa-pencil-alt"></i>
                                                Düzenle
                                            </a>
                                        </div>
                                        <div class="col-sm-12 col-12 pt-3">
                                            <a class="btn btn-danger btn-sm p-2" style="width: 150px;" href="#">
                                                <i class="fas fa-trash"></i>
                                                Sil
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div><!-- /.card-body -->
    </div><!-- /.card -->
</section> <!-- /.content -->

@endsection