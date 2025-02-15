@include('admin.include.header')

@include('admin.include.sidebar')

@include('admin.include.searchbar')


<div class="container">
<form method="post" action="{{route('add_doctor_submit')}}">
    @csrf
  <div class="form-group">
    <label for="name">Name of Doctor</label>
    <input type="text" class="form-control" name="name" placeholder="Enter Doctor Name">
  </div>
  <div class="form-group">
    <label for="degree">Select Doctor Qualification</label>
    <select class="form-control" name="degree">
      <option>MBBS</option>
      <option>MD</option>
      <option>MS</option>
      <option>DM</option>
    </select>
  </div>
  <div class="form-group">
    <label for="specialization">Select Doctor Specialization</label>
    <select class="form-control" name="specialization">
        <option>MBBS</option>
        <option>Cardiac Specialist</option>
        <option>Dermatology</option>
        <option>Gastroenterologist</option>
        <option>Ghynacologist</option>
        <option>Neurologist</option>
    </select>
  </div>
  <div class="form-row">
  <div class="form-group col-md-4">
    <label for="fees">Fees of Doctor</label>
    <input type="number" class="form-control" name="fees" placeholder="Enter Doctor Fees">
  </div>
  <div class="form-group col-md-1"></div>
  <div class="form-group col-md-4">
    <label for="contact">Contact of Doctor</label>
    <input type="text" class="form-control" name="contact" placeholder="Enter Doctor Contact Number">
  </div>
  </div>
  <button type="submit" class="btn btn-outline-success">Submit</button>
</form>
</div>
    
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

@include('admin.include.logout')


@include('admin.include.footer')