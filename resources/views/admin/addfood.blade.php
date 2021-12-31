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
                    <h4 class="card-title" style="font-size: 30px;">Add Food</h4>
                    <hr class="card-description"> </hr>
                    <form class="forms-sample" action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Title</label>
                        <div class="col-sm-6">
                          <input style="color: whitesmoke; background-color: #2A3038" type="text" class="form-control" name="title" placeholder="Title" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Category</label>
                        <div class="col-sm-6">
                          <input id = "category" style="color: whitesmoke; background-color: #2A3038" type="text" class="form-control" name="category" placeholder="Category" required>
                          <!-- <select name="" id="">
                            <option value="0"></option>
                            <option value="1">Breakfast</option>
                            <option value="2">Lunch</option>
                            <option value="3">Dinner</option>
                            <option value="4">Dessert</option>
                          </select> -->
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Price</label>
                        <div class="col-sm-6">
                          <input style="color: whitesmoke; background-color: #2A3038" type="number" step=".01" class="form-control" name="price" placeholder="Price" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Description</label>
                        <div class="col-sm-6">
                          <textarea style="color: whitesmoke; background-color: #2A3038" type="text" class="form-control" name="description" rows="4" placeholder="Description" required></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Image</label>
                        <div class="col-sm-6">
                          <input type="file" name="image" placeholder="Image" required>
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