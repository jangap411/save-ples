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
                        <th>Total Marks</th>
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
                        <th>Total Marks</th>
                        <th>Duration</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php 
                        // require 'src/db-connection.php';
                        $std_id = $_SESSION['UserID'];
                        $query = mysqli_query($db, "SELECT * FROM `enrollment`, `exam_table`, `Courses`, `Skillsets` WHERE `enrollment`.`courseID` = `exam_table`.`course_id` AND `enrollment`.`studentId` = $std_id AND `enrollment`.`courseID` = `Courses`.`CourseID` AND `Skillsets`.`SkillID` = `Courses`.`Skillsets_SkillID`;") or die(mysqli_error());
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
                        <td><?php echo $fetch['total_qustns']; ?></td>
                        <td><?php echo $fetch['total_score']; ?></td>
                        <td><?php echo $fetch['exam_duration']; ?> Minutes</td>
                        <td><a href="./src/server.php?take-exam=<?php echo $fetch['exam_id'];?>&cname=<?php echo $fetch['CourseName'];?>&tname=<?php echo $fetch['title'];?>">Start</a></td>
                    </tr>
                    <?php
    			    }
    		        ?>
                </tbody>
            </table>
        </div>
    </div>
</div>