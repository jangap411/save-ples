<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <!-- table head -->
                <thead>
                    <tr>
                        <th>Course Name</th>
                        <th>Description</th>
                        <th>Skill Sets</th>
                        <th>Trainer</th>
                        <th>Pass Mark</th>
                        <th>Max Attempts</th>
                    </tr>
                </thead>
                <!-- table footer -->
                <tfoot>
                    <tr>
                        <th>Course Name</th>
                        <th>Description</th>
                        <th>Skill Sets</th>
                        <th>Trainer</th>
                        <th>Pass Mark</th>
                        <th>Max Attempts</th>
                    </tr>
                </tfoot>
                <tbody>
                    <!-- table body -->
                    <!-- SELECT * FROM `Courses`,`enrollment`,`users` WHERE `Courses`.`CourseID`=`enrollment`.`courseID` AND `users`.`UserID`=`enrollment`.`studentId` AND `enrollment`.`studentId`=1; -->
                    <?php
                        $id = $_SESSION['UserID'];
                        require 'src/db-connection.php';

                        $query = mysqli_query($db, "SELECT * FROM `Courses`,`enrollment`,`users` WHERE `Courses`.`CourseID`=`enrollment`.`courseID` AND `users`.`UserID`=`enrollment`.`studentId` AND `enrollment`.`studentId`=$id;") or die(mysqli_error());
    			        while($fetch = mysqli_fetch_array($query)){
                    ?>
                    <tr>
                        <td><a href="./src/server.php?mycourse=<?php echo $fetch['CourseID'];?>&name=<?php echo $fetch['CourseName']?>"><?php echo $fetch['CourseName']?></a></td>
                        <td><?php echo $fetch['Course_description']?></td>
                        <td><?php echo $fetch['Skillsets_SkillID']?></td>
                        <td><?php echo $fetch['TrainerID']?></td>
                        <td><?php echo $fetch['PassMark']?></td>
                        <td><?php echo $fetch['MaxAttempts']?></td>
                    </tr>
                    <?php
    			        }
    		        ?>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>