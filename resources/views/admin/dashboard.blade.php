@extends('layouts.adminLayout')



@section('content')

<div class="row justify-content-center">
    <div class="col-xxl col-xl-4 col-sm-6 col-md-4">
        <div class="stats-box style-two card bg-white border-0 rounded-10 mb-4">
            <div class="card-body p-4">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="flex-shrink-0">
                        <div class="icon transition rounded-circle">
                            <i class="flaticon-goal"></i>
                        </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h3 class="body-font fw-bold fs-3 mb-2">120</h3>
                        <span>Enrolled Courses</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl col-xl-4 col-sm-6 col-md-4">
        <div class="stats-box style-two card bg-white border-0 rounded-10 mb-4">
            <div class="card-body p-4">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="flex-shrink-0">
                        <div class="icon transition rounded-circle bg-00b69b">
                            <i class="flaticon-learning"></i>
                        </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h3 class="body-font fw-bold fs-3 mb-2">17</h3>
                        <span>Active Courses</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl col-xl-4 col-sm-6 col-md-4">
        <div class="stats-box style-two card bg-white border-0 rounded-10 mb-4">
            <div class="card-body p-4">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="flex-shrink-0">
                        <div class="icon transition rounded-circle bg-ee368c">
                            <i class="flaticon-struggle"></i>
                        </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h3 class="body-font fw-bold fs-3 mb-2">64</h3>
                        <span>Completed Courses</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl col-xl-4 col-sm-6 col-md-4">
        <div class="stats-box style-two card bg-white border-0 rounded-10 mb-4">
            <div class="card-body p-4">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="flex-shrink-0">
                        <div class="icon transition rounded-circle bg-2db6f5">
                            <i class="flaticon-purpose"></i>
                        </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h3 class="body-font fw-bold fs-3 mb-2">2.1M</h3>
                        <span>Total Students</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl col-xl-4 col-sm-6 col-md-4">
        <div class="stats-box style-two card bg-white border-0 rounded-10 mb-4">
            <div class="card-body p-4">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="flex-shrink-0">
                        <div class="icon transition rounded-circle bg-ff8a54">
                            <i class="flaticon-idea"></i>
                        </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h3 class="body-font fw-bold fs-3 mb-2">345</h3>
                        <span>Expert Mentors</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card bg-white border-0 rounded-10 mb-4">
    <div class="card-body p-4">
        <div class="d-flex justify-content-between align-items-center border-bottom pb-20 mb-20">
            <h4 class="fw-semibold fs-18 mb-0">Current Courses</h4>
            <div class="dropdown action-opt">
                <button class="btn bg-transparent p-0" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i data-feather="chevron-down"></i>
                    <span>Development</span>
                </button>
                <ul class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
                    <li>
                        <a class="dropdown-item" href="javascript:;">
                            Design
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="javascript:;">
                            Business
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="javascript:;">
                            Marketing
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="javascript:;">
                            Lifestyle
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-sm-6">
                <div class="card border-0 bg-gary-div2 rounded-3 mb-4 mb-lg-0">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="mb-4 pb-2">
                                <p class="fw-bold fs-24 text-dark">C++</p>
                                <p class="fs-14 fw-semibold text-primary text-uppercase">IT &
                                    SOFTWARE</p>
                            </div>
                            <img src="assets/images/c-plush.png" alt="c-plush">
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fw-semibold fs-15">4.5 Score</span>
                            <span class="fs-15 text-gray-light">37 Days Left</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="card border-0 bg-gary-div2 rounded-3 mb-4 mb-lg-0">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="mb-4 pb-2">
                                <p class="fw-bold fs-24 text-dark">JavaScript</p>
                                <p class="fs-14 fw-semibold text-primary">LANGUAGE</p>
                            </div>
                            <img src="assets/images/javascript.png" alt="javascript">
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fw-semibold fs-15">3.5 Score</span>
                            <span class="fs-15 text-gray-light">25 Days Left</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="card border-0 bg-gary-div2 rounded-3 mb-4 mb-lg-0">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="mb-4 pb-2">
                                <p class="fw-bold fs-24 text-dark">Haskell</p>
                                <p class="fs-14 fw-semibold text-primary">BACKEND</p>
                            </div>
                            <img src=" {{ asset('assets/images/haskell.png"') }}" alt="haskell">
                           
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fw-semibold fs-15">2.5 Score</span>
                            <span class="fs-15 text-gray-light">15 Days Left</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection