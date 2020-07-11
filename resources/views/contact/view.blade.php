@include('contact.title.title_contacts')
@include('contact.header.header_view')
<form action="{{route('edit-update', $result->id)}}" class="form">
      <ul class="list-group">
  <li class="list-group-item d-flex">
  	<span class="badge badge-success">Id</span>
    {{$result->id}}
  </li>
  <li class="list-group-item d-flex">
    <span class="badge badge-success badge-pill">Name</span>
    {{$result->name}}
  </li>
  <li class="list-group-item d-flex">
    <span class="badge badge-success badge-pill">Email</span>
    {{$result->email}}
  </li>
  <li class="list-group-item d-flex">
  	<span class="badge badge-success badge-pill">Number</span>
    {{$result->number}}
  </li>
  <li class="list-group-item d-flex">
    <span class="badge badge-success badge-pill">Additional_email</span>
    {{$result->additional_email}}
  </li>
  <li class="list-group-item d-flex">
    <span class="badge badge-success badge-pill">Additional_number</span>
    {{$result->additional_number}}
  </li>
  <li class="list-group-item d-flex">
  	<span class="badge badge-success badge-pill">Date/Time</span>
    {{$result->created_at}}
  </li>
</ul>
</form>
</body></html>
