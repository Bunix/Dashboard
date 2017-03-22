@extends('layouts.app')

@section('title', 'Contact page')

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-8">
            <h2>Posts</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{route('home')}}">Home</a>
                </li>
                <li>
                    Posts
                </li>
                <li class="active">
                    <strong>List</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-4">
            <div class="title-action">
                <a href="{{route('post.create')}}" class="btn btn-primary">New </a>
            </div>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        @if(count($posts) == 0)
            <div class="middle-box text-center animated fadeInRightBig">
                <h3 class="font-bold">This is page content</h3>
                <div class="error-desc">
                    You can create here any articles.
                </div>
            </div>
        @else
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-content">
                            @foreach($posts as $post)
                                <div class="pull-right">
                                    <a class="btn btn-white btn-xs" type="button" href="{{'/post/'.$post->id.'/edit'}}">Edit</a>
                                </div>
                                <div class="search-result">
                                    <h3><a href="{{'/post/'.$post->id}}">{{$post->title}}</a></h3>
                                    <a href="#" class="search-link">{{Auth::user()->email}}</a><br>
                                    <small href="#" class="search-link">{{$post->created_at->diffForHumans()}}</small>
                                    <p>
                                        {!! $post->content !!}
                                    </p>
                                </div>
                                <div class="hr-line-dashed"></div>
                            @endforeach
                            <div class="text-center">
                                {{$posts->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection
