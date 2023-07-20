
 
 
 
 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Edit mode</title>
  </head>
  <body>
<div class="container mt-4 bg-dark text-light border rounded ">
<h2 class="mt-2"> Edit Note </h2>
    <hr>

   <form action="{{route('hello')}}" method ="POST"> 
       @csrf
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Edit your  title</label>
        <input type="text" class="form-control " value='{{$data->title}}'  name="title" id="exampleFormControlInput1" >
        <input type="text" class="form-control hidden" value='{{$data->id}}' name="id" id="id" hidden >
        
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Edit your description</label>
        <textarea class="form-control" name="desc" id="exampleFormControlTextarea1" rows="3">{{$data->description}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary mt-2 mb-3">Submit</button>
    <a href="{{route('index')}}" class="btn  mt-2 mx-2 btn-primary mb-3">Go back</a>

</form>
</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>

