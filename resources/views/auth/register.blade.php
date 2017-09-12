@extends('app')

@section('content')

<div class="span4"></div>
    <div class="span8">
        <form  class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="control-group">
                <b>Регистрация</b>
            </div>
            <div class="control-group @if ($errors->first('name')) error @endif">
                <input type="text" id="inputLogin" name="name" value="{{ old('name') }}" placeholder="Логин" data-cip-id="inputLogin"
                       autocomplete="off">
                @if ($errors->first('name'))
                    <span class="help-inline">{{$errors->first('name')}}</span>
                    @endif
            </div>
            <div class="control-group @if ($errors->first('password')) error @endif">
                <input type="password" id="inputPassword" name="password" placeholder="Пароль"
                       data-cip-id="inputPassword">
                @if ($errors->first('password'))
                    <span class="help-inline">{{$errors->first('password')}}</span>
                    @endif
            </div>
            <div class="control-group">
                <input type="password" id="inputPassword2" name="password_confirmation" placeholder="Повторите пароль"
                       data-cip-id="inputPassword2">
               
            </div>
            <div class="control-group">
                <button type="submit" class="btn btn-primary">Отправить</button>
            </div>
        </form>
    </div>
@endsection
