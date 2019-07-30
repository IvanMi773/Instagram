@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Підтвердьте свою адресу електронної пошти') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('На вашу електронну адресу надіслано свіже посилання для підтвердження.') }}
                        </div>
                    @endif

                    {{ __('Перш ніж продовжувати, перегляньте свій електронний лист на наявність підтвердження.') }}
                    {{ __('Якщо ви не отримали електронний лист') }}, <a href="{{ route('verification.resend') }}">{{ __('натисніть тут, щоб подати запит на інший') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
