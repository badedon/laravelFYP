@extends('frontend.layout.master')
@section('frontContent')

    <!-- Main Content-->
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <!-- Post preview-->
                <div class="post-preview">
                    <a href="post.html">
                        <img src="front/img/post-bg.jpg" alt="Background Image" height="300px" width="400">
                        <h2 class="post-title">Election</h2>
                        <h3 class="post-subtitle">This process of election affords a moral certainty that the office of President will seldom fall to the lot of any man who is not in an eminent degree endowed with the requisite qualifications.”</h3>
                    </a>
                    <p class="post-meta">
                        Posted by
                        <a href="#!">Alexander Hamilton, American Politician and Founding Father of the U.S.</a>

                    </p>
                </div>
                <!-- Divider-->
                <hr class="my-4" />
                <!-- Post preview-->
                <div class="post-preview">

                    <a href="post.html"><h2 class="post-title">Actress and Political Activist</h2></a>
                    <h3 class="post-subtitle">“I am most concerned about the wealthy owning our democracy. [It] feels as if very real efforts to disable our democracy are underway. Between the way our rights as voters are being attacked, the way elections themselves are being gerrymandered… I really think that if we don’t show up in this moment, we will [have] missed potentially our last opportunity to really check this administration.”</h3>
                    <p class="post-meta">
                        Posted by
                        <a href="#!">Start Bootstrap</a>
                        on September 18, 2021
                    </p>
                </div>
                <!-- Divider-->
                <hr class="my-4" />
                <!-- Post preview-->
                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title">Science has not yet mastered prophecy</h2>
                        <p class="post-subtitle">We predict too much for the next year and yet far too little for the next ten.</p>
                    </a>
                    <p class="post-meta">
                        Posted by
                        <a href="#!">Start Bootstrap</a>
                        on August 24, 2021
                    </p>
                </div>
                <!-- Divider-->
                <hr class="my-4" />
                <!-- Post preview-->
                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title">Failure is not an option</h2>
                        <h3 class="post-subtitle">Many say exploration is part of our destiny, but it’s actually our duty to future generations.</h3>
                    </a>
                    <p class="post-meta">
                        Posted by
                        <a href="#!">Start Bootstrap</a>
                        on July 8, 2021
                    </p>
                </div>
                <!-- Divider-->
                <hr class="my-4" />
                <!-- Pager-->
                <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
            </div>
        </div>
    </div>
@endsection
