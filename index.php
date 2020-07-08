<?php

if(isset($_POST['btn'])){
  require './class/application.php';
  $obj_app = new Application();
  $obj_app->save_student_info($_POST);
  $obj_app->send_email();


}
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="assets/img/favicon.ico">
	
	<title>TGG CLOUD CLASS ROOM</title>

 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 <!-- Bootstrap core CSS -->
 <link href="assets/css/bootstrap.min.css" rel="stylesheet">
 <!-- Google Fonts -->
 <!-- <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;700&display=swap" rel="stylesheet"> -->
 <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;700&family=Noto+Serif+JP:wght@300;400;700;900&display=swap" rel="stylesheet">

 <!-- Font Awesome Icons -->
 <script src="https://kit.fontawesome.com/a076d05399.js"></script>
 <!-- Datepicker CSS-->
 <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
 <!-- Select Option CSS-->
 <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <!-- Custom CSS -->
 <link href="assets/css/custom.css" rel="stylesheet">
  <!-- Responsive CSS -->
 <link href="assets/css/responsive.css" rel="stylesheet">
 
</head>
<body>
	<!-- Section Header
    ===============================-->
    <header class="site-header" role="banner">
        <!-- NAVBAR
          ================================================== -->
          <div class="navbar-wrapper">

            <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
              <div class="container">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <!-- Logo -->
