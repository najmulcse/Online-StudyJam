<?php

    include("dbConnection.php");


    session_start();

   // $email = $_SESSION['valid_email'];


?>





<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Community | StudyJam</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
     <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/info.css" rel="stylesheet">
    <link href="css/widgContent.css" rel="stylesheet">
    <link href="css/widgEditor.css" rel="stylesheet">
    <link href="css/style.css." rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
    <script src="js/widgEditor.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <section class="menu-section">
    	<div class="menu">
    		<div class="container-fluid">
    		<div class="row">
    				

 <?php
      
    if(!(isset($_SESSION['valid_email']) && $_SESSION['valid_email'] != ''))
    {
     $email ="";
     include("include/navigationwithoutLogin.php"); 
     
    }
     else
          include("include/navigation.php");
      
      ?>   

    				
    			</div>	
    			<!-- End of row Division -->
    		</div>
    		<!-- End of container division -->
    	</div>
    	<!-- End of menu div -->
    </section>
      
    <section>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 col-xs-3 ">
          <ul class="nav nav-sidebar">
             <li class="active"><a href="set-active-class-and-others-on-community-page-default.php">Development<span class="sr-only">(current)</span></a></li>
            <li><a href="set-active-class-and-others-on-community-page-default.php">IT</a></li>
            <li><a href="set-active-class-and-others-on-community-page-default.php">Web</a></li>
            <li><a href="set-active-class-and-others-on-community-page-default.php">Business</a></li>
            <li><a href="set-active-class-and-others-on-community-page-default.php">Design</a></li>
            <li><a href="set-active-class-and-others-on-community-page-default.php">Marketing</a></li>
            <li><a href="set-active-class-and-others-on-community-page-default.php">Photography</a></li>
            <li><a href="set-active-class-and-others-on-community-page-default.php">Health</a></li>
            <li><a href="set-active-class-and-others-on-community-page-default.php">Music</a></li>
            <li><a href="set-active-class-and-others-on-community-page-default.php">Language</a></li>
            <li><a href="set-active-class-and-others-on-community-page-default.php">Life Style</a></li>
            
            
          </ul>
          
        </div>
        <div class="col-sm-9 col-md-10 col-xs-9">
         
         <div class="fluid-container">
             <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#ask-question">Ask question</a></li>
                <li><a data-toggle="tab" href="#asking-history">Asking history</a></li>
                <li><a data-toggle="tab" href="#commuinity-help-someone">Help someone</a></li>
                
            </ul>
            
            <div class="tab-content">
               
               <!-- ask-question
                ================================= -->
                <div id="ask-question" class="tab-pane fade in active">
                    <form>
                      <div class="form-group">
                        <label for="question-title">Title</label>
                        <input type="text" class="form-control" id="question-title" placeholder="question title">
                      </div>
                      <div class="form-group">
                        <label for="question-tag">Tag</label>
                        <input type="text" class="form-control" id="question-tag" placeholder="question catagory">
                      </div>
                      
                      
                       <!--<div class="form-group">
                        <label for="question-description">Description</label><br>
                        <textarea rows="8" cols="75" id="question-description">

                        </textarea>
                      </div>
                      <button type="submit" class="btn btn-primary publish" >Publish</button>-->
                      
                      
                      
                      
                      
                      <div class="rows">
                            
                               <div class="community-page-text-editor">
                                
                                    <form action="submit.php" onsubmit="alert('Your submitted HTML was:\n\n' + document.getElementById('noise').value); return false;">
                                      <fieldset>
                                        <label for="noise">
                                             Description
                                        </label>
                                        <textarea id="noise" name="noise" class="widgEditor nothing"></textarea>
                                      </fieldset>
                                      <fieldset class="submit">
                                        <input type="submit" value="Publish" onclick="hideReplyBox('reply-2')" />
                                      </fieldset>
                                    </form>
                                
                               </div>
                            
                            
                               
                                
                                
                            
                        </div>
                      
                      
                      
                      
                    </form>
                </div>
            
            
           
            <!-- asking-history
            ================================= -->

            <div id="asking-history" class="tab-pane fade">
                <div id="single-reply-history">
                    <h2 class="asking-history-title">Question title</h2>
                    <a href="#">Business/ <a href="#" class="asking-history-tag">marketing</a></a>
                    <p class="asking-history-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere repellat consectetur molestiae rerum ipsam, necessitatibus voluptate doloremque error quis adipisci nobis animi enim, fuga qui quam soluta recusandae tenetur vero.</p>

                    <p class="asking-history-reply-number">
                        64156 replies
                    </p>
                    <p class="asking-history-view-details">
                        <a id="view-details-click" href="community-page-asking-history-view-details.html">view details....</a>
                    </p>
                </div>
                
                <hr>
                
                <div id="single-reply-history">
                    <h2 class="asking-history-title">Question title</h2>
                    <a href="#">Business/ <a href="#" class="asking-history-tag">marketing</a></a>
                    <p class="asking-history-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere repellat consectetur molestiae rerum ipsam, necessitatibus voluptate doloremque error quis adipisci nobis animi enim, fuga qui quam soluta recusandae tenetur vero.</p>

                    <p class="asking-history-reply-number">
                        64156 replies
                    </p>
                    <p class="asking-history-view-details">
                        <a id="view-details-click" href="community-page-asking-history-view-details.html">view details....</a>
                    </p>
                </div>
                
                <hr>
                
                <div id="single-reply-history">
                    <h2 class="asking-history-title">Question title</h2>
                    <a href="#">Business/ <a href="#" class="asking-history-tag">marketing</a></a>
                    <p class="asking-history-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere repellat consectetur molestiae rerum ipsam, necessitatibus voluptate doloremque error quis adipisci nobis animi enim, fuga qui quam soluta recusandae tenetur vero.</p>

                    <p class="asking-history-reply-number">
                        64156 replies
                    </p>
                    <p class="asking-history-view-details">
                        <a id="view-details-click" href="community-page-asking-history-view-details.html">view details....</a>
                    </p>
                </div>
                
                
                <!--<nav>-->
                  <ul class="pagination pagination-right">
                    <li>
                      <a href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                      </a>
                    </li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                      <a href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                      </a>
                    </li>
                  </ul>
                <!--<nav>-->
            </div>
            
            
            <!-- commuinity-help-someone
            ================================= -->
            
        <div id="commuinity-help-someone" class="tab-pane fade">
            <div id="single-reply-history">
                    <h2 class="asking-history-title">question title</h2>
                    <a href="#">Business/ <a href="#" class="asking-history-tag">marketing</a></a>
                    <p class="asking-history-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere repellat consectetur molestiae rerum ipsam, necessitatibus voluptate doloremque error quis adipisci nobis animi enim, fuga qui quam soluta recusandae tenetur vero.</p>

                    <p class="asking-history-reply-number">
                        64156 replies
                    </p>
                    <p class="asking-history-view-details">
                        <a id="view-details-click" href="community-page-help-someone-view-details.html">view details....</a>
                    </p>
                </div>
                
                <hr>
                
                <div id="single-reply-history">
                    <h2 class="asking-history-title">question title</h2>
                    <a href="#">Business/ <a href="#" class="asking-history-tag">marketing</a></a>
                    <p class="asking-history-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere repellat consectetur molestiae rerum ipsam, necessitatibus voluptate doloremque error quis adipisci nobis animi enim, fuga qui quam soluta recusandae tenetur vero.</p>

                    <p class="asking-history-reply-number">
                        64156 replies
                    </p>
                    <p class="asking-history-view-details">
                        <a id="view-details-click" href="community-page-help-someone-view-details.html">view details....</a>
                    </p>
                </div>
                
                <hr>
                
                <div id="single-reply-history">
                    <h2 class="asking-history-title">question title</h2>
                    <a href="#">Business/ <a href="#" class="asking-history-tag">marketing</a></a>
                    <p class="asking-history-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere repellat consectetur molestiae rerum ipsam, necessitatibus voluptate doloremque error quis adipisci nobis animi enim, fuga qui quam soluta recusandae tenetur vero.</p>

                    <p class="asking-history-reply-number">
                        64156 replies
                    </p>
                    <p class="asking-history-view-details">
                        <a id="view-details-click" href="community-page-help-someone-view-details.html">view details....</a>
                    </p>
                </div>
                
                
                <!--<nav>-->
                  <ul class="pagination pagination-right">
                    <li>
                      <a href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                      </a>
                    </li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                      <a href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                      </a>
                    </li>
                  </ul>
                <!--<nav>-->
        </div>
        
        
         
          
        </div>
      </div>
    </div>
        </div>
      </div>
        </section>
      
      <div id="footer">
        <ul>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Support</a></li>
        </ul>
        <p>© Online StudyJam - 2016</p>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    
    <!-- jquery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    
    <!-- custom js 
    <script>
            $(document).ready(function(){
                $("#view-details-click").click(function(){
                $("#asking-history").replaceWith("");
            });
});
    </script>-->
  </body>
</html>
