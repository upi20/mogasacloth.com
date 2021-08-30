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
										<th data-class="expand"><i class="fa fa-fw fa-question text-muted hidden-md hidden-sm hidden-xs"></i> Pertanyaan</th>
										<th data-hide="phone"><i class="fa fa-fw fa-align-justify text-muted hidden-md hidden-sm hidden-xs"></i> Jawaban</th>
										<th data-hide="phone"><i class="fa fa-fw fa-thumb-tack text-muted hidden-md hidden-sm hidden-xs"></i>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php $no=1; foreach($records as $q):?>
									<tr data-id="<?= $q['faq_id'] ?>">
										<td><?=$q['faq_question']?></td>
										<td><?=$q['faq_answer']?></td>
										<td>
											<div>
												<button class="btn btn-warning btn-sm" onclick="Detail(<?= $q['faq_id'] ?>, '<?= $q['faq_question'] ?>', '<?= $q['faq_answer'] ?>')">
													<i class="fa fa-eye"></i> Detail
												</button>
												<button class="btn btn-primary btn-sm" onclick="Update(<?= $q['faq_id'] ?>, '<?= $q['faq_question'] ?>', '<?= $q['faq_answer'] ?>')">
													<i class="fa fa-edit"></i> Update
												</button>
												<button class="btn btn-danger btn-sm" onclick="Delete(<?= $q['faq_id'] ?>)">
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
								<label for="tanggal">Question</label>
								<textarea class="form-control" id="question" placeholder="question" rows="3" required ></textarea>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="name"> Answer</label>
								<textarea class="form-control" id="answer" placeholder="answer" rows="3" required ></textarea>
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
	    	let question = $('#question').val()
	    	let answer = $('#answer').val()

	    	// Form data append
	        fd.append('faq_question', question)
	        fd.append('faq_answer', answer)

	    	// Add data function
	    	if(type == 'ADD')
	    	{
		    	// Done message add data
	    		$.doneMessage('Add data success.','<?= $title ?>')

		    	// Execute add data
	    		$.ajax({
	    			method: 'post',
	    			url: '<?= base_url ?>admin/website-faq-create',
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

		        fd.append('faq_id', id)

		    	// Execute update data
	    		$.ajax({
	    			method: 'post',
	    			url: '<?= base_url ?>admin/website-faq-update',
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
    			url: '<?= base_url ?>admin/website-faq-delete',
    			data: {
    				faq_id: id
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
    	$('#question').val('')
    	$('#answer').val('')
    	$('#myModalLabel').html('Add Data <?= $title ?>')
    	$('#myModal').modal('show')
    	$('.modal-footer').css('display', 'block')
    })

    // Detail faq
    const Detail = (id, question, answer) =>
    {
    	type = 'UPDATE'
    	$('#id').val(id)
    	$('#question').val(question)
    	$('#answer').val(answer)
	    $('#myModalLabel').html('Detail Data <?= $title ?>')
    	$('#myModal').modal('show')
    	$('.modal-footer').css('display', 'none')
    }

	// Update button click
    const Update = (id, question, answer) =>
    {
    	type = 'UPDATE'
    	$('#id').val(id)
    	$('#question').val(question)
    	$('#answer').val(answer)
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