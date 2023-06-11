<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Image Upload</title>
</head>
<body>
    
    <div class="container">
        <div class="panel panel-primary" >
            <div class="panel-heading">
                <h2>NoCode Laravel Image Upload</h2>
            </div>
    
            <div class="panel-body">
                <form action="/"  enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-success">Upload</button>
                        </div>
                    </div>

                    @if (count($errors)>0)
                    <div class="alert alert-danger">
                        <strong>Whoops! there are problems in uploading the image.</strong>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <strong>{{$message}}</strong>
                    </div>
                    <img src="images/{{Session::get('image_name')}}" width="300" height="200" alt="">
                @endif
                
                
    





    
                </form>
            </div>
        </div>
    </div>
    
    
    






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>