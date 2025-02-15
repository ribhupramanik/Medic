@include('admin.include.header')

@include('admin.include.sidebar')

@include('admin.include.searchbar')


@include('sweetalert::alert')

<div class="container">
<table class="table table-bordered table-hover">
  <thead class="thead-light">
    <tr align="center">
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Contact</th>
      <th scope="col">Speciality</th>
      <th scope="col">Fee</th>
      <th scope="col">Degree</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($allInfo->all() as $all)
    <tr align = "center">
        <td>{{$all->id}}</td>
        <td>{{$all->name}}</td>
        <td>{{$all->phone}}</td>
        <td>{{$all->speciality}}</td>
        <td>{{$all->fees}}</td>
        <td>{{$all->degree}}</td>
        <td>sd</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

    <a href="{{route('add_doctor')}}">
        <button type="button" class="btn btn-outline-primary position-fixed bottom-0 start-50 translate-middle-x m-3"><i class="fa fa-plus"></i> Add New Doctor</button>
    </a>

    
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

@include('admin.include.logout')


@include('admin.include.footer')