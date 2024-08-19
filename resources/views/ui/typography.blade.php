@extends('layouts.vertical', ['title' => 'Typography', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')
    @include('layouts.shared/page-title', ['sub_title' => 'Base UI', 'page_title' => 'Typography'])

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Display headings</h4>
                    <p class="text-muted font-14">Traditional heading elements are designed to work best in the meat of
                        your
                        page content. When you need a heading to stand out, consider using a display heading—a larger,
                        slightly more opinionated heading style.</p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#display-headings-preview" data-bs-toggle="tab" aria-expanded="false"
                               class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#display-headings-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="display-headings-preview">
                            <h1 class="display-1">Display 1</h1>
                            <p class="text-muted">Suspendisse vel quam malesuada, aliquet sem sit
                                amet, fringilla elit. Morbi
                                tempor tincidunt tempor. Etiam id turpis viverra, vulputate sapien
                                nec,
                                varius sem. Curabitur ullamcorper fringilla eleifend. In ut eros
                                hendrerit
                                est consequat posuere et at velit.</p>

                            <div class="clearfix"></div>

                            <h1 class="display-2">Display 2</h1>
                            <p class="text-muted">In nec rhoncus eros. Vestibulum eu mattis nisl.
                                Quisque viverra viverra magna
                                nec pulvinar. Maecenas pellentesque porta augue, consectetur
                                facilisis diam
                                porttitor sed. Suspendisse tempor est sodales augue rutrum
                                tincidunt.
                                Quisque a malesuada purus.</p>

                            <div class="clearfix"></div>

                            <h1 class="display-3">Display 3</h1>
                            <p class="text-muted">Vestibulum auctor tincidunt semper. Phasellus ut
                                vulputate lacus. Suspendisse
                                ultricies mi eros, sit amet tempor nulla varius sed. Proin nisl
                                nisi,
                                feugiat quis bibendum vitae, dapibus in tellus.</p>

                            <div class="clearfix"></div>

                            <h1 class="display-4">Display 4</h1>
                            <p class="text-muted mb-0">Nulla et mattis nunc. Curabitur scelerisque
                                commodo condimentum. Mauris
                                blandit, velit a consectetur egestas, diam arcu fermentum justo,
                                eget
                                ultrices arcu eros vel erat.</p>

                            <div class="clearfix"></div>

                            <h1 class="display-5">Display 5</h1>
                            <p class="text-muted mb-0">Nulla et mattis nunc. Curabitur scelerisque
                                commodo condimentum. Mauris
                                blandit, velit a consectetur egestas, diam arcu fermentum justo,
                                eget.</p>

                            <div class="clearfix"></div>

                            <h1 class="display-6">Display 6</h1>
                            <p class="text-muted mb-0">Nulla et mattis nunc. Curabitur scelerisque
                                commodo condimentum. Mauris
                                blandit, velit a consectetur egestas.</p>
                        </div> <!-- end preview-->

                        <div class="tab-pane code" id="display-headings-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;h1 class=&quot;display-1&quot;&gt;Display 1&lt;/h1&gt;

                                                        &lt;h1 class=&quot;display-2&quot;&gt;Display 2&lt;/h1&gt;

                                                        &lt;h1 class=&quot;display-3&quot;&gt;Display 3&lt;/h1&gt;

                                                        &lt;h1 class=&quot;display-4&quot;&gt;Display 4&lt;/h1&gt;

                                                        &lt;h1 class=&quot;display-5&quot;&gt;Display 5&lt;/h1&gt;

                                                        &lt;h1 class=&quot;display-6&quot;&gt;Display 6&lt;/h1&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                        </div> <!-- end preview code-->
                    </div> <!-- end tab-content-->
                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Headings</h4>
                    <p class="text-muted font-14">All HTML headings, <code>&lt;h1&gt;</code> through
                        <code>&lt;h6&gt;</code>, are available. <code>.h1</code> through <code>.h6</code>
                        classes are also available, for when you want to match the font styling of a heading
                        but still want your text to be displayed inline.
                    </p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#headings-preview" data-bs-toggle="tab" aria-expanded="false"
                               class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#headings-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="headings-preview">
                            <h1>This is a Heading 1</h1>
                            <p class="text-muted">Suspendisse vel quam malesuada, aliquet sem sit
                                amet, fringilla elit. Morbi
                                tempor tincidunt tempor. Etiam id turpis viverra, vulputate sapien
                                nec,
                                varius sem. Curabitur ullamcorper fringilla eleifend. In ut eros
                                hendrerit
                                est consequat posuere et at velit.</p>

                            <div class="clearfix"></div>

                            <h2>This is a Heading 2</h2>
                            <p class="text-muted">In nec rhoncus eros. Vestibulum eu mattis nisl.
                                Quisque viverra viverra magna
                                nec pulvinar. Maecenas pellentesque porta augue, consectetur
                                facilisis diam
                                porttitor sed. Suspendisse tempor est sodales augue rutrum
                                tincidunt.
                                Quisque a malesuada purus.</p>

                            <div class="clearfix"></div>

                            <h3>This is a Heading 3</h3>
                            <p class="text-muted">Vestibulum auctor tincidunt semper. Phasellus ut
                                vulputate lacus. Suspendisse
                                ultricies mi eros, sit amet tempor nulla varius sed. Proin nisl
                                nisi,
                                feugiat quis bibendum vitae, dapibus in tellus.</p>

                            <div class="clearfix"></div>

                            <h4>This is a Heading 4</h4>
                            <p class="text-muted">Nulla et mattis nunc. Curabitur scelerisque
                                commodo condimentum. Mauris
                                blandit, velit a consectetur egestas, diam arcu fermentum justo,
                                eget
                                ultrices arcu eros vel erat.</p>

                            <div class="clearfix"></div>

                            <h5>This is a Heading 5</h5>
                            <p class="text-muted">Quisque nec turpis at urna dictum luctus.
                                Suspendisse convallis dignissim
                                eros at volutpat. In egestas mattis dui. Aliquam mattis dictum
                                aliquet.
                                Nulla sapien mauris, eleifend et sem ac, commodo dapibus odio.
                                Vivamus
                                pretium nec odio cursus elementum. Suspendisse molestie ullamcorper
                                ornare.</p>

                            <div class="clearfix"></div>

                            <h6>This is a Heading 6</h6>
                            <p class="text-muted mb-0">Donec ultricies, lacus id tempor condimentum, orci
                                leo faucibus sem, a
                                molestie libero lectus ac justo. ultricies mi eros, sit amet tempor
                                nulla
                                varius sed. Proin nisl nisi, feugiat quis bibendum vitae, dapibus in
                                tellus.</p>
                        </div> <!-- end preview-->

                        <div class="tab-pane code" id="headings-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;h1&gt;h1. Bootstrap heading&lt;/h1&gt;
                                                        &lt;h2&gt;h2. Bootstrap heading&lt;/h2&gt;
                                                        &lt;h3&gt;h3. Bootstrap heading&lt;/h3&gt;
                                                        &lt;h4&gt;h4. Bootstrap heading&lt;/h4&gt;
                                                        &lt;h5&gt;h5. Bootstrap heading&lt;/h5&gt;
                                                        &lt;h6&gt;h6. Bootstrap heading&lt;/h6&gt;

                                                        &lt;!-- .h1 through .h6 classes are also available, for when you want to match the font styling of a heading but cannot use the associated HTML element. --&gt;

                                                        &lt;p class=&quot;h1&quot;&gt;h1. Bootstrap heading&lt;/p&gt;
                                                        &lt;p class=&quot;h2&quot;&gt;h2. Bootstrap heading&lt;/p&gt;
                                                        &lt;p class=&quot;h3&quot;&gt;h3. Bootstrap heading&lt;/p&gt;
                                                        &lt;p class=&quot;h4&quot;&gt;h4. Bootstrap heading&lt;/p&gt;
                                                        &lt;p class=&quot;h5&quot;&gt;h5. Bootstrap heading&lt;/p&gt;
                                                        &lt;p class=&quot;h6&quot;&gt;h6. Bootstrap heading&lt;/p&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                        </div> <!-- end preview code-->
                    </div> <!-- end tab-content-->
                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Inline text elements</h4>
                    <p class="text-muted font-14">Styling for common inline HTML5 elements.</p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#inline-text-preview" data-bs-toggle="tab" aria-expanded="false"
                               class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#inline-text-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="inline-text-preview">
                            <p class="lead">
                                Your title goes here
                            </p>

                            <p>You can use the mark tag to
                                <mark>highlight</mark>
                                text.
                            </p>
                            <p>
                                <del>This line of text is meant to be treated as deleted text.</del>
                            </p>
                            <p><s>This line of text is meant to be treated as no longer accurate.</s></p>
                            <p>
                                <ins>This line of text is meant to be treated as an addition to the document.</ins>
                            </p>
                            <p><u>This line of text will render as underlined</u></p>
                            <p><small>This line of text is meant to be treated as fine print.</small></p>
                            <p><strong>This line rendered as bold text.</strong></p>
                            <p><em>This line rendered as italicized text.</em></p>
                            Nulla <abbr title="attribute">attr</abbr> vitae elit libero, a pharetra augue.
                        </div> <!-- end preview-->

                        <div class="tab-pane code" id="inline-text-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;p class=&quot;lead&quot;&gt;
                                                            Your title goes here
                                                        &lt;/p&gt;

                                                        &lt;p&gt;You can use the mark tag to &lt;mark&gt;highlight&lt;/mark&gt; text.&lt;/p&gt;
                                                        &lt;p&gt;&lt;del&gt;This line of text is meant to be treated as deleted text.&lt;/del&gt;&lt;/p&gt;
                                                        &lt;p&gt;&lt;s&gt;This line of text is meant to be treated as no longer accurate.&lt;/s&gt;&lt;/p&gt;
                                                        &lt;p&gt;&lt;ins&gt;This line of text is meant to be treated as an addition to the document.&lt;/ins&gt;&lt;/p&gt;
                                                        &lt;p&gt;&lt;u&gt;This line of text will render as underlined&lt;/u&gt;&lt;/p&gt;
                                                        &lt;p&gt;&lt;small&gt;This line of text is meant to be treated as fine print.&lt;/small&gt;&lt;/p&gt;
                                                        &lt;p&gt;&lt;strong&gt;This line rendered as bold text.&lt;/strong&gt;&lt;/p&gt;
                                                        &lt;p&gt;&lt;em&gt;This line rendered as italicized text.&lt;/em&gt;&lt;/p&gt;
                                                        Nulla &lt;abbr title=&quot;attribute&quot;&gt;attr&lt;/abbr&gt; vitae elit libero, a pharetra augue.
                                                    </span>
                                                </pre> <!-- end highlight-->
                        </div> <!-- end preview code-->
                    </div> <!-- end tab-content-->
                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->

    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Unordered</h4>
                    <p class="text-muted font-14">A list of items in which the order does not explicitly matter.</p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#unordered-preview" data-bs-toggle="tab" aria-expanded="false"
                               class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#unordered-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="unordered-preview">
                            <ul>
                                <li>
                                    Lorem ipsum dolor sit amet
                                </li>
                                <li>
                                    Consectetur adipiscing elit
                                </li>
                                <li>
                                    Integer molestie lorem at massa
                                </li>
                                <li>
                                    Facilisis in pretium nisl aliquet
                                </li>
                                <li>
                                    Nulla volutpat aliquam velit
                                    <ul>
                                        <li>
                                            Phasellus iaculis neque
                                        </li>
                                        <li>
                                            Purus sodales ultricies
                                        </li>
                                        <li>
                                            Vestibulum laoreet porttitor sem
                                        </li>
                                        <li>
                                            Ac tristique libero volutpat at
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    Faucibus porta lacus fringilla vel
                                </li>
                                <li>
                                    Aenean sit amet erat nunc
                                </li>
                                <li>
                                    Eget porttitor lorem
                                </li>
                            </ul>
                        </div> <!-- end preview-->

                        <div class="tab-pane code" id="unordered-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;ul&gt;
                                                            &lt;li&gt;
                                                                Lorem ipsum dolor sit amet
                                                            &lt;/li&gt;
                                                            &lt;li&gt;
                                                                Facilisis in pretium nisl aliquet
                                                            &lt;/li&gt;
                                                            &lt;li&gt;
                                                                Nulla volutpat aliquam velit
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;
                                                                        Phasellus iaculis neque
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        Purus sodales ultricies
                                                                    &lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/li&gt;
                                                            &lt;li&gt;
                                                                Faucibus porta lacus fringilla vel
                                                            &lt;/li&gt;
                                                            &lt;li&gt;
                                                                Eget porttitor lorem
                                                            &lt;/li&gt;
                                                        &lt;/ul&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                        </div> <!-- end preview code-->
                    </div> <!-- end tab-content-->
                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->

        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Ordered</h4>
                    <p class="text-muted font-14">A list of items in which the order does explicitly matter.</p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#ordered-preview" data-bs-toggle="tab" aria-expanded="false"
                               class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#ordered-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="ordered-preview">
                            <ol>
                                <li>
                                    Lorem ipsum dolor sit amet
                                </li>
                                <li>
                                    Consectetur adipiscing elit
                                </li>
                                <li>
                                    Integer molestie lorem at massa
                                </li>
                                <li>
                                    Facilisis in pretium nisl aliquet
                                </li>
                                <li>
                                    Nulla volutpat aliquam velit
                                    <ol>
                                        <li>
                                            Phasellus iaculis neque
                                        </li>
                                        <li>
                                            Purus sodales ultricies
                                        </li>
                                        <li>
                                            Vestibulum laoreet porttitor sem
                                        </li>
                                        <li>
                                            Ac tristique libero volutpat at
                                        </li>
                                    </ol>
                                </li>
                                <li>
                                    Faucibus porta lacus fringilla vel
                                </li>
                                <li>
                                    Aenean sit amet erat nunc
                                </li>
                                <li>
                                    Eget porttitor lorem
                                </li>
                            </ol>
                        </div> <!-- end preview-->

                        <div class="tab-pane code" id="ordered-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;ol&gt;
                                                            &lt;li&gt;
                                                                Lorem ipsum dolor sit amet
                                                            &lt;/li&gt;
                                                            &lt;li&gt;
                                                                Facilisis in pretium nisl aliquet
                                                            &lt;/li&gt;
                                                            &lt;li&gt;
                                                                Nulla volutpat aliquam velit
                                                                &lt;ol&gt;
                                                                    &lt;li&gt;
                                                                        Phasellus iaculis neque
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        Purus sodales ultricies
                                                                    &lt;/li&gt;
                                                                &lt;/ol&gt;
                                                            &lt;/li&gt;
                                                            &lt;li&gt;
                                                                Faucibus porta lacus fringilla vel
                                                            &lt;/li&gt;
                                                            &lt;li&gt;
                                                                Eget porttitor lorem
                                                            &lt;/li&gt;
                                                        &lt;/ol&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                        </div> <!-- end preview code-->
                    </div> <!-- end tab-content-->
                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->

        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Unstyled</h4>
                    <p class="text-muted font-14"><strong>This only applies to immediate children
                            list items</strong>, meaning you will need to add the class for any nested lists as well.
                    </p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#unstyled-preview" data-bs-toggle="tab" aria-expanded="false"
                               class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#unstyled-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="unstyled-preview">
                            <ul class="list-unstyled">
                                <li>
                                    Lorem ipsum dolor sit amet
                                </li>
                                <li>
                                    Integer molestie lorem at massa
                                    <ul>
                                        <li>
                                            Phasellus iaculis neque
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    Faucibus porta lacus fringilla vel
                                </li>
                                <li>
                                    Eget porttitor lorem
                                </li>
                            </ul>

                            <h5>Inline</h5>
                            <p class="text-muted m-b-15">
                                Place all list items on a single line with <code>
                                    display: inline-block;</code>
                                and some light padding.
                            </p>

                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    Lorem ipsum
                                </li>
                                <li class="list-inline-item">
                                    Phasellus iaculis
                                </li>
                                <li class="list-inline-item">
                                    Nulla volutpat
                                </li>
                            </ul>
                        </div> <!-- end preview-->

                        <div class="tab-pane code" id="unstyled-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;ul class=&quot;list-unstyled&quot;&gt;
                                                            &lt;li&gt;
                                                                Lorem ipsum dolor sit amet
                                                            &lt;/li&gt;
                                                            &lt;li&gt;
                                                                Integer molestie lorem at massa
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;
                                                                        Phasellus iaculis neque
                                                                    &lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/li&gt;
                                                            &lt;li&gt;
                                                                Faucibus porta lacus fringilla vel
                                                            &lt;/li&gt;
                                                            &lt;li&gt;
                                                                Eget porttitor lorem
                                                            &lt;/li&gt;
                                                        &lt;/ul&gt;

                                                        &lt;!-- Inline --&gt;

                                                        &lt;ul class=&quot;list-inline&quot;&gt;
                                                            &lt;li class=&quot;list-inline-item&quot;&gt;
                                                                Lorem ipsum
                                                            &lt;/li&gt;
                                                            &lt;li class=&quot;list-inline-item&quot;&gt;
                                                                Phasellus iaculis
                                                            &lt;/li&gt;
                                                            &lt;li class=&quot;list-inline-item&quot;&gt;
                                                                Nulla volutpat
                                                            &lt;/li&gt;
                                                        &lt;/ul&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                        </div> <!-- end preview code-->
                    </div> <!-- end tab-content-->
                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Blockquotes</h4>
                    <p class="text-muted font-14">For quoting blocks of content from another source within your
                        document.
                        Wrap <code>&lt;blockquote class="blockquote"&gt;</code> around any <abbr
                            title="HyperText Markup Language">HTML</abbr> as the quote.</p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#blockquotes-preview" data-bs-toggle="tab" aria-expanded="false"
                               class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#blockquotes-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="blockquotes-preview">
                            <blockquote class="blockquote">
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                    erat a ante.</p>
                            </blockquote>
                            <figcaption class="blockquote-footer">Someone famous in <cite title="Source Title">Source
                                    Title</cite></figcaption>

                            <p class="text-muted m-b-15">
                                Use text utilities as needed to change the alignment of your blockquote.
                            </p>

                            <blockquote class="blockquote text-center">
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                    erat a ante.</p>
                            </blockquote>
                            <figcaption class="blockquote-footer text-center">Someone famous in <cite
                                    title="Source Title">Source Title</cite></figcaption>

                            <blockquote class="blockquote text-end">
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                    erat a ante.</p>
                            </blockquote>
                            <figcaption class="blockquote-footer text-end">Someone famous in <cite
                                    title="Source Title">Source Title</cite></figcaption>
                        </div> <!-- end preview-->

                        <div class="tab-pane code" id="blockquotes-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;!-- Left --&gt;
                                                        &lt;blockquote class=&quot;blockquote&quot;&gt;
                                                            &lt;p class=&quot;mb-0&quot;&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.&lt;/p&gt;
                                                        &lt;/blockquote&gt;
                                                        &lt;figcaption class=&quot;blockquote-footer&quot;&gt;Someone famous in &lt;cite title=&quot;Source Title&quot;&gt;Source Title&lt;/cite&gt;&lt;/figcaption&gt;

                                                        &lt;!-- Center --&gt;
                                                        &lt;blockquote class=&quot;blockquote text-center&quot;&gt;
                                                            &lt;p class=&quot;mb-0&quot;&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.&lt;/p&gt;
                                                        &lt;/blockquote&gt;
                                                        &lt;figcaption class=&quot;blockquote-footer text-center&quot;&gt;Someone famous in &lt;cite title=&quot;Source Title&quot;&gt;Source Title&lt;/cite&gt;&lt;/figcaption&gt;

                                                        &lt;!-- Right --&gt;
                                                        &lt;blockquote class=&quot;blockquote text-end&quot;&gt;
                                                            &lt;p class=&quot;mb-0&quot;&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.&lt;/p&gt;
                                                        &lt;/blockquote&gt;
                                                        &lt;figcaption class=&quot;blockquote-footer text-end&quot;&gt;Someone famous in &lt;cite title=&quot;Source Title&quot;&gt;Source Title&lt;/cite&gt;&lt;/figcaption&gt;
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
                    <h4 class="header-title">Description list alignment</h4>
                    <p class="text-muted font-14">Align terms and descriptions horizontally by using our grid system’s
                        predefined classes (or semantic mixins). For longer terms, you can optionally add a
                        <code>.text-truncate</code> class to truncate the text with an ellipsis.</p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#description-list-preview" data-bs-toggle="tab" aria-expanded="false"
                               class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#description-list-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="description-list-preview">
                            <dl class="row mb-0">
                                <dt class="col-sm-3">Description lists</dt>
                                <dd class="col-sm-9">A description list is perfect for defining terms.</dd>

                                <dt class="col-sm-3">Euismod</dt>
                                <dd class="col-sm-9">
                                    <p>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec
                                        elit.</p>
                                    <p>Donec id elit non mi porta gravida at eget metus.</p>
                                </dd>

                                <dt class="col-sm-3">Malesuada porta</dt>
                                <dd class="col-sm-9">Etiam porta sem malesuada magna mollis euismod.</dd>

                                <dt class="col-sm-3 text-truncate">Truncated term is truncated</dt>
                                <dd class="col-sm-9">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum
                                    nibh, ut fermentum massa justo sit amet risus.
                                </dd>

                                <dt class="col-sm-3">Nesting</dt>
                                <dd class="col-sm-9">
                                    <dl class="row mb-0">
                                        <dt class="col-sm-4">Nested definition list</dt>
                                        <dd class="col-sm-8">Aenean posuere, tortor sed cursus feugiat, nunc augue
                                            blandit
                                            nunc.
                                        </dd>
                                    </dl>
                                </dd>
                            </dl>
                        </div> <!-- end preview-->

                        <div class="tab-pane code" id="description-list-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;dl class=&quot;row mb-0&quot;&gt;
                                                            &lt;dt class=&quot;col-sm-3&quot;&gt;Description lists&lt;/dt&gt;
                                                            &lt;dd class=&quot;col-sm-9&quot;&gt;A description list is perfect for defining terms.&lt;/dd&gt;

                                                            &lt;dt class=&quot;col-sm-3&quot;&gt;Euismod&lt;/dt&gt;
                                                            &lt;dd class=&quot;col-sm-9&quot;&gt;
                                                                &lt;p&gt;Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.&lt;/p&gt;
                                                                &lt;p&gt;Donec id elit non mi porta gravida at eget metus.&lt;/p&gt;
                                                            &lt;/dd&gt;

                                                            &lt;dt class=&quot;col-sm-3&quot;&gt;Malesuada porta&lt;/dt&gt;
                                                            &lt;dd class=&quot;col-sm-9&quot;&gt;Etiam porta sem malesuada magna mollis euismod.&lt;/dd&gt;

                                                            &lt;dt class=&quot;col-sm-3 text-truncate&quot;&gt;Truncated term is truncated&lt;/dt&gt;
                                                            &lt;dd class=&quot;col-sm-9&quot;&gt;Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.&lt;/dd&gt;

                                                            &lt;dt class=&quot;col-sm-3&quot;&gt;Nesting&lt;/dt&gt;
                                                            &lt;dd class=&quot;col-sm-9&quot;&gt;
                                                                &lt;dl class=&quot;row mb-0&quot;&gt;
                                                                    &lt;dt class=&quot;col-sm-4&quot;&gt;Nested definition list&lt;/dt&gt;
                                                                    &lt;dd class=&quot;col-sm-8&quot;&gt;Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc.&lt;/dd&gt;
                                                                &lt;/dl&gt;
                                                            &lt;/dd&gt;
                                                        &lt;/dl&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                        </div> <!-- end preview code-->
                    </div> <!-- end tab-content-->
                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
    <!-- end row -->
@endsection
@section('script-bottom')
    @vite(['resources/js/hyper-syntax.js'])
@endsection
