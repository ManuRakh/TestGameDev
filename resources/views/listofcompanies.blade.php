

<!-- Форич. Выведет все кампании , думаю все понятно. -->

@foreach($campaigns as $campaign)

Campaign_type_ID {{$campaign->Campaign_type_ID}} <br/>
Name  {{$campaign->Name}} <br/>

Accounts_ID {{$campaign->Accounts_ID}} <br/>
@endforeach