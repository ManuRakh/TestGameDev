
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


<form action = "{{route('addmemberdo')}}" method = "POST">
{{csrf_field()}}<!--  защита от инъекций, токен -->

<input type = "text" placeholder = "Member's name" name = "name"> <br/>
<input type = "text" placeholder = "Email" name= "email"><br/>
<input type = "text" placeholder = "Phone number" name = "Phone"><br/>
<input type = "password" placeholder = "Password" name= "password"><br/>
<input type = "password" placeholder = "Confirm Passord" name= "confirmpassword"><br/>

<input type = "hidden" value = "{{csrf_token()}}" name="Uid">
<input type ="submit" value  ="submit">
</form>

<!-- Если возникнут ошибки, сработает эррор. Обычно это будут ошибки с вводом данных
Предпочтительно перевести вывод ошибок на Ajax-е, но в требованиях к прожекту не видел. -->
    @if(count($errors)>0) 
@foreach($errors->all() as $error)
{{$error}}<br/>
@endforeach
@endif