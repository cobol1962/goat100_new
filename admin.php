<!DOCTYPE html>
<head>
	<?php require($_SERVER["DOCUMENT_ROOT"] . "/include/database.php"); ?>
   <?php require($_SERVER["DOCUMENT_ROOT"] . "/include/css.php"); ?>
   <?php require($_SERVER["DOCUMENT_ROOT"] . "/include/js.php"); ?>
  <script src="http://<?=$_SERVER['SERVER_NAME']?>/js/yacdf.js"></script>
  <style>
  .input-group {
	  width:100%;
  }
  .chosen-single {
	width:300px;
	min-height: 30px;
  }
  </style>
</head>
<body style="background-color:white;">
<div id="fdc">
	<div id="filter_div" style="padding-top:10px;padding-bottom:10px;margin-top:5px;margin-bottom:5px;padding-left:10px;width:100%;background-color:#ecf0f3;">
		<div id="filter_div_0" style="display:none;padding-top:10px;padding-bottom:10px;margin-top:5px;margin-bottom:5px;padding-left:10px;width:100%;background-color:#ecf0f3;"></div>
		<div id="filter_div_1" style="padding-top:10px;padding-bottom:10px;margin-top:5px;margin-bottom:5px;padding-left:10px;width:300px;background-color:#ecf0f3;"></div>
		<div id="filter_div_2" style="padding-top:10px;padding-bottom:10px;margin-top:5px;margin-bottom:5px;padding-left:10px;width:300px;background-color:#ecf0f3;"></div>
	</div>
	 <button class="btn btn-lg btn-primary btn-block" id="login" onclick="addNewCard();" style="width:250px;margin-top:0px;">Add new card</button>
</div>
<table id="cards" class="table table-bordered"   cellspacing="0">

	<thead>
		<tr>
			<th style="width:50px">ID</th>
			<th>Image (click to edit)</th>
			<th>Name</th>
			<th>Category</th>
			<th>Votes</th>
			<th>Admin +-</th>
	   </tr>
	</thead>
</table>
<div id="loginModal" class="modal" style="background:transparent !important;border:none !important;box-shadow:none !important;">

    <div class="modal-content">

      <div class="modal-body">

		<div class="row">
			<div class="col-md-offset-3 col-xs-12 col-sm-6">
			    <form class="omb_loginForm" action="" id="login_form" autocomplete="off" method="POST">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user"></i></span>
						<input type="text" class="form-control" name="username" id="username" placeholder="Username for admin">
					</div>

					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-lock"></i></span>
						<input  type="password" class="form-control" name="password" id="password" placeholder="Password">
					</div>
				</form>

                <button class="btn btn-lg btn-primary btn-block" id="login" onclick="loginAdmin();" style="margin-top:20px;">Login</button>

			</div>
    	</div>

      </div>

    </div>

  </div>

</div>

