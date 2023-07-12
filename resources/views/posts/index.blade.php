@extends('layouts.master')

@section('content')
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text">{{ $post->content }}</p>
                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script>
        axios.get('/posts')
            .then(response => {
                const posts = response.data;
                console.log(posts);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
