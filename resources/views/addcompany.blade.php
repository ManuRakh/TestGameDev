
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


<form action = "{{route('addcompanydo')}}" method = "POST">
{{csrf_field()}}<!--  защита от инъекций, токен -->

<input type = "text" placeholder = "Accounts_ID" name = "Accounts_ID"> <br/>
<input type = "text" placeholder = "Campaign_type_ID " name= "Campaign_type_ID"><br/>

<input type = "hidden" value = "{{csrf_token()}}" name="Name">
<input type = "hidden" value  = "SomeTextFromGame" placeholder = "SomeText" name= "Message_end"><br/>

<input type ="submit" value  ="submit">
</form>

<!-- Если возникнут ошибки, сработает эррор. Обычно это будут ошибки с вводом данных
Предпочтительно перевести вывод ошибок на Ajax-е, но в требованиях к прожекту не видел. -->
    @if(count($errors)>0) 
@foreach($errors->all() as $error)
{{$error}}<br/>
@endforeach
@endif