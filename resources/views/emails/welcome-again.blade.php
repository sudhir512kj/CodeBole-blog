@component('mail::message')
# Introduction

Thank You so much for registering.


@component('mail::button', ['url' => 'https:://laracasts.com'])
Start Browsing
@endcomponent

@component('mail::panel', ['url' => ''])
Inspirational Quote
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
