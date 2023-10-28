@extends('master')
@section('page_title','Home-ToDo')
@section('missing_section')
 <div id="carouselExampleCaptions" class="carousel slide mb-3" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="img-fluid w-100 h-50 overflow-hidden"
                    src="https://cdn.pixabay.com/photo/2016/11/14/05/15/academic-1822682_960_720.jpg"
                    class="d-block w-100" alt="...">
                <div class="carousel-caption d-block">
                    <h5>Chittagong Govt.Collage</h5>

                </div>
            </div>
            <div class="carousel-item">
                <img class="img-fluid w-100 h-50 overflow-hidden"
                    src="https://cdn.pixabay.com/photo/2017/02/05/00/08/graduation-2038864_960_720.jpg"
                    class="d-block w-100" alt="...">
                <div class="carousel-caption d-block">
                    <h5>Chittagong Govt.Collage</h5>

                </div>
            </div>
            <div class="carousel-item">
                <img class="img-fluid w-100 h-50 overflow-hidden"
                    src="https://cdn.pixabay.com/photo/2017/09/08/00/37/friend-2727305_960_720.jpg"
                    class="d-block w-100" alt="...">
                <div class="carousel-caption d-block">
                    <h5>Chittagong Govt.Collage</h5>

                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


@endsection
