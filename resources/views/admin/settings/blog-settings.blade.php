@extends('admin.index')
@section('title')Kategoriler - @endsection
@section('menu-blog-settings-active') active @endsection

@section('content')


<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Blog Ayarları</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('admin') }}">Anasayfa</a></li>
                        <li class="breadcrumb-item active">Blog Ayarları</li>
                    </ol>
                </div>
            </div>
        </div>
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
                                        <div class="form-group">
                                            <label>Site Adı</label>
                                            <input type="text" class="form-control" placeholder="" maxlength="60">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <div class="form-group">
                                            <label>Site Slogan</label>
                                            <input type="text" class="form-control" placeholder="" maxlength="60">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-12">
                                        <div class="form-group">
                                            <label>Site Açıklama</label>
                                            <textarea name="site_description" id="site_description"
                                                class="form-control" rows="3" maxlength="60">
                                            </textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <div class="form-group">
                                            <label>Google Site Doğrulama</label>
                                            <input type="text" class="form-control" placeholder=" ">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <div class="form-group">
                                            <label>Anahtar Kelimeler</label>
                                            <input type="text" class="form-control" placeholder=" "
                                                maxlength="150">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-save">Kaydet</button>
                                </div>
                            </form>
                        </div><!-- /.card-body -->
                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </section><!-- /.content -->
</div>


@endsection