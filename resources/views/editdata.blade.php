<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD Eloquent ORM</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-3"> 
                <h5><u>Enter the Student's Details:</u></h5><br><br>
                <form  method="POST" action="">
                        @csrf
                        @method("PUT")
                    <div class="mb-3">
                        <label for="fname" class="form-label"><strong>First Name:</strong></label>
                        <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter Student's first name." value="{{$students->fname}}">
                    </div>

                    <div class="mb-3">
                        <label for="lname" class="form-label"><strong>Last Name:</strong></label>
                        <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter Student's last name." value="{{$students->lname}}">
                    </div>
                        
                    <div class="mb-3">
                        <label for="pname" class="form-label"><strong>Parent's Name:</strong></label>
                        <input type="text" class="form-control" id="pname" name="pname" placeholder="Enter Student's Parent's Name." value="{{$students->pname}}">
                    </div>

                    <div class="mb-3">
                        <label for="contact" class="form-label"><strong>Contact:</strong></label>
                        <input type="number" class="form-control" id="contact" name="contact" placeholder="Enter Student's Contact." value="{{$students->contact}}">
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label"><strong>Address:</strong></label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="Enter Student's Address." value="{{$students->address}}">
                    </div>
    
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>

    




<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>