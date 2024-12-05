@extends('master')
@section('om')

<!-- Carousel -->
<div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://picsum.photos/id/231/200/300" class="d-block w-100" alt="Image 1" style="object-fit: cover; height: 50vh;">
        </div>
        <div class="carousel-item">
            <img src="https://picsum.photos/id/232/200/300" class="d-block w-100" alt="Image 2" style="object-fit: cover; height: 50vh;">
        </div>
        <div class="carousel-item">
            <img src="https://picsum.photos/id/233/200/300" class="d-block w-100" alt="Image 3" style="object-fit: cover; height: 50vh;">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- Card Group Section -->
<div class="container my-5">
    <div class="row">
        <!-- Card 1 -->
        <div class="col-md-4 col-sm-12 mb-4">
            <div class="card h-100">
                <img src="https://picsum.photos/id/234/100/200" class="card-img-top" alt="Card Image 1" style="object-fit: cover; height: 200px;">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-4 col-sm-12 mb-4">
            <div class="card h-100">
                <img src="https://picsum.photos/id/235/100/200" class="card-img-top" alt="Card Image 2" style="object-fit: cover; height: 200px;">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-4 col-sm-12 mb-4">
            <div class="card h-100">
                <img src="https://picsum.photos/id/236/100/200" class="card-img-top" alt="Card Image 3" style="object-fit: cover; height: 200px;">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
