@extends('master.master')
@section('title', 'Contact')

@section('content')
	<div class="container" style="margin-top: 20px;">
			<div class="col-md-12 mb-3">
				<h1 class="text-center">Contact</h1>
			</div>
			<form>
			  <div class="form-row">
			    <div class="form-group col-md-6">
			      <label for="inputEmail4">Email</label>
			      <input type="email" class="form-control" id="inputEmail4">
			    </div>
			    <div class="form-group col-md-6">
			      <label for="inputPassword4">Password</label>
			      <input type="password" class="form-control" id="inputPassword4">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="inputAddress">Address</label>
			    <input type="text" class="form-control" id="inputAddress">
			  </div>
			  <div class="form-group">
			    <label for="inputAddress2">Comment</label>
			    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
			  </div>
			  <div class="form-group">
			    <div class="form-check">
			      <input class="form-check-input" type="checkbox" id="gridCheck">
			      <label class="form-check-label" for="gridCheck">
			        Check me out
			      </label>
			    </div>
			  </div>
			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
@endsection