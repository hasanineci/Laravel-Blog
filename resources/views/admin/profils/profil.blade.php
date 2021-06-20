@extends('admin.index')
@section('title')Profil - @endsection
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
                    <h1>Profil</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('admin') }}">Anasayfa</a></li>
                        <li class="breadcrumb-item active">Profil</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">

                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle"
                                    src="{{ asset('dist/img/user2-160x160.jpg') }}" alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center">Hasan İNECİ</h3>
                            <p class="text-muted text-center">Bilgisayar Mühendisi</p>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <!-- About Me Box -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Hakkımda</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <strong><i class="fas fa-book mr-1"></i> Eğitim</strong>

                            <p class="text-muted">
                                Uluslararası Kıbrıs Üniversitesi Bilgisayar Mühendisliği
                            </p>

                            <hr>

                            <strong><i class="fas fa-map-marker-alt mr-1"></i> Adres</strong>

                            <p class="text-muted">Siverek, Şanlıurfa</p>

                            <hr>

                            <strong><i class="fas fa-pencil-alt mr-1"></i> Eğitimler</strong>

                            <p class="text-muted">
                                <span class="tag tag-danger">Kullanıcı Arayüs Tasarımı</span>
                                <span class="tag tag-success">Coding</span>
                                <span class="tag tag-info">Javascript</span>
                                <span class="tag tag-warning">PHP</span>
                                <span class="tag tag-primary">Node.js</span>
                                <span class="tag tag-warning">Laravel</span>
                                <span class="tag tag-primary">Java</span>
                            </p>

                            <hr>

                            <strong><i class="far fa-file-alt mr-1"></i> Biyografi</strong>

                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                                fermentum enim neque.</p>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-body pt-5">
                            <div class="tab-content">
                                <form class="form-horizontal">
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Adı Soyadı</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="inputName" placeholder="Ad Soyad">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputJob" class="col-sm-2 col-form-label">Meslek</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="inputJob"
                                                placeholder="Meslek">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="inputEmail"
                                                placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName2" class="col-sm-2 col-form-label">Okul</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputSchool" placeholder="Okul">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputExperience" class="col-sm-2 col-form-label">Biyografi</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" id="inputExperience"
                                                placeholder="..."></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputSkills" class="col-sm-2 col-form-label">Eğitim</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputSkills"
                                                placeholder="Eğitim">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName2" class="col-sm-2 col-form-label">Adres</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputContact" placeholder="Adres">
                                        </div>
                                    </div>
                                    <div class="form-group row pt-5">
                                        <div class="offset-sm-2 col-sm-10">
                                            <button type="submit" class="btn btn-success p-2" style="width: 150px;">KAYDET</button>
                                        </div>
                                    </div>
                                </form>
                            </div> <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div> <!-- /.card -->
                </div> <!-- /.col -->
            </div> <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section> <!-- /.content -->
</div>
<!-- /.content-wrapper -->











@endsection