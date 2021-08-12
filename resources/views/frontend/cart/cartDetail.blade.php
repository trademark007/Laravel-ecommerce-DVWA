@extends('frontend.layouts.app')

@section('content')
<!-- ========================= SECTION CONTENT ========================= -->
<div class="container">

<section class="section-content padding-y">

@if(Cart::count() > 0)

<div class="row">
	<main class="col-md-9">


<div class="card p-3">

<table class="table table-borderless table-shopping-cart">
  
	<thead class="text-muted">
        <tr class="small text-uppercase">
        <th scope="col">Product</th>
        <th scope="col" width="120">Quantity</th>
        <th scope="col" width="120">Price</th>
        <th scope="col" class="text-right" width="200"> </th>
        </tr>
    </thead>
    <tbody>

    @foreach(Cart::content() as $item)
        <tr>
            <td>
                <figure class="itemside">
                    <div class="aside"><img src="{{asset('public/images/posts/' . $item->model->images)}}" class="img-sm"></div>
                    <figcaption class="info">
                        <a href="{{route('product.show',$item->model->uuid)}}" class="title text-dark">{{$item->name}}</a>
                        <p class="text-muted small">Size: XL, Color: blue, <br> Brand: Gucci</p>
                    </figcaption>
                </figure>
            </td>
            <td> 
                <select class="form-control">
                    <option>1</option>
                    <option>2</option>	
                    <option>3</option>	
                    <option>4</option>	
                </select> 
            </td>
            <td> 
                <div class="price-wrap"> 
                    <var class="price">@money($item->price)</var> 
                    <!-- <small class="text-muted"> $315.20 each </small>  -->
                </div> <!-- price-wrap .// -->
            </td>
            <td class="text-right"> 
				<div class="row">
					<div class="col-md-6">
						<form action="{{route('cart.destroy',$item->rowId)}}" method="post">
							@CSRF
							@method('DELETE')
							<button type="submit" class="btn btn-light"><i class="fa fa-trash"></i></button>
						</form>
					</div>
					<div class="col-md-6">

						<form action="{{route('cart.switchToSaveForLater',$item->rowId)}}" method="post">
							@CSRF
							<button type="submit" class="btn btn-light"><i class="fa fa-heart"></i></button>
						</form>

					</div>
				</div>
            </td>
        </tr>
    @endforeach


    </tbody>
</table>

<div class="card-body border-top">
	<a href="{{route('checkout.checkout')}}" class="btn btn-primary float-md-right"> Lakukan Pembelian <i class="fa fa-chevron-right"></i> </a>
	<a href="#" class="btn btn-light"> <i class="fa fa-chevron-left"></i> Continue shopping </a>
</div>	
</div> <!-- card.// -->

<div class="alert alert-success mt-3">
	<p class="icontext"><i class="icon text-success fa fa-truck"></i> Free Delivery within 1-2 weeks</p>
</div>

	</main> <!-- col.// -->
	<aside class="col-md-3">
		<div class="card mb-3">
			<div class="card-body">
			<form>
				<div class="form-group">
					<label>Have coupon?</label>
					<div class="input-group">
						<input type="text" class="form-control" name="" placeholder="Coupon code">
						<span class="input-group-append"> 
							<button class="btn btn-primary">Apply</button>
						</span>
					</div>
				</div>
			</form>
			</div> <!-- card-body.// -->
		</div>  <!-- card .// -->
		<div class="card">
			<div class="card-body">
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
					<hr>
					<p class="text-center mb-3">
						<img src="{{asset('images/misc/payments.png')}}" height="26">
					</p>
					
			</div> <!-- card-body.// -->
		</div>  <!-- card .// -->
	</aside> <!-- col.// -->
</div>

@else 



<div class="row">
	<main class="col-md-9">


