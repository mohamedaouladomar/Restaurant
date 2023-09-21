<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
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


        <div class="container mt-5" >
            <div class="card mb-4 shadow-sm" style="transform: scale(1.09); transform-origin: center;">
            <div class="card" style="margin-top: 35px">
            <div class="card-header  text-white" style="background-color: rgb(4, 121, 43)">Users  List</div>
            <div class="card-body">
          <table class="table table-striped" >
              <thead class="bg-dark text-white">
                  <tr>
                      <th class="text-center">Name</th>
                      <th class="text-center">Email</th>
                      <th class="text-center">Action</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($data as $data) 
                      <tr>
                          <td class="text-center text-white"">{{ $data->name }}</td>
                          <td class="text-center text-white">{{ $data->email }}</td>
                          <td class="text-center">
                              @if($data->usertype == "0")
                                  <a href="{{ url('/deleteuser', $data->id) }}" class="btn btn-sm btn-outline-danger mr-2">Delete</a>
                              @else
                                  <span class="text-muted">Not Allowed</span>
                              @endif
                          </td>
                      </tr>
                  @endforeach
              </tbody>
          </table>
      </div>
        </div>
        </div>
        </div>
        @include("admin.adminscript")
            
      </body>
    </html>
</body>
</html>