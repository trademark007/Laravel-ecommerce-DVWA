@extends('frontend.layouts.app')

@section('content')

<section class="section-pagetop bg-light">
	<div class="container">
        <h2 class="title-page">Selamat datang, {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</h2>
	</div> 
</section>

<section class="section-content bg-white padding-y">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="icon-user"></i> Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i class="icon-transmission"></i> History</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><i class="icon-phone"></i> Setting</a>
                </li>
            </ul>
            <div class="tab-content p-3" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="row">
                        Tidak ada pesanan, pesan sekarang juga!
                    </div>
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    
                </div>
            </div>

            </div>
        </div>
    </div>
</section>
@endsection