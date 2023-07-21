<?php
include ("header.php");
?>

    <!-- MAIN -->
    <main role="main">
      <!-- Content -->
      <article>
        <header class="section background-primary text-center">
            <h1 class="text-white margin-bottom-0 text-size-50 text-thin text-line-height-1">Contact US</h1>
        </header>
        <div class="section background-white">
          <div class="line">
            <div class="margin">

              <!-- Company Information -->
              <div class="s-12 m-12 l-6">
                <h2 class="text-uppercase text-strong margin-bottom-30">Our Information</h2>
                <div class="float-left">
                  <i class="icon-placepin background-primary icon-circle-small text-size-20"></i>
                </div>
                <div class="margin-left-80 margin-bottom">
                  <h4 class="text-strong margin-bottom-0">Our Address</h4>
                  <p>Rajapool boring road patna 2<br>
                     patna<br>
            
                  </p>
                </div>
                <div class="float-left">
                  <i class="icon-paperplane_ico background-primary icon-circle-small text-size-20"></i>
                </div>
                <div class="margin-left-80 margin-bottom">
                  <h4 class="text-strong margin-bottom-0">E-mail</h4>
                  <p>contactlifelinecare@gmail.com<br>
                  contactlifelinecare@gmail.com
                  </p>
                </div>
                <div class="float-left">
                  <i class="icon-smartphone background-primary icon-circle-small text-size-20"></i>
                </div>
                <div class="margin-left-80">
                  <h4 class="text-strong margin-bottom-0">Phone Numbers</h4>
                  <p>0800 4521 800 50<br>
                     0450 5896 625 16<br>
                     0798 6546 465 15
                  </p>
                </div>
              </div>

              <!-- Contact Form -->
              <?php
              $show_success=false;
              $failed=false;
              $emailfailed=false;
               include "server.php";
               if(isset($_POST['save'])){
                 echo "tst";
                 $email=$_POST['email'];
                 $name=$_POST['name'];
                 $subject=$_POST['subject'];
                 $message=$_POST['message'];
                 //if($branch=="-Select-"){
                  // $invalidbranch=true;



                 $sql= "select * from contact where email='$email'";
                 $query_run = mysqli_query($conn,$sql);
                 if(mysqli_num_rows($query_run)<1){

                   echo $name;
                 $query = "insert into contact (email,name,subject,message)value('$email', '$name','$subject','$message')";
                 $query_run = mysqli_query($conn,$query)or die(mysqli_error($conn));
                 if($query_run){
                   echo "success";
                  $show_success=true;
                  }
                  else{
                    echo "failed";
                    $failed=true;
                  }
                }
                  else{
                    $emailfailed=true;
                  }
               }
              ?>

              <div class="s-12 m-12 l-6">
                <h2 class="text-uppercase text-strong margin-bottom-30">Contact Us</h2>
                <form class="customform" method="post">
                  <div class="line">
                    <div class="margin">
                      <div class="s-12 m-12 l-6">
                        <input name="email" class="required email border-radius" placeholder="Your e-mail" title="Your e-mail" type="text" />
                      </div>
                      <div class="s-12 m-12 l-6">
                        <input name="name" class="name border-radius" placeholder="Your name" title="Your name" type="text" />
                      </div>
                    </div>
                  </div>
                  <div class="s-12">
                    <input name="subject" class="subject border-radius" placeholder="Subject" title="Subject" type="text" />
                  </div>
                  <div class="s-12">
                    <textarea name="message" class="required message border-radius" placeholder="Your message" rows="3"></textarea>
                  </div>
                  <div class="s-12 m-12 l-4"><button class="submit-form button background-primary border-radius text-white" type="submit" name="save">Submit Button</button></div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </article>
      <div class="background-primary padding text-center">
        <a href="/"><i class="icon-facebook_circle icon2x text-white"></i></a>
        <a href="/"><i class="icon-twitter_circle icon2x text-white"></i></a>
        <a href="/"><i class="icon-google_plus_circle icon2x text-white"></i></a>
        <a href="/"><i class="icon-instagram_circle icon2x text-white"></i></a>
      </div>
      <!-- MAP -->
      <div class="s-12 grayscale center">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1459734.5702753505!2d16.91089086619977!3d48.577103681657675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ssk!2ssk!4v1457640551761" width="100%" height="450" frameborder="0" style="border:0"></iframe>
      </div>
    </main>

    <?php
include("footer.php");
?>
