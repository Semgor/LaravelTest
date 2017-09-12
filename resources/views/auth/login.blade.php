@extends('app')

@section('content')

 <div class="span4"></div>
    <div class="span3">
@if (count($errors) > 0)
						<div class="alert alert-error">
							
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
     
        <form action="{{ url('/auth/login') }}" method="post" class="form-horizontal">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="control-group">
                <b>Авторизация</b>
            </div>
            <div class="control-group">
                <input type="text" id="inputLogin" name="name" value="{{ old('name') }}" placeholder="Логин" data-cip-id="inputLogin"
                       autocomplete="off">
            </div>
            <div class="control-group">
                <input type="password" id="inputPassword" name="password" placeholder="Пароль"
                       data-cip-id="inputPassword">
            </div>
            <div class="control-group">
                <label class="checkbox">
                    <input type="checkbox" name="remember" value="1"> Запомнить меня
                </label>
                <button type="submit" class="btn btn-primary">Вход</button>
            </div>
        </form>
    </div>
@endsection
