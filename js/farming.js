$(document).ready(function() {

  	console.log("farming script entered");

	window.onscroll = function() {
		myFunction()
	};
	var navbar = document.getElementById("navbar");
	var sticky = navbar.offsetTop;
	function myFunction() {
	  if (window.pageYOffset != sticky) {
	    navbar.classList.add("fixed");
	  } else {
	    navbar.classList.remove("fixed");
	  }
	}


	$('.btnAddCartAction').click(function() 
	{
	    // console.log("btn clcked");
	    var id = $(this).attr("data-id");
	    var form_name = ".addcartfrom_"+id;
	    var postData = $(form_name).serializeArray();
	    // console.log(postData);
	    if(postData) 
	    {
		    $.ajax({
		    	type: 'POST',
		    	url: 'ad_min/ajax.php',
		    	data: postData,
		    	success: function(jsonData) {
		      		console.log(jsonData);
		          var response = $.parseJSON(jsonData);
		          if (response.success) {
		          	var count = response.sess_count;
		          	var data = response.sess_data;
		          	var total = 0;

	          		var dataHidden = $('#dataHidden');
	          		var dataShow = $('#dataShow');
	          		dataHidden.html('');
	          		dataShow.html('');

		          	$.each(data, function(key, element) {
		          		var pro_name = element.pro_name;
		          		var pro_price = element.pro_price;
		          		var quantity = element.quantity;
		          		var quantity = element.quantity;
		          		total += pro_price*quantity;
		          		dataHidden.append('<input type="hidden" name="cart_pro_name[]" value="'+pro_name+'"> <input type="hidden" name="cart_pro_quantity[]" value="'+quantity+'"> <input type="hidden" name="cart_pro_price[]" value="'+pro_price+'"> <input type="hidden" name="cart_item_total[]" value="'+total+'">');
		          		dataShow.append('<tr> <td><strong>'+pro_name+'</strong></td> <td>'+quantity+'</td> <td><i class="fa fa-inr"></i> '+pro_price+'</td>  </tr> ');
					});
					dataShow.append('<tr><td colspan="5" align=right><strong>Total:</strong> <i class="fa fa-inr"></i> '+total+".00"+'</td></tr>');
		          	$('#shopping-cart').hide();
		          	$('#pstatus').hide();
		          	$('#statusmessage').hide();
		          	$('#cart_c').val('1');
		          	$('#shoppingCart_1').show();

		          } else {
		            $("#statusmessage").show();
		            $("#statusmessage").removeClass();
		            $("#statusmessage").addClass("alert alert-danger");
		            $("#statusmessage").html(response.message);
		          }
		          // window.setTimeout(function(){location.reload()},3000);
		        },
		        error: function(e) {
		          console.log(e.status+" - "+e.statusText);
		        }
		    });
		}
	    // window.setTimeout(function(){window.location.href = "homestay.php";}, 100);
	});





	$('#contactForm').validate({
	highlight: function(element) {
	  $(element).parent().addClass("has-error");
	},
	unhighlight: function(element) {
	  $(element).parent().removeClass("has-error");
	  $(element).parent().addClass("has-success");
	},
	rules: {
	  name: "required",
	  phone: {
	    required: true,
	    minlength: 10,
	    maxlength: 10,
	  },
	  email: "required",
	  message: "required"
	}
	});



	$('#btnContactSub').click(function() {
    console.log("button clicked");
    var result = $('#contactForm').valid();
    console.log(result);
    if(result) {
      var postData = $('#contactForm').serializeArray();
      console.log(postData);
      $.ajax({
        type: "POST",
        url: "inc/contactform.php",
        data: postData,
        success: function(jsonData) {
          var response = $.parseJSON(jsonData);
          console.log(jsonData);
          console.log(response);
          if (response.success) {
            $("#statusmessage").show();
            $("#statusmessage").addClass("alert alert-success");
            $("#statusmessage").html(response.message);
          } else {
              $("#statusmessage").show();
            $("#statusmessage").addClass("alert alert-danger");
            $("#statusmessage").html(response.message);
          }
          window.setTimeout(function(){location.reload()},3000);
        },
        error: function(e) {
          console.log(e.status+" - "+e.statusText);
        }
      });
    }
  });



	//form 1
	$('#satchitananadaFrom').validate({

		highlight: function(element) {
		  $(element).parent().addClass("has-error");
		},
		unhighlight: function(element) {
		  $(element).parent().removeClass("has-error");
		  $(element).parent().addClass("has-success");
		},
		rules: {
		  name: "required",
		  phone: {
		    required: true,
		    minlength: 10,
		    maxlength: 10,
		  },
		  email: "required"
		}

	});



	$('#btnPageFrom').click(function() {
	    console.log("btnSatchitananadaFrom clicked");
	    var result = $('#satchitananadaFrom').valid();
	    console.log(result);
	    if(result) 
	    {
	      var postData = $('#satchitananadaFrom').serializeArray();
	      console.log(postData);
	      $.ajax({
	        type: "POST",
	        url: "inc/satchitananadapageform.php",
	        data: postData,
	        success: function(jsonData) {
	          var response = $.parseJSON(jsonData);
	          console.log(jsonData);
	          console.log(response);
	          if (response.success) {
	            $("#statusmessage").show();
	            $("#statusmessage").addClass("alert alert-success");
	            $("#statusmessage").html(response.message);
	          } else {
	              $("#statusmessage").show();
	            $("#statusmessage").addClass("alert alert-danger");
	            $("#statusmessage").html(response.message);
	          }
	          window.setTimeout(function(){location.reload()},3000);
	        },
	        error: function(e) {
	          console.log(e.status+" - "+e.statusText);
	        }
	      });
	    }
  	});



	// form 2 
	$('#satchitananadaFrom2').validate({

		highlight: function(element) {
		  $(element).parent().addClass("has-error");
		},
		unhighlight: function(element) {
		  $(element).parent().removeClass("has-error");
		  $(element).parent().addClass("has-success");
		},
		rules: {
		  name: "required",
		  phone: {
		    required: true,
		    minlength: 10,
		    maxlength: 10,
		  },
		  email: "required"
		}

	});



	$('#btnPageFrom2').click(function() {
	    console.log("btnSatchitananadaFrom2 clicked");
	    var result = $('#satchitananadaFrom2').valid();
	    console.log(result);
	    if(result) 
	    {
	      var postData = $('#satchitananadaFrom2').serializeArray();
	      console.log(postData);
	      $.ajax({
	        type: "POST",
	        url: "inc/satchitananadapageform2.php",
	        data: postData,
	        success: function(jsonData) {
	          var response = $.parseJSON(jsonData);
	          console.log(jsonData);
	          console.log(response);
	          if (response.success) {
	            $("#statusmessage2").show();
	            $("#statusmessage2").addClass("alert alert-success");
	            $("#statusmessage2").html(response.message);
	          } else {
	            $("#statusmessage2").show();
	            $("#statusmessage2").addClass("alert alert-danger");
	            $("#statusmessage2").html(response.message);
	          }
	          window.setTimeout(function(){location.reload()},3000);
	        },
	        error: function(e) {
	          console.log(e.status+" - "+e.statusText);
	        }
	      });
	    }
  	});


  	// form 3
  	$('#satchitananadaFrom3').validate({

		highlight: function(element) {
		  $(element).parent().addClass("has-error");
		},
		unhighlight: function(element) {
		  $(element).parent().removeClass("has-error");
		  $(element).parent().addClass("has-success");
		},
		rules: {
		  name: "required",
		  phone: {
		    required: true,
		    minlength: 10,
		    maxlength: 10,
		  },
		  email: "required"
		}

	});



	$('#btnPageFrom3').click(function() {
	    console.log("btnSatchitananadaFrom3 clicked");
	    var result = $('#satchitananadaFrom3').valid();
	    console.log(result);
	    if(result) 
	    {
	      var postData = $('#satchitananadaFrom3').serializeArray();
	      console.log(postData);
	      $.ajax({
	        type: "POST",
	        url: "inc/satchitananadapageform3.php",
	        data: postData,
	        success: function(jsonData) {
	          var response = $.parseJSON(jsonData);
	          console.log(jsonData);
	          console.log(response);
	          if (response.success) {
	            $("#statusmessage3").show();
	            $("#statusmessage3").addClass("alert alert-success");
	            $("#statusmessage3").html(response.message);
	          } else {
	            $("#statusmessage3").show();
	            $("#statusmessage3").addClass("alert alert-danger");
	            $("#statusmessage3").html(response.message);
	          }
	          window.setTimeout(function(){location.reload()},3000);
	        },
	        error: function(e) {
	          console.log(e.status+" - "+e.statusText);
	        }
	      });
	    }
  	});

  	// form 4
  	$('#satchitananadaFrom4').validate({

		highlight: function(element) {
		  $(element).parent().addClass("has-error");
		},
		unhighlight: function(element) {
		  $(element).parent().removeClass("has-error");
		  $(element).parent().addClass("has-success");
		},
		rules: {
		  name: "required",
		  phone: {
		    required: true,
		    minlength: 10,
		    maxlength: 10,
		  },
		  email: "required"
		}

	});



	$('#btnPageFrom4').click(function() {
	    console.log("btnSatchitananadaFrom4 clicked");
	    var result = $('#satchitananadaFrom4').valid();
	    console.log(result);
	    if(result) 
	    {
	      var postData = $('#satchitananadaFrom4').serializeArray();
	      console.log(postData);
	      $.ajax({
	        type: "POST",
	        url: "inc/satchitananadapageform4.php",
	        data: postData,
	        success: function(jsonData) {
	          var response = $.parseJSON(jsonData);
	          console.log(jsonData);
	          console.log(response);
	          if (response.success) {
	            $("#statusmessage4").show();
	            $("#statusmessage4").addClass("alert alert-success");
	            $("#statusmessage4").html(response.message);
	          } else {
	            $("#statusmessage4").show();
	            $("#statusmessage4").addClass("alert alert-danger");
	            $("#statusmessage4").html(response.message);
	          }
	          window.setTimeout(function(){location.reload()},3000);
	        },
	        error: function(e) {
	          console.log(e.status+" - "+e.statusText);
	        }
	      });
	    }
  	});




  	// form order now
  	$('#orderForm').validate({

		highlight: function(element) {
		  $(element).parent().addClass("has-error");
		},
		unhighlight: function(element) {
		  $(element).parent().removeClass("has-error");
		  $(element).parent().addClass("has-success");
		},
		rules: {
		  name: "required",
		  phone: {
		    required: true,
		    minlength: 10,
		    maxlength: 10,
		  },
		  email: "required",
		  address: "required"
		}

	});



	$('#btnProductCartMail').click(function() {
	    console.log("btnProductCartMail clicked");
	    var formResult = $('#orderForm').valid();
	    if(formResult) 
	    {
	    	var a1 = $('#cart_c').val();
	    	console.log(a1);
	    	if (a1 == 1)
	    	{
				var postData = $('#orderForm').serializeArray();
				console.log(postData);
				$.ajax({
				  type: "POST",
				  url: "inc/cart.php",
				  data: postData,
				  success: function(jsonData) {
				    console.log(jsonData);
				    var response = $.parseJSON(jsonData);
				    console.log(response);
				    if (response.success) {
				      $("#statusmessage").show();
				      $("#statusmessage").addClass("alert alert-success");
				      $("#statusmessage").html(response.message);
				    } else {
				      $("#statusmessage").show();
				      $("#statusmessage").addClass("alert alert-danger");
				      $("#statusmessage").html(response.message);
				    }
				    setTimeout(function(){window.location = "products.php"},3000);
				    // window.setTimeout(function(){location.reload()},3000);
				  },
				  error: function(e) {
				    console.log(e.status+" - "+e.statusText);
				  }
				});
		    } else {
		    	alert('Select product...!');
		    }
	    }
  	});




});
