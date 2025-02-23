@include('admin.include.header')
@include('admin.include.sidebar')
@include('admin.include.searchbar')

<div class="container">
    <form method="post" action="{{ route('add_tests_submit') }}">
        @csrf

        <!-- Test Name Input -->
        <div class="form-group">
            <label for="name">Name of Test</label>
            <input type="text" class="form-control" name="test_name" placeholder="Enter Test Name">
        </div>

        <!-- Availability (Days & Time) -->
        <div class="form-group">
            <label class="font-weight-bold">Select Days and Time</label>

            <div class="form-row">
                <div class="col-md-6">
                    @foreach(['Monday', 'Tuesday', 'Wednesday', 'Thursday'] as $day)
                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input" type="checkbox" name="day[{{ $day }}]" value="{{ $day }}">
                            <label class="form-check-label ml-3 w-25">{{ $day }}</label>
                            <div class="d-flex align-items-center w-75">
                                <input type="time" name="time_from[{{ $day }}]" class="form-control w-45">
                                <span class="mx-2">to</span>
                                <input type="time" name="time_to[{{ $day }}]" class="form-control w-45">
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    @foreach(['Friday', 'Saturday', 'Sunday'] as $day)
                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input" type="checkbox" name="day[{{ $day }}]" value="{{ $day }}">
                            <label class="form-check-label ml-3 w-25">{{ $day }}</label>
                            <div class="d-flex align-items-center w-75">
                                <input type="time" name="time_from[{{ $day }}]" class="form-control w-45">
                                <span class="mx-2">to</span>
                                <input type="time" name="time_to[{{ $day }}]" class="form-control w-45">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Price Input -->
        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" class="form-control" name="price" placeholder="Enter Price">
        </div>

        <!-- Requirements Input -->
        <div class="form-group">
            <label for="description">Requirements</label>
            <textarea class="form-control" name="requirements" rows="3"></textarea>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-outline-success">Submit</button>
    </form>
</div>

<!-- Scroll to Top Button -->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

@include('admin.include.logout')
@include('admin.include.footer')
