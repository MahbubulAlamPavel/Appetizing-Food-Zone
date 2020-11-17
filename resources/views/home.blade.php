
@extends('layout')

@section('content')
<section class="homeslider">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">

                <div class="search-sec">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <div class="transparent-sec">
                                <div class="container heading">
                                    <h2 class="display-6 text-center text-white">Appetizing Food Zone</h2>
                                    <p class="lead text-center text-white font-italic">Healthy Home Made Food</p>
                                    <form action="#" method="post" novalidate="novalidate">

                                        <div class="row">
                                            <div class="input-group col-md-2"></div>
                                            <div class="input-group mb-3 col-md-8">
                                                <input type="text" class="form-control"
                                                    placeholder="Search Your Favourite One">
                                                <div class="input-group-append"> <button class="btn btn-warning"
                                                        type="button" id="button-addon2"><i
                                                            class="fa fa-search"></i></button> </div>
                                            </div>
                                            <div class="input-group col-md-2"></div>
                                        </div>


                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </div>

                <div class="carousel-item active" style="background-image: url('../image/cake.jpg')">

                </div>

                <div class="carousel-item" style="background-image: url('../image/pizza.jpg')">

                </div>

                <div class="carousel-item" style="background-image: url('../image/burger.jpg')">

                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>
    @endsection