@component('mail::message')
# Hey Administrateur

- {{$msg->name}}
- {{$msg->email}}

@component('mail::panel')
{{$msg->msg_content}}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
