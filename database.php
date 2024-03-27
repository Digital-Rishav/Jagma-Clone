<?php
require('top.php');
require('connection.php');
require('function.php');

?>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-12 mx-auto my-5">
              <div class="row">
                <div class="col-lg-10 col-11 mx-auto database-top my-5 text-center">
                  <div class="row">
                    <div class="col-lg-4 col-12 mx-auto database_div">
                       <h1 class="" id="box1">Message Box</h1>
                    </div>
                    <div class="col-lg-4 col-12 mx-auto database_div">
                       <h1 class="" id="box2">Quote First</h1>
                    </div>
                    <div class="col-lg-4 col-12 mx-auto database_div">
                       <h1 class="" id="box3">Quote Second</h1>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
              <div class="col-lg-10 col-11 mx-auto message_box my-5" id="field1">
                        <div class="row">
                        <table class="table table-striped-columns">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Subject</th>
                                <th scope="col">Message</th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php
                              
                               $res = select($con, 'message');
                               $total = count($res);
                               if($total>0){
                               $k=0;
                              foreach($res as $list){
                               $k=$k+1;
                              ?>
                                <tr>
                                <th scope="row"><?php echo $k; ?></th>
                                <td><?php echo $list['name']; ?></td>
                                <td><?php echo $list['email']; ?></td>
                                <td><?php echo $list['subject']; ?></td>
                                <td><?php echo $list['message']; ?></td>
                                </tr>
                              <?php
                              }
                            }else{
                              echo "no data available";
                            }
                              ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-10 col-11 mx-auto message_box my-5" id="field2">
                        <div class="row">
                        <table class="table table-striped-columns table-responsive">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Alternate Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Alternate Phone</th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php
                               $res = select($con, 'quote_first');
                               $total = count($res);
                               if($total>0){
                               $k=0;
                              foreach($res as $list){
                               $k=$k+1;
                              ?>
                                <tr>
                                <th scope="row"><?php echo $k; ?></th>
                                <td><?php echo $list['name']; ?></td>
                                <td><?php echo $list['email']; ?></td>
                                <td><?php echo $list['aemail']; ?></td>
                                <td><?php echo $list['phone']; ?></td>
                                <td><?php echo $list['aphone']; ?></td>
                                </tr>
                              <?php
                              }
                            }else{
                              echo "no data available";
                            }
                              ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-10 col-11 mx-auto message_box my-5" id="field3">
                        <div class="row">
                        <table class="table table-striped-columns table-responsive">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Organisation Name</th>
                                <th scope="col">Organisation URL</th>
                                <th scope="col">Head of count</th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php
                               $res = select($con, 'quote_second');
                               $total = count($res);
                               if($total>0){
                               $k=0;
                              foreach($res as $list){
                               $k=$k+1;
                              ?>
                                <tr>
                                <th scope="row"><?php echo $k; ?></th>
                                <td><?php echo $list['org']; ?></td>
                                <td><?php echo $list['url']; ?></td>
                                <td><?php echo $list['head']; ?></td>
                                </tr>
                              <?php
                              }
                            }else{
                              echo "no data available";
                            }
                              ?>
                            </tbody>
                        </table>
                    </div>
                </div>
              </div>
            </div>
        </div>
    </div>
 

    <?php
require('footer.php');
?>

<script>
   
   var box1 = document.getElementById("box1");
   var box2 = document.getElementById("box2");
   var box3 = document.getElementById("box3");
   var field1 = document.getElementById("field1");
   var field2 = document.getElementById("field2");
   var field3 = document.getElementById("field3");


   box1.addEventListener('click', function(){
      field1.style.display = "block";
      field2.style.display = "none";
      field3.style.display = "none";
      box1.classList.add('active1');
      box2.classList.remove('active1');
      box3.classList.remove('active1');
   });

   box2.addEventListener('click', function(){
      field2.style.display = "block";
      field1.style.display = "none";
      field3.style.display = "none";
      box2.classList.add('active1');
      box1.classList.remove('active1');
      box3.classList.remove('active1');
   });

   box3.addEventListener('click', function(){
      field3.style.display = "block";
      field2.style.display = "none";
      field1.style.display = "none";
      box3.classList.add('active1');
      box1.classList.remove('active1');
      box3.classList.remove('active1');
   });
</script>

