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

                    <div class="card card-primary card-outline card-outline-tabs">
                        <div class="card-header p-0 border-bottom-0">
                            <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill"
                                        href="#custom-tabs-four-hakkimizda" role="tab" aria-controls="custom-tabs-four-home"
                                        aria-selected="true">Hakkımızda</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill"
                                        href="#custom-tabs-four-profile" role="tab"
                                        aria-controls="custom-tabs-four-misyonumuz" aria-selected="false">Misyonumuz</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-four-messages-tab" data-toggle="pill"
                                        href="#custom-tabs-four-messages" role="tab"
                                        aria-controls="custom-tabs-four-vizyonumuz" aria-selected="false">Vizyonumuz</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="custom-tabs-four-tabContent">
                                <div class="tab-pane fade active show" id="custom-tabs-four-hakkimizda" role="tabpanel"
                                    aria-labelledby="custom-tabs-four-home-tab">
                                    <textarea class="form-control textarea_ckeditor " name="content" id="ckeditor1">
                                    </textarea>
                                    <a href="#" type="submit" class="btn btn-primary btn-save mt-3">Kaydet</a>
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-four-misyonumuz" role="tabpanel"
                                    aria-labelledby="custom-tabs-four-profile-tab">
                                    <textarea class="form-control textarea_ckeditor " name="content" id="ckeditor2">
                                    </textarea>
                                    <a href="#" type="submit" class="btn btn-primary btn-save mt-3">Kaydet</a>
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-four-vizyonumuz" role="tabpanel"
                                    aria-labelledby="custom-tabs-four-messages-tab">
                                    <textarea class="form-control textarea_ckeditor " name="content" id="ckeditor3">
                                    </textarea>
                                    <a href="#" type="submit" class="btn btn-primary btn-save mt-3">Kaydet</a>
                                </div>
                            </div>
                        </div><!-- /.card -->
                    </div>
                </div><!-- /.col -->
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