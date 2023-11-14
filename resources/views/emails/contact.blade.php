<x-mail::message>
# The contact message from {{$name}} 

<h3>Message</h3>
{{$contact}}

<x-mail::button :url="'/'">
Visit Our website
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
