@include('admin.include.header')

@include('admin.include.sidebar')

@include('admin.include.searchbar')

@include('sweetalert::alert')

<div class="container">

    <table class="table table-bordered table-hover">
        <thead class="thead-light">
            <tr align="center">
                <th scope="col">#</th>
                <th scope="col">Doctor Name</th>
                <th scope="col">Day</th>
                <th scope="col">Time</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($doctor_time as $all)
            <tr align = "center">
                <td>{{$all->id}}</td>
                <td>{{$all->doctor_name}}</td>
                <td>{{ str_replace(',', ', ', $all->day) }}</td> 
                <td>{{ str_replace(',', ', ', $all->timing) }}</td>
                <td>sd</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<a href="{{route('add_doctor_timing')}}">
        <button type="button" class="btn btn-outline-primary position-fixed bottom-0 start-50 translate-middle-x m-3"><i class="fa fa-plus"></i> Add New Doctor Timing</button>
    </a>

<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

@include('admin.include.logout')


@include('admin.include.footer')