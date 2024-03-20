<!DOCTYPE html>
<html>

<head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type" />
    <meta charset="UTF-8" />
    <title>Featured Products</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    @vite('resources/js/app.js')
</head>

<body class="bg-dark">
    <div class="container text-white">
        {{-- <h1 class="my-5">Featured products project</h1>
      <div class="row">
        @foreach ($featured_products as $product)
        <div class="col">
            <div class="card">
              <div class="card-header">
                <h2 class="card-title">
                  {{$product->category->label}}</h2>
              </div>
              <div class="card-body">
                <p>{{$product->price}}</p>
                <p> {{$product->name}}</p>
                <p>{{$product->description}}</p>
              </div>
            </div>
        @endforeach --}}

        <h1 class="text-center py-3">Featured Products</h1>
        <div class="container">
            <div class="row row-cols-5 justify-content-between g-5">
                @foreach ($featured_products as $product)
                    <div class="col pb-4">
                        <div class="d-flex flex-column align-items-center justify-content-between h-100">
                            <h4 style="color: {{ $product->category->color }}">{{ $product->category->label }}</h4>
                            <h1 class="card-price d-block fs-1">$ {{ $product->price }}</h1>
                            <h6>{{ $product->name }}</h6>
                            <p class="text-center">{{ $product->description }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</body>

</html>
