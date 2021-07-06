@extends('admin.index')
@section('title')Yeni Kullanıcı - @endsection
@section('menu-users-active') active @endsection

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                @if (isset($user) && $user != null)
                <h1>Kullanıcı Güncelle</h1>
                @else
                <h1>Yeni Kullanıcı</h1>
                @endif
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('admin') }}">Anasayfa</a></li>
                    @if(isset($user) && $user != null)
                    <li class="breadcrumb-item active">{{ $user->name }}</li>
                    @else
                    <li class="breadcrumb-item active">Yeni Kullanıcı</li>
                    @endif
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>


<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card card-outline card-success">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6 col-12">
                                <div class="row">

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Ad Soyad</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="fas fa-user-tie"></i></span>
                                                </div>
                                                <input type="name" name="name" class="form-control"
                                                    value="{{ old('name') ?? $user->name ?? '' }}">
                                            </div><!-- /.input group -->
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Hakkımda</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="far fa-address-card"></i></span>
                                                </div>
                                                <input type="name" name="about" class="form-control"
                                                    value="{{ old('about') ?? $user->about ?? '' }}">
                                            </div><!-- /.input group -->
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Meslek</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="fas fa-handshake"></i></span>
                                                </div>
                                                <input type="name" name="jobs" class="form-control"
                                                    value="{{ old('jobs') ?? $user->jobs ?? '' }}">
                                            </div><!-- /.input group -->
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Adres</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="fas fa-map-marker-alt"></i></span>
                                                </div>
                                                <input type="name" name="address" class="form-control"
                                                    value="{{ old('address') ?? $user->address ?? '' }}">
                                            </div><!-- /.input group -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-12">
                                <div class="row">

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="exampleInputFile">Resim Yükle</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="exampleInputFile">
                                                    <label class="custom-file-label" for="exampleInputFile">Dosya
                                                        formatı
                                                        jpg</label>
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">Yükle</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Telefon</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                                </div>
                                                <input type="name" name="phone" class="form-control"
                                                    value="{{ old('phone') ?? $user->phone ?? '' }}">
                                            </div><!-- /.input group -->
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>E-mail</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-at"></i></span>
                                                </div>
                                                <input type="name" name="email" class="form-control"
                                                    value="{{ old('phone') ?? $user->email ?? '' }}">
                                            </div><!-- /.input group -->
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Parola</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                                </div>
                                                <input type="password" name="password" class="form-control"
                                                    value="{{ old('phone') ?? $user->password ?? '' }}">
                                            </div><!-- /.input group -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-6 p-3">
                            <button type="submit" class="btn btn-block btn-success btn-lg"
                                style="width: 100px;">Kaydet</button>
                        </div>
                    </div>
                </div>
            </form>
        </div><!-- /.col-->
    </div>
</section><!-- /.content -->


@endsection