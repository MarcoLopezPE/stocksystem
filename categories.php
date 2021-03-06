<?php require_once 'includes/header.php'; ?>

<div class="row">
	<div class="col-md-12">
		<ol class="breadcrumb">
			<li><a href="dashboard.php">Home</a></li>
			<li class="active">Category</li>
		</ol>

		<div class="panel panel-default">
			<div class="panel-heading"><i class="fas fa-edit"></i> Manage Categories</div>
			<div class="panel-body">
				<div class="remove-messages"></div>
				
				<div class="div-action pull pull-right" style="padding-bottom: 20px">
					<button class="btn btn-default" data-toggle="modal" id="addCategoriesModalBtn" data-target="#addCategoriesModal"><i class="fas fa-plus-circle"></i> Add Categories</button>
				</div>
				
				<table id="manageCategoriesTable" class="table">
					<thead>
						<tr>
    						<th>Categories Name</th>
    						<th>Status</th>
    						<th>Options</th>
						</tr>
					</thead>
				</table>
			</div>
		</div>

	</div>
</div>

<div id="addCategoriesModal" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title"><i class="fas fa-plus"></i> Add Categories</h4>
			</div>
			<form class="form-horizontal" id="submitCategoriesForm" action="php_action/createCategories.php" method="post">
    			<div class="modal-body">
    					<div class="form-group">
    						<label for="categoriesName" class="col-sm-3 control-label">Categories Name:</label>
    						<div class="col-sm-9">
    							<input type="text" class="form-control" id="categoriesName" name="categoriesName" placeholder="Categories Name">
    						</div>
    					</div>
    					<div class="form-group">
    						<label for="categoriesStatus" class="col-sm-3 control-label">Categories Status:</label>
    						<div class="col-sm-9">
    							<select name="categoriesStatus" id="categoriesStatus" class="form-control">
                                    <option value="">-SELECT-</option>
                                    <option value="1">Available</option>
                                    <option value="2">Not Available</option>
                                </select>
    						</div>
    					</div>
    			</div>
    			<div class="modal-footer">
    				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    				<button type="submit" class="btn btn-primary">Save changes</button>
    			</div>
			</form>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<div id="editCategoriesModal" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title"><i class="fas fa-edit"> Edit Categories</i></h4>
			</div>
			<div class="modal-body">
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<script src="custom/js/categories.js"></script>

<?php require_once 'includes/footer.php'; ?>
