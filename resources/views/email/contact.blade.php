@component('mail::message')

{{$message}}

@component('mail::button', ['url' => url('/thankyou')])
Thank You
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
