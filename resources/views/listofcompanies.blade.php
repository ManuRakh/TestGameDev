

<!-- Форич. Выведет все кампании , думаю все понятно. -->

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

@foreach($campaigns as $campaign)
Campaign_type_ID {{$campaign->Campaign_type_ID}} <br/>
Name  {{$campaign->Name}} <br/>

Accounts_ID {{$campaign->Accounts_ID}} <br/>

<a href = "{{route('editcompany',['id'=>$campaign->id])}}">Edit This campaign</a><br/>

<a href = "{{route('removecompanydo',['id'=>$campaign->id])}}">Remove campaign</a>
@endforeach