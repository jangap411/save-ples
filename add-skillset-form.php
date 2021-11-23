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
                <p>Roles</p>
                <input
                type="text"
                class="form-control form-control-user"
                id="skillsetRoles"
                name="skillsetRoles"
                placeholder="Skill Set Roles"
                />
            </div>
            <div class="col-sm-6">
                <label class="small" for="user-type">Course</label>
                <select
                    class="form-control"
                    id="attempts"
                    name="attempts"
                >
                    <option value="1">Welding</option>
                    <option value="2">Plumbing</option>
                    <option value="3">Painting</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="hidden" name="trainerId" value="">
            </div>
        </div> 
        <button
            class="btn btn-primary btn-user btn-block"
            name="add-skillset"
            id="add-skillset"
        >
            Save Skillsets
        </button>
    </form>
</div>
</div>