@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">$items</h1>    
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Name</td>
          <td>Quantity</td>
          <td>Price </td>
          <td>Image</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($items as $item)
        <tr>
           <!-- <td>{{$items->id}}</td> -->
            <td>{{$items->name}}</td>
            <td>{{$items->quantity}}</td>
            <td>{{$items->price}}</td>
            <td>{{$items->image}}</td>
            <td>
                <a href="{{ route('items.edit',$items->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('items.destroy', $items->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection