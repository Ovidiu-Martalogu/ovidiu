@extends('layouts.admin_screen')
@section('content')

<body>

<main class="px-1">
<div class="form-group">

<label for="home_description">Home Description</label>
<div class="col-sm-6"><textarea class="form-control" id="home_description" 
  placeholder="home_description"></textarea></div>
</div>
<br>
<br>

<div class="form-group">
<label for="about_description">About Description</label>
<div class="col-sm-6"><textarea class="form-control " id="about_description" 
  placeholder="about_description" ></textarea></div>
  </div>
  
 
</main>
</body>
@endsection

