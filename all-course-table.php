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
                        <th>Date Added</th>
                        <th>Pass Mark</th>
                        <th>Max Attempts</th>
                        <th>Tags</th>
                        <th>Approved</th>
                        <th colspan="3">Action</th>
                    </tr>
                </thead>
                <!-- table footer -->
                <tfoot>
                    <tr>
                        <th>Course Name</th>
                        <th>Description</th>
                        <th>Trainer</th>
                        <th>Date Added</th>
                        <th>Pass Mark</th>
                        <th>Max Attempts</th>
                        <th>Tags</th>
                        <th>Approved</th>
                        <th colspan="3">Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    <!-- table body -->
                    <?php
                        require 'src/db-connection.php';

                        $query = mysqli_query($db, "SELECT * FROM `Courses` ORDER BY `CourseID` ASC;") or die(mysqli_error());
    			        while($fetch = mysqli_fetch_array($query)){
                    ?>
                    <tr>
                        <td><?php echo $fetch['CourseName']?> </td>
                        <td><?php echo $fetch['Course_description']?></td>
                        <td><?php echo $fetch['TrainerID']?></td>
                        <td><?php echo $fetch['DateAAdded']?></td>
                        <td><?php echo $fetch['PassMark']?></td>
                        <td><?php echo $fetch['MaxAttempts']?></td>
                        <td><?php echo $fetch['Tag']?></td>
                        <td><?php echo $fetch['approved']?></td>
                        <td>
                            <a href="./src/server.php?approve=<?php echo $fetch['CourseID']?>&skillID=<?php echo $fetch['Skillsets_SkillID'];?>" class="btn btn-success btn-circle btn-sm" data-toggle="tooltip" data-placement="top" title="Approve">
                                <i class="fas fa-check"></i>
                            </a>
                        </td>
                        <td>
                            <a href="#" class="btn btn-danger btn-circle btn-sm" data-toggle="tooltip" data-placement="top" title="Remove">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                        <td>

                            <a class="btn btn-info btn-circle btn-sm" href="./src/server.php?course=<?php echo $fetch['CourseID'];?>" data-toggle="tooltip" data-placement="top" title="Manage">
                                <i class="fas fa-cogs fa-sm fa-fw"></i>
                            </a>
                        </td>
                    </tr>
                    <?php
    			        }
    		        ?>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>