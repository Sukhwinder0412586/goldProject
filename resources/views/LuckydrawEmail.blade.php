@component('mail::message')
# Congratulations

You have won {{ $data->amount }} of this {{ $data->coupon }}.

Thanks,<br>
{{ config('app.name') }}
@endcomponent
