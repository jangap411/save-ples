<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
            <!-- <i class="fas fa-laugh-wink"></i> -->
            <i class="fas fa-graduation-cap"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SAVE PLES <sup>+</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Student 
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <!-- <i class="fas fa-fw fa-cog"></i> -->
            <i class="fas fa-book"></i>
            <span>Courses</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <!-- <h6 class="collapse-header">Custom Components:</h6> -->
                <a class="collapse-item" href="addCourse.php">Add Course</a>
                <a class="collapse-item" href="see-courses.php">View All Course</a>
            </div>
        </div>
    </li>
    <!-- schools -->
        <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSchools"
            aria-expanded="true" aria-controls="collapseSchools">
            <!-- <i class="fas fa-fw fa-cog"></i> -->
            <i class="fas fa-book"></i>
            <span>Schools</span>
        </a>
        <div id="collapseSchools" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <!-- <h6 class="collapse-header">Custom Components:</h6> -->
                <a  class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSchools1"
            aria-expanded="true" aria-controls="collapseSchools1">
                    <span>School Of Humanities</span>
                </a>
                <div id="collapseSchools1" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <a class="collapse-item" href="#">Course 1</a>
                </div>
                <a class="collapse-item" href="#">School of Sciences</a>
                <a class="collapse-item" href="#">School of Business</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <!-- <i class="fas fa-fw fa-wrench"></i> -->
            <i class="fas fa-user-graduate"></i>
            <span>Student</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Student Modules:</h6>
                <a class="collapse-item" href="registered-student-list.php">Registered Students</a>
                <a class="collapse-item" href="#">Assessment Results</a>
                <!-- <a class="collapse-item" href="#">Animations</a>
                <a class="collapse-item" href="#">Other</a> -->
            </div>
        </div>
    </li>
    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="add-skill-sets.php">
            <i class="fas fa-toolbox"></i>
            <span>Add Skill Sets</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link" href="tests-list.php">
            <!-- <i class="fas fa-toolbox"></i> -->
            <i class="fas fa-vial"></i>
            <span>Tests</span></a>
    </li>
    <!-- divider -->
    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading">
        Trainer
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
            aria-controls="collapsePages">
            <!-- <i class="fas fa-fw fa-folder"></i> -->
            <i class="fas fa-chalkboard-teacher"></i>
            <span>Trainers</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Manage Trainers</h6>
                <a class="collapse-item" href="trainers.php">Trainer List</a>
                <a class="collapse-item" href="#">Add New Trainer</a>
                <!-- <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Other Pages:</h6>
                <a class="collapse-item" href="404.html">404 Page</a>
                <a class="collapse-item" href="blank.html">Blank Page</a> -->
            </div>
        </div>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>