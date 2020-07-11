@include('contact.title.title_contacts')
@include('contact.header.header_view')
<form method="POST" action="{{route('edit-update', $result->id)}}" class="form">
      {{ method_field('PATCH') }} @csrf
      <ul class="list-group">
        @if (count($errors))
   <div class="alert alert-danger">
       @foreach ($errors->all() as $error)
         {{ $error }}<br>
       @endforeach
  @endif
   </div>
  <li class="list-group-item d-flex">
    <input name="id" type="text" value="{{$result->id}}" class="form-control" >
  </li>
  <li class="list-group-item d-flex">
   <input name="name" type="text" value="{{$result->name}}" class="form-control" >
  </li>
  <li class="list-group-item d-flex">
   <input name="email" type="text" value="{{$result->email}}" class="form-control" >
  </li>
  <li class="list-group-item d-flex">
   <input name="number" type="text" value="{{$result->number}}" class="form-control" >
  </li>
  <li class="list-group-item d-flex">
   <input name="additional_number" type="text" value="{{$result->additional_email}}" class="form-control" >
  </li>
  <li class="list-group-item d-flex">
   <input name="additional_email" type="text" value="{{$result->additional_number}}" class="form-control" >
  </li>
  <li class="list-group-item d-flex">
  <div class="checkbox mb-3">
    <button class="btn btn-success">Update</button>
  </div>
  </li>
</ul>
</form>
</body></html>