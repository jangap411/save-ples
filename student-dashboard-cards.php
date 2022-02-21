<?php
    // $total_std = getTotalNumbers();
    $stdId = $_SESSION['UserID'];
    $sqlGetTotalCourseTaken = "SELECT COUNT(`enrollment`.`studentId`) FROM `Courses`,`enrollment`,`users` WHERE `Courses`.`CourseID`=`enrollment`.`courseID` AND `users`.`UserID`=`enrollment`.`studentId` AND `enrollment`.`studentId`=$stdId;";
    $fieldName_courseCount = 'COUNT(`enrollment`.`studentId`)';

    $sqlGetTotalCourses = "SELECT COUNT(`CourseID`) FROM `Courses`;";
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
                        Courses Taken</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                    <?php echo getTotalNumbers($sqlGetTotalCourseTaken,$fieldName_courseCount) ?>
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
                        Total Number of Courses Available</div>
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
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Course Progress
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
                        