<div id="cardModal" class="modal" style="background:transparent !important;border:none !important;box-shadow:none !important;">

    <div class="modal-content">

      <div class="modal-body">

		<div class="row">
			<div class="col-md-12">
			    <form class="omb_loginForm" action="" id="card_form" autocomplete="off" method="POST">
					<input type="hidden" id="cardId" />
					<div class="input-group">
						<label for="name" style="font-size:17px;">Name</label>
						<input type="text" class="form-control" style="width:100%;" name="name" id="name" placeholder="Artist name" />
					</div>
					<div class="input-group">
						<div class="row">
							<div class="col-md-4">
								<label for="votes" style="font-size:17px;">Votes</label><br />
								<input type="text" readonly class="form-control" style="width:100%;" id="votes" placeholder="Votes" value="0"/>
							</div>
							<div class="col-md-4">
								<label for="admin" style="font-size:17px;">Admin votes</label><br />
								<input type="text"  class="form-control" style="width:100%;" id="admin" placeholder="Admin votes" value="0"/>
							</div>
							<div class="col-md-4">
								<label for="categories" style="font-size:17px;">Categories</label><br />
								<select class="chosen" multiple  style="width:100%;"  id="categories"></select>
							</div>
						</div>
					</div>
					<div class="input-group">
						<label for="about" style="font-size:17px;">Spotify</label><br />
						<input  class="form-control" style="width:100%;"  id="spotify" />
					</div>
					<div class="input-group">
						<label for="about" style="font-size:17px;">Apple music</label><br />
						<input class="form-control" style="width:100%;"  id="apple" />
					</div>

					<div class="input-group">
						<label for="about" style="font-size:17px;">HTML</label><br />
						<textarea  rows="7" class="form-control" style="width:100%;"  id="html"></textarea>
					</div>

				</form>
				 <div class="row" sty;e="padding:0;margin:0;margin-top:20px;">
						<div class="col-md-4">
							<form style="min-height:180px;max-height:158px;" action="/ajax/saveCardImage.php" style="margin-top:12px;margin-left:20px;" class="" id="uploadCardImages">
								<input id="card_id" type="hidden" name="card_id" />

							</form>
						</div>

						<div class="col-md-8">
							<div style="float:left;display:inline-block;width:100%;min-width:100%;max-width:100%;">
								<div id="uploadCardImagesContainer" style="width:100%;float:left;display:inline-block;margin:20px auto;">
								</div>
							</div>
						</div>
					</div>


			</div>
    	</div>
		<div class="row">
			<div class="col-md-3">
				<button class="btn btn-lg btn-danger btn-block" id="deleteCardButton" onclick="deleteCard();" style="margin-top:20px;">Delete</button>
		   </div>
			<div class="col-md-3">
				<button class="btn btn-lg btn-danger btn-block" id="saveCardButton" onclick="cancelNewCard();" style="margin-top:20px;">Cancel / Close</button>
		   </div>
			<div class="col-md-3">
				<button class="btn btn-lg btn-primary btn-block" id="saveCardButton" onclick="saveCard();" style="margin-top:20px;">Save</button>
		   </div>
	   </div>
      </div>

    </div>

  </div>

</div>

</body>

