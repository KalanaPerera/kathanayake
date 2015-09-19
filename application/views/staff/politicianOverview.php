<body>
<?php
$this->load->view('template/staffnav');
?>
 <div class="container">
 	<div class="row">
 		<div class="col-md-12">
 			<div class="panel panel-default">
                <div class="panel-heading panel-heading-gray">
                    Trending Posts
                </div>
                
                <table id="data-table" class="table" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Post</th>
                            <th>Party</th>
                            <th># of Problems Assigned</th>
                            <th># of Unanswer Questions</th>
                            <th>Current Rank</th>
                            <th>Previous Rank</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Post</th>
                            <th>Party</th>
                            <th># of Problems Assigned</th>
                            <th># of Unanswer Questions</th>
                            <th>Current Rank</th>
                            <th>Previous Rank</th>
                        </tr>
                    </tfoot>
					<tbody>
						<tr>
							<td>Ravi Karunanayaka</td>
							<td>Minister Finance</td>
							<td>UNP</td>
							<td>14</td>
							<td>75</td>
							<td>1</td>
							<td>1</td>
						</tr>
						<tr>
							<td>Anura Kumara Dissanayake</td>
							<td>Member of Parliament</td>
							<td>JVP</td>
							<td>10</td>
							<td>65</td>
							<td>2</td>
							<td>3</td>
						</tr>
						<tr>
							<td>Patali Champika Ranawaka</td>
							<td>Minister Urban Development</td>
							<td>UNP</td>
							<td>7</td>
							<td>45</td>
							<td>3</td>
							<td>2</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>