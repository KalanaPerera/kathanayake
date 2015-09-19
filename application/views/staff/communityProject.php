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
                                            <input type="text" class="form-control" placeholder="Project ID" value="PRO123">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Title</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="inputEmail3" placeholder="Type here.." value="Helping the Little ones......">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Description</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" rows="5">In Mahavilachchiya Area there is a requirment of school accessories...because this village citizens are doing farming as the profession and with very low income. Last Month flood also wash their havest and they really need our help.... this is the time to give them a supportive hand make their lifes better.......Please post the things that you can provide for this good cause.....
                                        Thank You</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Suggest User</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <input type="text" class="form-control" placeholder="Username" value="Bill">
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
                                            <option selected="true">education </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-9">
                                       <img src="/kathanayake/dist/images/schoolchildren2.jpg">
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