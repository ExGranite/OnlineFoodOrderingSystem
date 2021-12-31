<!DOCTYPE html>
<html lang="en">
  <head>
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
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title" style="font-size: 30px;">Accounts Data</h4>
                    <p class="card-description"><code></code></p>
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <thead>
                          <tr class="table-dark">
                            <th style="color: white; font-size: 15px;"> User </th>
                            <th style="color: white; font-size: 15px;"> Name </th>
                            <th style="color: white; font-size: 15px;"> Email </th>
                            <th style="color: white; font-size: 15px;"> Account Type </th>
                            <th style="color: white; font-size: 15px;"> Action </th>
                          </tr>
                        </thead>

                        @foreach($data as $data)
                        <tbody>
                          <tr>
                            <td class="py-1"> {{$data->id}} </td>
                            <td style="color: var(--cyan);"> {{$data->name}} </td>
                            <td> {{$data->email}} </td>
                            
                            @if($data->usertype=='1')
                            <td style="color: var(--red);"> Admin </td>
                            <td> Unavailable </td>
                            @else
                            <td> Customer </td>
                            <td style="font-size: 20px;"> <a href="{{url('/deleteaccount', $data->id)}}"> <i class="mdi mdi-delete"></i> </a> </td>
                            @endif
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