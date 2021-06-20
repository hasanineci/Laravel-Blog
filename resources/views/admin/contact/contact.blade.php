@extends('admin.index')
@section('title')İletişim - @endsection
@section('menu-contact-active') active @endsection

@section('content')


<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>İletişim</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('admin') }}">Anasayfa</a></li>
                        <li class="breadcrumb-item active">İletişim</li>
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
                                            <label>E-Posta Adresi</label>
                                            <input type="text" class="form-control" placeholder="" maxlength="60">
                                            <small>Örnek: info@hasanineci.com</small>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <div class="form-group">
                                            <label>Telefon Numarası</label>
                                            <input type="text" class="form-control" placeholder="" maxlength="60">
                                            <small>Örnek: +90 541 514 85 15</small>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <div class="form-group">
                                            <label>Fax</label>
                                            <input type="text" class="form-control" placeholder=" ">
                                            <small>Örnek: +90 541 514 85 15</small>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <div class="form-group">
                                            <label>Whatsapp İletişim Numarası</label>
                                            <input type="text" class="form-control" placeholder=" " maxlength="150">
                                            <small>Örnek: +90 541 514 85 15</small>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-12 pb-3">
                                        <div class="form-group">
                                            <label>Adres</label>
                                            <input type="text" class="form-control" placeholder=" " maxlength="150">
                                            <small>Örnek: Doğukent Mah. 105 Sokak Fethiye Apt. No:7/19  Şanlıurfa/Karaköprü</small>
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