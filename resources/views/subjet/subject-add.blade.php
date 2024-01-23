<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title','Subject')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
    body{
        background: #9796f0; 
        background: -webkit-linear-gradient(to right, #fbc7d4, #9796f0); 
        background: linear-gradient(to right, #fbc7d4, #9796f0); 
    }
    .container{
        margin-top: 50px;
    }
    .conten{
        height: 80vh;
        width: 40%;
        background-color: rgba(227, 228, 229, 0.497)
    
    }
    h3{
        text-align: center
    }
    h3:hover{
        color: dodgerblue;
    }
</style>

<body>
    <form action="">
        <div class=" rounded-4 conten container p-4">
            <h3>Subject</h3>
            <hr>    
              <div class="mb-4">
                <label for="exampleFormControlInput1" class="form-label">Enter Code</label>
                <input type="text" class="form-control border-success"  placeholder="Enter Code">
              </div>
    
              <div class="mb-4">
                <label for="exampleFormControlInput1" class="form-label">Enter Name</label>
                <input type="text" class="form-control border-success" placeholder="Enter Name">
              </div>
    
              <div class="mb-4">
                <label for="" class="form-label">Note</label>
                <textarea class="form-control border-success"  rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-outline-success">Okey</button>
              <button type="reset" class="btn btn-outline-danger">Clear</button>
        </div>
    </form>
</body>
</html>