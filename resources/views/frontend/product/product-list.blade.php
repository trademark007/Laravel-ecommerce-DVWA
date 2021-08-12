@extends('frontend.layouts.app')

@section('content')
<div class="container">
    <section class="section-main padding-y">
    
        <!-- ============================  FILTER TOP  ================================= -->
        <div class="card mb-3">
            <div class="card-body">
        <div class="row">
            <div class="col-md-2"> Your are here: </div> <!-- col.// -->
            <nav class="col-md-8"> 
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Category name</a></li>
                <li class="breadcrumb-item"><a href="#">Sub category</a></li>
                <li class="breadcrumb-item active" aria-current="page">Items</li>
            </ol>  
            </nav> <!-- col.// -->
        </div> <!-- row.// -->
        <hr>
        <div class="row">
            <div class="col-md-2">Filter by</div> <!-- col.// -->
            <div class="col-md-10"> 
                <ul class="list-inline">
                    <li class="list-inline-item mr-3"><a href="#">Color</a></li>
                    <li class="list-inline-item mr-3"><a href="#">Size</a></li>
                    <li class="list-inline-item mr-3">
                        <div class="form-inline">
                            <label class="mr-2">Price</label>
                            <input class="form-control form-control-sm" placeholder="Min" type="number">
                                <span class="px-2"> - </span>
                            <input class="form-control form-control-sm mr-2" placeholder="Max" type="number">
                            <select name="" id="" class="form-control p-2">
                                <option value="">-- select category --</option>
                                @foreach($category as $categories)
                                    <option value="">{{$categories->name}}</option>
                                @endforeach
                            </select>
                          
                            <button type="submit" class="btn btn-sm btn-light ml-2">Ok</button>
                        </div>
                    </li>
                </ul>
            </div> <!-- col.// -->
        </div> <!-- row.// -->
        <hr>
        <div class="row">
            <div class="col-md-2">Category</div> <!-- col.// -->
            <div class="col-md-10"> 
                <ul class="list-inline">
                    <li class="list-inline-item mr-3">
                        <div class="form-inline">
                            
                        </div>
                    </li>
                </ul>
            </div> <!-- col.// -->
        </div> <!-- row.// -->

            </div> <!-- card-body .// -->
        </div> <!-- card.// -->
        <!-- ============================ FILTER TOP END.// ================================= -->

        <header class="mb-3">
                <div class="form-inline">
                    <strong class="mr-md-auto">32 Items found </strong>
                    <select class="mr-2 form-control">
                        <option>Latest items</option>
                        <option>Trending</option>
                        <option>Most Popular</option>
                        <option>Cheapest</option>
                    </select>
                    <div class="btn-group">
                        <a href="page-listing-grid.html" class="btn btn-light active" data-toggle="tooltip" title="List view"> 
                            <i class="fa fa-bars"></i></a>
                        <a href="page-listing-large.html" class="btn btn-light" data-toggle="tooltip" title="Grid view"> 
                            <i class="fa fa-th"></i></a>
                    </div>
                </div>
        </header><!-- sect-heading -->

        <div class="row">
        @foreach($product as $items)    
            <div class="col-md-3">
                <figure class="card card-product-grid">
                    <div class="img-wrap"> 
                        <span class="badge badge-danger"> NEW </span>
                        <img src="images/items/1.jpg">
                    </div> <!-- img-wrap.// -->
                    <figcaption class="info-wrap">
                            <a href="{{route('product.show',$items->uuid)}}" class="title mb-2">{{$items->name}}</a>
                            <div class="price-wrap">
                                <span class="price">Rp. {{$items->price}}</span> 
                                <!-- <small class="text-muted">/per pcs</small> -->
                            </div> <!-- price-wrap.// -->
                            
                            <p class="mb-2"> 1 Pieces  <small class="text-muted">(Min Order)</small></p>
                            
                            <p class="text-muted ">Guangzhou Yichuang Electronic Co</p>
                        
                            <hr>
                            
                            <p class="mb-3">
                                <span class="tag"> 60 reviews </span>
                            </p>
                            
                    </figcaption>
                </figure>
            </div> <!-- col.// -->
        @endforeach

        </div> <!-- row end.// -->


        <nav class="mb-4" aria-label="Page navigation sample">
        <ul class="pagination">
            <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">4</a></li>
            <li class="page-item"><a class="page-link" href="#">5</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
        </nav>

    </div> <!-- container .//  -->
</section>
        <!-- ========================= SECTION CONTENT END// ========================= -->



        <!-- ========================= SECTION SUBSCRIBE  ========================= -->
        <section class="padding-y-lg bg-light border-top">
            <div class="container">

                <p class="pb-2 text-center">Delivering the latest product trends and industry news straight to your inbox</p>

                <div class="row justify-content-md-center">
                    <div class="col-lg-4 col-sm-6">
                        <form class="form-row">
                                <div class="col-8">
                                    <input class="form-control" placeholder="Your Email" type="email">
                                </div> <!-- col.// -->
                                    <div class="col-4">
                                    <button type="submit" class="btn btn-block btn-warning"> <i class="fa fa-envelope"></i> Subscribe </button>
                                </div> <!-- col.// -->
                        </form>
                        <small class="form-text">We’ll never share your email address with a third-party. </small>
                    </div> <!-- col-md-6.// -->
                </div>
            

            </div>
        </section>
@endsection