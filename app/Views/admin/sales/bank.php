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
										<th data-class="expand"><i class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i> Jenis Bank</th>
										<th data-hide="phone"><i class="fa fa-fw fa-code text-muted hidden-md hidden-sm hidden-xs"></i> Atas Nama</th>
										<th data-hide="phone"><i class="fa fa-fw fa-code text-muted hidden-md hidden-sm hidden-xs"></i> No Rekening</th>
										<th data-hide="phone"><i class="fa fa-fw fa-star-half-o text-muted hidden-md hidden-sm hidden-xs"></i> Status</th>
										<th data-hide="phone"><i class="fa fa-fw fa-thumb-tack text-muted hidden-md hidden-sm hidden-xs"></i>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php $no=1; foreach($records as $q):?>
									<tr data-id="<?= $q['id'] ?>">
										<td><?=$q['jenis_bank']?></td>
										<td><?=$q['atas_nama']?></td>
										<td><?=$q['no_rekening']?></td>
										<td><?=$q['status']?></td>
										<td>
											<button class="btn btn-primary btn-sm" onclick="Update(<?= $q['id'] ?>, '<?= $q['jenis_bank'] ?>', '<?= $q['atas_nama'] ?>', '<?= $q['no_rekening'] ?>', '<?= $q['status'] ?>')">
												<i class="fa fa-edit"></i> Update
											</button>
											<button class="btn btn-danger btn-sm" onclick="Delete(<?= $q['id'] ?>)">
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
								<label for="nama"> Jenis Bank</label>
								<input type="text" class="form-control" id="jenis_bank" placeholder="Jenis Bank" required />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="nama"> Atas Nama</label>
								<input type="text" class="form-control" id="atas_nama" placeholder="Atas Nama" required />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="nama"> No Rekening</label>
								<textarea class="form-control" id="no_rekening" placeholder="No Rekening" required></textarea>
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
	    	let jenis_bank = $('#jenis_bank').val()
	    	let atas_nama = $('#atas_nama').val()
	    	let no_rekening = $('#no_rekening').val()
	    	let status = $('#status').val()

	    	// Add data function
	    	if(type == 'ADD')
	    	{
		    	// Done message add data
	    		$.doneMessage('Add data success.','<?= $title ?>')

		    	// Execute add data
	    		$.ajax({
	    			method: 'post',
	    			url: '<?= base_url ?>admin/sales-bank-method-create',
	    			data: {
	    				jenis_bank: jenis_bank,
	    				atas_nama: atas_nama,
	    				no_rekening: no_rekening,
	    				status: status,
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
	    			url: '<?= base_url ?>admin/sales-bank-method-update',
	    			data: {
	    				id: id,
	    				jenis_bank: jenis_bank,
	    				atas_nama: atas_nama,
	    				no_rekening: no_rekening,
	    				status: status,
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
    			url: '<?= base_url ?>admin/sales-bank-method-delete',
    			data: {
    				id: id
    			}
    		})
    		.then(data =>
    		{
    		    console.log(data)
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
    	$('#jenis_bank').val('')
    	$('#atas_nama').val('')
    	$('#no_rekening').val('')
    	$('#status').val('')
    	$('#myModalLabel').html('Add Data <?= $title ?>')
    	$('#myModal').modal('show')
    })

	// Update button click
    const Update = (id, jenis_bank, atas_nama, no_rekening, status) =>
    {
    	type = 'UPDATE'
    	$('#id').val(id)
    	$('#jenis_bank').val(jenis_bank)
    	$('#atas_nama').val(atas_nama)
    	$('#no_rekening').val(no_rekening)
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