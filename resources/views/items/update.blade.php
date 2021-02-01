<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <title>Shop</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #000000;
                font-family: 'Nunito', sans-serif;
                font-weight: 350;
                height: 100vh;
                margin-top : 80px;
                background:#C0C0C0;
            }
        
            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
  
    <div class="container">
        <div class="flex-center">
        <div class="col-lg-6">
         <div class="card card-primary">
             <div class="card-header">
                <h3 class="card-title"> Update Item</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="/update">
              @csrf          
                <div class="card-body">
                <input type="hidden" class="form-control" id="id" name="id" value="{{$result->id}}">
                     <div class="form-group">           
                     <label for="name">Name:</label>
                         <input type="text" class="form-control" id="name" name="name" value="{{$result->name}}">
                     </div>

                    <div class="form-group">
                      <label for="quantity">Quantity:</label>
                          <input type="text" class="form-control" id="qty" name="quantity" value="{{$result->quantity}}">
                     </div>

                     <div class="form-group">
                         <label for="price">Price:</label>
                              <input type="text" class="form-control" id="price" name="price" value="{{$result->price}}">
                     </div>

                    <div class="form-group">
                         <label for=" Select image to upload:"> Select image to upload:</label>
                              <input type="file" class="form-control" id="image" name="image" value="{{$result->image}}">
                     </div> 
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" value="Submit">Update</button>
                  
                </div>
                
              </form>    
          </div>
        </div>
    </body>
</html>
