@extends('layouts.adminLayout')


@section('content')
<div class="d-sm-flex text-center justify-content-between align-items-center mb-4">
    <h3 class="mb-sm-0 mb-1 fs-18">Experience Professionel</h3>
    <ul class="ps-0 mb-0 list-unstyled d-flex justify-content-center">
        <li>
            <a href="index.html" class="text-decoration-none">
                <i class="ri-home-2-line" style="position: relative; top: -1px;"></i>
                <span>Home</span>
            </a>
        </li>
        <li>
            <span class="fw-semibold fs-14 heading-font text-dark dot ms-2">Exp</span>
        </li>
    </ul>
</div>
<div class="card bg-white border-0 rounded-10 mb-4">
    <div class="card-body p-4">
        <div class="d-flex justify-content-between align-items-center border-bottom pb-20 mb-20">
            <h4 class="fw-semibold fs-18 mb-0">Mes Parcours</h4>
            <div class="d-sm-flex align-items-center">
                <button
                    class="border-0 btn btn-primary py-2 px-3 px-sm-4 text-white fs-14 fw-semibold rounded-3"
                    data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                    aria-controls="offcanvasRight">
                    <span class="py-sm-1 d-block">
                        <i class="ri-add-line text-white"></i>
                        <span>Add Project</span>
                    </span>
                </button>
                <div class="dropdown action-opt ms-sm-4 mt-3 mt-sm-0">
                    <button class="btn bg-transparent p-0" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i data-feather="chevron-down"></i>
                        <span>This Month</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
                        <li>
                            <a class="dropdown-item" href="javascript:;">
                                <i data-feather="clock"></i>
                                Today
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="javascript:;">
                                <i data-feather="pie-chart"></i>
                                Last 7 Days
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="javascript:;">
                                <i data-feather="rotate-cw"></i>
                                Last Month
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="javascript:;">
                                <i data-feather="calendar"></i>
                                Last 1 Year
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="javascript:;">
                                <i data-feather="bar-chart"></i>
                                All Time
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="javascript:;">
                                <i data-feather="eye"></i>
                                View
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="javascript:;">
                                <i data-feather="trash"></i>
                                Delete
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="default-table-area project-list style-two">
            <div class="table-responsive">
                <table class="table align-middle">
                    <thead>
                        <tr class="text-center">
                            <th scope="col" class="text-primary text-start">Desctiption</th>
                            <th scope="col">Domaine</th>
                            <th scope="col">Entréprise</th>
                            <th scope="col">Période</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                    
                                    <div class="flex-grow-1 ms-3">
                                        <h4 class="fw-semibold fs-16 mb-0 lh-base hover">Product UIUX Design
                                        </h4>
                                    </div>
                            </td>
                            <td>
                                <ul class="ps-0 mb-0 list-unstyled d-flex justify-content-center">
                                    <li>
                                        <img src="assets/images/user-30.jpg"
                                            class="border border-2 rounded-circle wh-25 bg-white border-color-white"
                                            alt="user">
                                    </li>
                                    <li class="ms-8">
                                        <img src="assets/images/user-31.jpg"
                                            class="border border-2 rounded-circle wh-25 bg-white border-color-white"
                                            alt="user">
                                    </li>
                                    <li class="ms-8">
                                        <img src="assets/images/user-32.jpg"
                                            class="border border-2 rounded-circle wh-25 bg-white border-color-white"
                                            alt="user">
                                    </li>
                                </ul>
                            </td>
                            <td>
                                <span class="d-block fs-15 text-center">$14,000</span>
                            </td>
                            <td>
                                <span
                                    class="badge bg-success bg-opacity-10 text-success py-2 px-3 fw-semibold d-block text-center">Ongoing</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="d-sm-flex justify-content-between align-items-center text-center">
                <span class="fs-14">Showing 1 To 13 Of 20 Entries</span>
                <nav aria-label="Page navigation example">
                    <ul class="pagination mb-0 mt-3 mt-sm-0 justify-content-center">
                        <li class="page-item">
                            <a class="page-link icon" href="projects.html#" aria-label="Previous">
                                <i data-feather="arrow-left"></i>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link active" href="projects.html#">1</a></li>
                        <li class="page-item"><a class="page-link" href="projects.html#">2</a></li>
                        <li class="page-item"><a class="page-link" href="projects.html#">3</a></li>
                        <li class="page-item">
                            <a class="page-link icon" href="projects.html#" aria-label="Next">
                                <i data-feather="arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection