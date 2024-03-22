@extends('shared.layout')

@section('content')
    <div class="row">
        <div class="col-3">
            @include('shared.left-sidebar')
        </div>
        <div class="col-6">
            @include('shared.message.success-message')
            @include('shared.form.submit-idea')
            <hr>
            @foreach ($ideas as $idea)
                <div class="mt-3">
                    @include('shared.card.idea-card')
                </div>
            @endforeach
            <div class="mt-3">
                {{ $ideas->links() }}
            </div>
        </div>
        <div class="col-3">
            @include('shared.searchbar')
            <div class="card mt-3">
                @include('shared.follow-box')
            </div>
        </div>
    </div>
@endsection
