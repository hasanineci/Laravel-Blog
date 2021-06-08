@extends('admin.index')
@section('title')Yeni Post - @endsection
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
                <div class="card card-outline card-info">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <textarea class="form-control textarea_ckeditor @error('content') is-invalid @enderror"
                            name="content" id="ckeditor1">{{ old('content') ?? '' }}</textarea>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-6 p-3">
                            <button type="button" class="btn btn-block btn-success btn-lg" style="width: 100px;">Kaydet</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col-->
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

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