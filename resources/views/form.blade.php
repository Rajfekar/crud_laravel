
@include('head')
<!-- 
<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Form has been updated successfully
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>×</span>
    </button>
  </div> -->
  



<div style="padding-left:5em; padding-right:5em;">
<form action="{{url('/')}}/register" method="post">
  @csrf

    <h1 style="text-align:center;">Contact Us </h1>
    <h2> We Love To Hear From You</h2>
    <div class="form-group">
<label for="exampleInputEmail1">Name</label>
<input type="text" id="name" name="name" class="@error('name') is-invalid @enderror form-control">
@error('name')
<span class="alert-danger mt-1 mb-1">{{ $message }}</span>
@enderror
</div>     

<div class="form-group">
<label for="exampleInputEmail1">Mobile No.</label>
<input type="text" id="name" name="mobile" class="@error('mobile') is-invalid @enderror form-control">
@error('mobile')
<span class="alert-danger mt-1 mb-1">{{ $message }}</span>
@enderror
</div>     

<div class="form-group">
<label for="exampleInputEmail1">Email</label>
<input type="email" id="email" name="email" class="@error('email') is-invalid @enderror form-control">
@error('email')
<span class="alert-danger mt-1 mb-1">{{ $message }}</span>
@enderror
</div>    


<div class="form-group">
<label for="exampleInputEmail1">Service</label>
<select type="text" id="service" name="service" class="@error('service') is-invalid @enderror form-control">
 
  <option value="Service 1">Service 1</option>
  <option value="Service 2">Service 2</option>
  <option value="Service 3">Service 3</option>
  <option value="Service 4">Service 4</option>
  <option value="Service 5">Service 5</option>
  <option value="Service 6">Service 6</option>
  </select>

@error('service')

<span class="alert-danger mt-1 mb-1">{{ $message }}</span>
@enderror
</div>     

 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<br><br>
<div class="tableheading">
  <h2 style="text-align: center;">Customer Service Feed Back List</h2>
</div>
<br><br>


<div class="container my-4">
    <table class="table" id="myTable">
      <thead>
        <tr>
          <th scope="col">S.No</th>
          <th scope="col">Name</th>
          <th scope="col">Mobile No.</th>
          <th scope="col">Email</th>
          <th scope="col">Service</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
    @foreach($customers as $customer)

        <tr>
            <th scope='row'>{{$customer->id}}</th>
            <td>{{$customer->name}}</td>
            <td>{{$customer->mobile}}</td>
               <td>{{$customer->email}}</td>
            <td>{{$customer->service}}</td>
            <td> 
            <a href="{{url('/customer/edit/')}}/{{$customer->id}}"><button class='edit btn btn-sm btn-primary' id="edit">Edit</button> </a> 
            <a href="{{url('/customer/delete/')}}/{{$customer->id}}"><button class='delete btn btn-sm btn-danger' id="delete">Delete</button></a> </td>
          </tr>
          @endforeach

      </tbody>
    </table>


</div>




@include('foot')