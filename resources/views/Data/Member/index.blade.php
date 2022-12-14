@extends('layouts.homepage.templatehomepage')

@section('content')
<div class="row">
  <div class="col-lg-12 margin-tb">
    <div class="pull-left mt-2">
      <h2> MEMBER DATA</h2>
    </div>
  </div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif
@if ($message = Session::get('error'))
<div class="alert alert-error">
  <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Password</th>
    <th width="280px">Action</th>
  </tr>
  @if(!empty($paginate) && $paginate->count())
    @foreach($paginate as $crk)
      <tr>
        <td>{{ $crk->name }}</td>
        <td>{{ $crk->email }}</td>
        <td>{{ $crk->password }}</td>
        <td>
          <form action="{{ route('member.destroy',['user'=>$user->id]) }}" method="POST">
            <a class="btn btn-primary" href="{{ route('member.edit',$user->id) }}">Edit</a>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
        </td>
      </tr>
    @endforeach
  @else
    <tr>
      <td colspan="10">There are no data.</td>
    </tr>
  @endif
</table>

{!! $paginate->links() !!}

@endsection