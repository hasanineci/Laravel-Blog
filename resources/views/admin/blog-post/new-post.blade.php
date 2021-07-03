@extends('admin.index')
@section('title')Yeni Post - @endsection
@section('menu-posts') menu-open @endsection
@section('menu-posts-active') active @endsection

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Yeni Gönderi Oluştur</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('admin') }}">Anasayfa</a></li>
                    <li class="breadcrumb-item active">Yeni Post</li>
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
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Post Başlık</label>
                                    <input type="name" class="form-control" name="title" id="exampleInputPassword1"
                                        placeholder="Blog Başlık" value="{{ old('title') ?? '' }}">
                                </div>
                            </div>
                            <div class="col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="exampleInputFile">Resim Yükle</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="image"
                                                id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Dosya formatı
                                                jpg</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Yükle</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-12">
                                <div class="form-group">
                                    <label>Post Kısa Açıklama</label>
                                    <textarea name="description" id="description" class="form-control" rows="3"
                                        maxlength="60">{{ old('description') ?? '' }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <textarea class="form-control textarea_ckeditor @error('content') is-invalid @enderror"
                            name="content" id="ckeditor1">{{ old('content') ?? '' }}</textarea>
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
@section('footer')
<script src="{{ asset('js/admin/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('js/admin/select2.min.js') }}"></script>
<script>
    $(document).ready(function(){
        // select2
        $('.select2').select2();

        // ckeditor
        CKEDITOR.replace( 'ckeditor1' );
    })
</script>
@endsection