@extends("master")
@section('css')
<link href="{{ asset('css/hoadon.css') }}" rel="stylesheet">
@endsection
@section('content')
<main class="main">
    <div class="main-header">
        <div class="main-header__heading">
            <marquee class="welcome-text-heading"> <b>CHÀO MỪNG QUÝ KHÁCH ĐẾN VỚI UST MILKTEA</b> </marquee>
            <marquee class="welcome-text-comment"> <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mọi chi tiết xin liên hệ hotline: 0987654321 - 0975312468</b> </marquee>
        </div>
    </div>

    <div class="main-cards">
        <div class="card">
            <div class="card-item1">Sản phẩm</div>
            <div class="container-fluid">
                <div class="row">
                    @foreach ($products as $product)
                    <div class="col-sm-6">
                        <div class="col-item">
                            <div class="photo"> <img src="{{URL::to('storage/app/public/'.$product->image)}}" class="img-responsive" alt="{{$product->name}}">
                            </div>
                            <div class="info">
                                <div class="row">
                                    <div class="price col-md-12">
                                        <h5 style="font-size:10px !important" value="{{$product->name}}">{{$product->name}}</h5>
                                        <h5 class="price-text-color" value="{{$product->price}}" style="font-size:10px  !important"> {{$product->price}} đ</h5>
                                    </div>
                                </div>
                                <div class="separator clear-left">
                                    <form action="{{route('addCart',$product->id)}}" method="GET">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="product_id" value="{{ $product->id }}" <i class="fa fa-heart-o"></i>
                                        <input type="submit" class="btn btn-primary" value="Đặt Hàng"></i>
                                    </form>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>

        </div>
        <div class="card">
            <div>Thanh toán</div>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th style="width: 100px;">Sản phẩm</th>
                        <th style="width: 50px;">Sản phẩm</th>
                        <th style="width: 50px;">Giá</th>
                    </tr>
                </thead>
                <tbody>

                    @if(Session('cart'))
                    @foreach($product_card as $product)
                    <tr>
                        <td style="width: 100px;"><img src="{{$product['item']['name']}}" alt=""></td>
                        <td style="width: 50px;">{{$product['item']['name']}}</td>
                        <td style="width: 50px;">{{$product['item']['price']}}vnđ</td>
                        <td style="width: 50px;"><a href="{{route('deleteCart',$product['item']['id'])}}">Xóa</a></td>
                    </tr>
                    @endforeach
                    
                    @endif
                    <a href="{{route('order.store')}}" class="btn btn-primary bla">Thanh Toán</a>
                </tbody>
            </table>
        </div>
    </div>
</main>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>
    
</script>
@endsection