<x-app-layout>
    
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    <style>
      

    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    @include("admin.admincss")
  </head>
  <body>
    <div class="container-scroller" >
    @include("admin.navbar")
    
        <div class="row" style="margin-top: 80px;margin-left:20px">
            <!-- Form Part -->
            <div class="card mb-4 shadow-sm" style="transform: scale(0.97); transform-origin: center;">

                <div class="card">
                    <div class="card-header  text-white" style="background-color: rgb(76, 7, 141)">Add Food</div>
                    <div class="card-body">
                        <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">
                            @csrf
        
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control text-white" id="title" name="title" placeholder="Write a Title" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="price">Price</label>
                                    <input type="number" class="form-control text-white" id="price" name="price" placeholder="Write a Price" required>
                                </div>
                            </div>
        
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="image">Image</label>
                                    <input type="file" class="form-control-file" id="image" name="image" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="description">Description</label>
                                    <input type="text" class="form-control text-white" id="description" name="description" placeholder="Write a Description" required>
                                </div>
                            </div>
        
                            <button type="submit" class="btn btn-success">Save</button>
                        </form>
                    </div>
                </div>
            </div>
            
            
            <!-- Table Part -->
            <div class="card mb-4 shadow-sm" style="transform: scale(0.97); transform-origin: center;">
                <div class="card" style="margin-top: 50px">
                    <div class="card-header  text-white" style="background-color: rgb(76, 7, 141)">Food List</div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead class="bg-dark text-white">
                                <tr>
                                    <th class="text-center">Food Name</th>
                                    <th class="text-center">Price</th>
                                    <th class="text-center">Description</th>
                                    <th class="">Image</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $data)
                                    <tr>
                                        <td class="text-center text-white">{{ $data->title }}</td>
                                        <td class="text-center text-white">{{ $data->price }} DH</td>
                                        <td class="text-center text-white">{{ $data->description }}</td>
                                        <td class="text-center">
                                            <img style="width:140px; height:130px; padding:5px; box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15); transition: transform 0.3s ease-in-out;" src="/foodimage/{{ $data->image }}" class="rounded-circle hover:transform hover:scale-105">
                                        </td>

                                        
                                        
                                        <td class="text-center">

                                            <a href="{{ url('/updateview', $data->id) }}" class="btn btn-sm btn-outline-success">Edit</a>
                                            <a href="{{ url('/deletemenu', $data->id) }}" class="btn btn-sm btn-outline-danger mr-2">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    </div>
    @include("admin.adminscript")
        
  </body>
</html>