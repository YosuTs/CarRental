@extends('master')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12 form">
        <form action="{{route('home.show_categories')}}" method="post">
          <div class="row">
            <div class="col-md-4">
              {{csrf_field()}}
              <div class="">
                <select class="" name="pick_up_location_id">
                  @foreach ($locations as $location)
                    <option  value="{{$location->id}}">{{$location->name}}</option>
                  @endforeach
                </select>
              </div>
              <div class="">
                <label for="pick_up_date">Pick up date: </label>
                <input type="date" name="pick_up_date" id="pick_up_date" value="">
              </div>
            </div>

            <div class="col-md-4">
              <div class="">
                <select class="" name="drop_off_location_id">
                  @foreach ($locations as $location)
                    <option  value="{{$location->id}}">{{$location->name}}</option>
                  @endforeach
                </select>
              </div>
              <div class="">
                <label for="drop_off_date">Drop off date: </label>
                <input type="date" name="drop_off_date" id="drop_off_date" value="">
              </div>
            </div>
            <div class="col-md-4">
              <button type="submit" class="btn" name="button">Next</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection()
