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
										<th data-class="expand"><i class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i> Kategori</th>
										<th data-class="expand"><i class="fa fa-fw fa-child text-muted hidden-md hidden-sm hidden-xs"></i> Nama Produk</th>
										<th data-class="expand"><i class="fa fa-fw fa-child text-muted hidden-md hidden-sm hidden-xs"></i> Deskripsi</th>
										<th data-hide="phone"><i class="fa fa-fw fa-product-hunt text-muted hidden-md hidden-sm hidden-xs"></i> Stok</th>
										<th data-hide="phone"><i class="fa fa-fw fa-product-hunt text-muted hidden-md hidden-sm hidden-xs"></i> Min Stok</th>
										<th data-hide="phone"><i class="fa fa-fw fa-star-half-o text-muted hidden-md hidden-sm hidden-xs"></i> Status</th>
										<th data-hide="phone"><i class="fa fa-fw fa-thumb-tack text-muted hidden-md hidden-sm hidden-xs"></i>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php $no=1; foreach($records as $q):?>
									<tr data-id="<?= $q['prod_id'] ?>">
										<td><?=$q['cate_name']?></td>
										<td><?=$q['prod_name']?></td>
										<td><?=$q['prod_description']?></td>
										<td><?=$q['prod_stok']?></td>
										<td><?=$q['prod_min_stok']?></td>
										<td><?=$q['prod_status']?></td>
										<td>
											<div>
												<!-- <button class="btn btn-warning btn-sm" onclick="Detail(<?= $q['prod_id'] ?>, <?= $q['prod_cate_id'] ?>, '<?= $q['prod_name'] ?>', '<?= $q['prod_keyword'] ?>', '<?= $q['prod_url'] ?>', '<?= $q['prod_image'] ?>', '<?= $q['prod_size'] ?>', '<?= $q['prod_tags'] ?>', '<?= $q['prod_color'] ?>', '<?= $q['prod_price'] ?>', '<?= $q['prod_stok'] ?>','<?= $q['prod_min_stok'] ?>', '<?= $q['prod_rating'] ?>', `<?= $q['prod_description'] ?>`, '<?= $q['prod_views'] ?>', '<?= $q['prod_upload_by'] ?>', '<?= $q['prod_diskon'] ?>', '<?= $q['prod_status'] ?>')">
													<i class="fa fa-eye"></i> Detail
												</button> -->
												<button class="btn btn-primary btn-sm" onclick="Update(<?= $q['prod_id'] ?>, <?= $q['prod_cate_id'] ?>, '<?= $q['prod_name'] ?>', '<?= $q['prod_keyword'] ?>', '<?= $q['prod_url'] ?>', '<?= $q['prod_image'] ?>', '<?= $q['prod_size'] ?>', '<?= $q['prod_tags'] ?>', '<?= $q['prod_color'] ?>', '<?= $q['prod_price'] ?>', '<?= $q['prod_stok'] ?>', <?= $q['prod_min_stok'] ?>, '<?= $q['prod_rating'] ?>', `<?= $q['prod_description'] ?>`, '<?= $q['prod_views'] ?>', '<?= $q['prod_upload_by'] ?>', '<?= $q['prod_diskon'] ?>', '<?= $q['prod_status'] ?>')">
													<i class="fa fa-edit"></i> Update
												</button>
												<button class="btn btn-danger btn-sm" onclick="Delete(<?= $q['prod_id'] ?>)">
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

