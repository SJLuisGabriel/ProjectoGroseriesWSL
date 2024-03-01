@extends("layout.groceries")

@section("main_content")

<div class="banner">
    <div class="jumbotron jumbotron-bg text-center rounded-0" style="background-image: url('assets/img/bg-header.jpg');">
        <div class="container">
            <h1 class="pt-5">
                Admin Products
            </h1>
            <p class="lead">
                Products Administrador
            </p>
        </div>
    </div>
</div>

<section class="pb-5" style="margin-top: -5%">
    <div class="mb-0">
        <div class="row justify-content-center custom-scrollbar">
            <select style="width: 15%" id="categorySelect" class="js-example-basic-single justify-content-center miSelect" name="category"></select>
        </div>
    </div>
    <div class="contact1 mb-5">
        <div class="container">                
            {{-- <button id="btnLoadProducts" class="btn btn-primary">Load Products</button> --}}
            <div class="row mt-3 justify-content-center">
                
                {{-- <div class="col-6">
                    <table id="tblProducts" class="table is-striped hover" >
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Sale Price</th>
                                <th>Quantity</th>
                                <th>Category</th>
                            </tr>
                        </thead>
                        <tbody></tbody> 
                    </table>
                </div> --}}
                <div class="col-12">
                    <table id="tblProductsTD" class="table is-striped hove table table-striped" >
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Sale Price</th>
                                <th>Quantity</th>
                                <th>Category</th>
                            </tr>
                        </thead>
                        <tbody></tbody> 
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection