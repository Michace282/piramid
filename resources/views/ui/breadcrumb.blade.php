@extends('layouts.vertical', ['title' => 'Breadcrumb', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')
    @include('layouts.shared/page-title', ['sub_title' => 'Base UI', 'page_title' => 'Breadcrumb'])

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Example</h4>
                    <p class="text-muted font-14">
                        Indicate the current page’s location within a navigational hierarchy that automatically adds
                        separators via CSS.
                        Please read the official <a target="_blank"
                                                    href="https://getbootstrap.com/docs/5.3/components/breadcrumb/">Bootstrap</a>
                        documentation for
                        more options.
                    </p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#simple-bre-preview" data-bs-toggle="tab" aria-expanded="false"
                               class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#simple-bre-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="simple-bre-preview">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0 py-2">
                                    <li class="breadcrumb-item active" aria-current="page">Home</li>
                                </ol>
                            </nav>

                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0 py-2">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>

                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0 py-2">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">Library</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Data</li>
                                </ol>
                            </nav>
                        </div> <!-- end preview-->

                        <div class="tab-pane code" id="simple-bre-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;nav aria-label=&quot;breadcrumb&quot;&gt;
                                                            &lt;ol class=&quot;breadcrumb mb-0&quot;&gt;
                                                                &lt;li class=&quot;breadcrumb-item active&quot; aria-current=&quot;page&quot;&gt;Home&lt;/li&gt;
                                                            &lt;/ol&gt;
                                                        &lt;/nav&gt;

                                                        &lt;nav aria-label=&quot;breadcrumb&quot;&gt;
                                                            &lt;ol class=&quot;breadcrumb mb-0&quot;&gt;
                                                                &lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li class=&quot;breadcrumb-item active&quot; aria-current=&quot;page&quot;&gt;Library&lt;/li&gt;
                                                            &lt;/ol&gt;
                                                        &lt;/nav&gt;

                                                        &lt;nav aria-label=&quot;breadcrumb&quot;&gt;
                                                            &lt;ol class=&quot;breadcrumb mb-0&quot;&gt;
                                                                &lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Library&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li class=&quot;breadcrumb-item active&quot; aria-current=&quot;page&quot;&gt;Data&lt;/li&gt;
                                                            &lt;/ol&gt;
                                                        &lt;/nav&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                        </div> <!-- end preview code-->
                    </div> <!-- end tab-content-->

                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">With Icons</h4>
                    <p class="text-muted font-14">
                        Optionally you can also specify the icon with your breadcrumb item.
                    </p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#icon-bre-preview" data-bs-toggle="tab" aria-expanded="false"
                               class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#icon-bre-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="icon-bre-preview">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb bg-light-lighten p-2">
                                    <li class="breadcrumb-item active" aria-current="page"><i
                                            class="uil-home-alt me-1"></i>Home
                                    </li>
                                </ol>
                            </nav>

                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb bg-light-lighten p-2">
                                    <li class="breadcrumb-item"><a href="#"><i class="uil-home-alt"></i> Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>

                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb bg-light-lighten p-2 mb-0">
                                    <li class="breadcrumb-item"><a href="#"><i class="uil-home-alt"></i> Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">Library</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Data</li>
                                </ol>
                            </nav>
                        </div> <!-- end preview-->

                        <div class="tab-pane code" id="icon-bre-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;nav aria-label=&quot;breadcrumb&quot;&gt;
                                                            &lt;ol class=&quot;breadcrumb bg-light-lighten p-2&quot;&gt;
                                                                &lt;li class=&quot;breadcrumb-item active&quot; aria-current=&quot;page&quot;&gt;&lt;i class=&quot;uil-home-alt me-1&quot;&gt;&lt;/i&gt; Home&lt;/li&gt;
                                                            &lt;/ol&gt;
                                                        &lt;/nav&gt;

                                                        &lt;nav aria-label=&quot;breadcrumb&quot;&gt;
                                                            &lt;ol class=&quot;breadcrumb bg-light-lighten p-2&quot;&gt;
                                                                &lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;uil-home-alt&quot;&gt;&lt;/i&gt; Home&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li class=&quot;breadcrumb-item active&quot; aria-current=&quot;page&quot;&gt;Library&lt;/li&gt;
                                                            &lt;/ol&gt;
                                                        &lt;/nav&gt;

                                                        &lt;nav aria-label=&quot;breadcrumb&quot;&gt;
                                                            &lt;ol class=&quot;breadcrumb bg-light-lighten p-2 mb-0&quot;&gt;
                                                                &lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;uil-home-alt&quot;&gt;&lt;/i&gt; Home&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Library&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li class=&quot;breadcrumb-item active&quot; aria-current=&quot;page&quot;&gt;Data&lt;/li&gt;
                                                            &lt;/ol&gt;
                                                        &lt;/nav&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                        </div> <!-- end preview code-->
                    </div> <!-- end tab-content-->

                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->

    </div> <!-- end row -->
@endsection
@section('script-bottom')
    @vite(['resources/js/hyper-syntax.js'])
@endsection
