@extends('admin.index')
@section('title')Postlar -@endsection
@section('menu-posts') menu-open @endsection
@section('menu-posts-active') active @endsection
@section('content')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6"></div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('admin') }}">Anasayfa</a></li>
                        <li class="breadcrumb-item active">Postlar</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Gönderiler</h3>

                                        <div class="card-tools">
                                            <div class="input-group input-group-sm" style="width: 150px;">
                                                <input type="text" name="table_search" class="form-control float-right"
                                                    placeholder="Search">

                                                <div class="input-group-append">
                                                    <button type="submit" class="btn btn-default">
                                                        <i class="fas fa-search"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body table-responsive p-0">
                                        <table class="table table-hover text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th>TARİH</th>
                                                    <th>KULLANICI</th>
                                                    <th>DURUM</th>
                                                    <th>BAŞLIK</th>
                                                    <th>AÇIKLAMA</th>
                                                    <th>KONU</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>11/05/2021</td>
                                                    <td>Hasan İNECİ</td>
                                                    <td><span class="tag tag-success">Onaylı</span></td>
                                                    <td>Deneme Başlık</td>
                                                    <td>Kısa Açıklama</td>
                                                    <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea
                                                        temporibus, assumenda distinctio doloribus quam iste quos, sequi
                                                        voluptate nisi accusamus eius non eligendi molestias nam
                                                        perspiciatis ad alias itaque hic!
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>11/05/2021</td>
                                                    <td>Ersel hekim</td>
                                                    <td><span class="tag tag-success">Onaylı</span></td>
                                                    <td>Deneme Başlık</td>
                                                    <td>Kısa Açıklama</td>
                                                    <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea
                                                        temporibus, assumenda distinctio doloribus quam iste quos, sequi
                                                        voluptate nisi accusamus eius non eligendi molestias nam
                                                        perspiciatis ad alias itaque hic!
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>11/05/2021</td>
                                                    <td>Hasan İNECİ</td>
                                                    <td><span class="tag tag-success">Onaylı</span></td>
                                                    <td>Deneme Başlık</td>
                                                    <td>Kısa Açıklama</td>
                                                    <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea
                                                        temporibus, assumenda distinctio doloribus quam iste quos, sequi
                                                        voluptate nisi accusamus eius non eligendi molestias nam
                                                        perspiciatis ad alias itaque hic!
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>11/05/2021</td>
                                                    <td>Ersel hekim</td>
                                                    <td><span class="tag tag-success">Onaylı</span></td>
                                                    <td>Deneme Başlık</td>
                                                    <td>Kısa Açıklama</td>
                                                    <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea
                                                        temporibus, assumenda distinctio doloribus quam iste quos, sequi
                                                        voluptate nisi accusamus eius non eligendi molestias nam
                                                        perspiciatis ad alias itaque hic!
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>11/05/2021</td>
                                                    <td>Hasan İNECİ</td>
                                                    <td><span class="tag tag-success">Onaylı</span></td>
                                                    <td>Deneme Başlık</td>
                                                    <td>Kısa Açıklama</td>
                                                    <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea
                                                        temporibus, assumenda distinctio doloribus quam iste quos, sequi
                                                        voluptate nisi accusamus eius non eligendi molestias nam
                                                        perspiciatis ad alias itaque hic!
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>11/05/2021</td>
                                                    <td>Ersel hekim</td>
                                                    <td><span class="tag tag-success">Onaylı</span></td>
                                                    <td>Deneme Başlık</td>
                                                    <td>Kısa Açıklama</td>
                                                    <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea
                                                        temporibus, assumenda distinctio doloribus quam iste quos, sequi
                                                        voluptate nisi accusamus eius non eligendi molestias nam
                                                        perspiciatis ad alias itaque hic!
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>11/05/2021</td>
                                                    <td>Hasan İNECİ</td>
                                                    <td><span class="tag tag-success">Onaylı</span></td>
                                                    <td>Deneme Başlık</td>
                                                    <td>Kısa Açıklama</td>
                                                    <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea
                                                        temporibus, assumenda distinctio doloribus quam iste quos, sequi
                                                        voluptate nisi accusamus eius non eligendi molestias nam
                                                        perspiciatis ad alias itaque hic!
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>11/05/2021</td>
                                                    <td>Ersel hekim</td>
                                                    <td><span class="tag tag-success">Onaylı</span></td>
                                                    <td>Deneme Başlık</td>
                                                    <td>Kısa Açıklama</td>
                                                    <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea
                                                        temporibus, assumenda distinctio doloribus quam iste quos, sequi
                                                        voluptate nisi accusamus eius non eligendi molestias nam
                                                        perspiciatis ad alias itaque hic!
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>11/05/2021</td>
                                                    <td>Hasan İNECİ</td>
                                                    <td><span class="tag tag-success">Onaylı</span></td>
                                                    <td>Deneme Başlık</td>
                                                    <td>Kısa Açıklama</td>
                                                    <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea
                                                        temporibus, assumenda distinctio doloribus quam iste quos, sequi
                                                        voluptate nisi accusamus eius non eligendi molestias nam
                                                        perspiciatis ad alias itaque hic!
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>11/05/2021</td>
                                                    <td>Ersel hekim</td>
                                                    <td><span class="tag tag-success">Onaylı</span></td>
                                                    <td>Deneme Başlık</td>
                                                    <td>Kısa Açıklama</td>
                                                    <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea
                                                        temporibus, assumenda distinctio doloribus quam iste quos, sequi
                                                        voluptate nisi accusamus eius non eligendi molestias nam
                                                        perspiciatis ad alias itaque hic!
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>11/05/2021</td>
                                                    <td>Hasan İNECİ</td>
                                                    <td><span class="tag tag-success">Onaylı</span></td>
                                                    <td>Deneme Başlık</td>
                                                    <td>Kısa Açıklama</td>
                                                    <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea
                                                        temporibus, assumenda distinctio doloribus quam iste quos, sequi
                                                        voluptate nisi accusamus eius non eligendi molestias nam
                                                        perspiciatis ad alias itaque hic!
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>11/05/2021</td>
                                                    <td>Ersel hekim</td>
                                                    <td><span class="tag tag-success">Onaylı</span></td>
                                                    <td>Deneme Başlık</td>
                                                    <td>Kısa Açıklama</td>
                                                    <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea
                                                        temporibus, assumenda distinctio doloribus quam iste quos, sequi
                                                        voluptate nisi accusamus eius non eligendi molestias nam
                                                        perspiciatis ad alias itaque hic!
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>11/05/2021</td>
                                                    <td>Hasan İNECİ</td>
                                                    <td><span class="tag tag-success">Onaylı</span></td>
                                                    <td>Deneme Başlık</td>
                                                    <td>Kısa Açıklama</td>
                                                    <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea
                                                        temporibus, assumenda distinctio doloribus quam iste quos, sequi
                                                        voluptate nisi accusamus eius non eligendi molestias nam
                                                        perspiciatis ad alias itaque hic!
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>11/05/2021</td>
                                                    <td>Ersel hekim</td>
                                                    <td><span class="tag tag-success">Onaylı</span></td>
                                                    <td>Deneme Başlık</td>
                                                    <td>Kısa Açıklama</td>
                                                    <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea
                                                        temporibus, assumenda distinctio doloribus quam iste quos, sequi
                                                        voluptate nisi accusamus eius non eligendi molestias nam
                                                        perspiciatis ad alias itaque hic!
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>11/05/2021</td>
                                                    <td>Hasan İNECİ</td>
                                                    <td><span class="tag tag-success">Onaylı</span></td>
                                                    <td>Deneme Başlık</td>
                                                    <td>Kısa Açıklama</td>
                                                    <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea
                                                        temporibus, assumenda distinctio doloribus quam iste quos, sequi
                                                        voluptate nisi accusamus eius non eligendi molestias nam
                                                        perspiciatis ad alias itaque hic!
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>11/05/2021</td>
                                                    <td>Ersel hekim</td>
                                                    <td><span class="tag tag-success">Onaylı</span></td>
                                                    <td>Deneme Başlık</td>
                                                    <td>Kısa Açıklama</td>
                                                    <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea
                                                        temporibus, assumenda distinctio doloribus quam iste quos, sequi
                                                        voluptate nisi accusamus eius non eligendi molestias nam
                                                        perspiciatis ad alias itaque hic!
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>11/05/2021</td>
                                                    <td>Hasan İNECİ</td>
                                                    <td><span class="tag tag-success">Onaylı</span></td>
                                                    <td>Deneme Başlık</td>
                                                    <td>Kısa Açıklama</td>
                                                    <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea
                                                        temporibus, assumenda distinctio doloribus quam iste quos, sequi
                                                        voluptate nisi accusamus eius non eligendi molestias nam
                                                        perspiciatis ad alias itaque hic!
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>11/05/2021</td>
                                                    <td>Ersel hekim</td>
                                                    <td><span class="tag tag-success">Onaylı</span></td>
                                                    <td>Deneme Başlık</td>
                                                    <td>Kısa Açıklama</td>
                                                    <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea
                                                        temporibus, assumenda distinctio doloribus quam iste quos, sequi
                                                        voluptate nisi accusamus eius non eligendi molestias nam
                                                        perspiciatis ad alias itaque hic!
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection