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
        <table class="table table-hover table-primary">
            <thead>
            <tr>
                <th scope="col">id</th>
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
                <td>
                    <a href="{{ route('update', $user) }}"><button type="submit" class="btn">Изменить</button></a>
                </td>
                <td>
                    <form method="POST" action="{{ route('delete', $user) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn">Удалить</button>
                    </form>
                </td>

            </tr>

            @endforeach

            </tbody>
        </table>

    </div><!-- ./table-responsive-->

    {{--@else
        <p>Записей не найдено...</p>
    @endif--}}
@endsection


<!--                <td scope="coll"><a href="{{--{{ route('update', $user) }}--}}"><button type="submit" class="btn">Изменить</button></a></td>
                <td scope="coll"><a href="{{--{{ route('delete', $user) }}--}}"><button type="submit" class="btn">Удалить</button></a></td>-->
