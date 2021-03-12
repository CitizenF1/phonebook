@extends('layouts')

@section('content')

    <form action="/submit" method="post">
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
            <input type="text" name="name" placeholder="Введите номер" id="name" class="form-control">
        </div>

        <button type="submit" name="btn btn-success">Сохранить</button>
    </form>


    <div class="table-responsive">
        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Имя</th>
                <th scope="col">Email</th>
                <th scope="col">Телефон</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>John Doe</td>
                <td>john@mail.com</td>
                <td>555 555-55-55</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>John Doe</td>
                <td>john@mail.com</td>
                <td>555 555-55-55</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>John Doe</td>
                <td>john@mail.com</td>
                <td>555 555-55-55</td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>John Doe</td>
                <td>john@mail.com</td>
                <td>555 555-55-55</td>
            </tr>
            <tr>
                <th scope="row">5</th>
                <td>John Doe</td>
                <td>john@mail.com</td>
                <td>555 555-55-55</td>
            </tr>
            <tr>
                <th scope="row">6</th>
                <td>John Doe</td>
                <td>john@mail.com</td>
                <td>555 555-55-55</td>
            </tr>
            <tr>
                <th scope="row">7</th>
                <td>John Doe</td>
                <td>john@mail.com</td>
                <td>555 555-55-55</td>
            </tr>
            <tr>
                <th scope="row">8</th>
                <td>John Doe</td>
                <td>john@mail.com</td>
                <td>555 555-55-55</td>
            </tr>
            <tr>
                <th scope="row">9</th>
                <td>John Doe</td>
                <td>john@mail.com</td>
                <td>555 555-55-55</td>
            </tr>
            <tr>
                <th scope="row">10</th>
                <td>John Doe</td>
                <td>john@mail.com</td>
                <td>555 555-55-55</td>
            </tr>
            </tbody>
        </table>

    </div><!-- ./table-responsive-->
@endsection
