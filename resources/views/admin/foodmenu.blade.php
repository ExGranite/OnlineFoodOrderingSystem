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
                    <h4 class="card-title" style="font-size: 30px;">Food Data</h4>
                    <p class="card-description"><code></code></p>
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <thead>
                          <tr class="table-dark">
                            <th style="color: white; font-size: 15px;"> Serial </th>
                            <th style="color: white; font-size: 15px;"> Category </th>
                            <th style="color: white; font-size: 15px;"> Title </th>
                            <th style="color: white; font-size: 15px;"> Price </th>
                            <th style="color: white; font-size: 15px;"> Description </th>
                            <th style="color: white; font-size: 15px;"> Image </th>
                            <th style="color: white; font-size: 15px;"> Action </th>
                          </tr>
                        </thead>

                        @foreach($data as $data)
                        <tbody>
                          <tr>
                            <td class="py-1">{{$data->id}}</td>
                            <td style="color: var(--cyan);"> {{$data->category}} </td>
                            <td> {{$data->title}} </td>
                            <td> ${{$data->price}} </td>
                            <td> {{$data->description}} </td>
                            <td> <img class="img-lg" src="/foodimage/{{$data->image}}" alt="No Data Found"> </td>
                            <td style="font-size: 20px;"> <a href="{{url('/deletefood', $data->id)}}"> <i class="mdi mdi-delete"></i></a> / <a href="{{url('/editfoodpage', $data->id)}}"> <i class="mdi mdi-lead-pencil"></i> </a> </td>
                          </tr>
                        </tbody>
                        @endforeach
                          
                      </table>
                    </div>
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