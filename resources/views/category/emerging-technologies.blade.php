@extends('layouts.app')

@section('content')
    <section class="flat-row">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="title-section">
                        <h1 class="title">Emerging Technologies</h1>
                        <p class="sub-title"></p>
                    </div>
                </div>
                <div class="col-md-5 padding-top-40">
                    <img src="{{asset('images/categories/emerging-technologies.png')}}" class="center-block">
                </div>
            </div>
        </div>
    </section>
    <section class="flat-row" style="background: #0B4869">
        <div class="container">
            <div class="row">
                <div class="title-section text-center">
                    <h1 class="title" style="color:white;">Emerging Technologies Jury 2018</h1>
                </div>
                <div class="col-md-3 wrap-teammember">
                    <div class="teammember">
                        <div class="avatar">
                            <img src="{{asset('images/suleman.jpeg')}}" width="100%">
                            <div class="info-overlay">
                                <div class="flat-socials">
                                    <a href="#"><i class="fa fa-facebook"></i><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="content text-center" style="height: 150px;">
                            <h5 class="name">Suleman Shahid</h5>
                            <p class="position">
                                Founder UX-Pakistan, Assistant Professor at LUMS and Tilburg University, the Netherlands
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 wrap-teammember">
                    <div class="teammember">
                        <div class="avatar">
                            <img src="{{asset('images/jury/maheen_sohail.jpg')}}" width="100%">
                            <div class="info-overlay">
                                <div class="flat-socials">
                                    <a href="#"><i class="fa fa-facebook"></i><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="content text-center" style="height: 150px;">
                            <h5 class="name">Maheen Sohail</h5>
                            <p class="position">
                                VR Product Designer at Facebook
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="divider"></div>
            <div class="title-section text-center">
                <h1 class="title" style="color:white;">More Jury Members Coming Soon</h1>
            </div>
        </div>
    </section>
@endsection