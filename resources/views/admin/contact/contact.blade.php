@extends('admin.index')
@section('title')İletişim - @endsection
@section('menu-contact-active') active @endsection

@section('content')

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
                        <form action="" method="POST" class="needs-validation" novalidate>
                            @csrf

                            <div class="row">
                                <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="email">E-Posta Adresi</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            id="email" name="email" value="{{ $contact->email ?? old('email') }}"
                                            required>
                                        <small>Örnek: info@hasanineci.com</small>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="phone">Telefon Numarası</label>
                                        <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                            id="phone" name="phone" value="{{ $contact->phone ?? old('phone') }}"
                                            required>
                                        <small>Örnek: +905415148515</small>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="fax">Fax</label>
                                        <input type="text" class="form-control @error('fax') is-invalid @enderror"
                                            id="fax" name="fax" value="{{ $contact->fax ?? old('fax') }}">
                                        <small>Örnek: +90 530 123 45 67</small>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="whatsapp_phone">Whatsapp İletişim Numarası</label>
                                        <input type="text"
                                            class="form-control @error('whatsapp_phone') is-invalid @enderror"
                                            id="whatsapp_phone" name="whatsapp_phone"
                                            value="{{ $contact->whatsapp_phone ?? old('whatsapp_phone') }}">
                                        <small>Örnek: +90 530 123 45 67</small>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="address">Adres</label>
                                <input type="text" class="form-control @error('address') is-invalid @enderror"
                                    id="address" name="address" value="{{ $contact->address ?? old('address') }}"
                                    required>
                                <small>Örnek: Doğukent Mah. 105. Cad. Fethiye Apt. No:17 Kat 5 Daire 19
                                    Karaköprü/Şanlıurfa</small>
                            </div>

                            <button type="submit" class="btn btn-primary btn-save">Kaydet</button>

                        </form>
                    </div><!-- /.card-body -->
                </div>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</section><!-- /.content -->



@endsection