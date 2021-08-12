@extends('frontend.layouts.app')

@section('content')


<section class="section-content padding-y">

    <div class="container">
        <form action="{{route('checkout.store')}}" method="post">
        @CSRF
        <div class="row">
            <div class="col-md-8">
                




            <div id="accordion">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <span class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Data</span>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body p-5">

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="" class="custom-font">Email</label>
                                    <input type="text" class="form-control form-custom" name="customer_name" placeholder="email">
                                </div>
                                <div class="col-md-6">
                                    <label for="" class="custom-font">Nama</label>
                                    <input type="text" class="form-control form-custom" name="customer_email" placeholder="nama penerima pesanan">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <label for="" class="custom-font">Alamat</label>
                                    <input type="text" class="form-control form-custom" name="customer_address" placeholder="alamat">
                                </div>
                                <div class="col-md-6">
                                    <label for="" class="custom-font">Kota</label>
                                    <input type="text" class="form-control form-custom" name="customer_city" placeholder="kota">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <label for="" class="custom-font">Provinsi</label>
                                    <input type="text" class="form-control form-custom" name="customer_province" placeholder="provinsi">
                                </div>
                                <div class="col-md-6">
                                    <label for="" class="custom-font">Kode pos</label>
                                    <input type="text" class="form-control form-custom" name="customer_postal_code" placeholder="kode pos">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <label for="" class="custom-font">Nomor handphone</label>
                                    <input type="text" class="form-control form-custom" name="customer_phone" placeholder="nomor handphone">
                                </div>
                                <div class="col-md-6">
                                    <label for="" class="custom-font">Nomor handphone ( kedua )</label>
                                    <input type="text" class="form-control form-custom" name="customer_phone2" placeholder=" nomor handphone (optional)">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <span class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Shipping</span>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body p-5">
                            Shipping Method
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <span class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Pembayaran</span>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
            </div>





            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header"><b>LIST ITEM</b></div>
                    <div class="card-body">
                        <table class="table table-borderless table-shopping-cart">
                            <thead class="text-muted">
                                <tr class="small text-uppercase">
                                    <th scope="col">Product</th>
                                    <th scope="col" width="120">Quantity</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach(Cart::content() as $item)
                                <tr>
                                    <td>
                                        <figure class="itemside">
                                            <div class="aside"><img src="images/items/1.jpg" class="img-sm"></div>
                                            <figcaption class="info">
                                                <a href="" class="title text-dark">{{$item->name}}</a>
                                                <p class="text-muted small">Size: XL, Color: blue, <br> Brand: Gucci</p>
                                            </figcaption>
                                        </figure>
                                    </td>
                                    <td>1</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        <dl class="dlist-align">
                            <dt>Total price:</dt>
                            <dd class="text-right">Rp. {{Cart::subtotal()}}</dd>
                        </dl>
                            <dl class="dlist-align">
                            <dt>Tax:</dt>
                            <dd class="text-right">Rp. {{Cart::tax()}}</dd>
                        </dl>
                        <dl class="dlist-align">
                            <dt>Total:</dt>
                            <dd class="text-right "><strong>Rp. {{Cart::total()}}</strong></dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div> 
</section>

@endsection