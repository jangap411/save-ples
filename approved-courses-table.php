<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <!-- table head -->
                <thead>
                    <tr>
                        <th>Course Name</th>
                        <th>Description</th>
                        <th>Trainer</th>
                        <th>Pass Mark</th>
                        <th>Tag</th>
                        <th>Max Attempts</th>
                        <th>Skill Sets</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <!-- table footer -->
                <tfoot>
                    <tr>
                        <th>Course Name</th>
                        <th>Description</th>
                        <th>Trainer</th>
                        <th>Pass Mark</th>
                        <th>Tag</th>
                        <th>Max Attempts</th>
                        <th>Skill Sets</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    <!-- table body -->
                    <?php
                        require 'src/db-connection.php';

                        $query = mysqli_query($db, "SELECT * FROM `Courses` WHERE `approved`='true';") or die(mysqli_error());
    			        while($fetch = mysqli_fetch_array($query)){
                    ?>
                    <tr>
                        <td><?php echo $fetch['CourseName']?> </td>
                        <td><?php echo $fetch['Course_description']?></td>
                        <td><?php echo $fetch['TrainerID']?></td>
                        <td><?php echo $fetch['PassMark']?></td>
                        <td><?php echo $fetch['Tag']?></td>
                        <td><?php echo $fetch['MaxAttempts']?></td>
                        <td><?php echo $fetch['Skillsets_SkillID']?></td>
                        <td>
                            <a href="./src/server.php?enroll=<?php echo $fetch['CourseID'];?>&std=<?php echo $_SESSION['UserID'];?>" class="btn btn-success btn-circle btn-sm" data-toggle="tooltip" data-placement="top" title="Enroll">
                                <i class="fas fa-plus-circle"></i>
                            </a>
                        </td>
                    </tr>
                    <?php
    			        }
    		        ?>
            </table>
        </div>
    </div>
</div>