<div class="card">
	<div class="container">
		<div class="row pd-5 mt-3 justify-content-center text-center">
			<div class="col-md-12">
			<h1>KOSONG</h1>
			</div>
		</div>
	</div>

	<div class="card-body border-top">
		<!-- <a href="#" class="btn btn-primary float-md-right"> Make Purchase <i class="fa fa-chevron-right"></i> </a> -->
		<a href="{{route('welcome')}}" class="btn btn-light"> <i class="fa fa-chevron-left"></i> Continue shopping </a>
	</div>	
</div> <!-- card.// -->

<div class="alert alert-success mt-3">
	<p class="icontext"><i class="icon text-success fa fa-truck"></i> Free Delivery within 1-2 weeks</p>
</div>

	</main> <!-- col.// -->
	<aside class="col-md-3">
		<div class="card mb-3">
			<div class="card-body ">
			<form>
				<div class="form-group">
					<label>Have coupon?</label>
					<div class="input-group">
						<input type="text" class="form-control"  name="" placeholder="Coupon code" disabled>
						<span class="input-group-append"> 
							<button class="btn btn-primary" disabled>Apply</button>
						</span>
					</div>
				</div>
			</form>
			</div> <!-- card-body.// -->
		</div>  <!-- card .// -->
		<div class="card">
			<div class="card-body">
				<dl class="dlist-align">
					<dt>Total price:</dt>
					<dd class="text-right">Rp. 0</dd>
				</dl>
				<dl class="dlist-align">
					<dt>Discount:</dt>
					<dd class="text-right">Rp. 0</dd>
				</dl>
				<dl class="dlist-align">
					<dt>Total:</dt>
					<dd class="text-right  h5"><strong>Rp. 0</strong></dd>
				</dl>
				<hr>
				<p class="text-center mb-3">
					<img src="{{asset('images/misc/payments.png')}}" height="26">
				</p>
			</div> <!-- card-body.// -->
		</div>  <!-- card .// -->
	</aside> <!-- col.// -->
</div>


@endif


<div class="row">
	<main class="col-md-9">
		<div class="card">
			<div class="card-body">
			@if(Cart::instance('saveForLater')->count() > 0)

			<table class="table table-borderless table-shopping-cart">
				<thead class="text-muted">
					<tr class="small text-uppercase">
						<th scope="col">Product</th>
						<th scope="col" width="120">Quantity</th>
						<th scope="col" width="120">Price</th>
						<th scope="col" class="text-right" width="200"> </th>
					</tr>
				</thead>
				<tbody>
				@foreach(Cart::instance('saveForLater')->content() as $item)

					<tr>
						<td>
							<figure class="itemside">
								<div class="aside"><img src="images/items/1.jpg" class="img-sm"></div>
								<figcaption class="info">
									<a href="{{route('product.show',$item->model->uuid)}}" class="title text-dark">{{$item->model->name}}</a>
									<p class="text-muted small">Size: XL, Color: blue, <br> Brand: Gucci</p>
								</figcaption>
							</figure>
						</td>
						<td>
							<select class="form-control">
								<option>1</option>
								<option>2</option>	
								<option>3</option>	
								<option>4</option>	
							</select> 
						</td>
						<td>{{$item->model->price}}</td>
						<td class="text-right"> 
							<div class="row">
								<div class="col-md-6">
									<form action="{{route('saveForLater.destroy',$item->rowId)}}" method="post">
										@CSRF
										@method('DELETE')
										<button type="submit" class="btn btn-light"><i class="fa fa-trash"></i></button>
									</form>
								</div>
								<div class="col-md-6">
									<form action="{{route('saveForLater.switchToCart',$item->rowId)}}" method="post">
										@CSRF
										
										<button type="submit" class="btn btn-light"><i class="fa fa-heart"></i></button>
									</form>
								</div>
							</div>
						</td>
					</tr>
				
				@endforeach
				</tbody>


			</table>
			@else 
				<p>no item save for later!</p>
			@endif
			</div>
		</div>
	</main>
</div>


</section>

</div> <!-- container .//  -->
<!-- ========================= SECTION CONTENT END// ========================= -->
@endsection