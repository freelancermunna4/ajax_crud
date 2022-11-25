<?php include('common/header.php');?>


<!--===== main page content =====-->
    <table id="main" border="0" cellspacing="0">
    <tr>
      <td id="header">
        <h1>PHP & AJAX CRUD</h1>
        <div id="search-bar">
          <label>Search :</label>
          <input type="text" id="search" autocomplete="off">
        </div>
      </td>
    </tr>
    <tr>
      <td id="table-form">
        <form id="addForm">
          Name : <input type="text" id="name">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          Email: <input type="text" id="email">
          <input type="submit" id="save-button" value="Submit" />
        </form>
      </td>
    </tr>
    <tr>
      <td id="table-data">
      </td>
    </tr>
  </table>
  <div id="error-message"></div>
  <div id="success-message"></div>



  <div id="modal">
    <div id="modal-form">
      <h2>Edit Form</h2>
      <table cellpadding="10px" width="100%">
        
      </table>
      <div id="close-btn">X</div>
    </div>
  </div>

    <!--===== main page content =====-->
<?php include('common/footer.php');?>
<script>

$(document).ready(function(){

    function load(){
        $.ajax({
            url:"load.php",
            type:"POST",
            success:function(data){
                $("#table-data").html(data);
            }
        });
    }
    load();


    $("#save-button").on("click",function(e){
      e.preventDefault();
      var name = $("#name").val();
      var email = $("#email").val();
      if(name==='' || email === ''){
        $("#error-message").html("Please Fill up All").slideDown("fast");
      }else{        
        $.ajax({
          url:"insert.php",
          type:"POST",
          data:{name:name,email:email},
          success:function(data){
            if(data==1){
              load();
              $("#success-message").html("Data Inserted Successfully").slideDown("fast");
              $("#addForm").trigger("reset");
            }else{
              $("#error-message").html("Something is wrong!").slideDown("fast");
            }
          }
        });        
      }

    });

    $(document).on("click","#delete_btn",function(){
      if(confirm("Are you sure?")){
      var id = $(this).data("id");
      $.ajax({
        url:"delete.php",
        type:"POST",
        data:{id:id},
        success:function(data){
          if(data==1){
              load();
              $("#success-message").html("Data Deleted Successfully").slideDown("fast");
            }else{
              $("#error-message").html("Something is wrong!").slideDown("fast");
            }
        }
      });
    }
    });


    $(document).on("click","#edit_btn",function(){
      var eid = $(this).data("eid");
      var name = $("#modal_name");
      var email = $("#modal_email");
      $("#modal").show();      
      
      $.ajax({
        url:"update.php",
        type:"POST",
        data:{eid:eid},
        success:function(data){
          $("#modal-form table").html(data);
        }
      });
    });

    $(document).on("click","#close-btn",function(){
      $("#modal").hide();
    });

    $(document).on("click","#update_btn",function(){
      var hid = $("#hid").val();
      var ename = $("#ename").val();
      var eemail = $("#eemail").val();

      $.ajax({
        url:"update_load.php",
        type:"POST",
        data:{hid:hid,ename:ename,eemail,eemail},
        success:function(data){
          if(data == 1){
            load();
            $("#modal").hide();
            $("#success-message").html("Data Updated Successfully").slideDown("fast");
          }
        }
      });
    });


});
</script>