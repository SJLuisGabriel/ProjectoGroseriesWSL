@extends("layout.groceries")

@section("main_content")

<div class="banner">
    <div class="jumbotron jumbotron-bg text-center rounded-0" style="background-image: url('{{ asset('assets/img/bg-header.jpg') }}');">
        <div class="container">
            <h1 class="pt-5">
                {{ $product->name }}
            </h1>
            <p class="lead">
                Save time and leave the groceries to us.
            </p>
        </div>
    </div>
</div>
<div class="product-detail">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="slider-zoom">
                    <a href="{{ asset('assets/img')}}/{{ $product->image }} " class="cloud-zoom" rel="transparentImage: 'data:image/gif;base64,R0lGODlhAQABAID/AMDAwAAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==', useWrapper: false, showTitle: false, zoomWidth:'500', zoomHeight:'500', adjustY:0, adjustX:10" id="cloudZoom">
                        <img alt="Detail Zoom thumbs image" src="{{ asset('assets/img')}}/{{ $product->image }}" style="width: 100%;">
                    </a>
                </div>
                <div class="slider-thumbnail">
                    <ul class="d-flex flex-wrap p-0 list-unstyled">
                        @foreach ($categories as $cat )
                        @if ($cat->products->isNotEmpty())
                        <li>
                            <a href="{{ asset('assets/img') }}/{{ $cat->image }}" rel="gallerySwitchOnMouseOver: true, popupWin:'{{ asset('assets/img') }}/{{ $cat->image }}', useZoom: 'cloudZoom', smallImage: '{{ asset('assets/img') }}/{{ $cat->image }}'" class="cloud-zoom-gallery">
                                <img itemprop="image" src="{{ asset('assets/img') }}/{{ $cat->image }}" style="width:135px;">
                            </a>
                        </li>
                        @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-sm-6">
                <p>
                    <strong>Overview</strong><br>
                    {{$product->description}}
                </p>
                <div class="row">
                    <div class="col-sm-6">
                        <p>
                            <strong>Price</strong> (/Pack)<br>
                            <span class="price">${{ $product->purchase_price }}</span>
                            <span class="old-price">${{ $product->sale_price }}</span>
                        </p>
                    </div>
                    <div class="col-sm-6 text-right">
                        <p>
                            <span class="stock available">In Stock: {{ $product->quantity }}</span>
                        </p>
                    </div>
                </div>
                <p class="mb-1">
                    <strong>Quantity</strong>
                </p>
                <div class="row">
                    <div class="col-sm-5">
                        <input class="vertical-spin" type="text" data-bts-button-down-class="btn btn-primary" data-bts-button-up-class="btn btn-primary" value="" name="vertical-spin">
                    </div>
                    <div class="col-sm-6"><span class="pt-1 d-inline-block">Pack (250 gram)</span></div>
                </div>

                <button class="mt-3 btn btn-primary btn-lg">
                    <i class="fa fa-shopping-basket"></i> Add to Cart
                </button>
            </div>
        </div>
    </div>
</div> 

<section id="related-product">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="title">Related Products</h2>
                <div class="product-carousel owl-carousel">
                    @foreach ($categoryProducts as $p)
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
                                <img src="{{ asset('assets/img') }}/{{ $p->image }}" alt="Card image 2" class="card-img-top">
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

<div class="contact-wrapper" style="padding: 0 10% 0 10%">
    <h3 class="title font-weight-normal mt-0 text-left">Deja Un Comentario</h3>
    <form method="POST" action="{{ route('comment.store') }}" data-aos="fade-left" data-aos-duration="1200">
        @csrf
        <input type="hidden" name="product_id" value="{{ $product->id }}">
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <input class="form-control" type="text" placeholder="Full Name" name="fullname" value="{{ old('fullname') }}">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <input class="form-control" type="email" placeholder="Email" name="email" value="{{ old('email') }}">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <textarea class="form-control" name="comment" rows="3" placeholder="Comment">{{ old('comment') }}</textarea>
                </div>
            </div>
            <div class="col-lg-12 text-right">
                <button type="submit" class="btn btn-lg btn-primary mb-5">Send</button>
            </div>
        </div>
    </form>
    @if(session()->get('success'))
        <div class="alert alert-success text-center">
            {{ session()->get('success') }}
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>

<div class="contact-wrapper" style="padding: 0 5% 10px 5%">
    <div class="detail-wrapper bg-primary" style="background-color: #ffffffd0 !important">
        <div class="container">
            <h1>
                Reseñas
            </h1>
        </div>
        <div class="comments-container">
        @foreach ($comments as $com)
        <div class="comment-container">
            <h3 class="font-weight-normal mb-3 text-light">
                {{ $com->fullname }}
            </h3>

            <p class="text-light">
                {{ $com->comment }}
            </p>

            <p class="text-light">
                <i class="fas fa-envelope"></i> {{ $com->email }}
            </p>
        </div>
        @endforeach
        </div>
    </div>
    </section>
</div>

@endsection