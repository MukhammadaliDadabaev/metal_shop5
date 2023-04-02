@extends('admin.layouts.admin')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Продукты</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Главная</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
{{--    <!-- Main content -->--}}
{{--    <section class="content">--}}
{{--        <div class="container-fluid">--}}
{{--            <!-- Small boxes (Stat box) -->--}}
{{--            <div class="row">--}}
{{--                <div class="col-10">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-header">--}}
{{--                            <a class="btn btn-primary" href="{{ route('admin.product.create') }}">Добавить</a>--}}
{{--                        </div>--}}
{{--                        <!-- /.card-header -->--}}
{{--                        <div class="card-body table-responsive p-0">--}}
{{--                            <table class="table table-hover text-nowrap">--}}
{{--                                <thead>--}}
{{--                                <tr>--}}
{{--                                    <th>ID</th>--}}
{{--                                    <th>Наименование</th>--}}
{{--                                </tr>--}}
{{--                                </thead>--}}
{{--                                <tbody>--}}
{{--                                @foreach($products as $product)--}}
{{--                                    <tr>--}}
{{--                                        <td>{{ $product->id }}</td>--}}
{{--                                        <td><a href="{{ route('admin.product.show', $product->id) }}">{{ $product->title }}</a></td>--}}
{{--                                    </tr>--}}
{{--                                @endforeach--}}
{{--                                </tbody>--}}
{{--                            </table>--}}
{{--                        </div>--}}
{{--                        <!-- /.card-body -->--}}
{{--                    </div>--}}
{{--                    <!-- /.card -->--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- /.row -->--}}
{{--        </div><!-- /.container-fluid -->--}}
{{--    </section>--}}


    <!-- Content Header (Page header) -->
{{--        <div class="content-header">--}}
{{--            <div class="container-fluid">--}}
{{--                <div class="row mb-2">--}}
{{--                    <div class="col-sm-6">--}}
{{--                        <h1 class="m-0">Product</h1>--}}
{{--                    </div><!-- /.col -->--}}
{{--                    <div class="col-sm-6">--}}
{{--                        <ol class="breadcrumb float-sm-right">--}}
{{--                            <li class="breadcrumb-item"><a href="#">Home</a></li>--}}
{{--                            <li class="breadcrumb-item active">Boshqaruv paneli v1</li>--}}
{{--                        </ol>--}}
{{--                    </div><!-- /.col -->--}}
{{--                </div><!-- /.row -->--}}
{{--            </div><!-- /.container-fluid -->--}}
{{--        </div>--}}
{{--        <!-- /.content-header -->--}}
        <!-- Main content -->

        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="ml-2 mb-3">
                        <a href="{{ route('admin.product.create') }}" class="btn btn-block btn-primary">QO'SHISH</a>
                    </div>
                    <!-- ./col -->
                </div>
                <div class="row">
                    <div class=" col-12">
                        <div class="card">
                            <div class="card-header">
                                <h2 class="card-title"><b>Ma'lumotlar jadvali</b></h2>
                                <div class="card-tools">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        <input type="text" name="table_search" class="form-control float-right"
                                               placeholder="Qidiruv">
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
                                <table class="table table-bordered table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Sarlavha</th>
                                        <th>Text</th>
                                        <th>Izoh</th>
                                        <th>Narx</th>
                                        <th>Jami</th>
                                        <th>Rasmlar</th>
                                        <th>Toifalar</th>
                                        <th>Taglar</th>
                                        <th>Ranglar</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($products as $product)
                                        <tr>
                                            <td>{{ $product->id }}</td>
                                            <td>{{ $product->title }}</td>
                                            <td>{{ $product->description }}</td>
                                            <td>{{ $product->content }}</td>
                                            <td>{{ $product->price }}</td>
                                            <td>{{ $product->count }}</td>
                                            <td>{{ $product->tags->pluck('title')->join(', ')}}</td>
                                            <td>{{ $product->preview_image }}</td>

                                            <td>
{{--                                                <a class="btn btn-dark btn-sm"--}}
{{--                                                   href="{{ route('$admin.product.show', $product) }}"><i--}}
{{--                                                        class="far fa-eye"></i></a>--}}

                                                <a class="btn btn-primary btn-sm float-left mr-2"
                                                   href="{{ route('$admin.product.edit', $product) }}">
                                                    <i class="fas fa-pencil-alt"></i></a>

                                                <form action="{{ route('admin.product.destroy', $product) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"  class="btn btn-danger btn-sm" onclick="return confirm('Подтвердие удаление')">
                                                        <i class="fas fa-trash-alt" role="button"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
@endsection
