@extends('layouts.app')

@section('content')
<div class="container card">
    <div class="row">
        <div class="col-8 text-center">
            <img src="/storage/{{ $post->image }}" class="pl-5 img-fluid w-75">
        </div>
        <div class="col-4">
            <div>
                <div class="d-flex align-items-center">
                    <div>
                        <img src="{{ $post->user->profile->profileImage() }}" class="rounded-circle w-100" style="max-width: 40px">
                    </div>
                    <div>
                        <div class="pl-2 font-weight-bold">
                            <a class="text-dark" href="/profile/{{ $post->user->id }}">{{ $post->user->username }}</a>
                            <img src="/images/svg/dot.svg" class="pl-1" style="max-height: 9px; max-width: 9px">
                            <a href="#" class="pl-1">Підписатись</a>
                        </div>
                    </div>
                </div>

                <hr>

                <p>

                <span class="pr-2 font-weight-bold">
                    <a class="text-dark" href="/profile/{{ $post->user->id }}">{{ $post->user->username }}</a>
                </span>

                {{ $post->caption }}
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
