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
            <div class="card-header  text-white" style="background-color: rgb(172, 2, 16)">Reservation  List</div>
            <div class="card-body">
          <table class="table table-striped" >
              <thead class="bg-dark text-white">
                  <tr>
                      <th class="text-center">Name</th>
                      <th class="text-center">Email</th>
                      <th class="text-center">Phone</th>
                      <th class="text-center">Date</th>
                      <th class="text-center">Time</th>
                      <th class="text-center">Message</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($data as $data) 
                      <tr>
                          <td class="text-center text-white">{{ $data->name }}</td>
                          <td class="text-center text-white">{{ $data->email }}</td>
                          <td class="text-center text-white">{{ $data->phone }}</td>
                          <td class="text-center text-white">{{ $data->date }}</td>
                          <td class="text-center text-white">{{ $data->time }}</td>
                          <td class="text-center text-white">{{ $data->message }}</td>
                          
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