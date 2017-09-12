@extends('app')

@section('content')
<!--<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
					You are logged in!
				</div>
			</div>
		</div>
	</div>
</div>-->
 <div class="span2"></div>
    <div class="span8">
@if (!Auth::guest())
        <form method="post" class="form-horizontal" action="{{ url('/home') }}"style="margin-bottom: 50px;">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
@if (count($errors) > 0)
            <div class="alert alert-error">
                Сообщение не может быть пустым
            </div>
@endif
            <div class="control-group">
                <textarea style="width: 100%; height: 50px;" type="password" id="inputText" placeholder="Ваше сообщение..." name="message"
                       data-cip-id="inputText"></textarea>
            </div>
            <div class="control-group">
                <button type="submit" class="btn btn-primary">Отправить сообщение</button>
            </div>
        </form>
@endif

@foreach ($messages as $message)
<div class="well">
            <h5>{{$message->user->name}}:</h5>
            {{$message->message}}
        </div>
@endforeach
        

        
    </div>
@endsection
