@extends('admin.layouts.admin')
@section('content')
    <!-- Main content -->
    <section class="content-header">
        <div class="container-fluid">
            <h1 class="m-3"><b>Foydalanuvchilarni ko'rish</b></h1>
             <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a class="btn btn-outline-success" href="{{ route('admin.user.index') }}"><i class="fas fa-backward"></i></a>
                             </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <tbody>
                                    <tr>
                                        <th>Id raqami</th>
                                        <td>{{ $user->id }}</td>
                                    </tr>
                                    <tr>
                                        <th>Ism</th>
                                        <td>{{ $user->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Familya</th>
                                        <td>{{ $user->surname }}</td>
                                    </tr>
                                    <tr>
                                        <th>Otasining ismi</th>
                                        <td>{{ $user->patronymic }}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>{{ $user->email }}</td>
                                    </tr>
                                    <tr>
                                        <th>Yosh</th>
                                        <td>{{ $user->age }}</td>
                                    </tr>
                                    <tr>
                                        <th>Jinsi</th>
                                        <td>{{ $user->gender }}</td>
                                    </tr>
                                    <tr>
                                        <th>Manzil</th>
                                        <td>{{ $user->address }}</td>
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
