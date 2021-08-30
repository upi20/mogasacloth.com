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
										<th data-hide="phone"><i class="fa fa-fw fa-align-justify text-muted hidden-md hidden-sm hidden-xs"></i> Content</th>
										<th data-hide="phone"><i class="fa fa-fw fa-file-image-o text-muted hidden-md hidden-sm hidden-xs"></i> Image</th>
										<th data-hide="phone"><i class="fa fa-fw fa-calendar text-muted hidden-md hidden-sm hidden-xs"></i> Date</th>
										<th data-hide="phone"><i class="fa fa-fw fa-star-half-o text-muted hidden-md hidden-sm hidden-xs"></i> Rating</th>
										<th data-hide="phone"><i class="fa fa-fw fa-star-half-o text-muted hidden-md hidden-sm hidden-xs"></i> Status</th>
										<th data-hide="phone"><i class="fa fa-fw fa-thumb-tack text-muted hidden-md hidden-sm hidden-xs"></i>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php $no=1; foreach($records as $q):?>
									<tr data-id="<?= $q['test_id'] ?>">
										<td><?=$q['test_name']?></td>
										<td><?=$q['test_content']?></td>
										<td><?=$q['test_image']?></td>
										<td><?=$q['test_date']?></td>
										<td><?=$q['test_rating']?></td>
										<td><?=$q['test_status']?></td>
										<td>
											<div>
												<button class="btn btn-warning btn-sm" onclick="Detail(<?= $q['test_id'] ?>, '<?= $q['test_name'] ?>', '<?= $q['test_content'] ?>', '<?= $q['test_image'] ?>', '<?= $q['test_date'] ?>', '<?= $q['test_rating'] ?>', '<?= $q['test_status'] ?>')">
													<i class="fa fa-eye"></i> Detail
												</button>
												<button class="btn btn-primary btn-sm" onclick="Update(<?= $q['test_id'] ?>, '<?= $q['test_name'] ?>', '<?= $q['test_content'] ?>', '<?= $q['test_image'] ?>', '<?= $q['test_date'] ?>', '<?= $q['test_rating'] ?>', '<?= $q['test_status'] ?>')">
													<i class="fa fa-edit"></i> Update
												</button>
												<button class="btn btn-danger btn-sm" onclick="Delete(<?= $q['test_id'] ?>)">
													<i class="fa fa-trash"></i> Delete
												</button>
											</div>
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
								<label for="tanggal">Name</label>
								<input type="text" id="name" class="form-control" name="name" placeholder="Name" required />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="tanggal">Date</label>
								<input type="date" id="date" class="form-control" name="date" placeholder="Date" required />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="tanggal">Rating</label>
								<input type="number" id="rating" class="form-control" name="rating" placeholder="Rating" required />
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="name"> Content</label>
								<textarea class="form-control" id="content-data" placeholder="Content" rows="3" required ></textarea>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="name"> Status</label>
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

	    	$('#myModal').modal('hide')

	    	let fd = new FormData()

	    	let id = $('#id').val()
	    	let name = $('#name').val()
	    	let content = $('#content-data').val()
	    	let date = $('#date').val()
	    	let rating = $('#rating').val()
	    	let status = $('#status').val()
	    	let image = $('#image')[0].files[0]

	    	// Form data append
	        fd.append('test_name', name)
	        fd.append('test_content', content)
	        fd.append('test_date', date)
	        fd.append('test_rating', rating)
	        fd.append('test_status', status)

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
	    			url: '<?= base_url ?>admin/website-testimonials-create',
		            data: fd,
		            processData: false,
		            contentType: false,
		            cache: false,
		            async: false,
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

		        fd.append('test_id', id)

		    	// Execute update data
	    		$.ajax({
	    			method: 'post',
	    			url: '<?= base_url ?>admin/website-testimonials-update',
	    			data: fd,
		            processData: false,
		            contentType: false,
		            cache: false,
		            async: false,
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
    			url: '<?= base_url ?>admin/website-testimonials-delete',
    			data: {
    				test_id: id
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
    	$('#date').val('')
    	$('#rating').val('')
    	$('#date').val('')
    	$('#content-data').val('')
    	$('#status').val('')
    	$('#image').val('')
    	$('#image').prop('required', 'required')
    	$('#image-preview').prop('src', '')
    	$('#myModalLabel').html('Add Data <?= $title ?>')
    	$('#myModal').modal('show')
    	$('.modal-footer').css('display', 'block')
    })

    // Detail Banner
    const Detail = (id, name, content, image, date, rating, status) =>
    {
    	type = 'UPDATE'
    	$('#id').val(id)
    	$('#name').val(name)
    	$('#date').val(content)
    	$('#rating').val(rating)
    	$('#date').val(date)
    	$('#content-data').val(content)
    	$('#status').val(status)
    	$('#image').val('')
    	$('#image').prop('required', false)
    	$('#image-preview').prop('src', `<?= base_url ?>website/testimonials/${image}`)
	    $('#myModalLabel').html('Detail Data <?= $title ?>')
    	$('#myModal').modal('show')
    	$('.modal-footer').css('display', 'none')
    }

	// Update button click
    const Update = (id, name, content, image, date, rating, status) =>
    {
    	type = 'UPDATE'
    	$('#id').val(id)
    	$('#name').val(name)
    	$('#date').val(content)
    	$('#rating').val(rating)
    	$('#date').val(date)
    	$('#content-data').val(content)
    	$('#status').val(status)
    	$('#image').val('')
    	$('#image').prop('required', false)
    	$('#image-preview').prop('src', `<?= base_url ?>website/testimonials/${image}`)
	    $('#myModalLabel').html('Update Data <?= $title ?>')
    	$('#myModal').modal('show')
    	$('.modal-footer').css('display', 'block')
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