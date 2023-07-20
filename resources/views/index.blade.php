


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <title>Laravel_iNote</title>
    
  </head>
  <body>
  <nav class="navbar navbar-expand-lg text-light navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="">iNote</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#">Contect us</a>
        </li>
        <li class="nav-item">
          <?php
          $user=Auth::user();
          ?>
 
          
        
        </li>
        
          </ul>
        
        
      </ul>
      <p class="d-flex align-items-center"> Welcome {{$user->email}}</p>
      <form class="d-flex">
     
       
     <a href="{{route('logout')}}" class="btn btn-success mx-2">Logout</a> 
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

      
       @if(session('alert'))
         <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!!!....</strong> your  Note successfully addded
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
       @endif

       @if(session('error'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>YUPPPP</strong> Your  Note Deleted
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div> 
        @endif


       @if(session('update'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Yehhhh!!!!</strong> Your  Note Updated
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div> 
        @endif

       @if(session('register'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Yehhhh!!!!</strong> Your account created succesfully you are logged  now
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div> 
        @endif

       @if(session('register'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Yehhhh!!!!</strong> Your looged succesfully enjoy iNote
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div> 
        @endif
      



<div class="container mt-4 bg-dark text-light border rounded">
  
  <h2 class="mt-2"> Add a Note</h2>
  <hr>
<form action="inote_insert" method='post'>
  @csrf
  <div class="mb-3">
    <label for="notetitle" class="form-label">Note title</label>
    <input type="text"  name="title" class="form-control" id="notetitle" required >
  </div>
  <div class="mb-3">
    <label for="notedesc" class="form-label">Note description</label>
    <textarea class="form-control"  name="desc" id="notedesc" rows="3" required></textarea>
    <button type="submit" class="btn btn-primary mt-3 mb-2">Add note</button>
  </div>
</div>
</form>
<div class="container mt-5 ">
  <hr>
<table class="table " id="myTable">
  <thead>
     
    <tr>
      <th scope="col">id</th>
      <th scope="col">Note Title <title></title></th>
      <th scope="col">Note description</th>
      <th scope="col">Date/Time</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  @foreach($data as $value)
     <tr>
     <th scope="row">{{$value->id}}</th>
     <td>{{$value->title}}</td>
     <td>{{$value->description}}</td>
     <td>{{$value->	time}}</td>
     <td>
         <a href="inote_edit/{{$value->id}}" class="btn  mx-1 mt-2 btn-primary ">Edit</a>
         <a href="inote_delete/{{$value->id}}" class="btn  mx-1 mt-2 btn-danger">Delete</a>
     </td>
     </tr>
     @endforeach

  </tbody>
</table>

</div>


<!-- Button trigger modal -->







<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>

<script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

<script>
  $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>



  <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
  </body>
</html>
