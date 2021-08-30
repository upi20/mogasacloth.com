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
								<button class="btn btn-success btn-sm" id="tambah">
									<i class="fa fa-plus"></i> Add
								</button>
							</div>
				
							<table id="dt_basic" class="table table-striped table-bordered table-hover" width="100%">
								<thead>			                
									<tr>
										<th data-class="expand"><i class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i> Name</th>
										<th data-hide="phone"><i class="fa fa-fw fa-link text-muted hidden-md hidden-sm hidden-xs"></i> Url</th>
										<th data-hide="phone"><i class="fa fa-fw fa-key text-muted hidden-md hidden-sm hidden-xs"></i> Keywords</th>
										<th data-hide="phone"><i class="fa fa-fw fa-align-justify text-muted hidden-md hidden-sm hidden-xs"></i> Description</th>
										<th data-hide="phone"><i class="fa fa-fw fa-star-half-o text-muted hidden-md hidden-sm hidden-xs"></i> Status</th>
										<th data-hide="phone"><i class="fa fa-fw fa-thumb-tack text-muted hidden-md hidden-sm hidden-xs"></i>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php $no=1; foreach($records as $q):?>
									<tr data-id="<?= $q['cate_id'] ?>">
										<td><?=$q['cate_name']?></td>
										<td><?=$q['cate_url']?></td>
										<td><?=$q['cate_keywords']?></td>
										<td><?=$q['cate_description']?></td>
										<td><?=$q['cate_status']?></td>
										<td>
											<button class="btn btn-primary btn-sm" onclick="Update(<?= $q['cate_id'] ?>, '<?= $q['cate_name'] ?>', '<?= $q['cate_url'] ?>', '<?= $q['cate_keywords'] ?>', '<?= $q['cate_image'] ?>','<?= $q['cate_description'] ?>', '<?= $q['cate_status'] ?>')">
												<i class="fa fa-edit"></i> Update
											</button>
											<button class="btn btn-danger btn-sm" onclick="Delete(<?= $q['cate_id'] ?>)">
												<i class="fa fa-trash"></i> Delete
											</button>
										</td>
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
								<input type="text" name="name" class="form-control" id="name" placeholder="Name" required />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="nama"> Url</label>
								<input type="text" name="url" class="form-control" id="url" placeholder="Url" required />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="nama"> Keywords</label>
								<input type="text" name="keywords" class="form-control" id="keywords" placeholder="Keywords" required />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="tanggal">Image</label>
								<input type="file" id="image" class="form-control" name="image" placeholder="Image" accept="image/*" />
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="tanggal">Preview Image</label>
								<br>
								<img src="" id="image-preview" width="50%"> 
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="nama"> Description</label>
								<textarea class="form-control" name="description" id="description" placeholder="Description" rows="3" required></textarea>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="nama"> Status</label>
								<select class="form-control" name="status" required id="status">
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
	// File Review Function
	function readURL(input, id)
    {
        if (input.files && input.files[0]) 
        {
        
            let reader = new FileReader()

            reader.onload = function (e) 
            {
                $(`#${id}`).attr('src', e.target.result)
            }

            reader.readAsDataURL(input.files[0])
        }
    }

    // Split String
    function splitString(stringToSplit, separator) 
    {
	  	var arrayOfStrings = stringToSplit.split(separator)
	  	return arrayOfStrings.join('')
	}

    // On Change Review File
    $("#image").change(function () {
        readURL(this, 'image-preview')
    })

    let type

    $(() =>
    {
	    // Submit
	    $('#form').submit(ev =>
	    {
	    	ev.preventDefault()
	    	let fd = new FormData()

	    	$('#myModal').modal('hide')

	    	let id = $('#id').val()
	    	let name = $('#name').val()
	    	let url = $('#url').val()
	    	let keywords = $('#keywords').val()
	    	let image = $('#image')[0].files[0]
	    	let description = $('#description').val()
	    	let status = $('#status').val()

	    	// Form data append
	        fd.append('cate_name', name)
	        fd.append('cate_url', url)
	        fd.append('cate_keywords', keywords)
	        fd.append('cate_description', description)
	        fd.append('cate_status', status)

	    	// Check if image not change
	        if(image !== undefined)
	        {
	        	fd.append('image', image)
	        }

	    	// Add data function
	    	if(type == 'ADD')
	    	{
		    	// Done message add data
	    		$.doneMessage('Add data success.','<?= $title ?>')

		    	// Execute add data
	    		$.ajax({
	    			method: 'post',
	    			url: '<?= base_url ?>admin/catalog-category-create',
		            data: fd,
		            processData: false,
		            contentType: false,
		            cache: false,
		            async: false,
	    		})
	    		.then(data => JSON.parse(data))
	    		.then(data =>
	    		{
			    	// setInterval(() => { location.reload() }, 300)
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
	    				cate_image: image,
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
    	$('#image').val('')
    	$('#image').prop('required', 'required')
    	$('#image-preview').prop('src', '')
    	$('#description').val('')
    	$('#status').val('')
    	$('#myModalLabel').html('Add Data <?= $title ?>')
    	$('#myModal').modal('show')
    })

	// Update button click
    const Update = (id, name, url, keywords, image, description, status) =>
    {
    	type = 'UPDATE'
    	$('#id').val(id)
    	$('#name').val(name)
    	$('#url').val(url)
    	$('#keywords').val(keywords)
    	$('#description').val(description)
    	$('#status').val(status)
    	$('#image').val('')
    	$('#image').prop('required', false)
		$('#image-preview').prop('src', `<?= base_url ?>catalog/category/${image}`)
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