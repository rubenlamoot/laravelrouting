@extends ('layouts.app')

@section('title')
    all posts
@endsection
@section('alleposts')
   @foreach($posts as $post)
        <ul>
            <li>{{$post}}</li>
        </ul>
    @endforeach
@endsection

