@component('mail::panel')
# Introduction

The body of your message.

@component('mail::button', ['url' => 'http://localhost/laravel55/public/login'])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

