@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h2>Личный кабинет</h2></div>

                    <div class="card-body text-center" style="margin: 0 auto" >
                        <h1>Добро пожаловать!</h1>
                        <h1> {{ $user->name }}</h1>
                        <br><br><h2>Резултат теста: <strong>{{ $user->ball ? $user->ball : '0'  }} </strong> <br><br></h2>
                     </div>

                    <div class="card-body" style="margin: 0px auto">
                        <a href="/test" class="btn btn-success">Пройти тестирование</a>
                        <a href="/qual1" class="btn btn-outline-primary">Повысить квалификацию</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
