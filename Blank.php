<form method="post" action="#">
                                    <div class="form-group">
                                      <label for="sel1">Select Catagory</label>
                                      <select class="form-control data-live-search="true"" id="sel1" name="catagory_choose">
                                        <option value="Development" >Development</option>
                                        <option value="IT">IT</option>
                                        <option value="Web">Web</option>
                                        <option value="Business">Business</option>
                                        <option value="Design">Design</option>
                                        <option value="Marketing">Marketing</option>
                                        <option value="Photography">Photography</option>
                                        <option value="Health">Health</option>
                                        <option value="Music">Music</option>
                                        <option value="Language">Language</option>
                                        <option value="Life Style">Life Style</option>
                                        
                                      </select>
                                    </div>
                                    
                                    <?php    if(isset($_POST['submit']))
                                         {
                                      $select = $_POST['catagory_choose']  ;
                                   echo $select;
                                        $_SESSION['select']=$select;
                                       
                                         }?>
                                   <input type="submit" name="submit" value="Get Selected Values" />
                                  </form>