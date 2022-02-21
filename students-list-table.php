<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            
            <?php 
                $userType = $_SESSION['userType'];

                if($userType == 3){
            ?>
                <!-- table head -->
                <thead>
                    <tr>
                        <th>Course</th>
                        <th>Student Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>DOB</th>
                        <th>Gender</th>
                        <th>Clan</th>
                        <th>Village</th>
                        <th>District</th>
                        <th>LLG</th>
                        <th>Ward</th>
                        <th>Province</th>
                        <th>Phone #</th>
                        <th>Address</th>
                    </tr>
                </thead>
                <!-- table footer -->
                <tfoot>
                    <tr>
                        <th>Course</th>
                        <th>Student Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>DOB</th>
                        <th>Gender</th>
                        <th>Clan</th>
                        <th>Village</th>
                        <th>District</th>
                        <th>LLG</th>
                        <th>Ward</th>
                        <th>Province</th>
                        <th>Phone #</th>
                        <th>Address</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php 
                        require 'src/db-connection.php';
                        $query = mysqli_query($db, "SELECT * FROM `users`, `enrollment`,`Courses` WHERE `users`.`UserType`=1 AND `users`.`UserID`=`enrollment`.`studentId` AND `courses`.`CourseID`=`enrollment`.`courseID`;") or die(mysqli_error($db));
    			        while($fetch = mysqli_fetch_array($query)){
                    ?>
                    <!-- table body -->
                    <tr>
                        <td><?php echo $fetch['CourseName']; ?></td>
                        <td><?php echo $fetch['FirstName'].' '.$fetch['LastName'] ?></td>
                        <td><?php echo $fetch['username'] ?></td>
                        <td><?php echo $fetch['email'] ?></td>
                        <td><?php echo $fetch['DOB'] ?></td>
                        <td><?php echo $fetch['Gender'] ?></td>
                        <td><?php echo $fetch['Clan'] ?></td>
                        <td><?php echo $fetch['Village'] ?></td>
                        <td><?php echo $fetch['District'] ?></td>
                        <td><?php echo $fetch['LLG'] ?></td>
                        <td><?php echo $fetch['Ward'] ?></td>
                        <td><?php echo $fetch['Province'] ?></td>
                        <td><?php echo $fetch['Phone'] ?></td>
                        <td><?php echo $fetch['Contact'] ?></td>
                    </tr>
                    <?php
    			    }
    		        ?>
                </tbody>
                <?php }else{ ?>
                    <!-- table head -->
                <thead>
                    <tr>
                         <th>Course</th>
                        <th>Student Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>DOB</th>
                        <th>Gender</th>
                    </tr>
                </thead>
                <!-- table footer -->
                <tfoot>
                    <tr>
                         <th>Course</th>
                        <th>Student Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>DOB</th>
                        <th>Gender</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php 
                        require 'src/db-connection.php';
                        $query = mysqli_query($db, "SELECT * FROM `users`, `enrollment`,`Courses` WHERE `users`.`UserType`=1") or die(mysqli_error($db));
    			        while($fetch = mysqli_fetch_array($query)){
                    ?>
                    <!-- table body -->
                    <tr>
                         <td><?php echo $fetch['CourseName']; ?></td>
                        <td><?php echo $fetch['FirstName'].' '.$fetch['LastName'] ?></td>
                        <td><?php echo $fetch['username'] ?></td>
                        <td><?php echo $fetch['email'] ?></td>
                        <td><?php echo $fetch['DOB'] ?></td>
                        <td><?php echo $fetch['Gender'] ?></td>
                    </tr>
                    <?php
    			    }
    		        ?>
                </tbody>
                <?php } ?>
            </table>
        </div>
    </div>
</div>