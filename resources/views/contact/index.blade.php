@include('contact.title.title_index')
  <body class="text-center">
    <form method="POST" action="{{ route('processing') }}" class="form-signin">

  <h1 class="h3 mb-3 font-weight-normal">New Contact</h1>
  <div class="checkbox mb-3">
    <input name="name" type="text" class="form-control" placeholder="Name">
  </div>
  <div class="checkbox mb-3">
    <input name="email" type="text" class="form-control" placeholder="Email">
  </div>
  <div class="checkbox mb-3">
    <input name="number" type="text" class="form-control" placeholder="Number">
  </div>
  <div class="checkbox mb-3">
    <input name="additional_email" type="text" class="form-control" placeholder="Additional_email">
  </div>
  <div class="checkbox mb-3">
    <input name="additional_number" type="text" class="form-control" placeholder="Additional_number">
  </div>
  <div class="checkbox mb-3">
    <button class="btn btn-success">Add</button>
    <a href="{{route('contacts')}}" class="btn btn-danger">Archive</a>
  </div>
  @if (count($errors))
   <div class="alert alert-danger">
       @foreach ($errors->all() as $error)
         {{ $error }}<br>
       @endforeach
  @endif
   </div>
 {{ csrf_field()}}
</form>
</body>
</html>
