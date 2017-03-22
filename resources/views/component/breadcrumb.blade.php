<?php
    $test = explode(".",Route::currentRouteName());
?>
<div class="pull-right">
    <button class="btn btn-white btn-xs" type="button">Edit</button>
</div>
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-8">
        <h2>{{$title}}</h2>
        <ol class="breadcrumb">
            <li>
                <a href="{{route('home')}}">Home</a>
            </li>
        @foreach($test as $t)
            @if(current($test) == end($test))
                <li class="active">
                    <strong>{{end($test)}}</strong>
                </li>
            @else
                <li>
                    <a href="{{url($t)}}">{{$t}}</a>
                </li>
            @endif

        @endforeach

        </ol>
    </div>
    <div class="col-lg-4">
        <div class="title-action">
            <a href="#" class="btn btn-white"><i class="fa fa-pencil"></i> Edit </a>
            <a href="#" class="btn btn-white"><i class="fa fa-check "></i> Save </a>
            <a href="invoice_print.html" target="_blank" class="btn btn-primary"><i class="fa fa-print"></i> Print Invoice </a>
        </div>
    </div>
</div>