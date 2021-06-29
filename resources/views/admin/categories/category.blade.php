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
                    <a href="{{ url('admin/yeni-kategori') }}" type="button" class="btn btn-success">
                        Yeni Kategori
                    </a>
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
                            <th style="width: 20%" class="text-center">
                                Araçlar
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kategori as $kategori)
                        <tr>
                            <td>
                                #
                            </td>
                            <td>
                                <a style="text-transform: capitalize;"> {{ $kategori->name }} </a>
                                <br />
                                <small> Oluşturuldu {{ $kategori->updated_at->format('d.m.Y') }} </small>
                            </td>
                            <td class="pl-4">
                                <img alt="Avatar" class="table-avatar" src="{{ asset('dist/img/user.jpg') }}">
                            </td>
                            <td class="project-state">
                                <span class="badge badge-success"> {{ $kategori->status }} </span>
                            </td>
                            <td class="project-actions text-center">
                                <a class="btn btn-info btn-sm" href="#">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                                <a class="btn btn-danger btn-sm" href="#">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach

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