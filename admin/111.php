function view(id)

                {
                  
                 <?php
                     
                    $r=mysqli_fetch_array(mysqli_query($cn,"select * from news where news_id=2"));
                    

                  ?>
                  document.getElementById('txtdescription').value="<?php echo $r[3]; ?>";
                  document.getElementById('txtheading').value="<?php echo $r[2]; ?>";
                  document.getElementById('txtdate').value="<?php echo $r[1]; ?>";
                  document.getElementById("txtid").value="<?php echo $r[0]; ?>";
                  document.getElementById("h1").value="<?php echo $r[4]; ?>";

                  //document.getElementById('r1').checked=true;
                  
                  
                }