<!-- MULTI SELECT -->
<script type="text/javascript" src="<?= base_url ?><?= plugin['select2']['scripts'][0] ?>"></script>
<script type="text/javascript" src="<?= base_url ?><?= plugin['number']['scripts'][0] ?>"></script>

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
								<label for="tanggal">Kategori</label>
								<select class="form-control" name="category" id="category" required>
									<option value="">--Select Categories--</option>
									<?php foreach($category as $p) : ?>
										<option value="<?= $p['cate_id'] ?>"><?= $p['cate_name'] ?></option>
									<?php endforeach; ?>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="tanggal">Name</label>
								<input type="text" id="name" class="form-control" name="name" placeholder="Name" />
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
						<div class="col-md-6">
							<div class="form-group">
								<label for="tanggal">Stok</label>
								<input type="text" id="stok" class="form-control" name="stok" placeholder="Stok" required />
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="tanggal">Minimal Stok</label>
								<input type="text" id="min_stok" class="form-control" name="min_stok" placeholder="Minimal Stok" required />
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="name"> Description</label>
								<textarea class="form-control" id="description" placeholder="Description" rows="3" required ></textarea>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="tanggal">Size</label>
								<select class="form-control" name="size" id="size" required>
									<?php foreach($size as $s) : ?>
										<option value="<?= $s['size_id'] ?>"><?= $s['size_name'] ?></option>
									<?php endforeach; ?>
								</select>
							</div>
						</div>
						<div class="col-md-6">
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
    	// Numberic
    	$('#price').autoNumeric('init')
    	$('#stok').autoNumeric('init')

	    // Submit
	    $('#form').submit(ev =>
	    {
	    	ev.preventDefault()

	    	$('#myModal').modal('hide')

	    	let fd = new FormData()

	    	let id = $('#id').val()
	    	let category = $('#category').val()
	    	let name = $('#name').val()
	    	let size = $('#size').val()
	    	let stok = splitString($('#stok').val(), '.')
	    	let min_stok = splitString($('#min_stok').val(), '.')
	    	let description = $('#description').val()
	    	let status = $('#status').val()
	    	let image = $('#image')[0].files[0]
	    	
	    	// Form data append
	        fd.append('prod_cate_id', category)
	        fd.append('prod_name', name)
	        fd.append('prod_size', size.toString())
	        fd.append('prod_stok', stok)
	        fd.append('prod_min_stok', min_stok)
	        fd.append('prod_description', description)
	        fd.append('prod_status', status)

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
	    			url: '<?= base_url ?>admin/catalog-product-create',
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

		        fd.append('prod_id', id)

		    	// Execute update data
	    		$.ajax({
	    			method: 'post',
	    			url: '<?= base_url ?>admin/catalog-product-update',
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
    			url: '<?= base_url ?>admin/catalog-product-delete',
    			data: {
    				prod_id: id
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
    	$('#category').val('')
		$('#name').val('')
		$('#image').val('')
    	$('#image').prop('required', 'required')
    	$('#image-preview').prop('src', '')
		$('#size').val('')
		$('#stok').val('')
		$('#min_stok').val('')
		$('#description').val('')
		$('#status').val('')
    	$('#myModalLabel').html('Add Data <?= $title ?>')
    	$('#myModal').modal('show')
    	$('.modal-footer').css('display', 'block')
    })

    // Detail Banner
    const Detail = (id, category, name, keyword, url, image, size, tag, color, price, stok, min_stok, rating, description, view, upload_by, diskon, status) =>
    {
    	type = 'UPDATE'
    	$('#id').val(id)
    	$('#category').val(category)
		$('#name').val(name)
		$('#size').val(size)
		$('#stok').val(stok)
		$('#min_stok').val(min_stok)
		$('#description').val(description)
		$('#status').val(status)
    	$('#image').val('')
    	$('#image').prop('required', false)
		$('#image-preview').prop('src', `<?= base_url ?>catalog/product/${image}`)
	    $('#myModalLabel').html('Detail Data <?= $title ?>')
    	$('#myModal').modal('show')
    	$('.modal-footer').css('display', 'none')
    }

	// Update button click
    const Update = (id, category, name, keyword, url, image, size, tag, color, price, stok, min_stok, rating, description, view, upload_by, diskon, status) =>
    {
    	type = 'UPDATE'
    	$('#id').val(id)
    	$('#category').val(category)
		$('#name').val(name)
		$('#size').val(size)
		$('#stok').val(stok)
		$('#min_stok').val(min_stok)
		$('#description').val(description)
		$('#status').val(status)
    	$('#image').val('')
    	$('#image').prop('required', false)
		$('#image-preview').prop('src', `<?= base_url ?>catalog/product/${image}`)
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