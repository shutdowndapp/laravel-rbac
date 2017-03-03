@if (count($errors) > 0)
<ul class="list-group">
    @foreach($errors->all() as $error)
        <li class="list-group-item list-group-item-danger">{{ $error }}</li>
    @endforeach
</ul>
@endif

@if (Session::has('fail'))
<ul class="list-group">
  <li class="list-group-item list-group-item-danger">{{ Session::get('fail') }}</li>
</ul>
@endif

@if (Session::has('success'))
<ul class="list-group">
  <li class="list-group-item list-group-item-success">{{ Session::get('success') }}</li>
</ul>
@endif