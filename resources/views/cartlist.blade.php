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

</style>
@include('sidebar2')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    
    <div class="d-sm-grid container">
    {{-- <h5><a href="#">Filter</a></h5> --}}
    <h4 class="title"> Products ordered</h4>
    <div class="row">
        @foreach ($products as $item)
            <div class="col-4">
                <div class="container-sm">
                    <a href="detail/{{ $item->id }}">
                        <img class="detail-img" src="{{ asset('storage/images/' . $item->name) }}" alt="Thats it">
                        <div>
                            <h2>{{ $item->name }}</h2>
                            <h3>${{ $item->price }}</h3>
                    </a>
                </div>
                <div class="col-4">
                    <a href="/removecart/{{ $item->cart_id }}" class="btn btn-warning">Remove from Cart</a>
                </div>
            </div>
    </div>
    @endforeach
</div>
<a href="/ordernow" class="btn btn-success">Order Now</a>
</div>