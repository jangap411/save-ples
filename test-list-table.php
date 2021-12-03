<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <!-- table head -->
                <thead>
                    <tr>
                        <th>Test Name</th>
                        <th>Course</th>
                        <th>Skill Sets</th>
                        <th>Start Time</th>
                        <th>Test Type</th>
                        <th>Total Question</th>
                        <th>Duration</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <!-- table footer -->
                <tfoot>
                    <tr>
                        <th>Test Name</th>
                        <th>Course</th>
                        <th>Skill Sets</th>
                        <th>Start Time</th>
                        <th>Text Type</th>
                        <th>Total Question</th>
                        <th>Duration</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php 
                        // require 'src/db-connection.php';
                        $query = mysqli_query($db, "SELECT * FROM `exam_table`, `Skillsets`, `Courses` WHERE `Skillsets`.`SkillID` = `exam_table`.`skillset_id` AND `Courses`.`CourseID` = `exam_table`.`course_id`;") or die(mysqli_error());
    			        while($fetch = mysqli_fetch_array($query)){
                    ?>
                    <!-- table body -->
                    <tr>
                        <td><?php echo $fetch['title'];?></td>
                        <td><?php echo $fetch['CourseName']; ?></td>
                        <td><?php echo $fetch['SkillName']; ?></td>
                        <td><?php echo $fetch['startTime']; ?></td>
                        <!-- <td><?php //echo $fetch['exam_type']; ?></td> -->
                        <td>
                            <?php
                                if($fetch['exam_type'] == '1'){
                                    echo "Multiple Choice";
                                }else if($fetch['exam_type'] == '2'){
                                    echo "Matching";
                                }else{
                                    echo "True or False";
                                }
                            ?>
                        </td>
                        <td>15</td>
                        <td>1hr</td>
                        <td><a href="./src/server.php?manage-exam=<?php echo $fetch['exam_id'];?>">Manage</a></td>
                    </tr>
                    <?php
    			    }
    		        ?>
                </tbody>
            </table>
        </div>
    </div>
</div>