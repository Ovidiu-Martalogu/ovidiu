
        <ul  style="background-color:#a7a7e5">
    <li><a href="{{url('/')}}">Home</a></li>
   
</ul>


<body>
<br>

    <h1> Team:</h1>
    <br>
    <table style="border:2px solid blue">
    <tr>
        
        
        <th style="border:2px solid blue">Name</th>
        <th style="border:2px solid blue">Position</th>
        <th style="border:2px solid blue">Photo</th>
               
</tr>
@if(count($data)>0)
@foreach($data as $row)

<tr style="border:2px solid grey">
    <td style="border:2px solid grey">{{$row->name}}</td>
    <td style="border:2px solid grey">{{$row->position}}</td>
    <td style="border:2px solid grey">{{$row->photo}}</td>
   
     
    
</tr>
@endforeach
</table>
@endif

</html>
      

