<div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                        <h6> Lunch </h6>
                        <h2> Lunch makes your world go round </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item-carousel">
            <div class="col-lg-12">
                <div class="owl-menu-item owl-carousel">
                    @foreach($data as $data)
                        @if($data->category=="Lunch")
                        <form action="{{url('/addtocart', $data->id)}}" method="post">
                                @csrf
                            <div class="item">
                                <div class='card' style="background-image: url('/foodimage/{{$data->image}}')">
                                    <div class="price"><h6>${{$data->price}}</h6></div>
                                    <div class='info'>
                                    <h1 class='title'>{{$data->title}}</h1>
                                    <p class='description'>{{$data->description}}</p>
                                    <div class="main-text-button">
                                        <div class="scroll-to-section">
                                            <input type="number" name="quantity" min="1" value="1" style="width: 60px; background-color: wheat; float: left; height: 35px; text-allign: right; padding-left: 10px; border-radius: 5px;">
                                            <div style="padding-left: 53%">
                                                <input type="submit" class="btn btn-outline-dark" value="Add to Cart" style="height: 35px;">
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                
                            </div>
                            </form>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>