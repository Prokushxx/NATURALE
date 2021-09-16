@extends('layouts.app2')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}


  <style>
  *{
    padding: 0%;
    margin: 0%;
  } 
  .form{
    text-align:  center;
    margin-top: 5%;
  }
  ::placeholder{
  color: rgb(141, 141, 235);
  }
  p,h4,h2{
    color: rgb(141, 141, 235);
  }

  ::placeholder{
  padding: 10px;
  margin-top: 20px ;
  text-align: left;
  }
  input[type=text]{
    width : 36%;
    padding: 10px 12px;
    margin: 8px 0;
    box-sizing: border-box;
  }
  input[type=email]{
width: 36%;
padding :10px 12px;
margin: 8px 0;
box-sizing: border-box;
  }
  .select{
    width: 36%;
padding :10px 12px;
margin: 8px 0;
box-sizing: border-box;
  }
  input[type=password]{
width: 36%;
padding :10px 12px;
margin: 8px 0;
box-sizing: border-box;
  }
  .right{
    margin-left: 40%;
  }
  h2{
    margin-left: 30%;
    margin-top: 4%;
  }
  .footer{
    position: fixed;
    left: 0%;
    bottom: 0%;
    width: 100%;
    height: 40px;
    background-color: rgb(141, 141, 235);
    text-align: center;
  }
  h4{
    color: cornsilk;
    padding: 10px;
  }
  .line{
    border-left: 2px solid blue;
    height: 78%;
    position: absolute;
    left: 50%;
    margin-left: -3px;
    top: 3%;
  }
  button{
    background-color: blue;
    color: cornsilk;
    padding: 20px 20px;
    margin :8px;
    border: none;
    cursor: pointer;
    width : 36%;
    opacity:0.5;
  }
  button:hover{
    opacity : 1;
  }
.ok{
  color :blue;
}
h4{
  letter-spacing: 4px;
}

body{ 
  background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(../IMG/P.jpg);
  background-size: 49.8% 115%;
  background-repeat:no-repeat ;
  margin-bottom: 100px;
}
.container{
  position: absolute;
  top: 50%;
  left: 25%;
  transform: translate(-50%,-50%);
  width : 50%;
}
.container span{
  display: block;
}
.text1{
  color: orange;
  font-size: 30px;
  font-weight: 700;
  letter-spacing: 4px;
  margin-bottom: 10px;
  position: relative;
  animation: text 6s 7;
  margin-left: 80px;
}

div.text2{
  font-size: 15px;
  color:darkblue;
  opacity: 0.1;
}
  @keyframes text {
    0%{
      color :aliceblue;
      margin-bottom: -20px;
    }
    30%{
      letter-spacing: 12px;
      margin-bottom: -20px;
    }
    85%{
      letter-spacing: 4px;
      margin-bottom: -20px;
    }
  }
  
  </style>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div class="left">
  <div class="container">
    <span class="text1">Join Mother Nature</span>
  </div>
</div>
  <div class= "right">
  <h2>SIGN UP</h2>
  <div class="form">
    <form action="{{ route('register') }}" method = "post">
      @csrf
    <input type="text" name ="fname" placeholder="FIRST NAME*" value="{{ old('fname') }}"><br>
    <span style="color: red;">@error('Fname'){{$message}}@enderror</span><br>
    <input type="text" name ="lname" placeholder="LAST NAME*" value="{{ old('lname') }}"><br>
    <span style="color: red;">@error('Lname'){{$message}}@enderror</span><br>
    <input type="text" name ="uname" placeholder="Username*"><br value="{{ old('uname') }}">
    <span style="color: red;">@error('uname'){{$message}}@enderror</span><br>
    <input type="email" name ="email" placeholder="EMAIL*" value="{{ old('email') }}"><br>
    <span style="color: red;">@error('email'){{$message}}@enderror</span><br>
    <input type="password" name ="pwd" placeholder="PASSWORD*" value="{{ old('pwd') }}"><br>
    <span style="color: red;">@error('pwd'){{$message}}@enderror</span><br>
   <button type="submit" class="done" name = "submit"> {{ __('Register') }} </button> 
  
  </form>
  <a href="login">Already have an account</a>
  </div>
</div>
<div class="line"></div>
<div class="footer">
  <footer>
    <h4><span class="text">KEEIN-NATURALE</span></h4>
  </footer>
</div>
</body>
@endsection