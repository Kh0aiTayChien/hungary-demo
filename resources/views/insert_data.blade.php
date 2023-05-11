<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<h1 align="center">Insert Form</h1>
<form action="{{ route('test') }}"  method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Your Email:</strong>
                <input type="text" name="email" class="form-control" placeholder="Company Name">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Your Phone:</strong>
                <input type="text" name="phone" class="form-control" placeholder="Your Phone">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Your Address:</strong>
                <input type="text" name="address" class="form-control" placeholder="Your Address">
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary ml-3">Submit</button>
</form>
<body>

</body>
</html>
