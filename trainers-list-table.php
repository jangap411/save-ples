<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <!-- table head -->
                
            <?php 
                $userType = $_SESSION['userType'];

                if($userType == 3){
            ?>
                <thead>
                    <tr>
                        <th>Student Name</th>
                        <th>Email</th>
                        <th>Username</th>
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
                        <th>Approve</th>
                    </tr>
                </thead>
                <!-- table footer -->
                <tfoot>
                    <tr>
                        <th>Student Name</th>
                        <th>Email</th>
                        <th>Username</th>
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
                        <th>Approve</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php 
                        require 'src/db-connection.php';
                        $query = mysqli_query($db, "SELECT * FROM `users` WHERE `UserType`=2;") or die(mysqli_error($db));
    			        while($fetch = mysqli_fetch_array($query)){
                    ?>
                    <!-- table body -->
                    <tr>
                        <td><?php echo $fetch['FirstName'].' '.$fetch['LastName']; ?></td>
                        <td><?php echo $fetch['email'] ?></td>
                        <td><?php echo $fetch['username'] ?></td>
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
                        <th>
                            <!-- ./src/server.php?enroll=<?php echo $fetch['CourseID'];?>&std=<?php echo $_SESSION['UserID'];?> -->
                            <a href="./src/server.php?approveTrainer=<?php echo $fetch['UserID'];?>&app=<?php echo $fetch['approvedTrainer'];?>" class="btn btn-primary btn-circle btn-sm">
                                <?php 
                                    $trainerApproveFlag = $fetch['approvedTrainer'];

                                    if($trainerApproveFlag == "0"){
                                ?>
                                    <i class="fas fa-plus-circle" data-toggle="tooltip" data-placement="top" title="Approve"></i>
                                <?php } else {?>
                                    <i class="fas fa-minus-circle" data-toggle="tooltip" data-placement="top" title="Disapprove"></i>
                                <?php } ?>
                            </a>
                        </th>
                    </tr>
                    <?php
    			    }
    		        ?>
                </tbody>
                <!-- else -->
                <?php }else{ ?>
                    <thead>
                    <tr>
                        <th>Student Name</th>
                        <th>Email</th>
                        <th>Username</th>
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
                        <th>Student Name</th>
                        <th>Email</th>
                        <th>Username</th>
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
                        $query = mysqli_query($db, "SELECT * FROM `users` WHERE `UserType`=2;") or die(mysqli_error($db));
    			        while($fetch = mysqli_fetch_array($query)){
                    ?>
                    <!-- table body -->
                    <tr>
                        <td><?php echo $fetch['FirstName'].' '.$fetch['LastName']; ?></td>
                        <td><?php echo $fetch['email'] ?></td>
                        <td><?php echo $fetch['username'] ?></td>
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
                <?php }?>
            </table>
        </div>
    </div>
</div>