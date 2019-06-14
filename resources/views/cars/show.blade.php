<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cars</title>
  </head>
  <body>
    <table>
      <thead>
        <th>ID</th>
        <th>Brand</th>
        <th>Model</th>
        <th>Year</th>
        <th>Category ID</th>
      </thead>
      <tbody>
        @foreach ($cars as $car)
          <tr>
            <td>{{$car->id}}</td>
            <td>{{$car->brand}}</td>
            <td>{{$car->model}}</td>
            <td>{{$car->year}}</td>
            <td>{{$car->category_id}}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </body>
</html>
