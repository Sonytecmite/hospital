<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>One-Health Medical Center</title>
    <!-- CSS styles -->
    @include('admin.css.styles')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <h1>Add doctor</h1>
            </div>
            <div class="row mt-10">
              <div class="card">
                  <div class="card-body col-md-10 offset-md-1 col-sm-12">
                      <form action="{{url('add-doctor')}}" method="POST" enctype="multipart/form-data" class="forms-sample">
                        @csrf
                          <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="name">Doctor's Name</label>
                                    <input type="text" class="form-control p-input text-black" name="name" id="name" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="phone">Phone</label>
                                    <input type="text" class="form-control p-input text-black" name="phone" id="phone" required>
                                </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="room">Room</label>
                                    <input type="text" class="form-control p-input text-black" name="room" id="room" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="specialty">Specialty</label>
                                    <select name="specialty" id="specialty" class="form-control text-black">
                                      <option value="">--select--</option>
                                      <option value="Cardiology">Cardiology</option>
                                      <option value="Dental">Dental</option>
                                      <option value="General Health">General Health</option>
                                      <option value="Paramedic">Paramedic</option>
                                    </select>
                                </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="photo" class="pt-2">Doctor's Photo</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="file" class="form-control p-input" name="photo" id="photo" required>
                                </div>
                            </div>
                          </div>
                          <div class="form-group mt-10">
                            <input type="submit" class="btn btn-success btn-lg" value="Submit">
                          </div>
                      </form>
                  </div>
              </div>
            </div>
        </div>
      </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    
    <!-- plugins:js -->
    @include('admin.js.scripts')
  </body>
</html>