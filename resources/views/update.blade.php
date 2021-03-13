@extends('layouts')

@section('content')

    <form action="/submit" method="post" class="m-2 pb-5">
        @csrf

        <div class="form-group">
            <label for="name">Введите имя</label>
            <input type="text" name="name" value="{{ $user->name }}" placeholder="Введите имя" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" value="{{ $user->email }}" placeholder="Введите email" id="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="phone">Телефон</label>
            <input type="number" name="phone" value="{{ $user->phone }}" placeholder="Введите номер" id="number" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Сохранить</button>
    </form>
