@extends('site.profile')
@section('profileContent')
    <h1>Избранное</h1>

    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-outline-primary">Выход</button>
    </form>
@endsection
