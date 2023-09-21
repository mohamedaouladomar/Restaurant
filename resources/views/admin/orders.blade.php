

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
            <div class="card-header  text-white" style="background-color: rgb(32, 43, 173)">List Orders</div> <br>

            <form action="{{ url('/orders') }}" method="GET">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" style="color: white;" name="query" placeholder="Search by Name, Phone, Address or Foodname" aria-label="Search" value="{{ request('query') }}">
                    
                    
                        <button class="btn btn-outline-primary" type="submit">Search</button>
                    
                </div>
            </form>



            <div class="card-body">
          <table class="table table-striped" >
              <thead class="bg-dark text-white">
                  <tr>
                      <th class="text-center">Name</th>
                      <th class="text-center">Phone</th>
                      <th class="text-center">Adress</th>
                      <th class="text-center">Food Name</th>
                      <th class="text-center">Price</th>
                      <th class="text-center">Quantity</th>
                      <th class="text-center">Total Price</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($data as $data) 
                      <tr>
                          <td class="text-center text-white">{{ $data->name }}</td>
                          <td class="text-center text-white">{{ $data->phone }}</td>
                          <td class="text-center text-white">{{ $data->address }}</td>
                          <td class="text-center text-white">{{ $data->foodname }}</td>
                          <td class="text-center text-white">{{ $data->price }} DH</td>
                          <td class="text-center text-white">{{ $data->quantity }}</td>
                          <td class="text-center text-white">{{ $data->price * $data->quantity }} DH</td>
                          
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