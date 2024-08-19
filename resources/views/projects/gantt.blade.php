@extends('layouts.vertical', ['title' => 'Project Calendar', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('css')
    @vite(['node_modules/frappe-gantt/dist/frappe-gantt.min.css',])
@endsection

@section('content')
@include('layouts.shared/page-title',['page_title' => 'Gantt','sub_title' => 'Projects'])

    <div class="card">
        <div class="card-body">
            <div class="row">
                <!-- start projects-->
                <div class="col-xxl-3 col-lg-4">
                    <div class="pe-xl-3">
                        <h5 class="mt-0 mb-3">Projects</h5>
                        <!-- start search box -->
                        <div class="app-search">
                            <form>
                                <div class="mb-2 position-relative w-100">
                                    <input type="text" class="form-control"
                                        placeholder="search by name..." />
                                    <span class="mdi mdi-magnify search-icon"></span>
                                </div>
                            </form>
                        </div>
                        <!-- end search box -->
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="pe-xl-3" data-simplebar style="max-height: 535px;">
                                <a href="javascript:void(0);" class="text-body">
                                    <div class="d-flex mt-2 p-2">
                                        <div class="avatar-sm d-table">
                                            <span class="avatar-title bg-success-lighten rounded-circle text-success">
                                                <i class='uil uil-moonset font-24'></i>
                                            </span>
                                        </div>
                                        <div class="ms-2">
                                            <h5 class="mt-0 mb-0">
                                                Lunar
                                                <span class="badge badge-success-lighten ms-1">On Track</span>
                                            </h5>
                                            <p class="mt-1 mb-0 text-muted">
                                                ID: proj101
                                            </p>
                                        </div>
                                    </div>
                                </a>

                                <a href="javascript:void(0);" class="text-body">
                                    <div class="d-flex bg-light-subtle p-2">
                                        <div class="avatar-sm d-table">
                                            <span
                                                class="avatar-title bg-success-lighten rounded-circle text-success">
                                                <i class='uil uil-moon-eclipse font-24'></i>
                                            </span>
                                        </div>
                                        <div class="ms-2">
                                            <h5 class="mt-0 mb-0">
                                                Dark Moon
                                                <span class="badge badge-success-lighten ms-1">On
                                                    Track</span>
                                            </h5>
                                            <p class="mt-1 mb-0 text-muted">
                                                ID: proj102
                                            </p>
                                        </div>
                                    </div>
                                </a>

                                <a href="javascript:void(0);" class="text-body">
                                    <div class="d-flex mt-1 px-2 py-2">
                                        <div class="avatar-sm d-table">
                                            <span
                                                class="avatar-title bg-warning-lighten rounded-circle text-warning">
                                                <i class='uil uil-mountains font-24'></i>
                                            </span>
                                        </div>
                                        <div class="ms-2">
                                            <h5 class="mt-0 mb-0">
                                                Aurora
                                                <span class="badge badge-warning-lighten ms-1">Locked</span>
                                            </h5>
                                            <p class="mt-1 mb-0 text-muted">
                                                ID: proj103
                                            </p>
                                        </div>
                                    </div>
                                </a>

                                <a href="javascript:void(0);" class="text-body">
                                    <div class="d-flex mt-1 px-2 py-2">
                                        <div class="avatar-sm d-table">
                                            <span
                                                class="avatar-title bg-warning-lighten rounded-circle text-warning">
                                                <i class='uil uil-moon font-24'></i>
                                            </span>
                                        </div>
                                        <div class="ms-2">
                                            <h5 class="mt-0 mb-0">
                                                Blue Moon
                                                <span
                                                    class="badge badge-warning-lighten ms-1">Locked</span>
                                            </h5>
                                            <p class="mt-1 mb-0 text-muted">
                                                ID: proj104
                                            </p>
                                        </div>
                                    </div>
                                </a>

                                <a href="javascript:void(0);" class="text-body">
                                    <div class="d-flex mt-1 px-2 py-2">
                                        <div class="avatar-sm d-table">
                                            <span
                                                class="avatar-title bg-danger-lighten rounded-circle text-danger">
                                                <i class='uil uil-ship font-24'></i>
                                            </span>
                                        </div>
                                        <div class="ms-2">
                                            <h5 class="mt-0 mb-0">
                                                Casanova
                                                <span
                                                    class="badge badge-danger-lighten ms-1">Delayed</span>
                                            </h5>
                                            <p class="mt-1 mb-0 text-muted">
                                                ID: proj106
                                            </p>
                                        </div>
                                    </div>
                                </a>

                                <a href="javascript:void(0);" class="text-body">
                                    <div class="d-flex mt-1 px-2 py-2">
                                        <div class="avatar-sm d-table">
                                            <span
                                                class="avatar-title bg-success-lighten rounded-circle text-success">
                                                <i class='uil uil-subway-alt font-24'></i>
                                            </span>
                                        </div>
                                        <div class="ms-2">
                                            <h5 class="mt-0 mb-0">
                                                Darwin
                                                <span class="badge badge-success-lighten ms-1">On
                                                    Track</span>
                                            </h5>
                                            <p class="mt-1 mb-0 text-muted">
                                                ID: proj107
                                            </p>
                                        </div>
                                    </div>
                                </a>

                                <a href="javascript:void(0);" class="text-body">
                                    <div class="d-flex mt-1 px-2 py-2">
                                        <div class="avatar-sm d-table">
                                            <span
                                                class="avatar-title bg-danger-lighten rounded-circle text-danger">
                                                <i class='uil uil-gold font-24'></i>
                                            </span>
                                        </div>
                                        <div class="ms-2">
                                            <h5 class="mt-0 mb-0">
                                                Eagle
                                                <span class="badge badge-danger-lighten ms-1">Delayed</span>
                                            </h5>
                                            <p class="mt-1 mb-0 text-muted">
                                                ID: proj108
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end projects -->

                <!-- gantt view -->
                <div class="col-xxl-9 mt-4 mt-xl-0 col-lg-8">
                    <div class="ps-xl-3">
                        <div class="row">
                            <div class="col-auto">
                                <a href="javascript: void(0);" class="btn btn-success btn-sm mb-2">Add New Task</a>
                            </div>
                            <div class="col text-sm-end">
                                <div class="btn-group btn-group-sm mb-2" data-bs-toggle="buttons" id="modes-filter">
                                    <label class="btn btn-primary d-none d-sm-inline-block">
                                        <input  class="btn-check" type="radio" name="modes" id="qday" value="Quarter Day"> Quarter Day
                                    </label>
                                    <label class="btn btn-primary">
                                        <input  class="btn-check" type="radio" name="modes" id="hday" value="Half Day"> Half Day
                                    </label>
                                    <label class="btn btn-primary">
                                        <input  class="btn-check" type="radio" name="modes" id="day" value="Day"> Day
                                    </label>
                                    <label class="btn btn-primary active">
                                        <input  class="btn-check" type="radio" name="modes" id="week" value="Week" checked> Week
                                    </label>
                                    <label class="btn btn-primary">
                                        <input  class="btn-check" type="radio" name="modes" id="month" value="Month"> Month
                                    </label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col mt-3">
                                <svg id="tasks-gantt"></svg>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end gantt view -->
            </div>
        </div>
    </div> <!-- end card -->
@endsection

@section('script')
    @vite(['resources/js/pages/demo.project-gantt.js'])
@endsection