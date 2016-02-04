@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default" style="margin-top:150px;">
				<!--<div class="panel-heading">
						Inbox

				</div>-->
					<!--head-->
				
				
					<table class="table table-hover">

					<!--body-->
						@foreach ($email as $email)
 						<tr>
 						<td>{{$email->id_send}}</td>
 						<td>{{$email->id_receive}}</td>

 					    <td>{{$email->subject}}</td>
								
 						<td>{{$email->detail}}</td>
								
 						</tr>
 						@endforeach
 						
					</table>
				</div>

				<form action = "{{ url('send') }}"  method="GET">
					<input type="submit" value="Create New Email">
				</form>
			
		</div>
	</div>
</div>
@endsection
