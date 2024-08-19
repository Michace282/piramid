@extends('layouts.vertical', ['title' => 'Offcanvas', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')
    @include('layouts.shared/page-title', ['sub_title' => 'Base UI', 'page_title' => 'Offcanvas'])

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Offcanvas</h4>
                    <p class="text-muted font-13">
                        You can use a link with the <code>href</code> attribute, or a button with the
                        <code>data-bs-target</code> attribute. In both cases, the
                        <code>data-bs-toggle="offcanvas"</code> is
                        required.
                    </p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#offcanvas-preview" data-bs-toggle="tab" aria-expanded="false"
                               class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#offcanvas-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->

                    <div class="tab-content">
                        <div class="tab-pane show active" id="offcanvas-preview">
                            <div class="d-flex flex-wrap gap-2">
                                <a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample"
                                   role="button" aria-controls="offcanvasExample">
                                    Link with href
                                </a>
                                <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
                                        data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                                    Button with data-bs-target
                                </button>
                            </div> <!-- end d-flex flex-wrap gap-2-->

                            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
                                 aria-labelledby="offcanvasExampleLabel">
                                <div class="offcanvas-header">
                                    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
                                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                            aria-label="Close"></button>
                                </div> <!-- end offcanvas-header-->

                                <div class="offcanvas-body">
                                    <div>
                                        Some text as placeholder. In real life you can have the elements you have
                                        chosen.
                                        Like, text,
                                        images, lists, etc.
                                    </div>
                                    <h5 class="mt-3">List</h5>
                                    <ul class="ps-3">
                                        <li class="">Nemo enim ipsam voluptatem quia aspernatur</li>
                                        <li class="">Neque porro quisquam est, qui dolorem</li>
                                        <li class="">Quis autem vel eum iure qui in ea</li>
                                    </ul>

                                    <ul class="ps-3">
                                        <li class="">At vero eos et accusamus et iusto odio dignissimos</li>
                                        <li class="">Et harum quidem rerum facilis</li>
                                        <li class="">Temporibus autem quibusdam et aut officiis</li>
                                    </ul>
                                </div> <!-- end offcanvas-body-->
                            </div> <!-- end offcanvas-->
                        </div> <!-- end tab-pan-->

                        <div class="tab-pane code" id="offcanvas-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;a class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;offcanvas&quot; href=&quot;#offcanvasExample&quot; role=&quot;button&quot; aria-controls=&quot;offcanvasExample&quot;&gt;
                                                            Link with href
                                                        &lt;/a&gt;
                                                        &lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; data-bs-toggle=&quot;offcanvas&quot; data-bs-target=&quot;#offcanvasExample&quot; aria-controls=&quot;offcanvasExample&quot;&gt;
                                                            Button with data-bs-target
                                                        &lt;/button&gt;

                                                        &lt;div class=&quot;offcanvas offcanvas-start&quot; tabindex=&quot;-1&quot; id=&quot;offcanvasExample&quot; aria-labelledby=&quot;offcanvasExampleLabel&quot;&gt;
                                                            &lt;div class=&quot;offcanvas-header&quot;&gt;
                                                                &lt;h5 class=&quot;offcanvas-title&quot; id=&quot;offcanvasExampleLabel&quot;&gt;Offcanvas&lt;/h5&gt;
                                                                &lt;button type=&quot;button&quot; class=&quot;btn-close text-reset&quot; data-bs-dismiss=&quot;offcanvas&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;offcanvas-body&quot;&gt;
                                                                &lt;div&gt;
                                                                    Some text as placeholder. In real life you can have the elements you have chosen. Like, text,
                                                                    images, lists, etc.
                                                                &lt;/div&gt;
                                                                &lt;h5 class=&quot;mt-3&quot;&gt;List&lt;/h5&gt;
                                                                &lt;ul class=&quot;ps-3&quot;&gt;
                                                                    &lt;li class=&quot;&quot;&gt;Nemo enim ipsam voluptatem quia aspernatur&lt;/li&gt;
                                                                    &lt;li class=&quot;&quot;&gt;Neque porro quisquam est, qui dolorem&lt;/li&gt;
                                                                    &lt;li class=&quot;&quot;&gt;Quis autem vel eum iure qui in ea&lt;/li&gt;
                                                                &lt;/ul&gt;

                                                                &lt;ul class=&quot;ps-3&quot;&gt;
                                                                    &lt;li class=&quot;&quot;&gt;At vero eos et accusamus et iusto odio dignissimos&lt;/li&gt;
                                                                    &lt;li class=&quot;&quot;&gt;Et harum quidem rerum facilis&lt;/li&gt;
                                                                    &lt;li class=&quot;&quot;&gt;Temporibus autem quibusdam et aut officiis&lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre>
                        </div>
                    </div>

                </div> <!-- end card-body-->
            </div> <!-- end card-->

            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Offcanvas Backdrop</h4>
                    <p class="text-muted font-13">
                        Scrolling the <code>&lt;body&gt;</code> element is disabled when an offcanvas and its backdrop
                        are
                        visible. Use the <code>data-bs-scroll</code> attribute to toggle <code>&lt;body&gt;</code>
                        scrolling
                        and <code>data-bs-backdrop</code> to toggle the backdrop.
                    </p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#offcanvas-backdrop-preview" data-bs-toggle="tab" aria-expanded="false"
                               class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#offcanvas-backdrop-code" data-bs-toggle="tab" aria-expanded="true"
                               class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->

                    <div class="tab-content">
                        <div class="tab-pane show active" id="offcanvas-backdrop-preview">

                            <div class="d-flex flex-wrap gap-2">
                                <button class="btn btn-primary mt-2 mt-md-0" type="button" data-bs-toggle="offcanvas"
                                        data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">Enable
                                    body
                                    scrolling
                                </button>
                                <button class="btn btn-primary mt-2 mt-md-0" type="button" data-bs-toggle="offcanvas"
                                        data-bs-target="#offcanvasWithBackdrop" aria-controls="offcanvasWithBackdrop">
                                    Enable
                                    backdrop (default)
                                </button>
                                <button class="btn btn-primary mt-2 mt-md-0" type="button" data-bs-toggle="offcanvas"
                                        data-bs-target="#offcanvasWithBothOptions"
                                        aria-controls="offcanvasWithBothOptions">Enable both scrolling & backdrop
                                </button>
                            </div> <!-- end d-flex flex-wrap gap-2-->

                            <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false"
                                 tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
                                <div class="offcanvas-header">
                                    <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Colored with scrolling</h5>
                                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                            aria-label="Close"></button>
                                </div> <!-- end offcanvas-header-->
                                <div class="offcanvas-body">
                                    <div>
                                        Some text as placeholder. In real life you can have the elements you have
                                        chosen.
                                        Like, text,
                                        images, lists, etc.
                                    </div>
                                    <h5 class="mt-3">List</h5>
                                    <ul class="ps-3">
                                        <li class="">Nemo enim ipsam voluptatem quia aspernatur</li>
                                        <li class="">Neque porro quisquam est, qui dolorem</li>
                                        <li class="">Quis autem vel eum iure qui in ea</li>
                                    </ul>

                                    <ul class="ps-3">
                                        <li class="">At vero eos et accusamus et iusto odio dignissimos</li>
                                        <li class="">Et harum quidem rerum facilis</li>
                                        <li class="">Temporibus autem quibusdam et aut officiis</li>
                                    </ul>
                                </div> <!-- end offcanvas-body-->
                            </div> <!-- end offcanvas-->

                            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasWithBackdrop"
                                 aria-labelledby="offcanvasWithBackdropLabel">
                                <div class="offcanvas-header">
                                    <h5 class="offcanvas-title" id="offcanvasWithBackdropLabel">Offcanvas with backdrop
                                    </h5>
                                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                            aria-label="Close"></button>
                                </div> <!-- end offcanvas-header-->

                                <div class="offcanvas-body">
                                    <div>
                                        Some text as placeholder. In real life you can have the elements you have
                                        chosen.
                                        Like, text,
                                        images, lists, etc.
                                    </div>
                                    <h5 class="mt-3">List</h5>
                                    <ul class="ps-3">
                                        <li class="">Nemo enim ipsam voluptatem quia aspernatur</li>
                                        <li class="">Neque porro quisquam est, qui dolorem</li>
                                        <li class="">Quis autem vel eum iure qui in ea</li>
                                    </ul>

                                    <ul class="ps-3">
                                        <li class="">At vero eos et accusamus et iusto odio dignissimos</li>
                                        <li class="">Et harum quidem rerum facilis</li>
                                        <li class="">Temporibus autem quibusdam et aut officiis</li>
                                    </ul>
                                </div> <!-- end offcanvas-body-->
                            </div> <!-- end offcanvas-->

                            <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1"
                                 id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
                                <div class="offcanvas-header">
                                    <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Backdroped with
                                        scrolling</h5>
                                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                            aria-label="Close"></button>
                                </div> <!-- end offcanvas-header-->

                                <div class="offcanvas-body">
                                    <div>
                                        Some text as placeholder. In real life you can have the elements you have
                                        chosen.
                                        Like, text,
                                        images, lists, etc.
                                    </div>
                                    <h5 class="mt-3">List</h5>
                                    <ul class="ps-3">
                                        <li class="">Nemo enim ipsam voluptatem quia aspernatur</li>
                                        <li class="">Neque porro quisquam est, qui dolorem</li>
                                        <li class="">Quis autem vel eum iure qui in ea</li>
                                    </ul>

                                    <ul class="ps-3">
                                        <li class="">At vero eos et accusamus et iusto odio dignissimos</li>
                                        <li class="">Et harum quidem rerum facilis</li>
                                        <li class="">Temporibus autem quibusdam et aut officiis</li>
                                    </ul>
                                </div> <!-- end offcanvas-body-->
                            </div> <!-- end offcanvas-->
                        </div> <!-- end tab-pan-->

                        <div class="tab-pane code" id="offcanvas-backdrop-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;button class=&quot;btn btn-primary mt-2 mt-md-0&quot; type=&quot;button&quot; data-bs-toggle=&quot;offcanvas&quot; data-bs-target=&quot;#offcanvasScrolling&quot; aria-controls=&quot;offcanvasScrolling&quot;&gt;Enable body scrolling&lt;/button&gt;
                                                        &lt;button class=&quot;btn btn-primary mt-2 mt-md-0&quot; type=&quot;button&quot; data-bs-toggle=&quot;offcanvas&quot; data-bs-target=&quot;#offcanvasWithBackdrop&quot; aria-controls=&quot;offcanvasWithBackdrop&quot;&gt;Enable backdrop (default)&lt;/button&gt;
                                                        &lt;button class=&quot;btn btn-primary mt-2 mt-md-0&quot; type=&quot;button&quot; data-bs-toggle=&quot;offcanvas&quot; data-bs-target=&quot;#offcanvasWithBothOptions&quot; aria-controls=&quot;offcanvasWithBothOptions&quot;&gt;Enable both scrolling &amp; backdrop&lt;/button&gt;

                                                        &lt;div class=&quot;offcanvas offcanvas-start&quot; data-bs-scroll=&quot;true&quot; data-bs-backdrop=&quot;false&quot; tabindex=&quot;-1&quot; id=&quot;offcanvasScrolling&quot; aria-labelledby=&quot;offcanvasScrollingLabel&quot;&gt;
                                                            &lt;div class=&quot;offcanvas-header&quot;&gt;
                                                                &lt;h5 class=&quot;offcanvas-title&quot; id=&quot;offcanvasScrollingLabel&quot;&gt;Colored with scrolling&lt;/h5&gt;
                                                                &lt;button type=&quot;button&quot; class=&quot;btn-close text-reset&quot; data-bs-dismiss=&quot;offcanvas&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;offcanvas-body&quot;&gt;
                                                                &lt;div&gt;
                                                                    Some text as placeholder. In real life you can have the elements you have chosen. Like, text,
                                                                    images, lists, etc.
                                                                &lt;/div&gt;
                                                                &lt;h5 class=&quot;mt-3&quot;&gt;List&lt;/h5&gt;
                                                                &lt;ul class=&quot;ps-3&quot;&gt;
                                                                    &lt;li class=&quot;&quot;&gt;Nemo enim ipsam voluptatem quia aspernatur&lt;/li&gt;
                                                                    &lt;li class=&quot;&quot;&gt;Neque porro quisquam est, qui dolorem&lt;/li&gt;
                                                                    &lt;li class=&quot;&quot;&gt;Quis autem vel eum iure qui in ea&lt;/li&gt;
                                                                &lt;/ul&gt;

                                                                &lt;ul class=&quot;ps-3&quot;&gt;
                                                                    &lt;li class=&quot;&quot;&gt;At vero eos et accusamus et iusto odio dignissimos&lt;/li&gt;
                                                                    &lt;li class=&quot;&quot;&gt;Et harum quidem rerum facilis&lt;/li&gt;
                                                                    &lt;li class=&quot;&quot;&gt;Temporibus autem quibusdam et aut officiis&lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;

                                                        &lt;div class=&quot;offcanvas offcanvas-start&quot; tabindex=&quot;-1&quot; id=&quot;offcanvasWithBackdrop&quot; aria-labelledby=&quot;offcanvasWithBackdropLabel&quot;&gt;
                                                            &lt;div class=&quot;offcanvas-header&quot;&gt;
                                                                &lt;h5 class=&quot;offcanvas-title&quot; id=&quot;offcanvasWithBackdropLabel&quot;&gt;Offcanvas with backdrop&lt;/h5&gt;
                                                                &lt;button type=&quot;button&quot; class=&quot;btn-close text-reset&quot; data-bs-dismiss=&quot;offcanvas&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;offcanvas-body&quot;&gt;
                                                                &lt;div&gt;
                                                                    Some text as placeholder. In real life you can have the elements you have chosen. Like, text,
                                                                    images, lists, etc.
                                                                &lt;/div&gt;
                                                                &lt;h5 class=&quot;mt-3&quot;&gt;List&lt;/h5&gt;
                                                                &lt;ul class=&quot;ps-3&quot;&gt;
                                                                    &lt;li class=&quot;&quot;&gt;Nemo enim ipsam voluptatem quia aspernatur&lt;/li&gt;
                                                                    &lt;li class=&quot;&quot;&gt;Neque porro quisquam est, qui dolorem&lt;/li&gt;
                                                                    &lt;li class=&quot;&quot;&gt;Quis autem vel eum iure qui in ea&lt;/li&gt;
                                                                &lt;/ul&gt;

                                                                &lt;ul class=&quot;ps-3&quot;&gt;
                                                                    &lt;li class=&quot;&quot;&gt;At vero eos et accusamus et iusto odio dignissimos&lt;/li&gt;
                                                                    &lt;li class=&quot;&quot;&gt;Et harum quidem rerum facilis&lt;/li&gt;
                                                                    &lt;li class=&quot;&quot;&gt;Temporibus autem quibusdam et aut officiis&lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;

                                                        &lt;div class=&quot;offcanvas offcanvas-start&quot; data-bs-scroll=&quot;true&quot; tabindex=&quot;-1&quot; id=&quot;offcanvasWithBothOptions&quot; aria-labelledby=&quot;offcanvasWithBothOptionsLabel&quot;&gt;
                                                            &lt;div class=&quot;offcanvas-header&quot;&gt;
                                                                &lt;h5 class=&quot;offcanvas-title&quot; id=&quot;offcanvasWithBothOptionsLabel&quot;&gt;Backdroped with scrolling&lt;/h5&gt;
                                                                &lt;button type=&quot;button&quot; class=&quot;btn-close text-reset&quot; data-bs-dismiss=&quot;offcanvas&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;offcanvas-body&quot;&gt;
                                                                &lt;div&gt;
                                                                    Some text as placeholder. In real life you can have the elements you have chosen. Like, text,
                                                                    images, lists, etc.
                                                                &lt;/div&gt;
                                                                &lt;h5 class=&quot;mt-3&quot;&gt;List&lt;/h5&gt;
                                                                &lt;ul class=&quot;ps-3&quot;&gt;
                                                                    &lt;li class=&quot;&quot;&gt;Nemo enim ipsam voluptatem quia aspernatur&lt;/li&gt;
                                                                    &lt;li class=&quot;&quot;&gt;Neque porro quisquam est, qui dolorem&lt;/li&gt;
                                                                    &lt;li class=&quot;&quot;&gt;Quis autem vel eum iure qui in ea&lt;/li&gt;
                                                                &lt;/ul&gt;

                                                                &lt;ul class=&quot;ps-3&quot;&gt;
                                                                    &lt;li class=&quot;&quot;&gt;At vero eos et accusamus et iusto odio dignissimos&lt;/li&gt;
                                                                    &lt;li class=&quot;&quot;&gt;Et harum quidem rerum facilis&lt;/li&gt;
                                                                    &lt;li class=&quot;&quot;&gt;Temporibus autem quibusdam et aut officiis&lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre>
                        </div>
                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Offcanvas Placement</h4>
                    <p class="text-muted font-13">
                        Try the right and bottom examples out below.
                    </p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#offcanvas-placement-preview" data-bs-toggle="tab" aria-expanded="false"
                               class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#offcanvas-placement-code" data-bs-toggle="tab" aria-expanded="true"
                               class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->

                    <div class="tab-content">
                        <div class="tab-pane show active" id="offcanvas-placement-preview">
                            <ul class="text-muted font-13">
                                <li><code>.offcanvas-start</code> places offcanvas on the left of the viewport (shown
                                    above)
                                </li>
                                <li><code>.offcanvas-end</code> places offcanvas on the right of the viewport</li>
                                <li><code>.offcanvas-top</code> places offcanvas on the top of the viewport</li>
                                <li><code>.offcanvas-bottom</code> places offcanvas on the bottom of the viewport</li>
                            </ul>

                            <div>
                                <div class="d-flex flex-wrap gap-2">
                                    <button class="btn btn-primary mt-2 mt-md-0" type="button"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop"
                                            aria-controls="offcanvasTop">Toggle Top offcanvas
                                    </button>
                                    <button class="btn btn-primary mt-2 mt-md-0" type="button"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                                            aria-controls="offcanvasRight">Toggle right offcanvas
                                    </button>
                                    <button class="btn btn-primary mt-2 mt-md-0" type="button"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom"
                                            aria-controls="offcanvasBottom">Toggle bottom offcanvas
                                    </button>
                                    <button class="btn btn-primary mt-2 mt-lg-0" type="button"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasLeft"
                                            aria-controls="offcanvasLeft">Toggle Left offcanvas
                                    </button>
                                </div> <!-- end d-flex flex-wrap gap-2-->

                                <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop"
                                     aria-labelledby="offcanvasTopLabel">
                                    <div class="offcanvas-header">
                                        <h5 id="offcanvasTopLabel">Offcanvas Top</h5>
                                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                                aria-label="Close"></button>
                                    </div> <!-- end offcanvas-header-->

                                    <div class="offcanvas-body">
                                        <div>
                                            Some text as placeholder. In real life you can have the elements you have
                                            chosen. Like, text,
                                            images, lists, etc.
                                        </div>
                                        <h5 class="mt-3">List</h5>
                                        <ul class="ps-3">
                                            <li class="">Nemo enim ipsam voluptatem quia aspernatur</li>
                                            <li class="">Neque porro quisquam est, qui dolorem</li>
                                            <li class="">Quis autem vel eum iure qui in ea</li>
                                        </ul>
                                    </div> <!-- end offcanvas-body-->
                                </div> <!-- end offcanvas-->

                                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
                                     aria-labelledby="offcanvasRightLabel">
                                    <div class="offcanvas-header">
                                        <h5 id="offcanvasRightLabel">Offcanvas right</h5>
                                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                                aria-label="Close"></button>
                                    </div> <!-- end offcanvas-header-->

                                    <div class="offcanvas-body">
                                        <div>
                                            Some text as placeholder. In real life you can have the elements you have
                                            chosen. Like, text,
                                            images, lists, etc.
                                        </div>
                                        <h5 class="mt-3">List</h5>
                                        <ul class="ps-3">
                                            <li class="">Nemo enim ipsam voluptatem quia aspernatur</li>
                                            <li class="">Neque porro quisquam est, qui dolorem</li>
                                            <li class="">Quis autem vel eum iure qui in ea</li>
                                        </ul>
                                    </div> <!-- end offcanvas-body-->
                                </div> <!-- end offcanvas-->

                                <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom"
                                     aria-labelledby="offcanvasBottomLabel">
                                    <div class="offcanvas-header">
                                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Offcanvas bottom</h5>
                                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                                aria-label="Close"></button>
                                    </div> <!-- end offcanvas-header-->

                                    <div class="offcanvas-body">
                                        <div>
                                            Some text as placeholder. In real life you can have the elements you have
                                            chosen. Like, text,
                                            images, lists, etc.
                                        </div>
                                        <h5 class="mt-3">List</h5>
                                        <ul class="ps-3">
                                            <li class="">Nemo enim ipsam voluptatem quia aspernatur</li>
                                            <li class="">Neque porro quisquam est, qui dolorem</li>
                                            <li class="">Quis autem vel eum iure qui in ea</li>
                                        </ul>
                                    </div> <!-- end offcanvas-body-->
                                </div> <!-- end offcanvas-->

                                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasLeft"
                                     aria-labelledby="offcanvasLeftLabel">
                                    <div class="offcanvas-header">
                                        <h5 id="offcanvasLeftLabel">Offcanvas Left</h5>
                                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                                aria-label="Close"></button>
                                    </div> <!-- end offcanvas-header-->

                                    <div class="offcanvas-body">
                                        <div>
                                            Some text as placeholder. In real life you can have the elements you have
                                            chosen. Like, text,
                                            images, lists, etc.
                                        </div>
                                        <h5 class="mt-3">List</h5>
                                        <ul class="ps-3">
                                            <li class="">Nemo enim ipsam voluptatem quia aspernatur</li>
                                            <li class="">Neque porro quisquam est, qui dolorem</li>
                                            <li class="">Quis autem vel eum iure qui in ea</li>
                                        </ul>
                                    </div> <!-- end offcanvas-body-->
                                </div> <!-- end offcanvas-->
                            </div> <!-- end tab-pan-->
                        </div>

                        <div class="tab-pane code" id="offcanvas-placement-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">

                                                        &lt;div&gt;
                                                            &lt;button class=&quot;btn btn-primary mt-2 mt-md-0&quot; type=&quot;button&quot; data-bs-toggle=&quot;offcanvas&quot; data-bs-target=&quot;#offcanvasTop&quot; aria-controls=&quot;offcanvasTop&quot;&gt;Toggle Top offcanvas&lt;/button&gt;
                                                            &lt;button class=&quot;btn btn-primary mt-2 mt-md-0&quot; type=&quot;button&quot; data-bs-toggle=&quot;offcanvas&quot; data-bs-target=&quot;#offcanvasRight&quot; aria-controls=&quot;offcanvasRight&quot;&gt;Toggle right offcanvas&lt;/button&gt;
                                                            &lt;button class=&quot;btn btn-primary mt-2 mt-md-0&quot; type=&quot;button&quot; data-bs-toggle=&quot;offcanvas&quot; data-bs-target=&quot;#offcanvasBottom&quot; aria-controls=&quot;offcanvasBottom&quot;&gt;Toggle bottom offcanvas&lt;/button&gt;
                                                            &lt;button class=&quot;btn btn-primary mt-2 mt-lg-0&quot; type=&quot;button&quot; data-bs-toggle=&quot;offcanvas&quot; data-bs-target=&quot;#offcanvasLeft&quot; aria-controls=&quot;offcanvasLeft&quot;&gt;Toggle Left offcanvas&lt;/button&gt;

                                                            &lt;div class=&quot;offcanvas offcanvas-top&quot; tabindex=&quot;-1&quot; id=&quot;offcanvasTop&quot; aria-labelledby=&quot;offcanvasTopLabel&quot;&gt;
                                                                &lt;div class=&quot;offcanvas-header&quot;&gt;
                                                                    &lt;h5 id=&quot;offcanvasTopLabel&quot;&gt;Offcanvas Top&lt;/h5&gt;
                                                                    &lt;button type=&quot;button&quot; class=&quot;btn-close text-reset&quot; data-bs-dismiss=&quot;offcanvas&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;offcanvas-body&quot;&gt;
                                                                    &lt;div&gt;
                                                                        Some text as placeholder. In real life you can have the elements you have chosen. Like, text,
                                                                        images, lists, etc.
                                                                    &lt;/div&gt;
                                                                    &lt;h5 class=&quot;mt-3&quot;&gt;List&lt;/h5&gt;
                                                                    &lt;ul class=&quot;ps-3&quot;&gt;
                                                                        &lt;li class=&quot;&quot;&gt;Nemo enim ipsam voluptatem quia aspernatur&lt;/li&gt;
                                                                        &lt;li class=&quot;&quot;&gt;Neque porro quisquam est, qui dolorem&lt;/li&gt;
                                                                        &lt;li class=&quot;&quot;&gt;Quis autem vel eum iure qui in ea&lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;

                                                            &lt;div class=&quot;offcanvas offcanvas-end&quot; tabindex=&quot;-1&quot; id=&quot;offcanvasRight&quot; aria-labelledby=&quot;offcanvasRightLabel&quot;&gt;
                                                                &lt;div class=&quot;offcanvas-header&quot;&gt;
                                                                    &lt;h5 id=&quot;offcanvasRightLabel&quot;&gt;Offcanvas right&lt;/h5&gt;
                                                                    &lt;button type=&quot;button&quot; class=&quot;btn-close text-reset&quot; data-bs-dismiss=&quot;offcanvas&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;offcanvas-body&quot;&gt;
                                                                    &lt;div&gt;
                                                                        Some text as placeholder. In real life you can have the elements you have chosen. Like, text,
                                                                        images, lists, etc.
                                                                    &lt;/div&gt;
                                                                    &lt;h5 class=&quot;mt-3&quot;&gt;List&lt;/h5&gt;
                                                                    &lt;ul class=&quot;ps-3&quot;&gt;
                                                                        &lt;li class=&quot;&quot;&gt;Nemo enim ipsam voluptatem quia aspernatur&lt;/li&gt;
                                                                        &lt;li class=&quot;&quot;&gt;Neque porro quisquam est, qui dolorem&lt;/li&gt;
                                                                        &lt;li class=&quot;&quot;&gt;Quis autem vel eum iure qui in ea&lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;

                                                            &lt;div class=&quot;offcanvas offcanvas-bottom&quot; tabindex=&quot;-1&quot; id=&quot;offcanvasBottom&quot; aria-labelledby=&quot;offcanvasBottomLabel&quot;&gt;
                                                                &lt;div class=&quot;offcanvas-header&quot;&gt;
                                                                    &lt;h5 class=&quot;offcanvas-title&quot; id=&quot;offcanvasBottomLabel&quot;&gt;Offcanvas bottom&lt;/h5&gt;
                                                                    &lt;button type=&quot;button&quot; class=&quot;btn-close text-reset&quot; data-bs-dismiss=&quot;offcanvas&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;offcanvas-body&quot;&gt;
                                                                    &lt;div&gt;
                                                                        Some text as placeholder. In real life you can have the elements you have chosen. Like, text,
                                                                        images, lists, etc.
                                                                    &lt;/div&gt;
                                                                    &lt;h5 class=&quot;mt-3&quot;&gt;List&lt;/h5&gt;
                                                                    &lt;ul class=&quot;ps-3&quot;&gt;
                                                                        &lt;li class=&quot;&quot;&gt;Nemo enim ipsam voluptatem quia aspernatur&lt;/li&gt;
                                                                        &lt;li class=&quot;&quot;&gt;Neque porro quisquam est, qui dolorem&lt;/li&gt;
                                                                        &lt;li class=&quot;&quot;&gt;Quis autem vel eum iure qui in ea&lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;

                                                            &lt;div class=&quot;offcanvas offcanvas-start&quot; tabindex=&quot;-1&quot; id=&quot;offcanvasLeft&quot; aria-labelledby=&quot;offcanvasLeftLabel&quot;&gt;
                                                                &lt;div class=&quot;offcanvas-header&quot;&gt;
                                                                    &lt;h5 id=&quot;offcanvasLeftLabel&quot;&gt;Offcanvas Left&lt;/h5&gt;
                                                                    &lt;button type=&quot;button&quot; class=&quot;btn-close text-reset&quot; data-bs-dismiss=&quot;offcanvas&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;offcanvas-body&quot;&gt;
                                                                    &lt;div&gt;
                                                                        Some text as placeholder. In real life you can have the elements you have chosen. Like, text,
                                                                        images, lists, etc.
                                                                    &lt;/div&gt;
                                                                    &lt;h5 class=&quot;mt-3&quot;&gt;List&lt;/h5&gt;
                                                                    &lt;ul class=&quot;ps-3&quot;&gt;
                                                                        &lt;li class=&quot;&quot;&gt;Nemo enim ipsam voluptatem quia aspernatur&lt;/li&gt;
                                                                        &lt;li class=&quot;&quot;&gt;Neque porro quisquam est, qui dolorem&lt;/li&gt;
                                                                        &lt;li class=&quot;&quot;&gt;Quis autem vel eum iure qui in ea&lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre>
                        </div>
                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->

            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Dark Offcanvas</h4>
                    <p class="text-muted font-13">Change the appearance of offcanvases with utilities to better match
                        them
                        to different contexts like dark navbars.
                        Here we add <code>.text-bg-dark</code> to the <code>.offcanvas</code> and
                        <code>.btn-close-white</code> to
                        <code>.btn-close</code> for proper styling with a dark offcanvas. If you have dropdowns within,
                        consider also adding
                        <code>.dropdown-menu-dark</code> to <code>.dropdown-menu</code>.
                    </p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#offcanvas-dark-preview" data-bs-toggle="tab" aria-expanded="false"
                               class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#offcanvas-dark-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->

                    <div class="tab-content">
                        <div class="tab-pane show active" id="offcanvas-dark-preview">
                            <div>
                                <button class="btn btn-primary mt-2 mt-md-0" type="button" data-bs-toggle="offcanvas"
                                        data-bs-target="#offcanvasDark" aria-controls="offcanvasDark">Dark offcanvas
                                </button>

                                <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasDark"
                                     aria-labelledby="offcanvasDarkLabel">
                                    <div class="offcanvas-header">
                                        <h5 id="offcanvasDarkLabel">Dark Offcanvas</h5>
                                        <button type="button" class="btn-close btn-close-white"
                                                data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                    </div> <!-- end offcanvas-header-->

                                    <div class="offcanvas-body">
                                        <div>
                                            Some text as placeholder. In real life you can have the elements you have
                                            chosen. Like, text,
                                            images, lists, etc.
                                        </div>
                                        <h5 class="mt-3">List</h5>
                                        <ul class="ps-3">
                                            <li class="">Nemo enim ipsam voluptatem quia aspernatur</li>
                                            <li class="">Neque porro quisquam est, qui dolorem</li>
                                            <li class="">Quis autem vel eum iure qui in ea</li>
                                        </ul>
                                    </div> <!-- end offcanvas-body-->
                                </div> <!-- end offcanvas-->
                            </div> <!-- end tab-pan-->
                        </div>

                        <div class="tab-pane code" id="offcanvas-dark-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;button class=&quot;btn btn-primary mt-2 mt-md-0&quot; type=&quot;button&quot; data-bs-toggle=&quot;offcanvas&quot; data-bs-target=&quot;#offcanvasDark&quot; aria-controls=&quot;offcanvasDark&quot;&gt;Toggle Top offcanvas&lt;/button&gt;

                                                        &lt;div class=&quot;offcanvas offcanvas-start text-bg-dark&quot; tabindex=&quot;-1&quot; id=&quot;offcanvasDark&quot; aria-labelledby=&quot;offcanvasDarkLabel&quot;&gt;
                                                            &lt;div class=&quot;offcanvas-header&quot;&gt;
                                                                &lt;h5 id=&quot;offcanvasDarkLabel&quot;&gt;Offcanvas Top&lt;/h5&gt;
                                                                &lt;button type=&quot;button&quot; class=&quot;btn-close btn-close-white&quot; data-bs-dismiss=&quot;offcanvas&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;offcanvas-body&quot;&gt;
                                                                &lt;div&gt;
                                                                    Some text as placeholder. In real life you can have the elements you have chosen. Like, text,
                                                                    images, lists, etc.
                                                                &lt;/div&gt;
                                                                &lt;h5 class=&quot;mt-3&quot;&gt;List&lt;/h5&gt;
                                                                &lt;ul class=&quot;ps-3&quot;&gt;
                                                                    &lt;li class=&quot;&quot;&gt;Nemo enim ipsam voluptatem quia aspernatur&lt;/li&gt;
                                                                    &lt;li class=&quot;&quot;&gt;Neque porro quisquam est, qui dolorem&lt;/li&gt;
                                                                    &lt;li class=&quot;&quot;&gt;Quis autem vel eum iure qui in ea&lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre>
                        </div>
                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>
    <!-- end row -->
@endsection
@section('script-bottom')
    @vite(['resources/js/hyper-syntax.js'])
@endsection