<!--                         <a class="navbar-brand " href="#home">
                            <img style="width: 200px;" src="assets/img/logo.png" alt="logo">
                          </a> -->
                        </div>
                        <div class="navbar-collapse collapse manual_nav">
                          <ul class="nav navbar-nav navbar-right">

                            <li class="active" ><a href="#slider">ホーム</a></li>
                            <li  ><a href="#service">CCRについて</a></li>
                            <li><a href="#overview">概要</a></li>
                            <li><a href="#e_learning">イーラーニング</a></li>
                            <li><a href="#curriculum">カリキュラム</a></li>
                            <li><a href="#contact">お問い合わせ</a></li>
                            <li ><a class="btn-sm btn-info nav-entry" style="" href="#entry">エントリ</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>

                  </div>

                </header>

    <!--Slider
      ===============================-->
      <section id="slider" class="slider" data-type="background" data-speed="5">

        <!--<img src="assets/img/bg.jpg" width="100%" height="600px">-->

        <div class="sldr-overlay">
          <div class="sldr-cnt-text">
          <h1>Cloud Class Room とは?</h1>

          <p>インターネット (Cloud) と通じて行う
           オンライン授業です。</br>
           パソコンや、スマートフォンから日本  
           にいる教師と繋がり、</br>授業を受けるこ
         とができます。</p>
         <a href="">エントリ</a>
         </div>

       </div>
       

     </section>

       <!--Section Services
        ===============================-->
        <section id="service" >
         <div class="container">
           <div class="s-header">
             <h1>授業について</h1>
           </div>
           <div class="row">
            <div class="col-md-9 col-sm-9 col-xs-12 s-content" >

              <h1 style="color: white;" >東京語学学校のオンライン授業なら!</h1>
              <ul class="">
                <li><i class="fas fa-cloud"></i> <p><span style="color: #e7847a;">世</span>界のどこにいても日本と同じ学習ができる!</p></li>
                <li><i class="fas fa-cloud"></i><p><span style="color: #e7847a;">日</span>本の教室と繋がるから最新の日本情報が知れる!</p></li>
                <li><i class="fas fa-cloud"></i><p><span style="color: #e7847a;">D</span>ual Teacher System で必ず母語教師と日本語教師がいるので安心!</p></li>
                <li><i class="fas fa-cloud"></i><p><span style="color: #e7847a;">e</span>-Learning を導入しているのでいつでもどこでも復習ができる。</p></li>

              </ul>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-4 ">
              <div class="s-img">
              <img src="assets/img/e2.png">
              </div>
            </div>
          </div>
        </div> 
      </section >


    <!-- Section Service Content
      ===============================-->

      <section id="s-content2">
        <div class="container">
         <div class="row s-content2">
          <div class="row">
            <div class="col-md-2 col-sm-4 col-xs-5 img">
             <img src="assets/img/c1.png">
 
            </div>
            <div class="col-md-10 col-sm-8 col-xs-7">
              <div class="s-text1">
            <h3><strong>通常 1 ヶ月<br>15,000 円のところ</strong></h3>
              </div>
            </div>
          </div>
          <div class="row ">
            <div class="col-md-10 col-sm-8 col-xs-9">
            <div class="s-text2">
           <h1 style="margin-left: 5px;" ><strong style="   color: #ea9087;">今なら &nbsp; 1ヶ月の授業料 </strong> 
            <strong style="color: white;">&nbsp; 無料 !!</strong></h1>
            <h1>さらに <span style="color: #2f5d86; ">SNS</span> にシェアで<span style="color: #2f5d86; font-weight: bold; ">無料期間延長!</span></h1>              
            </div>             
            </div>
            <div class="col-md-2 col-sm-4 col-xs-3 img img2">
             <img src="assets/img/c1.png" >
 
            </div>

          </div>
       </div>
     </div>
   </section> 



       <!--Section Overview
        ===============================-->

        <section id="overview" class="overview">
          <div class=" section-header text-center">
           <h1>Cloud Class Room の概要</h1>
         </div>

         <div class="container">
          <div class="row">
            <div class="col-md-6">
              <!-- Service -->
              <div class="service">
                <div class="row">

                  <div class="col-md-12 col-sm-12">
                    <div class="over-content">
                     <i class="fa fa-cloud"></i><h4>授業の流れ 01</h4>
                     <p>イーラーニングシステムを利用し、授業を予習</p>
                   </div>
                 </div>

               </div>
             </div>    
             <!-- Service -->
             <div class="service">
              <div class="row">

                <div class="col-md-12 col-sm-12">
                  <div class="over-content">
                   <i class="fa fa-cloud"></i><h4>授業の流れ 02</h4>
                   <p>日本人教師による表記、発音の授業</p>
                 </div>
               </div>

             </div>
           </div>    
           <!-- Service -->
           <div class="service">
            <div class="row">

              <div class="col-md-12 col-sm-12">
                <div class="over-content">
                 <i class="fa fa-cloud"></i><h4>授業の流れ 03</h4>
                 <p>中国人教師による文法の解説</p>
               </div>
             </div>

           </div>
         </div>    
         
       </div>   


       <div class="col-md-6">
        <!-- Service -->
        <div class="service">
          <div class="row">

            <div class="col-md-12 col-sm-12">
              <div class="over-content">
               <i class="fa fa-cloud"></i><h4>授業の流れ 04</h4>
               <p>イーラニングシステムでの宿題</p>
             </div>
           </div>

         </div>
       </div>    
       <!-- Service -->
       <div class="service">
        <div class="row">

          <div class="col-md-12 col-sm-12">
            <div class="over-content">
             <i class="fa fa-cloud"></i><h4>授業の流れ 05</h4>
             <p>教師によるフィードバック</p>
           </div>
         </div>

       </div>
     </div>    
     <!-- Service -->
     <div class="service">
      <div class="row">

        <div class="col-md-12 col-sm-12">
          <div class="over-content">
           <i class="fa fa-cloud"></i><h4>授業の流れ 06</h4>
           <p>イーラーニングシステムを用いてのテスト</p>
         </div>
       </div>

     </div>
   </div>    

 </div>
