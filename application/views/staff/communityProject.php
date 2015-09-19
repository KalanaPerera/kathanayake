<body>
<?php
$this->load->view('template/staffnav');
?>
 <div class="container">
	<div class="container-fluid">
        <h1>New Community Project</h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading panel-heading-gray">Project Template</div>
                        <div class="panel-body">
                            <form class="form-horizontal" role="form">
                            	<div class="form-group">
                                    <label class="col-sm-3 control-label">Community Project ID</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Project ID">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Title</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="inputEmail3" placeholder="Type here..">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Description</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Suggest User</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <input type="text" class="form-control" placeholder="Username">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Category</label>
                                    <div class="col-sm-9">
                                        <select name="select" multiple class="selectpicker" data-style="btn-white" data-live-search="true" data-size="5">
                                            <option>--Select Category</option>
                                            <option>Agriculture</option>
                                            <option>Health</option>
                                            <option>education </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-9">
                                       <a href="#" class="btn btn-default">Select Images</a>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-9">
                                        <button type="submit" class="btn btn-primary">Post</button>
                                    </div>
                                </div>
                       		</form>
                	</div>
            	</div>
        	</div>
    	</div>
	</div>
 </div>