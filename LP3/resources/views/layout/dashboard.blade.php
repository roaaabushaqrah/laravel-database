@extends('layout.master')
@section('content')
<table class="table">
  <thead class="thead-primary">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Full name</th>
      <th scope="col">email</th>
      <th scope="col">National Number</th>
      <th scope="col">phone</th>
      <th scope="col">address</th>
      <th scope="col">image</th>
      <th scope="col">delete</th>
      <th scope="col">edit</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    @foreach($showall as $student)
    <th scope="col">{{ $student->id}}</th>
      <th scope="row">{{ $student->name}}</th>
      <td>{{$student->email}}</td>
      <td>{{$student->NID}}</td>
      <td>{{$student->mobile}}</td>
      <td><img src='{{asset("images/$student->image")}}'</td>
      <td>{{$student->address}}</td>
      <form action='delete/{{$student->id}}'method="post">
   
      <td><button type="submit" class="btn btn-danger">delete</button></td>
      
   @method('DELETE')
   @csrf
   </form>
   <td><a href="edit/{{$student->id}}" class="btn btn-primary" >Edit</a></td>


    </tr>
    @endforeach
    </tbody>
 
</table>
@endsection