</div>


        <div class="container over-content-2 text-center">
          <i class="fas fa-comment-dots"></i>
          <div class="row">
            <div class="col-md-12 ">
              <p>授業内容にもある通り学生自身の自己学習がとても大切になります。
                日本に来てからは教師は全員日本人ですので、渡日前から自立学習の習慣がつけば
                留学に来た際にネイティブな日本語学習と、自分の学習方法の両立ができ効率的に日本語が
              習得できるようになります。</p>
            </div>
          </div>
        </div>
      </section>



    <!-- E-Learning
      ================================================== -->

      <section id="e_learning" class="e_learning">
        <h1>イーラーニング</h1>
        <h3>いつでもどこでも24時間自己学習システム</h3>
        <div class="container">
          <div class="e-container">

            <div class="eWrapper">
              <div class="e_content">  
                <div class="e_img">
                 <img src="assets/img/entry.jpg">
               </div>
               <h4>イーラーニングのメリット!</h4>
               <p>あなたの改善のためにライブ授業とは別にサービスの中にはイーラも提供しています</p>
             </div>
             <div class="elearning-overlay">

             </div>
           </div>   

           <div class="eWrapper">
            <div class="e_content">  
              <div class="e_img">
               <img src="assets/img/entry.jpg">
             </div>
             <h4>イーラーニングのメリット!</h4>
             <p>あなたの改善のためにライブ授業とは別にサービスの中にはイーラも提供しています</p>
           </div>
         </div>    

         <div class="eWrapper">
          <div class="e_content">  
            <div class="e_img">
             <img src="assets/img/entry.jpg">
           </div>
           <h4>イーラーニングのメリット!</h4>
           <p>あなたの改善のためにライブ授業とは別にサービスの中にはイーラも提供しています</p>
         </div>
       </div>    

       <div class="eWrapper">
        <div class="e_content">  
          <div class="e_img">
           <img src="assets/img/entry.jpg">
         </div>
         <h4>イーラーニングのメリット!</h4>
         <p>あなたの改善のためにライブ授業とは別にサービスの中にはイーラも提供しています</p>
       </div>
     </div>
   </div>
 </div>
