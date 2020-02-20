<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Taks</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="text-center">
            <h1>Update Task</h1>
            <div class="row">
                <div class="col-12">
                
                    @foreach($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        {{$error}}
                    </div>
                    @endforeach

                    <form action="/updateTasks" method="post">
                        {{csrf_field()}}
                        <input type="text" class="form-control" name="task" value="{{$taskdata->task}}">
                        <input type="hidden" value="{{$taskdata->id}}" name="id">
                        <br>
                        <input type="submit" value="UPDATE" class="btn btn-warning">
                        <input type="reset" value="CLEAR" class="btn btn-danger">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>