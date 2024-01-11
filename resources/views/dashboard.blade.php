@extends('layout.layout')

@section('content')
    <div class="row">
        <div class="col-3">
            @include('shared.left-sidebar')

        </div>
        <div class="col-6">
            @include('shared.success')
            @include('shared.submit-idea')
            <hr>

            @if (count($ideas) > 0)
                @foreach ($ideas as $idea)
                    <div class="mt-3">
                        @include('shared.idea-card')
                    </div>
                @endforeach
            @else
                No Result Found
            @endif

            <div class="mt-3">

                {{ $ideas->withQueryString()->links() }}
            </div>
        </div>
        <div class="col-3">

            @include('shared.search-bar')
            @include('shared.follow-box')
        </div>
    </div>
@endsection