</section>


        <!-- Curriculum
          ================================================== -->
          <section id="curriculum" class="curriculum">
            <div class="container">
              <div class="row">
               <div class="col-md-12">
                <div class="cur_content text-center">
                  <h1>Cloud Class Roomの 授業内容</h1>

                  <img src="assets/img/cur1.png">
                </div>

              </div>
            </div>
          </div>
        </section>

            <!-- Contact us
              ================================================== -->
              <section class="main-content" id="contact" data-type="background" data-speed="5">
                <div class="container contact_form" >
                  <div class="row" id="primary">

                    <div id="content" class="col-sm-12">


                      <p class="lead" style="color: white;">
                      コースについて質問がありますか？お気軽にご相談ください! </p>

                      <form role="form" class="clearfix">
                        <div class="row">
                          <div class="col-sm-6">
                            <div class="">
                              <label class="sr-only" for="contact-name">
                              名前</label>
                              <input type="text" class="form-control input-lg" id="contact-name" placeholder="名前">
                            </div>
                          </div><!-- end col -->

                          <div class="col-sm-6">
                            <div class="form-group">
                              <label class="sr-only" for="contact-email">メールアドレス</label>
                              <input type="text" class="form-control input-lg" id="contact-email" placeholder="メールアドレス">
                            </div>
                          </div><!-- end col -->
                        </div><!-- row -->


                        <div class="form-group" >
                          <label class="sr-only" for="contact-words">メッセージ</label>
                          <textarea class="form-conrol input-lg" id="contact-words" placeholder="メッセージ" rows="3" style="width: 100%"></textarea>
                        </div>


                        <input type="submit" class="btn  btn-lg pull-right" value="コンタクト &raquo;">
                      </form>

                  

                  </div><!-- content -->

                </div><!-- primary -->
              </div><!-- container -->
          </section>



      <!-- Entry content
        ================================================== -->
        <section id="entry" class="entry"   >
          <div class=" section-header text-center">
           <h1> エントリーはこちら！</h1>
         </div>
          <div class="container">
            <div class="row entry-content">
             <div class="col-md-5">
              <div class="entry-img">
                <img src="assets/img/entry.png">
              </div>
            </div>
            <div class="col-md-7 col-xs-12 eWrapping bg-color" style="">
              <h3>
                <?php
                if (isset($message)) {
                  echo $message;
                  unset($message);
                }
                ?>
              </h3>
              <div class="entry-form">
                <h2>
                  以下に情報を入力してください
                </h2>
                <form action="" method="post">
                  <h3 style="color: #149e8f">
                  エントリーフォーム: </h3>
                  <div class="form-group">
                    <label></label>
                    <input type="text" name="s_name" class="form-control" required="" placeholder="フルネーム" > 
                  </div>

                  <div class="form-group ">
                    <select name="s_gender" class="gender selectpicker"  >
                      <option disabled="disabled" selected="selected" >
                      性別</option>
                      <option >男性</option>
                      <option>女性</option>
                      <option>その他の</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label></label>
                    <input type="text" name="s_dob" class="form-control " id="datepicker" required="" placeholder="生年月日" > 
                  </div>

                  <div class="form-group">
                   <label></label>
                   <input type="text" name="s_telephone" class="form-control" required="" placeholder="電話番号"> 
                 </div> 
                 <div class="form-group">
                   <label></label>
                   <input type="email" name="s_email" class="form-control" required="" placeholder="メールアドレス"> 
                 </div>
                 <div class="form-group">
                  <textarea placeholder="住所" name="s_address" class="form-control"></textarea>
                </div>

                <div class="text-center">
                 <button type="submit" name="btn" class="btn btn-primary">登録</button> 
               </div>

             </form>
           </div>
         </div>
         
       </div>
     </div>
   </section>





        <!-- FOOTER
          ================================================== -->
          <footer style="">
            <div class="container myfooter" >
              <div class="col-sm-3">

              </div><!-- end col -->
              <div class="col-sm-6">
                <nav>
                  <ul class="list-unstyled list-inline">
                    <li class="active" ><a href="#slider">ホーム</a></li>
                    <li  ><a href="#service">CCRについて</a></li>
                    <li><a href="#overview">概要</a></li>
                    <li><a href="#e_learning">イーラーニング</a></li>
                    <li><a href="#curriculum">カリキュラム</a></li>
                    <li><a href="#contact">お問い合わせ</a></li>

                    
                  </ul>
                </nav>
                <div class="c_icons">
                  <nav class="">
                    <ul class="list-unstyled list-inline">

                      <li><a href=""><i class="fab fa-facebook-square"></i></a></li>
                      <li><a href=""><i class="fab fa-twitter-square"></i></a></li>
                      <li><a href=""><i class="fas fa-envelope"></i></a></li>
                      

                    </ul>
                  </nav> 
                </div>

              </div><!-- end col -->
              <div class="col-sm-3">
                <p class="pull-right">&copy; TGG</p>
              </div><!-- end col -->
            </div><!-- container -->

                    <!-- Back To Top -->
        <a href="#slider" id="back-to-top" class="btn btn-sm btn-purple btn-back-to-top smooth-scroll hidden-sm hidden-xs" title="home" role="button">
            <i class="fa fa-angle-up"></i>
        </a>
          </footer>



          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" crossorigin="anonymous"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" crossorigin="anonymous"></script>

          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" crossorigin="anonymous"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" rossorigin="anonymous"></script>
          <script src="assets/js/main.js"></script>
          <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
          <script>
            $( function() {
              $( "#datepicker" ).datepicker({
                dateFormat: "yy-mm-dd",
                changeMonth: true,
                changeYear: true,
                yearRange: '1980:2010'
              });
              $( "#format" ).on( "change", function() {
                $( "#datepicker" ).datepicker( "option", "dateFormat", $( this ).val() );
              });
            } );
          </script>  
          <script>
            $(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>


</body>
</html>