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
                @if ( isset($post) && $post != null )
                <h1>Gönderi Düzenle</h1>
                @else
                <h1>Yeni Gönderi Oluştur</h1>
                @endif
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('admin') }}">Anasayfa</a></li>
                    @if ( isset($post) && $post != null )
                    <li class="breadcrumb-item active">{{ $post->title }}</li>
                    @else
                    <li class="breadcrumb-item active">Yeni Post</li>
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
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Post Başlık</label>
                                    <input type="name" class="form-control" name="title" id="exampleInputPassword1"
                                        placeholder="Blog Başlık" value="{{ old('title') ?? $post->title ?? '' }}">
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
                                        maxlength="240">{{ old('description') ?? $post->description ?? '' }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <label for="ckeditor1">İçerik</label>
                        <textarea class="form-control textarea_ckeditor @error('content') is-invalid @enderror"
                            name="content" id="ckeditor1">{{ old('content') ?? $post->content ?? '' }}</textarea>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="form-group">
                            <label for="status">Durum</label>
                            <select name="status" id="status" class="form-control @error('status') is-invalid @enderror">
                                <option value="pending" @if(isset($post) && $post->status == 'pending') selected @endif>Onay Bekliyor</option>
                                <option value="active" @if(isset($post) && $post->status == 'active') selected @endif>Aktif</option>
                                <option value="passive" @if(isset($post) && $post->status == 'passive') selected @endif>Pasif</option>
                            </select>
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