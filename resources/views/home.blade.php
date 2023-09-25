@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">

      <a href="{{route('addlist.index')}}">
        <button type="button" class="btn btn-primary btn-lg">Add Task List</button>
      </a>
      <br>
      <br>

      <table class="table table-success table-striped-columns">

        <tr>
          <th scope="col">Task Title</th>
          <th scope="col">Description</th>
          <th scope="col">Status</th>
          <th scope="col">Category</th>
          <th scope="col">Action</th>
        </tr>

        @foreach($tasklists as $tasklist)
        <tr>
          <td>{{$tasklist->title}}</td>
          <td>{{$tasklist->description}}</td>
          <td>{{$tasklist->status}}</td>
          <td>{{$tasklist->category}}</td>
          <td><a href="{{route('addlist.edit',['id'=>$tasklist->id])}}">Edit</a>
            <form method="post" action="{{route('addlist.delete',['data'=>$tasklist->id])}}">
            @csrf
            @method('delete')
            <button type="submit">Delete</button>
            </form>
          </td>
        </tr>
        @endforeach
        <!-- <tr>
            <td>Mark</td>
            <td>Jacob</td>
            <td>In progress</td>
            <td>@fat</td>
          </tr>
          <tr>
            <td>Mark</td>
            <td>Larry the Bird</td>
            <td>Done</td>
            <td>@twitter</td>
          </tr> -->

      </table>

    </div>
  </div>
</div>
@endsection