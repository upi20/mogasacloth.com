<!-- MAIN CONTENT -->
<div id="content">

	<!-- row -->
	<div class="row">
		
		<!-- col -->
		<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
			<h1 class="page-title txt-color-blueDark">
				<!-- PAGE HEADER -->
				<i class="fa-fw fa fa-table"></i> 
				
				<?= $title ?>
			</h1>
		</div>
		<!-- end col -->
		
	</div>
	<!-- end row -->
	
	<!--
		The ID "widget-grid" will start to initialize all widgets below 
		You do not need to use widgets if you dont want to. Simply remove 
		the <section></section> and you can use wells or panels instead 
		-->
	
	<!-- widget grid -->
	<section id="widget-grid" class="">
	
		<!-- row -->
		<div class="row">
			
			<!-- NEW WIDGET START -->
			<article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				
				<!-- Widget ID (each widget will need unique ID)-->
				<div class="jarviswidget" id="wid-id-0"
					data-widget-colorbutton="false"
					data-widget-editbutton="false"
					data-widget-deletebutton="false">
					<header>
						<span class="widget-icon"> <i class="fa fa-table"></i> </span>
					</header>
	
					<!-- widget div-->
					<div>
						
						<!-- widget edit box -->
						<div class="jarviswidget-editbox">
							<!-- This area used as dropdown edit box -->
							<input class="form-control" type="text">	
						</div>
						<!-- end widget edit box -->
						
						<!-- widget content -->
						<div class="widget-body">

							<div class="pull-right">
								<!-- <button class="btn btn-success btn-sm" id="tambah">
									<i class="fa fa-plus"></i> Add
								</button> -->
							</div>
				
							<table id="dt_basic" class="table table-striped table-bordered table-hover" width="100%">
								<thead>			                
									<tr>
										<th data-class="expand"><i class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i> Name</th>
										<th data-hide="phone"><i class="fa fa-fw fa-key text-muted hidden-md hidden-sm hidden-xs"></i> Email</th>
										<th data-hide="phone"><i class="fa fa-fw fa-align-justify text-muted hidden-md hidden-sm hidden-xs"></i> Phone</th>
										<!-- <th data-hide="phone"><i class="fa fa-fw fa-star-half-o text-muted hidden-md hidden-sm hidden-xs"></i> Status</th> -->
									</tr>
								</thead>
								<tbody>
									<?php $no=1; foreach($records as $q):?>
									<tr data-id="<?= $q['user_id'] ?>">
										<td><?=$q['user_name']?></td>
										<td><?=$q['user_email']?></td>
										<td><?=$q['user_phone']?></td>
										<!-- <td><?= $q['verified_email']?></td> -->
									</tr>
									<?php endforeach;?>
								</tbody>
							</table>	
						</div>
						<!-- end widget content -->
						
					</div>
					<!-- end widget div -->
					
				</div>
				<!-- end widget -->
	
			</article>
			<!-- WIDGET END -->
			
		</div>
	
		<!-- end row -->
	
		<!-- row -->
	
		<div class="row">
	
			<!-- a blank row to get started -->
			<div class="col-sm-12">
				<!-- your contents here -->
			</div>
				
		</div>
	
		<!-- end row -->
	
	</section>
	<!-- end widget grid -->

