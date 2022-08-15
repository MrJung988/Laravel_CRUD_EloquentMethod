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
                <form action="{{route('store')}}" method="post">
                        @csrf
                    <div class="mb-3">
                        <label for="fname" class="form-label"><strong>First Name:</strong></label>
                        <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter Student's first name.">
                    </div>

                    <div class="mb-3">
                        <label for="lname" class="form-label"><strong>Last Name:</strong></label>
                        <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter Student's last name.">
                    </div>
                        
                    <div class="mb-3">
                        <label for="pname" class="form-label"><strong>Parent's Name:</strong></label>
                        <input type="text" class="form-control" id="pname" name="pname" placeholder="Enter Student's Parent's Name.">
                    </div>

                    <div class="mb-3">
                        <label for="contact" class="form-label"><strong>Contact:</strong></label>
                        <input type="number" class="form-control" id="contact" name="contact" placeholder="Enter Student's Parent's Name.">
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label"><strong>Address:</strong></label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="Enter Student's Address.">
                    </div>
    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

            <div class="col-sm-9" style="text-align: center;">
                <h3><u>The Detail's of students:</u></h3><br><br>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Parent's Name</th>
                            <th scope="col">Contact</th>
                            <th scope="col">Address</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                            @foreach ($students as $stu)
                            <tr>
                                <td>{{$stu->id}}</td>
                                <td>{{$stu->fname}}</td>
                                <td>{{$stu->lname}}</td>
                                <td>{{$stu->pname}}</td>
                                <td>{{$stu->contact}}</td>
                                <td>{{$stu->address}}</td> 
                                <td>
                                    <a href="{{url('/edit', $stu->id)}}" class="btn btn-info">Edit</a>
                                    <a href="{{url('/delete', $stu->id)}}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>                           
                            @endforeach   
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    




<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>