@extends('layouts.vertical', ['title' => 'Buttons', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')
    @include('layouts.shared/page-title', ['sub_title' => 'Base UI', 'page_title' => 'Buttons'])

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Default Buttons</h4>
                    <p class="text-muted font-14">Use the button classes on an <code>&lt;a&gt;</code>, <code>&lt;button&gt;</code>,
                        or <code>&lt;input&gt;</code> element.</p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#default-buttons-preview" data-bs-toggle="tab" aria-expanded="false"
                               class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#default-buttons-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="default-buttons-preview">
                            <div class="d-flex flex-wrap gap-2">
                                <button type="button" class="btn btn-primary">Primary</button>
                                <button type="button" class="btn btn-secondary">Secondary</button>
                                <button type="button" class="btn btn-success">Success</button>
                                <button type="button" class="btn btn-danger">Danger</button>
                                <button type="button" class="btn btn-warning">Warning</button>
                                <button type="button" class="btn btn-info">Info</button>
                                <button type="button" class="btn btn-light">Light</button>
                                <button type="button" class="btn btn-dark">Dark</button>
                                <button type="button" class="btn btn-link">Link</button>
                            </div>
                        </div> <!-- end preview-->

                        <div class="tab-pane code" id="default-buttons-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Primary&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;Secondary&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-success&quot;&gt;Success&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-danger&quot;&gt;Danger&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-warning&quot;&gt;Warning&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot;&gt;Info&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot;&gt;Light&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-dark&quot;&gt;Dark&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-link&quot;&gt;Link&lt;/button&gt;
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
                    <h4 class="header-title">Button Outline</h4>
                    <p class="text-muted font-14">Use a classes <code>.btn-outline-**</code> to quickly create a
                        bordered buttons.</p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#outline-buttons-preview" data-bs-toggle="tab" aria-expanded="false"
                               class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#outline-buttons-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="outline-buttons-preview">
                            <div class="d-flex flex-wrap gap-2">
                                <button type="button" class="btn btn-outline-primary">Primary</button>
                                <button type="button" class="btn btn-outline-secondary">Secondary</button>
                                <button type="button" class="btn btn-outline-success"><i
                                        class="uil-cloud-computing"></i> Success
                                </button>
                                <button type="button" class="btn btn-outline-danger">Danger</button>
                                <button type="button" class="btn btn-outline-warning">Warning</button>
                                <button type="button" class="btn btn-outline-info"><i class="uil-circuit"></i> Info
                                </button>
                                <button type="button" class="btn btn-outline-light">Light</button>
                                <button type="button" class="btn btn-outline-dark">Dark</button>
                            </div>
                        </div> <!-- end preview-->

                        <div class="tab-pane code" id="outline-buttons-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary&quot;&gt;Primary&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary&quot;&gt;Secondary&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-success&quot;&gt;&lt;i class=&quot;uil-cloud-computing&quot;&gt;&lt;/i&gt; Success&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-danger&quot;&gt;Danger&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-warning&quot;&gt;Warning&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-info&quot;&gt;&lt;i class=&quot;uil-circuit&quot;&gt;&lt;/i&gt; Info&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-light&quot;&gt;Light&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-dark&quot;&gt;Dark&lt;/button&gt;
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
                    <h4 class="header-title">Button-Rounded</h4>
                    <p class="text-muted font-14">Add <code>.rounded-pill</code> to default button to get rounded
                        corners.</p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#rounded-buttons-preview" data-bs-toggle="tab" aria-expanded="false"
                               class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#rounded-buttons-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="rounded-buttons-preview">
                            <div class="d-flex flex-wrap gap-2">
                                <button type="button" class="btn btn-primary rounded-pill">Primary</button>
                                <button type="button" class="btn btn-secondary rounded-pill">Secondary</button>
                                <button type="button" class="btn btn-success rounded-pill">Success</button>
                                <button type="button" class="btn btn-danger rounded-pill">Danger</button>
                                <button type="button" class="btn btn-warning rounded-pill">Warning</button>
                                <button type="button" class="btn btn-info rounded-pill">Info</button>
                                <button type="button" class="btn btn-light rounded-pill">Light</button>
                                <button type="button" class="btn btn-dark rounded-pill">Dark</button>
                            </div>
                        </div> <!-- end preview-->

                        <div class="tab-pane code" id="rounded-buttons-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary rounded-pill&quot;&gt;Primary&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary rounded-pill&quot;&gt;Secondary&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-success rounded-pill&quot;&gt;Success&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-danger rounded-pill&quot;&gt;Danger&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-warning rounded-pill&quot;&gt;Warning&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-info rounded-pill&quot;&gt;Info&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-light rounded-pill&quot;&gt;Light&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-dark rounded-pill&quot;&gt;Dark&lt;/button&gt;
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
                    <h4 class="header-title">Button Outline Rounded</h4>
                    <p class="text-muted font-14">Use a classes <code>.btn-outline-**</code> to quickly create a
                        bordered buttons.</p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#outline-rounded-preview" data-bs-toggle="tab" aria-expanded="false"
                               class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#outline-rounded-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="outline-rounded-preview">
                            <div class="d-flex flex-wrap gap-2">
                                <button type="button" class="btn btn-outline-primary rounded-pill">Primary</button>
                                <button type="button" class="btn btn-outline-secondary rounded-pill">Secondary</button>
                                <button type="button" class="btn btn-outline-success rounded-pill"><i
                                        class="uil-cloud-computing"></i> Success
                                </button>
                                <button type="button" class="btn btn-outline-danger rounded-pill">Danger</button>
                                <button type="button" class="btn btn-outline-warning rounded-pill">Warning</button>
                                <button type="button" class="btn btn-outline-info rounded-pill"><i
                                        class="uil-circuit"></i> Info
                                </button>
                                <button type="button" class="btn btn-outline-light rounded-pill">Light</button>
                                <button type="button" class="btn btn-outline-dark rounded-pill">Dark</button>
                            </div>
                        </div> <!-- end preview-->

                        <div class="tab-pane code" id="outline-rounded-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary rounded-pill&quot;&gt;Primary&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary rounded-pill&quot;&gt;Secondary&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-success rounded-pill&quot;&gt;&lt;i class=&quot;uil-cloud-computing&quot;&gt;&lt;/i&gt; Success&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-danger rounded-pill&quot;&gt;Danger&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-warning rounded-pill&quot;&gt;Warning&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-info rounded-pill&quot;&gt;&lt;i class=&quot;uil-circuit&quot;&gt;&lt;/i&gt; Info&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-light rounded-pill&quot;&gt;Light&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-dark rounded-pill&quot;&gt;Dark&lt;/button&gt;
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
                    <h4 class="header-title">Soft Buttons</h4>
                    <p class="text-muted font-14">Use a classes <code>.btn-soft-**</code> to quickly create a soft
                        background color buttons.</p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#soft-buttons-preview" data-bs-toggle="tab" aria-expanded="false"
                               class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#soft-buttons-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="soft-buttons-preview">
                            <div class="d-flex flex-wrap gap-2">
                                <button type="button" class="btn btn-soft-primary">Primary</button>
                                <button type="button" class="btn btn-soft-secondary">Secondary</button>
                                <button type="button" class="btn btn-soft-success">Success</button>
                                <button type="button" class="btn btn-soft-danger">Danger</button>
                                <button type="button" class="btn btn-soft-warning">Warning</button>
                                <button type="button" class="btn btn-soft-info">Info</button>
                                <button type="button" class="btn btn-soft-dark">Dark</button>
                            </div>
                        </div> <!-- end preview-->

                        <div class="tab-pane code" id="soft-buttons-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-soft-primary&quot;&gt;Primary&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-soft-secondary&quot;&gt;Secondary&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-soft-success&quot;&gt;Success&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-soft-danger&quot;&gt;Danger&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-soft-warning&quot;&gt;Warning&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-soft-info&quot;&gt;Info&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-soft-dark&quot;&gt;Dark&lt;/button&gt;
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
                    <h4 class="header-title">Soft Rounded Buttons</h4>
                    <p class="text-muted font-14">Use a classes <code>.btn-soft-**</code> <code>.rounded-pill</code> to
                        quickly create a soft background color buttons with rounded.</p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#soft-rounded-buttons-preview" data-bs-toggle="tab" aria-expanded="false"
                               class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#soft-rounded-buttons-code" data-bs-toggle="tab" aria-expanded="true"
                               class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="soft-rounded-buttons-preview">
                            <div class="d-flex flex-wrap gap-2">
                                <button type="button" class="btn btn-soft-primary rounded-pill">Primary</button>
                                <button type="button" class="btn btn-soft-secondary rounded-pill">Secondary</button>
                                <button type="button" class="btn btn-soft-success rounded-pill">Success</button>
                                <button type="button" class="btn btn-soft-danger rounded-pill">Danger</button>
                                <button type="button" class="btn btn-soft-warning rounded-pill">Warning</button>
                                <button type="button" class="btn btn-soft-info rounded-pill">Info</button>
                                <button type="button" class="btn btn-soft-dark rounded-pill">Dark</button>
                            </div>
                        </div> <!-- end preview-->

                        <div class="tab-pane code" id="soft-rounded-buttons-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary&quot;&gt;Primary&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary&quot;&gt;Secondary&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-success&quot;&gt;&lt;i class=&quot;uil-cloud-computing&quot;&gt;&lt;/i&gt; Success&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-danger&quot;&gt;Danger&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-warning&quot;&gt;Warning&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-info&quot;&gt;&lt;i class=&quot;uil-circuit&quot;&gt;&lt;/i&gt; Info&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-light&quot;&gt;Light&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-dark&quot;&gt;Dark&lt;/button&gt;
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
                    <h4 class="header-title">Button-Sizes</h4>
                    <p class="text-muted font-14">
                        Add <code>.btn-lg</code>, <code>.btn-sm</code> for additional sizes.
                    </p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#button-sizes-preview" data-bs-toggle="tab" aria-expanded="false"
                               class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#button-sizes-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="button-sizes-preview">
                            <div class="d-flex flex-wrap align-items-center gap-2">
                                <button type="button" class="btn btn-primary btn-lg">Large</button>
                                <button type="button" class="btn btn-info">Normal</button>
                                <button type="button" class="btn btn-success btn-sm">Small</button>
                            </div>
                        </div> <!-- end preview-->

                        <div class="tab-pane code" id="button-sizes-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary btn-lg&quot;&gt;Large&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot;&gt;Normal&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-success btn-sm&quot;&gt;Small&lt;/button&gt;
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
                    <h4 class="header-title">Button-Disabled</h4>
                    <p class="text-muted font-14">
                        Add the <code>disabled</code> attribute to <code>&lt;button&gt;</code> buttons.
                    </p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#button-disabled-preview" data-bs-toggle="tab" aria-expanded="false"
                               class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#button-disabled-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="button-disabled-preview">
                            <div class="d-flex flex-wrap gap-2">
                                <button type="button" class="btn btn-info" disabled>Info</button>
                                <button type="button" class="btn btn-success" disabled>Success</button>
                                <button type="button" class="btn btn-danger" disabled>Danger</button>
                                <button type="button" class="btn btn-dark" disabled>Dark</button>
                            </div>
                        </div> <!-- end preview-->

                        <div class="tab-pane code" id="button-disabled-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot; disabled&gt;Info&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-success&quot; disabled&gt;Success&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-danger&quot; disabled&gt;Danger&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-dark&quot; disabled&gt;Dark&lt;/button&gt;
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
                    <h4 class="header-title">Icon Buttons</h4>
                    <p class="text-muted font-14">
                        Icon only button.
                    </p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#icon-buttons-preview" data-bs-toggle="tab" aria-expanded="false"
                               class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#icon-buttons-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="icon-buttons-preview">
                            <div class="d-flex flex-wrap gap-2">
                                <button type="button" class="btn btn-light"><i class="mdi mdi-heart-outline"></i>
                                </button>
                                <button type="button" class="btn btn-danger"><i class="mdi mdi-window-close"></i>
                                </button>
                                <button type="button" class="btn btn-dark"><i class="mdi mdi-music"></i></button>
                                <button type="button" class="btn btn-primary"><i class="mdi mdi-star"></i></button>
                                <button type="button" class="btn btn-success"><i class="mdi mdi-thumb-up-outline"></i>
                                </button>
                                <button type="button" class="btn btn-info"><i class="mdi mdi-keyboard"></i></button>
                                <button type="button" class="btn btn-warning"><i class="mdi mdi-wrench"></i></button>

                                <button type="button" class="btn btn-light"><i class="mdi mdi-heart me-1"></i> <span>Like</span>
                                </button>
                                <button type="button" class="btn btn-warning"><i class="mdi mdi-rocket me-1"></i> <span>Launch</span>
                                </button>
                                <button type="button" class="btn btn-info"><i class="mdi mdi-cloud me-1"></i> <span>Cloud Hosting</span>
                                </button>

                                <button type="button" class="btn btn-outline-success"><i
                                        class="uil-money-withdrawal"></i> Money
                                </button>
                                <button type="button" class="btn btn-outline-primary"><i class="uil-paypal"></i> PayPal
                                </button>
                                <button type="button" class="btn btn-outline-danger"><i class="uil-cog"></i> Settings
                                </button>
                            </div>
                        </div> <!-- end preview-->

                        <div class="tab-pane code" id="icon-buttons-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot;&gt;&lt;i class=&quot;mdi mdi-heart-outline&quot;&gt;&lt;/i&gt; &lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-danger&quot;&gt;&lt;i class=&quot;mdi mdi-window-close&quot;&gt;&lt;/i&gt; &lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-dark&quot;&gt;&lt;i class=&quot;mdi mdi-music&quot;&gt;&lt;/i&gt; &lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;&lt;i class=&quot;mdi mdi-star&quot;&gt;&lt;/i&gt; &lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-success&quot;&gt;&lt;i class=&quot;mdi mdi-thumb-up-outline&quot;&gt;&lt;/i&gt; &lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot;&gt;&lt;i class=&quot;mdi mdi-keyboard&quot;&gt;&lt;/i&gt; &lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-warning&quot;&gt;&lt;i class=&quot;mdi mdi-wrench&quot;&gt;&lt;/i&gt; &lt;/button&gt;

                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot;&gt;&lt;i class=&quot;mdi mdi-heart me-1&quot;&gt;&lt;/i&gt; &lt;span&gt;Like&lt;/span&gt; &lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-warning&quot;&gt;&lt;i class=&quot;mdi mdi-rocket me-1&quot;&gt;&lt;/i&gt; &lt;span&gt;Launch&lt;/span&gt; &lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot;&gt;&lt;i class=&quot;mdi mdi-cloud me-1&quot;&gt;&lt;/i&gt; &lt;span&gt;Cloud Hosting&lt;/span&gt; &lt;/button&gt;

                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-success&quot;&gt;&lt;i class=&quot;uil-money-withdrawal&quot;&gt;&lt;/i&gt; Money&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary&quot;&gt;&lt;i class=&quot;uil-paypal&quot;&gt;&lt;/i&gt; PayPal&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-danger&quot;&gt;&lt;i class=&quot;uil-cog&quot;&gt;&lt;/i&gt; Settings&lt;/button&gt;
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
                    <h4 class="header-title">Block Button</h4>

                    <p class="text-muted font-14">
                        Create block level buttons by adding class <code>.d-grid</code> to parent div.
                    </p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#block-buttons-preview" data-bs-toggle="tab" aria-expanded="false"
                               class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#block-buttons-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="block-buttons-preview">
                            <div class="d-grid gap-2">
                                <button type="button" class="btn btn-sm btn-primary">Block Button</button>
                                <button type="button" class="btn btn-lg btn-success">Block Button</button>
                            </div>
                        </div> <!-- end preview-->

                        <div class="tab-pane code" id="block-buttons-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;div class=&quot;d-grid&quot;&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-sm btn-primary&quot;&gt;Block Button&lt;/button&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-lg btn-success&quot;&gt;Block Button&lt;/button&gt;
                                                        &lt;/div&gt;
                                                        &lt;!-- end d-grid --&gt;
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
                    <h4 class="header-title">Button Group</h4>

                    <p class="text-muted font-14">
                        Wrap a series of buttons with <code>.btn</code> in <code>.btn-group</code>.
                    </p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#button-group-preview" data-bs-toggle="tab" aria-expanded="false"
                               class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#button-group-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="button-group-preview">
                            <div class="btn-group mb-2">
                                <button type="button" class="btn btn-light">Left</button>
                                <button type="button" class="btn btn-light">Middle</button>
                                <button type="button" class="btn btn-light">Right</button>
                            </div>

                            <br>

                            <div class="btn-group mb-2">
                                <button type="button" class="btn btn-light">1</button>
                                <button type="button" class="btn btn-light">2</button>
                                <button type="button" class="btn btn-light">3</button>
                                <button type="button" class="btn btn-light">4</button>
                            </div>

                            <div class="btn-group mb-2">
                                <button type="button" class="btn btn-light">5</button>
                                <button type="button" class="btn btn-light">6</button>
                                <button type="button" class="btn btn-light">7</button>
                            </div>

                            <div class="btn-group mb-2">
                                <button type="button" class="btn btn-light">8</button>
                            </div>

                            <br>

                            <div class="btn-group mb-2">
                                <button type="button" class="btn btn-light">1</button>
                                <button type="button" class="btn btn-primary">2</button>
                                <button type="button" class="btn btn-light">3</button>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-light dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-expanded="false"> Dropdown <span
                                            class="caret"></span></button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Dropdown link</a>
                                        <a class="dropdown-item" href="#">Dropdown link</a>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="btn-group-vertical mb-2">
                                        <button type="button" class="btn btn-light">Top</button>
                                        <button type="button" class="btn btn-light">Middle</button>
                                        <button type="button" class="btn btn-light">Bottom</button>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="btn-group-vertical mb-2">
                                        <button type="button" class="btn btn-light">Button 1</button>
                                        <button type="button" class="btn btn-light">Button 2</button>
                                        <button type="button" class="btn btn-light dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false"> Button 3 <span
                                                class="caret"></span></button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Dropdown link</a>
                                            <a class="dropdown-item" href="#">Dropdown link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end preview-->

                        <div class="tab-pane code" id="button-group-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;!-- Button Group --&gt;
                                                        &lt;div class=&quot;btn-group mb-2&quot;&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot;&gt;Left&lt;/button&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot;&gt;Middle&lt;/button&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot;&gt;Right&lt;/button&gt;
                                                        &lt;/div&gt;

                                                        &lt;!-- Button Group with Dropdowns--&gt;
                                                        &lt;div class=&quot;btn-group mb-2&quot;&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot;&gt;1&lt;/button&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;2&lt;/button&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot;&gt;3&lt;/button&gt;
                                                            &lt;div class=&quot;btn-group&quot;&gt;
                                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-light dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt; Dropdown &lt;span class=&quot;caret&quot;&gt;&lt;/span&gt; &lt;/button&gt;
                                                                &lt;div class=&quot;dropdown-menu&quot;&gt;
                                                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Dropdown link&lt;/a&gt;
                                                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Dropdown link&lt;/a&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;

                                                        &lt;!-- Button Group Vertical--&gt;
                                                        &lt;div class=&quot;btn-group-vertical mb-2&quot;&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot;&gt;Top&lt;/button&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot;&gt;Middle&lt;/button&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot;&gt;Bottom&lt;/button&gt;
                                                        &lt;/div&gt;

                                                        &lt;!-- Button Group Vertical with Dropdowns--&gt;
                                                        &lt;div class=&quot;btn-group-vertical mb-2&quot;&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot;&gt;Button 1&lt;/button&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot;&gt;Button 2&lt;/button&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-light dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt; Button 3 &lt;/button&gt;
                                                            &lt;div class=&quot;dropdown-menu&quot;&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Dropdown link&lt;/a&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Dropdown link&lt;/a&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                        </div> <!-- end preview code-->
                    </div> <!-- end tab-content-->

                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->

        <div class="col-xl-6">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Toggle Button</h4>

                            <p class="text-muted font-14">Add <code>data-bs-toggle="button"</code> to toggle a button’s
                                <code>active</code> state. If you’re pre-toggling a button, you must manually add the
                                <code>.active</code> class <strong>and</strong> <code>aria-pressed="true"</code> to
                                ensure that it is conveyed appropriately to assistive technologies.</p>

                            <ul class="nav nav-tabs nav-bordered mb-3">
                                <li class="nav-item">
                                    <a href="#button-toggle-preview" data-bs-toggle="tab" aria-expanded="false"
                                       class="nav-link active">
                                        Preview
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#button-toggle-code" data-bs-toggle="tab" aria-expanded="true"
                                       class="nav-link">
                                        Code
                                    </a>
                                </li>
                            </ul> <!-- end nav-->
                            <div class="tab-content">
                                <div class="tab-pane show active" id="button-toggle-preview">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="button">Toggle
                                        button
                                    </button>
                                    <button type="button" class="btn btn-primary active" data-bs-toggle="button"
                                            aria-pressed="true">Active toggle button
                                    </button>
                                    <button type="button" class="btn btn-primary" disabled data-bs-toggle="button">
                                        Disabled toggle button
                                    </button>
                                </div> <!-- end preview-->

                                <div class="tab-pane code" id="button-toggle-code">
                                    <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                    <pre class="mb-0">
                                                            <span class="html escape">
                                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;button&quot;&gt;Toggle button&lt;/button&gt;
                                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-primary active&quot; data-bs-toggle=&quot;button&quot; aria-pressed=&quot;true&quot;&gt;Active toggle button&lt;/button&gt;
                                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; disabled data-bs-toggle=&quot;button&quot;&gt;Disabled toggle button&lt;/button&gt;
                                                            </span>
                                                        </pre> <!-- end highlight-->
                                </div> <!-- end preview code-->
                            </div> <!-- end tab-content-->

                        </div> <!-- end card-body -->
                    </div> <!-- end card-->
                </div><!--end col-->
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Button tags</h4>

                            <p class="text-muted font-14">The <code>.btn</code> classes are designed to be used with the
                                <code>&lt;button&gt;</code> element. However, you can also use these classes on <code>&lt;a&gt;</code>
                                or <code>&lt;input&gt;</code> elements (though some browsers may apply a slightly
                                different rendering).</p>

                            <ul class="nav nav-tabs nav-bordered mb-3">
                                <li class="nav-item">
                                    <a href="#button-tags-preview" data-bs-toggle="tab" aria-expanded="false"
                                       class="nav-link active">
                                        Preview
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#button-tags-code" data-bs-toggle="tab" aria-expanded="true"
                                       class="nav-link">
                                        Code
                                    </a>
                                </li>
                            </ul> <!-- end nav-->
                            <div class="tab-content">
                                <div class="tab-pane show active" id="button-tags-preview">
                                    <a class="btn btn-primary" href="#" role="button">Link</a>
                                    <button class="btn btn-primary" type="submit">Button</button>
                                    <input class="btn btn-primary" type="button" value="Input">
                                    <input class="btn btn-primary" type="submit" value="Submit">
                                    <input class="btn btn-primary" type="reset" value="Reset">
                                </div> <!-- end preview-->

                                <div class="tab-pane code" id="button-tags-code">
                                    <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                    <pre class="mb-0">
                                                            <span class="html escape">
                                                                &lt;a class=&quot;btn btn-primary&quot; href=&quot;#&quot; role=&quot;button&quot;&gt;Link&lt;/a&gt;
                                                                &lt;button class=&quot;btn btn-primary&quot; type=&quot;submit&quot;&gt;Button&lt;/button&gt;
                                                                &lt;input class=&quot;btn btn-primary&quot; type=&quot;button&quot; value=&quot;Input&quot;&gt;
                                                                &lt;input class=&quot;btn btn-primary&quot; type=&quot;submit&quot; value=&quot;Submit&quot;&gt;
                                                                &lt;input class=&quot;btn btn-primary&quot; type=&quot;reset&quot; value=&quot;Reset&quot;&gt;
                                                            </span>
                                                        </pre> <!-- end highlight-->
                                </div> <!-- end preview code-->
                            </div> <!-- end tab-content-->

                        </div> <!-- end card-body -->
                    </div> <!-- end card-->
                </div>
            </div><!--end row-->
        </div> <!-- end col -->

    </div> <!-- end row -->

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Basic Button</h4>

                    <p class="text-muted font-14">Bootstrap has a base <code>.btn</code> class that sets up basic styles
                        such as padding and content alignment. By default, <code>.btn</code> controls have a transparent
                        border and background color, and lack any explicit focus and hover styles.</p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#button-basic-preview" data-bs-toggle="tab" aria-expanded="false"
                               class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#button-basic-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="button-basic-preview">
                            <button type="button" class="btn">Base class</button>
                        </div> <!-- end preview-->

                        <div class="tab-pane code" id="button-basic-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">&lt;button type=&quot;button&quot; class=&quot;btn&quot;&gt;Base class&lt;/button&gt;&lt;button type=&quot;button&quot; class=&quot;btn&quot;&gt;Base class&lt;/button&gt;</span>
                                                </pre> <!-- end highlight-->
                        </div> <!-- end preview code-->
                    </div> <!-- end tab-content-->

                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Focus Ring Custom</h4>
                    <p class="text-muted font-14">Click directly on the link below to see the focus ring in action, or
                        into the example below and then press <kbd>Tab</kbd>.</p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#focus-ring-custom-preview" data-bs-toggle="tab" aria-expanded="false"
                               class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#focus-ring-custom-code" data-bs-toggle="tab" aria-expanded="true"
                               class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="focus-ring-custom-preview">
                            <a href="#"
                               class="d-inline-flex focus-ring py-1 px-2 text-decoration-none border rounded-2">
                                Custom focus ring
                            </a>

                            <a href="#" class="d-inline-flex focus-ring py-1 px-2 text-decoration-none border rounded-2"
                               style="--ct-focus-ring-color: rgba(var(--ct-success-rgb), .25)">
                                Green focus ring
                            </a>

                            <a href="#" class="d-inline-flex focus-ring py-1 px-2 text-decoration-none border rounded-2"
                               style="--ct-focus-ring-x: 10px; --ct-focus-ring-y: 10px; --ct-focus-ring-blur: 4px">
                                Blurry offset focus ring
                            </a>
                        </div> <!-- end preview-->

                        <div class="tab-pane code" id="focus-ring-custom-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;a href=&quot;#&quot; class=&quot;d-inline-flex focus-ring py-1 px-2 text-decoration-none border rounded-2&quot;&gt;
                                                            Custom focus ring
                                                        &lt;/a&gt;

                                                        &lt;a href=&quot;#&quot; class=&quot;d-inline-flex focus-ring py-1 px-2 text-decoration-none border rounded-2&quot; style=&quot;--ct-focus-ring-color: rgba(var(--ct-success-rgb), .25)&quot;&gt;
                                                            Green focus ring
                                                        &lt;/a&gt;

                                                        &lt;a href=&quot;#&quot; class=&quot;d-inline-flex focus-ring py-1 px-2 text-decoration-none border rounded-2&quot; style=&quot;--ct-focus-ring-x: 10px; --ct-focus-ring-y: 10px; --ct-focus-ring-blur: 4px&quot;&gt;
                                                            Blurry offset focus ring
                                                        &lt;/a&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                        </div> <!-- end preview code-->
                    </div> <!-- end tab-content-->

                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div><!--end row-->

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Focus Ring Utilities</h4>
                    <p class="text-muted font-14">In addition to <code>.focus-ring</code>, we have several <code>.focus-ring-*</code>
                        utilities to modify the helper class defaults. Modify the color with any of our <a
                            href="ui-utilities.html">theme colors</a>. Note that the light and dark variants may not be
                        visible on all background colors given current color mode support.</p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#focus-ring-utilities-preview" data-bs-toggle="tab" aria-expanded="false"
                               class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#focus-ring-utilities-code" data-bs-toggle="tab" aria-expanded="true"
                               class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="focus-ring-utilities-preview">
                            <p><a href="#"
                                  class="d-inline-flex focus-ring focus-ring-primary py-1 px-2 text-decoration-none border rounded-2">Primary
                                    focus</a></p>
                            <p><a href="#"
                                  class="d-inline-flex focus-ring focus-ring-secondary py-1 px-2 text-decoration-none border rounded-2">Secondary
                                    focus</a></p>
                            <p><a href="#"
                                  class="d-inline-flex focus-ring focus-ring-success py-1 px-2 text-decoration-none border rounded-2">Success
                                    focus</a></p>
                            <p><a href="#"
                                  class="d-inline-flex focus-ring focus-ring-danger py-1 px-2 text-decoration-none border rounded-2">Danger
                                    focus</a></p>
                            <p><a href="#"
                                  class="d-inline-flex focus-ring focus-ring-warning py-1 px-2 text-decoration-none border rounded-2">Warning
                                    focus</a></p>
                            <p><a href="#"
                                  class="d-inline-flex focus-ring focus-ring-info py-1 px-2 text-decoration-none border rounded-2">Info
                                    focus</a></p>
                            <p><a href="#"
                                  class="d-inline-flex focus-ring focus-ring-light py-1 px-2 text-decoration-none border rounded-2">Light
                                    focus</a></p>
                            <p class="mb-0"><a href="#"
                                               class="d-inline-flex focus-ring focus-ring-dark py-1 px-2 text-decoration-none border rounded-2">Dark
                                    focus</a></p>
                        </div> <!-- end preview-->

                        <div class="tab-pane code" id="focus-ring-utilities-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;p&gt;&lt;a href=&quot;#&quot; class=&quot;d-inline-flex focus-ring focus-ring-primary py-1 px-2 text-decoration-none border rounded-2&quot;&gt;Primary focus&lt;/a&gt;&lt;/p&gt;
                                                        &lt;p&gt;&lt;a href=&quot;#&quot; class=&quot;d-inline-flex focus-ring focus-ring-secondary py-1 px-2 text-decoration-none border rounded-2&quot;&gt;Secondary focus&lt;/a&gt;&lt;/p&gt;
                                                        &lt;p&gt;&lt;a href=&quot;#&quot; class=&quot;d-inline-flex focus-ring focus-ring-success py-1 px-2 text-decoration-none border rounded-2&quot;&gt;Success focus&lt;/a&gt;&lt;/p&gt;
                                                        &lt;p&gt;&lt;a href=&quot;#&quot; class=&quot;d-inline-flex focus-ring focus-ring-danger py-1 px-2 text-decoration-none border rounded-2&quot;&gt;Danger focus&lt;/a&gt;&lt;/p&gt;
                                                        &lt;p&gt;&lt;a href=&quot;#&quot; class=&quot;d-inline-flex focus-ring focus-ring-warning py-1 px-2 text-decoration-none border rounded-2&quot;&gt;Warning focus&lt;/a&gt;&lt;/p&gt;
                                                        &lt;p&gt;&lt;a href=&quot;#&quot; class=&quot;d-inline-flex focus-ring focus-ring-info py-1 px-2 text-decoration-none border rounded-2&quot;&gt;Info focus&lt;/a&gt;&lt;/p&gt;
                                                        &lt;p&gt;&lt;a href=&quot;#&quot; class=&quot;d-inline-flex focus-ring focus-ring-light py-1 px-2 text-decoration-none border rounded-2&quot;&gt;Light focus&lt;/a&gt;&lt;/p&gt;
                                                        &lt;p class=&quot;mb-0&quot;&gt;&lt;a href=&quot;#&quot; class=&quot;d-inline-flex focus-ring focus-ring-dark py-1 px-2 text-decoration-none border rounded-2&quot;&gt;Dark focus&lt;/a&gt;&lt;/p&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                        </div> <!-- end preview code-->
                    </div> <!-- end tab-content-->

                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>

@endsection
@section('script-bottom')
    @vite(['resources/js/hyper-syntax.js'])
@endsection