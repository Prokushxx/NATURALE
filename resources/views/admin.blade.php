@include('sidebar')
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<style>
    .small-container {
    max-width: 1080px;
    margin: auto;
    padding-left: 25px;
    padding-right: 25px;
  }
  .w-5{
    display: none;
  }
/* 
  img{
    max-width: 200px;
    max-width: 300px;
  } */
  .col-4 {
    flex-basis: 30%;
    padding: 10px;
    min-width: 200px;
    margin-bottom: 50px;
    transition: transform 0.5s;
  }

  .col-4 img {
    width: 100%;
  }

  .title {
    text-align: center;
    margin: 0 auto 80px;
    position: relative;
    line-height: 60px;
    color: #555;
  }

  .title::after {
    content: '';
    background: #32A852;
    width: 80px;
    height: 5px;
    border-radius: 5px;
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translate(-50%);
  }

  .row {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    justify-content: space-around;
  }
</style>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>

<div class="d-sm-grid container">
  <h2 class="title" id="Fprod">Featured Products</h2>    
  <div class="row">
    @foreach ($photos as $photo)
    <div class="col-4"> 
     <div class="container-sm">
      <img src="{{ asset('storage/images/'.$photo->name)}}" alt="image">          
      <div class="rating">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-o"></i>
      </div>
      <h4>{{$photo->name}}</h4>
      <p>${{ $photo->price }}</p>
    </div>
      <form action="{{ route('products.destroy',$photo->id) }}" method="post" class="form-control row d-flex justify-content-center">           
        @csrf
      @method('DELETE')
        <input type="submit" value="DELETE" class="btn btn-primary">
      </form>
    </div>
    @endforeach
  </div>
  <h2>ADD PRODUCT</h2> 
  <form action="" method="post" enctype="multipart/form-data">
    @csrf 
    <input type="text" name="pname" placeholder="ENTER NAME">
    <input type="text" name="price" placeholder="ENTER PRICE">
    <input type="file" name="pic">
    <input type="submit" name="upload" id="upload">
  </form>
</div>
</div>


