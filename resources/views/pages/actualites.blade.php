@extends('layouts.app')

@section('content')
    <div class="page-banner" style="background-image: url({{ asset('public/uploads/'.$g_setting->banner_blog) }})">
        <div class="bg-page"></div>
        <div class="text">
            <h1>{{ $actualites->name }}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Accueil</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $actualites->name }}</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                     {!! $actualites->detail !!}
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="single-section">

                         @foreach($actualites as $row)
                            <div class="blog-item">
                                <div class="featured-photo">
                                    <a href="{{ url('actualites/'.$row->actualites_slug) }}"><img src="{{ asset('public/uploads/'.$row->actualites_img) }}"></a>
                                </div>
                                <div class="text">
                                    <h2><a href="{{ url('actualites/'.$row->actualites_slug) }}">{{ $row->actualites_title }}</a></h2>
                                    <p>
                                        {!! nl2br(e($row->actualites_content_short)) !!}
                                    </p>
                                    <div class="read-more">
                                        <a href="{{ url('actualites/'.$row->actualites_slug) }}">Lire +</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <div>
                        {{ $actualites_items->links() }}
                    </div>
                </div>
                <div class="col-md-4">
                    @include('layouts.sidebar_blog')
                </div>
            </div>
        </div>
    </div>

@endsection
