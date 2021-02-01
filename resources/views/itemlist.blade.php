<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">    
  <title>Document</title>
</head>
<body>
<style type="text/css">
         .table-hover{
           margin-left: auto;
           margin-right: auto;
            border: 2px solid black;
            height : 50%;
            width : 70%;
            table-layout: fixed ;
        }
        a:link, a:visited {
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
          }
          .btn-success{
            float :right;
            margin-right:250px;
            margin-top :10px;
          }
          td{
            text-align : center;
          }
</style>
        <button type="button" class="btn btn-success"><a href='/category'>Category</a></button>
         <center> <h1>List of Items</h1></center>
        
          <table class="table table-hover" border=1>
          <thead>
              <tr>
              <th scope="col">Id</th>
              <th scope="col">Name</th>
              <th scope="col">Quantity</th>
              <th scope="col">Price</th>
              <th scope="col">Image</th>
              <th scope="col">Edit</th>

              </tr>
            </thead>
            <tbody>
              @foreach ($data as $data)
              <tr>
              <th scope="row">{{ $data->id }}</th> 
             
              <td>{{ $data->name }}</td>
              <td>{{ $data->quantity }}</td>
              <td>{{ $data->price}}</td>
              <td><img src="image/{{ $data->image}}"  style="height:auto; width:100px"alt=""></td>
              
              <td>
              <button type="button" onClick="myFunction()" class="btn btn-danger"><a href = 'items/delete/{{ $data->id }}'>Delete</a></button>
           
              <button type="button" class="btn btn-info"><a href = 'items/update/{{ $data->id }}'>Update</a></button></td>
           
              </tr>
              @endforeach
              </tbody>
              </table>

          <form method="post" action="">
          @csrf
          <input type=""
              
              
       <script type="text/javascript">
        function myFunction() {
          var txt;
          if (confirm('Are you sure you want to delete the item?')) {
            txt = 'You pressed OK!';
          } else {
            txt = 'You pressed Cancel!';
          }
          document.getElementById('demo').innerHTML = txt;
        }
        </script>";
     


</div>  
</body>
</html>