@extends("master")
@section('css')
<link href="{{ asset('css/sanpham.css') }}" rel="stylesheet">
@endsection
@section('content')
<main class="main">
    <div class="main-overview">
        <div class="overviewcard">
            <div class="overviewcard__icon"><a href="hoadon.php"><img src="img/logo-hoadon.png" alt=""><b>TẠO HÓA ĐƠN</b></a></div>
        </div>
    </div>

    <div class="main-cards">
        <div class="card">
            <div class="san-pham">
                <span style="font-size: 50px; font-family: 'Times New Roman', Times, serif;">Sản phẩm <a style="text-decoration: none;color: white;" href="themsanpham.php"><input name="" id="" class="btn btn-primary" type="button" value="Thêm sản phẩm"></a> </span>
            </div>
            <div class="loc-san-pham">
                <select name="" id="" class="form-select border-1 bg-light" style="margin-bottom:10px;margin-top: 10px;" aria-label="Default select example">
                    <option value selected="select">Lọc sản phẩm</option>
                    <option value="">Lọc theo tên</option>
                    <option value="">Lọc theo giá từ nhỏ đến lớn</option>
                    <option value="">Lọc theo giá từ nhỏ đến lớn</option>
                </select>
            </div>
            <table class="table table-san-pham">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Hình sản phẩm</th>
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Giá sản phẩm</th>
                        <th scope="col">Sửa thông tin</th>
                        <th scope="col">Xóa sản phẩm</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td><img src="https://bizweb.dktcdn.net/thumb/1024x1024/100/315/482/products/bothongtra.png?v=1529460890553" style="width: 40px;height: 40px;" alt=""></td>
                        <td>Bột hồng trà</td>
                        <td>41.000đ</td>
                        <td><a href="suasanpham.php"><input name="" id="" class="btn" style="width:100%" type="button" value="Thay đổi thông tin"></a></td>
                        <td><input name="" id="" class="btn" style="width:100%" type="button" value="Xóa sản phẩm"></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td><img src="https://bizweb.dktcdn.net/thumb/1024x1024/100/315/482/products/bothongtra.png?v=1529460890553" style="width: 40px;height: 40px;" alt=""></td>
                        <td>Bột hồng trà</td>
                        <td>41.000đ</td>
                        <td><a href="suasanpham.php"><input name="" id="" class="btn" style="width:100%" type="button" value="Thay đổi thông tin"></a></td>
                        <td><input name="" id="" class="btn" style="width:100%" type="button" value="Xóa sản phẩm"></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td><img src="https://bizweb.dktcdn.net/thumb/1024x1024/100/315/482/products/bothongtra.png?v=1529460890553" style="width: 40px;height: 40px;" alt=""></td>
                        <td>Bột hồng trà</td>
                        <td>41.000đ</td>
                        <td><a href="suasanpham.php"><input name="" id="" class="btn" style="width:100%" type="button" value="Thay đổi thông tin"></a></td>
                        <td><input name="" id="" class="btn" style="width:100%" type="button" value="Xóa sản phẩm"></td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td><img src="https://bizweb.dktcdn.net/thumb/1024x1024/100/315/482/products/bothongtra.png?v=1529460890553" style="width: 40px;height: 40px;" alt=""></td>
                        <td>Bột hồng trà</td>
                        <td>41.000đ</td>
                        <td><a href="suasanpham.php"><input name="" id="" class="btn" style="width:100%" type="button" value="Thay đổi thông tin"></a></td>
                        <td><input name="" id="" class="btn" style="width:100%" type="button" value="Xóa sản phẩm"></td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td><img src="https://bizweb.dktcdn.net/thumb/1024x1024/100/315/482/products/bothongtra.png?v=1529460890553" style="width: 40px;height: 40px;" alt=""></td>
                        <td>Bột hồng trà</td>
                        <td>41.000đ</td>
                        <td><a href="suasanpham.php"><input name="" id="" class="btn" style="width:100%" type="button" value="Thay đổi thông tin"></a></td>
                        <td><input name="" id="" class="btn" style="width:100%" type="button" value="Xóa sản phẩm"></td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td><img src="https://bizweb.dktcdn.net/thumb/1024x1024/100/315/482/products/bothongtra.png?v=1529460890553" style="width: 40px;height: 40px;" alt=""></td>
                        <td>Bột hồng trà</td>
                        <td>41.000đ</td>
                        <td><a href="suasanpham.php"><input name="" id="" class="btn" style="width:100%" type="button" value="Thay đổi thông tin"></a></td>
                        <td><input name="" id="" class="btn" style="width:100%" type="button" value="Xóa sản phẩm"></td>
                    </tr>
                    <tr>
                        <th scope="row">7</th>
                        <td><img src="https://bizweb.dktcdn.net/thumb/1024x1024/100/315/482/products/bothongtra.png?v=1529460890553" style="width: 40px;height: 40px;" alt=""></td>
                        <td>Bột hồng trà</td>
                        <td>41.000đ</td>
                        <td><a href="suasanpham.php"><input name="" id="" class="btn" style="width:100%" type="button" value="Thay đổi thông tin"></a></td>
                        <td><input name="" id="" class="btn" style="width:100%" type="button" value="Xóa sản phẩm"></td>
                    </tr>
                    <tr>
                        <th scope="row">8</th>
                        <td><img src="https://bizweb.dktcdn.net/thumb/1024x1024/100/315/482/products/bothongtra.png?v=1529460890553" style="width: 40px;height: 40px;" alt=""></td>
                        <td>Bột hồng trà</td>
                        <td>41.000đ</td>
                        <td><a href="suasanpham.php"><input name="" id="" class="btn" style="width:100%" type="button" value="Thay đổi thông tin"></a></td>
                        <td><input name="" id="" class="btn" style="width:100%" type="button" value="Xóa sản phẩm"></td>
                    </tr>
                    <tr>
                        <th scope="row">9</th>
                        <td><img src="https://bizweb.dktcdn.net/thumb/1024x1024/100/315/482/products/bothongtra.png?v=1529460890553" style="width: 40px;height: 40px;" alt=""></td>
                        <td>Bột hồng trà</td>
                        <td>41.000đ</td>
                        <td><a href="suasanpham.php"><input name="" id="" class="btn" style="width:100%" type="button" value="Thay đổi thông tin"></a></td>
                        <td><input name="" id="" class="btn" style="width:100%" type="button" value="Xóa sản phẩm"></td>
                    </tr>
                    <tr>
                        <th scope="row">10</th>
                        <td><img src="https://bizweb.dktcdn.net/thumb/1024x1024/100/315/482/products/bothongtra.png?v=1529460890553" style="width: 40px;height: 40px;" alt=""></td>
                        <td>Bột hồng trà</td>
                        <td>41.000đ</td>
                        <td><a href="suasanpham.php"><input name="" id="" class="btn" style="width:100%" type="button" value="Thay đổi thông tin"></a></td>
                        <td><input name="" id="" class="btn" style="width:100%" type="button" value="Xóa sản phẩm"></td>
                    </tr>
                    <tr>
                        <th scope="row">11</th>
                        <td><img src="https://bizweb.dktcdn.net/thumb/1024x1024/100/315/482/products/bothongtra.png?v=1529460890553" style="width: 40px;height: 40px;" alt=""></td>
                        <td>Bột hồng trà</td>
                        <td>41.000đ</td>
                        <td><a href="suasanpham.php"><input name="" id="" class="btn" style="width:100%" type="button" value="Thay đổi thông tin"></a></td>
                        <td><input name="" id="" class="btn" style="width:100%" type="button" value="Xóa sản phẩm"></td>
                    </tr>
                    <tr>
                        <th scope="row">12</th>
                        <td><img src="https://bizweb.dktcdn.net/thumb/1024x1024/100/315/482/products/bothongtra.png?v=1529460890553" style="width: 40px;height: 40px;" alt=""></td>
                        <td>Bột hồng trà</td>
                        <td>41.000đ</td>
                        <td><a href="suasanpham.php"><input name="" id="" class="btn" style="width:100%" type="button" value="Thay đổi thông tin"></a></td>
                        <td><input name="" id="" class="btn" style="width:100%" type="button" value="Xóa sản phẩm"></td>
                    </tr>
                    <tr>
                        <th scope="row">13</th>
                        <td><img src="https://bizweb.dktcdn.net/thumb/1024x1024/100/315/482/products/bothongtra.png?v=1529460890553" style="width: 40px;height: 40px;" alt=""></td>
                        <td>Bột hồng trà</td>
                        <td>41.000đ</td>
                        <td><a href="suasanpham.php"><input name="" id="" class="btn" style="width:100%" type="button" value="Thay đổi thông tin"></a></td>
                        <td><input name="" id="" class="btn" style="width:100%" type="button" value="Xóa sản phẩm"></td>
                    </tr>
                    <tr>
                        <th scope="row">14</th>
                        <td><img src="https://bizweb.dktcdn.net/thumb/1024x1024/100/315/482/products/bothongtra.png?v=1529460890553" style="width: 40px;height: 40px;" alt=""></td>
                        <td>Bột hồng trà</td>
                        <td>41.000đ</td>
                        <td><a href="suasanpham.php"><input name="" id="" class="btn" style="width:100%" type="button" value="Thay đổi thông tin"></a></td>
                        <td><input name="" id="" class="btn" style="width:100%" type="button" value="Xóa sản phẩm"></td>
                    </tr>
                    <tr>
                        <th scope="row">15</th>
                        <td><img src="https://bizweb.dktcdn.net/thumb/1024x1024/100/315/482/products/bothongtra.png?v=1529460890553" style="width: 40px;height: 40px;" alt=""></td>
                        <td>Bột hồng trà</td>
                        <td>41.000đ</td>
                        <td><a href="suasanpham.php"><input name="" id="" class="btn" style="width:100%" type="button" value="Thay đổi thông tin"></a></td>
                        <td><input name="" id="" class="btn" style="width:100%" type="button" value="Xóa sản phẩm"></td>
                    </tr>
                    <tr>
                        <th scope="row">16</th>
                        <td><img src="https://bizweb.dktcdn.net/thumb/1024x1024/100/315/482/products/bothongtra.png?v=1529460890553" style="width: 40px;height: 40px;" alt=""></td>
                        <td>Bột hồng trà</td>
                        <td>41.000đ</td>
                        <td><a href="suasanpham.php"><input name="" id="" class="btn" style="width:100%" type="button" value="Thay đổi thông tin"></a></td>
                        <td><input name="" id="" class="btn" style="width:100%" type="button" value="Xóa sản phẩm"></td>
                    </tr>
                    <tr>
                        <th scope="row">17</th>
                        <td><img src="https://bizweb.dktcdn.net/thumb/1024x1024/100/315/482/products/bothongtra.png?v=1529460890553" style="width: 40px;height: 40px;" alt=""></td>
                        <td>Bột hồng trà</td>
                        <td>41.000đ</td>
                        <td><a href="suasanpham.php"><input name="" id="" class="btn" style="width:100%" type="button" value="Thay đổi thông tin"></a></td>
                        <td><input name="" id="" class="btn" style="width:100%" type="button" value="Xóa sản phẩm"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>
@endsection