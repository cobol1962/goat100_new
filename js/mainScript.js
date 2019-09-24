setTimeout(function() {
  var config = {
    apiKey: "AIzaSyCDW6qVaRS0TwHtu87lSWS8e-7rrs9Xf4Q",
    authDomain: "goat100-aac5b.firebaseapp.com",
    databaseURL: "https://goat100-aac5b.firebaseio.com",
    projectId: "goat100-aac5b",
    storageBucket: "goat100-aac5b.appspot.com",
    messagingSenderId: "211978863857"
  };
  firebase.initializeApp(config);
}, 5000);

$(document).ready(function(){

  $('.modal').modal();
	if (localStorage["user"] !== undefined) {
		loginUser($.parseJSON(localStorage["user"]));
	}
  startAvatar();

});
  // Initialize Firebase

function checkGGlogin(response) {

	console.log(response);
   $.ajax({
		url: "/ajax/loginGG.php",
		type: "POST",
		data: { fbid: response[0].uid },
		dataType: "json",
		success: function(res) {

			if (res["id"] === undefined) {
				$.ajax({
					url:"/ajax/getTranslation.php",
					type: "POST",
					data: { term: "Google account does not exist in InVastor"},
					success:function(res) {
						swal({
							type: "error",
							title: "Error",
							showCancelButton: false,
							text: res
						});
					}
				});

			} else {
				updateDatabase(res);
			}
		}
	});
}
function checkFBlogin(providerData) {

   $.ajax({
		url: "/ajax/loginFB.php",
		type: "POST",
		data: { fbid: providerData[0].uid },
		dataType: "json",
		success: function(res) {

			if (res["id"] === undefined) {
				swal({
					type: "error",
					title: "Error",
					showCancelButton: false,
					text: "Facebook account does not exists in goat100. Please register"
				});

			} else {
				loginUser(res);
			}
		}
	});
}

 $('#images_avatar').on('change', function() {

   		if (this.files[0].size > 10024152) {
   			swal({
   				type: "error",
   				title: "Error",
   				showCancelButton: false,
   				text: "Max allowed size is 1MB"
   			});

   			return false;
   		}

   		var reader = new FileReader();
   		reader.onload = function(e) {

   			$("#picture_container_avatar").hide();
   			$("#croppie_container_avatar").show();
   			$("#setHeader").hide();

   			$image_crop_avatar.croppie('bind', {
   				url: e.target.result
   			}).then(function() {
   				$("#saveAvatar").show();
   				$("#cancelAvatar").show();
   				$("#resetAvatar").hide();
   				$("#setAvatar").hide();
   			});
   		}
   		reader.readAsDataURL(this.files[0]);
   	});
function startAvatar() {

	$image_crop_avatar = $('#upload_avatar').croppie({
		enableExif: true,
		enableResize: false,

		viewport: {
			width: 70,
			height: 70,
			 type: 'circle',
		},
		boundary: {
			width: 200,
			height: 200
		}
	});
}
 function resetAvatar() {
	 var user = $.parseJSON(localStorage.user);
   	$.ajax({
   		url: "/ajax/removeUserAvatar.php",
   		type: "POST",
   		data: {id: user.id},
   		success:function() {
   			$("[profile]").find("img").attr("src","");
			$("[profile]").find("img").hide();
			user.avatar = "";
			$("#picture_avatar").attr("src","");
			localStorage.user = JSON.stringify(user);
   		}
   	});
}
function cancelAvatar() {
   	$("#picture_header").attr("src", sessionStorage.avatar);

   	$("#picture_container_avatar").show();
   	$("#croppie_container_avatar").hide();
   	$("#saveAvatar").hide();
   	$("#cancelAvatar").hide();
   	$("#resetAvatar").show();
   	$("#setAvatar").show();
}
$('#saveAvatar').on('click', function(ev) {
   		 var user = $.parseJSON(localStorage.user);
		$image_crop_avatar.croppie('result', {
			type: 'canvas',
			size: 'original'
		}).then(function(response) {

			$("#picture_avatar").attr("src",response);
			img = response.replace("data:image/png;base64,", "");

			$.ajax({
				url: "/ajax/saveUserAvatar.php",
				type: "POST",
				data: {header: img, id: user.id},
				success: function(res) {
					user.avatar = res;
					localStorage.user = JSON.stringify(user);
					$("#picture_avatar").attr("src",res);
					$("[profile]").find("img").attr("src",res);
					$("[profile]").find("img").show();
				}
			});
			$("#picture_container_avatar").show();
			$("#croppie_container_avatar").hide();

			$("#saveAvatar").hide();
			$("#cancelAvatar").hide();
			$("#resetAvatar").show();
			$("#setAvatar").show();

		});
});

