@extends("layout.groceries")

@section("main_content")
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

<div class="banner">
    <div class="jumbotron jumbotron-bg text-center rounded-0" style="background-image: url('assets/img/bg-header.jpg');">
        <div class="container">
            <h1 class="pt-5">
                Shopping Page
            </h1>
            <p class="lead">
                Save time and leave the groceries to us.
            </p>
            <button onclick="goToTop()" style="border-radius: 10px; position: fixed; z-index: 9999; bottom: 20px; left: 93%;  background-color: #E91E63; color: #030303;">
                <i class='bx bx-chevron-up-circle' style="font-size: 40px;"></i></button>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="shop-categories owl-carousel mt-5">
                @foreach ($categories as $cat)
                <div class="item">
                    <a href="#{{ $cat->name }}">
                        <div class="media d-flex align-items-center justify-content-center">
                            <span class="d-flex mr-2"><i class="sb-bistro-{{ $cat->icon }}"></i></span>
                            <div class="media-body">
                                <h5>{{ $cat->name }}</h5>
                                <p>{{ $cat->description }}</p>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<section id="most-wanted">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="title">Most Wanted</h2>
                <div class="product-carousel owl-carousel">
                    @foreach ($product as $p)
                        <div class="item">
                            <div class="card card-product">
                                <div class="card-ribbon">
                                    <div class="card-ribbon-container right">
                                        <span class="ribbon ribbon-primary">SPECIAL</span>
                                    </div>
                                </div>
                                <div class="card-badge">
                                    <div class="card-badge-container left">
                                        <span class="badge badge-default">
                                            Until 2018
                                        </span>
                                        <span class="badge badge-primary">
                                            20% OFF
                                        </span>
                                    </div>
                                    <img src="assets/img/{{ $p->image }}" alt="Card image 2" class="card-img-top">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="{{ route('detailproduct', ['id' => $p->id]) }}">{{ $p->name }}</a>
                                    </h4>
                                    <div class="card-price">
                                        <span class="discount">${{ $p->purchase_price }}</span>
                                        <span class="reguler">${{ $p->sale_price }}</span>
                                    </div>
                                    <a href="{{ route('detailproduct', ['id' => $p->id]) }}" class="btn btn-block btn-primary">
                                        Add to Cart
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

@foreach ($categories as $cat)
@if ($cat->products->isNotEmpty())
<section id="{{ $cat->name }}" class="gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="title">{{ $cat->name }}</h2>
                <div class="product-carousel owl-carousel">
                    @foreach ($cat->products as $products)
                    <div class="item">
                        <div class="card card-product">
                            <div class="card-ribbon">
                                <div class="card-ribbon-container right">
                                    <span class="ribbon ribbon-primary">SPECIAL</span>
                                </div>
                            </div>
                            <div class="card-badge">
                                <div class="card-badge-container left">
                                    <span class="badge badge-default">
                                        Until 2018
                                    </span>
                                    <span class="badge badge-primary">
                                        20% OFF
                                    </span>
                                </div>
                                <img src="assets/img/{{ $products->image }}" alt="Card image 2" class="card-img-top">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="{{ route('detailproduct', ['id' => $products->id]) }}">{{ $products->name }}</a>
                                </h4>
                                <div class="card-price">
                                    <span class="discount">${{ $products->purchase_price }}</span>
                                    <span class="reguler">${{ $products->sale_price }}</span>
                                </div>
                                <a href="{{ route('detailproduct', ['id' => $products->id]) }}" class="btn btn-block btn-primary">
                                    Add to Cart
                                </a>
                            </div>
                        </div>
                    </div>                        
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</section>
@endif
@endforeach

<script>
    function goToTop() {
        var currentPosition = document.documentElement.scrollTop || document.body.scrollTop;
        var targetPosition = 0;
        var distance = targetPosition - currentPosition;
        var duration = 1100; 
        var startTime = null;        
        function animation(currentTime) {
            if (startTime === null) startTime = currentTime;
            var timeElapsed = currentTime - startTime;
            var scrollAmount = easeInOutQuad(timeElapsed, currentPosition, distance, duration);
            document.documentElement.scrollTop = scrollAmount;
            document.body.scrollTop = scrollAmount;
            if (timeElapsed < duration) requestAnimationFrame(animation);
        }

        function easeInOutQuad(t, b, c, d) {
            t /= d / 2;
            if (t < 1) return c / 2 * t * t + b;
            t--;
            return -c / 2 * (t * (t - 2) - 1) + b;
        }

        requestAnimationFrame(animation);
    }
</script>


@endsection