@extends('layouts.vertical', ['title' => 'Treeview'])

@section('css')
    @vite(['node_modules/jstree/dist/themes/default/style.min.css'])
@endsection

@section('content')
    @include('layouts.shared/page-title', ['sub_title' => 'Extended', 'page_title' => 'Treeview'])

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Basic Treeview</h4>
                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#jstree-1-preview" data-bs-toggle="tab" aria-expanded="false"
                               class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#jstree-1-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul>
                    <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="jstree-1-preview">
                            <div id="jstree-1">
                                <ul>
                                    <li>
                                        Root node 1
                                        <ul>
                                            <li data-jstree='{ "selected" : true }'>
                                                <a href="javascript:;"> Initially selected </a>
                                            </li>
                                            <li data-jstree='{ "icon" : "ri-home-4-line text-success " }'>
                                                custom icon URL
                                            </li>
                                            <li data-jstree='{ "opened" : true }'>
                                                initially open
                                                <ul>
                                                    <li data-jstree='{ "disabled" : true }'>
                                                        Disabled Node
                                                    </li>
                                                    <li data-jstree='{ "type" : "file" }'>
                                                        Another node
                                                    </li>
                                                </ul>
                                            </li>
                                            <li data-jstree='{ "icon" : "ri-vip-diamond-line text-danger" }'>
                                                Custom icon class (bootstrap)
                                            </li>
                                        </ul>
                                    </li>
                                    <li data-jstree='{ "type" : "link" }'>
                                        <a href="http://www.coderthemes.com"> Clickable link node </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane code" id="jstree-1-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;!-- jstree css --&gt;
                                                        &lt;link href=&quot;assets/vendor/jstree/themes/default/style.min.css&quot; rel=&quot;stylesheet&quot; type=&quot;text/css&quot;&gt;
                                                    </span>

                                                    <span class="html escape">
                                                        &lt;!-- jstree js --&gt;
                                                        &lt;script src=&quot;assets/vendor/jstree/jstree.min.js&quot;&gt;&lt;/script&gt;
                                                        &lt;script src=&quot;assets/js/pages/demo.jstree.js&quot;&gt;&lt;/script&gt;
                                                    </span>

                                                    <span class="html escape">
                                                        &lt;div id=&quot;jstree-1&quot;&gt;
                                                            &lt;ul&gt;
                                                                &lt;li&gt;
                                                                    Root node 1
                                                                    &lt;ul&gt;
                                                                        &lt;li data-jstree='{ &quot;selected&quot; : true }'&gt;
                                                                            &lt;a href=&quot;javascript:;&quot;&gt;
                                                                            Initially selected &lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li data-jstree='{ &quot;icon&quot; : &quot;ri-home-4-line text-success &quot; }'&gt;
                                                                            custom icon URL
                                                                        &lt;/li&gt;
                                                                        &lt;li data-jstree='{ &quot;opened&quot; : true }'&gt;
                                                                            initially open
                                                                            &lt;ul&gt;
                                                                                &lt;li data-jstree='{ &quot;disabled&quot; : true }'&gt;
                                                                                    Disabled Node
                                                                                &lt;/li&gt;
                                                                                &lt;li data-jstree='{ &quot;type&quot; : &quot;file&quot; }'&gt;
                                                                                    Another node
                                                                                &lt;/li&gt;
                                                                            &lt;/ul&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li data-jstree='{ &quot;icon&quot; : &quot;ri-vip-diamond-line text-danger&quot; }'&gt;
                                                                            Custom icon class (bootstrap)
                                                                        &lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/li&gt;
                                                                &lt;li data-jstree='{ &quot;type&quot; : &quot;link&quot; }'&gt;
                                                                    &lt;a href=&quot;http://www.coderthemes.com&quot;&gt;
                                                                    Clickable link node &lt;/a&gt;
                                                                &lt;/li&gt;
                                                            &lt;/ul&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Custom Icons & Clickable Nodes</h4>
                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#jstree-2-preview" data-bs-toggle="tab" aria-expanded="false"
                               class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#jstree-2-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul>
                    <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="jstree-2-preview">
                            <div id="jstree-2">
                                <ul>
                                    <li>
                                        Root node 1
                                        <ul>
                                            <li data-jstree='{ "selected" : true }'>
                                                <a href="javascript:;"> Initially selected </a>
                                            </li>
                                            <li data-jstree='{ "icon" : "ri-article-line text-success " }'>
                                                custom icon URL
                                            </li>
                                            <li data-jstree='{ "opened" : true }'>
                                                initially open
                                                <ul>
                                                    <li data-jstree='{ "disabled" : true }'>
                                                        Disabled Node
                                                    </li>
                                                    <li data-jstree='{ "type" : "file" }'>
                                                        Another node
                                                    </li>
                                                </ul>
                                            </li>
                                            <li data-jstree='{ "icon" : "ri-user-line text-danger" }'>
                                                Custom icon class (bootstrap)
                                            </li>
                                        </ul>
                                    </li>
                                    <li data-jstree='{ "type" : "link" }'>
                                        <a href="https://coderthemes.com/"> Clickable link node </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane code" id="jstree-2-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;!-- jstree css --&gt;
                                                        &lt;link href=&quot;assets/vendor/jstree/themes/default/style.min.css&quot; rel=&quot;stylesheet&quot; type=&quot;text/css&quot;&gt;
                                                    </span>

                                                    <span class="html escape">
                                                        &lt;!-- jstree js --&gt;
                                                        &lt;script src=&quot;assets/vendor/jstree/jstree.min.js&quot;&gt;&lt;/script&gt;
                                                        &lt;script src=&quot;assets/js/pages/demo.jstree.js&quot;&gt;&lt;/script&gt;
                                                    </span>

                                                    <span class="html escape">
                                                        &lt;div id=&quot;jstree-2&quot;
                                                            &lt;ul&gt;
                                                                &lt;li&gt;
                                                                    Root node 1
                                                                    &lt;ul&gt;
                                                                        &lt;li data-jstree='{ &quot;selected&quot; : true }'&gt;
                                                                            &lt;a href=&quot;javascript:;&quot;&gt;
                                                                                Initially selected &lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li data-jstree='{ &quot;icon&quot; : &quot;ri-article-line text-success &quot; }'&gt;
                                                                            custom icon URL
                                                                        &lt;/li&gt;
                                                                        &lt;li data-jstree='{ &quot;opened&quot; : true }'&gt;
                                                                            initially open
                                                                            &lt;ul&gt;
                                                                                &lt;li data-jstree='{ &quot;disabled&quot; : true }'&gt;
                                                                                    Disabled Node
                                                                                &lt;/li&gt;
                                                                                &lt;li data-jstree='{ &quot;type&quot; : &quot;file&quot; }'&gt;
                                                                                    Another node
                                                                                &lt;/li&gt;
                                                                            &lt;/ul&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li data-jstree='{ &quot;icon&quot; : &quot;ri-user-line text-danger&quot; }'&gt;
                                                                            Custom icon class (bootstrap)
                                                                        &lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/li&gt;
                                                                &lt;li data-jstree='{ &quot;type&quot; : &quot;link&quot; }'&gt;
                                                                    &lt;a href=&quot;https://coderthemes.com/&quot;&gt;
                                                                        Clickable link node &lt;/a&gt;
                                                                &lt;/li&gt;
                                                            &lt;/ul&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Checkable Tree</h4>
                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#jstree-3-preview" data-bs-toggle="tab" aria-expanded="false"
                               class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#jstree-3-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul>
                    <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="jstree-3-preview">
                            <div id="jstree-3"></div>
                        </div>
                        <div class="tab-pane code" id="jstree-3-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;!-- jstree css --&gt;
                                                        &lt;link href=&quot;assets/vendor/jstree/themes/default/style.min.css&quot; rel=&quot;stylesheet&quot; type=&quot;text/css&quot;&gt;
                                                    </span>

                                                    <span class="html escape">
                                                        &lt;!-- jstree js --&gt;
                                                        &lt;script src=&quot;assets/vendor/jstree/jstree.min.js&quot;&gt;&lt;/script&gt;
                                                        &lt;script src=&quot;assets/js/pages/demo.jstree.js&quot;&gt;&lt;/script&gt;
                                                    </span>

                                                    <span class="html escape">
                                                        &lt;div id=&quot;jstree-3&quot;&gt;&lt;/div&gt;
                                                    </span>
                                                </pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Contextual Menu</h4>
                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#jstree-4-preview" data-bs-toggle="tab" aria-expanded="false"
                               class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#jstree-4-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul>
                    <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="jstree-4-preview">
                            <div id="jstree-4"></div>
                        </div>
                        <div class="tab-pane code" id="jstree-4-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;!-- jstree css --&gt;
                                                        &lt;link href=&quot;assets/vendor/jstree/themes/default/style.min.css&quot; rel=&quot;stylesheet&quot; type=&quot;text/css&quot;&gt;
                                                    </span>

                                                    <span class="html escape">
                                                        &lt;!-- jstree js --&gt;
                                                        &lt;script src=&quot;assets/vendor/jstree/jstree.min.js&quot;&gt;&lt;/script&gt;
                                                        &lt;script src=&quot;assets/js/pages/demo.jstree.js&quot;&gt;&lt;/script&gt;
                                                    </span>

                                                    <span class="html escape">
                                                        &lt;div id=&quot;jstree-4&quot;&gt;&lt;/div&gt;
                                                    </span>
                                                </pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Drag & Drop</h4>
                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#jstree-5-preview" data-bs-toggle="tab" aria-expanded="false"
                               class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#jstree-5-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul>
                    <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="jstree-5-preview">
                            <div id="jstree-5"></div>
                        </div>
                        <div class="tab-pane code" id="jstree-5-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;!-- jstree css --&gt;
                                                        &lt;link href=&quot;assets/vendor/jstree/themes/default/style.min.css&quot; rel=&quot;stylesheet&quot; type=&quot;text/css&quot;&gt;
                                                    </span>

                                                    <span class="html escape">
                                                        &lt;!-- jstree js --&gt;
                                                        &lt;script src=&quot;assets/vendor/jstree/jstree.min.js&quot;&gt;&lt;/script&gt;
                                                        &lt;script src=&quot;assets/js/pages/demo.jstree.js&quot;&gt;&lt;/script&gt;
                                                    </span>

                                                    <span class="html escape">
                                                        &lt;div id=&quot;jstree-5&quot;&gt;&lt;/div&gt;
                                                    </span>
                                                </pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Ajax Data</h4>
                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#jstree-6-preview" data-bs-toggle="tab" aria-expanded="false"
                               class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#jstree-6-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul>
                    <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="jstree-6-preview">
                            <div id="jstree-6"></div>
                        </div>
                        <div class="tab-pane code" id="jstree-6-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;!-- jstree css --&gt;
                                                        &lt;link href=&quot;assets/vendor/jstree/themes/default/style.min.css&quot; rel=&quot;stylesheet&quot; type=&quot;text/css&quot;&gt;
                                                    </span>

                                                    <span class="html escape">
                                                        &lt;!-- jstree js --&gt;
                                                        &lt;script src=&quot;assets/vendor/jstree/jstree.min.js&quot;&gt;&lt;/script&gt;
                                                        &lt;script src=&quot;assets/js/pages/demo.jstree.js&quot;&gt;&lt;/script&gt;
                                                    </span>

                                                    <span class="html escape">
                                                        &lt;!-- jstree json --&gt;
                                                        [{
                                                            &quot;id&quot;: &quot;node_1&quot;,
                                                            &quot;icon&quot;: &quot;ri-folder-line icon-lg text-success&quot;,
                                                            &quot;text&quot;: &quot;Node - 1&quot;,
                                                            &quot;children&quot;: false
                                                        }, {
                                                            &quot;id&quot;: &quot;node_2&quot;,
                                                            &quot;icon&quot;: &quot;ri-folder-line icon-lg text-success&quot;,
                                                            &quot;text&quot;: &quot;Node - 2&quot;,
                                                            &quot;children&quot;: false
                                                        }, {
                                                            &quot;id&quot;: &quot;node_3&quot;,
                                                            &quot;icon&quot;: &quot;ri-folder-line icon-lg text-success&quot;,
                                                            &quot;text&quot;: &quot;Node - 3&quot;,
                                                            &quot;children&quot;: false
                                                        }]
                                                    </span>

                                                    <span class="html escape">
                                                        &lt;div id=&quot;jstree-6&quot;&gt;&lt;/div&gt;
                                                    </span>
                                                </pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    @vite(['resources/js/pages/demo.jstree.js','resources/js/hyper-syntax.js'])
@endsection
