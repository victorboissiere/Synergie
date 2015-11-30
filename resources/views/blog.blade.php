@extends('layouts.header')
@section('page')
    <br><br><br>
    @foreach($posts as $post)
        <div class="container-fluid card indigo z-depth-2">
            <div class="cover z-depth-1" style="background-image: url('img/0.jpg');">
                <div class="filter indigo">
                    <div class="cover-text white-text text-darken-2">
                        {{ $post->title }}
                    </div>
                </div>
            </div>
            <div class="card-content white-text">
                <!--
                        <div class="card-title">
                            {{ $post->content }}
                        </div>
                        !-->
                {!! $post->content !!}
            </div>
            <div class="card-action indigo darken-2">
                <button class="indigo darken-1 white-text text-darken-3 waves-effect waves-light btn">
                    Lire plus
                </button>
                <button class="indigo darken-1 white-text text-darken-3 waves-effect waves-light btn">
                    Bookmark!
                </button>
            </div>
        </div>
    @endforeach
    {!! $posts->render() !!}
    <br><br>
@endsection