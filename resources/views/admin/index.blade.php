@extends('admin.layout.master')

@section('content')
    <div class="page-wrapper">

        <!-- Page Content-->
        <div class="page-content">
            <div class="container-xxl">

                <div class="row justify-content-center">
                    <div class="col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Manage Quizz</h4>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body pt-0">
                                <div class="card-body pt-0">
                                    <div class="table-responsive">
                                        <table class="table mb-0 table-centered">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Quizz</th>
                                                    <th>Create By</th>
                                                    <th>Level</th>
                                                    <th>Category</th>
                                                    <th>Language</th>
                                                    <th>Image</th>
                                                    <th>Publish</th>
                                                    <th>Creation date</th>
                                                    <th class="text-end">Action</th>
                                                </tr>
                                            </thead>

                                            <tbody id="quizzes-table">
                                                @include('admin.partials.quizzes_table', [
                                                    'quizzes' => $quizzes,
                                                ])
                                            </tbody>
                                        </table>

                                        <div id="pagination-links">
                                            {{ $quizzes->links() }}
                                        </div>
                                    </div>
                                </div>

                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!--end col-->
                    <div class="col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Bordered Table</h4>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body pt-0">
                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0 table-centered">
                                        <thead>
                                            <tr>
                                                <th>Transaction ID</th>
                                                <th>Date</th>
                                                <th>Price</th>
                                                <th>Order Status</th>
                                                <th class="text-end">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>#124781</td>
                                                <td>25/11/2018</td>
                                                <td>$321</td>
                                                <td><span class="badge bg-success">Approved</span></td>
                                                <td class="text-end">
                                                    <div class="dropdown d-inline-block">
                                                        <a class="dropdown-toggle arrow-none" id="dLabel11"
                                                            data-bs-toggle="dropdown" href="#" role="button"
                                                            aria-haspopup="false" aria-expanded="false">
                                                            <i class="las la-ellipsis-v fs-20 text-muted"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end"
                                                            aria-labelledby="dLabel11" style="">
                                                            <a class="dropdown-item" href="#">Creat Project</a>
                                                            <a class="dropdown-item" href="#">Open Project</a>
                                                            <a class="dropdown-item" href="#">Tasks Details</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#542136</td>
                                                <td>19/11/2018</td>
                                                <td>$227</td>
                                                <td><span class="badge bg-success">Approved</span></td>
                                                <td class="text-end">
                                                    <div class="dropdown d-inline-block">
                                                        <a class="dropdown-toggle arrow-none" id="dLabel11"
                                                            data-bs-toggle="dropdown" href="#" role="button"
                                                            aria-haspopup="false" aria-expanded="false">
                                                            <i class="las la-ellipsis-v fs-20 text-muted"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end"
                                                            aria-labelledby="dLabel11">
                                                            <a class="dropdown-item" href="#">Creat Project</a>
                                                            <a class="dropdown-item" href="#">Open Project</a>
                                                            <a class="dropdown-item" href="#">Tasks Details</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#234578</td>
                                                <td>11/10/2018</td>
                                                <td>$442</td>
                                                <td><span class="badge bg-danger">Rejected</span></td>
                                                <td class="text-end">
                                                    <div class="dropdown d-inline-block">
                                                        <a class="dropdown-toggle arrow-none" id="dLabel11"
                                                            data-bs-toggle="dropdown" href="#" role="button"
                                                            aria-haspopup="false" aria-expanded="false">
                                                            <i class="las la-ellipsis-v fs-20 text-muted"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end"
                                                            aria-labelledby="dLabel11">
                                                            <a class="dropdown-item" href="#">Creat Project</a>
                                                            <a class="dropdown-item" href="#">Open Project</a>
                                                            <a class="dropdown-item" href="#">Tasks Details</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#951357</td>
                                                <td>03/12/2018</td>
                                                <td>$625</td>
                                                <td><span class="badge bg-success">Approved</span></td>
                                                <td class="text-end">
                                                    <div class="dropdown d-inline-block">
                                                        <a class="dropdown-toggle arrow-none" id="dLabel11"
                                                            data-bs-toggle="dropdown" href="#" role="button"
                                                            aria-haspopup="false" aria-expanded="false">
                                                            <i class="las la-ellipsis-v fs-20 text-muted"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end"
                                                            aria-labelledby="dLabel11">
                                                            <a class="dropdown-item" href="#">Creat Project</a>
                                                            <a class="dropdown-item" href="#">Open Project</a>
                                                            <a class="dropdown-item" href="#">Tasks Details</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table><!--end /table-->
                                </div><!--end /tableresponsive-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!--end col-->
                </div><!--end row-->

                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Striped Rows</h4>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body pt-0">
                                <div class="table-responsive">
                                    <table class="table table-striped mb-0">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Customer</th>
                                                <th>Email</th>
                                                <th>Contact No</th>
                                                <th class="text-end">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><img src="assets/images/users/avatar-3.jpg" alt=""
                                                        class="rounded-circle thumb-md me-1 d-inline"> Aaron Poulin</td>
                                                <td>Aaron@example.com</td>
                                                <td>+21 21547896</td>
                                                <td class="text-end">
                                                    <a href="#"><i
                                                            class="las la-pen text-secondary font-16"></i></a>
                                                    <a href="#"><i
                                                            class="las la-trash-alt text-secondary font-16"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><img src="assets/images/users/avatar-4.jpg" alt=""
                                                        class="rounded-circle thumb-md me-1 d-inline"> Richard Ali</td>
                                                <td>Richard@example.com</td>
                                                <td>+41 21547896</td>
                                                <td class="text-end">
                                                    <a href="#"><i
                                                            class="las la-pen text-secondary font-16"></i></a>
                                                    <a href="#"><i
                                                            class="las la-trash-alt text-secondary font-16"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><img src="assets/images/users/avatar-5.jpg" alt=""
                                                        class="rounded-circle thumb-md me-1 d-inline"> Juan Clark</td>
                                                <td>Juan@example.com</td>
                                                <td>+65 21547896</td>
                                                <td class="text-end">
                                                    <a href="#"><i
                                                            class="las la-pen text-secondary font-16"></i></a>
                                                    <a href="#"><i
                                                            class="las la-trash-alt text-secondary font-16"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><img src="assets/images/users/avatar-6.jpg" alt=""
                                                        class="rounded-circle thumb-md me-1 d-inline"> Albert Hull</td>
                                                <td>Albert@example.com</td>
                                                <td>+88 21547896</td>
                                                <td class="text-end">
                                                    <a href="#"><i
                                                            class="las la-pen text-secondary font-16"></i></a>
                                                    <a href="#"><i
                                                            class="las la-trash-alt text-secondary font-16"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table><!--end /table-->
                                </div><!--end /tableresponsive-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!--end col-->
                    <div class="col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Table Head Options</h4>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body pt-0">
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead class="table-light">
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Access</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>XYZ@Example.com</td>
                                                <td><span
                                                        class="badge bg-transparent border border-success text-success">Business</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>XYZ@Example.com</td>
                                                <td><span
                                                        class="badge bg-transparent border border-warning text-warning">Personal</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Larry</td>
                                                <td>XYZ@Example.com</td>
                                                <td><span
                                                        class="badge bg-transparent border border-danger text-danger">Disabled</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">4</th>
                                                <td>Mark</td>
                                                <td>XYZ@Example.com</td>
                                                <td><span
                                                        class="badge bg-transparent border border-success text-success">Business</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">5</th>
                                                <td>Jacob</td>
                                                <td>XYZ@Example.com</td>
                                                <td><span
                                                        class="badge bg-transparent border border-warning text-warning">Personal</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table><!--end /table-->
                                </div><!--end /tableresponsive-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!--end col-->
                </div><!--end row-->

                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Hoverable Rows</h4>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body pt-0">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead class="table-light">
                                            <tr>
                                                <th>#</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Username</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td colspan="2">Larry the Bird</td>
                                                <td>@twitter</td>
                                            </tr>
                                        </tbody>
                                    </table><!--end /table-->
                                </div><!--end /tableresponsive-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!--end col-->
                    <div class="col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Dark Table</h4>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body pt-0">
                                <div class="table-responsive">
                                    <table class="table table-dark mb-0">
                                        <thead>
                                            <tr>
                                                <th class="rounded-bottom-0">#</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th class="rounded-bottom-0">Username</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                                <td>@twitter</td>
                                            </tr>
                                        </tbody>
                                    </table><!--end /table-->
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!--end col-->
                </div><!--end row-->

                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Contextual Classes</h4>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body pt-0">
                                <div class="table-responsive-sm">
                                    <table class="table mb-0">
                                        <thead class="table-light">
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">First Name</th>
                                                <th scope="col">Last Name</th>
                                                <th scope="col">Username</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="table-primary">
                                                <th scope="row">1</th>
                                                <td class="">Mark</td>
                                                <td class="">Otto</td>
                                                <td class="">@mdo</td>
                                            </tr>
                                            <tr class="">
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr class="table-secondary">
                                                <th scope="row">3</th>
                                                <td class="">Larry</td>
                                                <td class="">the Bird</td>
                                                <td class="">@twitter</td>
                                            </tr>
                                            <tr class="">
                                                <th scope="row">4</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr class="table-success">
                                                <th scope="row">5</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr class="">
                                                <th scope="row">6</th>
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                                <td>@twitter</td>
                                            </tr>
                                            <tr class="table-info">
                                                <th scope="row">7</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr class="">
                                                <th scope="row">8</th>
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                                <td>@twitter</td>
                                            </tr>
                                            <tr class="table-warning">
                                                <th scope="row">9</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr class="">
                                                <th scope="row">10</th>
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                                <td>@twitter</td>
                                            </tr>
                                        </tbody>
                                    </table><!--end /table-->
                                </div><!--end /tableresponsive-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!--end col-->
                    <div class="col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Captions Table</h4>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body pt-0">
                                <div class="table-responsive-sm">
                                    <table class="table mb-0">
                                        <caption>List of users</caption>
                                        <thead class="table-light">
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">First Name</th>
                                                <th scope="col">Last Name</th>
                                                <th scope="col">Username</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                                <td>@twitter</td>
                                            </tr>
                                        </tbody>
                                    </table><!--end /table-->
                                </div><!--end /tableresponsive-->
                            </div><!--end card-body-->
                        </div><!--end card-->

                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Small Table</h4>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body pt-0">
                                <div class="table-responsive-sm">
                                    <table class="table table-sm mb-0">
                                        <thead class="table-light">
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">First Name</th>
                                                <th scope="col">Last Name</th>
                                                <th scope="col">Username</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td colspan="2">Larry the Bird</td>
                                                <td>@twitter</td>
                                            </tr>
                                        </tbody>
                                    </table><!--end /table-->
                                </div><!--end /tableresponsive-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!--end col-->
                </div><!--end row-->
            </div><!-- container -->
            <!--Start Rightbar-->
            <!--Start Rightbar/offcanvas-->
            <div class="offcanvas offcanvas-end" tabindex="-1" id="Appearance" aria-labelledby="AppearanceLabel">
                <div class="offcanvas-header border-bottom justify-content-between">
                    <h5 class="m-0 font-14" id="AppearanceLabel">Appearance</h5>
                    <button type="button" class="btn-close text-reset p-0 m-0 align-self-center"
                        data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <h6>Account Settings</h6>
                    <div class="p-2 text-start mt-3">
                        <div class="form-check form-switch mb-2">
                            <input class="form-check-input" type="checkbox" id="settings-switch1">
                            <label class="form-check-label" for="settings-switch1">Auto updates</label>
                        </div><!--end form-switch-->
                        <div class="form-check form-switch mb-2">
                            <input class="form-check-input" type="checkbox" id="settings-switch2" checked="">
                            <label class="form-check-label" for="settings-switch2">Location Permission</label>
                        </div><!--end form-switch-->
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="settings-switch3">
                            <label class="form-check-label" for="settings-switch3">Show offline Contacts</label>
                        </div><!--end form-switch-->
                    </div><!--end /div-->
                    <h6>General Settings</h6>
                    <div class="p-2 text-start mt-3">
                        <div class="form-check form-switch mb-2">
                            <input class="form-check-input" type="checkbox" id="settings-switch4">
                            <label class="form-check-label" for="settings-switch4">Show me Online</label>
                        </div><!--end form-switch-->
                        <div class="form-check form-switch mb-2">
                            <input class="form-check-input" type="checkbox" id="settings-switch5" checked="">
                            <label class="form-check-label" for="settings-switch5">Status visible to all</label>
                        </div><!--end form-switch-->
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="settings-switch6">
                            <label class="form-check-label" for="settings-switch6">Notifications Popup</label>
                        </div><!--end form-switch-->
                    </div><!--end /div-->
                </div><!--end offcanvas-body-->
            </div>
            <!--end Rightbar/offcanvas-->
            <!--end Rightbar-->
            <!--Start Footer-->

            <!--end footer-->
        </div>
        <!-- end page content -->
    </div>
    <!-- Edit Modal -->
    <div class="modal fade" id="editQuizModal" tabindex="-1" aria-labelledby="editQuizModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editQuizModalLabel">Edit Quiz</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Form Edit Quiz -->
                    <form id="editQuizForm" method="POST" action="{{ route('admin.quizzes.update_quiz', ':quizId') }}"
                    >
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="quizTitle" class="form-label">Title</label>
                            <input type="text" class="form-control" id="quizTitle" name="title" required>
                        </div>

                        <div class="mb-3">
                            <label for="quizCategory" class="form-label">Category</label>
                            <input type="text" class="form-control" id="quizCategoryInput"
                                placeholder="Select Category" readonly required>
                            <input type="hidden" id="quizCategory" name="category_id" value="">

                            <ul class="listbox overflow-y-auto z-30 list bg-light-3 shadow-soft-high w-full transform rounded transition-transform mt-1 max-h-50"
                                id="categoryListbox" style="display: none;" role="listbox">
                                @foreach ($categories as $category)
                                    <li id="category-{{ $category->id }}" data-value="{{ $category->id }}"
                                        class="option hover:bg-dark-5 cursor-pointer p-2 flex border-2 border-transparent border-b-dark-5"
                                        role="option" aria-selected="false"
                                        onclick="selectCategory('{{ $category->id }}', '{{ $category->name }}')">
                                        <div class="text-dark-2">
                                            <div class="item-title font-semibold text-sm">{{ $category->name }}</div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="mb-3">
                            <label for="quizLevel" class="form-label">Level</label>
                            <input type="text" class="form-control" id="quizLevelInput" placeholder="Select Level"
                                readonly required>
                            <input type="hidden" id="quizLevel" name="level_id" value="">

                            <ul class="listbox overflow-y-auto z-30 list bg-light-3 shadow-soft-high w-full transform rounded transition-transform mt-1 max-h-50"
                                id="levelListbox" style="display: none;" role="listbox">
                                @foreach ($grades as $grade)
                                    <li id="grade-{{ $grade->id }}" data-value="{{ $grade->id }}"
                                        class="option hover:bg-dark-5 cursor-pointer p-2 flex border-2 border-transparent border-b-dark-5"
                                        role="option" aria-selected="false"
                                        onclick="selectLevel('{{ $grade->id }}', '{{ $grade->name }}')">
                                        <div class="text-dark-2">
                                            <div class="item-title font-semibold text-sm">{{ $grade->name }}</div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="row">

                            <div class="col-6 mb-3">
                                <label for="quizLanguage" class="form-label">Language</label>
                                <select class="form-select" id="question_type" name="question_type" required>
                                    <option value="multiple-choice">English</option>
                                    <option value="true-false">Vietnamese</option>
                                </select>
                            </div>
                            <div class="col-6 mb-3">
                                <label for="quizLanguage" class="form-label">Publish</label>
                                <select class="form-select" id="question_type" name="question_type" required>
                                    <option value="multiple-choice">On</option>
                                    <option value="true-false">Off</option>
                                </select>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
