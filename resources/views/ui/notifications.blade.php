@extends('layouts.vertical', ['title' => 'Notifications', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('css')
    @vite(['node_modules/jquery-toast-plugin/dist/jquery.toast.min.css'])
@endsection

@section('content')
    @include('layouts.shared/page-title', ['sub_title' => 'Base UI', 'page_title' => 'Notifications'])

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="header-title">Bootstrap Toasts</h4>
                    <p class="text-muted font-14">Push notifications to your visitors with a toast, a
                        lightweight and easily customizable alert message.</p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#bootstrap-toasts-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#bootstrap-toasts-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="bootstrap-toasts-preview">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5 class="mb-2">Basic</h5>
                                    <p class="text-muted font-14">Toasts are as flexible as you need and
                                        have very little required markup. At a minimum, we
                                        require a single element to contain your “toasted” content and
                                        strongly encourage a dismiss button.</p>
                                    <div class="p-3">

                                        <div class="toast fade show" role="alert" aria-live="assertive"
                                            aria-atomic="true">
                                            <div class="toast-header">
                                                <img src="/images/logo-dark-sm.png" alt="brand-logo" height="16"
                                                    class="me-1" />
                                                <strong class="me-auto">Hyper</strong>
                                                <small>11 mins ago</small>
                                                <button type="button" class="ms-2 btn-close" data-bs-dismiss="toast"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="toast-body">
                                                Hello, world! This is a toast message.
                                            </div>
                                        </div>
                                        <!--end toast-->

                                    </div>
                                </div> <!-- end col-->
                                <div class="col-md-6">
                                    <h5 class="mb-2">Translucent</h5>
                                    <p class="text-muted font-14">Toasts are slightly translucent, too,
                                        so they blend over whatever they might appear over.
                                        For browsers that support the backdrop-filter CSS property,
                                        we’ll also attempt to blur the elements under a toast.</p>

                                    <div class="p-3 bg-light">
                                        <div class="toast fade show" role="alert" aria-live="assertive"
                                            aria-atomic="true">
                                            <div class="toast-header">
                                                <img src="/images/logo-dark-sm.png" alt="brand-logo" height="16"
                                                    class="me-1" />
                                                <strong class="me-auto">Hyper</strong>
                                                <small>11 mins ago</small>
                                                <button type="button" class="ms-2 btn-close" data-bs-dismiss="toast"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="toast-body">
                                                Hello, world! This is a toast message.
                                            </div>
                                        </div>
                                        <!--end toast-->
                                    </div>
                                </div> <!-- end col-->
                            </div>
                            <!-- end row-->

                            <div class="row">
                                <div class="col-md-6 mt-4">
                                    <h5 class="mb-2">Stacking</h5>
                                    <p class="text-muted font-14">When you have multiple toasts, we
                                        default to vertiaclly stacking them in a readable manner.</p>
                                    <div class="p-3">
                                        <div aria-live="polite" aria-atomic="true"
                                            style="position: relative; min-height: 200px;">
                                            <!-- Position it -->
                                            <div class="toast-container" style="position: absolute; top: 0; right: 0;">

                                                <!-- Then put toasts within -->
                                                <div class="toast fade show" role="alert" aria-live="assertive"
                                                    aria-atomic="true">
                                                    <div class="toast-header">
                                                        <img src="/images/logo-dark-sm.png" alt="brand-logo" height="16"
                                                            class="me-1" />
                                                        <strong class="me-auto">Hyper</strong>
                                                        <small class="text-muted">just now</small>
                                                        <button type="button" class="ms-2 btn-close"
                                                            data-bs-dismiss="toast" aria-label="Close"></button>
                                                    </div>
                                                    <div class="toast-body">
                                                        See? Just like this.
                                                    </div>
                                                </div>
                                                <!--end toast-->

                                                <div class="toast fade show" role="alert" aria-live="assertive"
                                                    aria-atomic="true">
                                                    <div class="toast-header">
                                                        <img src="/images/logo-dark-sm.png" alt="brand-logo" height="16"
                                                            class="me-1" />
                                                        <strong class="me-auto">Hyper</strong>
                                                        <small class="text-muted">2 seconds ago</small>
                                                        <button type="button" class="ms-2 btn-close"
                                                            data-bs-dismiss="toast" aria-label="Close"></button>
                                                    </div>
                                                    <div class="toast-body">
                                                        Heads up, toasts will stack automatically
                                                    </div>
                                                </div>
                                                <!--end toast-->
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end col-->
                                <div class="col-md-6 mt-4">
                                    <h5 class="mb-2">Placement</h5>
                                    <p class="text-muted font-14">Place toasts with custom CSS as you
                                        need them. The top right is often used for
                                        notifications, as is the top middle. If you’re only ever going
                                        to show one toast at a time, put the positioning
                                        styles right on the <code>.toast</code>.</p>
                                    <div class="p-3">
                                        <div aria-live="polite" aria-atomic="true"
                                            class="d-flex justify-content-center align-items-center"
                                            style="min-height: 200px;">

                                            <!-- Then put toasts within -->
                                            <div class="toast fade show" role="alert" aria-live="assertive"
                                                aria-atomic="true" data-bs-toggle="toast">
                                                <div class="toast-header">
                                                    <img src="/images/logo-dark-sm.png" alt="brand-logo" height="16"
                                                        class="me-1" />
                                                    <strong class="me-auto">Hyper</strong>
                                                    <small>11 mins ago</small>
                                                    <button type="button" class="ms-2 btn-close" data-bs-dismiss="toast"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="toast-body">
                                                    Hello, world! This is a toast message.
                                                </div>
                                            </div>
                                            <!--end toast-->
                                        </div>
                                    </div>
                                </div> <!-- end col-->
                            </div>
                            <!-- end row-->
                        </div> <!-- end preview-->

                        <div class="tab-pane code" id="bootstrap-toasts-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;!-- Basic Toast --&gt;
                                                        &lt;div class=&quot;toast fade show&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
                                                            &lt;div class=&quot;toast-header&quot;&gt;
                                                                &lt;img src=&quot;assets/images/logo-dark-sm.png&quot; alt=&quot;brand-logo&quot; height=&quot;12&quot; class=&quot;me-1&quot; /&gt;
                                                                &lt;strong class=&quot;me-auto&quot;&gt;Hyper&lt;/strong&gt;
                                                                &lt;small&gt;11 mins ago&lt;/small&gt;
                                                                &lt;button type=&quot;button&quot; class=&quot;ms-2 btn-close&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;toast-body&quot;&gt;
                                                                Hello, world! This is a toast message.
                                                            &lt;/div&gt;
                                                        &lt;/div&gt; &lt;!--end toast--&gt;

                                                        &lt;!-- Translucent Toast --&gt;
                                                        &lt;div class=&quot;toast fade show&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
                                                            &lt;div class=&quot;toast-header&quot;&gt;
                                                                &lt;img src=&quot;assets/images/logo-dark-sm.png&quot; alt=&quot;brand-logo&quot; height=&quot;12&quot; class=&quot;me-1&quot; /&gt;
                                                                &lt;strong class=&quot;me-auto&quot;&gt;Hyper&lt;/strong&gt;
                                                                &lt;small&gt;11 mins ago&lt;/small&gt;
                                                                &lt;button type=&quot;button&quot; class=&quot;ms-2 btn-close&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;toast-body&quot;&gt;
                                                                Hello, world! This is a toast message.
                                                            &lt;/div&gt;
                                                        &lt;/div&gt; &lt;!--end toast--&gt;

                                                        &lt;!-- Stacking Toast --&gt;
                                                        &lt;div aria-live=&quot;polite&quot; aria-atomic=&quot;true&quot; style=&quot;position: relative; min-height: 200px;&quot;&gt;
                                                            &lt;!-- Position it --&gt;
                                                            &lt;div class=&quot;toast-container&quot; style=&quot;position: absolute; top: 0; right: 0;&quot;&gt;

                                                                &lt;!-- Then put toasts within --&gt;
                                                                &lt;div class=&quot;toast fade show&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
                                                                    &lt;div class=&quot;toast-header&quot;&gt;
                                                                        &lt;img src=&quot;assets/images/logo-dark-sm.png&quot; alt=&quot;brand-logo&quot; height=&quot;12&quot; class=&quot;me-1&quot; /&gt;
                                                                        &lt;strong class=&quot;me-auto&quot;&gt;Hyper&lt;/strong&gt;
                                                                        &lt;small class=&quot;text-muted&quot;&gt;just now&lt;/small&gt;
                                                                        &lt;button type=&quot;button&quot; class=&quot;ms-2 btn-close&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;toast-body&quot;&gt;
                                                                        See? Just like this.
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt; &lt;!--end toast--&gt;

                                                                &lt;div class=&quot;toast fade show&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
                                                                    &lt;div class=&quot;toast-header&quot;&gt;
                                                                        &lt;img src=&quot;assets/images/logo-dark-sm.png&quot; alt=&quot;brand-logo&quot; height=&quot;12&quot; class=&quot;me-1&quot; /&gt;
                                                                        &lt;strong class=&quot;me-auto&quot;&gt;Hyper&lt;/strong&gt;
                                                                        &lt;small class=&quot;text-muted&quot;&gt;2 seconds ago&lt;/small&gt;
                                                                        &lt;button type=&quot;button&quot; class=&quot;ms-2 btn-close&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;toast-body&quot;&gt;
                                                                        Heads up, toasts will stack automatically
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt; &lt;!--end toast--&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;

                                                        &lt;!-- Placement Toast --&gt;
                                                        &lt;div aria-live=&quot;polite&quot; aria-atomic=&quot;true&quot; class=&quot;d-flex justify-content-center align-items-center&quot; style=&quot;min-height: 200px;&quot;&gt;
                                                            &lt;!-- Then put toasts within --&gt;
                                                            &lt;div class=&quot;toast fade show&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
                                                                &lt;div class=&quot;toast-header&quot;&gt;
                                                                    &lt;img src=&quot;assets/images/logo-dark-sm.png&quot; alt=&quot;brand-logo&quot; height=&quot;12&quot; class=&quot;me-1&quot; /&gt;
                                                                    &lt;strong class=&quot;me-auto&quot;&gt;Hyper&lt;/strong&gt;
                                                                    &lt;small&gt;11 mins ago&lt;/small&gt;
                                                                    &lt;button type=&quot;button&quot; class=&quot;ms-2 btn-close&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;toast-body&quot;&gt;
                                                                    Hello, world! This is a toast message.
                                                                &lt;/div&gt;
                                                            &lt;/div&gt; &lt;!--end toast--&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                        </div> <!-- end preview code-->
                    </div> <!-- end tab-content-->
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div><!-- end row-->

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Custom content</h4>
                    <p class="text-muted font-14">Alternatively, you can also add additional controls
                        and components to toasts.</p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#custom-toast-preview" data-bs-toggle="tab" aria-expanded="false"
                                class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#custom-toast-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="custom-toast-preview">
                            <div class="toast show align-items-center mb-4" role="alert" aria-live="assertive"
                                aria-atomic="true">
                                <div class="d-flex">
                                    <div class="toast-body">
                                        Hello, world! This is a toast message.
                                    </div>
                                    <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast"
                                        aria-label="Close"></button>
                                </div>
                            </div>

                            <div class="toast show align-items-center text-white bg-primary border-0 mb-4" role="alert"
                                aria-live="assertive" aria-atomic="true">
                                <div class="d-flex">
                                    <div class="toast-body">
                                        Hello, world! This is a toast message.
                                    </div>
                                    <button type="button" class="btn-close btn-close-white me-2 m-auto"
                                        data-bs-dismiss="toast" aria-label="Close"></button>
                                </div>
                            </div>

                            <div class="toast show mb-4" role="alert" aria-live="assertive" aria-atomic="true">
                                <div class="toast-body">
                                    Hello, world! This is a toast message.
                                    <div class="mt-2 pt-2 border-top">
                                        <button type="button" class="btn btn-primary btn-sm">Take
                                            action</button>
                                        <button type="button" class="btn btn-secondary btn-sm"
                                            data-bs-dismiss="toast">Close</button>
                                    </div>
                                </div>
                            </div>

                            <div class="toast bg-primary show" role="alert" aria-live="assertive" aria-atomic="true">
                                <div class="toast-body text-white">
                                    Hello, world! This is a toast message.
                                    <div class="mt-2 pt-2 border-top">
                                        <button type="button" class="btn btn-light btn-sm">Take
                                            action</button>
                                        <button type="button" class="btn btn-secondary btn-sm"
                                            data-bs-dismiss="toast">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane code" id="custom-toast-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;div class=&quot;toast show align-items-center mb-4&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
                                                            &lt;div class=&quot;d-flex&quot;&gt;
                                                                &lt;div class=&quot;toast-body&quot;&gt;
                                                                Hello, world! This is a toast message.
                                                                &lt;/div&gt;
                                                                &lt;button type=&quot;button&quot; class=&quot;btn-close me-2 m-auto&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;

                                                        &lt;div class=&quot;toast show align-items-center text-white bg-primary border-0 mb-4&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
                                                            &lt;div class=&quot;d-flex&quot;&gt;
                                                            &lt;div class=&quot;toast-body&quot;&gt;
                                                                Hello, world! This is a toast message.
                                                            &lt;/div&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;btn-close btn-close-white me-2 m-auto&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;

                                                        &lt;div class=&quot;toast show mb-4&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
                                                            &lt;div class=&quot;toast-body&quot;&gt;
                                                                Hello, world! This is a toast message.
                                                                &lt;div class=&quot;mt-2 pt-2 border-top&quot;&gt;
                                                                    &lt;button type=&quot;button&quot; class=&quot;btn btn-primary btn-sm&quot;&gt;Take action&lt;/button&gt;
                                                                    &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary btn-sm&quot; data-bs-dismiss=&quot;toast&quot;&gt;Close&lt;/button&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;

                                                        &lt;div class=&quot;toast bg-primary show&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
                                                            &lt;div class=&quot;toast-body text-white&quot;&gt;
                                                                Hello, world! This is a toast message.
                                                                &lt;div class=&quot;mt-2 pt-2 border-top&quot;&gt;
                                                                    &lt;button type=&quot;button&quot; class=&quot;btn btn-light btn-sm&quot;&gt;Take action&lt;/button&gt;
                                                                    &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary btn-sm&quot; data-bs-dismiss=&quot;toast&quot;&gt;Close&lt;/button&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                        </div> <!-- end preview code-->
                    </div> <!-- end tab-content-->
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Placement</h4>
                    <p class="text-muted font-14">Place toasts with custom CSS as you need them. The top
                        right is often used for notifications, as is the top middle. If you’re only ever
                        going to show one toast at a time, put the positioning styles right on the
                        <code>.toast</code>.
                    </p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#placement-toast-preview" data-bs-toggle="tab" aria-expanded="false"
                                class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#placement-toast-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->

                    <div class="tab-content">
                        <div class="tab-pane show active" id="placement-toast-preview">
                            <form>
                                <div class="mb-3">
                                    <label for="selectToastPlacement">Toast placement</label>
                                    <select class="form-select mt-2" id="selectToastPlacement">
                                        <option value="" selected>Select a position...</option>
                                        <option value="top-0 start-0">Top left</option>
                                        <option value="top-0 start-50 translate-middle-x">Top center
                                        </option>
                                        <option value="top-0 end-0">Top right</option>
                                        <option value="top-50 start-0 translate-middle-y">Middle left
                                        </option>
                                        <option value="top-50 start-50 translate-middle">Middle center
                                        </option>
                                        <option value="top-50 end-0 translate-middle-y">Middle right
                                        </option>
                                        <option value="bottom-0 start-0">Bottom left</option>
                                        <option value="bottom-0 start-50 translate-middle-x">Bottom
                                            center</option>
                                        <option value="bottom-0 end-0">Bottom right</option>
                                    </select>
                                </div>
                            </form>
                            <div aria-live="polite" aria-atomic="true"
                                class="bg-light position-relative bd-example-toasts" style="min-height:294px">
                                <div class="toast-container position-absolute p-3" id="toastPlacement">
                                    <div class="toast show">
                                        <div class="toast-header">
                                            <img src="/images/logo-dark-sm.png" alt="brand-logo" height="16"
                                                class="me-1" />
                                            <strong class="me-auto">Hyper</strong>
                                            <small>11 mins ago</small>
                                        </div>
                                        <div class="toast-body">
                                            Hello, world! This is a toast message.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane code" id="placement-toast-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;form&gt;
                                                            &lt;div class=&quot;mb-3&quot;&gt;
                                                                &lt;label for=&quot;selectToastPlacement&quot;&gt;Toast placement&lt;/label&gt;
                                                                &lt;select class=&quot;form-select mt-2&quot; id=&quot;selectToastPlacement&quot;&gt;
                                                                    &lt;option value=&quot;&quot; selected&gt;Select a position...&lt;/option&gt;
                                                                    &lt;option value=&quot;top-0 start-0&quot;&gt;Top left&lt;/option&gt;
                                                                    &lt;option value=&quot;top-0 start-50 translate-middle-x&quot;&gt;Top center&lt;/option&gt;
                                                                    &lt;option value=&quot;top-0 end-0&quot;&gt;Top right&lt;/option&gt;
                                                                    &lt;option value=&quot;top-50 start-0 translate-middle-y&quot;&gt;Middle left&lt;/option&gt;
                                                                    &lt;option value=&quot;top-50 start-50 translate-middle&quot;&gt;Middle center&lt;/option&gt;
                                                                    &lt;option value=&quot;top-50 end-0 translate-middle-y&quot;&gt;Middle right&lt;/option&gt;
                                                                    &lt;option value=&quot;bottom-0 start-0&quot;&gt;Bottom left&lt;/option&gt;
                                                                    &lt;option value=&quot;bottom-0 start-50 translate-middle-x&quot;&gt;Bottom center&lt;/option&gt;
                                                                    &lt;option value=&quot;bottom-0 end-0&quot;&gt;Bottom right&lt;/option&gt;
                                                                &lt;/select&gt;
                                                            &lt;/div&gt;
                                                        &lt;/form&gt;
                                                        &lt;div aria-live=&quot;polite&quot; aria-atomic=&quot;true&quot; class=&quot;bg-light position-relative bd-example-toasts&quot; style=&quot;min-height:294px&quot;&gt;
                                                            &lt;div class=&quot;toast-container position-absolute p-3&quot; id=&quot;toastPlacement&quot;&gt;
                                                                &lt;div class=&quot;toast show&quot;&gt;
                                                                    &lt;div class=&quot;toast-header&quot;&gt;
                                                                        &lt;img src=&quot;assets/images/logo-dark-sm.png&quot; alt=&quot;brand-logo&quot; height=&quot;12&quot; class=&quot;me-1&quot; /&gt;
                                                                        &lt;strong class=&quot;me-auto&quot;&gt;Hyper&lt;/strong&gt;
                                                                        &lt;small&gt;11 mins ago&lt;/small&gt;
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;toast-body&quot;&gt;
                                                                        Hello, world! This is a toast message.
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                        </div> <!-- end preview code-->
                    </div> <!-- end tab-content-->
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div><!-- end row-->


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="header-title">Jquery Toast</h4>
                    <p class="text-muted font-14">Toasts based notifications can be used to to show
                        important alerts or information to users.</p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#jquery-toast-preview" data-bs-toggle="tab" aria-expanded="false"
                                class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#jquery-toast-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="jquery-toast-preview">
                            <div class="row">
                                <div class="col-md-3 col-sm-6">
                                    <div class="text-center p-1 pb-3 p-sm-3">
                                        <p>Info Example</p>
                                        <button type="button" class="btn btn-info btn-sm" id="toastr-one">Click
                                            me</button>
                                    </div>
                                </div> <!-- end col-->
                                <div class="col-md-3 col-sm-6">
                                    <div class="text-center p-1 pb-3 p-sm-3">
                                        <p>Warning Example</p>
                                        <button type="button" class="btn btn-warning btn-sm" id="toastr-two">Click
                                            me</button>
                                    </div>
                                </div> <!-- end col-->
                                <div class="col-md-3 col-sm-6">
                                    <div class="text-center p-1 pb-3 p-sm-3">
                                        <p>Success Example</p>
                                        <button type="button" class="btn btn-success btn-sm" id="toastr-three">Click
                                            me</button>
                                    </div>
                                </div> <!-- end col-->
                                <div class="col-md-3 col-sm-6">
                                    <div class="text-center p-1 pb-3 p-sm-3">
                                        <p>Danger Example</p>
                                        <button type="button" class="btn btn-danger btn-sm" id="toastr-four">Click
                                            me</button>
                                    </div>
                                </div> <!-- end col-->
                            </div>
                            <!-- end row-->

                            <div class="row">
                                <div class="col-md-3 col-sm-6">
                                    <div class="text-center p-1 pb-3 p-sm-3">
                                        <p>The text can be an array</p>
                                        <button type="button" class="btn btn-light btn-sm" id="toastr-five">Click
                                            me</button>
                                    </div>
                                </div> <!-- end col-->
                                <div class="col-md-3 col-sm-6">
                                    <div class="text-center p-1 pb-3 p-sm-3">
                                        <p>Put some HTML in the text</p>
                                        <button type="button" class="btn btn-light btn-sm" id="toastr-six">Click
                                            me</button>
                                    </div>
                                </div> <!-- end col-->
                                <div class="col-md-3 col-sm-6">
                                    <div class="text-center p-1 pb-3 p-sm-3">
                                        <p>Making them sticky</p>
                                        <button type="button" class="btn btn-light btn-sm" id="toastr-seven">Click
                                            me</button>
                                    </div>
                                </div> <!-- end col-->
                                <div class="col-md-3 col-sm-6">
                                    <div class="text-center p-1 pb-3 p-sm-3">
                                        <p>Fade transitions</p>
                                        <button type="button" class="btn btn-light btn-sm" id="toastr-eight">Click
                                            me</button>
                                    </div>
                                </div> <!-- end col-->
                            </div>
                            <!-- end row-->
                        </div> <!-- end preview-->

                        <div class="tab-pane code" id="jquery-toast-code">
                            <div class="p-1">
                                <h5 class="mb-1">How to customize the style of toast?</h5>
                                <p class="font-13 text-muted">Open file
                                    <code>src/scss/custom/plugins/_toaster.scss</code> and
                                    change the different style to change the background, text or
                                    other
                                    colors.
                                </p>

                                <pre class="mb-0">
                                                        <span class="html escape">
                                                            &lt;script&gt;$.NotificationApp.send(&quot;Title&quot;,&quot;Your awesome message text&quot;,&quot;Position&quot;,&quot;Background color&quot;,&quot;Icon&quot;)&lt;/script&gt;
                                                        </span>
                                                    </pre> <!-- end highlight-->

                                <p class="mt-2">Following positions for toast are supported at the
                                    moment:</p>
                                <ul>
                                    <li>
                                        <code>bottom-left</code> to show the toast at bottom left
                                        position
                                    </li>
                                    <li>
                                        <code>bottom-right</code> to show the toast at bottom right
                                        position
                                    </li>
                                    <li>
                                        <code>bottom-center</code> to show the toast at bottom center
                                        position
                                    </li>
                                    <li>
                                        <code>top-right</code> to show the toast at top right position
                                    </li>
                                    <li>
                                        <code>top-left</code> to show the toast at top left position
                                    </li>
                                    <li>
                                        <code>top-center</code> to show the toast at top center position
                                    </li>
                                    <li>
                                        <code>mid-center</code> to show the toast at middle position
                                    </li>
                                </ul>

                                <p>For more options, please refer to official documentation <a
                                        href="https://kamranahmed.info/toast" target="_blank">here</a>
                                </p>
                            </div>

                        </div> <!-- end preview code-->
                    </div> <!-- end tab-content-->

                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>
    <!-- end row-->
@endsection

@section('script-bottom')
    @vite(['resources/js/pages/demo.toastr.js','resources/js/hyper-syntax.js'])
@endsection
