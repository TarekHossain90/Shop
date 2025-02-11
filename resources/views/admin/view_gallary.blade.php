<!DOCTYPE html>
<html>
  <head> 
    
  @include('admin.css')

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
            <h1>Gallary</h1>

            <div class="row">
            @foreach($gallary as $gallary)

            <div class="col-md-4">
            <img width="250" src="gallary/{{$gallary->image}}" alt="">

            <a href="{{url('delete_gallary',$gallary->id)}}" class="btn btn-danger">Delete</a>
             </div>
            @endforeach
            </div>
            <form action="{{url('add_gallary')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div>
                    <label for="">Upload Image</label>
                    <input type="file" name="image">
                    <input type="submit" class="btn btn-danger">
                </div>
            </form>
         </center>
        

          
            </div>
            </div>
            </div>

          @include('admin.footer')
  </body>
</html>