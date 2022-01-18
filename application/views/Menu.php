<style>
           body{
               background-color: #baae91
           }
           </style>
<section class="menu" id="menu">
        <div class="title">  
          <h2 class="titleText">Our <span>M</span>enu</h2>
           <p><?=$title?> </p>
        </div>
        <div class="content">
        <?php
        $no=1;
        foreach($result as $rs){
          echo'
          <div class="box">
          <div class="imgBx">
            <img src="'.base_url().''.$rs->gambar_menu.'"/>
          </div>
          <div class="text">
            <h3>'.$rs->nama_menu.'</h3>
          </div>
        </div>
       
          ';
          $no++;
        }
        ?>
           
                 <div class="title">  
            <a href="#" class="btn">View All</a>
          </div>
  <!-- //    </section>
  //    <div class="box">
  //    <div class="imgBx">
  //      <img src="<?=base_url()?>assets/css/images/menu3.jpg"/>
  //    </div>
  //    <div class="text">
  //      <h3>Dish Number Two</h3>
  //    </div>
  //  </div>
   
  //  <div class="box">
  //    <div class="imgBx">
  //      <img src="<?=base_url()?>assets/css/images/menu4.jpg"/>
  //    </div>
  //    <div class="text">
  //      <h3>Dish Number One</h3>
  //    </div>
  //  </div>
   
  //  <div class="box">
  //    <div class="imgBx">
  //      <img src="<?=base_url()?>assets/css/images/menu5.jpg"/>
  //    </div>
  //    <div class="text">
  //      <h3>Dish Number Six</h3>
  //    </div>
  //  </div>
   
  //  <div class="box">
  //    <div class="imgBx">
  //      <img src="<?=base_url()?>assets/css/images/menu.jpg"/>
  //    </div>
  //    <div class="text">
  //      <h3>Dish Number Five</h3>
  //    </div>
  //  </div>
   
  //  <div class="box">
  //    <div class="imgBx">
  //      <img src="<?=base_url()?>assets/css/images/menu1.webp"/>
  //    </div>
  //    <div class="text">
  //      <h3>Dish Number Four</h3>
  //    </div>
  //  </div>
  // </div> -->
