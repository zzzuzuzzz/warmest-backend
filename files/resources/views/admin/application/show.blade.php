@extends('admin.layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Заявка от пользователя</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active"><a href="{{ route('admin.main.index') }}">Главная</a> / <a href="{{ route('application.index') }}">Заявки</a> / Заявка</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="card">
                    <div class="card-header d-flex p-3">
                        <form action="{{ route('application.delete', $application->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" class="btn btn-danger" value="Удалить">
                        </form>
                    </div>

                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <tbody>
                            <tr>
                                <td>ID</td>
                                <td>{{ $application->id }}</td>
                            </tr>
                            <tr>
                                <td>Имя заявителя</td>
                                <td>{{ $application->name }}</td>
                            </tr>
                            <tr>
                                <td>Почта заявителя</td>
                                <td>{{ $application->email }}</td>
                            </tr>
                            <tr>
                                <td>Телефон заявителя</td>
                                <td>{{ $application->number == '' ? 'Пользователь не оставил свой номер телефона' : $application->number }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
