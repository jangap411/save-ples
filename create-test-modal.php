<!-- file upload -->
<div class="modal fade" id="createTest" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="./src/server.php" method="post" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Create Test</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                          <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <p>Test Name</p>
                                <input type="hidden" name="course" id="course" value="<?php echo $_SESSION['courseId']; ?>"/>
                                <input
                                    type="text"
                                    class="form-control form-control-user"
                                    id="exam_title"
                                    name="exam_title"
                                    placeholder="Enter Test Name"
                                    required
                                />
                            
                            </div>
                            <div class="col-sm-6">
                               <p><label  for="skillset_id">Skill Set</label></p>
                                <?php 
                                    $skillsetQuery = "SELECT * FROM `Skillsets` WHERE 1;";
                                    $result = mysqli_query($db, $skillsetQuery);

                                    echo '<select class="form-control" id="skillset_id" name="skillset_id">';
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
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <label for="exam_type">Test Type</label>
                            <select
                                class="form-control"
                                id="exam_type"
                                name="exam_type"
                            >
                                <option value="1">Multiple Choice</option>
                                <option value="2">Mix & Match</option>
                                <option value="3">True or False</option>
                            </select>
                        </div>

                        <div class="col-sm-6">
                            <label for="exam_time">Start (date and time):</label>
                            <input class="form-control form-control-user" type="datetime-local" id="exam_time" name="exam_time"/>
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <input type="submit" value="Create" id="create-exam-btn" name="create-exam-btn" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
</div>