</div>
<!-- END MAIN CONTENT -->

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<form id="form">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
						&times;
					</button>
					<h4 class="modal-title" id="myModalLabel"></h4>
				</div>
				<div class="modal-body">
					<input type="hidden" name="id" id="id">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="nama"> Name</label>
								<input type="text" class="form-control" id="name" placeholder="Name" required />
							</div>
						</div>
					</div>
					<div class="row" style="display: none">
						<div class="col-md-12">
							<div class="form-group">
								<label for="nama"> Email</label>
								<input type="text" class="form-control" id="url" placeholder="Url" />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="nama"> Phone</label>
								<input type="text" class="form-control" id="keywords" placeholder="Keywords" required />
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="nama"> Status</label>
								<select class="form-control" required id="status">
									<option value="">--Select Status--</option>
									<option value="1">Active</option>
									<option value="0">Not Active</option>
								</select>
							</div>
						</div>
					</div>
					
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">
						Submit
					</button>
					<button type="button" class="btn btn-danger" data-dismiss="modal">
						Cancel
					</button>
				</div>
			</div><!-- /.modal-content -->
		</form>
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script type="text/javascript">
    let type

    $(() =>
    {
	    // Submit
	    $('#form').submit(ev =>
	    {
	    	ev.preventDefault()

	    	$('#myModal').modal('hide')

	    	let id = $('#id').val()
	    	let name = $('#name').val()
	    	let url = $('#url').val()
	    	let keywords = $('#keywords').val()
	    	let description = $('#description').val()
	    	let status = $('#status').val()

	    	// Add data function
	    	if(type == 'ADD')
	    	{
		    	// Done message add data
	    		$.doneMessage('Add data success.','<?= $title ?>')

		    	// Execute add data
	    		$.ajax({
	    			method: 'post',
	    			url: '<?= base_url ?>admin/catalog-category-create',
	    			data: {
	    				cate_name: name,
	    				cate_url: url,
	    				cate_keywords: keywords,
	    				cate_description: description,
	    				cate_status: status,
	    			}
	    		})
	    		.then(data => JSON.parse(data))
	    		.then(data =>
	    		{
		    		setInterval(() => { location.reload() }, 300)
	    		})
	    	}
	    	// Update data function
	    	else
	    	{
		    	// Done message update data
	    		$.doneMessage('Update data success.','<?= $title ?>')

		    	// Execute update data
	    		$.ajax({
	    			method: 'put',
	    			url: '<?= base_url ?>admin/catalog-category-update',
	    			data: {
	    				cate_id: id,
	    				cate_name: name,
	    				cate_url: url,
	    				cate_keywords: keywords,
	    				cate_description: description,
	    				cate_status: status,
	    			}
	    		})
	    		.then(data => JSON.parse(data))
	    		.then(data =>
	    		{
		    		setInterval(() => { location.reload() }, 300)
	    		})	
	    	}
	    })

    	// Delete Execute Function
    	$('#OkCheck').on('click', ev => 
    	{ 
    		ev.preventDefault()

	    	$('#ModalCheck').modal('hide')
			
			// Done message delete data
    		$.doneMessage('Delete data success.','<?= $title ?>')

    		// Id value
    		let id = $('#idCheck').val()

	    	// Execute delete data
	    	$.ajax({
    			method: 'delete',
    			url: '<?= base_url ?>admin/catalog-category-delete',
    			data: {
    				cate_id: id
    			}
    		})
    		.then(data =>
    		{
		    	setInterval(() => { location.reload() }, 300)
    		})
    	})

    })

	// Add button click
    $('#tambah').on('click', ev =>
    {
    	ev.preventDefault()

    	type = 'ADD'
    	$('#id').val('')
    	$('#name').val('')
    	$('#url').val('')
    	$('#keywords').val('')
    	$('#description').val('')
    	$('#status').val('')
    	$('#myModalLabel').html('Add Data <?= $title ?>')
    	$('#myModal').modal('show')
    })

	// Update button click
    const Update = (id, name, url, keywords, description, status) =>
    {
    	type = 'UPDATE'
    	$('#id').val(id)
    	$('#name').val(name)
    	$('#url').val(url)
    	$('#keywords').val(keywords)
    	$('#description').val(description)
    	$('#status').val(status)
	    $('#myModalLabel').html('Update Data <?= $title ?>')
    	$('#myModal').modal('show')
    }

    // Delete button click
    const Delete = (id) =>
    {
    	$('#LabelCheck').html('Form Delete <?= $title ?>')
    	$('#ContentCheck').html('Are you sure to delete this item ?')
    	$('#ModalCheck').modal('show')
    	$('#idCheck').val(id)
    }
</script>