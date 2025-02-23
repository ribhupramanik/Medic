@include('admin.include.header')

@include('admin.include.sidebar')

@include('admin.include.searchbar')

@include('sweetalert::alert')

<div class="container">
    <table class="table table-bordered table-hover">
        <thead class="thead-light">
            <tr align="center">
                <th scope="col">#</th>
                <th scope="col">Test Name</th>
                <th scope="col">Availability (Day & Time)</th>
                <th scope="col">Fees</th>
                <th scope="col">Requirements</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($test_info as $all)
            <tr align="center">
                <td>{{ $all->id }}</td>
                <td>{{ $all->name }}</td>
                <td>
                    @php
                        $days = explode(',', $all->Day);
                        $time_from = explode(',', $all->time_from);
                        $time_to = explode(',', $all->time_to);
                    @endphp

                    @foreach($days as $index => $day)
                        <div>
                            {{ $day }}: 
                            {{ $time_from[$index] ?? '--' }} to {{ $time_to[$index] ?? '--' }}
                        </div>
                    @endforeach
                </td>
                <td>{{ $all->Fees }}</td>
                <td>{{ $all->Requirements }}</td>
                <td> <!-- Add Edit & Delete buttons here --> </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<a href="{{ route('view_add_tests') }}">
    <button type="button" class="btn btn-outline-primary position-fixed bottom-0 start-50 translate-middle-x m-3">
        <i class="fa fa-plus"></i> Add New Test
    </button>
</a>

<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

@include('admin.include.logout')

@include('admin.include.footer')
