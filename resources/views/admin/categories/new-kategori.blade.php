@extends('admin.index')
@section('title')Yeni Kategoriler - @endsection
@section('menu-category-active') active @endsection

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Yeni Kategori</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('Admin') }}">Anasayfa</a></li>
                    <li class="breadcrumb-item active">Yeni Kategori</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-12">
                <div class="card card-warning">
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col-sm-6 col-12">
                                    <div class="col-sm-12 col-12">
                                        <div class="form-group">
                                            <label>Kategori Adı</label>
                                            <input type="text" class="form-control" placeholder="" maxlength="60">
                                            <small style="color: #778899;">
                                                Türkçe karakterler olabilir, cümleler arası boşluk olabilir.<br>
                                                örnek: örnek sayfa , örnek
                                            </small>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-12">
                                        <div class="form-group">
                                            <label>Kategori Linki</label>
                                            <input type="text" class="form-control" placeholder="" maxlength="60">
                                            <small style="color: #778899;">
                                                Türkçe karakterler olamaz, cümleler arası boşluk olmaz &quot; - &quot;
                                                konulmalı. <br>
                                                örnek: ornek-sayfa , ornek
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <div class="position-relative pt-3">
                                        <img src="{{ asset('dist/img/banner.jpg') }}" alt="kategori banner"
                                            class="img-fluid">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-save mt-3">Kaydet</button>
                            </div>
                        </form>
                    </div><!-- /.card-body -->
                </div>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</section><!-- /.content -->

@endsection