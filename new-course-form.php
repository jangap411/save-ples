

<div class="card shadow mb-4">
<div class="card-body">
    <form class="user" action="./src/server.php" method="post">
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <p>Course Name</p>
                <input
                type="text"
                class="form-control form-control-user"
                id="courseName"
                name="courseName"
                placeholder="Enter Course Name"
                required
                />
            
            </div>
            <div class="col-sm-6">
                <label for="courseDescrpt" class="small"
                >Course Description</label
                >
                <textarea
                class="form-control"
                id="courseDescrpt"
                name="courseDescrpt"
                rows="3"
                ></textarea>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <p>Date Added</p>
                <input
                type="date"
                class="form-control form-control-user"
                id="addDate"
                name="addDate"
                placeholder="Date"
                required
                />
            </div>
            <div class="col-sm-6">
                <label class="small" for="user-type">Max Test Attempts</label>
                <select
                    class="form-control"
                    id="attempts"
                    name="attempts"
                >
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>
        </div>
        <!-- <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <p>Course File</p>
                <input
                type="file"
                class="form-control form-control-user"
                id="file"
                name="file"
                placeholder="Course File"
                required
                />
            </div>
            <div class="col-sm-6">
                <p>Course Video</p>
                <input
                type="file"
                class="form-control form-control-user"
                id="video"
                name="video"
                placeholder="Course Videos"
                required
                />
            </div>
        </div> -->
    
        <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
        
        </div>
        <div class="col-sm-6">
        </div>
        </div>
        <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0"></div>
        <div class="col-sm-6">
            
        </div>
        </div>
        
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                 <label class="small" for="skillset">Skill Set</label>
                 <?php 
                    $skillsetQuery = "SELECT * FROM `Skillsets` WHERE 1;";
                    $result = mysqli_query($db, $skillsetQuery);

                    echo '<select class="form-control" id="skillset" name="skillset">';
                    if(mysqli_num_rows($result)>0){

                        while($row = mysqli_fetch_assoc($result)){
                            // echo ' <option value="{'$row['UserID'}">'{$row['username']}'</option>';
                            echo "<option value='{$row['SkillID']}'>";
                            echo $row['SkillName'];
                            echo "</option>";
                        }
                    }

                    echo '</select>';

                 ?>
                </select>
            </div>
            <div class="col-sm-6">
                <p>Course Pass Mark</p>
                <input
                type="text"
                class="form-control form-control-user"
                id="passMark"
                name="passMark"
                placeholder="Enter Pass Mark"
                />
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                 <label class="small" for="user-type">Choose Trainer</label>
                 <?php 
                    $trainerQuery = "SELECT * FROM `users` WHERE `UserType`=2;";
                    $result = mysqli_query($db, $trainerQuery);

                    echo '<select class="form-control" id="trainerId" name="trainerId">';
                    if(mysqli_num_rows($result)>0){

                        while($row = mysqli_fetch_assoc($result)){
                            // echo ' <option value="{'$row['UserID'}">'{$row['username']}'</option>';
                            echo "<option value='{$row['UserID']}'>";
                            echo $row['username'];
                            echo "</option>";
                        }
                    }

                    echo '</select>';

                 ?>
                </select>
            </div>
             <div class="col-sm-6">
                <p>Enter Tag</p>
                <input
                type="text"
                class="form-control form-control-user"
                id="tag"
                name="tag"
                placeholder="Enter Tags"
                />
                 <input
                type="hidden"
                class="form-control form-control-user"
                id="approve"
                name="approve"
                value="false"
                />
            </div>
        </div>
        <button
            class="btn btn-primary btn-user btn-block"
            name="btn-register-course"
            id="btn-register-course"
        >
            Register Course
        </button>
    </form>
</div>
</div>