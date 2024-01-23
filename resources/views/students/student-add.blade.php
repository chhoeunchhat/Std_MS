
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <title>Document</title> --}}
    <title> @yield('title','Students')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
    body{
        background: #9796f0; 
        background: -webkit-linear-gradient(to right, #fbc7d4, #9796f0); 
        background: linear-gradient(to right, #fbc7d4, #9796f0); 
    }
    .container{
        margin-top: 40px;
    }
    .conten{
        height: 90vh;
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
            <h3>Students</h3>
            <hr>    
              <div class="mb-2">
                <label for="exampleFormControlInput1" class="form-label">FullName</label>
                <input type="text" class="form-control border-success"  placeholder="Enter your fullname">
              </div>
    
              <div class="mb-2">
                <label for="exampleFormControlInput1" class="form-label">Gender</label>
                <input type="text" class="form-control border-success" placeholder="Enter your gender">
              </div>

              <div class="mb-2">
                <label for="exampleFormControlInput1" class="form-label">Date Of Birth</label>
                <input type="date" class="form-control border-success" placeholder="Enter your date of birth">
              </div>

              <div class="mb-2">
                <label for="exampleFormControlInput1" class="form-label">Phone</label>
                <input type="text" class="form-control border-success" placeholder="Enter your phone">
              </div>
              
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Subject</label>
                <input type="text" class="form-control border-success" placeholder="Enter your subject">
              </div>

              
              <button type="submit" class="btn btn-outline-success">Okey</button>
              <button type="reset" class="btn btn-outline-danger">Clear</button>
        </div>
    </form>
</body>
</html>

