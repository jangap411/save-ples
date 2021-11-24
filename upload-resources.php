<div class="row">

    <div class="col-lg-6">

        <!-- Circle Buttons -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Upload New Resourses for: <?php echo $_SESSION['courseName']; ?></h6>
            </div>
            <div class="card-body">
                <p>Use Font Awesome Icons (included with this theme package) along with the circle
                    buttons as shown in the examples below!</p>
                <!-- Circle Buttons (Default) -->
                <div class="mb-2">
                    
                </div>
                    <a href="#" class="btn btn-primary btn-icon-split" data-toggle="modal" data-target="#fileUploadModal">
                    <span class="icon text-white-50">
                        <i class="fas fa-file-pdf"></i>
                    </span>
                    <span class="text">Upload Course File</span>
                </a>
                <div class="my-2"></div>
                <a href="#" class="btn btn-info btn-icon-split" data-toggle="modal" data-target="#videoUploadModal">
                    <span class="icon text-white-50">
                        <i class="fas fa-video"></i>
                    </span>
                    <span class="text">Upload Course Video</span>
                </a>
            </div>
        </div>
    </div>

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
                        <th>Action</th>
                    </tr>
                </thead>
                <!-- table footer -->
                <tfoot>
                    <tr>
                        <th>File Name</th>
                        <th>File Type</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php 

                        $id = $_SESSION['courseId'];
                        require 'src/db-connection.php';
                        $query = mysqli_query($db, "SELECT * FROM `course_files` WHERE `courseID`=$id;") or die(mysqli_error());
    			        while($fetch = mysqli_fetch_array($query)){
                    ?>
                    <!-- table body href="./src/server.php?del_cfile=<?php //echo $fetch['fileID'];?>" -->
                    <tr>
                        <td><a href="./src/server.php?fileid=<?php echo $fetch['fileID'];?>"><?php echo $fetch['fileName'];?></a></td>
                        <td><?php echo $fetch['fileType'] ?></td>
                        <td>
                            <a onClick="delFile(<?php echo $fetch['fileID'];?>)" class="btn btn-danger btn-circle btn-sm" data-toggle="tooltip" data-placement="top" title="Delete">
                                <i class="fas fa-trash"></i>
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
        </div>

    </div>

</div>
<script>
    function delFile(id){
        
        let isConfirm = confirm('Are you sure you want to delete?');

        if(isConfirm){
            // let xhr = new XMLHttpRequest();
            // xhr.ope

            window.location = `./src/server.php?del_cfile=${id}`;
        }

    }
</script>

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