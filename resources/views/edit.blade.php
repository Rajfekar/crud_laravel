
@include('head')
<div style=" background-color:aquamarine; padding-left:5em; padding-right:5em;">
<form action="{{url('/')}}/customer/update/{{$customer->id}}" method="post">
  @csrf

    <h1 style="text-align:center;">Edit Data </h1>
    <!-- <h2> We Love To Hear From You</h2> -->
    <div class="form-group">
<label for="exampleInputEmail1">Name</label>
<input type="text" id="name" name="name" class="@error('name') is-invalid @enderror form-control" value="{{$customer->name}}">
@error('name')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>     

<div class="form-group">
<label for="exampleInputEmail1">Mobile No.</label>
<input type="text" id="name" name="mobile" class="@error('mobile') is-invalid @enderror form-control" value="{{$customer->mobile}}">
@error('mobile')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>     

<div class="form-group">
<label for="exampleInputEmail1">Email</label>
<input type="email" id="email" name="email" class="@error('email') is-invalid @enderror form-control" value="{{$customer->email}}">
@error('email')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>    


<div class="form-group">
<label for="exampleInputEmail1">Service</label>
<select type="text" id="service" name="service" class="@error('service') is-invalid @enderror form-control" value="{{$customer->service}}">
 
  <option value="Service 1">Service 1</option>
  <option value="Service 2">Service 2</option>
  <option value="Service 3">Service 3</option>
  </select>

@error('service')

<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>     

 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>





@include('foot')