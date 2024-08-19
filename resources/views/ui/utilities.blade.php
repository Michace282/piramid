@extends('layouts.vertical', ['title' => 'Utilities', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')
    @include('layouts.shared/page-title', ['sub_title' => 'Base UI', 'page_title' => 'Utilities'])

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Background Color</h4>
                    <p class="text-muted font-14">Similar to the contextual text color classes, set the background of an
                        element to any contextual class. Background
                        utilities <strong>do not set <code>color</code></strong>, so in some cases you’ll want to use
                        <code>.text-*</code>color utilities.</p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#bg-utilities-preview" data-bs-toggle="tab" aria-expanded="false"
                               class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#bg-utilities-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="bg-utilities-preview">
                            <div class="bg-primary text-white p-2 mb-2">.bg-primary</div>
                            <div class="bg-secondary text-white p-2 mb-2">.bg-secondary</div>
                            <div class="bg-success text-white p-2 mb-2">.bg-success</div>
                            <div class="bg-danger text-white p-2 mb-2">.bg-danger</div>
                            <div class="bg-warning text-dark p-2 mb-2">.bg-warning</div>
                            <div class="bg-info text-dark p-2 mb-2">.bg-info</div>
                            <div class="bg-light text-dark p-2 mb-2">.bg-light</div>
                            <div class="bg-dark p-2 mb-2">.bg-dark</div>
                            <div class="bg-body text-dark p-2 mb-2">.bg-body</div>
                            <div class="bg-body-secondary text-dark p-2 mb-2">.bg-body-secondary</div>
                            <div class="bg-body-tertiary text-dark p-2 mb-2">.bg-body-tertiary</div>
                            <div class="bg-white p-2 mb-2">.bg-white</div>
                            <div class="bg-black text-white p-2 mb-2">.bg-black</div>
                            <div class="bg-transparent text-dark p-2">.bg-transparent</div>
                        </div> <!-- end preview-->

                        <div class="tab-pane code" id="bg-utilities-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;div class=&quot;bg-primary text-white p-2 mb-2&quot;&gt;.bg-primary&lt;/div&gt;
                                                        &lt;div class=&quot;bg-secondary text-white p-2 mb-2&quot;&gt;.bg-secondary&lt;/div&gt;
                                                        &lt;div class=&quot;bg-success text-white p-2 mb-2&quot;&gt;.bg-success&lt;/div&gt;
                                                        &lt;div class=&quot;bg-danger text-white p-2 mb-2&quot;&gt;.bg-danger&lt;/div&gt;
                                                        &lt;div class=&quot;bg-warning text-dark p-2 mb-2&quot;&gt;.bg-warning&lt;/div&gt;
                                                        &lt;div class=&quot;bg-info text-dark p-2 mb-2&quot;&gt;.bg-info&lt;/div&gt;
                                                        &lt;div class=&quot;bg-light text-dark p-2 mb-2&quot;&gt;.bg-light&lt;/div&gt;
                                                        &lt;div class=&quot;bg-dark p-2 mb-2&quot;&gt;.bg-dark&lt;/div&gt;
                                                        &lt;div class=&quot;bg-body text-dark p-2 mb-2&quot;&gt;.bg-body&lt;/div&gt;
                                                        &lt;div class=&quot;bg-body-secondary text-dark p-2 mb-2&quot;&gt;.bg-body-secondary&lt;/div&gt;
                                                        &lt;div class=&quot;bg-body-tertiary text-dark p-2 mb-2&quot;&gt;.bg-body-tertiary&lt;/div&gt;
                                                        &lt;div class=&quot;bg-white p-2 mb-2&quot;&gt;.bg-white&lt;/div&gt;
                                                        &lt;div class=&quot;bg-black p-2 mb-2&quot;&gt;.bg-black&lt;/div&gt;
                                                        &lt;div class=&quot;bg-transparent text-dark p-2&quot;&gt;.bg-transparent&lt;/div&gt;
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
                    <h4 class="header-title">Background Gradient Color</h4>
                    <p class="text-muted font-14">By adding a <code>.bg-gradient</code> class, a linear gradient is
                        added as
                        background image to the backgrounds. This
                        gradient starts with a semi-transparent white which fades out to the bottom.</p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#bg-gradient-utilities-preview" data-bs-toggle="tab" aria-expanded="false"
                               class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#bg-gradient-utilities-code" data-bs-toggle="tab" aria-expanded="true"
                               class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul><!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="bg-gradient-utilities-preview">
                            <div class="p-2 mb-2 bg-primary bg-gradient text-white">.bg-gradient.bg-primary</div>
                            <div class="p-2 mb-2 bg-secondary bg-gradient text-white">.bg-secondary.bg-gradient</div>
                            <div class="p-2 mb-2 bg-success bg-gradient text-white">.bg-success.bg-gradient</div>
                            <div class="p-2 mb-2 bg-danger bg-gradient text-white">.bg-danger.bg-gradient</div>
                            <div class="p-2 mb-2 bg-warning bg-gradient text-dark">.bg-warning.bg-gradient</div>
                            <div class="p-2 mb-2 bg-info bg-gradient text-dark">.bg-info.bg-gradient</div>
                            <div class="p-2 mb-2 bg-light bg-gradient text-dark">.bg-light.bg-gradient</div>
                            <div class="p-2 mb-2 bg-dark bg-gradient text-white">.bg-dark.bg-gradient</div>
                            <div class="p-2 mb-2 bg-black bg-gradient text-white">.bg-black.bg-gradient</div>
                        </div><!-- end preview-->

                        <div class="tab-pane code" id="bg-gradient-utilities-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;div class=&quot;p-2 mb-2 bg-primary bg-gradient text-white&quot;&gt;.bg-primary.bg-gradient&lt;/div&gt;
                                                        &lt;div class=&quot;p-2 mb-2 bg-secondary bg-gradient text-white&quot;&gt;.bg-secondary.bg-gradient&lt;/div&gt;
                                                        &lt;div class=&quot;p-2 mb-2 bg-success bg-gradient text-white&quot;&gt;.bg-success.bg-gradient&lt;/div&gt;
                                                        &lt;div class=&quot;p-2 mb-2 bg-danger bg-gradient text-white&quot;&gt;.bg-danger.bg-gradient&lt;/div&gt;
                                                        &lt;div class=&quot;p-2 mb-2 bg-warning bg-gradient text-dark&quot;&gt;.bg-warning.bg-gradient&lt;/div&gt;
                                                        &lt;div class=&quot;p-2 mb-2 bg-info bg-gradient text-dark&quot;&gt;.bg-info.bg-gradient&lt;/div&gt;
                                                        &lt;div class=&quot;p-2 mb-2 bg-light bg-gradient text-dark&quot;&gt;.bg-light.bg-gradient&lt;/div&gt;
                                                        &lt;div class=&quot;p-2 mb-2 bg-dark bg-gradient text-white&quot;&gt;.bg-dark.bg-gradient&lt;/div&gt;
                                                        &lt;div class=&quot;p-2 mb-2 bg-black bg-gradient text-white&quot;&gt;.bg-black.bg-gradient&lt;/div&gt;
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
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Soft background</h4>
                    <p class="text-muted font-14">Similar to the contextual text color classes, set the background of an
                        element to any contextual class. Background utilities do not set <code>color</code>, so in some
                        cases you’ll want to use <code>.text-*</code> <a
                            href="https://getbootstrap.com/docs/5.3/utilities/colors/">color utilities</a>.</p>
                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#bg-color-utilities-preview" data-bs-toggle="tab" aria-expanded="false"
                               class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#bg-color-utilities-code" data-bs-toggle="tab" aria-expanded="true"
                               class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="bg-color-utilities-preview">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="d-flex flex-column gap-2">
                                        <div class="bg-primary-subtle p-2"><code
                                                class="text-primary-emphasis">.bg-primary-subtle</code></div>
                                        <div class="bg-secondary-subtle p-2"><code
                                                class="text-secondary-emphasis">.bg-secondary-subtle </code></div>
                                        <div class="bg-success-subtle p-2"><code
                                                class="text-success-emphasis">.bg-success-subtle</code></div>
                                        <div class="bg-danger-subtle p-2"><code
                                                class="text-danger-emphasis">.bg-danger-subtle</code></div>
                                        <div class="bg-warning-subtle p-2"><code
                                                class="text-warning-emphasis">.bg-warning-subtle</code></div>
                                        <div class="bg-info-subtle p-2"><code
                                                class="text-info-emphasis">.bg-info-subtle</code></div>
                                        <div class="bg-light-subtle p-2"><code
                                                class="text-light-emphasis">.bg-light-subtle</code></div>
                                        <div class="bg-dark-subtle p-2"><code
                                                class="text-dark-emphasis">.bg-dark-subtle</code></div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="d-flex flex-column gap-2">
                                        <div class="bg-primary-lighten p-2"><code
                                                class="text-primary-emphasis">.bg-primary-lighten</code></div>
                                        <div class="bg-secondary-lighten p-2"><code
                                                class="text-secondary-emphasis">.bg-secondary-lighten </code></div>
                                        <div class="bg-success-lighten p-2"><code
                                                class="text-success-emphasis">.bg-success-lighten</code></div>
                                        <div class="bg-danger-lighten p-2"><code
                                                class="text-danger-emphasis">.bg-danger-lighten</code></div>
                                        <div class="bg-warning-lighten p-2"><code
                                                class="text-warning-emphasis">.bg-warning-lighten</code></div>
                                        <div class="bg-info-lighten p-2"><code
                                                class="text-info-emphasis">.bg-info-lighten</code></div>
                                        <div class="bg-light-lighten p-2"><code
                                                class="text-light-emphasis">.bg-light-lighten</code></div>
                                        <div class="bg-dark-lighten p-2"><code
                                                class="text-dark-emphasis">.bg-dark-lighten</code></div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end preview-->

                        <div class="tab-pane code" id="bg-color-utilities-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;div class=&quot;row&quot;&gt;
                                                            &lt;div class=&quot;col-lg-6&quot;&gt;
                                                                &lt;div class=&quot;d-flex flex-column gap-2&quot;&gt;
                                                                    &lt;div class=&quot;bg-primary-subtle p-2&quot;&gt;&lt;code class=&quot;text-primary-emphasis&quot;&gt;.text-primary-subtle&lt;/code&gt;&lt;/div&gt;
                                                                    &lt;div class=&quot;bg-secondary-subtle p-2&quot;&gt;&lt;code class=&quot;text-secondary-emphasis&quot;&gt;.bg-secondary-subtle &lt;/code&gt;&lt;/div&gt;
                                                                    &lt;div class=&quot;bg-success-subtle p-2&quot;&gt;&lt;code class=&quot;text-success-emphasis&quot;&gt;.bg-success-subtle&lt;/code&gt;&lt;/div&gt;
                                                                    &lt;div class=&quot;bg-danger-subtle p-2&quot;&gt;&lt;code class=&quot;text-danger-emphasis&quot;&gt;.bg-danger-subtle&lt;/code&gt;&lt;/div&gt;
                                                                    &lt;div class=&quot;bg-warning-subtle p-2&quot;&gt;&lt;code class=&quot;text-warning-emphasis&quot;&gt;.bg-warning-subtle&lt;/code&gt;&lt;/div&gt;
                                                                    &lt;div class=&quot;bg-info-subtle p-2&quot;&gt;&lt;code class=&quot;text-info-emphasis&quot;&gt;.bg-info-subtle&lt;/code&gt;&lt;/div&gt;
                                                                    &lt;div class=&quot;bg-light-subtle p-2&quot;&gt;&lt;code class=&quot;text-light-emphasis&quot;&gt;.bg-light-subtle&lt;/code&gt;&lt;/div&gt;
                                                                    &lt;div class=&quot;bg-dark-subtle p-2&quot;&gt;&lt;code class=&quot;text-dark-emphasis&quot;&gt;.bg-dark-subtle&lt;/code&gt;&lt;/div&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;

                                                            &lt;div class=&quot;col-lg-6&quot;&gt;
                                                                &lt;div class=&quot;d-flex flex-column gap-2&quot;&gt;
                                                                    &lt;div class=&quot;bg-primary-lighten p-2&quot;&gt;&lt;code class=&quot;text-primary-emphasis&quot;&gt;.text-primary-lighten&lt;/code&gt;&lt;/div&gt;
                                                                    &lt;div class=&quot;bg-secondary-lighten p-2&quot;&gt;&lt;code class=&quot;text-secondary-emphasis&quot;&gt;.bg-secondary-lighten &lt;/code&gt;&lt;/div&gt;
                                                                    &lt;div class=&quot;bg-success-lighten p-2&quot;&gt;&lt;code class=&quot;text-success-emphasis&quot;&gt;.bg-success-lighten&lt;/code&gt;&lt;/div&gt;
                                                                    &lt;div class=&quot;bg-danger-lighten p-2&quot;&gt;&lt;code class=&quot;text-danger-emphasis&quot;&gt;.bg-danger-lighten&lt;/code&gt;&lt;/div&gt;
                                                                    &lt;div class=&quot;bg-warning-lighten p-2&quot;&gt;&lt;code class=&quot;text-warning-emphasis&quot;&gt;.bg-warning-lighten&lt;/code&gt;&lt;/div&gt;
                                                                    &lt;div class=&quot;bg-info-lighten p-2&quot;&gt;&lt;code class=&quot;text-info-emphasis&quot;&gt;.bg-info-lighten&lt;/code&gt;&lt;/div&gt;
                                                                    &lt;div class=&quot;bg-light-lighten p-2&quot;&gt;&lt;code class=&quot;text-light-emphasis&quot;&gt;.bg-light-lighten&lt;/code&gt;&lt;/div&gt;
                                                                    &lt;div class=&quot;bg-dark-lighten p-2&quot;&gt;&lt;code class=&quot;text-dark-emphasis&quot;&gt;.bg-dark-lighten&lt;/code&gt;&lt;/div&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                        </div> <!-- end preview code-->
                    </div> <!-- end tab-content-->
                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Color & background</h4>
                    <p class="text-muted font-14">Color and background helpers combine the power of our
                        <code>.text-*</code> utilities and <code>.bg-*</code> utilities in one class. Using our Sass
                        <code>color-contrast()</code> function, we automatically determine a contrasting
                        <code>color</code>
                        for a particular <code>background-color</code>.</p>
                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#bg-color-utilities-preview" data-bs-toggle="tab" aria-expanded="false"
                               class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#bg-color-utilities-code" data-bs-toggle="tab" aria-expanded="true"
                               class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="bg-color-utilities-preview">
                            <div class="d-flex flex-column gap-2">
                                <div class="text-bg-primary p-2">Primary with contrasting color (.text-bg-primary)</div>
                                <div class="text-bg-secondary p-2">Secondary with contrasting color (.text-bg-secondary)
                                </div>
                                <div class="text-bg-success p-2">Success with contrasting color (.text-bg-success)</div>
                                <div class="text-bg-danger p-2">Danger with contrasting color (.text-bg-danger)</div>
                                <div class="text-bg-warning p-2">Warning with contrasting color (.text-bg-warning)</div>
                                <div class="text-bg-info p-2">Info with contrasting color (.text-bg-info)</div>
                                <div class="text-bg-light p-2">Light with contrasting color (.text-bg-light)</div>
                                <div class="text-bg-dark p-2">Dark with contrasting color (.text-bg-dark)</div>
                            </div>
                        </div> <!-- end preview-->

                        <div class="tab-pane code" id="bg-color-utilities-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;div class=&quot;d-flex flex-column gap-2&quot;&gt;
                                                            &lt;div class=&quot;text-bg-primary p-2&quot;&gt;Primary with contrasting color&lt;/div&gt;
                                                            &lt;div class=&quot;text-bg-secondary p-2&quot;&gt;Secondary with contrasting color&lt;/div&gt;
                                                            &lt;div class=&quot;text-bg-success p-2&quot;&gt;Success with contrasting color&lt;/div&gt;
                                                            &lt;div class=&quot;text-bg-danger p-2&quot;&gt;Danger with contrasting color&lt;/div&gt;
                                                            &lt;div class=&quot;text-bg-warning p-2&quot;&gt;Warning with contrasting color&lt;/div&gt;
                                                            &lt;div class=&quot;text-bg-info p-2&quot;&gt;Info with contrasting color&lt;/div&gt;
                                                            &lt;div class=&quot;text-bg-light p-2&quot;&gt;Light with contrasting color&lt;/div&gt;
                                                            &lt;div class=&quot;text-bg-dark p-2&quot;&gt;Dark with contrasting color&lt;/div&gt;
                                                        &lt;/div&gt;
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
                    <h4 class="header-title">Colored links</h4>
                    <p class="text-muted font-14">You can use the <code>.link-*</code> classes to colorize links. Unlike
                        the <code>.text-*</code> classes, these classes have a <code>:hover</code> and
                        <code>:focus</code>
                        state.</p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#link-color-utilities-preview" data-bs-toggle="tab" aria-expanded="false"
                               class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#link-color-utilities-code" data-bs-toggle="tab" aria-expanded="true"
                               class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="link-color-utilities-preview">
                            <div class="d-flex flex-column gap-2">
                                <a href="#" class="link-primary">Primary link</a>
                                <a href="#" class="link-secondary">Secondary link</a>
                                <a href="#" class="link-success">Success link</a>
                                <a href="#" class="link-danger">Danger link</a>
                                <a href="#" class="link-warning">Warning link</a>
                                <a href="#" class="link-info">Info link</a>
                                <a href="#" class="link-light">Light link</a>
                                <a href="#" class="link-dark">Dark link</a>
                            </div>
                        </div> <!-- end preview-->

                        <div class="tab-pane code" id="link-color-utilities-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;a href=&quot;#&quot; class=&quot;link-primary&quot;&gt;Primary link&lt;/a&gt;
                                                        &lt;a href=&quot;#&quot; class=&quot;link-secondary&quot;&gt;Secondary link&lt;/a&gt;
                                                        &lt;a href=&quot;#&quot; class=&quot;link-success&quot;&gt;Success link&lt;/a&gt;
                                                        &lt;a href=&quot;#&quot; class=&quot;link-danger&quot;&gt;Danger link&lt;/a&gt;
                                                        &lt;a href=&quot;#&quot; class=&quot;link-warning&quot;&gt;Warning link&lt;/a&gt;
                                                        &lt;a href=&quot;#&quot; class=&quot;link-info&quot;&gt;Info link&lt;/a&gt;
                                                        &lt;a href=&quot;#&quot; class=&quot;link-light&quot;&gt;Light link&lt;/a&gt;
                                                        &lt;a href=&quot;#&quot; class=&quot;link-dark&quot;&gt;Dark link&lt;/a&gt;
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
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Background Opacity</h4>
                    <p class="text-muted font-14"><code>background-color</code> utilities are generated with Sass using
                        CSS
                        variables. This
                        allows for real-time color changes without compilation and dynamic alpha transparency changes.
                    </p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#bg-opacity-utilities-preview" data-bs-toggle="tab" aria-expanded="false"
                               class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#bg-opacity-utilities-code" data-bs-toggle="tab" aria-expanded="true"
                               class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="bg-opacity-utilities-preview">
                            <div class="bg-primary p-2 text-white">This is default primary background</div>
                            <div class="bg-primary p-2 text-white bg-opacity-75">This is 75% opacity primary background
                            </div>
                            <div class="bg-primary p-2 text-dark bg-opacity-50">This is 50% opacity primary background
                            </div>
                            <div class="bg-primary p-2 text-dark bg-opacity-25">This is 25% opacity primary background
                            </div>
                            <div class="bg-primary p-2 text-dark bg-opacity-10">This is 10% opacity success background
                            </div>
                        </div> <!-- end preview-->

                        <div class="tab-pane code" id="bg-opacity-utilities-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;div class=&quot;bg-primary p-2 text-white&quot;&gt;This is default primary background&lt;/div&gt;
                                                        &lt;div class=&quot;bg-primary p-2 text-white bg-opacity-75&quot;&gt;This is 75% opacity primary background&lt;/div&gt;
                                                        &lt;div class=&quot;bg-primary p-2 text-dark bg-opacity-50&quot;&gt;This is 50% opacity primary background&lt;/div&gt;
                                                        &lt;div class=&quot;bg-primary p-2 text-dark bg-opacity-25&quot;&gt;This is 25% opacity primary background&lt;/div&gt;
                                                        &lt;div class=&quot;bg-primary p-2 text-dark bg-opacity-10&quot;&gt;This is 10% opacity success background&lt;/div&gt;
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
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Text Color</h4>
                    <p class="text-muted font-14">Colorize text with color utilities. If you want to colorize links, you
                        can use the <code>.link-*</code> helper classes which have <code>:hover</code>
                        and <code>:focus</code> states.</p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#textcolor-utilities-preview" data-bs-toggle="tab" aria-expanded="false"
                               class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#textcolor-utilities-code" data-bs-toggle="tab" aria-expanded="true"
                               class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="textcolor-utilities-preview">
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="text-primary">.text-primary</p>
                                    <p class="text-primary-emphasis">.text-primary-emphasis</p>
                                    <p class="text-secondary">.text-secondary</p>
                                    <p class="text-secondary-emphasis">.text-secondary-emphasis</p>
                                    <p class="text-success">.text-success</p>
                                    <p class="text-success-emphasis">.text-success-emphasis</p>
                                    <p class="text-danger">.text-danger</p>
                                    <p class="text-danger-emphasis">.text-danger-emphasis</p>
                                    <p class="text-warning">.text-warning</p>
                                    <p class="text-warning-emphasis">.text-warning-emphasis</p>
                                    <p class="text-info">.text-info</p>
                                    <p class="text-info-emphasis">.text-info-emphasis</p>
                                    <p class="text-light bg-dark">.text-light</p>
                                    <p class="text-light-emphasis">.text-light-emphasis</p>
                                </div>
                                <div class="col-md-6">
                                    <p class="text-dark">.text-dark</p>
                                    <p class="text-dark-emphasis">.text-dark-emphasis</p>
                                    <p class="text-muted">.text-muted</p>
                                    <p class="text-body">.text-body</p>
                                    <p class="text-body-emphasis">.text-body-emphasis</p>
                                    <p class="text-body-secondary">.text-body-secondary</p>
                                    <p class="text-body-tertiary">.text-body-tertiary</p>
                                    <p class="text-black">.text-black</p>
                                    <p class="text-white bg-dark">.text-white</p>
                                    <p class="text-black-50">.text-black-50</p>
                                    <p class="text-white-50 bg-dark">.text-white-50</p>
                                </div>
                            </div>
                        </div> <!-- end preview-->

                        <div class="tab-pane code" id="textcolor-utilities-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;p class=&quot;text-primary&quot;&gt;.text-primary&lt;/p&gt;
                                                        &lt;p class=&quot;text-primary-emphasis&quot;&gt;.text-primary-emphasis&lt;/p&gt;
                                                        &lt;p class=&quot;text-secondary&quot;&gt;.text-secondary&lt;/p&gt;
                                                        &lt;p class=&quot;text-secondary-emphasis&quot;&gt;.text-secondary-emphasis&lt;/p&gt;
                                                        &lt;p class=&quot;text-success&quot;&gt;.text-success&lt;/p&gt;
                                                        &lt;p class=&quot;text-success-emphasis&quot;&gt;.text-success-emphasis&lt;/p&gt;
                                                        &lt;p class=&quot;text-danger&quot;&gt;.text-danger&lt;/p&gt;
                                                        &lt;p class=&quot;text-danger-emphasis&quot;&gt;.text-danger-emphasis&lt;/p&gt;
                                                        &lt;p class=&quot;text-warning&quot;&gt;.text-warning&lt;/p&gt;
                                                        &lt;p class=&quot;text-warning-emphasis&quot;&gt;.text-warning-emphasis&lt;/p&gt;
                                                        &lt;p class=&quot;text-info&quot;&gt;.text-info&lt;/p&gt;
                                                        &lt;p class=&quot;text-info-emphasis&quot;&gt;.text-info-emphasis&lt;/p&gt;
                                                        &lt;p class=&quot;text-light bg-dark&quot;&gt;.text-light&lt;/p&gt;
                                                        &lt;p class=&quot;text-light-emphasis&quot;&gt;.text-light-emphasis&lt;/p&gt;
                                                        &lt;p class=&quot;text-dark&quot;&gt;.text-dark&lt;/p&gt;
                                                        &lt;p class=&quot;text-dark-emphasis&quot;&gt;.text-dark-emphasis&lt;/p&gt;
                                                        &lt;p class=&quot;text-muted&quot;&gt;.text-muted&lt;/p&gt;
                                                        &lt;p class=&quot;text-body&quot;&gt;.text-body&lt;/p&gt;
                                                        &lt;p class=&quot;text-body-emphasis&quot;&gt;.text-body-emphasis&lt;/p&gt;
                                                        &lt;p class=&quot;text-body-secondary&quot;&gt;.text-body-secondary&lt;/p&gt;
                                                        &lt;p class=&quot;text-body-tertiary&quot;&gt;.text-body-tertiary&lt;/p&gt;
                                                        &lt;p class=&quot;text-black&quot;&gt;.text-black&lt;/p&gt;
                                                        &lt;p class=&quot;text-white bg-dark&quot;&gt;.text-white&lt;/p&gt;
                                                        &lt;p class=&quot;text-black-50&quot;&gt;.text-black-50&lt;/p&gt;
                                                        &lt;p class=&quot;text-white-50 bg-dark&quot;&gt;.text-white-50&lt;/p&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                        </div> <!-- end preview code-->
                    </div> <!-- end tab-content-->
                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div> <!-- end row -->

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Text Opacity Color</h4>
                    <p class="text-muted font-14">text color utilities are generated with Sass using CSS variables. This
                        allows for real-time color
                        changes without compilation and dynamic alpha transparency changes.</p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#textopacity-utilities-preview" data-bs-toggle="tab" aria-expanded="false"
                               class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#textopacity-utilities-code" data-bs-toggle="tab" aria-expanded="true"
                               class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="textopacity-utilities-preview">
                            <div class="text-primary">This is default primary text</div>
                            <div class="text-primary text-opacity-75">This is 75% opacity primary text</div>
                            <div class="text-primary text-opacity-50">This is 50% opacity primary text</div>
                            <div class="text-primary text-opacity-25">This is 25% opacity primary text</div>
                        </div> <!-- end preview-->

                        <div class="tab-pane code" id="textopacity-utilities-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;div class=&quot;text-primary&quot;&gt;This is default primary text&lt;/div&gt;
                                                        &lt;div class=&quot;text-primary text-opacity-75&quot;&gt;This is 75% opacity primary text&lt;/div&gt;
                                                        &lt;div class=&quot;text-primary text-opacity-50&quot;&gt;This is 50% opacity primary text&lt;/div&gt;
                                                        &lt;div class=&quot;text-primary text-opacity-25&quot;&gt;This is 25% opacity primary text&lt;/div&gt;
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
                    <h4 class="header-title">Opacity</h4>
                    <p class="text-muted font-14">The <code>opacity</code> property sets the opacity level for an
                        element.
                        The opacity level describes the transparency
                        level, where <code>1</code> is not transparent at all, <code>.5</code> is 50% visible, and
                        <code>0</code> is
                        completely transparent. Set the <code>opacity</code> of an element using
                        <code>.opacity-{value}</code> utilities.</p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#opacity-utilities-preview" data-bs-toggle="tab" aria-expanded="false"
                               class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#opacity-utilities-code" data-bs-toggle="tab" aria-expanded="true"
                               class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="opacity-utilities-preview">
                            <div class="d-flex flex-wrap gap-2">
                                <div class="opacity-100 p-2 bg-primary text-light fw-bold rounded">100%</div>
                                <div class="opacity-75 p-2 bg-primary text-light fw-bold rounded">75%</div>
                                <div class="opacity-50 p-2 bg-primary text-light fw-bold rounded">50%</div>
                                <div class="opacity-25 p-2 bg-primary text-light fw-bold rounded">25%</div>
                            </div>
                        </div> <!-- end preview-->

                        <div class="tab-pane code" id="opacity-utilities-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;div class=&quot;opacity-100 p-2 bg-primary text-light fw-bold rounded&quot;&gt;100%&lt;/div&gt;
                                                        &lt;div class=&quot;opacity-75 p-2 bg-primary text-light fw-bold rounded&quot;&gt;75%&lt;/div&gt;
                                                        &lt;div class=&quot;opacity-50 p-2 bg-primary text-light fw-bold rounded&quot;&gt;50%&lt;/div&gt;
                                                        &lt;div class=&quot;opacity-25 p-2 bg-primary text-light fw-bold rounded&quot;&gt;25%&lt;/div&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                        </div> <!-- end preview code-->
                    </div> <!-- end tab-content-->
                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Additive(Add) Border</h4>
                    <p class="text-muted font-14">Use border utilities to <b>add</b> an element’s borders. Choose from
                        all
                        borders or one at a time.</p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#border-utilities-preview" data-bs-toggle="tab" aria-expanded="false"
                               class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#border-utilities-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="border-utilities-preview">
                            <div class="d-flex align-items-start flex-wrap gap-4">
                                <div class="text-center">
                                    <div class="border avatar-md bg-light bg-opacity-50"></div>
                                </div>
                                <div class="text-center">
                                    <div class="border-top avatar-md bg-light bg-opacity-50"></div>
                                </div>
                                <div class="text-center">
                                    <div class="border-end avatar-md bg-light bg-opacity-50"></div>
                                </div>
                                <div class="text-center">
                                    <div class="border-bottom avatar-md bg-light bg-opacity-50"></div>
                                </div>
                                <div class="text-center">
                                    <div class="border-start avatar-md bg-light bg-opacity-50"></div>
                                </div>
                            </div>
                        </div> <!-- end preview-->

                        <div class="tab-pane code" id="border-utilities-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;span class=&quot;border&quot;&gt;&lt;/span&gt;
                                                        &lt;span class=&quot;border-top&quot;&gt;&lt;/span&gt;
                                                        &lt;span class=&quot;border-end&quot;&gt;&lt;/span&gt;
                                                        &lt;span class=&quot;border-bottom&quot;&gt;&lt;/span&gt;
                                                        &lt;span class=&quot;border-start&quot;&gt;&lt;/span&gt;
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
                    <h4 class="header-title">Subtractive(Remove) Border</h4>
                    <p class="text-muted font-14">Use border utilities to <b>remove</b> an element’s borders. Choose
                        from
                        all borders or one at a time.</p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#bordersubtractive-utilities-preview" data-bs-toggle="tab" aria-expanded="false"
                               class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#bordersubtractive-utilities-code" data-bs-toggle="tab" aria-expanded="true"
                               class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="bordersubtractive-utilities-preview">
                            <div class="d-flex align-items-start flex-wrap gap-4">
                                <div class="text-center">
                                    <div class="border border-0 avatar-md bg-light bg-opacity-50"></div>
                                </div>
                                <div class="text-center">
                                    <div class="border border-top-0 avatar-md bg-light bg-opacity-50"></div>
                                </div>
                                <div class="text-center">
                                    <div class="border border-end-0 avatar-md bg-light bg-opacity-50"></div>
                                </div>
                                <div class="text-center">
                                    <div class="border border-bottom-0 avatar-md bg-light bg-opacity-50"></div>
                                </div>
                                <div class="text-center">
                                    <div class="border border-start-0 avatar-md bg-light bg-opacity-50"></div>
                                </div>
                            </div>
                        </div> <!-- end preview-->

                        <div class="tab-pane code" id="bordersubtractive-utilities-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;span class=&quot;border border-0&quot;&gt;&lt;/span&gt;
                                                        &lt;span class=&quot;border border-top-0&quot;&gt;&lt;/span&gt;
                                                        &lt;span class=&quot;border border-end-0&quot;&gt;&lt;/span&gt;
                                                        &lt;span class=&quot;border border-bottom-0&quot;&gt;&lt;/span&gt;
                                                        &lt;span class=&quot;border border-start-0&quot;&gt;&lt;/span&gt;
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
                    <h4 class="header-title">Border Color</h4>
                    <p class="text-muted font-14">Change the border color using utilities built on our theme colors.</p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#bordercolor-utilities-preview" data-bs-toggle="tab" aria-expanded="false"
                               class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#bordercolor-utilities-code" data-bs-toggle="tab" aria-expanded="true"
                               class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="bordercolor-utilities-preview">
                            <div class="d-flex align-items-start flex-wrap gap-2">
                                <div class="text-center">
                                    <div class="border border-primary avatar-md bg-light bg-opacity-50"></div>
                                </div>
                                <div class="text-center">
                                    <div class="border border-secondary avatar-md bg-light bg-opacity-50"></div>
                                </div>
                                <div class="text-center">
                                    <div class="border border-success avatar-md bg-light bg-opacity-50"></div>
                                </div>
                                <div class="text-center">
                                    <div class="border border-danger avatar-md bg-light bg-opacity-50"></div>
                                </div>
                                <div class="text-center">
                                    <div class="border border-warning avatar-md bg-light bg-opacity-50"></div>
                                </div>
                                <div class="text-center">
                                    <div class="border border-info avatar-md bg-light bg-opacity-50"></div>
                                </div>
                                <div class="text-center">
                                    <div class="border border-light avatar-md"></div>
                                </div>
                                <div class="text-center">
                                    <div class="border border-dark avatar-md bg-light bg-opacity-50"></div>
                                </div>
                            </div>
                        </div> <!-- end preview-->

                        <div class="tab-pane code" id="bordercolor-utilities-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;span class=&quot;border border-primary&quot;&gt;&lt;/span&gt;
                                                        &lt;span class=&quot;border border-secondary&quot;&gt;&lt;/span&gt;
                                                        &lt;span class=&quot;border border-success&quot;&gt;&lt;/span&gt;
                                                        &lt;span class=&quot;border border-danger&quot;&gt;&lt;/span&gt;
                                                        &lt;span class=&quot;border border-warning&quot;&gt;&lt;/span&gt;
                                                        &lt;span class=&quot;border border-info&quot;&gt;&lt;/span&gt;
                                                        &lt;span class=&quot;border border-light&quot;&gt;&lt;/span&gt;
                                                        &lt;span class=&quot;border border-dark&quot;&gt;&lt;/span&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                        </div> <!-- end preview code-->
                    </div> <!-- end tab-content-->
                </div> <!-- end card-body -->
            </div> <!-- end card-->

            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Border Width Size</h4>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#borderwidth-utilities-preview" data-bs-toggle="tab" aria-expanded="false"
                               class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#borderwidth-utilities-code" data-bs-toggle="tab" aria-expanded="true"
                               class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="borderwidth-utilities-preview">
                            <div class="d-flex align-items-start flex-wrap gap-2">
                                <div class="text-center">
                                    <div class="border border-1 avatar-md bg-light bg-opacity-50"></div>
                                </div>
                                <div class="text-center">
                                    <div class="border border-2 avatar-md bg-light bg-opacity-50"></div>
                                </div>
                                <div class="text-center">
                                    <div class="border border-3 avatar-md bg-light bg-opacity-50"></div>
                                </div>
                                <div class="text-center">
                                    <div class="border border-4 avatar-md bg-light bg-opacity-50"></div>
                                </div>
                                <div class="text-center">
                                    <div class="border border-5 avatar-md bg-light bg-opacity-50"></div>
                                </div>
                            </div>
                        </div> <!-- end preview-->

                        <div class="tab-pane code" id="borderwidth-utilities-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;span class=&quot;border border-1&quot;&gt;&lt;/span&gt;
                                                        &lt;span class=&quot;border border-2&quot;&gt;&lt;/span&gt;
                                                        &lt;span class=&quot;border border-3&quot;&gt;&lt;/span&gt;
                                                        &lt;span class=&quot;border border-4&quot;&gt;&lt;/span&gt;
                                                        &lt;span class=&quot;border border-5&quot;&gt;&lt;/span&gt;
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
                    <h4 class="header-title">Border Opacity</h4>
                    <p class="text-muted font-14">choose from any of the <code>.border-opacity</code> utilities:</p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#borderopacity-utilities-preview" data-bs-toggle="tab" aria-expanded="false"
                               class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#borderopacity-utilities-code" data-bs-toggle="tab" aria-expanded="true"
                               class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="borderopacity-utilities-preview">
                            <div class="border border-success p-2 mb-2">This is default success border</div>
                            <div class="border border-success p-2 mb-2 border-opacity-75">This is 75% opacity success
                                border
                            </div>
                            <div class="border border-success p-2 mb-2 border-opacity-50">This is 50% opacity success
                                border
                            </div>
                            <div class="border border-success p-2 mb-2 border-opacity-25">This is 25% opacity success
                                border
                            </div>
                            <div class="border border-success p-2 border-opacity-10">This is 10% opacity success border
                            </div>
                        </div> <!-- end preview-->

                        <div class="tab-pane code" id="borderopacity-utilities-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;div class=&quot;bg-primary p-2 text-white&quot;&gt;This is default primary background&lt;/div&gt;
                                                        &lt;div class=&quot;bg-primary p-2 text-white bg-opacity-75&quot;&gt;This is 75% opacity primary background&lt;/div&gt;
                                                        &lt;div class=&quot;bg-primary p-2 text-dark bg-opacity-50&quot;&gt;This is 50% opacity primary background&lt;/div&gt;
                                                        &lt;div class=&quot;bg-primary p-2 text-dark bg-opacity-25&quot;&gt;This is 25% opacity primary background&lt;/div&gt;
                                                        &lt;div class=&quot;bg-primary p-2 text-dark bg-opacity-10&quot;&gt;This is 10% opacity success background&lt;/div&gt;
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
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Border subtle Color</h4>
                    <p class="text-muted font-14">Change the border color using utilities built on our theme colors.</p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#bordercolor-utilities-subtle-preview" data-bs-toggle="tab" aria-expanded="false"
                               class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#bordercolor-utilities-subtle-code" data-bs-toggle="tab" aria-expanded="true"
                               class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="bordercolor-utilities-subtle-preview">
                            <div class="d-flex align-items-start flex-wrap gap-2">
                                <div class="text-center">
                                    <div class="border border-primary-subtle avatar-md bg-light bg-opacity-50"></div>
                                </div>
                                <div class="text-center">
                                    <div class="border border-secondary-subtle avatar-md bg-light bg-opacity-50"></div>
                                </div>
                                <div class="text-center">
                                    <div class="border border-success-subtle avatar-md bg-light bg-opacity-50"></div>
                                </div>
                                <div class="text-center">
                                    <div class="border border-danger-subtle avatar-md bg-light bg-opacity-50"></div>
                                </div>
                                <div class="text-center">
                                    <div class="border border-warning-subtle avatar-md bg-light bg-opacity-50"></div>
                                </div>
                                <div class="text-center">
                                    <div class="border border-info-subtle avatar-md bg-light bg-opacity-50"></div>
                                </div>
                                <div class="text-center">
                                    <div class="border border-light-subtle avatar-md"></div>
                                </div>
                                <div class="text-center">
                                    <div class="border border-dark-subtle avatar-md bg-light bg-opacity-50"></div>
                                </div>
                            </div>
                        </div> <!-- end preview-->

                        <div class="tab-pane code" id="bordercolor-utilities-subtle-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;span class=&quot;border border-primary-subtle&quot;&gt;&lt;/span&gt;
                                                        &lt;span class=&quot;border border-secondary-subtle&quot;&gt;&lt;/span&gt;
                                                        &lt;span class=&quot;border border-success-subtle&quot;&gt;&lt;/span&gt;
                                                        &lt;span class=&quot;border border-danger-subtle&quot;&gt;&lt;/span&gt;
                                                        &lt;span class=&quot;border border-warning-subtle&quot;&gt;&lt;/span&gt;
                                                        &lt;span class=&quot;border border-info-subtle&quot;&gt;&lt;/span&gt;
                                                        &lt;span class=&quot;border border-light-subtle&quot;&gt;&lt;/span&gt;
                                                        &lt;span class=&quot;border border-dark-subtle&quot;&gt;&lt;/span&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                        </div> <!-- end preview code-->
                    </div> <!-- end tab-content-->
                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
    <!--end row-->

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Border Radius</h4>
                    <p class="text-muted font-14">Add classes to an element to easily round its corners.</p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#border-radius-utilities-preview" data-bs-toggle="tab" aria-expanded="false"
                               class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#border-radius-utilities-code" data-bs-toggle="tab" aria-expanded="true"
                               class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="border-radius-utilities-preview">
                            <div class="d-flex align-items-start flex-wrap gap-2">
                                <img src="/images/users/avatar-2.jpg" class="avatar-lg rounded" alt="rounded">
                                <img src="/images/users/avatar-2.jpg" class="avatar-lg rounded-top" alt="rounded-top">
                                <img src="/images/users/avatar-2.jpg" class="avatar-lg rounded-end" alt="rounded-end">
                                <img src="/images/users/avatar-2.jpg" class="avatar-lg rounded-bottom"
                                     alt="rounded-bottom">
                                <img src="/images/users/avatar-2.jpg" class="avatar-lg rounded-start"
                                     alt="rounded-start">
                                <img src="/images/users/avatar-2.jpg" class="avatar-lg rounded-circle"
                                     alt="rounded-circle">
                                <img src="/images/small/small-2.jpg" class="avatar-lg w-auto rounded-pill"
                                     alt="rounded-pill">
                            </div>
                        </div> <!-- end preview-->

                        <div class="tab-pane code" id="border-radius-utilities-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;img src=&quot;...&quot; class=&quot;rounded&quot; alt=&quot;...&quot;&gt;
                                                        &lt;img src=&quot;...&quot; class=&quot;rounded-top&quot; alt=&quot;...&quot;&gt;
                                                        &lt;img src=&quot;...&quot; class=&quot;rounded-end&quot; alt=&quot;...&quot;&gt;
                                                        &lt;img src=&quot;...&quot; class=&quot;rounded-bottom&quot; alt=&quot;...&quot;&gt;
                                                        &lt;img src=&quot;...&quot; class=&quot;rounded-start&quot; alt=&quot;...&quot;&gt;
                                                        &lt;img src=&quot;...&quot; class=&quot;rounded-circle&quot; alt=&quot;...&quot;&gt;
                                                        &lt;img src=&quot;...&quot; class=&quot;rounded-pill&quot; alt=&quot;...&quot;&gt;
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
                    <h4 class="header-title">Border Radius Size</h4>
                    <p class="text-muted font-14">Use the scaling classes for larger or smaller rounded corners. Sizes
                        range from <code>0</code> to <code>5</code>.</p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#border-radius-size-utilities-preview" data-bs-toggle="tab" aria-expanded="false"
                               class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#border-radius-size-utilities-code" data-bs-toggle="tab" aria-expanded="true"
                               class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="border-radius-size-utilities-preview">
                            <div class="d-flex align-items-start flex-wrap gap-2">
                                <img src="/images/users/avatar-4.jpg" class="avatar-lg rounded-0" alt="rounded-0">
                                <img src="/images/users/avatar-4.jpg" class="avatar-lg rounded-1" alt="rounded-1">
                                <img src="/images/users/avatar-4.jpg" class="avatar-lg rounded-2" alt="rounded-2">
                                <img src="/images/users/avatar-4.jpg" class="avatar-lg rounded-3" alt="rounded-3">
                                <img src="/images/users/avatar-4.jpg" class="avatar-lg rounded-4" alt="rounded-4">
                                <img src="/images/users/avatar-4.jpg" class="avatar-lg rounded-5" alt="rounded-5">
                            </div>
                        </div> <!-- end preview-->

                        <div class="tab-pane code" id="border-radius-size-utilities-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;img src=&quot;...&quot; class=&quot;rounded-0&quot; alt=&quot;...&quot;&gt;
                                                        &lt;img src=&quot;...&quot; class=&quot;rounded-1&quot; alt=&quot;...&quot;&gt;
                                                        &lt;img src=&quot;...&quot; class=&quot;rounded-2&quot; alt=&quot;...&quot;&gt;
                                                        &lt;img src=&quot;...&quot; class=&quot;rounded-3&quot; alt=&quot;...&quot;&gt;
                                                        &lt;img src=&quot;...&quot; class=&quot;rounded-4&quot; alt=&quot;...&quot;&gt;
                                                        &lt;img src=&quot;...&quot; class=&quot;rounded-5&quot; alt=&quot;...&quot;&gt;
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
                    <h4 class="header-title">Text Selection</h4>
                    <p class="text-muted font-14">Use <code>user-select-all</code>, <code>user-select-auto</code>, or
                        <code>user-select-none</code> class to the content which is selected when the user interacts
                        with
                        it.
                    </p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#text-interactions-utilities-preview" data-bs-toggle="tab" aria-expanded="false"
                               class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#text-interactions-utilities-code" data-bs-toggle="tab" aria-expanded="true"
                               class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="text-interactions-utilities-preview">
                            <p class="user-select-all">This paragraph will be entirely selected when clicked by the
                                user.
                            </p>
                            <p class="user-select-auto">This paragraph has default select behavior.</p>
                            <p class="user-select-none mb-0">This paragraph will not be selectable when clicked by the
                                user.</p>
                        </div> <!-- end preview-->

                        <div class="tab-pane code" id="text-interactions-utilities-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;p class=&quot;user-select-all&quot;&gt;This paragraph will be entirely selected when clicked by the user.&lt;/p&gt;
                                                        &lt;p class=&quot;user-select-auto&quot;&gt;This paragraph has default select behavior.&lt;/p&gt;
                                                        &lt;p class=&quot;user-select-none&quot;&gt;This paragraph will not be selectable when clicked by the user.&lt;/p&gt;
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
                    <h4 class="header-title">Pointer Events</h4>
                    <p class="text-muted font-14">Bootstrap provides <code>.pe-none</code> and <code>.pe-auto</code>
                        classes to prevent or add element interactions.</p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#pointer-event-utilities-preview" data-bs-toggle="tab" aria-expanded="false"
                               class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#pointer-event-utilities-code" data-bs-toggle="tab" aria-expanded="true"
                               class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="pointer-event-utilities-preview">
                            <p><a href="#" class="pe-none" tabindex="-1" aria-disabled="true">This link</a> can
                                not be clicked.</p>
                            <p><a href="#" class="pe-auto">This link</a> can be clicked (this is default behavior).
                            </p>
                            <p class="pe-none"><a href="#" tabindex="-1" aria-disabled="true">This link</a> can
                                not be clicked because the
                                <code>pointer-events</code> property is inherited from its parent. However, <a
                                    href="#" class="pe-auto">this
                                    link</a> has a <code>pe-auto</code> class and can be clicked.
                            </p>
                        </div> <!-- end preview-->

                        <div class="tab-pane code" id="pointer-event-utilities-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;p&gt;&lt;a href=&quot;#&quot; class=&quot;pe-none&quot; tabindex=&quot;-1&quot; aria-disabled=&quot;true&quot;&gt;This link&lt;/a&gt; can not be clicked.&lt;/p&gt;

                                                        &lt;p&gt;&lt;a href=&quot;#&quot; class=&quot;pe-auto&quot;&gt;This link&lt;/a&gt; can be clicked (this is default behavior).&lt;/p&gt;

                                                        &lt;p class=&quot;pe-none&quot;&gt;&lt;a href=&quot;#&quot; tabindex=&quot;-1&quot; aria-disabled=&quot;true&quot;&gt;This link&lt;/a&gt; can not be clicked because the
                                                            &lt;code&gt;pointer-events&lt;/code&gt; property is inherited from its parent. However, &lt;a href=&quot;#&quot; class=&quot;pe-auto&quot;&gt;this
                                                            link&lt;/a&gt; has a &lt;code&gt;pe-auto&lt;/code&gt; class and can be clicked.&lt;/p&gt;
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
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Overflow</h4>
                    <p class="text-muted font-14">Adjust the <code>overflow</code> property on the fly with four default
                        values and classes. These classes are not
                        responsive by default.</p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#overflow-utilities-preview" data-bs-toggle="tab" aria-expanded="false"
                               class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#overflow-utilities-code" data-bs-toggle="tab" aria-expanded="true"
                               class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="overflow-utilities-preview">
                            <div class="d-flex flex-wrap gap-4">
                                <div class="overflow-auto p-3 bg-light" style="max-width: 260px; max-height: 100px;">
                                    This is an example of using <code>.overflow-auto</code> on an element with set width
                                    and
                                    height dimensions. By
                                    design, this content will vertically scroll.
                                </div>
                                <div class="overflow-hidden p-3 bg-light" style="max-width: 260px; max-height: 100px;">
                                    This is an example of using <code>.overflow-hidden</code> on an element with set
                                    width
                                    and height dimensions.
                                </div>
                                <div class="overflow-visible p-3 bg-light" style="max-width: 260px; max-height: 100px;">
                                    This is an example of using <code>.overflow-visible</code> on an element with set
                                    width
                                    and height dimensions.
                                </div>
                                <div class="overflow-scroll p-3 bg-light" style="max-width: 260px; max-height: 100px;">
                                    This is an example of using <code>.overflow-scroll</code> on an element with set
                                    width
                                    and height dimensions.
                                </div>
                            </div>
                        </div> <!-- end preview-->

                        <div class="tab-pane code" id="overflow-utilities-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;div class=&quot;overflow-auto&quot;&gt;...&lt;/div&gt;
                                                        &lt;div class=&quot;overflow-hidden&quot;&gt;...&lt;/div&gt;
                                                        &lt;div class=&quot;overflow-visible&quot;&gt;...&lt;/div&gt;
                                                        &lt;div class=&quot;overflow-scroll&quot;&gt;...&lt;/div&gt;
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
                    <h4 class="header-title">Position in Arrange</h4>
                    <p class="text-muted font-14">Arrange elements easily with the edge positioning utilities. The
                        format
                        is <code>{property}-{position}</code>.</p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#position-utilities-preview" data-bs-toggle="tab" aria-expanded="false"
                               class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#position-utilities-code" data-bs-toggle="tab" aria-expanded="true"
                               class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="position-utilities-preview">
                            <!-- Arrange elements -->
                            <div class="position-relative p-5 bg-light bg-opacity-50 m-3 border rounded"
                                 style="height: 180px;">
                                <div class="position-absolute top-0 start-0 avatar-xs bg-dark rounded"></div>
                                <div class="position-absolute top-0 end-0 avatar-xs bg-dark rounded"></div>
                                <div class="position-absolute top-50 start-50 avatar-xs bg-dark rounded"></div>
                                <div class="position-absolute bottom-50 end-50 avatar-xs bg-dark rounded"></div>
                                <div class="position-absolute bottom-0 start-0 avatar-xs bg-dark rounded"></div>
                                <div class="position-absolute bottom-0 end-0 avatar-xs bg-dark rounded"></div>
                            </div>
                        </div> <!-- end preview-->

                        <div class="tab-pane code" id="position-utilities-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;div class=&quot;position-relative&quot;&gt;
                                                            &lt;div class=&quot;position-absolute top-0 start-0&quot;&gt;&lt;/div&gt;
                                                            &lt;div class=&quot;position-absolute top-0 end-0&quot;&gt;&lt;/div&gt;
                                                            &lt;div class=&quot;position-absolute top-50 start-50&quot;&gt;&lt;/div&gt;
                                                            &lt;div class=&quot;position-absolute bottom-50 end-50&quot;&gt;&lt;/div&gt;
                                                            &lt;div class=&quot;position-absolute bottom-0 start-0&quot;&gt;&lt;/div&gt;
                                                            &lt;div class=&quot;position-absolute bottom-0 end-0&quot;&gt;&lt;/div&gt;
                                                        &lt;/div&gt;
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
                    <h4 class="header-title">Position in Center</h4>
                    <p class="text-muted font-14">In addition, you can also center the elements with the transform
                        utility
                        class <code>.translate-middle</code>.</p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#position-center-utilities-preview" data-bs-toggle="tab" aria-expanded="false"
                               class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#position-center-utilities-code" data-bs-toggle="tab" aria-expanded="true"
                               class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="position-center-utilities-preview">
                            <!-- Center elements -->
                            <div class="position-relative m-3 bg-light bg-opacity-50 border rounded"
                                 style="height: 180px;">
                                <div class="position-absolute top-0 start-0 translate-middle avatar-xs bg-dark rounded">
                                </div>
                                <div
                                    class="position-absolute top-0 start-50 translate-middle avatar-xs bg-dark rounded">
                                </div>
                                <div
                                    class="position-absolute top-0 start-100 translate-middle avatar-xs bg-dark rounded">
                                </div>

                                <div
                                    class="position-absolute top-50 start-0 translate-middle avatar-xs bg-dark rounded">
                                </div>
                                <div
                                    class="position-absolute top-50 start-50 translate-middle avatar-xs bg-dark rounded">
                                </div>
                                <div
                                    class="position-absolute top-50 start-100 translate-middle avatar-xs bg-dark rounded">
                                </div>

                                <div
                                    class="position-absolute top-100 start-0 translate-middle avatar-xs bg-dark rounded">
                                </div>
                                <div
                                    class="position-absolute top-100 start-50 translate-middle avatar-xs bg-dark rounded">
                                </div>
                                <div
                                    class="position-absolute top-100 start-100 translate-middle avatar-xs bg-dark rounded">
                                </div>
                            </div>
                        </div> <!-- end preview-->

                        <div class="tab-pane code" id="position-center-utilities-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;div class=&quot;position-relative&quot;&gt;
                                                            &lt;div class=&quot;position-absolute top-0 start-0 translate-middle&quot;&gt;&lt;/div&gt;
                                                            &lt;div class=&quot;position-absolute top-0 start-50 translate-middle&quot;&gt;&lt;/div&gt;
                                                            &lt;div class=&quot;position-absolute top-0 start-100 translate-middle&quot;&gt;&lt;/div&gt;
                                                            &lt;div class=&quot;position-absolute top-50 start-0 translate-middle&quot;&gt;&lt;/div&gt;
                                                            &lt;div class=&quot;position-absolute top-50 start-50 translate-middle&quot;&gt;&lt;/div&gt;
                                                            &lt;div class=&quot;position-absolute top-50 start-100 translate-middle&quot;&gt;&lt;/div&gt;
                                                            &lt;div class=&quot;position-absolute top-100 start-0 translate-middle&quot;&gt;&lt;/div&gt;
                                                            &lt;div class=&quot;position-absolute top-100 start-50 translate-middle&quot;&gt;&lt;/div&gt;
                                                            &lt;div class=&quot;position-absolute top-100 start-100 translate-middle&quot;&gt;&lt;/div&gt;
                                                        &lt;/div&gt;
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
                    <h4 class="header-title">Position in Axis</h4>
                    <p class="text-muted font-14">By adding <code>.translate-middle-x</code> or
                        <code>.translate-middle-y</code> classes, elements can be positioned only in horizontal or
                        vertical
                        direction.</p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#position-axis-utilities-preview" data-bs-toggle="tab" aria-expanded="false"
                               class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#position-axis-utilities-code" data-bs-toggle="tab" aria-expanded="true"
                               class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="position-axis-utilities-preview">
                            <!-- Center elements -->
                            <div class="position-relative m-3 bg-light border rounded" style="height: 180px;">
                                <div class="position-absolute top-0 start-0 avatar-xs bg-dark rounded "></div>
                                <div
                                    class="position-absolute top-0 start-50 translate-middle-x avatar-xs bg-dark rounded">
                                </div>
                                <div class="position-absolute top-0 end-0 avatar-xs bg-dark rounded"></div>

                                <div
                                    class="position-absolute top-50 start-0 translate-middle-y avatar-xs bg-dark rounded">
                                </div>
                                <div
                                    class="position-absolute top-50 start-50 translate-middle avatar-xs bg-dark rounded">
                                </div>
                                <div
                                    class="position-absolute top-50 end-0 translate-middle-y avatar-xs bg-dark rounded">
                                </div>

                                <div class="position-absolute bottom-0 start-0 avatar-xs bg-dark rounded"></div>
                                <div
                                    class="position-absolute bottom-0 start-50 translate-middle-x avatar-xs bg-dark rounded">
                                </div>
                                <div class="position-absolute bottom-0 end-0 avatar-xs bg-dark rounded"></div>
                            </div>
                        </div> <!-- end preview-->

                        <div class="tab-pane code" id="position-axis-utilities-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;div class=&quot;position-relative&quot;&gt;
                                                            &lt;div class=&quot;position-absolute top-0 start-0&quot;&gt;&lt;/div&gt;
                                                            &lt;div class=&quot;position-absolute top-0 start-50 translate-middle-x&quot;&gt;&lt;/div&gt;
                                                            &lt;div class=&quot;position-absolute top-0 end-0&quot;&gt;&lt;/div&gt;
                                                            &lt;div class=&quot;position-absolute top-50 start-0 translate-middle-y&quot;&gt;&lt;/div&gt;
                                                            &lt;div class=&quot;position-absolute top-50 start-50 translate-middle&quot;&gt;&lt;/div&gt;
                                                            &lt;div class=&quot;position-absolute top-50 end-0 translate-middle-y&quot;&gt;&lt;/div&gt;
                                                            &lt;div class=&quot;position-absolute bottom-0 start-0&quot;&gt;&lt;/div&gt;
                                                            &lt;div class=&quot;position-absolute bottom-0 start-50 translate-middle-x&quot;&gt;&lt;/div&gt;
                                                            &lt;div class=&quot;position-absolute bottom-0 end-0&quot;&gt;&lt;/div&gt;
                                                        &lt;/div&gt;
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
                    <h4 class="header-title">Shadows</h4>
                    <p class="text-muted font-14">While shadows on components are disabled by default in Bootstrap and
                        can
                        be enabled via
                        <code>$enable-shadows</code>, you can also quickly add or remove a shadow with our
                        <code>box-shadow</code> utility
                        classes. Includes support for <code>.shadow-none</code> and three default sizes (which have
                        associated variables to
                        match).
                    </p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#shadow-utilities-preview" data-bs-toggle="tab" aria-expanded="false"
                               class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#shadow-utilities-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="shadow-utilities-preview">
                            <div class="shadow-none p-2 mb-2 bg-light rounded">No shadow</div>
                            <div class="shadow-sm p-2 mb-2 rounded">Small shadow</div>
                            <div class="shadow p-2 mb-2 rounded">Regular shadow</div>
                            <div class="shadow-lg p-2 mb-2 rounded">Larger shadow</div>
                        </div> <!-- end preview-->

                        <div class="tab-pane code" id="shadow-utilities-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;div class=&quot;shadow-none p-2 mb-2 bg-light rounded&quot;&gt;No shadow&lt;/div&gt;
                                                        &lt;div class=&quot;shadow-sm p-2 mb-2 rounded&quot;&gt;Small shadow&lt;/div&gt;
                                                        &lt;div class=&quot;shadow p-2 mb-2 rounded&quot;&gt;Regular shadow&lt;/div&gt;
                                                        &lt;div class=&quot;shadow-lg p-2 mb-2 rounded&quot;&gt;Larger shadow&lt;/div&gt;
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
                    <h4 class="header-title">Width</h4>
                    <p class="text-muted font-14">Width utilities are generated from the utility API in
                        <code>_utilities.scss</code>. Includes support for
                        <code>25%</code>, <code>50%</code>, <code>75%</code>, <code>100%</code>, and <code>auto</code>
                        by
                        default. Modify
                        those values as you need to generate different utilities here.
                    </p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#width-utilities-preview" data-bs-toggle="tab" aria-expanded="false"
                               class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#width-utilities-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="width-utilities-preview">
                            <!-- Width -->
                            <div class="w-25 p-2 bg-light">Width 25%</div>

                            <div class="w-50 p-2 bg-light">Width 50%</div>

                            <div class="w-75 p-2 bg-light">Width 75%</div>

                            <div class="w-100 p-2 bg-light">Width 100%</div>

                            <div class="w-auto p-2 bg-light">Width auto</div>
                        </div> <!-- end preview-->

                        <div class="tab-pane code" id="width-utilities-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;!-- Width --&gt;
                                                        &lt;div class=&quot;w-25 p-2 bg-light&quot;&gt;Width 25%&lt;/div&gt;

                                                        &lt;div class=&quot;w-50 p-2 bg-light&quot;&gt;Width 50%&lt;/div&gt;

                                                        &lt;div class=&quot;w-75 p-2 bg-light&quot;&gt;Width 75%&lt;/div&gt;

                                                        &lt;div class=&quot;w-100 p-2 bg-light&quot;&gt;Width 100%&lt;/div&gt;

                                                        &lt;div class=&quot;w-auto p-2 bg-light&quot;&gt;Width auto&lt;/div&gt;
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
                    <h4 class="header-title">Height</h4>
                    <p class="text-muted font-14">Height utilities are generated from the utility API in
                        <code>_utilities.scss</code>. Includes support for
                        <code>25%</code>, <code>50%</code>, <code>75%</code>, <code>100%</code>, and <code>auto</code>
                        by
                        default. Modify
                        those values as you need to generate different utilities here.
                    </p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#height-utilities-preview" data-bs-toggle="tab" aria-expanded="false"
                               class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#height-utilities-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="height-utilities-preview">
                            <div class="d-flex flex-wrap gap-3 align-items-start" style="height: 255px;">
                                <!-- Height -->
                                <div class="h-25 p-2 bg-light">Height25%</div>

                                <div class="h-50 p-2 bg-light">Height50%</div>

                                <div class="h-75 p-2 bg-light">Height75%</div>

                                <div class="h-100 p-2 bg-light">Height100%</div>

                                <div class="h-auto p-2 bg-light">Height auto</div>
                            </div>
                        </div> <!-- end preview-->

                        <div class="tab-pane code" id="height-utilities-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;!-- Height --&gt;
                                                        &lt;div class=&quot;h-25 p-2 bg-light&quot;&gt;Height25%&lt;/div&gt;

                                                        &lt;div class=&quot;h-50 p-2 bg-light&quot;&gt;Height50%&lt;/div&gt;

                                                        &lt;div class=&quot;h-75 p-2 bg-light&quot;&gt;Height75%&lt;/div&gt;

                                                        &lt;div class=&quot;h-100 p-2 bg-light&quot;&gt;Height100%&lt;/div&gt;

                                                        &lt;div class=&quot;h-auto p-2 bg-light&quot;&gt;Height auto&lt;/div&gt;
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
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Object fit</h4>
                    <p class="text-muted font-14">Change the value of the <a
                            href="https://developer.mozilla.org/en-US/docs/Web/CSS/object-fit"><code>object-fit</code>
                            property</a> with our responsive <code>object-fit</code> utility classes. This property
                        tells
                        the content to fill the parent container in a variety of ways, such as preserving the aspect
                        ratio
                        or stretching to take up as much space as possible.</p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#object-fit-utilities-preview" data-bs-toggle="tab" aria-expanded="false"
                               class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#object-fit-utilities-code" data-bs-toggle="tab" aria-expanded="true"
                               class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="object-fit-utilities-preview">
                            <div class="d-flex align-items-start flex-wrap gap-3 text-center">
                                <div>
                                    <img src="/images/small/small-1.jpg"
                                         class="object-fit-contain border rounded avatar-xl" alt="...">
                                    <p class="mt-1 mb-0"><code class="user-select-all">.object-fit-contain</code></p>
                                </div>
                                <div>
                                    <img src="/images/small/small-1.jpg"
                                         class="object-fit-cover border rounded avatar-xl" alt="...">
                                    <p class="mt-1 mb-0"><code class="user-select-all">.object-fit-cover</code></p>
                                </div>
                                <div>
                                    <img src="/images/small/small-1.jpg"
                                         class="object-fit-fill border rounded avatar-xl" alt="...">
                                    <p class="mt-1 mb-0"><code class="user-select-all">.object-fit-fill</code></p>
                                </div>
                                <div>
                                    <img src="/images/small/small-1.jpg"
                                         class="object-fit-scale border rounded avatar-xl" alt="...">
                                    <p class="mt-1 mb-0"><code class="user-select-all">.object-fit-scale</code></p>
                                </div>
                                <div>
                                    <img src="/images/small/small-1.jpg"
                                         class="object-fit-none border rounded avatar-xl" alt="...">
                                    <p class="mt-1 mb-0"><code class="user-select-all">.object-fit-none</code></p>
                                </div>
                            </div>
                        </div> <!-- end preview-->

                        <div class="tab-pane code" id="object-fit-utilities-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;div class=&quot;d-flex align-items-start flex-wrap gap-3 text-center&quot;&gt;
                                                            &lt;div&gt;
                                                                &lt;img src=&quot;assets/images/small/small-1.jpg&quot; class=&quot;object-fit-contain border rounded avatar-xl&quot; alt=&quot;...&quot;&gt;
                                                                &lt;p class=&quot;mt-1 mb-0&quot;&gt;&lt;code class=&quot;user-select-all&quot;&gt;.object-fit-contain&lt;/code&gt;&lt;/p&gt;
                                                            &lt;/div&gt;
                                                            &lt;div&gt;
                                                                &lt;img src=&quot;assets/images/small/small-1.jpg&quot; class=&quot;object-fit-cover border rounded avatar-xl&quot; alt=&quot;...&quot;&gt;
                                                                &lt;p class=&quot;mt-1 mb-0&quot;&gt;&lt;code class=&quot;user-select-all&quot;&gt;.object-fit-cover&lt;/code&gt;&lt;/p&gt;
                                                            &lt;/div&gt;
                                                            &lt;div&gt;
                                                                &lt;img src=&quot;assets/images/small/small-1.jpg&quot; class=&quot;object-fit-fill border rounded avatar-xl&quot; alt=&quot;...&quot;&gt;
                                                                &lt;p class=&quot;mt-1 mb-0&quot;&gt;&lt;code class=&quot;user-select-all&quot;&gt;.object-fit-fill&lt;/code&gt;&lt;/p&gt;
                                                            &lt;/div&gt;
                                                            &lt;div&gt;
                                                                &lt;img src=&quot;assets/images/small/small-1.jpg&quot; class=&quot;object-fit-scale border rounded avatar-xl&quot; alt=&quot;...&quot;&gt;
                                                                &lt;p class=&quot;mt-1 mb-0&quot;&gt;&lt;code class=&quot;user-select-all&quot;&gt;.object-fit-scale&lt;/code&gt;&lt;/p&gt;
                                                            &lt;/div&gt;
                                                            &lt;div&gt;
                                                                &lt;img src=&quot;assets/images/small/small-1.jpg&quot; class=&quot;object-fit-none border rounded avatar-xl&quot; alt=&quot;...&quot;&gt;
                                                                &lt;p class=&quot;mt-1 mb-0&quot;&gt;&lt;code class=&quot;user-select-all&quot;&gt;.object-fit-none&lt;/code&gt;&lt;/p&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                        </div> <!-- end preview code-->
                    </div> <!-- end tab-content-->
                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div><!-- end end -->

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Z-index</h4>
                    <p class="text-muted font-14">Use <code>z-index</code> utilities to stack elements on top of one
                        another. Requires a <code>position</code> value other than <code>static</code>, which can be set
                        with custom styles or using our <a href="/docs/5.3/utilities/position/">position utilities</a>.
                    </p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#z-index-preview" data-bs-toggle="tab" aria-expanded="false"
                               class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#z-index-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="z-index-preview">
                            <div class="position-relative" style="height: 220px;z-index: 1;">
                                <div class="z-3 position-absolute p-5 rounded-3 bg-primary-subtle"></div>
                                <div class="z-2 position-absolute p-5 m-2 rounded-3 bg-success-subtle"></div>
                                <div class="z-1 position-absolute p-5 m-3 rounded-3 bg-secondary-subtle"></div>
                                <div class="z-0 position-absolute p-5 m-4 rounded-3 bg-danger-subtle"></div>
                                <div class="z-n1 position-absolute p-5 m-5 rounded-3 bg-info-subtle"></div>
                            </div>
                        </div> <!-- end preview-->

                        <div class="tab-pane code" id="z-index-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;div class=&quot;position-relative&quot; style=&quot;height: 220px;z-index: 1;&quot;&gt;
                                                            &lt;div class=&quot;z-3 position-absolute p-5 rounded-3 bg-primary-subtle&quot;&gt;&lt;/div&gt;
                                                            &lt;div class=&quot;z-2 position-absolute p-5 m-2 rounded-3 bg-success-subtle&quot;&gt;&lt;/div&gt;
                                                            &lt;div class=&quot;z-1 position-absolute p-5 m-3 rounded-3 bg-secondary-subtle&quot;&gt;&lt;/div&gt;
                                                            &lt;div class=&quot;z-0 position-absolute p-5 m-4 rounded-3 bg-danger-subtle&quot;&gt;&lt;/div&gt;
                                                            &lt;div class=&quot;z-n1 position-absolute p-5 m-5 rounded-3 bg-info-subtle&quot;&gt;&lt;/div&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                        </div> <!-- end preview code-->
                    </div> <!-- end tab-content-->
                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div><!-- end end -->
@endsection
@section('script-bottom')
    @vite(['resources/js/hyper-syntax.js'])
@endsection