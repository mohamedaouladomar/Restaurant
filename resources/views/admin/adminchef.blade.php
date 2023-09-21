<x-app-layout>
    
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    
    @include("admin.admincss")
  </head>
  <body>
    <div class="container-scroller">
    @include("admin.navbar")
    <div class="container mt-4" >
    <div class="row" style="margin-top: 80px;margin-left:20px">
        <!-- Form Part -->
        <div class="card mb-4 shadow-sm" style="transform: scale(1.10); transform-origin: center;">

            <div class="card">
                <div class="card-header  text-white" style="background-color: rgb(233, 187, 4)">Add Chefs</div>
                <div class="card-body">
                    <form action="{{url('/uploadchef')}}" method="post" enctype="multipart/form-data">
                        @csrf
    
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="title">Name</label>
                                <input type="text" class="form-control text-white" id="name" name="name" placeholder="Write a Name" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="price">Speciality</label>
                                <input type="text" class="form-control text-white" id="speciality" name="speciality" placeholder="Write a Speciality" required>
                            </div>
                        
    
                        
                            <div class="form-group col-md-6">
                                <label for="image">Image</label>
                                <input type="file" class="form-control-file" id="image" name="image" required>
                            </div>
                            
                        </div>
    
                        <button type="submit" class="btn btn-success">Save</button>
                    </form>
                </div>
            </div>
        </div>
      
        
        <!-- Table Part -->
        <div class="card mb-4 shadow-sm" style="transform: scale(1.10); transform-origin: center;margin-top:50px;">
            <div class="card" style="margin-top: 50px">
                <div class="card-header  text-white" style="background-color: rgb(233, 187, 4)">Chefs List</div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead class="bg-dark text-white">
                            <tr>
                                <th class="text-center">Chef Name</th>
                                <th class="text-center">Speciality</th>
                                <th class="">Image</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $data)
                                <tr>
                                    <td class="text-center text-white">{{ $data->name }}</td>
                                    <td class="text-center text-white">{{ $data->speciality }} </td>
                                    <td class="text-center">
                                        <img style="width:140px; height:130px; padding:5px; box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15); transition: transform 0.3s ease-in-out;" src="/chefimage/{{ $data->image }}" class="rounded-circle hover:transform hover:scale-105">
                                    </td>

                                    
                                    
                                    <td class="text-center">

                                        <a href="{{ url('/updatechef', $data->id) }}" class="btn btn-sm btn-outline-success">Edit</a>
                                        <a href="{{ url('/deletechef', $data->id) }}" class="btn btn-sm btn-outline-danger mr-2">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                    
                </div>
            </div>
        </div>
    </div>
</div></div>
    </div>
    @include("admin.adminscript")
        
  </body>
</html>