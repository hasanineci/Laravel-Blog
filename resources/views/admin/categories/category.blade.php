@extends('admin.index')
@section('title')Kategoriler - @endsection
@section('menu-category-active') active @endsection

@section('content')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Kategoriler</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('Admin') }}">Anasayfa</a></li>
                        <li class="breadcrumb-item active">Kategoriler</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Kategoriler</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th style="width: 1%">
                                #
                            </th>
                            <th style="width: 20%">
                                Kategori Adı
                            </th>
                            <th style="width: 10%">
                                Oluşturan
                            </th>
                            <th style="width: 8%" class="text-center">
                                Durumu
                            </th>
                            <th style="width: 20%">
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                #
                            </td>
                            <td>
                                <a>
                                    Anasayfa
                                </a>
                                <br />
                                <small>
                                    Oluşturuldu 01.06.2021
                                </small>
                            </td>
                            <td>
                                <img alt="Avatar" class="table-avatar" src="{{ asset('dist/img/user.jpg') }}">
                            </td>
                            <td class="project-state">
                                <span class="badge badge-success">Yayınlandı</span>
                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-info btn-sm" href="#">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Düzenle
                                </a>
                                <a class="btn btn-danger btn-sm" href="#">
                                    <i class="fas fa-trash">
                                    </i>
                                    Sil
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                #
                            </td>
                            <td>
                                <a>
                                    Hakkımda
                                </a>
                                <br />
                                <small>
                                    Oluşturuldu 01.06.2021
                                </small>
                            </td>
                            <td>
                                <img alt="Avatar" class="table-avatar" src="{{ asset('dist/img/user.jpg') }}">
                            </td>
                            <td class="project-state">
                                <span class="badge badge-success">Yayınlandı</span>
                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-info btn-sm" href="#">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Düzenle
                                </a>
                                <a class="btn btn-danger btn-sm" href="#">
                                    <i class="fas fa-trash">
                                    </i>
                                    Sil
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                #
                            </td>
                            <td>
                                <a>
                                    Blog
                                </a>
                                <br />
                                <small>
                                    Oluşturuldu 01.06.2021
                                </small>
                            </td>
                            <td>
                                <img alt="Avatar" class="table-avatar" src="{{ asset('dist/img/user.jpg') }}">
                            </td>
                            <td class="project-state">
                                <span class="badge badge-success">Yayınlandı</span>
                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-info btn-sm" href="#">
                                    <i class="fas fa-pencil-alt"></i>
                                    Düzenle
                                </a>
                                <a class="btn btn-danger btn-sm" href="#">
                                    <i class="fas fa-trash"></i>
                                    Sil
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                #
                            </td>
                            <td>
                                <a>
                                    İletişim
                                </a>
                                <br />
                                <small>
                                    Oluşturuldu 01.06.2021
                                </small>
                            </td>
                            <td>
                                <img alt="Avatar" class="table-avatar" src="{{ asset('dist/img/user.jpg') }}">
                            </td>
                            <td class="project-state">
                                <span class="badge badge-success">Yayınlandı</span>
                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-info btn-sm" href="#">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Düzenle
                                </a>
                                <a class="btn btn-danger btn-sm" href="#">
                                    <i class="fas fa-trash">
                                    </i>
                                    Sil
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->




@endsection