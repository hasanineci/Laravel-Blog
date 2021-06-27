@extends('admin.index')
@section('title')Hakkımızda - @endsection
@section('menu-about-active') active @endsection

@section('content')


<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Hakkımızda</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('admin') }}">Anasayfa</a></li>
                        <li class="breadcrumb-item active">Hakkımızda</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Custom Tabs -->
                    <div class="card">
                        <div class="card-header d-flex p-0">
                            <h3 class="card-title p-3">Hakkımızda</h3>
                            <ul class="nav nav-pills ml-auto p-2">
                                <li class="nav-item"><a class="nav-link active" href="#tab_1"
                                        data-toggle="tab">Hakkımızda</a></li>
                                <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab">Misyonumuz</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#tab_3" data-toggle="tab">Vizyonumuz</a>
                                </li>
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab_1">
                                    <p>
                                        <textarea class="form-control textarea_ckeditor "
                                            name="content" id="ckeditor1">
                                        </textarea>
                                    </p>
                                    <a href="#" type="submit" class="btn btn-primary btn-save">Kaydet</a>
                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="tab_2">
                                    <p>
                                        <textarea class="form-control textarea_ckeditor "
                                            name="content" id="ckeditor2">
                                        </textarea>
                                    </p>
                                    <a href="#" type="submit" class="btn btn-primary btn-save">Kaydet</a>
                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="tab_3">
                                    <p>
                                        <textarea class="form-control textarea_ckeditor "
                                            name="content" id="ckeditor3">
                                        </textarea>
                                    </p>
                                    <a href="#" type="submit" class="btn btn-primary btn-save">Kaydet</a>
                                </div>
                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>
                    <!-- ./card -->
                </div>
                <!-- /.col -->
            </div>
        </div><!-- /.container-fluid -->
    </section><!-- /.content -->
</div>


@endsection

@section('footer')
<script src="{{ asset('js/admin/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('js/admin/select2.min.js') }}"></script>
<script>
    $(document).ready(function(){
        // select1
        $('.select2').select2();

        // ckeditor
        CKEDITOR.replace( 'ckeditor1' );
    })
</script>
<script>
    $(document).ready(function(){
        // select2
        $('.select2').select2();

        // ckeditor
        CKEDITOR.replace( 'ckeditor2' );
    })
</script>
<script>
    $(document).ready(function(){
        // select3
        $('.select2').select2();

        // ckeditor
        CKEDITOR.replace( 'ckeditor3' );
    })
</script>
@endsection