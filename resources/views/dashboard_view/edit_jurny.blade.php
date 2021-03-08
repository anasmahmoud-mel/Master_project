@extends('dashboard_layouts.index')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Partner
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('jurnys.update', $jurny->id) }}">
                @csrf

        @method('PUT')

        <div class="form-group">
          <label for="price">From:</label>
          <input type="text" id="post_body" class="form-control" name="from" value={{ $jurny->from }}>
        </div>
        <div class="form-group">
          <label for="price">To:</label>
          <input type="text" id="post_body" class="form-control" name="to" value={{ $jurny->to }}>
        </div>
        <div class="form-group">
          <label for="price">Date:</label>
          <input type="text" id="post_body" class="form-control" name="date" value={{ $jurny->date }}>
        </div>
        <div class="form-group">
          <label for="price">Break:</label>
          <input type="text" id="post_body" class="form-control" name="break" value={{ $jurny->break }}>
        </div>
        <div class="form-group">
          <label for="price">Arrival_time:</label>
          <input type="text" id="post_body" class="form-control" name="arrival_time" value={{ $jurny->arrival_time }}>
        </div>
        <div class="form-group">
          <label for="price">Driver_name:</label>
          <input type="text" id="post_body" class="form-control" name="driver_name" value={{ $jurny->driver_name }}>
        </div>
        <div class="form-group">
          <label for="price">Price:</label>
          <input type="double" id="post_body" class="form-control" name="price" value={{ $jurny->price }}>
        </div>
        
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection