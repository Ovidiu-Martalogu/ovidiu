@extends('layouts.admin_screen')
@extends('partials.general.head')
@section('content')

<body>
<!-- test
<form action="{{route("admin_save")}}" method="post" enctype="multipart/form-data" target="_blank">
@csrf
<section class="container-contact w-100" id="Contact">
<div class="mb-3">
<h3>Description</h3>
<div class="col"><label for="home_description" >Home</label></div>
<div class="col"><input type="text" name="home_description" id="home_description" placeholder="home_description"></div>
</div>
<div class="mb-3">
<div class="col"><label for="about_description">About</label></div>
<div class="col"><input type="text" id="about_description" name="about_description" placeholder="about_description"></div>
</div>
<div class="mb-3">
<div class="col"><label for="services_description" >Services</label></div>
<div class="col"><input type="text" id="services_description" name="services_description" placeholder="services_description"></div>
</div>
<h3>Team</h3>
<div class="mb-3">
<div class="form-label"><label for="formFileSm" >Name</label></div>
@foreach($team_members as $member)

<select>
<option value=""></option>

        <option value="{{$member->id}}">{{ $member->name }}</option>
</select>

<select>
<option value=""></option>
        <option value="{{$member->name}}">{{ $member->position }}</option>
</select>

<select>
<option value=""></option>
        <option value="{{$member->position}}">{{$member->photo}}</option>
        </select>
        <br><br>
        endtest -->
<!--
<div class="col"><label for="photo" >Photo</label></div>
  <input class="form-check-input" type="checkbox" id="Tibi" value="Tibi" height="20">
  <img src="/images/tibi.jpg" alt="test" id="photo" >
  <input class="form-check-input" type="checkbox" id="Ovidiu" value="Ovidiu" height="20">
  <img src="/images/ovidiu.png" alt="test" id="photo">
 <select>
        <option value="{{$member->id}}">{{ $member->name }} - {{ $member->position }}</option>
<option><img src="{{ isset($member->photo) ? asset('images/' . $member->photo) : "" }}" 
        height="150" alt="team member"></option>
                    </select> -->
               <!-- @endforeach -->
               

 <!--
  <div class="col"><label for="formFileSm" >Position</label></div>
  <select aria-label="Default select example" >
<option value=""></option>
  <option value="1">Web architect</option>
  <option value="2">Junior Fullstack Web Developer</option>
  </select>
  <div class="col"><label for="photo" >Photo</label></div>
  <input class="form-check-input" type="checkbox" id="Tibi" value="Tibi" height="20">
  <img src="/images/tibi.jpg" alt="test" id="photo" >
  <input class="form-check-input" type="checkbox" id="Ovidiu" value="Ovidiu" height="20">
  <img src="/images/ovidiu.png" alt="test" id="photo">
  
 <br>
 <br>
 <br> -->
 <!-- test
 <h3>Contact</h3>
  
  <label for="email">Email:</label>
  <input type="text" id="email" name="email" placeholder="Email" required><br><br>
  <label for="address">Address:</label>
  <input type="text" id="address" name="address" placeholder="Address" required><br><br>
  <label for="telephone">Telephone:</label>
  <input type="text" id="telephone" name="telephone" placeholder="Telephone" required><br><br>
  <input type="submit" value="Submit">
</form>
endtest-->
</body>
@endsection
