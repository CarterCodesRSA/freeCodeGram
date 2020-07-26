@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img class='rounded-circle' width='100%'
                src="data:image/png;base64,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"
                alt="" srcset="">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="/p/create">Add new post</a>
            </div>
            <div class="d-flex">
                <div class="px-4">
                    <strong>153</strong> posts
                </div>
                <div class="px-4">
                    <strong>153</strong> Followers
                </div>
                <div class="px-4">
                    <strong>485</strong> Subscribers
                </div>
            </div>

            <div class="pt-4 font-weight-bold">{{ $user->profile->description }}</div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div class="pt-4 font-weight-bold">
                {{ $user->profile->url ?? 'Not available' }}</div>
        </div>
    </div>
    <div class="row pt-4">

        @foreach($user->posts as $post)
            <div class="col-4">
            <img class="w-100" src="/storage/{{ $post->image }}" />
        @endforeach

    </div>
</div>
@endsection
