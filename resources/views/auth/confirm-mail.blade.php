<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.shared/title-meta', ['title' => 'Confirm Email'])

    @include('layouts.shared/head-css',['mode' => $mode ?? '', 'demo' => $demo ?? ''])
</head>

    <body class="authentication-bg">

        <div class="position-absolute start-0 end-0 start-0 bottom-0 w-100 h-100">
            <svg xmlns='http://www.w3.org/2000/svg' width='100%' height='100%' viewBox='0 0 800 800'>
                <g fill-opacity='0.22'>
                    <circle style="fill: rgba(var(--ct-primary-rgb), 0.1);" cx='400' cy='400' r='600'/>
                    <circle style="fill: rgba(var(--ct-primary-rgb), 0.2);" cx='400' cy='400' r='500'/>
                    <circle style="fill: rgba(var(--ct-primary-rgb), 0.3);" cx='400' cy='400' r='300'/>
                    <circle style="fill: rgba(var(--ct-primary-rgb), 0.4);" cx='400' cy='400' r='200'/>
                    <circle style="fill: rgba(var(--ct-primary-rgb), 0.5);" cx='400' cy='400' r='100'/>
                </g>
            </svg>
        </div>

        <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5 position-relative">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-4 col-lg-5">
                        <div class="card">
                            <!-- Logo -->
                            <div class="card-header py-4 text-center bg-primary">
                                <a href="{{ route('any', 'index') }}">
                                    <span><img src="/images/logo.png" alt="logo" height="22"></span>
                                </a>
                            </div>

                            <div class="card-body p-4">
                                
                                <div class="text-center m-auto">
                                    <img src="/images/svg/mail_sent.svg" alt="mail sent image" height="64" />
                                    <h4 class="text-dark-50 text-center mt-4 fw-bold">Please check your email</h4>
                                    <p class="text-muted mb-4">
                                        A email has been send to <b>youremail@domain.com</b>.
                                        Please check for an email from company and click on the included link to
                                        reset your password. 
                                    </p>
                                </div>

                                <form action="{{ route('any', 'index') }}">
                                    <div class="mb-0 text-center">
                                        <button class="btn btn-primary" type="submit"><i class="mdi mdi-home me-1"></i> Back to Home</button>
                                    </div>
                                </form>

                            </div> <!-- end card-body-->
                        </div>
                        <!-- end card-->
                        
                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        @include('layouts.shared/footer-2')
        
        @include('layouts.shared/footer-scripts')

    </body>
</html>
