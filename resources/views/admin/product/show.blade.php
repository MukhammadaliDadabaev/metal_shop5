@extends('admin.layouts.admin')
@section('content')
    <!-- Main content -->
    <section class="content-header">
        <div class="container-fluid">
            <h1 class="m-3"><b>Productlarni ko'rish</b></h1>
             <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a class="btn btn-outline-success" href="{{ route('admin.product.index') }}"><i class="fas fa-backward"></i></a>
                             </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <tbody>
                                    <tr>
                                        <th>Id raqami</th>
                                        <td>{{ $product->id }}</td>
                                    </tr>
                                    <tr>
                                        <th>Sarlavha nomi</th>
                                        <td>{{ $product->title }}</td>
                                    </tr>
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
