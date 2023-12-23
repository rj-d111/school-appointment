<?php include "navbar.php"; ?>

<div class="container mt-5 col-md-8">

    <!-- Book an Appointment -->
    <a href="index.php" class="text-dark text-decoration-none">
        <i class="fas fa-chevron-left pe-2 pb-4"></i>Back
    </a>
    <form method="post" action="function.php">
        <!-- Heading 1: Appointment Information -->
        <h3><i class="fas fa-calendar-alt text-maroon"></i> Appointment Information</h3>
        <!-- Dropdown: Select Appointment Type -->
        <div class="row mb-4">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="appointmentType" class="form-label">Select Appointment Type</label>
                    <select class="form-select" id="appointmentType" name="appointmentType" required>
                        <option value="" selected disabled>Select Appointment Type</option>
                        <option value="student">Student</option>
                        <option value="parent">Parent</option>
                        <option value="guest">Guest</option>
                    </select>
                </div>
            </div>


            <!-- Dropdown: Purpose of Visit -->
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="visit" class="form-label">Purpose of Visit</label>
                    <select class="form-select" id="visit" name="visit" required>
                        <option value="" selected disabled>Select Purpose of Visit</option>
                        <option value="Accounting">Accounting</option>
                        <option value="Department">Department</option>
                        <option value="Official Business">Official Business</option>
                        <option value="SAO">SAO</option>
                        <option value="Faculty">Faculty</option>
                        <option value="Security Office">Security Office</option>
                    </select>
                </div>
            </div>

            <!-- Pick a date -->
            <div class="col-md-6">
                <label for="datetimepicker" class="form-label">Select Date</label>
                <div class="input-group date" id="datepicker" data-target-input="nearest">
                    <input type="date" name="selectedDate" class="form-control datetimepicker-input" data-target="#datetimepicker" id="selectedDate" required>
                </div>
            </div>

            <!-- Pick a time -->
            <div class="col-md-6">
                <label for="datetimepicker" class="form-label">Select Time</label>

                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                    <div class="row row-cols row-cols-3 row-cols-md-2 row-cols-lg-3 gy-2">
                        <div class="col">
                            <input type="radio" class="btn-check" name="timeradio" id="btn800" value="8:00" autocomplete="off" required>
                            <label class="btn btn-outline-danger w-100" for="btn800">8:00 AM</label>
                        </div>
                        <div class="col">
                            <input type="radio" class="btn-check" name="timeradio" id="btn830" value="8:30" autocomplete="off">
                            <label class="btn btn-outline-danger w-100" for="btn830">8:30 AM</label>
                        </div>
                        <div class="col">
                            <input type="radio" class="btn-check" name="timeradio" id="btn900" value="9:00" autocomplete="off">
                            <label class="btn btn-outline-danger w-100" for="btn900">9:00 AM</label>
                        </div>
                        <div class="col">
                            <input type="radio" class="btn-check" name="timeradio" id="btn930" value="9:30" autocomplete="off">
                            <label class="btn btn-outline-danger w-100" for="btn930">9:30 AM</label>
                        </div>
                        <div class="col">
                            <input type="radio" class="btn-check" name="timeradio" id="btn1000" value="10:00" autocomplete="off">
                            <label class="btn btn-outline-danger w-100" for="btn1000">10:00 AM</label>
                        </div>
                        <div class="col">
                            <input type="radio" class="btn-check" name="timeradio" id="btn1030" value="10:30" autocomplete="off">
                            <label class="btn btn-outline-danger w-100" for="btn1030">10:30 AM</label>
                        </div>
                        <div class="col">
                            <input type="radio" class="btn-check" name="timeradio" id="btn1100" value="11:00" autocomplete="off">
                            <label class="btn btn-outline-danger w-100" for="btn1100">11:00 AM</label>
                        </div>
                        <div class="col">
                            <input type="radio" class="btn-check" name="timeradio" id="btn1130" value="11:30" autocomplete="off">
                            <label class="btn btn-outline-danger w-100" for="btn1130">11:30 AM</label>
                        </div>
                        <div class="col">
                            <input type="radio" class="btn-check" name="timeradio" id="btn1200" value="12:00" autocomplete="off">
                            <label class="btn btn-outline-danger w-100" for="btn1200">12:00 PM</label>
                        </div>
                        <div class="col">
                            <input type="radio" class="btn-check" name="timeradio" id="btn1230" value="12:30" autocomplete="off">
                            <label class="btn btn-outline-danger w-100" for="btn1230">12:30 PM</label>
                        </div>
                        <div class="col">
                            <input type="radio" class="btn-check" name="timeradio" id="btn100" value="1:00" autocomplete="off">
                            <label class="btn btn-outline-danger w-100" for="btn100">1:00 PM</label>
                        </div>
                        <div class="col">
                            <input type="radio" class="btn-check" name="timeradio" id="btn130" value="1:30" autocomplete="off">
                            <label class="btn btn-outline-danger w-100" for="btn130">1:30 PM</label>
                        </div>
                        <div class="col">
                            <input type="radio" class="btn-check" name="timeradio" id="btn200" value="2:00" autocomplete="off">
                            <label class="btn btn-outline-danger w-100" for="btn200">2:00 PM</label>
                        </div>
                        <div class="col">
                            <input type="radio" class="btn-check" name="timeradio" id="btn230" value="2:30" autocomplete="off">
                            <label class="btn btn-outline-danger w-100" for="btn230">2:30 PM</label>
                        </div>
                        <div class="col">
                            <input type="radio" class="btn-check" name="timeradio" id="btn300" value="3:00" autocomplete="off">
                            <label class="btn btn-outline-danger w-100" for="btn300">3:00 PM</label>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Heading 2: Add your Details -->
        <div class="row mb-4">
            <h3><i class="fas fa-user text-maroon"></i> Add your Details</h3>
            <div class="col-md-6">
                <!-- First Name -->
                <div class="mb-3">
                    <label for="fname" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="fname" name="fname" required>
                </div>
            </div>
            <!-- Last Name -->
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="lname" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="lname" name="lname" required>
                </div>
            </div>

            <!-- Email -->
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
            </div>

            <!-- Phone No. -->
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="text" class="form-control" id="phone" name="phone" required>
                </div>
            </div>

            <!-- Address (Textarea) -->
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <textarea class="form-control" id="address" name="address"></textarea>
                </div>
            </div>

            <!-- Notes (Textarea) -->
            <div class="col-md-6">

                <div class="mb-3">
                    <label for="notes" class="form-label">Notes</label>
                    <textarea class="form-control" id="notes" name="notes" placeholder="Add your special requests"></textarea>
                </div>
            </div>
        </div>


        <!-- Heading 3: Provide additional Information -->
        <section id="add_info" class="d-none">
            <h3><i class="fas fa-info-circle text-maroon"></i> Provide additional Information</h3>
            <div class="row mb-4">
                <div class="col">
                    <!-- Student Number (Shown if "Student" is selected) -->

                    <div class="mb-3" id="studentNumberField">
                        <label for="stud_no" class="form-label">Student Number</label>
                        <input type="text" class="form-control" id="stud_no" name="stud_no" required>
                    </div>
                </div>
            </div>
        </section>

        <!-- Submit Button -->
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-maroon w-100">Submit Form</button>
            </div>
        </div>
    </form>
</div>
</div>

<script src="script/visitor.js"></script>