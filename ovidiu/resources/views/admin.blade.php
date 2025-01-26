@extends('layouts.admin_screen')
@section('content')

    
    <div class="row my-5">
        <div class="col"> 

            @if(session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <form action="{{ route('admin_save') }}" method="POST"> 
                @csrf
                <div class="row">
                    <label class="col-3" for="home_description">Home Description</label>
                    <div class="col-9">
                        <textarea class="form-control" id="home_description" name="home_description" placeholder="Description for the 'home' section">{{ old('home_description') }}</textarea>
                        
                    </div>
                </div>

                <br>

                <div class="row">
                    <label class="col-3" for="about_description">About Description</label>
                    <div class="col-9">
                        <textarea class="form-control" id="about_description" name="about_description" placeholder="Description for 'about' section">{{ old('about_description') }}</textarea>
                        
                    </div>
                </div>
                <br>
                
               
              @php 
              $services_description = array(
                "Presentation_sites" => 
                                 " We create professional presentation websites for small and large businesses. Our team ensures that each
                        website created is unique and meets the client's specific requirements.",
    
                "Online_shops" => "A professional online store is essential for any
                        business that wants to expand its business and reach
                        new customers. With an attractive design and well-organized
                        functionality, a professional online store can increase sales
                        and strengthen the reputation of the business.",
    
                "Graphic_design" => "Whether you need a new logo or
                        an advertising campaign with banners and flyers,
                        our team of professional designers can help you
                        develop your brand image and differentiate yourself
                        from the competition.");  
                       
            @endphp
              
                 @foreach ($services_description as $services => $description)
                    
                <div class="row">
                    
                    <div class="col-9">
                    <label for="services_description"> {{$services . " : " . $description}}</label>
                    <input type="checkbox" id="services_description" name="services_description[]" >
                    <br>
                   
                 </div>
                 </div>
                     @endforeach
                <br>
            
                <br>
                <div class="row">
                    <label class="col-3" for="contact">Contact</label>
                    <div class="col-6">
                        <label for="Address" >Address</label>
                        <input type="text" id="Address" name="Address" placeholder="Address">
                        <br><br>
                        <label for="Email" >Email</label>
                        <input type="Email" id="Email" name="Email" placeholder="Email">
                        <br><br>
                        <label for="Telephone" >Telephone</label>
                        <input type="Telephone" id="Telephone" name="Telephone"  placeholder="Telephone" >
                        <br><br>
                 </div>
                </div>
                <br>
                <br>

                <div class="row mt-5">
                    <div class="col text-center">
                        <button type="submit" class="btn btn-success">Save</button> 
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection

