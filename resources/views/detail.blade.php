<!DOCTYPE html>
<html lang="en">
  <?php use App\Http\Controllers\Products;
  $total = 0;
  if(session()->has('user')){
    $total=Products::cartItem();
  }

?>
<style>
    .small-container {
        max-width: 1080px;
        margin: auto;
        padding-left: 25px;
        padding-right: 25px;
    }

    .row {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        justify-content: space-around;
    }

    .col-4 {
        flex-basis: 30%;
        padding: 10px;
        min-width: 200px;
        margin-bottom: 50px;
        transition: transform 0.5s;
    }

    .detail-img {
        height: 200px;
        margin-top: 30px;
    }

.nav{
  float: right;
  margin-right: 80px;
}
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Document</title>
</head>
@include('sidebar2')
<body>
  <div>
  <ul class="nav navbar-nav">
    <li><a href="/cartlist">Cart({{ $total }})</a></li>
  </ul>
</div>
    <section class="pic">
        <div class="container">
            <div class="row">
                @foreach ($photo as $photos)
                    <div class="col-sm-6">
                        <img class="detail-img" src="{{ asset('storage/images/' . $photos->name) }}" alt="image">
                    </div>

                    <div class="col-sm-6">
                        <h1>{{ $photos->name }}</h1>
                        <h3>${{ $photos->price }}</h3>
                        <form action="/add_to_cart" method="POST">
                          @csrf
                          <input type="hidden" name="product_id" value="{{ $photos->id }}">
                        <button class="btn btn-primary">Add to Cart</button>
                        <br><br>                
                        </form>
                      <a href="/ordernow"> <button class="btn btn-success">Buy Now</button></a> 
                    </div>
            </div>

        </div>
        @endforeach
    </section>
</body>

</html>
