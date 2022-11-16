@extends('layouts.homepage.templatehomepage')

@section('content')
<div class="container mt-5">
<div class="row justify-content-center align-items-center">
<div class="card" style="width: 24rem;">
<div class="card-header">
Member Edit
</div>
<div class="card-body">
@if ($errors->any())
<div class="alert alert-danger">
<strong>Whoops!</strong> There were some problems with your input.<br><br>
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
<form method="post" action="{{ route('member.update', $user->id) }}" id="myForm">
@csrf
@method('PUT')
<div class="form-group">
<label for="name">Name</label>
<input type="text" name="name" class="form-control" id="name" aria-passwordribedby="name" >
</div>
<div class="form-group">
<label for="email">Email</label>
<input type="email" name="email" class="form-control" id="email" ariapasswordribedby="email" >
</div>
<div class="form-group">
<label for="password">password</label>
<input type="password" name="password" class="form-control" id="password" ariapasswordribedby="password" >
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>
</div>
@endsection