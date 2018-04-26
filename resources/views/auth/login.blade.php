@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center ">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Авторизация') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="iin" class="col-sm-4 col-form-label text-md-right">{{ __('ИИН') }}</label>

                            <div class="col-md-6">
                                <input id="iin" type="number" class="form-control{{ $errors->has('iin') ? ' is-invalid' : '' }}" name="iin" value="{{ old('iin') }}" required autofocus>

                                @if ($errors->has('iin'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('iin') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Пароль') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Запомнить меня') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group row mb-0" >
                            <div class="col-md-6 offset-md-4" style="margin-bottom: 10px; margin-top: -10px">
                                <button type="submit" class="btn btn-primary ">
                                    {{ __('Войти') }}
                                </button>
                            </div>
                        </div>

                        

                    </form>
                    <div class="blockquote-footer text-justify border-top" style="font-size: 12px">
                        В соответствии с Правилами и условиями проведения и условий аттестации педагогических работников и приравненных к ним лиц, занимающих должности в организациях образования, реализующих образовательные учебные программы дошкольного, начального, основного среднего, общего среднего, технического и профессионального, послесреднего образования, утвержденных приказом Министерства образования и науки Республики Казахстан (далее – МОН РК) №83 от 27 января 2016 года, педагогические работники, претендующие на досрочную аттестацию, проходит квалификационное тестирование.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
