<!DOCTYPE html>
<html lang="fr">


@include('layouts_admin.head')

<body>
    <!-- begin app -->
    <div class="app">
        <!-- begin app-wrap -->
        <div class="app-wrap">
            <!-- begin pre-loader -->
            @include('layouts_admin.preloader')
            <!-- end pre-loader -->
            <!-- begin app-header -->
            @include('layouts_admin.header')
            <!-- end app-header -->
            <!-- begin app-container -->
            <div class="app-container">
                <!-- begin app-nabar -->
                @include('layouts_admin.sidebar')
                <!-- end app-navbar -->
                <!-- begin app-main -->
                <div class="app-main" id="main">
                    <!-- begin container-fluid -->
                    <div class="container-fluid">
                        <!-- begin row -->
                        <div class="row">
                            <div class="col-md-12 m-b-30">
                                <!-- begin page title -->
                                @include('layouts_admin.page_title')
                                <!-- end page title -->
                            </div>
                        </div>
                        <!-- Notification -->
                        <!-- @include('layouts_admin.notification') -->
                        <!-- end row -->
                        <!-- begin row -->
                        @yield('content')
                        <!-- end row -->
                        <!-- event Modal -->
                        <div class="modal fade" id="eventModal" tabindex="-1" role="dialog" aria-labelledby="verticalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="verticalCenterTitle">Add New Event</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="form-group">
                                                <label for="modelemail">Event Name</label>
                                                <input type="email" class="form-control" id="modelemail">
                                            </div>
                                            <div class="form-group">
                                                <label>Choose Event Color</label>
                                                <select class="form-control">
                                                    <option>Primary</option>
                                                    <option>Warning</option>
                                                    <option>Success</option>
                                                    <option>Danger</option>
                                                </select>
                                            </div>

                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-success">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end container-fluid -->
                </div>
                <!-- end app-main -->
            </div>
            <!-- end app-container -->
            <!-- begin footer -->
            @include('layouts_admin.footer')
            <!-- end footer -->
        </div>
        <!-- end app-wrap -->
    </div>
    <!-- end app -->
    @include('layouts_admin.script')

</body>


</html>