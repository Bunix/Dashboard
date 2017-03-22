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
                    <a href="{{route('post.index')}}">Posts</a>
                </li>
                <li class="active">
                    <strong>Show</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-4">
            <div class="title-action">
                <a href="{{route('post.create')}}" class="btn btn-primary">New </a>
            </div>
        </div>
    </div>
    <div class="wrapper wrapper-content  animated fadeInRight article">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
                <div class="ibox">
                    <div class="ibox-content">
                        <div class="pull-right">
                            <button class="btn btn-white btn-xs" type="button">Model</button>
                            <button class="btn btn-white btn-xs" type="button">Publishing</button>
                            <button class="btn btn-white btn-xs" type="button">Modern</button>
                        </div>
                        <div class="text-center article-title">
                            <span class="text-muted"><i class="fa fa-clock-o"></i> {{$post->created_at}}</span>
                            <h1>
                                {{$post->title}}
                            </h1>
                        </div>
                        <p>
                            {!! $post->text !!}
                        </p>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <h5>Author:</h5>
                                <span>{{$post->user->email}}</span>
                            </div>
                            <div class="col-md-6">
                                <div class="small text-right">
                                    <h5>Stats:</h5>
                                    <div> <i class="fa fa-comments-o"> </i> 0 comments </div>
                                    <i class="fa fa-eye"> </i> 0 views
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
