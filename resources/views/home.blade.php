@extends('layouts.app')
@section('content')
  <!-- Latest compiled and minified CSS -->
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
  <body>
    <div class="card-body">
      <form>
        {{csrf_field()}}

        <div class="dropdown">
          <button class="btn btn-info dropdown-toggle" data-toggle="dropdown">Область</button>
          <ul class="dropdown-menu" >
            @foreach ($regions as $region)
            <li><a href="/posts?idRegion={{$region->id}}&idTown={{-- idTown --}}">{{$region->name}}</a></li>
            @endforeach
          </ul>
        </div>

        <div class="dropdown">
          <button class="btn btn-info dropdown-toggle" data-toggle="dropdown">Город</button>
          <ul class="dropdown-menu">
            @foreach ($towns as $town)
            <li><a href="/posts?idRegion={{$region->id}}&idTown={{-- idTown --}}">{{$town->name}}</a></li>
            @endforeach
          </ul>
        </div>

      </form>
    </div>
  </body>
  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
@endsection
