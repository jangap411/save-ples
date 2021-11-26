<?php
    // $total_std = getTotalNumbers();
    $sqlGetTotalStudents = "SELECT COUNT(`UserID`) FROM `users` WHERE `UserType`=1;";
    $fieldName_student = 'COUNT(`UserID`)';

    $sqlGetTotalCourses = "SELECT COUNT(`CourseID`) FROM `Courses`";
    $fieldName_courses = 'COUNT(`CourseID`)';

    $sqlGetTotalTrainers = "SELECT COUNT(`UserID`) FROM `users` WHERE `UserType`=2;";
    $fieldName_trainers = 'COUNT(`UserID`)';
?>
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Total Number of Students</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php echo getTotalNumbers($sqlGetTotalStudents,$fieldName_student) ?>
                    </div>
                </div>
                <div class="col-auto">
                    <!-- <i class="fas fa-dollar-sign fa-2x text-gray-300"></i> -->
                   <i class="fas fa-user-graduate fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- courses -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                        Total Number of Courses</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php echo getTotalNumbers($sqlGetTotalCourses,$fieldName_courses) ?>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-book fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Tasks progress -->
 <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks
                    </div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                        </div>
                        <div class="col">
                            <div class="progress progress-sm mr-2">
                                <div class="progress-bar bg-info" role="progressbar"
                                    style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Total number of trainers -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                        Number of Trainers</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php echo getTotalNumbers($sqlGetTotalTrainers,$fieldName_trainers) ?>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-chalkboard-teacher fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>
                        