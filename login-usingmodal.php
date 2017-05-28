<?php 

if(isset($_POST['login']))
{
    //goto myFunction for login 
loginCheck();

}
?>
 <div class="container">
  
  <!-- Trigger the modal with a button -->
 <!-- <button type="button" class="btn btn-info btn-lg" id="myBtn">Open Modal</button> -->

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2 class="modal-title log-header">Login</h2>
        </div>
        <div class="modal-body">
          <div class="row">
             <form method="post" action="">
              <div class="form-group row">
                     
                     <div class="col-sm-2"></div>
                     
                     <div class="col-sm-8">
                         <input class="form-control use-input" name="email" type="text" value="" placeholder="Email" required="required">
                     </div>
                     <div class="col-sm-2">
                         
                     </div>
                 </div>
              <div class="form-group row ">
                     <div class="col-sm-2"></div>
                      <div class="col-sm-8">
                         <input class="form-control use-input" name="password"  type="password" value="" placeholder="Password" required="required">
                     </div>
                     <div class="col-sm-2"></div>
                 </div>
              <div class="form-group row">
                     <div class="col-sm-2">
                         
                     </div>
                      <div class="col-sm-8">
                          <button  type="submit" name="login" class="btn-lg btn-success logbuttonin">    Login    </button>
                     </div>
                     <div class="col-sm-2">
                         
                     </div>
                 </div>
              
         
              </form>
          </div> 
          
        </div>
                 
        <div class="modal-footer">
         <div class="form-group row">
                     
                     <div class="col-sm-10 textal">
                       <p class="para">Yet not registered?</p>
                       <a href="signup.php"> <button  class="btn btn-sm signup-button" type="button" > Sign up! </button></a>   
                     </div>
                     <div class="col-sm-2">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                      </div>
                 
                 </div>
         
        </div>
      </div>
      
    </div>
  </div>
  
</div>

<script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});
</script>