@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3 p-5">
                <img
                    src="https://instagram.famd6-1.fna.fbcdn.net/vp/0350e1a3efa90dd052f851881c9183d0/5E388447/t51.2885-19/s150x150/69687044_444675242923321_6650820311702831104_n.jpg?_nc_ht=instagram.famd6-1.fna.fbcdn.net"
                    alt="" class="rounded-circle">
            </div>
            <div class="col-9 pt-5">
                <div class="d-flex justify-content-between align-items-baseline">
                    <h1>{{ $user->username }}</h1>
                    <a href="/p/create">Add new post</a>
                </div>
                <div class="d-flex">
                    <div class="pr-4"><strong>{{ $user->posts->count() }}</strong> posts</div>
                    <div class="pr-4"><strong>366</strong> followers</div>
                    <div class="pr-4"><strong>170</strong> following</div>
                </div>
                <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
                <div>{{ $user->profile->description }}</div>
                <div><a href="#">{{ $user->profile->url }}</a></div>
            </div>
        </div>

        <div class="row pt-5">
            @foreach($user->posts as $post)
                <div class="col-4 pb-4">
                    <a href="/p/{{ $post->id }}">
                        <img src="/storage/{{ $post->image  }}" class="w-100" alt="{{ $post->caption }}">
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
