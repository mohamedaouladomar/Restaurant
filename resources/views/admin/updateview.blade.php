<x-app-layout>
    
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    @include("admin.admincss")
  </head>
  <body>
    <div class="container-scroller">
    @include("admin.navbar")
    <div class="container mt-5" >
    <div class="row" style="margin-top: 50px;">
        <div class="card   mb-4 shadow-sm" style="transform: scale(1.09); transform-origin: center;">
            
                <div class="card-header  text-white" style="background-color: rgb(76, 7, 141)">Update Food</div>
                    <div class="card-body">
    <form action="{{url('/update',$data->id)}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-row">
        <div class="form-group col-md-6">
            <label>Title </label>
            <input type="text" class="form-control text-white" style="color: black"  name="title" value="{{$data->title}}"  required>
        </div>
        
        <div class="form-group col-md-6">
            <label>Price </label>
            <input type="number" class="form-control text-white" style="color: black" name="price"  value="{{$data->price}}" required>
        </div>
        
       
        </div>

        
        <div class="form-row">
        
        <div class="form-group col-md-6">
            <label>Old Image </label>
            <img src="/foodimage/{{$data->image}}" style="width:200px; height:190px; padding:5px; box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15); transition: transform 0.3s ease-in-out;" class=" hover:transform hover:scale-105" >
        </div>
        
        <div class="form-group col-md-6">
            <label>New Image </label>
            <input type="file" class="form-control-file" name="image"  required>
        </div>
        
      
        <div class="form-group col-md-6">
            <label>Description </label>
            <input type="text" class="form-control text-white" style="color: black" name="description"  value="{{$data->description}}" required>
        </div>

        <div></div>
            

        </div>
        <input type="submit" value="save" class="btn btn-success">
    </form>

    </form>
    </div>


    </div>
    @include("admin.adminscript")
        
  </body>
</html>