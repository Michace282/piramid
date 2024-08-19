@extends('layouts.vertical', ['title' => 'Dragula', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')
    @include('layouts.shared/page-title', ['sub_title' => 'Extended', 'page_title' => 'Dragula'])

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Simple Drag and Drop Example</h4>
                    <p class="text-muted font-14">
                        Just specify the data attribute <code>data-plugin='dragula'</code> to have drag and drop support in
                        your container.
                    </p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#simple-drag-preview" data-bs-toggle="tab" aria-expanded="false"
                                class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#simple-drag-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="simple-drag-preview">
                            <div class="row" id="simple-dragula" data-plugin="dragula">
                                <div class="col-md-4">
                                    <div class="card mb-0 mt-3 text-white bg-primary">
                                        <div class="card-body">
                                            <blockquote class="card-bodyquote mb-0">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                                    erat a ante.</p>
                                                <footer>Someone famous in <cite title="Source Title">Source Title</cite>
                                                </footer>
                                            </blockquote>
                                        </div> <!-- end card-body-->
                                    </div> <!-- end card-->
                                </div> <!-- end col-->

                                <div class="col-md-4">
                                    <div class="card mb-0 mt-3 bg-secondary text-white">
                                        <div class="card-body">
                                            <blockquote class="card-bodyquote mb-0">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                                    erat a ante.</p>
                                                <footer>Someone famous in <cite title="Source Title">Source Title</cite>
                                                </footer>
                                            </blockquote>
                                        </div> <!-- end card-body-->
                                    </div> <!-- end card-->
                                </div> <!-- end col-->

                                <div class="col-md-4">
                                    <div class="card mb-0 mt-3 text-white bg-success">
                                        <div class="card-body">
                                            <blockquote class="card-bodyquote mb-0">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                                    erat a ante.</p>
                                                <footer>Someone famous in <cite title="Source Title">Source Title</cite>
                                                </footer>
                                            </blockquote>
                                        </div> <!-- end card-body-->
                                    </div> <!-- end card-->
                                </div> <!-- end col-->

                                <div class="col-md-4">
                                    <div class="card mb-0 mt-3 text-white bg-info text-xs-center">
                                        <div class="card-body">
                                            <blockquote class="card-bodyquote mb-0">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                                    erat a ante.</p>
                                                <footer>Someone famous in <cite title="Source Title">Source Title</cite>
                                                </footer>
                                            </blockquote>
                                        </div> <!-- end card-body-->
                                    </div> <!-- end card-->
                                </div> <!-- end col-->

                                <div class="col-md-4">
                                    <div class="card mb-0 mt-3 text-white bg-warning text-xs-center">
                                        <div class="card-body">
                                            <blockquote class="card-bodyquote mb-0">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                                    erat a ante.</p>
                                                <footer>Someone famous in <cite title="Source Title">Source Title</cite>
                                                </footer>
                                            </blockquote>
                                        </div> <!-- end card-body-->
                                    </div> <!-- end card-->
                                </div> <!-- end col-->

                                <div class="col-md-4">
                                    <div class="card mb-0 mt-3 text-white bg-danger text-xs-center">
                                        <div class="card-body">
                                            <blockquote class="card-bodyquote mb-0">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                                    erat a ante.</p>
                                                <footer>Someone famous in <cite title="Source Title">Source Title</cite>
                                                </footer>
                                            </blockquote>
                                        </div> <!-- end card-body-->
                                    </div> <!-- end card-->
                                </div> <!-- end col-->

                            </div>
                            <!-- end row-->
                        </div> <!-- end preview-->

                        <div class="tab-pane code" id="simple-drag-code">
                            <p class="m-2">Make sure to include following js files at end of <code>body element</code>
                            </p>

                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;script src=&quot;assets/vendor/dragula/dragula.min.js&quot;&gt;&lt;/script&gt;
                                                        &lt;script src=&quot;assets/js/ui/component.dragula.js&quot;&gt;&lt;/script&gt;
                                                    </span>

                                                    <span class="html escape">
                                                        &lt;div class=&quot;row&quot; id=&quot;simple-dragula&quot; data-plugin=&quot;dragula&quot;&gt;
                                                            &lt;div class=&quot;col-md-4&quot;&gt;
                                                                &lt;div class=&quot;card mb-0 mt-3 text-white bg-primary&quot;&gt;
                                                                    &lt;div class=&quot;card-body&quot;&gt;
                                                                        &lt;blockquote class=&quot;card-bodyquote mb-0&quot;&gt;
                                                                            &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                                                                erat a ante.&lt;/p&gt;
                                                                            &lt;footer&gt;Someone famous in &lt;cite title=&quot;Source Title&quot;&gt;Source Title&lt;/cite&gt;
                                                                            &lt;/footer&gt;
                                                                        &lt;/blockquote&gt;
                                                                    &lt;/div&gt; &lt;!-- end card-body--&gt;
                                                                &lt;/div&gt; &lt;!-- end card--&gt;
                                                            &lt;/div&gt; &lt;!-- end col--&gt;

                                                            &lt;div class=&quot;col-md-4&quot;&gt;
                                                                &lt;div class=&quot;card mb-0 mt-3 bg-secondary text-white&quot;&gt;
                                                                    &lt;div class=&quot;card-body&quot;&gt;
                                                                        &lt;blockquote class=&quot;card-bodyquote mb-0&quot;&gt;
                                                                            &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                                                                erat a ante.&lt;/p&gt;
                                                                            &lt;footer&gt;Someone famous in &lt;cite title=&quot;Source Title&quot;&gt;Source Title&lt;/cite&gt;
                                                                            &lt;/footer&gt;
                                                                        &lt;/blockquote&gt;
                                                                    &lt;/div&gt; &lt;!-- end card-body--&gt;
                                                                &lt;/div&gt; &lt;!-- end card--&gt;
                                                            &lt;/div&gt; &lt;!-- end col--&gt;

                                                            &lt;div class=&quot;col-md-4&quot;&gt;
                                                                &lt;div class=&quot;card mb-0 mt-3 text-white bg-success&quot;&gt;
                                                                    &lt;div class=&quot;card-body&quot;&gt;
                                                                        &lt;blockquote class=&quot;card-bodyquote mb-0&quot;&gt;
                                                                            &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                                                                erat a ante.&lt;/p&gt;
                                                                            &lt;footer&gt;Someone famous in &lt;cite title=&quot;Source Title&quot;&gt;Source Title&lt;/cite&gt;
                                                                            &lt;/footer&gt;
                                                                        &lt;/blockquote&gt;
                                                                    &lt;/div&gt; &lt;!-- end card-body--&gt;
                                                                &lt;/div&gt; &lt;!-- end card--&gt;
                                                            &lt;/div&gt; &lt;!-- end col--&gt;

                                                            &lt;div class=&quot;col-md-4&quot;&gt;
                                                                &lt;div class=&quot;card mb-0 mt-3 text-white bg-info text-xs-center&quot;&gt;
                                                                    &lt;div class=&quot;card-body&quot;&gt;
                                                                        &lt;blockquote class=&quot;card-bodyquote mb-0&quot;&gt;
                                                                            &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                                                                erat a ante.&lt;/p&gt;
                                                                            &lt;footer&gt;Someone famous in &lt;cite title=&quot;Source Title&quot;&gt;Source Title&lt;/cite&gt;
                                                                            &lt;/footer&gt;
                                                                        &lt;/blockquote&gt;
                                                                    &lt;/div&gt; &lt;!-- end card-body--&gt;
                                                                &lt;/div&gt; &lt;!-- end card--&gt;
                                                            &lt;/div&gt; &lt;!-- end col--&gt;

                                                            &lt;div class=&quot;col-md-4&quot;&gt;
                                                                &lt;div class=&quot;card mb-0 mt-3 text-white bg-warning text-xs-center&quot;&gt;
                                                                    &lt;div class=&quot;card-body&quot;&gt;
                                                                        &lt;blockquote class=&quot;card-bodyquote mb-0&quot;&gt;
                                                                            &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                                                                erat a ante.&lt;/p&gt;
                                                                            &lt;footer&gt;Someone famous in &lt;cite title=&quot;Source Title&quot;&gt;Source Title&lt;/cite&gt;
                                                                            &lt;/footer&gt;
                                                                        &lt;/blockquote&gt;
                                                                    &lt;/div&gt; &lt;!-- end card-body--&gt;
                                                                &lt;/div&gt; &lt;!-- end card--&gt;
                                                            &lt;/div&gt; &lt;!-- end col--&gt;

                                                            &lt;div class=&quot;col-md-4&quot;&gt;
                                                                &lt;div class=&quot;card mb-0 mt-3 text-white bg-danger text-xs-center&quot;&gt;
                                                                    &lt;div class=&quot;card-body&quot;&gt;
                                                                        &lt;blockquote class=&quot;card-bodyquote mb-0&quot;&gt;
                                                                            &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                                                                erat a ante.&lt;/p&gt;
                                                                            &lt;footer&gt;Someone famous in &lt;cite title=&quot;Source Title&quot;&gt;Source Title&lt;/cite&gt;
                                                                            &lt;/footer&gt;
                                                                        &lt;/blockquote&gt;
                                                                    &lt;/div&gt; &lt;!-- end card-body--&gt;
                                                                &lt;/div&gt; &lt;!-- end card--&gt;
                                                            &lt;/div&gt; &lt;!-- end col--&gt;
                                                        &lt;/div&gt;
                                                        &lt;!-- end row--&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                        </div> <!-- end preview code-->
                    </div> <!-- end tab-content-->

                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div> <!-- end row -->


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Move stuff between containers</h4>
                    <p class="text-muted font-14 mb-3">
                        Just specify the data attribute
                        <code>data-plugin='dragula'</code> and
                        <code>data-containers='["first-container-id", "second-container-id"]'</code>.
                    </p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#move-stuff-preview" data-bs-toggle="tab" aria-expanded="false"
                                class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#move-stuff-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="move-stuff-preview">
                            <div class="row" data-plugin="dragula"
                                data-containers='["company-list-left", "company-list-right"]'>
                                <div class="col-md-6">
                                    <div class="bg-dragula p-2 p-lg-4">
                                        <h5 class="mt-0">Part 1</h5>
                                        <div id="company-list-left" class="py-2">

                                            <div class="card mb-0 mt-2">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-start">
                                                        <img src="/images/users/avatar-1.jpg" alt="image"
                                                            class="me-3 d-none d-sm-block avatar-sm rounded-circle">
                                                        <div class="w-100 overflow-hidden">
                                                            <h5 class="mb-1 mt-0">Louis K. Bond</h5>
                                                            <p> Founder & CEO </p>
                                                            <p class="mb-0 text-muted">
                                                                <span class="fst-italic"><b>"</b>Disrupt pork belly
                                                                    poutine, asymmetrical tousled succulents selfies. You
                                                                    probably haven't heard of them tattooed master cleanse
                                                                    live-edge keffiyeh.</span>
                                                            </p>
                                                        </div> <!-- end w-100 -->
                                                    </div> <!-- end d-flex -->
                                                </div> <!-- end card-body -->
                                            </div> <!-- end col -->

                                            <div class="card mb-0 mt-2">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-start">
                                                        <img src="/images/users/avatar-2.jpg" alt="image"
                                                            class="me-3 d-none d-sm-block avatar-sm rounded-circle">
                                                        <div class="w-100 overflow-hidden">
                                                            <h5 class="mb-1 mt-0">Dennis N. Cloutier</h5>
                                                            <p> Software Engineer </p>
                                                            <p class="mb-0 text-muted">
                                                                <span class="fst-italic"><b>"</b>Disrupt pork belly
                                                                    poutine, asymmetrical tousled succulents selfies. You
                                                                    probably haven't heard of them tattooed master cleanse
                                                                    live-edge keffiyeh.</span>
                                                            </p>
                                                        </div> <!-- end w-100 -->
                                                    </div> <!-- end d-flex -->
                                                </div> <!-- end card-body -->
                                            </div> <!-- end col -->

                                            <div class="card mb-0 mt-2">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-start">
                                                        <img src="/images/users/avatar-3.jpg" alt="image"
                                                            class="me-3 d-none d-sm-block avatar-sm rounded-circle">
                                                        <div class="w-100 overflow-hidden">
                                                            <h5 class="mb-1 mt-0">Susan J. Sander</h5>
                                                            <p> Web Designer </p>
                                                            <p class="mb-0 text-muted">
                                                                <span class="fst-italic"><b>"</b>Disrupt pork belly
                                                                    poutine, asymmetrical tousled succulents selfies. You
                                                                    probably haven't heard of them tattooed master cleanse
                                                                    live-edge keffiyeh.</span>
                                                            </p>
                                                        </div> <!-- end w-100 -->
                                                    </div> <!-- end d-flex -->
                                                </div> <!-- end card-body -->
                                            </div> <!-- end col -->

                                        </div> <!-- end company-list-1-->
                                    </div> <!-- end div.bg-light-->
                                </div> <!-- end col -->

                                <div class="col-md-6">
                                    <div class="bg-dragula p-2 p-lg-4">
                                        <h5 class="mt-0">Part 2</h5>
                                        <div id="company-list-right" class="py-2">
                                            <div class="card mb-0 mt-2">

                                                <div class="card-body p-3">
                                                    <div class="d-flex align-items-start">
                                                        <img src="/images/users/avatar-4.jpg" alt="image"
                                                            class="me-3 d-none d-sm-block avatar-sm rounded-circle">
                                                        <div class="w-100 overflow-hidden">
                                                            <h5 class="mb-1 mt-0">James M. Short</h5>
                                                            <p> Web Developer </p>
                                                            <p class="mb-0 text-muted">
                                                                <span class="fst-italic"><b>"</b>Disrupt pork belly
                                                                    poutine, asymmetrical tousled succulents selfies. You
                                                                    probably haven't heard of them tattooed master cleanse
                                                                    live-edge keffiyeh </span>
                                                            </p>
                                                        </div> <!-- end w-100 -->
                                                    </div> <!-- end d-flex -->
                                                </div> <!-- end card-body -->
                                            </div> <!-- end col -->

                                            <div class="card mb-0 mt-2">
                                                <div class="card-body p-3">
                                                    <div class="d-flex align-items-start">
                                                        <img src="/images/users/avatar-5.jpg" alt="image"
                                                            class="me-3 d-none d-sm-block avatar-sm rounded-circle">
                                                        <div class="w-100 overflow-hidden">
                                                            <h5 class="mb-1 mt-0">Gabriel J. Snyder</h5>
                                                            <p> Business Analyst </p>
                                                            <p class="mb-0 text-muted">
                                                                <span class="fst-italic"><b>"</b>Disrupt pork belly
                                                                    poutine, asymmetrical tousled succulents selfies. You
                                                                    probably haven't heard of them tattooed master cleanse
                                                                    live-edge keffiyeh </span>
                                                            </p>
                                                        </div> <!-- end w-100 -->
                                                    </div> <!-- end d-flex -->
                                                </div> <!-- end card-body -->
                                            </div> <!-- end col -->

                                            <div class="card mb-0 mt-2">
                                                <div class="card-body p-3">
                                                    <div class="d-flex align-items-start">
                                                        <img src="/images/users/avatar-6.jpg" alt="image"
                                                            class="me-3 d-none d-sm-block avatar-sm rounded-circle">
                                                        <div class="w-100 overflow-hidden">
                                                            <h5 class="mb-1 mt-0">Louie C. Mason</h5>
                                                            <p>Human Resources</p>
                                                            <p class="mb-0 text-muted">
                                                                <span class="fst-italic"><b>"</b>Disrupt pork belly
                                                                    poutine, asymmetrical tousled succulents selfies. You
                                                                    probably haven't heard of them tattooed master cleanse
                                                                    live-edge keffiyeh </span>
                                                            </p>
                                                        </div> <!-- end w-100 -->
                                                    </div> <!-- end d-flex -->
                                                </div> <!-- end card-body -->
                                            </div> <!-- end col -->

                                        </div> <!-- end company-list-2-->
                                    </div> <!-- end div.bg-light-->
                                </div> <!-- end col -->

                            </div> <!-- end row -->
                        </div> <!-- end preview-->

                        <div class="tab-pane code" id="move-stuff-code">
                            <p class="m-2">Make sure to include following js files at end of <code>body element</code>
                            </p>

                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;script src=&quot;assets/vendor/dragula/dragula.min.js&quot;&gt;&lt;/script&gt;
                                                        &lt;script src=&quot;assets/js/ui/component.dragula.js&quot;&gt;&lt;/script&gt;
                                                    </span>

                                                    <span class="html escape">
                                                        &lt;div class=&quot;row&quot; data-plugin=&quot;dragula&quot; data-containers='[&quot;company-list-left&quot;, &quot;company-list-right&quot;]'&gt;
                                                            &lt;div class=&quot;col-md-6&quot;&gt;
                                                                &lt;div class=&quot;bg-dragula p-2 p-lg-4&quot;&gt;
                                                                    &lt;h5 class=&quot;mt-0&quot;&gt;Part 1&lt;/h5&gt;
                                                                    &lt;div id=&quot;company-list-left&quot; class=&quot;py-2&quot;&gt;

                                                                        &lt;div class=&quot;card mb-0 mt-2&quot;&gt;
                                                                            &lt;div class=&quot;card-body&quot;&gt;
                                                                                &lt;div class=&quot;d-flex align-items-start&quot;&gt;
                                                                                    &lt;img src=&quot;assets/images/users/avatar-1.jpg&quot; alt=&quot;image&quot; class=&quot;me-3 d-none d-sm-block avatar-sm rounded-circle&quot;&gt;
                                                                                    &lt;div class=&quot;w-100 overflow-hidden&quot;&gt;
                                                                                        &lt;h5 class=&quot;mb-1 mt-0&quot;&gt;Louis K. Bond&lt;/h5&gt;
                                                                                        &lt;p&gt; Founder &amp; CEO &lt;/p&gt;
                                                                                        &lt;p class=&quot;mb-0 text-muted&quot;&gt;
                                                                                            &lt;span class=&quot;fst-italic&quot;&gt;&lt;b&gt;&quot;&lt;/b&gt;Disrupt pork belly poutine, asymmetrical tousled succulents selfies. You probably haven't heard of them tattooed master cleanse live-edge keffiyeh.&lt;/span&gt;
                                                                                        &lt;/p&gt;
                                                                                    &lt;/div&gt; &lt;!-- end w-100 --&gt;
                                                                                &lt;/div&gt; &lt;!-- end d-flex --&gt;
                                                                            &lt;/div&gt; &lt;!-- end card-body --&gt;
                                                                        &lt;/div&gt; &lt;!-- end col --&gt;

                                                                        &lt;div class=&quot;card mb-0 mt-2&quot;&gt;
                                                                            &lt;div class=&quot;card-body&quot;&gt;
                                                                                &lt;div class=&quot;d-flex align-items-start&quot;&gt;
                                                                                    &lt;img src=&quot;assets/images/users/avatar-2.jpg&quot; alt=&quot;image&quot; class=&quot;me-3 d-none d-sm-block avatar-sm rounded-circle&quot;&gt;
                                                                                    &lt;div class=&quot;w-100 overflow-hidden&quot;&gt;
                                                                                        &lt;h5 class=&quot;mb-1 mt-0&quot;&gt;Dennis N. Cloutier&lt;/h5&gt;
                                                                                        &lt;p&gt; Software Engineer &lt;/p&gt;
                                                                                        &lt;p class=&quot;mb-0 text-muted&quot;&gt;
                                                                                            &lt;span class=&quot;fst-italic&quot;&gt;&lt;b&gt;&quot;&lt;/b&gt;Disrupt pork belly poutine, asymmetrical tousled succulents selfies. You probably haven't heard of them tattooed master cleanse live-edge keffiyeh.&lt;/span&gt;
                                                                                        &lt;/p&gt;
                                                                                    &lt;/div&gt; &lt;!-- end w-100 --&gt;
                                                                                &lt;/div&gt; &lt;!-- end d-flex --&gt;
                                                                            &lt;/div&gt; &lt;!-- end card-body --&gt;
                                                                        &lt;/div&gt; &lt;!-- end col --&gt;

                                                                        &lt;div class=&quot;card mb-0 mt-2&quot;&gt;
                                                                            &lt;div class=&quot;card-body&quot;&gt;
                                                                                &lt;div class=&quot;d-flex align-items-start&quot;&gt;
                                                                                    &lt;img src=&quot;assets/images/users/avatar-3.jpg&quot; alt=&quot;image&quot; class=&quot;me-3 d-none d-sm-block avatar-sm rounded-circle&quot;&gt;
                                                                                    &lt;div class=&quot;w-100 overflow-hidden&quot;&gt;
                                                                                        &lt;h5 class=&quot;mb-1 mt-0&quot;&gt;Susan J. Sander&lt;/h5&gt;
                                                                                        &lt;p&gt; Web Designer &lt;/p&gt;
                                                                                        &lt;p class=&quot;mb-0 text-muted&quot;&gt;
                                                                                            &lt;span class=&quot;fst-italic&quot;&gt;&lt;b&gt;&quot;&lt;/b&gt;Disrupt pork belly poutine, asymmetrical tousled succulents selfies. You probably haven't heard of them tattooed master cleanse live-edge keffiyeh.&lt;/span&gt;
                                                                                        &lt;/p&gt;
                                                                                    &lt;/div&gt; &lt;!-- end w-100 --&gt;
                                                                                &lt;/div&gt; &lt;!-- end d-flex --&gt;
                                                                            &lt;/div&gt; &lt;!-- end card-body --&gt;
                                                                        &lt;/div&gt; &lt;!-- end col --&gt;

                                                                    &lt;/div&gt; &lt;!-- end company-list-1--&gt;
                                                                &lt;/div&gt; &lt;!-- end div.bg-light--&gt;
                                                            &lt;/div&gt; &lt;!-- end col --&gt;

                                                            &lt;div class=&quot;col-md-6&quot;&gt;
                                                                &lt;div class=&quot;bg-dragula p-2 p-lg-4&quot;&gt;
                                                                    &lt;h5 class=&quot;mt-0&quot;&gt;Part 2&lt;/h5&gt;
                                                                    &lt;div id=&quot;company-list-right&quot; class=&quot;py-2&quot;&gt;
                                                                        &lt;div class=&quot;card mb-0 mt-2&quot;&gt;

                                                                            &lt;div class=&quot;card-body p-3&quot;&gt;
                                                                                &lt;div class=&quot;d-flex align-items-start&quot;&gt;
                                                                                    &lt;img src=&quot;assets/images/users/avatar-4.jpg&quot; alt=&quot;image&quot; class=&quot;me-3 d-none d-sm-block avatar-sm rounded-circle&quot;&gt;
                                                                                    &lt;div class=&quot;w-100 overflow-hidden&quot;&gt;
                                                                                        &lt;h5 class=&quot;mb-1 mt-0&quot;&gt;James M. Short&lt;/h5&gt;
                                                                                        &lt;p&gt; Web Developer &lt;/p&gt;
                                                                                        &lt;p class=&quot;mb-0 text-muted&quot;&gt;
                                                                                            &lt;span class=&quot;fst-italic&quot;&gt;&lt;b&gt;&quot;&lt;/b&gt;Disrupt pork belly poutine, asymmetrical tousled succulents selfies. You probably haven't heard of them tattooed master cleanse live-edge keffiyeh &lt;/span&gt;
                                                                                        &lt;/p&gt;
                                                                                    &lt;/div&gt; &lt;!-- end w-100 --&gt;
                                                                                &lt;/div&gt; &lt;!-- end d-flex --&gt;
                                                                            &lt;/div&gt; &lt;!-- end card-body --&gt;
                                                                        &lt;/div&gt; &lt;!-- end col --&gt;

                                                                        &lt;div class=&quot;card mb-0 mt-2&quot;&gt;
                                                                            &lt;div class=&quot;card-body p-3&quot;&gt;
                                                                                &lt;div class=&quot;d-flex align-items-start&quot;&gt;
                                                                                    &lt;img src=&quot;assets/images/users/avatar-5.jpg&quot; alt=&quot;image&quot; class=&quot;me-3 d-none d-sm-block avatar-sm rounded-circle&quot;&gt;
                                                                                    &lt;div class=&quot;w-100 overflow-hidden&quot;&gt;
                                                                                        &lt;h5 class=&quot;mb-1 mt-0&quot;&gt;Gabriel J. Snyder&lt;/h5&gt;
                                                                                        &lt;p&gt; Business Analyst &lt;/p&gt;
                                                                                        &lt;p class=&quot;mb-0 text-muted&quot;&gt;
                                                                                            &lt;span class=&quot;fst-italic&quot;&gt;&lt;b&gt;&quot;&lt;/b&gt;Disrupt pork belly poutine, asymmetrical tousled succulents selfies. You probably haven't heard of them tattooed master cleanse live-edge keffiyeh &lt;/span&gt;
                                                                                        &lt;/p&gt;
                                                                                    &lt;/div&gt; &lt;!-- end w-100 --&gt;
                                                                                &lt;/div&gt; &lt;!-- end d-flex --&gt;
                                                                            &lt;/div&gt; &lt;!-- end card-body --&gt;
                                                                        &lt;/div&gt; &lt;!-- end col --&gt;

                                                                        &lt;div class=&quot;card mb-0 mt-2&quot;&gt;
                                                                            &lt;div class=&quot;card-body p-3&quot;&gt;
                                                                                &lt;div class=&quot;d-flex align-items-start&quot;&gt;
                                                                                    &lt;img src=&quot;assets/images/users/avatar-6.jpg&quot; alt=&quot;image&quot; class=&quot;me-3 d-none d-sm-block avatar-sm rounded-circle&quot;&gt;
                                                                                    &lt;div class=&quot;w-100 overflow-hidden&quot;&gt;
                                                                                        &lt;h5 class=&quot;mb-1 mt-0&quot;&gt;Louie C. Mason&lt;/h5&gt;
                                                                                        &lt;p&gt;Human Resources&lt;/p&gt;
                                                                                        &lt;p class=&quot;mb-0 text-muted&quot;&gt;
                                                                                            &lt;span class=&quot;fst-italic&quot;&gt;&lt;b&gt;&quot;&lt;/b&gt;Disrupt pork belly poutine, asymmetrical tousled succulents selfies. You probably haven't heard of them tattooed master cleanse live-edge keffiyeh &lt;/span&gt;
                                                                                        &lt;/p&gt;
                                                                                    &lt;/div&gt; &lt;!-- end w-100 --&gt;
                                                                                &lt;/div&gt; &lt;!-- end d-flex --&gt;
                                                                            &lt;/div&gt; &lt;!-- end card-body --&gt;
                                                                        &lt;/div&gt; &lt;!-- end col --&gt;

                                                                    &lt;/div&gt; &lt;!-- end company-list-2--&gt;
                                                                &lt;/div&gt; &lt;!-- end div.bg-light--&gt;
                                                            &lt;/div&gt; &lt;!-- end col --&gt;

                                                        &lt;/div&gt; &lt;!-- end row --&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                        </div> <!-- end preview code-->
                    </div> <!-- end tab-content-->
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div> <!-- end col -->
    </div> <!-- end row -->


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Move stuff between containers using handle</h4>
                    <p class="text-muted font-14 mb-3">
                        Just specify the data attribute
                        <code>data-plugin='dragula'</code>,
                        <code>data-containers='["first-container-id", "second-container-id"]'</code> and
                        <code>data-handle-class='dragula-handle'</code>.
                    </p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#move-stuff-handle-preview" data-bs-toggle="tab" aria-expanded="false"
                                class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#move-stuff-handle-code" data-bs-toggle="tab" aria-expanded="true"
                                class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="move-stuff-handle-preview">
                            <div class="row" data-plugin="dragula"
                                data-containers='["handle-dragula-left", "handle-dragula-right"]'
                                data-handleClass="dragula-handle">
                                <div class="col-md-6">
                                    <div class="bg-dragula p-2 p-lg-4">
                                        <h5 class="mt-0">Part 1</h5>
                                        <div id="handle-dragula-left" class="py-2">

                                            <div class="card mb-0 mt-2">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-start">
                                                        <img src="/images/users/avatar-7.jpg" alt="image"
                                                            class="me-3 d-none d-sm-block avatar-sm rounded-circle">
                                                        <div class="w-100 overflow-hidden">
                                                            <h5 class="mb-1 mt-1">Louis K. Bond</h5>
                                                            <p class="mb-0"> Founder & CEO </p>
                                                        </div> <!-- end w-100 -->
                                                        <span class="dragula-handle"></span>
                                                    </div> <!-- end d-flex -->
                                                </div> <!-- end card-body -->
                                            </div> <!-- end col -->

                                            <div class="card mb-0 mt-2">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-start">
                                                        <img src="/images/users/avatar-8.jpg" alt="image"
                                                            class="me-3 d-none d-sm-block avatar-sm rounded-circle">
                                                        <div class="w-100 overflow-hidden">
                                                            <h5 class="mb-1 mt-1">Dennis N. Cloutier</h5>
                                                            <p class="mb-0"> Software Engineer </p>
                                                        </div> <!-- end w-100 -->
                                                        <span class="dragula-handle"></span>
                                                    </div> <!-- end d-flex -->
                                                </div> <!-- end card-body -->
                                            </div> <!-- end col -->

                                            <div class="card mb-0 mt-2">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-start">
                                                        <img src="/images/users/avatar-9.jpg" alt="image"
                                                            class="me-3 d-none d-sm-block avatar-sm rounded-circle">
                                                        <div class="w-100 overflow-hidden">
                                                            <h5 class="mb-1 mt-1">Susan J. Sander</h5>
                                                            <p class="mb-0"> Web Designer </p>
                                                        </div> <!-- end w-100 -->
                                                        <span class="dragula-handle"></span>
                                                    </div> <!-- end d-flex -->
                                                </div> <!-- end card-body -->
                                            </div> <!-- end col -->

                                        </div> <!-- end company-list-1-->
                                    </div> <!-- end div.bg-light-->
                                </div> <!-- end col -->

                                <div class="col-md-6">
                                    <div class="bg-dragula p-2 p-lg-4">
                                        <h5 class="mt-0">Part 2</h5>
                                        <div id="handle-dragula-right" class="py-2">
                                            <div class="card mb-0 mt-2">

                                                <div class="card-body p-3">
                                                    <div class="d-flex align-items-start">
                                                        <img src="/images/users/avatar-10.jpg" alt="image"
                                                            class="me-3 d-none d-sm-block avatar-sm rounded-circle">
                                                        <div class="w-100 overflow-hidden">
                                                            <h5 class="mb-1 mt-1">James M. Short</h5>
                                                            <p class="mb-0"> Web Developer </p>
                                                        </div> <!-- end w-100 -->
                                                        <span class="dragula-handle"></span>
                                                    </div> <!-- end d-flex -->
                                                </div> <!-- end card-body -->
                                            </div> <!-- end col -->

                                            <div class="card mb-0 mt-2">
                                                <div class="card-body p-3">
                                                    <div class="d-flex align-items-start">
                                                        <img src="/images/users/avatar-5.jpg" alt="image"
                                                            class="me-3 d-none d-sm-block avatar-sm rounded-circle">
                                                        <div class="w-100 overflow-hidden">
                                                            <h5 class="mb-1 mt-1">Gabriel J. Snyder</h5>
                                                            <p class="mb-0"> Business Analyst </p>
                                                        </div> <!-- end w-100 -->
                                                        <span class="dragula-handle"></span>
                                                    </div> <!-- end d-flex -->
                                                </div> <!-- end card-body -->
                                            </div> <!-- end col -->

                                            <div class="card mb-0 mt-2">
                                                <div class="card-body p-3">
                                                    <div class="d-flex align-items-start">
                                                        <img src="/images/users/avatar-3.jpg" alt="image"
                                                            class="me-3 d-none d-sm-block avatar-sm rounded-circle">
                                                        <div class="w-100 overflow-hidden">
                                                            <h5 class="mb-1 mt-1">Louie C. Mason</h5>
                                                            <p class="mb-0">Human Resources</p>
                                                        </div> <!-- end w-100 -->
                                                        <span class="dragula-handle"></span>
                                                    </div> <!-- end d-flex -->
                                                </div> <!-- end card-body -->
                                            </div> <!-- end col -->

                                        </div> <!-- end company-list-2-->
                                    </div> <!-- end div.bg-light-->
                                </div> <!-- end col -->

                            </div> <!-- end row -->
                        </div> <!-- end preview-->

                        <div class="tab-pane code" id="move-stuff-handle-code">
                            <p class="m-2">Make sure to include following js files at end of <code>body element</code>
                            </p>

                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>

                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;script src=&quot;assets/vendor/dragula/dragula.min.js&quot;&gt;&lt;/script&gt;
                                                        &lt;script src=&quot;assets/js/ui/component.dragula.js&quot;&gt;&lt;/script&gt;
                                                    </span>

                                                    <span class="html escape">
                                                        &lt;div class=&quot;row&quot; data-plugin=&quot;dragula&quot; data-containers='[&quot;handle-dragula-left&quot;, &quot;handle-dragula-right&quot;]' data-handleClass=&quot;dragula-handle&quot;&gt;
                                                            &lt;div class=&quot;col-md-6&quot;&gt;
                                                                &lt;div class=&quot;bg-dragula p-2 p-lg-4&quot;&gt;
                                                                    &lt;h5 class=&quot;mt-0&quot;&gt;Part 1&lt;/h5&gt;
                                                                    &lt;div id=&quot;handle-dragula-left&quot; class=&quot;py-2&quot;&gt;

                                                                        &lt;div class=&quot;card mb-0 mt-2&quot;&gt;
                                                                            &lt;div class=&quot;card-body&quot;&gt;
                                                                                &lt;div class=&quot;d-flex align-items-start&quot;&gt;
                                                                                    &lt;img src=&quot;assets/images/users/avatar-7.jpg&quot; alt=&quot;image&quot; class=&quot;me-3 d-none d-sm-block avatar-sm rounded-circle&quot;&gt;
                                                                                    &lt;div class=&quot;w-100 overflow-hidden&quot;&gt;
                                                                                        &lt;h5 class=&quot;mb-1 mt-1&quot;&gt;Louis K. Bond&lt;/h5&gt;
                                                                                        &lt;p class=&quot;mb-0&quot;&gt; Founder &amp; CEO &lt;/p&gt;
                                                                                    &lt;/div&gt; &lt;!-- end w-100 --&gt;
                                                                                    &lt;span class=&quot;dragula-handle&quot;&gt;&lt;/span&gt;
                                                                                &lt;/div&gt; &lt;!-- end d-flex --&gt;
                                                                            &lt;/div&gt; &lt;!-- end card-body --&gt;
                                                                        &lt;/div&gt; &lt;!-- end col --&gt;

                                                                        &lt;div class=&quot;card mb-0 mt-2&quot;&gt;
                                                                            &lt;div class=&quot;card-body&quot;&gt;
                                                                                &lt;div class=&quot;d-flex align-items-start&quot;&gt;
                                                                                    &lt;img src=&quot;assets/images/users/avatar-8.jpg&quot; alt=&quot;image&quot; class=&quot;me-3 d-none d-sm-block avatar-sm rounded-circle&quot;&gt;
                                                                                    &lt;div class=&quot;w-100 overflow-hidden&quot;&gt;
                                                                                        &lt;h5 class=&quot;mb-1 mt-1&quot;&gt;Dennis N. Cloutier&lt;/h5&gt;
                                                                                        &lt;p class=&quot;mb-0&quot;&gt; Software Engineer &lt;/p&gt;
                                                                                    &lt;/div&gt; &lt;!-- end w-100 --&gt;
                                                                                    &lt;span class=&quot;dragula-handle&quot;&gt;&lt;/span&gt;
                                                                                &lt;/div&gt; &lt;!-- end d-flex --&gt;
                                                                            &lt;/div&gt; &lt;!-- end card-body --&gt;
                                                                        &lt;/div&gt; &lt;!-- end col --&gt;

                                                                        &lt;div class=&quot;card mb-0 mt-2&quot;&gt;
                                                                            &lt;div class=&quot;card-body&quot;&gt;
                                                                                &lt;div class=&quot;d-flex align-items-start&quot;&gt;
                                                                                    &lt;img src=&quot;assets/images/users/avatar-9.jpg&quot; alt=&quot;image&quot; class=&quot;me-3 d-none d-sm-block avatar-sm rounded-circle&quot;&gt;
                                                                                    &lt;div class=&quot;w-100 overflow-hidden&quot;&gt;
                                                                                        &lt;h5 class=&quot;mb-1 mt-1&quot;&gt;Susan J. Sander&lt;/h5&gt;
                                                                                        &lt;p class=&quot;mb-0&quot;&gt; Web Designer &lt;/p&gt;
                                                                                    &lt;/div&gt; &lt;!-- end w-100 --&gt;
                                                                                    &lt;span class=&quot;dragula-handle&quot;&gt;&lt;/span&gt;
                                                                                &lt;/div&gt; &lt;!-- end d-flex --&gt;
                                                                            &lt;/div&gt; &lt;!-- end card-body --&gt;
                                                                        &lt;/div&gt; &lt;!-- end col --&gt;

                                                                    &lt;/div&gt; &lt;!-- end company-list-1--&gt;
                                                                &lt;/div&gt; &lt;!-- end div.bg-light--&gt;
                                                            &lt;/div&gt; &lt;!-- end col --&gt;

                                                            &lt;div class=&quot;col-md-6&quot;&gt;
                                                                &lt;div class=&quot;bg-dragula p-2 p-lg-4&quot;&gt;
                                                                    &lt;h5 class=&quot;mt-0&quot;&gt;Part 2&lt;/h5&gt;
                                                                    &lt;div id=&quot;handle-dragula-right&quot; class=&quot;py-2&quot;&gt;
                                                                        &lt;div class=&quot;card mb-0 mt-2&quot;&gt;

                                                                            &lt;div class=&quot;card-body p-3&quot;&gt;
                                                                                &lt;div class=&quot;d-flex align-items-start&quot;&gt;
                                                                                    &lt;img src=&quot;assets/images/users/avatar-10.jpg&quot; alt=&quot;image&quot; class=&quot;me-3 d-none d-sm-block avatar-sm rounded-circle&quot;&gt;
                                                                                    &lt;div class=&quot;w-100 overflow-hidden&quot;&gt;
                                                                                        &lt;h5 class=&quot;mb-1 mt-1&quot;&gt;James M. Short&lt;/h5&gt;
                                                                                        &lt;p class=&quot;mb-0&quot;&gt; Web Developer &lt;/p&gt;
                                                                                    &lt;/div&gt; &lt;!-- end w-100 --&gt;
                                                                                    &lt;span class=&quot;dragula-handle&quot;&gt;&lt;/span&gt;
                                                                                &lt;/div&gt; &lt;!-- end d-flex --&gt;
                                                                            &lt;/div&gt; &lt;!-- end card-body --&gt;
                                                                        &lt;/div&gt; &lt;!-- end col --&gt;

                                                                        &lt;div class=&quot;card mb-0 mt-2&quot;&gt;
                                                                            &lt;div class=&quot;card-body p-3&quot;&gt;
                                                                                &lt;div class=&quot;d-flex align-items-start&quot;&gt;
                                                                                    &lt;img src=&quot;assets/images/users/avatar-5.jpg&quot; alt=&quot;image&quot; class=&quot;me-3 d-none d-sm-block avatar-sm rounded-circle&quot;&gt;
                                                                                    &lt;div class=&quot;w-100 overflow-hidden&quot;&gt;
                                                                                        &lt;h5 class=&quot;mb-1 mt-1&quot;&gt;Gabriel J. Snyder&lt;/h5&gt;
                                                                                        &lt;p class=&quot;mb-0&quot;&gt; Business Analyst &lt;/p&gt;
                                                                                    &lt;/div&gt; &lt;!-- end w-100 --&gt;
                                                                                    &lt;span class=&quot;dragula-handle&quot;&gt;&lt;/span&gt;
                                                                                &lt;/div&gt; &lt;!-- end d-flex --&gt;
                                                                            &lt;/div&gt; &lt;!-- end card-body --&gt;
                                                                        &lt;/div&gt; &lt;!-- end col --&gt;

                                                                        &lt;div class=&quot;card mb-0 mt-2&quot;&gt;
                                                                            &lt;div class=&quot;card-body p-3&quot;&gt;
                                                                                &lt;div class=&quot;d-flex align-items-start&quot;&gt;
                                                                                    &lt;img src=&quot;assets/images/users/avatar-3.jpg&quot; alt=&quot;image&quot; class=&quot;me-3 d-none d-sm-block avatar-sm rounded-circle&quot;&gt;
                                                                                    &lt;div class=&quot;w-100 overflow-hidden&quot;&gt;
                                                                                        &lt;h5 class=&quot;mb-1 mt-1&quot;&gt;Louie C. Mason&lt;/h5&gt;
                                                                                        &lt;p class=&quot;mb-0&quot;&gt;Human Resources&lt;/p&gt;
                                                                                    &lt;/div&gt; &lt;!-- end w-100 --&gt;
                                                                                    &lt;span class=&quot;dragula-handle&quot;&gt;&lt;/span&gt;
                                                                                &lt;/div&gt; &lt;!-- end d-flex --&gt;
                                                                            &lt;/div&gt; &lt;!-- end card-body --&gt;
                                                                        &lt;/div&gt; &lt;!-- end col --&gt;

                                                                    &lt;/div&gt; &lt;!-- end company-list-2--&gt;
                                                                &lt;/div&gt; &lt;!-- end div.bg-light--&gt;
                                                            &lt;/div&gt; &lt;!-- end col --&gt;

                                                        &lt;/div&gt; &lt;!-- end row --&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                        </div> <!-- end preview code-->
                    </div> <!-- end tab-content-->

                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection

@section('script')
   @vite(['resources/js/ui/component.dragula.js','resources/js/hyper-syntax.js'])
@endsection
