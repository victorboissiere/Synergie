@extends('layouts.header')
@section('page')
<div class="wrapper cyan-text text-darken-3">
    <div>
        <div id="skrollr-body">
            <div id="non-skrollr">
                <div class="container-fluid">
                    <div class="mast">
                        <h1>For Synergie</h1>
                        <h4>Site en cours<br></h4>
                        <h6>based on google&trade;'s <b>material design</b>
                        specifications</h6>
                        <h4><b>work-in-progress</b></h4><a class=
                        "cyan darken-2 white-text text-darken-3 waves-effect waves-light btn"
                        href="http://github.com/naveenshaji/material" target=
                        "_blank"><i class="mdi-action-get-app"></i> View on
                        github</a><br>
                        <i class="mdi-navigation-arrow-drop-down" style=
                        "font-size: 200px;"></i>
                    </div>
                </div>
                <div class=
                "container-fluid card cyan z-depth-2 waves-effect waves-light">
                    <div class="cover z-depth-1" style=
                    "background-image: url('img/1.jpg');">
                        <div class="filter cyan" style="opacity: 0.7;">
                            <div class="cover-text cyan-text text-darken-4">
                                <span style="font-size: 50px;">&lt;
                                about-material /&gt;</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-content white-text">
                        <div class="card-title">
                            <h4>about-material</h4>
                        </div>Lorem ipsum dolor sit amet, consectetur
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
                    -advantages-<br></h1>
                    <div class="container-fluid">
                        <div class="col s12 m6">
                            <ul>
                                <li class=
                                "card advantage cyan white-text darken-1 waves-effect waves-light">
                                <h4>completely-free</h4>Material is completely
                                free for whatever use you may ever want to use
                                it for under the terms of the MIT Licence.
                                </li>
                                <li class=
                                "card advantage cyan white-text waves-effect waves-light">
                                <h4>fully-open-source</h4>Material's source
                                code is fully open source and is hosted at
                                GitHub
                                (https://github.com/naveenshaji/material/). It
                                is released under the terms of the MIT Licence.
                                </li>
                                <li class=
                                "card advantage cyan white-text darken-1 waves-effect waves-light">
                                <h4>material-design</h4>Material is based on
                                google's material design specifications. duh!
                                All you need to know is that it look solid and
                                feels solid.
                                </li>
                                <li class=
                                "card advantage cyan white-text waves-effect waves-light">
                                <h4>ease-of-access</h4>Your blog or website
                                will be hosted on a GitHub repository and
                                therefore, you will be able to just 'commit'
                                new blog posts. Plus you get all the benefits
                                of GitHub if you are making a collaborated
                                blog.
                                </li>
                            </ul>
                        </div>
                        <div class="col s12 m6">
                            <ul>
                                <li class=
                                "card advantage cyan white-text waves-effect waves-light">
                                <h4>hosted-on-github</h4>Your website/blog can
                                be hosted for free on GitHub, which means you
                                get to take advantage of GitHub's servers which
                                have proven themselves to provide almost 100%
                                uptime.
                                </li>
                                <li class=
                                "card advantage cyan white-text darken-1 waves-effect waves-light">
                                <h4>feel-like-hax0r</h4>Commiting new blogposts
                                written in markdown is sure to give you the
                                feels. Having your blog hosted alongside code
                                will make you feel like a mini-hax0r even if
                                you are not one.
                                </li>
                                <li class=
                                "card advantage cyan white-text waves-effect waves-light">
                                <h4>write-in-markdown</h4>WSIWYG editors are
                                for losers. Markdown ftw!!
                                </li>
                                <li class=
                                "card advantage cyan white-text darken-1 waves-effect waves-light">
                                <h4>mit-licence</h4>Material is released under
                                the terms of the MIT Licence which give you a
                                lot of freedom regarding editing the code
                                involved.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <h1><br>
                    -get-started-<br></h1>
                    <div class="container-fluid">
                        There are 7 simple steps to get your website up and
                        running using material. Keep scrolling to see em'. The
                        steps mentioned here have been explained in order to
                        cater to n00bs. If you think you are pro, then scroll
                        faster. xP
                    </div>
                </div>
            </div>
        </div>
        <div class=
        "container-fluid card cyan z-depth-2 waves-effect waves-light">
            <div class="cover z-depth-1" style=
            "background-image: url('img/1.jpg');">
                <div class="filter cyan">
                    <div class="cover-text cyan-text text-darken-4">
                        Four
                    </div>
                </div>
            </div>
            <div class="card-content white-text">
                <div class="card-title">
                    Step - 4 - Change to master branch
                </div>Go to the newly-forked repository's settings and change
                the <b>default branch</b> to <b>master</b> from the drop-down
                menu. All your changes from now on must be done in the
                <b>master</b> branch. You may optionally delete the gh-pages
                branch to avoid accidentally pushing your changes to that
                branch, in which case you won't see the changes. Click button
                below for detailed instructions on how to acheive this.
            </div>
            <div class="card-action cyan darken-2">
                <button class=
                "cyan darken-1 white-text text-darken-3 waves-effect waves-light btn">
                View Post</button> <button class=
                "cyan darken-1 white-text text-darken-3 waves-effect waves-light btn">
                Bookmark!</button>
            </div>
        </div>
        <div class=
        "container-fluid card cyan z-depth-2 waves-effect waves-light">
            <div class="cover z-depth-1" style=
            "background-image: url('/material//img/0.jpg');">
                <div class="filter cyan">
                    <div class="cover-text cyan-text text-darken-4">
                        Four
                    </div>
                </div>
            </div>
            <div class="card-content white-text">
                <div class="card-title">
                    Step - 4 - Change to master branch
                </div>Go to the newly-forked repository's settings and change
                the <b>default branch</b> to <b>master</b> from the drop-down
                menu. All your changes from now on must be done in the
                <b>master</b> branch. You may optionally delete the gh-pages
                branch to avoid accidentally pushing your changes to that
                branch, in which case you won't see the changes. Click button
                below for detailed instructions on how to acheive this.
            </div>
            <div class="card-action cyan darken-2">
                <button class=
                "cyan darken-1 white-text text-darken-3 waves-effect waves-light btn">
                View Post</button> <button class=
                "cyan darken-1 white-text text-darken-3 waves-effect waves-light btn">
                Bookmark!</button>
            </div>
        </div>
    </div>
</div>
@endsection
            