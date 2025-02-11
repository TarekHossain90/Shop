<!DOCTYPE html>
<html>
  <head> 
    
  @include('admin.css')

  <style>
    table{
        text-align:center;
        border:2px solid white;
        width: 70%;
    }
    th{
        color:white;
        padding: 8px;
    }
    td{
        padding: 8px;
        background-color:black;
        color:pink;
        border:1px solid red;
    }
  </style>
</head>
  <body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            
         <center>
            <h1>All Message</h1>

            <table>
                <tr>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Message</th>
                </tr>

                @foreach($data as $data)
                <tr>
                    <td>{{$data->name}}</td>
                    <td>{{$data->phone}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->message}}</td>
                </tr>
                @endforeach
            </table>
         </center>
        

          
            </div>
            </div>
            </div>

          @include('admin.footer')
  </body>
</html>