@extends('backend.layouts.app')

@section('content')

<div class="container">

    <div class="row">
        <div class="col-md-12">
            <!-- Fullscreen mode -->
            <div class="card">
                <div class="card-header bg-white header-elements-inline">
                    <h6 class="card-title">Manajemen Product</h6>
                    <div class="header-elements">
                        <div class="list-icons">
                            <a class="list-icons-item" data-action="fullscreen"></a>
                        </div>
                    </div>
                </div>
                
                <div class="card-body">
                    <div class="btn-group">
                        <a href="{{route('product.create')}}" class="btn bg-indigo-400"><i class="icon-plus-circle2 mr-2"></i> New product</a>
                        <button type="button" class="btn bg-indigo-400 dropdown-toggle" data-toggle="dropdown"></button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-header">Export</div>
                            <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to PDF</a>
                            <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to CSV</a>
                            <a href="#" class="dropdown-item"><i class="icon-database4"></i> Import to DB</a>
                        </div>
                    </div>
                </div>
                <div class="table-responsive"> 
                    <table class="table datatable-basic table-striped">
						<thead>
							<tr>
								<th>ID</th>
                                <th>AUTHOR</th>
                                <th>CATEGORY</th>
                                <th>TITLE</th>
                                <th>SEO_TITLE</th>
                                <th>EXCERPT</th>
                                <th>DESC</th>
                                <th>PRICE</th>
                                <th>SKU</th>
                                <th>STOCK</th>
                                <th>IMAGE</th>
                                <th>SLUG</th>
                                <th>META_DESCRIPTION</th>
                                <th>META_KEYWORD</th>
                                <th>STATUS</th>
                                <th>FEATURED</th>
                                <th>SHOW</th>
								<th class="text-center">ACTIONS</th>
							</tr>
						</thead>
						<tbody>
                        @foreach($product as $products)
							<tr>
                                <td>{{$products->id}}</td>
                                <td>{{$products->user->name ?? NULL}}</td>
                                <td>{{$products->category->name ?? NULL}}</td>
                                <td>{{$products->title}}</td>
                                <td>{{$products->seo_title}}</td>
                                <td>{{$products->excerpt}}</td>
                                <td>{{$products->description}}</td>
                                <td>{{$products->price}}</td>
                                <td>{{$products->sku}}</td>
                                <td>{{$products->stock}}</td>
                                <td>{{$products->image}}</td>
                                <td>{{$products->slug}}</td>
                                <td>{{$products->meta_description}}</td>
                                <td>{{$products->meta_keywords}}</td>
                                <td>{{$products->status}}</td>
                                <td>{{$products->featured}}</td>
                                <td><a href="{{route('product.show',$products->uuid)}}">klik</a></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
                        @endforeach
						</tbody>
					</table>
                  </div>

            </div>
            <!-- /fullscreen mode -->
        </div>
    </div>
</div>


@endsection