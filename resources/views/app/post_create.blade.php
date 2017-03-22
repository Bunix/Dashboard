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
                    <a href="{{route('post.index')}}">List</a>
                </li>
                <li class="active">
                    <strong>{{ucfirst(substr(Route::currentRouteName(),5))}}</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-4">
            <div class="title-action">
                <a href="#" onclick="submitForm();" class="btn btn-primary">Save </a>
            </div>
        </div>
    </div>
    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-lg-12">
                <form id="post_edit" name="post_edit" role="form" method="post" action="/post/@yield('editId')">
                    {{ csrf_field() }}
                    @section('editMethod')
                    @show
                    <div class="form-group"><label>Title</label> <input type="text" placeholder="Title" class="form-control" name="title" value="@yield('editTitle')"></div>
                    <div class="form-group"><label>Tags</label> <input type="text" placeholder="Tags" class="form-control" name="tag" value="@yield('editTag')"></div>
                    <div class="form-group">
                        <div class="ibox-content no-padding">
                            <div class="summernote">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text"  name="text" id="article" hidden>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        $('.summernote').summernote({
            height: 190,
            codemirror: {
                theme: 'monokai'
            },
            dialogsInBody: true
        });
        function submitForm(){
            $('#article').val($('.summernote').summernote('code'));
            $('#post_edit').submit();
        }
    </script>
@endsection