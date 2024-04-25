@extends('admin.layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Проект дома</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active"><a href="{{ route('admin.main.index') }}">Главная</a></li>
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
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex p-3">
                            <div class="mr-3">
                                <a href="{{ route('house.edit', $house->id) }}" class="btn btn-primary">Редактировать</a>
                            </div>
                            <form action="{{ route('house.delete', $house->id) }}" method="post" class="mr-3">
                                @csrf
                                @method('delete')
                                <input type="submit" class="btn btn-danger" value="Удалить">
                            </form>
                            @if($house->is_published)
                                <div class="mr-3">
                                    <a href="{{ route('house.publish', $house->id) }}" class="btn btn-primary">Снять с публикации</a>
                                </div>
                            @else
                                <div class="mr-3">
                                    <a href="{{ route('house.publish', $house->id) }}" class="btn btn-primary">Опубликовать</a>
                                </div>
                            @endif
                        </div>

                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <tbody>
                                    <tr>
                                        <td>ID</td>
                                        <td>{{ $house->id }}</td>
                                    </tr>
                                    <tr>
                                        <td>Наименование</td>
                                        <td>{{ $house->title }}</td>
                                    </tr>
                                    <tr>
                                        <td>Описание</td>
                                        <td>{{ $house->description }}</td>
                                    </tr>
                                    <tr>
                                        <td>Контент</td>
                                        <td>{{ $house->content }}</td>
                                    </tr>
                                    <tr>
                                        <td>Основная цена</td>
                                        <td>{{ $house->main_price }}</td>
                                    </tr>
                                    <tr>
                                        <td>Цена с комуникациями</td>
                                        <td>{{ $house->add_price }}</td>
                                    </tr>
                                    <tr>
                                        <td>Статус проекта</td>
                                        <td>{{ $house->is_published ? 'Опубликовано' : 'Не опубликовано'}}</td>
                                    </tr>
                                    <tr>
                                        <td>Категория проекта</td>
                                        <td>{{ $category->title }}</td>
                                    </tr>
                                    <tr>
                                        <td>Дополнительные услуги</td>
                                        <td>
                                            @foreach($addServicesList as $addService)
                                                <p>{{ $addService }}</p>
                                            @endforeach
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <img src="{{ asset('storage/' . $house->preview_image) }}" alt="Картинка" width="100%">
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
