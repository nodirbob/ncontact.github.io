<body >
<div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" href="{{ route('contacts') }}">Contacts</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('index') }}">Add contact</a>
      </li>
      <li class="nav-item">
        <form action="{{ route('search') }}" method="get" class="form-inline my-lg-0">
          <input type="search" name="search" class="form-control">
          <button type="submit" class="btn btn-info">Search</button>
        </form>
      </li>
    </ul>
  </div>
</div>