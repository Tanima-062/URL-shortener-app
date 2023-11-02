<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>URL Shortener App</title>
    @include('backend.layouts.styles')
    <link rel="stylesheet" href="{{asset('backend/assets/templates/vendors/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/templates/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css')}}" type="text/css" />
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('backend.layouts.header')
    <div class="container-fluid page-body-wrapper">
        @include('backend.layouts.sidebar')
        <div class="main-panel report-page">
            <div class="content-wrapper" >
              @include('backend.layouts.messages')
                <h3 class="users-list-title">URL SHORT FORM</h3>
                <hr class="Dash-Line">
                <div class="row">
                  <div class="col-md-7 m-auto">
                    <div class="card">
                      <div class="card-body">
                        <form action="{{route('url.save')}}" method="POST">
                          @csrf
                          <div class="form-group row px-5">
                            <div class="col-md-3">
                                <h3>URL :</h3>
                            </div>
                            <div class="col-md-9 mt-2">
                              <input type="text" name="url" class="form-control" required>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-12 text-center">
                              <input type="submit" value="Submit">
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <!-- main-panel ends -->
        </div>
    </div>
</div>
<!-- page-body-wrapper ends -->
<!-- container-scroller -->

@include('backend.layouts.scripts')
<script src="{{asset('backend/assets/templates/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}" type="text/javascript"></script>

</body>

</html>
