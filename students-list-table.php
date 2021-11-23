<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <!-- table head -->
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
                        $query = mysqli_query($db, "SELECT * FROM `users` WHERE `UserType`=1;") or die(mysqli_error());
    			        while($fetch = mysqli_fetch_array($query)){
                    ?>
                    <!-- table body -->
                    <tr>
                        <td><?php echo $fetch['FirstName'].' '.$fetch['LastName'] ?></td>
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
            </table>
        </div>
    </div>
</div>