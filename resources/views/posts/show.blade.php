@extends('layouts.master')

@section('content')
    <div class="row">
        <h1>{{ $post->title }}</h1>
        <hr>
        <p>{{ $post->content }}</p>
        <hr>
        <h3>Comments</h3>
        <ul>
            @foreach ($post->comments as $comment)
                <li>{{ $comment->content }}</li>
            @endforeach
        </ul>

        <hr>

        <h4>Add a Comment</h4>
        <form action="{{ route('comments.store') }}" method="post">
            @csrf
            <input type="hidden" name="post_id" value="{{ $post->id }}">
            <div class="form-group">
                <textarea name="content" class="form-control" placeholder="Enter your comment"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script>
        axios.get('/posts/{{ $post->id }}')
            .then(response => {
                const post = response.data;
                console.log(post);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
