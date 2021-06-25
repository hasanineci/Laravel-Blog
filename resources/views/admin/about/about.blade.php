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
                <div class="col-md-12 col-12">
                    <div class="card card-warning">
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col-sm-6 col-12">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label>Konu</label>
                                                <select class="form-control">
                                                    <option>Hakkımızda</option>
                                                    <option>Misyonumuz</option>
                                                    <option>Vizyonumuz</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-12">
                                        <div class="form-group">
                                            <label>Konu içeriği</label>
                                            <textarea name="site_description" class="form-control"
                                                rows="10" placeholder="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus cumque eius ipsam earum voluptatibus. Pariatur, corrupti possimus. Est reiciendis nostrum nobis at asperiores dolor, alias atque aspernatur similique animi voluptate.">
                                            </textarea>
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