<table style="border:2px solid blue">
    <tr>
        <th style="border:2px solid blue">address</th><br>
        <th style="border:2px solid blue">email</th>
        <th style="border:2px solid blue">telephone</th>
            
        </tr>
            
<div class="container">

    @if(count($contact_data)>0)
    @foreach($contact_data as $contact)
    <div class="row">
        <tr>
       
        <div class="col">
        <td style="border:2px solid grey"> {{$contact->address}}</td>
        </div>
        <div class="col">
        <td style="border:2px solid grey"> {{$contact->email}}</td>
        </div>
        <div class="col">
        <td style="border:2px solid grey"> {{$contact->telephone}}</td>
        </div>
       
        @endforeach
        @endif