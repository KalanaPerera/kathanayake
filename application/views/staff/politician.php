<body>
<?php
$this->load->view('template/staffnav');
?>
 <div class="container">
	<div class="container-fluid">
        <h1>Politician Management</h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading panel-heading-gray">Management Panel</div>
                        <div class="panel-body">
                            <form class="form-horizontal" role="form">
                            	<div class="form-group">
                                    <label class="col-sm-3 control-label">Search Politician</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-search"></i></span>
                                            <input type="text" class="form-control" placeholder="Search MP or PM">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Politician Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="" value="Mr Kevin Bevens">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Post</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="" value="Minister of the Education">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Age</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="" value="32">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Key Topics Intrested</label>
                                    <div class="col-sm-9">
                                        <select name="select" multiple class="selectpicker" data-style="btn-white" data-live-search="true" data-size="5">
                                            <option>--Select Category</option>
                                            <option>Agriculture</option>
                                            <option selected="true">Health</option>
                                            <option selected="true">education </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Party</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="" value="ABC Party">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Contact Details</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="" value="0778693245">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Date of Birth</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="" value="11/02/1989">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">School</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="" value="High School">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Undergraduate</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" rows="3">Bsc(Hons) Education</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Post Graduate</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" rows="3">MBA</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Times of elected for the parliment</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="" value="2">
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label class="col-sm-3 control-label">Profile Picture</label>
                                    <div class="col-sm-offset-3 col-sm-9">
                                       <img src="/kathanayake/dist/images/people/110/guy-9.jpg">
                                       <a href="#" class="btn btn-default">Select Images</a>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-9">
                                        <button type="submit" class="btn btn-primary">Add</button>
                                        <button type="submit" class="btn btn-primary">Edit</button>
                                        <button type="submit" class="btn btn-primary">Remove</button>
                                    </div>
                                </div>
                       		</form>
                	</div>
            	</div>
        	</div>
    	</div>
	</div>
 </div>