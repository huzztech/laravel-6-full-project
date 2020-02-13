@component('mail::message')
# Welcome {{$data['title']}}

The body of your message. {{$data['message']}}

@component('mail::button', ['url' => $data['link']])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
