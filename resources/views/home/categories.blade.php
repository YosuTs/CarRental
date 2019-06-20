<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Laravel Testing</title>
  </head>
  <body>
    <table>
      <thead>
        <th>Name</th>
        <th>Cost</th>
        <th>Capacity</th>
        <th>Number of vehicles</th>
      </thead>
      <tbody>
        @foreach ($categories as $category)
          <tr>
            <td>{{$category->name}}</td>
            <td>{{$category->cost}}</td>
            <td>{{$category->capacity}}</td>
            <td>{{$category->cars->count()}}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
    {{-- {!!$categories->render()!!} --}}
  </body>
</html>
