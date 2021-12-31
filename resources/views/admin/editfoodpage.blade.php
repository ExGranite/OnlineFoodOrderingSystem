<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    @include("admin.admincss")
  </head>
  <body>
    <div class="container-scroller">
        @include("admin.navbar")
        <div class="container-fluid page-body-wrapper">
          @include("admin.topbar")
          <div class="main-panel">
            <div class="content-wrapper">
              <div class="row">
                <div class="col-lg-11 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title" style="font-size: 30px;">Edit Food</h4>
                      <hr class="card-description"> </hr>
                      <form class="forms-sample" action="{{url('/editfood', $data->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Title</label>
                          <div class="col-sm-6">
                            <input style="color: whitesmoke; background-color: #2A3038" type="text" class="form-control" name="title" value="{{$data->title}}" required>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Category</label>
                          <div class="col-sm-6">
                            <input style="color: whitesmoke; background-color: #2A3038" type="text" class="form-control" name="category" value="{{$data->category}}" required>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Price</label>
                          <div class="col-sm-6">
                            <input style="color: whitesmoke; background-color: #2A3038" type="number" step=".01" class="form-control" name="price" value="{{$data->price}}" required>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Description</label>
                          <div class="col-sm-6">
                            <textarea style="color: whitesmoke; background-color: #2A3038" type="text" class="form-control" name="description" rows="4" required>{{$data->description}}</textarea>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Old Image</label>
                          <div class="col-sm-6">
                              <img style="width: 150px; height: 150px; border-radius: 20%;" src="/foodimage/{{$data->image}}" alt="No Data Found">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">New Image</label>
                          <div class="col-sm-6">
                            <input type="file" name="image" placeholder="Image">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-8"></div>
                          <div class="">
                            <button type="submit" class="btn btn-primary mr-2">Save</button>
                            <button type="button" class="btn btn-dark">Cancel</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @include("admin.footer")
          </div>
        </div>
    </div>
    @include("admin.adminscript")
  </body>
</html>