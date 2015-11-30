@extends('layouts.header')
@section('page')
    <div class="wrapper indigo-text text-darken-3">
        <div>
            <div id="skrollr-body">
                <div id="non-skrollr">
                    <div class="container-fluid">
                        <div class="mast">
                            <h1>Synergie</h1>
                            <h4>Site en cours<br></h4>
                            <h6>based on google&trade;'s <b>material design</b>
                                specifications</h6>
                            <h4><b>work-in-progress</b></h4>
                            <a class="indigo darken-2 white-text text-darken-3 waves-effect waves-light btn"
                               href="http://github.com/victorboissiere/Synergie" target="_blank">
                                <i class="mdi-action-get-app"></i>
                                View ongithub
                            </a><br>
                            <i class="mdi-navigation-arrow-drop-down" style="font-size: 200px;"></i>
                        </div>
                    </div>
                    <div class="container-fluid card indigo z-depth-2 waves-effect waves-light">
                        <div class="cover z-depth-1" style="background-image: url('img/1.jpg');">
                            <div class="filter indigo" style="opacity: 0.7;">
                                <div class="cover-text white-text text-darken-4">
                                    <span style="font-size: 50px;">&lt;about-material /&gt;</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-content white-text">
                            <div class="card-title">
                                <h4>À propos de Synergie</h4>
                            </div>
                            Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit. Aliquam vel purus sagittis, eleifend
                            ante quis, tempus lectus. Vivamus maximus nibh lectus,
                            sed gravida sapien imperdiet in.<br>
                            <br>
                            Curabitur non purus rutrum, iaculis mauris ac, placerat
                            turpis. Donec vel semper enim, ut ultrices sem. Fusce
                            rutrum, justo id porta malesuada, purus erat gravida
                            metus, sit amet viverra turpis lacus nec mi. Aliquam et
                            mi vel ipsum mollis aliquam eu eget augue. Lorem ipsum
                            dolor sit amet, consectetur adipiscing elit.<br>
                            <br>
                            Aliquam vel purus sagittis, eleifend ante quis, tempus
                            lectus. Vivamus maximus nibh lectus, sed gravida sapien
                            imperdiet in. Curabitur non purus rutrum, iaculis
                            mauris ac, placerat turpis. Donec vel semper enim, ut
                            ultrices sem.<br>
                            <br>
                            Fusce rutrum, justo id porta malesuada, purus erat
                            gravida metus, sit amet viverra turpis lacus nec mi.
                            Aliquam et mi vel ipsum mollis aliquam eu eget augue.
                        </div>
                    </div>
                    <div class="row">
                        <h1><br>
                            -Lorem Ipsum-<br></h1>

                        <div class="container-fluid">
                            <div class="col s12 m6">
                                <ul>
                                    <li class="card advantage indigo white-text darken-1 waves-effect waves-light">
                                        <h4>sit amet</h4>Fusce rutrum, justo id porta malesuada, purus erat
                                        gravida metus, sit amet viverra turpis lacus nec mi.
                                        Aliquam et mi vel ipsum mollis aliquam eu eget augue.
                                    </li>
                                    <li class="card advantage indigo white-text waves-effect waves-light">
                                        <h4>purus erat</h4>Fusce rutrum, justo id porta malesuada, purus erat
                                        gravida metus, sit amet viverra turpis lacus nec mi.
                                        Aliquam et mi vel ipsum mollis aliquam eu eget augue.
                                    </li>
                                    <li class="card advantage indigo white-text darken-1 waves-effect waves-light">
                                        <h4>purus erat</h4>Fusce rutrum, justo id porta malesuada, purus erat
                                        gravida metus, sit amet viverra turpis lacus nec mi.
                                        Aliquam et mi vel ipsum mollis aliquam eu eget augue.
                                    </li>
                                    <li class="card advantage indigo white-text waves-effect waves-light">
                                        <h4>eusce rutrums</h4>Fusce rutrum, justo id porta malesuada, purus erat
                                        gravida metus, sit amet viverra turpis lacus nec mi.
                                        Aliquam et mi vel ipsum mollis aliquam eu eget augue.
                                    </li>
                                </ul>
                            </div>
                            <div class="col s12 m6">
                                <ul>
                                    <li class="card advantage indigo white-text waves-effect waves-light">
                                        <h4>eget augue</h4>Fusce rutrum, justo id porta malesuada, purus erat
                                        gravida metus, sit amet viverra turpis lacus nec mi.
                                        Aliquam et mi vel ipsum mollis aliquam eu eget augue.
                                    </li>
                                    <li class="card advantage indigo white-text darken-1 waves-effect waves-light">
                                        <h4>gravida metus</h4>Fusce rutrum, justo id porta malesuada, purus erat
                                        gravida metus, sit amet viverra turpis lacus nec mi.
                                        Aliquam et mi vel ipsum mollis aliquam eu eget augue.
                                    </li>
                                    <li class="card advantage indigo white-text waves-effect waves-light">
                                        <h4>viverra </h4>Fusce rutrum, justo id porta malesuada, purus erat
                                        gravida metus, sit amet viverra turpis lacus nec mi.
                                        Aliquam et mi vel ipsum mollis aliquam eu eget augue.
                                    </li>
                                    <li class="card advantage indigo white-text darken-1 waves-effect waves-light">
                                        <h4>amet viverra</h4>Fusce rutrum, justo id porta malesuada, purus erat
                                        gravida metus, sit amet viverra turpis lacus nec mi.
                                        Aliquam et mi vel ipsum mollis aliquam eu eget augue.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <h1><br>
                            Articles récents<br></h1>

                        <div class="container-fluid">
                            Derniers articles du blog
                        </div>
                    </div>
                </div>
            </div>
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
                            View Post
                        </button>
                        <button class="indigo darken-1 white-text text-darken-3 waves-effect waves-light btn">
                            Bookmark!
                        </button>
                    </div>
                </div>
            @endforeach
            <br><br><br>
            <div class="center-align">
            <button class="blue darken-1 white-text text-darken-3 waves-effect waves-light btn">
                Voir tous les articles
            </button>
            </div>
        </div>
    </div>
@endsection
            