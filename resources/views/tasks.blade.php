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
            <h1>Daily Task</h1>
            <div class="row">
                <div class="col-12">
                
                    @foreach($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        {{$error}}
                    </div>
                    @endforeach

                    <form action="/saveTask" method="post">
                        {{csrf_field()}}
                        <input type="text" class="form-control" name="task" placeholder="Enter Your task here">
                        <br>
                        <input type="submit" value="SAVE" class="btn btn-primary">
                        <input type="reset" value="CLEAR" class="btn btn-warning">
                    </form>
                    <br>
                    <table class="table table-dark">
                        <th>ID</th>
                        <th>Task</th>
                        <th>Completed</th>
                        <th>Action</th>
                        
                        @foreach($tasks as $task)
                            <tr>
                                <td>{{$task->id}}</td>
                                <td>{{$task->task}}</td>
                                @if($task->iscompleted)
                                <td>
                                    <a href="/markasuncompleted/{{$task->id}}">
                                        <button type="button" class="btn btn-success">Completed</button>
                                    </a>
                                </td>
                                @else
                                <td>
                                    <a href="/markascompleted/{{$task->id}}">
                                        <button type="button" class="btn btn-warning">Not Completed</button>
                                    </a>
                                </td>
                                @endif
                                 <td>
                                    <a href="/deletetask/{{$task->id}}" class="btn btn-danger">
                                        Delete
                                    </a>
                                    <a href="/updatetask/{{$task->id}}" class="btn btn-success">
                                        Update
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>