 <body class="">
    
    
    <?php
    
   $this->load->view('template/nav');
    
    
    ?>









<div class="container">
    
    <div class="col-md-4">
        
         <div class="timeline-block">
                <div class="panel panel-default event">
                    <div class="panel-heading title">
                       PM Rankings (latest) 
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item"><i class="fa fa-globe"></i> Miami, FL</li>
                        <li class="list-group-item"><i class="fa fa-calendar-o"></i> 31st Oct 2014</li>
                        <li class="list-group-item"><i class="fa fa-clock-o"></i> 5:50 PM</li>
                        <li class="list-group-item"><i class="fa fa-users"></i> 9 Attendees <a href="#" class="btn btn-primary btn-xs pull-right">Attend</a>
                        </li>
                    </ul>
                 
                    <div class="clearfix"></div>
                </div>
            </div>     
        
        
        
        
        
    </div>

    <div class="col-md-8"><h1>Tables</h1>
        <div class="panel panel-default">
            <div class="panel-heading panel-heading-gray">
                Regular Reponsive Table
            </div>

            <!-- Progress table -->
            <div class="table-responsive">
                <table class="table v-middle">
                    <thead>
                        <tr>
                            <th width="20">
                                <input type="checkbox" name="checkbox" id="checkAll" />
                            </th>
                            <th>Date</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Location</th>
                            <th>Progress</th>
                            <th class="text-right">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <input type="checkbox" />
                            </td>
                            <td> <span class="label label-gray">19/09/2014</span>
                            </td>
                            <td>
                                <img src="images/people/110/guy-5.jpg" width="40" class="img-circle" /> Jonathan Smith</td>
                            <td><a href="#">contact@mosaicpro.biz</a>
                            </td>
                            <td>Miami, FL<a href="#"><i class="fa fa-map-marker fa-fw text-muted"></i></a>
                            </td>
                            <td>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                            </td>
                            <td class="text-right">
                                <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a>
                                <a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" />
                            </td>
                            <td> <span class="label label-primary">19/09/2014</span>
                            </td>
                            <td>
                                <img src="images/people/110/woman-4.jpg" width="40" class="img-circle" /> Michelle Smith</td>
                            <td><a href="#">contact@mosaicpro.biz</a>
                            </td>
                            <td>Amsterdam, EU <a href="#"><i class="fa fa-map-marker fa-fw text-muted"></i></a>
                            </td>
                            <td>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                            </td>
                            <td class="text-right">
                                <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a>
                                <a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- // Progress table -->
            <div class="panel-footer padding-none text-center">
                <ul class="pagination">
                    <li><a href="#">&laquo;</a>
                    </li>
                    <li class="active"><a href="#">1</a>
                    </li>
                    <li><a href="#">2</a>
                    </li>
                    <li><a href="#">3</a>
                    </li>
                    <li><a href="#">4</a>
                    </li>
                    <li><a href="#">5</a>
                    </li>
                    <li><a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    
</div>