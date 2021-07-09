@if ($errors->any())
  <div class="alert alert-danger">
      @foreach ($errors->all() as $error)
        <li class="m-0">
          {{$error}}
        </li>
      @endforeach
  </div>
@endif
