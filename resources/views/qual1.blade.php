@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h2>ІІ Этап. Проверка квалификации</h2></div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('upload') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="container" >
                                <div class="row">
                                    <div class="col-md-4 border border-success rounded-left text-center" style="padding-top: 5px; background: #1e7e34">
                                        <h5><a style="color: white" href="/qual1">Первая квалификационная категория</a></h5>
                                    </div>
                                    <div class="col-md-4 border border-primary text-center" style="padding-top: 5px; background: #007bff">
                                        <h5><a style="color: white" href="/qual2">Вторая <br>квалификационная категория</a></h5>
                                    </div>
                                    <div class="col-md-4 border border-primary rounded-right text-center" style="padding-top: 5px; background: #007bff ">
                                        <h5><a style="color: white" href="/qual3">Высшая квалификационная категория</a></h5>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-bordered" >
                                <col width="50%">
                                <col width="50%">
                                <tr style="font-size:16px; text-align: center; ">
                                    <th>Показатели</th>
                                    <th>Данные</th>
                                </tr>
                                <tr >
                                <td>Лица имеющие академическую степень магистра (диплом)</td>
                                <td><div class="form-group row">
                                        <label for="certfile1" class="col-sm-12 col-form-label text-md-center">{{ __('Потверждающие документы:') }}</label>

                                        <div class="col-md-12">
                                            <input id="certfile1" type="file" class="form-control{{ $errors->has('certfile') ? ' is-invalid' : '' }}" name="certfile1" required
                                            >

                                            @if ($errors->has('certfile'))
                                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('certfile') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                </td>

                            </tr>
                            <tr >
                                <td>Лица являющиеся победителями профессиональных конкурсов</td>
                                <td>

                                        <div class="form-group row">
                                            <label for="certfile2" class="col-sm-12 col-form-label text-md-center">{{ __('Потверждающие документы:') }}</label>

                                            <div class="col-md-12">
                                                <input id="certfile2" type="file" class="form-control{{ $errors->has('certfile') ? ' is-invalid' : '' }}" name="certfile2" required   >

                                                @if ($errors->has('certfile'))
                                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('certfile') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                </td>
                            </tr>
                            <tr >
                                <td>Лица, имеющие вторую квалификационную категорию</td>
                                <td><div class="form-group row">
                                        <label for="certfile3" class="col-sm-12 col-form-label text-md-center">{{ __('Потверждающие документы:') }}</label>

                                        <div class="col-md-12">
                                            <input  id="certfile3" type="file" class="form-control{{ $errors->has('certfile') ? ' is-invalid' : '' }}" name="certfile3" required  >

                                            @if ($errors->has('certfile'))
                                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('certfile') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div></td>
                            </tr>
                            <tr >
                                <td>Лица являющиеся победителями педагогических олимпиад областного уровня</td>
                                <td><div class="form-group row">
                                        <label for="certfile4" class="col-sm-12 col-form-label text-md-center">{{ __('Потверждающие документы:') }}</label>

                                        <div class="col-md-12">
                                            <input  id="certfile4" type="file" class="form-control{{ $errors->has('certfile') ? ' is-invalid' : '' }}" name="certfile4" required  >

                                            @if ($errors->has('certfile'))
                                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('certfile') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div></td>
                            </tr>
                        </table>
                        <div class="form-group row mb-0">

                            <div class="col-md-6 offset-md-4">
                                <button style="font-size:16px" type="submit" class="btn btn-primary">
                                    {{ __('Загрузить и к личному кабинету') }}
                                </button>

                            </div>
                        </div>
                        </form>


                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
