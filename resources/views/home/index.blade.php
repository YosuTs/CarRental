<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Welcomo to Avis?</title>
  </head>
  <body>
    <form class="" action="{{route('home.show_categories')}}" method="post">
      {{csrf_field()}}
      <select class="" name="pick_up_location_id">
        @foreach ($locations as $location)
          <option  value="{{$location->id}}">{{$location->name}}</option>
        @endforeach
      </select>
      <label for="pick_up_date">Pick up date: </label>
      <input type="date" name="pick_up_date" id="pick_up_date" value="">
      <br>
      <select class="" name="drop_off_location_id">
        @foreach ($locations as $location)
          <option  value="{{$location->id}}">{{$location->name}}</option>
        @endforeach
      </select>
      <label for="drop_off_date">Drop off date: </label>
      <input type="date" name="drop_off_date" id="drop_off_date" value="">
      {{-- <label for="brand">Brand: </label>
      <input type="text" name="brand" id="brand" value=""> --}}
      <br>
      <button type="submit" name="button">Next</button>
    </form>
  </body>
</html>