<script>
    $(document).ready(function() {
        $(document).on('click', '.pagination a', function(event) {
            event.preventDefault();

            var page = $(this).attr('href').split('page=')[1]; // Lấy số trang từ URL
            fetchQuizzes(page); // Gọi AJAX
        });

        function fetchQuizzes(page) {
            $.ajax({
                url: "/admin/fetch-quizzes?page=" + page, // Gửi yêu cầu AJAX đến route phân trang
                success: function(data) {
                    $('#quizzes-table').html(data); // Thay đổi nội dung bảng với dữ liệu mới
                }
            });
        }
    });
    // Function to toggle the category listbox
    document.getElementById('quizCategoryInput').addEventListener('click', function() {
        var listbox = document.getElementById('categoryListbox');
        listbox.style.display = (listbox.style.display === 'none') ? 'block' : 'none';
    });

    // Function to handle category selection
    function selectCategory(categoryId, categoryName) {
        document.getElementById('quizCategoryInput').value = categoryName;
        document.getElementById('quizCategory').value = categoryId;
        document.getElementById('categoryListbox').style.display = 'none';
    }

    // Function to toggle the level listbox
    document.getElementById('quizLevelInput').addEventListener('click', function() {
        var listbox = document.getElementById('levelListbox');
        listbox.style.display = (listbox.style.display === 'none') ? 'block' : 'none';
    });

    // Function to handle level selection
    function selectLevel(levelId, levelName) {
        document.getElementById('quizLevelInput').value = levelName;
        document.getElementById('quizLevel').value = levelId;
        document.getElementById('levelListbox').style.display = 'none';
    }

    // Optional: Close listbox when clicking outside
    document.addEventListener('click', function(event) {
        var isClickInsideCategory = document.getElementById('quizCategoryInput').contains(event.target) ||
            document.getElementById('categoryListbox').contains(event.target);
        var isClickInsideLevel = document.getElementById('quizLevelInput').contains(event.target) ||
            document.getElementById('levelListbox').contains(event.target);

        if (!isClickInsideCategory) {
            document.getElementById('categoryListbox').style.display = 'none';
        }
        if (!isClickInsideLevel) {
            document.getElementById('levelListbox').style.display = 'none';
        }
    });
    $(document).ready(function() {
        function editQuiz(id) {
            $.ajax({
                url: '/admin/' + id + '/edit',
                method: 'GET',
                success: function(response) {
                    // Populate the form fields
                    $('#quizTitle').val(response.quiz.title);
                    $('#quizCategoryInput').val(response.quiz.category.name);
                    $('#quizCategory').val(response.quiz.category_id);
                    $('#quizLevelInput').val(response.quiz.level.name);
                    $('#quizLevel').val(response.quiz.level_id);
                },
                error: function(xhr) {
                    console.log(xhr.responseText); // Handle errors
                }
            });
        }
    });
</script>
