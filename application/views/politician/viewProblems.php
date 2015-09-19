<body>
<?php
$this->load->view('template/politicianNav');
?>
 <div class="container">
 	<div class="row">
 		<div class="col-md-12">
 			<div class="panel panel-default">
                <div class="panel-heading panel-heading-gray">
                   Assigned Posts
                </div>
                
                <table id="data-table" class="table" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Post</th>
                            <th>Category</th>
                            <th>+</th>
                            <th>-</th>
                            <th>Post Date</th>
                            <th>Area</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Post</th>
                            <th>Category</th>
                            <th>+</th>
                            <th>-</th>
                            <th>Post Date</th>
                            <th>Area</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr style="background-color: #62C462;">
                            <td>User 1</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
                            <td>Agreculture</td>
                            <td>140</td>
                            <td>14</td>
                            <td>2011/04/25</td>
                            <td>-</td>
                            <td>Reviewed</td>
                            <td>
                                <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a>
                            	<a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                        <tr style="background-color: #EE5F5B;">
                            <td>User 2</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur </td>
                            <td>Health</td>
                            <td>14</td>
                            <td>14</td>
                            <td>2010/04/25</td>
                            <td>Anuradhapura</td>
                            <td>Queued</td>
                            <td>
                                <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a>
                            	<a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                        <tr style="background-color: #FBB450;">
                            <td>User 3</td>
                            <td>consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
                            <td>Education</td>
                            <td>100</td>
                            <td>14</td>
                            <td>2001/04/25</td>
                            <td>Kandy</td>
                            <td>On Progress</td>
                            <td>
                                <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a>
                            	<a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                        <tr style="background-color: #62C462;">
                            <td>User 4</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
                            <td>Agreculture</td>
                            <td>140</td>
                            <td>14</td>
                            <td>2011/04/25</td>
                            <td>-</td>
                            <td>Reviewed</td>
                            <td>
                                <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a>
                            	<a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                     </tbody>
                  </table>
    </div>
 		</div>
 	</div>
	<div class="container-fluid">
        <h1>Problem Status Update</h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading panel-heading-gray">Status Update</div>
                        <div class="panel-body">
                            <form class="form-horizontal" role="form">
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Problem ID</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="inputEmail3" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Content</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Status</label>
                                    <div class="col-sm-9">
                                        <select name="select" multiple class="selectpicker" data-style="btn-white" data-live-search="true" data-size="5">
                                            <option>--Select Status</option>
                                            <option>Reviewed</option>
                                            <option>Queued</option>
                                            <option>On Progress</option>
                                            <option>Final Stages</option>
                                            <option>Completed</option>
                                            <option>Not Realavant</option>
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
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                       		</form>
                	</div>
            	</div>
        	</div>
    	</div>
	</div>
 </div>