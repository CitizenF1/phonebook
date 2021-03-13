@extends('layouts')

@section('content')

    <form action="/submit" method="post" class="m-2 pb-5">
        @csrf

        <div class="form-group">
            <label for="name">Введите имя</label>
            <input type="text" name="name" placeholder="Введите имя" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" placeholder="Введите email" id="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="phone">Телефон</label>
            <input type="number" name="phone" placeholder="Введите номер" id="number" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Сохранить</button>
    </form>

    <div class="table-responsive">
        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Имя</th>
                <th scope="col">Email</th>
                <th scope="col">Телефон</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>

            @foreach($users as $user)
            <tr>
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->phone }}</td>
                <td scope="coll"><a href="{{ route('update', $user->id) }}"><button class="btn">Изменить</button></a></td>
                <td scope="coll"><a href="{{ route('delete', $user->id) }}"><button class="btn">Удалить</button></a></td>
            </tr>

            @endforeach

            </tbody>
        </table>

    </div><!-- ./table-responsive-->

    {{--@else
        <p>Записей не найдено...</p>
    @endif--}}
@endsection
