<!DOCTYPE html>
<html>
  <head> 
    
  @include('admin.css')

    <style>
       label{
        width: 100px;
       }
       table{
        text-align:center;
        margin-top:100px;
        width: 70%;
        border:1px solid white;
       }
       th{
        background-color:pink;
        padding: 8px;
        color: #000;
       }
       td{
        text-align:center;
        border:1px solid white;
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
            <h1>Team</h1>

            <form action="{{url('view_team')}}" method="post" enctype="multipart/form-data">
                @csrf

            <div>
                <label for="">Name</label>
                <input type="text" name="name">
            </div>

            <div>
                <label for="">Description</label>
                <textarea name="description" id=""></textarea>
            </div>

            <div>
                <label for="">Price</label>
                <input type="text" name="price">
            </div>

            <div>
                <label for="">Image</label>
                <input type="file" name="image">
            </div>


            <div>
                <input type="submit" class="btn btn-danger">
            </div>
            </form>

            <table>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Delete</th>
                </tr>

                @foreach($data as $data)
                <tr>
                    <td>{{$data->name}}</td>
                    <td>{{$data->description}}</td>
                    <td>{{$data->price}}</td>
                    <td>
                        <img height="150" src="team/{{$data->image}}" alt="">
                    </td>

                    <td>
                        <a href="{{url('delete_team',$data->id)}}" class="btn btn-danger">Delete</a>
                    </td>
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