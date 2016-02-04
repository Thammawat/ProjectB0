@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">

				<h2>Send  Email</h2>
				</br>
				<form action = "{{ url('store') }}"  method="POST">

					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<input type="text" name="sendto" class="form-control" placeholder="SendTo">
					</br>
					</br>
					<input type="text" name="subject" class="form-control" placeholder="Subject">
					</br>
					</br>
					<input type="text" name="detail" class="form-control" placeholder="M E S S A G E........">
					</br>
					</br>
					
					</br><input type="submit" value="send"></br>

				</form>

				<form action = "{{ url('home') }}"  method="GET">
					</br><input type="submit" value="back"></br>
				</form>

		</div>
	</div>
</div>

@endsection