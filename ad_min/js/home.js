$(document).ready(function(){	 

  $('.availBtn').click(function() {
    console.log("btn clcked");
    var id = $(this).attr('data-id');
    var postData = { avail_pro_id: id };
    console.log(postData);
    $.ajax({
      type: 'POST',
      url: 'ajax.php',
      data: postData,
      success: function(response) {
        if (response != '') {
          alert("Status Updated");
        } else {
          alert("Updation Failed");
        }
      }
    });
    window.setTimeout(function(){ location.reload() }, 100);
  });


  $('.btnDelInfo').click(function() 
  {
    var id = $(this).attr('data-id');
    var postData = { pro_del_id: id };
    bootbox.confirm({
      title: "Confirmation",
      message: "Are you sure you want to delete this item?",
      buttons: {
        cancel: {
          label: '<i class="fa fa-times"></i> No',
          className: 'btn-danger'
        },
        confirm: {
          label: '<i class="fa fa-check"></i> Yes',
          className: 'btn-success'
        }
      },
      callback: function (result) {
        if (result) {
          console.log(postData);

          $.ajax({
            type: 'POST',
            url: 'ajax.php',
            data: postData,
            success: function(jsonData) {
              var response = $.parseJSON(jsonData);
              console.log(response);
              if (response.success) {
                alert("Deleted Successfully");
              } else {
                alert("Failed to delete");
              }
              window.setTimeout(function(){ location.reload() }, 1500);
            },
            error: function(e) {
              console.log(e.status+" - "+e.statusText);
            }
          });
          
        }
      }
    });

  });
  



});