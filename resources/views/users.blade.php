
<!DOCTYPE html>
<html lang="en">
<style>
   table {
    position: absolute;
    top: 40%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 60%;
  }

  th,
  tr,
  td {
    border: 1px solid #3498db;
    padding: 10px 10px;
    color: #3498db;
  }

  td {
    color: white;
  }
  body{
    background-attachment: fixed;
    height: 100vh;
    background-size: 100% 100%;
    background-image: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.5)), url(../IMG/P.jpg);
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
<body>
 @include('sidebar')
    <table>
        <thead>
            <tr>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">User Type</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->Username }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->User_type }}</td>
                    <form action="{{ route('user.destroy', $user->Username) }}" class="btn btn-primary" method="post">
                      @csrf
              @method('DELETE')
             <td> <input type="submit" value="REMOVE" class="btn btn-primary"></td>
            </form>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