function checkTWlogin(response) {
	console.log(response);
   $.ajax({
		url: "/ajax/loginTW.php",
		type: "POST",
		data: { fbid: response[0].uid },
		dataType: "json",
		success: function(res) {

			if (res["id"] === undefined) {
				$.ajax({
					url:"/ajax/getTranslation.php",
					type: "POST",
					data: { term: "Twitter account does not exist in InVastor"},
					success:function(res) {
						swal({
							type: "error",
							title: "Error",
							showCancelButton: false,
							text: res
						});
					}
				});

			} else {
				updateDatabase(res);
			}
		}
	});
}
function registerTW(providerData) {
	console.log(providerData[0]);
   $.ajax({
		url: "/ajax/registerTW.php",
		type: "POST",
		data: { tw: JSON.stringify(providerData[0]) },
		dataType: "json",
		success: function(res) {

			$("#registerModalForm").modal("close");
			if (res.result.toString().indexOf("error") == -1) {
				swal({
					type: "success",
					title: "Success",
					text: "You can login now using your Twitter account"
				});
			} else {
				swal({
					type: "error",
					title: "error",
					text: res.result.split("#")[1]
				});
			}
		}
	});
}
function registerGG(providerData) {

   $.ajax({
		url: "/ajax/registerGG.php",
		type: "POST",
		data: { gg: JSON.stringify(providerData[0]) },
		dataType: "json",
		success: function(res) {

			$("#registerModalForm").modal("close");
			if (res.result.toString().indexOf("error") == -1) {
				swal({
					type: "success",
					title: "Success",
					text: "You can login now using your Google account"
				});
			} else {
				swal({
					type: "error",
					title: "error",
					text: res.result.split("#")[1]
				});
			}
		}
	});
}
function registerFB(providerData) {

   $.ajax({
		url: "/ajax/registerFB.php",
		type: "POST",
		data: { fb: JSON.stringify(providerData[0]) },
		dataType: "json",
		success: function(res) {

			$("#registerModalForm").modal("close");
			if (res.result.toString().indexOf("error") == -1) {
				swal({
					type: "success",
					title: "Success",
					text: "You can login now using your FB account"
				});
			} else {
				swal({
					type: "error",
					title: "error",
					text: res.result.split("#")[1]
				});
			}
		}
	});
}
function loginEmail() {
	var email = $("#email").val();

	var password = $("#password").val();
	firebase.auth().signInWithEmailAndPassword(email, password).then(function(user) {
		var user = firebase.auth().currentUser;
		console.log(user);
		localStorage.currentUser = JSON.stringify(user);
		if(user && user.emailVerified === false){
			user.sendEmailVerification().then(function(){
				swal({
					type: "info",
					title: "Info",
					text: "Email is not confirmed. Please check your inbox and confirm mail address."
				});
			});
		} else {

			$.ajax({
				url: "/ajax/registerEmail.php",
				type: "POST",
				data: { em: JSON.stringify(user.providerData[0]) },
				dataType: "json",
				success: function(res) {

					$("#loginModal").modal("close");
					loginUser(res);
				}
			});
		}
	}, function(error) {
    // Handle Errors here.
		var errorCode = error.code;
		var errorMessage = error.message;
		swal({
			type: "error",
			title: "error",
			text: errorMessage
		});
	});
}
function registerEmail() {
	var email = $("#email_register").val();
	var password = $("#password_register").val();
	firebase.auth().createUserWithEmailAndPassword(email, password).then(function(user) {
		var user = firebase.auth().currentUser;
			$("#registerModalForm").modal("close");
		if(user && user.emailVerified === false){
			user.sendEmailVerification().then(function(){
				swal({
					type: "info",
					title: "Info",
					text: "Confirmatin email sent. Please confirm email address."
				});
			});
		} else {

			$.ajax({
				url: "/ajax/registerEmail.php",
				type: "POST",
				data: { em: JSON.stringify(user.providerData[0]) },
				dataType: "json",
				success: function(res) {

					$("#registerModalForm").modal("close");
					if (res.result.indexOf("error") == -1) {
						swal({
							type: "success",
							title: "Success",
							text: "You can login now using email/password account"
						});
					} else {
						swal({
							type: "error",
							title: "error",
							text: res.result.split("#")[1]
						});
					}
				}
			});
		}
	}, function(error) {
    // Handle Errors here.
		var errorCode = error.code;
		var errorMessage = error.message;
		swal({
			type: "error",
			title: "error",
			text: errorMessage
		});
	});
}

