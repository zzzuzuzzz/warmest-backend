@extends('site.profile')
@section('profileContent')
    <section class="content" style="width: 100%; padding: 15px">
        <form action="{{ route('site.profile.question.store') }}" method="post" class="questionForm">
            @csrf
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Ваше ФИО</label>
                <input name="name" type="text" class="form-control" value="{{ $user->name }}" id="formGroupExampleInput"
                       placeholder="Иванов Иван Иванович">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Ваш номер телефона (необязательно)</label>
                <input name="number" type="number" class="form-control" id="formGroupExampleInput2"
                       placeholder="8 999 850 90 90">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Ваш email</label>
                <input name="email" type="email" class="form-control" value="{{ $user->email }}" id="formGroupExampleInput2"
                       placeholder="vash_email@mail.ru">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Тема вопроса</label>
                <select class="form-control" id="formGroupExampleInput" name="theme">
                    <option value="Тема 1">Тема 1</option>
                    <option value="Тема 2">Тема 2</option>
                    <option value="Тема 3">Тема 3</option>
                    <option value="Тема 4">Тема 4</option>
                    <option value="Тема 5">Тема 5</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Ваш вопрос</label>
                <input name="question" type="text" class="form-control" id="formGroupExampleInput2"
                       placeholder="Вы можете расписать ваш вопрос здесь">
            </div>
            <button type="submit" class="btn btn-primary">Отправить</button>
        </form>
    </section>
    <script>
        document.querySelector('.questionForm').addEventListener('submit', function () {
            alert('Ваше сообщение отправлено')
        })
    </script>
@endsection
