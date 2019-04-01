@component('mail::message')
# Introduction
There is a message from{{$name}}
<br/>
{{$message}}

@component('mail::button', ['url' => 'https://www.facebook.com/marlontamo'])
visit me on facabook
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