function loginUser(res) {

	$("#loginModal").modal("close");
	localStorage["user"] = JSON.stringify(res);
	$("[profile]").find("span").html(res.nick);
	$("#inputNick").val(res.nick);
	$("#FirstLastName").val(res.FirstlastName);
	$("#picture_avatar").attr("src",res.avatar);
	if (res.avatar != "") {
		$("[profile]").find("img").show();
		$("[profile]").find("img").attr("src",res.avatar);
	} else {
		$("[profile]").find("img").hide();
	}
	if (res.emailID != "") {
		$("[email]").show();
	} else {
		$("[email]").hide();
	}
	$("[profile]").show();
}
function checkFBlogin(providerData) {

   $.ajax({
		url: "/ajax/loginFB.php",
		type: "POST",
		data: { fbid: providerData[0].uid },
		dataType: "json",
		success: function(res) {
			$("#loginModal").modal("close");
			if (res["id"] === undefined) {

				swal({
					type: "error",
					title: "Error",
					showCancelButton: false,
					text: "Facebook account does not exist in goat100. Please register."
				});

			} else {
				loginUser(res);
			}
		}
	});
}
function checkTWlogin(providerData) {
alert("???");
   $.ajax({
		url: "/ajax/loginTW.php",
		type: "POST",
		data: { twid: providerData[0].uid },
		dataType: "json",
		success: function(res) {
    	$("#loginModal").modal("close");
			if (res["id"] === undefined) {

				swal({
					type: "error",
					title: "Error",
					showCancelButton: false,
					text: "Twitter account does not exist in goat100. Please register."
				});

			} else {
    		loginUser(res);
			}
		}
	});
}
function checkGGlogin(providerData) {
	$("#loginModal").modal("close");
   $.ajax({
		url: "/ajax/loginGG.php",
		type: "POST",
		data: { ggid: providerData[0].uid },
		dataType: "json",
		success: function(res) {

			if (res["id"] === undefined) {

				swal({
					type: "error",
					title: "Error",
					showCancelButton: false,
					text: "Google account does not exist in goat100. Please register."
				});

			} else {
				loginUser(res);
			}
		}
	});
}
function saveProfile() {
	 var user = $.parseJSON(localStorage.user);
	 var currentUser = firebase.auth().currentUser;
	 var upd = {};
	 upd.id = user.id;
	 upd.nick = $("#inputNick").val();

	if (user.emailID != "") {

		if ($("#inputFullName").val().toString().trim() != "") {
			upd.FirstLastName = $("#inputFullName").val();
		}
		if ($("#inputPassword").val().toString().trim() != "") {
			currentUser.updatePassword($("#inputPassword").val().toString().trim()).then(function() {
				swal({
					type: "success",
					title: "Success",
					text: "Profile succesfully changed"
				});
 			}, function(error) {
				swal({
					type: "error",
					title: "Error",
					text: "Login again to change your password."
				});
			});
		}
	}
	$.ajax({
		url: "/ajax/updateUserProfile.php",
		data: upd,
		type: "POST",
		success:function(res) {
			$("[profile]").find("span").html($("#inputNick").val());
			$("#profileForm").modal("close");
			$("#inputNick").val($("#inputNick").val());
			user.nick = $("#inputNick").val();
			user.FirstLastName =  $("#inputFullName").val();
			localStorage.user = JSON.stringify(user);
		}
	});
}
function resetPassword() {
	var auth = firebase.auth();
	var emailAddress = $("#email").val().toString().trim();

	auth.sendPasswordResetEmail(emailAddress).then(function() {
	  swal({
			type: "success",
			title: "Success",
			text: "Email sent. Please follow link from mail to change your password"
	  });
	}).catch(function(error) {
		  swal({
			type: "error",
			title: "Error",
			text: error.message
		  });
	});
}
function vote(what, cardid, artName, addVote) {

  if (localStorage.user === undefined) {
    askRegister();

  }
  var user = $.parseJSON(localStorage["user"]);

  $.ajax({
   url: "/ajax/checkLastVote.php",
   type: "POST",
   data: {
     artistid: cardid,
     userid: user.id
   },
   success: function(res) {
     if (res == "999999999") {
       goVote(what, cardid, artName, addVote, user.id);
     } else  {

       var next = (parseInt(res) + 86400) * 1000;
       if ((new Date().getTime()) > next) {
         goVote(what, cardid, artName, addVote, user.id);
       } else {

         swal({
           type: "error",
           text: "Next like / unlike for " + artName + " is possible " + (new Date(next))
         });
       }
     }
   },
    error: function (request, status, error) {
        alert(request.responseText);
    }
 });
}
function goVote(what, cardid, artName, addVote, userid) {
  swal({
    type: "question",
    text: ((addVote == "1") ? "Like " : "Unlike ") + artName + "?",
    showCancelButton: true
  }).then((result) => {
    if (result.value) {
        $.ajax({
          url: "/ajax/addVote.php",
          type: "POST",
          data: {
            userid: userid,
            artistid: cardid,
            vote: addVote,
            time_vote: parseInt(((new Date()).getTime()) / 1000)
          },
          success: function(res) {
            $.ajax({
              url: "/ajax/updateCardVotes.php",
              type: "POST",
              data: {
                vote: addVote,
                cardid: cardid
              },
              success: function() {
                swal({
                  type: "success",
                  title: "Thank you",
                  html: "<h5>You succesfully <b>" + ((addVote == 1) ? "Liked" : "Unliked") + "</b> " + artName + "</h5>"
                })
              }
            });
          }
        })
      }
    });
}
function askRegister() {
  swal({
    type: "error",
    text: "You are not logged in",
    showCancelButton: true,
    cancelButtonText: "Login",
    confirmButtonText: "Register",
    allowOutsideClick: false,
    allowEsckey: false
  }).then((result) => {
    if (result.value) {
      $("#register").trigger("click");
    } else {
      $("#login").trigger("click");
    }
  })

}
