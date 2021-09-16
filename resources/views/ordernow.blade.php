<!DOCTYPE html>
<html lang="en">
<style>
  *{
    margin-left: 20px;
    margin-top: 5px;
  }
</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <div class="custom-product">
      
        <div class="col-sm-10">
            <table class="table">
                <tbody>
                    <tr>
                        <td>Amount</td>
                        <td>$ {{ $total }}</td>
                    </tr>
                    <tr>
                        <td>Tax</td>
                        <td>$ 10</td>
                    </tr>
                    <tr>
                        <td>Total Amount</td>
                        <td>${{ $total + 10 }}</td>
                    </tr>
                </tbody>
            </table>
            <div>
                <form action="/orderplace" method="POST">
                  @csrf
                    <div class="form-group">
                        <textarea type="text" class="form-control" placeholder="Enter Address" name="address"></textarea>
            </div>
            <div class="form-group">
              <label for="pwd">Payment Method</label><br><br>
              <input type="radio" name="payment" value="Onlnine Payment"><span>Online Payment</span><br><br>
              <input type="radio" name="payment" value="EMI Payment"><span>EMI Payment</span><br><br>
              <input type="radio" name="payment" value="Payment on Delivery"><span> Payment on Delivery</span><br><br>
            </div>
            <button type="submit" class="btn btn-success">Order Now</button>
          </form>
         <a href="/cartlist" class="btn btn-danger">Go back</a>
        </div>
      </div>
    </div>
</head>
<body>
</body>
</html>
