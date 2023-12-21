<?php include "navbar.php"; ?>

<div class="container mt-5 col-md-8">

    <!-- Book an Appointment -->

    <form>
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
                        <option value="accounting">Accounting</option>
                        <option value="department">Department</option>
                        <option value="officialBusiness">Official Business</option>
                        <option value="sao">SAO</option>
                        <option value="faculty">Faculty</option>
                        <option value="securityOffice">Security Office</option>
                    </select>
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

        <!-- Submit Button -->
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-maroon w-100">Submit Form</button>
            </div>
        </div>
    </form>
</div>
</div>