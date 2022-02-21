<div class="card shadow mb-4">
<div class="card-body">
    <form class="user" action="./src/server.php" method="post">
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <p>Skill Sets</p>
                <input
                    type="text"
                    class="form-control form-control-user"
                    id="skillset"
                    name="skillset"
                    placeholder="Enter Skill Sets"
                    required
                />
            
            </div>
            <div class="col-sm-6">
                <label for="skillDescription" class="small"
                >Skill Set Description</label
                >
                <textarea
                class="form-control"
                id="skillDescription"
                name="skillDescription"
                rows="3"
                ></textarea>
            </div>
        </div>
        
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <p>Roles
                    </p>
                    <?php 
                        // $skillsetQuery = "SELECT DISTINCT `Roles` FROM `Skillsets`;";
                        // $result = mysqli_query($db, $skillsetQuery);
                        
                        // echo '<select class="form-control" id="skillsetRoles" name="skillsetRoless">';
                        // if(mysqli_num_rows($result)>0){
                            
                        //     while($row = mysqli_fetch_assoc($result)){
                        //         // echo ' <option value="{'$row['UserID'}">'{$row['username']}'</option>';
                        //         echo "<option value='{$row['Roles']}'>";
                        //         echo $row['Roles'];
                        //         echo "</option>";
                        //     }
                        // }
                        
                        // echo '</select>';
                        
                    ?>
                    <!-- <a href="#" class="btn btn-info btn-circle btn-sm float-end mt-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Add Skill Set" data-toggle="modal" data-target="#addRole">
                            <i class="fas fa-plus-circle"></i>
                    </a> -->
                     <input
                        type="text"
                        class="form-control form-control-user"
                        id="skillsetRoles"
                        name="skillsetRoles"
                        placeholder="Enter Skill Roles"
                        required
                />
            </div>
            <!-- space available -->
            <div class="col-sm-6">
                <!-- some input here -->
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="hidden" name="trainerId" value="">
            </div>
        </div> 
        <!-- <button
            class="btn btn-primary btn-user btn-block"
            name="add-skillset"
            id="add-skillset"
        >
            Save Skillsets
        </button> -->
    </form>
</div>
</div>

<!-- add Role -->
<div class="modal fade" id="addRole" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="post" enctype="multipart/form-data" id="addSkillsetRole">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add a New Role</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="text" name="role" id="role" class="form-control form-control-user" placeholder="Enter a New Role">
                    <input type="hidden" name="courseID" id="courseID" value="<?php echo $_SESSION['courseId']; ?>">
                    <input type="hidden" name="courseFileType" id="courseFileType" value="video">
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <!-- <a  href="login.html">Save</a> -->
                    <input class="btn btn-primary" type="submit" value="save" name="video-upload-btn" id="video-upload-btn">
                </div>
            <!-- </form> -->
        </div>
    </div>
</div>


<script>
    console.log('script loaded');
   let form = document.querySelector('#addSkillsetRole');
    form.addEventListener('submit',(e)=>{
        e.preventDefault();

        console.log('submit form');
    });

</script>