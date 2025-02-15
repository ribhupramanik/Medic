@include('admin.include.header')
@include('admin.include.sidebar')
@include('admin.include.searchbar')

<div class="container">
    <form method="post" action="{{ route('add_doctor_timing_submit') }}">
        @csrf

        <!-- Doctor Name Input -->
        <div class="form-group">
            <label for="name">Name of Doctor</label>
            <select class="form-control" name="doctor_name">
                @foreach($allInfo->all() as $all)
                    <option value="{{ $all->name }}">{{ $all->name }}</option>
                @endforeach
            </select>
        </div>

        <!-- Doctor Availability (Days & Time) -->
        <div class="form-group">
            <label class="font-weight-bold">Select Doctor Days and Time</label>

            <div class="form-row">
                <div class="col-md-4">
                    <div class="form-check d-flex align-items-center mb-3">
                        <input class="form-check-input" type="checkbox" name="day[Monday]" value="Monday">
                        <label class="form-check-label ml-3 w-25">Monday</label>
                        <input type="time" name="time[Monday]" class="form-control ml-auto w-50">
                    </div>

                    <div class="form-check d-flex align-items-center mb-3">
                        <input class="form-check-input" type="checkbox" name="day[Tuesday]" value="Tuesday">
                        <label class="form-check-label ml-3 w-25">Tuesday</label>
                        <input type="time" name="time[Tuesday]" class="form-control ml-auto w-50">
                    </div>

                    <div class="form-check d-flex align-items-center mb-3">
                        <input class="form-check-input" type="checkbox" name="day[Wednesday]" value="Wednesday">
                        <label class="form-check-label ml-3 w-25">Wednesday</label>
                        <input type="time" name="time[Wednesday]" class="form-control ml-auto w-50">
                    </div>

                    <div class="form-check d-flex align-items-center mb-3">
                        <input class="form-check-input" type="checkbox" name="day[Thursday]" value="Thursday">
                        <label class="form-check-label ml-3 w-25">Thursday</label>
                        <input type="time" name="time[Thursday]" class="form-control ml-auto w-50">
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-4">
                    <div class="form-check d-flex align-items-center mb-3">
                        <input class="form-check-input" type="checkbox" name="day[Friday]" value="Friday">
                        <label class="form-check-label ml-3 w-25">Friday</label>
                        <input type="time" name="time[Friday]" class="form-control ml-auto w-50">
                    </div>

                    <div class="form-check d-flex align-items-center mb-3">
                        <input class="form-check-input" type="checkbox" name="day[Saturday]" value="Saturday">
                        <label class="form-check-label ml-3 w-25">Saturday</label>
                        <input type="time" name="time[Saturday]" class="form-control ml-auto w-50">
                    </div>

                    <div class="form-check d-flex align-items-center mb-3">
                        <input class="form-check-input" type="checkbox" name="day[Sunday]" value="Sunday">
                        <label class="form-check-label ml-3 w-25">Sunday</label>
                        <input type="time" name="time[Sunday]" class="form-control ml-auto w-50">
                    </div>
                </div>
            </div>
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
