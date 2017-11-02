@extends('layouts.default')

@section('mainBody')
<div id="section-mainbody" class="page-activity-index">
    @include('activity._carousel', ['elementId' => 'section-carousel-top'])

    <div class="container pt-4 pb-5">
        @include('activity._carousel', ['elementId' => 'section-carousel'])

        <div class="row">
            @foreach ($activities as $item)
                <div class="col-sm-3">
                    <div class="card card-activity">
                        <img class="card-img-top" src="{{ $item->avatar }}" alt="{{ $item->title }}">
                        <div class="card-body">
                            <h4 class="card-title">{{ $item->title }}</h4>
                            <p class="card-text">{{ $item->intro }}</p>
                            <a href="#" class="btn btn-primary">立即报名</a>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="col-sm-12">
                <nav>
                    {{ $activities->links() }}
                </nav>
            </div>
        </div>
    </div>
</div>
@stop
