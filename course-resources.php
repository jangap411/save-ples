<div class="col-lg-6">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Available Resources</h6>
        </div>
        <div class="card-body">
            <div class="card-body">
                <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <!-- table head -->
            <thead>
                <tr>
                    <th>File Name</th>
                    <th>File Type</th>
                </tr>
            </thead>
            <!-- table footer -->
            <tfoot>
                <tr>
                    <th>File Name</th>
                    <th>File Type</th>
                </tr>
            </tfoot>
            <tbody>
                <?php 

                    $id = $_SESSION['courseId'];
                    require 'src/db-connection.php';
                    $query = mysqli_query($db, "SELECT * FROM `course_files` WHERE `courseID`=$id;") or die(mysqli_error($db));
                    while($fetch = mysqli_fetch_array($query)){
                ?>
                <!-- table body -->
                <tr>
                    <td><a href="./src/server.php?fid=<?php echo $fetch['fileID'];?>"><?php echo $fetch['fileName'];?></a></td>
                    <td><?php echo $fetch['fileType'] ?></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
                </div>
            </div>
            
        </div>
    </div>

</div>
<div class="row">

   


</div>

<!-- modals here -->
<!-- file upload -->
<div class="modal fade" id="fileUploadModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="./src/upload_file.php" method="post" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Upload a file</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                            <input type="file" name="file" id="file">
                            <input type="hidden" name="courseID" id="courseID" value="<?php echo $_SESSION['courseId']; ?>">
                            <input type="hidden" name="courseFileType" id="courseFileType" value="file">
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <input type="submit" value="upload" id="file-upload-btn" name="file-upload-btn" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
</div>

<div class="modal fade" id="videoUploadModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="./src/save_video.php" method="post" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Upload a video</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="file" name="video" id="video">
                        <input type="hidden" name="courseID" id="courseID" value="<?php echo $_SESSION['courseId']; ?>">
                        <input type="hidden" name="courseFileType" id="courseFileType" value="video">
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <!-- <a  href="login.html">Save</a> -->
                        <input class="btn btn-primary" type="submit" value="save" name="video-upload-btn" id="video-upload-btn">
                    </div>
                </form>
            </div>
        </div>
</div>