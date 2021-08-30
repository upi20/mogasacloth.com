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
										<th data-class="expand"><i class="fa fa-fw fa-question text-muted hidden-md hidden-sm hidden-xs"></i> Nama</th>
										<th data-hide="phone"><i class="fa fa-fw fa-align-justify text-muted hidden-md hidden-sm hidden-xs"></i> Link</th>
										<th data-hide="phone"><i class="fa fa-fw fa-thumb-tack text-muted hidden-md hidden-sm hidden-xs"></i>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php $no=1; foreach($records as $q):?>
									<tr data-id="<?= $q['tutr_id'] ?>">
										<td><?=$q['tutr_name']?></td>
										<td><?=$q['tutr_link']?></td>
										<td>
											<div>
												<button class="btn btn-warning btn-sm" onclick="Detail(<?= $q['tutr_id'] ?>, '<?= $q['tutr_name'] ?>', '<?= $q['tutr_link'] ?>')">
													<i class="fa fa-eye"></i> Detail
												</button>
												<button class="btn btn-primary btn-sm" onclick="Update(<?= $q['tutr_id'] ?>, '<?= $q['tutr_name'] ?>', '<?= $q['tutr_link'] ?>')">
													<i class="fa fa-edit"></i> Update
												</button>
												<button class="btn btn-danger btn-sm" onclick="Delete(<?= $q['tutr_id'] ?>)">
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
						<div class="col-md-12">
							<div class="form-group">
								<label for="tanggal">Nama</label>
								<textarea class="form-control" id="nama" placeholder="nama" rows="3" required ></textarea>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="name"> Link</label>
								<textarea class="form-control" id="link" placeholder="link" rows="3" required ></textarea>
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
	    	let nama = $('#nama').val()
	    	let link = $('#link').val()

	    	// Form data append
	        fd.append('tutr_name', nama)
	        fd.append('tutr_link', link)

	    	// Add data function
	    	if(type == 'ADD')
	    	{
		    	// Done message add data
	    		$.doneMessage('Add data success.','<?= $title ?>')

		    	// Execute add data
	    		$.ajax({
	    			method: 'post',
	    			url: '<?= base_url ?>admin/website-tutorial-create',
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

		        fd.append('tutr_id', id)

		    	// Execute update data
	    		$.ajax({
	    			method: 'post',
	    			url: '<?= base_url ?>admin/website-tutorial-update',
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
    			url: '<?= base_url ?>admin/website-tutorial-delete',
    			data: {
    				tutr_id: id
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
    	$('#nama').val('')
    	$('#link').val('')
    	$('#myModalLabel').html('Add Data <?= $title ?>')
    	$('#myModal').modal('show')
    	$('.modal-footer').css('display', 'block')
    })

    // Detail faq
    const Detail = (id, nama, link) =>
    {
    	type = 'UPDATE'
    	$('#id').val(id)
    	$('#nama').val(nama)
    	$('#link').val(link)
	    $('#myModalLabel').html('Detail Data <?= $title ?>')
    	$('#myModal').modal('show')
    	$('.modal-footer').css('display', 'none')
    }

	// Update button click
    const Update = (id, nama, link) =>
    {
    	type = 'UPDATE'
    	$('#id').val(id)
    	$('#nama').val(nama)
    	$('#link').val(link)
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