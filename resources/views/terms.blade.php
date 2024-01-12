@extends('layout.layout')

@section('content')
    <div class="row">
        <div class="col-3">
            @include('shared.left-sidebar')

        </div>
        <div class="col-6">

            <h1>Terms</h1>
            <div>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum sed illo itaque! Iste dignissimos numquam
                pariatur ducimus quo nobis impedit!
            </div>
        </div>
        <div class="col-3">

            @include('shared.search-bar')
            @include('shared.follow-box')
        </div>
    </div>
@endsection
