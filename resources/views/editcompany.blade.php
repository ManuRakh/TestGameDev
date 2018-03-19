

<?php
function success()
{
if(session()->has('data'))
{
	$value = session('data');
echo "<h4 id = 'succession'>".($value)."</h4>";
session()->forget('data');

}
}
success();
?>
<style>
#succession
{
	color:green;
}
</style>

<form action = "{{route('editcompanydo',['id'=>$id])}}" method = "POST">

{{csrf_field()}}
<input type = "text" placeholder = "New Campaign_type_ID" name = "id" >
<input type = "text" placeholder = "New Accounts_ID" name = "acid" >
<input type = "text" placeholder = "New Name" name = "name">

<input type = "submit" value = "Submit">
</form> 
<a href = "{{route('getcompany')}}"> Назад к списку кампаний</a>

@if(count($errors)>0) 
@foreach($errors->all() as $error)
{{$error}}<br/>
@endforeach
@endif
