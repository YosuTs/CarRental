@extends('master')
@section('content')
    <table>
      <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Cost</th>
        <th>Capacity</th>
        <th>Number of vehicles</th>
      </thead>
      <tbody>
        @foreach ($categories as $category)
          <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->name}}</td>
            <td>{{$category->cost}}</td>
            <td>{{$category->capacity}}</td>
            <td>{{$category->cars->count()}}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  @endsection
    {{-- {!!$categories->render()!!} --}}
