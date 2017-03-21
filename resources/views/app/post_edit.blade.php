@extends('layouts.app')

@section('title', 'Contact page')

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center m-t-lg">
                    <form method="post" action="{{route('post.store')}}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="InputSubject">Subject</label>
                            <input type="text" class="form-control" id="subject" placeholder="Subject" name="subject">
                        </div>
                        <div class="form-group">
                            <label for="InputTag">Tag</label>
                            <input type="text" class="form-control" id="tag" placeholder="Tag" name="tag">
                        </div>
                        <div class="form-group">
                            <label for="exampleTextarea">Example textarea</label>
                            <textarea class="form-control" id="exampleTextarea" rows="3" name="text"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
