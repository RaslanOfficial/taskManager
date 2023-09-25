<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>


    <form method="POST" action="{{route('addlist.update',['data'=>$task])}}">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Task Title</label>
            <input type="text" name="title" class="form-control" value="{{$task->title}}" id="recipient-name">
        </div>

        <div class="mb-3">
            <label for="message-text" class="col-form-label">Task Description</label>
            <textarea class="form-control" name="description" id="message-text">{{$task->description}}</textarea>
        </div>

        <div class="mb-3">
            <label for="message-text" class="col-form-label">Task Status</label>
            <select class="form-select form-control" name="status" aria-label="Default select example">
                <option selected>Select Status</option>
                <option value="To do" {{($task->status === 'To do') ? 'selected' : ''}}>To do</option>
                <option value="In progress"  {{($task->status === 'In progress') ? 'selected' : ''}}>In progress</option>
                <option value="Done"  {{($task->status === 'Done') ? 'selected' : ''}}>Done</option>
            </select>
        </div>


        <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Task Category</label>
            <input type="text" name="category" class="form-control" value="{{$task->category}}" id="recipient-name">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>


</body>

</html>