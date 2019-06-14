<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="{{route('cars.store')}}" method="post">
      {{csrf_field()}}
      <select class="" name="category_id">
        @foreach ($categories as $category)
          <option  value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
      </select>
      <label for="brand">Brand: </label>
      <input type="text" name="brand" id="brand" value="">
      <label for="model">Model: </label>
      <input type="text" name="model" id="model" value="">
      <label for="year">Year: </label>
      <input type="text" name="year" id="year" value="">
      <button type="submit" name="button">Create</button>
    </form>
  </body>
</html>
