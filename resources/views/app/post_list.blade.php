@extends('layouts.app')

@section('title', 'Contact page')

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center m-t-lg">
                    <h1>
                        Simple example of post list view
                    </h1>
                    <small>Writen in post_list.blade.php file.</small>
                    <br>
                    @foreach($posts as $post)
                        <li>{{$post->subject}}</li>
                    @endforeach
                    <a href="{{route('post.create')}}">Create new</a>
                </div>
            </div>
        </div>
    </div>
@endsection
