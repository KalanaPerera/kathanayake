<body>
<?php
$this->load->view('template/politicianNav');
?>
 <div class="container">
 	<div class="row">
 		<div class="col-md-12">
 			<div class="panel panel-default">
                <div class="panel-heading panel-heading-gray">
                  Q and A
                </div>
                
                <table id="data-table" class="table" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Question</th>
                            <th>Answer</th>
                            <th>+</th>
                            <th>-</th>
                            <th>Post Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Question</th>
                            <th>Answer</th>
                            <th>+</th>
                            <th>-</th>
                            <th>Post Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr style="background-color: #62C462;">
                            <td>User 1</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet?</td>
                            <td>Agreculture</td>
                            <td>140</td>
                            <td>14</td>
                            <td>2011/04/25</td>
                            <td>Answered</td>
                            <td>
                                <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a>
                            	<a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                        <tr style="background-color: #EE5F5B;">
                            <td>User 2</td>
                            <td>Lorem ipsum dolor sit amet?</td>
                            <td>Health</td>
                            <td>14</td>
                            <td>14</td>
                            <td>2010/04/25</td>
                            <td>Re-Questioned</td>
                            <td>
                                <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a>
                            	<a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                        <tr style="background-color: #FBB450;">
                            <td>User 3</td>
                            <td>consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing ?</td>
                            <td>Education</td>
                            <td>100</td>
                            <td>14</td>
                            <td>2001/04/25</td>
                            <td>Commented</td>
                            <td>
                                <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a>
                            	<a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                        <tr style="background-color: #62C462;">
                            <td>User 4</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit?</td>
                            <td>Agreculture</td>
                            <td>140</td>
                            <td>14</td>
                            <td>2011/04/25</td>
                            <td>Sucess</td>
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
        <h1>Q and A</h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading panel-heading-gray">Q and A Update</div>
                        <div class="panel-body">
                            <form class="form-horizontal" role="form">
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">QandA ID</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="inputEmail3" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Question</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Answer</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Status</label>
                                    <div class="col-sm-9">
                                        <select name="select" multiple class="selectpicker" data-style="btn-white" data-live-search="true" data-size="5">
                                            <option>--Select Status</option>
                                            <option>Answered</option>
                                            <option>Queued</option>
                                            <option>On Progress</option>
                                            <option>Not Realavant</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-9">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                       		</form>
                	</div>
            	</div>
        	</div>
    	</div>
	</div>
 </div>