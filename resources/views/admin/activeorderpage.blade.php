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
                        <div class="col-lg-11 grid-margin stretch-card">
                            <div class="card">
                            <div class="card-body">
                                <h4 class="card-title" style="font-size: 30px;">Active Order Data</h4>
                                <p class="card-description"><code></code></p>
                                <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                    <tr class="table-dark">
                                        <th style="color: white; font-size: 15px;"> Serial </th>
                                        <th style="color: white; font-size: 15px;"> Name </th>
                                        <th style="color: white; font-size: 15px;"> Contents </th>
                                        <th style="color: white; font-size: 15px;"> Address </th>
                                        <th style="color: white; font-size: 15px;"> Price </th>
                                        <th style="color: white; font-size: 15px;"> Order Time </th>
                                        <th style="color: white; font-size: 15px;"> Change Status </th>
                                    </tr>
                                    </thead>

                                    @foreach($data as $data)
                                    <tbody>
                                    <tr>
                                        <td class="py-1">{{$data->id}}</td>
                                        <td style="color: var(--cyan);"> {{$data->fname}} {{$data->lname}} </td>
                                        <td> {{$data->contents}} </td>
                                        <td> {{$data->address}}, {{$data->city}} </td>
                                        <td> ${{$data->price}} </td>
                                        <td> {{$data->created_at}} </td>
                                        <td style="font-size: 20px;"> <a href="{{url('/changestatusorder', $data->id)}}"> <i class="mdi mdi-lead-pencil"></i> </a> </td>
                                    </tr>
                                    </tbody>
                                    @endforeach
                                    
                                </table>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-lg-11 grid-margin stretch-card">
                            <div class="card">
                            <div class="card-body">
                                <h4 class="card-title" style="font-size: 30px;">Completed Order Data</h4>
                                <p class="card-description"><code></code></p>
                                <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                    <tr class="table-dark">
                                        <th style="color: white; font-size: 15px;"> Serial </th>
                                        <th style="color: white; font-size: 15px;"> Name </th>
                                        <th style="color: white; font-size: 15px;"> Contents </th>
                                        <th style="color: white; font-size: 15px;"> Address </th>
                                        <th style="color: white; font-size: 15px;"> Price </th>
                                        <th style="color: white; font-size: 15px;"> Order Time </th>
                                        <th style="color: white; font-size: 15px;"> Delivery Time </th>
                                    </tr>
                                    </thead>

                                    @foreach($data2 as $data)
                                    <tbody>
                                    <tr>
                                        <td class="py-1">{{$data->id}}</td>
                                        <td style="color: var(--cyan);"> {{$data->fname}} {{$data->lname}} </td>
                                        <td> {{$data->contents}} </td>
                                        <td> {{$data->address}}, {{$data->city}} </td>
                                        <td> ${{$data->price}} </td>
                                        <td> {{$data->created_at}} </td>
                                        <td> {{$data->updated_at}} </td>
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