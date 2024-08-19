@extends('layouts.vertical', ['title' => 'Carousel', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')
    @include('layouts.shared/page-title', ['sub_title' => 'Base UI', 'page_title' => 'Carousel'])

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Slides only</h4>
                    <p class="text-muted font-14">Here’s a carousel with slides only.
                        Note the presence of the <code>.d-block</code>
                        and <code>.img-fluid</code> on carousel images
                        to prevent browser default image alignment.</p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#slides-only-preview" data-bs-toggle="tab" aria-expanded="false"
                               class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#slides-only-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="slides-only-preview">
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <img class="d-block img-fluid" src="/images/small/small-1.jpg"
                                             alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block img-fluid" src="/images/small/small-2.jpg"
                                             alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block img-fluid" src="/images/small/small-3.jpg"
                                             alt="Third slide">
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end preview-->

                        <div class="tab-pane code" id="slides-only-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;div id=&quot;carouselExampleSlidesOnly&quot; class=&quot;carousel slide&quot; data-bs-ride=&quot;carousel&quot;&gt;
                                                            &lt;div class=&quot;carousel-inner&quot; role=&quot;listbox&quot;&gt;
                                                                &lt;div class=&quot;carousel-item active&quot;&gt;
                                                                    &lt;img class=&quot;d-block img-fluid&quot; src=&quot;assets/images/small/small-1.jpg&quot; alt=&quot;First slide&quot;&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;carousel-item&quot;&gt;
                                                                    &lt;img class=&quot;d-block img-fluid&quot; src=&quot;assets/images/small/small-2.jpg&quot; alt=&quot;Second slide&quot;&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;carousel-item&quot;&gt;
                                                                    &lt;img class=&quot;d-block img-fluid&quot; src=&quot;assets/images/small/small-3.jpg&quot; alt=&quot;Third slide&quot;&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                        </div> <!-- end preview code-->
                    </div> <!-- end tab-content-->

                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">With controls</h4>
                    <p class="text-muted font-14">Adding in the previous and next controls:</p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#with-controls-preview" data-bs-toggle="tab" aria-expanded="false"
                               class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#with-controls-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="with-controls-preview">
                            <!-- START carousel-->
                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <img class="d-block img-fluid" src="/images/small/small-4.jpg"
                                             alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block img-fluid" src="/images/small/small-1.jpg"
                                             alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block img-fluid" src="/images/small/small-2.jpg"
                                             alt="Third slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                   data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                   data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </a>
                            </div>
                        </div> <!-- end preview-->

                        <div class="tab-pane code" id="with-controls-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;div id=&quot;carouselExampleControls&quot; class=&quot;carousel slide&quot; data-bs-ride=&quot;carousel&quot;&gt;
                                                            &lt;div class=&quot;carousel-inner&quot; role=&quot;listbox&quot;&gt;
                                                                &lt;div class=&quot;carousel-item active&quot;&gt;
                                                                    &lt;img class=&quot;d-block img-fluid&quot; src=&quot;assets/images/small/small-4.jpg&quot; alt=&quot;First slide&quot;&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;carousel-item&quot;&gt;
                                                                    &lt;img class=&quot;d-block img-fluid&quot; src=&quot;assets/images/small/small-1.jpg&quot; alt=&quot;Second slide&quot;&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;carousel-item&quot;&gt;
                                                                    &lt;img class=&quot;d-block img-fluid&quot; src=&quot;assets/images/small/small-2.jpg&quot; alt=&quot;Third slide&quot;&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;a class=&quot;carousel-control-prev&quot; href=&quot;#carouselExampleControls&quot; role=&quot;button&quot; data-bs-slide=&quot;prev&quot;&gt;
                                                                &lt;span class=&quot;carousel-control-prev-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
                                                                &lt;span class=&quot;visually-hidden&quot;&gt;Previous&lt;/span&gt;
                                                            &lt;/a&gt;
                                                            &lt;a class=&quot;carousel-control-next&quot; href=&quot;#carouselExampleControls&quot; role=&quot;button&quot; data-bs-slide=&quot;next&quot;&gt;
                                                                &lt;span class=&quot;carousel-control-next-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
                                                                &lt;span class=&quot;visually-hidden&quot;&gt;Next&lt;/span&gt;
                                                            &lt;/a&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                        </div> <!-- end preview code-->
                    </div> <!-- end tab-content-->

                </div>
            </div>
            <!-- END carousel-->
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">With indicators</h4>
                    <p class="text-muted font-14">You can also add the indicators to the
                        carousel, alongside the controls, too.</p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#with-indicators-preview" data-bs-toggle="tab" aria-expanded="false"
                               class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#with-indicators-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="with-indicators-preview">
                            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active">
                                    </li>
                                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <img class="d-block img-fluid" src="/images/small/small-3.jpg"
                                             alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block img-fluid" src="/images/small/small-2.jpg"
                                             alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block img-fluid" src="/images/small/small-1.jpg"
                                             alt="Third slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                   data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                   data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </a>
                            </div>
                        </div> <!-- end preview-->

                        <div class="tab-pane code" id="with-indicators-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;div id=&quot;carouselExampleIndicators&quot; class=&quot;carousel slide&quot; data-bs-ride=&quot;carousel&quot;&gt;
                                                            &lt;ol class=&quot;carousel-indicators&quot;&gt;
                                                                &lt;li data-bs-target=&quot;#carouselExampleIndicators&quot; data-bs-slide-to=&quot;0&quot; class=&quot;active&quot;&gt;&lt;/li&gt;
                                                                &lt;li data-bs-target=&quot;#carouselExampleIndicators&quot; data-bs-slide-to=&quot;1&quot;&gt;&lt;/li&gt;
                                                                &lt;li data-bs-target=&quot;#carouselExampleIndicators&quot; data-bs-slide-to=&quot;2&quot;&gt;&lt;/li&gt;
                                                            &lt;/ol&gt;
                                                            &lt;div class=&quot;carousel-inner&quot; role=&quot;listbox&quot;&gt;
                                                                &lt;div class=&quot;carousel-item active&quot;&gt;
                                                                    &lt;img class=&quot;d-block img-fluid&quot; src=&quot;assets/images/small/small-3.jpg&quot; alt=&quot;First slide&quot;&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;carousel-item&quot;&gt;
                                                                    &lt;img class=&quot;d-block img-fluid&quot; src=&quot;assets/images/small/small-2.jpg&quot; alt=&quot;Second slide&quot;&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;carousel-item&quot;&gt;
                                                                    &lt;img class=&quot;d-block img-fluid&quot; src=&quot;assets/images/small/small-1.jpg&quot; alt=&quot;Third slide&quot;&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;a class=&quot;carousel-control-prev&quot; href=&quot;#carouselExampleIndicators&quot; role=&quot;button&quot; data-bs-slide=&quot;prev&quot;&gt;
                                                                &lt;span class=&quot;carousel-control-prev-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
                                                                &lt;span class=&quot;visually-hidden&quot;&gt;Previous&lt;/span&gt;
                                                            &lt;/a&gt;
                                                            &lt;a class=&quot;carousel-control-next&quot; href=&quot;#carouselExampleIndicators&quot; role=&quot;button&quot; data-bs-slide=&quot;next&quot;&gt;
                                                                &lt;span class=&quot;carousel-control-next-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
                                                                &lt;span class=&quot;visually-hidden&quot;&gt;Next&lt;/span&gt;
                                                            &lt;/a&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                        </div> <!-- end preview code-->
                    </div> <!-- end tab-content-->

                </div>
            </div>
        </div> <!-- end col -->

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">With captions</h4>
                    <p class="text-muted font-14">Add captions to your slides easily with the
                        <code>.carousel-caption</code> element within any <code>.carousel-item</code>.</p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#with-captions-preview" data-bs-toggle="tab" aria-expanded="false"
                               class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#with-captions-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="with-captions-preview">
                            <div id="carouselExampleCaption" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <img src="/images/small/small-1.jpg" alt="..." class="d-block img-fluid">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h3 class="text-white">First slide label</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="/images/small/small-3.jpg" alt="..." class="d-block img-fluid">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h3 class="text-white">Second slide label</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="/images/small/small-2.jpg" alt="..." class="d-block img-fluid">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h3 class="text-white">Third slide label</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleCaption" role="button"
                                   data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleCaption" role="button"
                                   data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </a>
                            </div>
                        </div> <!-- end preview-->

                        <div class="tab-pane code" id="with-captions-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;div id=&quot;carouselExampleCaption&quot; class=&quot;carousel slide&quot; data-bs-ride=&quot;carousel&quot;&gt;
                                                            &lt;div class=&quot;carousel-inner&quot; role=&quot;listbox&quot;&gt;
                                                                &lt;div class=&quot;carousel-item active&quot;&gt;
                                                                    &lt;img src=&quot;assets/images/small/small-1.jpg&quot; alt=&quot;...&quot; class=&quot;d-block img-fluid&quot;&gt;
                                                                    &lt;div class=&quot;carousel-caption d-none d-md-block&quot;&gt;
                                                                        &lt;h3 class=&quot;text-white&quot;&gt;First slide label&lt;/h3&gt;
                                                                        &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/p&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;carousel-item&quot;&gt;
                                                                    &lt;img src=&quot;assets/images/small/small-3.jpg&quot; alt=&quot;...&quot; class=&quot;d-block img-fluid&quot;&gt;
                                                                    &lt;div class=&quot;carousel-caption d-none d-md-block&quot;&gt;
                                                                        &lt;h3 class=&quot;text-white&quot;&gt;Second slide label&lt;/h3&gt;
                                                                        &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/p&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;carousel-item&quot;&gt;
                                                                    &lt;img src=&quot;assets/images/small/small-2.jpg&quot; alt=&quot;...&quot; class=&quot;d-block img-fluid&quot;&gt;
                                                                    &lt;div class=&quot;carousel-caption d-none d-md-block&quot;&gt;
                                                                        &lt;h3 class=&quot;text-white&quot;&gt;Third slide label&lt;/h3&gt;
                                                                        &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/p&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;a class=&quot;carousel-control-prev&quot; href=&quot;#carouselExampleCaption&quot; role=&quot;button&quot; data-bs-slide=&quot;prev&quot;&gt;
                                                                &lt;span class=&quot;carousel-control-prev-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
                                                                &lt;span class=&quot;visually-hidden&quot;&gt;Previous&lt;/span&gt;
                                                            &lt;/a&gt;
                                                            &lt;a class=&quot;carousel-control-next&quot; href=&quot;#carouselExampleCaption&quot; role=&quot;button&quot; data-bs-slide=&quot;next&quot;&gt;
                                                                &lt;span class=&quot;carousel-control-next-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
                                                                &lt;span class=&quot;visually-hidden&quot;&gt;Next&lt;/span&gt;
                                                            &lt;/a&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                        </div> <!-- end preview code-->
                    </div> <!-- end tab-content-->

                </div>
            </div>
        </div> <!-- end col -->

    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Crossfade</h4>
                    <p class="text-muted font-14">Add <code>.carousel-fade</code> to your carousel to animate slides
                        with a
                        fade transition instead of a slide.</p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#crossfade-preview" data-bs-toggle="tab" aria-expanded="false"
                               class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#crossfade-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="crossfade-preview">
                            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block img-fluid" src="/images/small/small-1.jpg"
                                             alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block img-fluid" src="/images/small/small-2.jpg"
                                             alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block img-fluid" src="/images/small/small-3.jpg"
                                             alt="Third slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleFade" role="button"
                                   data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleFade" role="button"
                                   data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </a>
                            </div>
                        </div> <!-- end preview-->

                        <div class="tab-pane code" id="crossfade-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;div id=&quot;carouselExampleFade&quot; class=&quot;carousel slide carousel-fade&quot; data-bs-ride=&quot;carousel&quot;&gt;
                                                            &lt;div class=&quot;carousel-inner&quot;&gt;
                                                                &lt;div class=&quot;carousel-item active&quot;&gt;
                                                                    &lt;img class=&quot;d-block img-fluid&quot; src=&quot;assets/images/small/small-1.jpg&quot; alt=&quot;First slide&quot;&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;carousel-item&quot;&gt;
                                                                    &lt;img class=&quot;d-block img-fluid&quot; src=&quot;assets/images/small/small-2.jpg&quot; alt=&quot;Second slide&quot;&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;carousel-item&quot;&gt;
                                                                    &lt;img class=&quot;d-block img-fluid&quot; src=&quot;assets/images/small/small-3.jpg&quot; alt=&quot;Third slide&quot;&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;a class=&quot;carousel-control-prev&quot; href=&quot;#carouselExampleFade&quot; role=&quot;button&quot; data-bs-slide=&quot;prev&quot;&gt;
                                                                &lt;span class=&quot;carousel-control-prev-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
                                                                &lt;span class=&quot;visually-hidden&quot;&gt;Previous&lt;/span&gt;
                                                            &lt;/a&gt;
                                                            &lt;a class=&quot;carousel-control-next&quot; href=&quot;#carouselExampleFade&quot; role=&quot;button&quot; data-bs-slide=&quot;next&quot;&gt;
                                                                &lt;span class=&quot;carousel-control-next-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
                                                                &lt;span class=&quot;visually-hidden&quot;&gt;Next&lt;/span&gt;
                                                            &lt;/a&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                        </div> <!-- end preview code-->
                    </div> <!-- end tab-content-->

                </div>
            </div>
        </div> <!-- end col -->

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Individual interval</h4>
                    <p class="text-muted font-14">Add <code>data-bs-interval=""</code> to a <code>.carousel-item</code>
                        to
                        change the amount of time to delay between automatically cycling to the next item.</p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#individual-preview" data-bs-toggle="tab" aria-expanded="false"
                               class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#individual-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="individual-preview">
                            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active" data-bs-interval="1000">
                                        <img src="/images/small/small-4.jpg" class="img-fluid d-block w-100"
                                             alt="First slide">
                                    </div>
                                    <div class="carousel-item" data-bs-interval="2000">
                                        <img src="/images/small/small-2.jpg" class="img-fluid d-block w-100"
                                             alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="/images/small/small-1.jpg" class="img-fluid d-block w-100"
                                             alt="Third slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleInterval" role="button"
                                   data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleInterval" role="button"
                                   data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </a>
                            </div>
                        </div> <!-- end preview-->

                        <div class="tab-pane code" id="individual-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;div id=&quot;carouselExampleInterval&quot; class=&quot;carousel slide&quot; data-bs-ride=&quot;carousel&quot;&gt;
                                                            &lt;div class=&quot;carousel-inner&quot;&gt;
                                                                &lt;div class=&quot;carousel-item active&quot;&gt;
                                                                    &lt;img class=&quot;d-block w-100 img-fluid&quot; src=&quot;assets/images/small/small-4.jpg&quot; alt=&quot;First slide&quot;&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;carousel-item&quot;&gt;
                                                                    &lt;img class=&quot;d-block w-100 img-fluid&quot; src=&quot;assets/images/small/small-2.jpg&quot; alt=&quot;Second slide&quot;&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;carousel-item&quot;&gt;
                                                                    &lt;img class=&quot;d-block w-100 img-fluid&quot; src=&quot;assets/images/small/small-1.jpg&quot; alt=&quot;Third slide&quot;&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;a class=&quot;carousel-control-prev&quot; href=&quot;#carouselExampleInterval&quot; role=&quot;button&quot; data-bs-slide=&quot;prev&quot;&gt;
                                                                &lt;span class=&quot;carousel-control-prev-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
                                                                &lt;span class=&quot;visually-hidden&quot;&gt;Previous&lt;/span&gt;
                                                            &lt;/a&gt;
                                                            &lt;a class=&quot;carousel-control-next&quot; href=&quot;#carouselExampleInterval&quot; role=&quot;button&quot; data-bs-slide=&quot;next&quot;&gt;
                                                                &lt;span class=&quot;carousel-control-next-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
                                                                &lt;span class=&quot;visually-hidden&quot;&gt;Next&lt;/span&gt;
                                                            &lt;/a&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                        </div> <!-- end preview code-->
                    </div> <!-- end tab-content-->

                </div>
            </div>
        </div> <!-- end col -->

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Dark variant</h4>
                    <p class="text-muted font-14">Add <code>.carousel-dark</code> to the <code>.carousel</code> for
                        darker
                        controls, indicators, and captions. Controls are inverted compared to their default white fill
                        with
                        the <code>filter</code> CSS property. Captions and controls have additional Sass variables that
                        customize the <code>color</code> and <code>background-color</code>.</p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#dark-variant-preview" data-bs-toggle="tab" aria-expanded="false"
                               class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#dark-variant-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="dark-variant-preview">
                            <div id="carouselExampleDark" class="carousel carousel-dark slide">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0"
                                            class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                                            aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                                            aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active" data-bs-interval="10000">
                                        <img src="/images/small/small-5.jpg" class="img-fluid" alt="Images">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>First slide label</h5>
                                            <p>Some representative placeholder content for the first slide.</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item" data-bs-interval="2000">
                                        <img src="/images/small/small-6.jpg" class="img-fluid" alt="Images">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Second slide label</h5>
                                            <p>Some representative placeholder content for the second slide.</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="/images/small/small-7.jpg" class="img-fluid" alt="Images">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Third slide label</h5>
                                            <p>Some representative placeholder content for the third slide.</p>
                                        </div>
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button"
                                        data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                        data-bs-target="#carouselExampleDark" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div> <!-- end preview-->

                        <div class="tab-pane code" id="dark-variant-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                    &lt;div id=&quot;carouselExampleDark&quot; class=&quot;carousel carousel-dark slide&quot;&gt;
                                                        &lt;div class=&quot;carousel-indicators&quot;&gt;
                                                            &lt;button type=&quot;button&quot; data-bs-target=&quot;#carouselExampleDark&quot; data-bs-slide-to=&quot;0&quot; class=&quot;active&quot; aria-current=&quot;true&quot; aria-label=&quot;Slide 1&quot;&gt;&lt;/button&gt;
                                                            &lt;button type=&quot;button&quot; data-bs-target=&quot;#carouselExampleDark&quot; data-bs-slide-to=&quot;1&quot; aria-label=&quot;Slide 2&quot;&gt;&lt;/button&gt;
                                                            &lt;button type=&quot;button&quot; data-bs-target=&quot;#carouselExampleDark&quot; data-bs-slide-to=&quot;2&quot; aria-label=&quot;Slide 3&quot;&gt;&lt;/button&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;carousel-inner&quot;&gt;
                                                            &lt;div class=&quot;carousel-item active&quot; data-bs-interval=&quot;10000&quot;&gt;
                                                                &lt;img src=&quot;assets/images/small/small-5.jpg&quot; class=&quot;img-fluid&quot; alt=&quot;Images&quot;&gt;
                                                                &lt;div class=&quot;carousel-caption d-none d-md-block&quot;&gt;
                                                                    &lt;h5&gt;First slide label&lt;/h5&gt;
                                                                    &lt;p&gt;Some representative placeholder content for the first slide.&lt;/p&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;carousel-item&quot; data-bs-interval=&quot;2000&quot;&gt;
                                                                &lt;img src=&quot;assets/images/small/small-6.jpg&quot; class=&quot;img-fluid&quot; alt=&quot;Images&quot;&gt;
                                                                &lt;div class=&quot;carousel-caption d-none d-md-block&quot;&gt;
                                                                    &lt;h5&gt;Second slide label&lt;/h5&gt;
                                                                    &lt;p&gt;Some representative placeholder content for the second slide.&lt;/p&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;carousel-item&quot;&gt;
                                                                &lt;img src=&quot;assets/images/small/small-7.jpg&quot; class=&quot;img-fluid&quot; alt=&quot;Images&quot;&gt;
                                                                &lt;div class=&quot;carousel-caption d-none d-md-block&quot;&gt;
                                                                    &lt;h5&gt;Third slide label&lt;/h5&gt;
                                                                    &lt;p&gt;Some representative placeholder content for the third slide.&lt;/p&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                        &lt;button class=&quot;carousel-control-prev&quot; type=&quot;button&quot; data-bs-target=&quot;#carouselExampleDark&quot; data-bs-slide=&quot;prev&quot;&gt;
                                                            &lt;span class=&quot;carousel-control-prev-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
                                                            &lt;span class=&quot;visually-hidden&quot;&gt;Previous&lt;/span&gt;
                                                        &lt;/button&gt;
                                                        &lt;button class=&quot;carousel-control-next&quot; type=&quot;button&quot; data-bs-target=&quot;#carouselExampleDark&quot; data-bs-slide=&quot;next&quot;&gt;
                                                            &lt;span class=&quot;carousel-control-next-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
                                                            &lt;span class=&quot;visually-hidden&quot;&gt;Next&lt;/span&gt;
                                                        &lt;/button&gt;
                                                    &lt;/div&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                        </div> <!-- end preview code-->
                    </div> <!-- end tab-content-->

                </div>
            </div>
        </div> <!-- end col -->
    </div>
    <!-- end row -->
@endsection
@section('script-bottom')
    @vite(['resources/js/hyper-syntax.js'])
@endsection