<script type="text/javascript">

	$(document).ready(function() {

		$('#loginModal').modal({
			dismissible: false
		});
		$('#cardModal').modal({
			dismissible: false
		});
		setTimeout(function() {
			$('#loginModal').modal('open');
		}, 1000);

	});
	function cancelNewCard() {
		if ($("#card_id").val() == "-1") {
			$.ajax({
				url: "/ajax/cancelCardImages.php",
				type: "POST",
				data: {},
				success: function() {
					$('#cardModal').modal('close');
					resetCardInputs();
				}
			});
		} else {
			$('#cardModal').modal('close');
			resetCardInputs();
		}

	}
	function loginAdmin() {
		$.ajax({
			url:"ajax/checkAdminLogin.php",
			data: {username: $("#username").val(), password: $("#password").val() },
			type: "POST",
			success: function(res) {

				if (res.toString().trim() == "1") {
					$('#loginModal').modal('close');
					startEdit();
				}
			}
		});
	}
	var cats = null;
	var catHTML = "";
	$.ajax({
		url: "/ajax/getCategories.php",
		type: "POST",
		dataType: "json",
		success: function(opts) {
			cats = opts;
			$.each(opts, function() {
				catHTML += "<option value='" + this.value + "'>" + this.label + "</option>";
			});
			$("#categories").html(catHTML);
			$("#categories").chosen();
		}
	});
	var first = true;
	function startEdit() {
		$('#cards').DataTable( {
			 buttons: [
				{
					text: 'Add card',
					action: function ( e, dt, node, config ) {
						addCard();
					}
				}
			],
		    "bStateSave": false,
			"processing": true,
			"pageLength": 5,
			"serverSide": true,
			"dom": '<"top"i>rt<"bottom"flp><"clear">',
			"ajax": {
                "url": "/ssp_datatables/cards.php",
                "type": "POST"
            }

		});

		if (first) {

			first = false;
			$.ajax({
				url: "/ajax/getCategories.php",
				type: "POST",
				dataType: "json",
				success: function(opts) {
					$.each(opts, function() {
						this.value = "'" + this.value + "'";
					});
					console.log(opts);
					setTimeout(function() {

						yadcf.init($("#cards").DataTable(), [
							 {
								column_number: 2,
								 filter_type: "text",
								 filter_delay: 500,
								 filter_default_label: 'Type to filter card Name',
								 filter_container_id: 'filter_div_1'
							},
						  {
							 column_number : 3,
							data: opts,
							filter_container_id: 'filter_div_0',
							filter_default_label: 'Select Categpries',
							filter_type: "multi_select",
							filter_reset_button_text: true,
							select_type: 'chosen',
							 select_type_options: {
								no_results_text: 'Can\'t find ->',
								search_contains: true,
								width: '300px'
							}
						 }
						]);
					}, 500);
				}



			});
		}

	/*	CKEDITOR.replace( 'html', {
			customConfig: '/ckeditor/config.js?v=<?=time()?>',
			contentsCss: '/ckeditor/ckeditor.css'
		});*/

		setTimeout(function() {

			startUpload();
		}, 2000);
	}
	function resetCardInputs() {
		$("#categories").chosen().val([]).trigger('chosen:updated');
		$("#name").val("");
		$("#votes").val("0");
		$("#admin").val("0");
		$("#html").val("");

		$("#uploadCardImagesContainer").html("");
	}
	function saveCard() {
		if ($("#categories").val() == "") {
			swal({
				type: "error",
				title: "Error",
				text: "Category is mandatory."
			});
			$('#cardModal').modal('close');
			resetCardInputs();
			return;
		}
		if ($("#name").val() == "") {
			swal({
				type: "error",
				title: "Error",
				text: "Name is mandatory."
			});
			$('#cardModal').modal('close');
			resetCardInputs();
			return;
		}


		if ($("#card_id").val() == "-1") {

			$.ajax({
				url: "/ajax/insertCard.php",
				type:"POST",
				data: {
					"category":  $("#categories").val().join(),
					"name":     $("#name").val(),
					"spotify":  $("#spotify").val(),
					"apple":    $("#apple").val(),
					"OverallVotes": $("#votes").val(),
					"LitRank": $("#admin").val(),
					"html" :  Base64.encode($("#html").val())

				},
				success: function(res) {

					if (res != "0") {
						$.ajax({
							url: "/ajax/updateCardImages.php",
							type:"POST",
							data: {
								"card_id" : res
							},
							success: function() {

								var table = $("#cards").DataTable();
								table.page(table.page.info()["page"]).draw('page');
								resetCardInputs();
								 try {
									$gallery.data('lightGallery').destroy(true);
									$('#cardModal').modal('close');
								} catch(err) {
								}

							}
						});
					} else {
						swal({
							type: "error",
							title: "Error",
							text: "Some data missing. Fill and try again"
						});
					}
				}
			});
		} else {


			$.ajax({
				url: "/ajax/updateCard.php",
				type:"POST",
				data: {
					"id": $("#card_id").val(),
					"category":  $("#categories").val().join(),
					"name":     $("#name").val(),
					"spotify":  $("#spotify").val(),
					"apple":    $("#apple").val(),
					"OverallVotes": $("#votes").val(),
					"LitRank": $("#admin").val(),
					"html" :  Base64.encode($("#html").val())
				},
				success: function(res) {

					$('#cardModal').modal('close');
					resetCardInputs();
					var table = $("#cards").DataTable();
					table.page(table.page.info()["page"]).draw('page');

				}
			});
		}
	}
	function addNewCard() {
		$("#cardId").val("-1");
		$("#card_id").val("-1");
		$('#cardModal').modal('open');
	}
	var uploadPortfolio = null;
	function startUpload() {
		$("#uploadCardImages").addClass("dropzone");
		$("#uploadCardImages").dropzone({
          	maxFilesize: 2, // MB,
			acceptedFiles: "image/jpeg,image/png,image/gif,image/jpg,image/bmp",
            success: function(file,result) {

					  var r = result.split("#")[0];

					 $('#uploadCardImagesContainer').append("<div imgid='" + result.split("#")[1] + "' class='lightGallery'><a  class='galleryHolder' class='gallery align-both' style='background-image:url(" + r.trim() + ");' data-src='" + r.trim() + "'><center><img style='display:none;' src='" + r + "' /></center></a><i onclick='deleteGoodImage(" + result.split("#")[1] + ");' class='fa fa-minus-circle' aria-hidden='true'></i></div>");
						Dropzone.forElement("#uploadCardImages").removeAllFiles(true);
						 reStartGallery();
            },
			error: function(file,errorMessage) {
					 swal({
						  title: 'Error',
						  text: errorMessage,
						  type: 'error',
						  showCancelButton: false
					}).then(function () {
						 drop.removeFile(file);
					});
			}

        });

	//	var myDropzone = new Dropzone("#uploadCardImages");


	}
	$gallery = $('#uploadCardImagesContainer');
	 function reStartGallery() {

        stateAdded = false;
        try {
            $gallery.data('lightGallery').destroy(true);
        } catch(err) {
        }
        var $gg = $gallery.lightGallery({
            selector: "a",
			hash: false,
            enableDrag: true,
            enableSwipe: true,
            share: false
        });
	 }
	 function deleteGoodImage(imgid) {

		swal({
			  title: 'Are you sure?',
				text: "Image will be deleted!. You won't be able to revert this!",
			  type: 'warning',
			  showCancelButton: true,
			  confirmButtonColor: '#3085d6',
			  cancelButtonColor: '#d33',
			  confirmButtonText: 'Yes, delete it!'
			}).then((result) => {
			  if (result.value) {
				$.ajax({
					url: "ajax/deleteCardImage.php",
					type: "POST",
					data: { id:  imgid },
					success:function(r) {

						$("[imgid='" + imgid + "']").remove();

						reStartGallery();
					}
				})
			  }
		})
	}
	function editCard(cardid,source) {
		$("#card_id").val(cardid);

		$.ajax({
			url: "/ajax/getCard.php",
			type: "POST",
			dataType: "json",
			data: {id : cardid },
			success:function(res) {

				var str_array = (res.category).split(',');
				$("#categories").chosen().val(str_array).trigger('chosen:updated');
				$("#name").val(res.name);
			  $("#spotify").val(res.spotify);
			  $("#apple").val(res.apple);
				$("#votes").val(res.OverallVotes);
				$("#admin").val(res.LitRank);
				$("#html").val(Base64.decode(res.html));

				$('#cardModal').modal('open');
				$("#uploadCardImagesContainer").html("");
				$.ajax({
					url: "/ajax/getCardImages.php",
					type: "POST",
					dataType: "json",
					data: { card_id: $("#card_id").val() },
					success: function(res) {

						$.each(res,function() {

							$('#uploadCardImagesContainer').append("<div imgid='" + this.id + "' class='lightGallery'><a  data-src='" + this.image.trim() + "' class='galleryHolder'  style='background-image:url(" + this.image.trim() + ");'><center><img style='display:none;' src='" + this.image + "' /></center></a><i onclick='deleteGoodImage(" + this.id + ");' class='fa fa-minus-circle' aria-hidden='true'></i></div>");
						});
						$gallery = $('#uploadCardImagesContainer');
						reStartGallery();
					}
				});
			}
		});
	}
	function deleteCard() {

		swal({
			  title: 'Are you sure?',
				text: "Card will be deleted!. You won't be able to revert this!",
			  type: 'warning',
			  showCancelButton: true,
			  confirmButtonColor: '#3085d6',
			  cancelButtonColor: '#d33',
			  confirmButtonText: 'Yes, delete it!'
			}).then((result) => {
			  if (result.value) {
				$.ajax({
					url: "ajax/deleteCard.php",
					type: "POST",
					data: { id:  $("#card_id").val() },
					success:function(r) {
						var table = $("#cards").DataTable();
						table.page(table.page.info()["page"]).draw('page');
						resetCardInputs();
						$('#cardModal').modal('close');
					}
				})
			  }
		});
	}
</script>
</html>[
