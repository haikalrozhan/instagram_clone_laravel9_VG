@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center py-4">
            <div class="col-md-3">
                <img src="/img/cat.jpg" alt="" class="rounded-circle p-1" style="width: 200px; height:200px;">
            </div>
            <div class="col-md-9">
                <div class="d-flex justify-content-between">
                    <h2>{{ $user->username }}</h2>
                    <a href="{{ route('post.create') }}" class="text-decoration-none">Create New Post</a>
                </div>
                <div class="d-flex">
                    <div class="pe-3"><strong>12k</strong> posts</div>
                    <div class="pe-3"><strong>12k</strong> followers</div>
                    <div class="pe-3"><strong>12k</strong> following</div>


                </div>
                <div class="pt-5">
                    <strong>{{ $user->profile->caption ?? 'N/A' }}</strong>
                    <p>{{ $user->profile->description ?? 'N/A' }}</p>
                    <a href="www.instagram.com" class="text-decoration-none">{{ $user->profile->url ?? 'N/A' }}</a>
                </div>
            </div>
        </div>

        <div class="row pt-5">
            <div class="col-md-4">
                <img src="/img/cat2.jpg" style="width:350px; height:300px;">
            </div>
            <div class="col-md-4">
                <img src="/img/cat2.jpg" style="width:350px; height:300px;">
            </div>
            <div class="col-md-4">
                <img src="/img/cat2.jpg" style="width:350px; height:300px;">
            </div>
        </div>

    </div>
@endsection
