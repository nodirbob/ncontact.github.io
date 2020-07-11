<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home">
    <main role="main">
    <div class="album py-5 bg-light">
      <div class="container">
        <div class="row">
           @foreach($contact as $contacts)
           <div class="col-md-4">
             <div class="card mb-4 shadow-sm">
               <div class="card-body">
                 {{$contacts->id}}<br>{{$contacts ->name}}<br>{{$contacts->email}}<br>{{$contacts->number}}<br>{{$contacts->additional_email}}<br>{{$contacts->additional_number}}
                 <div class="checkbox mb-3"></div>
                  <div class="d-flex justify-content-between align-items-center">
                    <form action="{{ route('delete', $contacts->id) }}" method="post">
                      {{method_field('DELETE')}}
                        {{csrf_field()}}
                          <a href="{{ route('view', $contacts->id) }}" type="submit" class="btn  btn-primary">View</a>
                            <a href="{{ route('edit', $contacts->id) }}" type="submit" class="btn btn-success">Edit</a>
                              <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                                  </div>
                                    </div>
                                      </div>
                                        </div>@endforeach
                                          </div>
                                            </div>{{$contact->links()}}
                                             </body></html>
