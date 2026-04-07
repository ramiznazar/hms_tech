@extends('admin.layouts.main')
@section('content')
    <div class="page-content-wrapper ">

        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="btn-group float-right">
                            <ol class="breadcrumb hide-phone p-0 m-0">
                                <li class="breadcrumb-item"><a href="#">Zoogler</a></li>
                                <li class="breadcrumb-item"><a href="#">Tables</a></li>
                                <li class="breadcrumb-item active">Basic Tables</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Basic Tables</h4>
                    </div>
                </div>
            </div>
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="mt-0 header-title">Basic example</h4>
                            <p class="text-muted mb-4 font-13">For basic styling—light padding and
                                only horizontal dividers—add the base class <code>.table</code> to any
                                <code>&lt;table&gt;</code>.
                            </p>

                            <div class="table-responsive">
                                <table class="table mb-0 table-centered">
                                    <thead>
                                        <tr>
                                            <th>Compny</th>
                                            <th>Bill</th>
                                            <th>Average Bill</th>
                                            <th>Paid Bill</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><img src="assets/images/widgets/project1.jpg" alt=""
                                                    class="rounded-circle thumb-sm mr-1">
                                                Micromin
                                            </td>
                                            <td>4</td>
                                            <td>$250</td>
                                            <td>$800</td>
                                            <td>
                                                <div class="dropdown d-inline-block float-right">
                                                    <a class="nav-link dropdown-toggle arrow-none" id="dLabel4"
                                                        data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                                        aria-expanded="false">
                                                        <i class="fas fa-ellipsis-v font-20 text-muted"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right"
                                                        aria-labelledby="dLabel4">
                                                        <a class="dropdown-item" href="#">Creat Project</a>
                                                        <a class="dropdown-item" href="#">Open Project</a>
                                                        <a class="dropdown-item" href="#">Tasks Details</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img src="assets/images/widgets/project2.jpg" alt=""
                                                    class="rounded-circle thumb-sm mr-1">
                                                ZZ Diamond
                                            </td>
                                            <td>2</td>
                                            <td>$180</td>
                                            <td>$400</td>
                                            <td>
                                                <div class="dropdown d-inline-block float-right">
                                                    <a class="nav-link dropdown-toggle arrow-none" id="dLabel5"
                                                        data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                                        aria-expanded="false">
                                                        <i class="fas fa-ellipsis-v font-20 text-muted"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right"
                                                        aria-labelledby="dLabel5">
                                                        <a class="dropdown-item" href="#">Creat Project</a>
                                                        <a class="dropdown-item" href="#">Open Project</a>
                                                        <a class="dropdown-item" href="#">Tasks Details</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img src="assets/images/widgets/project3.jpg" alt=""
                                                    class="rounded-circle thumb-sm mr-1">
                                                Dairy Sweet
                                            </td>
                                            <td>6</td>
                                            <td>$210</td>
                                            <td>$500</td>
                                            <td>
                                                <div class="dropdown d-inline-block float-right">
                                                    <a class="nav-link dropdown-toggle arrow-none" id="dLabel6"
                                                        data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                                        aria-expanded="false">
                                                        <i class="fas fa-ellipsis-v font-20 text-muted"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right"
                                                        aria-labelledby="dLabel6">
                                                        <a class="dropdown-item" href="#">Creat Project</a>
                                                        <a class="dropdown-item" href="#">Open Project</a>
                                                        <a class="dropdown-item" href="#">Tasks Details</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img src="assets/images/widgets/project4.jpg" alt=""
                                                    class="rounded-circle thumb-sm mr-1">
                                                Corner Tea
                                            </td>
                                            <td>3</td>
                                            <td>$80</td>
                                            <td>$350</td>
                                            <td>
                                                <div class="dropdown d-inline-block float-right">
                                                    <a class="nav-link dropdown-toggle arrow-none" id="dLabel7"
                                                        data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                                        aria-expanded="false">
                                                        <i class="fas fa-ellipsis-v font-20 text-muted"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right"
                                                        aria-labelledby="dLabel7">
                                                        <a class="dropdown-item" href="#">Creat Project</a>
                                                        <a class="dropdown-item" href="#">Open Project</a>
                                                        <a class="dropdown-item" href="#">Tasks Details</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->


            

        </div><!-- container -->

    </div> <!-- Page content Wrapper -->
@endsection