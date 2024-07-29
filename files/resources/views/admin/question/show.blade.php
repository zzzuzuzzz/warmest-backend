@extends('admin.layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Вопрос от пользователя</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active"><a href="{{ route('admin.main.index') }}">Главная</a> / <a href="{{ route('question.index') }}">Вопросы</a> / Вопрос</li>
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
                <div class="card card-primary card-outline w-100">
                    <div class="card-body p-0">
                        <div class="mailbox-read-info">
                            <h5>Тема сообщения: {{ $question->theme }}</h5>
                            <h6 class="mt-2">Почта отправителя: {{ $question->email }}
                                <span class="mailbox-read-time float-right">{{ $question->create }}</span>
                            </h6>
                            @if($question->number !== Null)
                                <h6>Номер телефона: {{ $question->number }}</h6>
                            @endif
                        </div>
                        <div class="mailbox-read-message">
                            <p>{{ $question->question }}</p>
                        </div>
                    </div>
                    <div class="card-footer">
{{--                        <form action="{{ route('question.create', $question->id) }}" method="get" class="float-right">--}}
{{--                            <button type="submit" class="btn btn-default"><i class="fas fa-share"></i> Ответить</button>--}}
{{--                        </form>--}}
                        <form action="{{ route('question.delete', $question->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-default"><i class="far fa-trash-alt"></i> Удалить</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
