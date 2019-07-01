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
      </thead>
      <tbody>
        @foreach ($categories as $category)
          <tr>
            <td>{{$category->name}}</td>
            <td>{{$category->cost}}</td>
            <td>{{$category->capacity}}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
    {{-- {!!$categories->render()!!} --}}
  </body>
</html>
