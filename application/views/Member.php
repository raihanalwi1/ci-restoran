
    <style>
        .testimonials .content .box{
            background-color: #ECEFF4;
            box-shadow: 0 5px 35px rgb(0 0 0 / 88%);
        }
    </style>
	
     <section class="testimonials" id="testimonials">
        <div class="title white">  
            <h2 class="titleText">Kelompok <span> Kece   </span></h2>
        </div>
        
        <div class="content">
            <?php
            $no=1;
			foreach ($result as $rs) {
            echo
            '
            <div class="box">
                <div class="imgBx">
                    <img src="'.base_url().''.$rs->gambar.'"/>
                </div>
     
                <div class="text">
                    <h3>'.$rs->nama.'</h3>
                    <h3>'.$rs->npm.'</h3>
                </div>
            </div>
            ';
            $no++;
            }
               ?>

        </div>
    </section>
<!-- 
    <div class="box">
                <div class="imgBx">
                <img src="<?=base_url()?>assets/css/images/testi2.jpg"/>
                </div>
                <div class="text">
                    <h3>Adi Indra</h3>
                </div>
            </div>

            <div class="box">
                <div class="imgBx">
                <img src="<?=base_url()?>assets/css/images/testi2.jpg"/>
                </div>
                <div class="text">
                    <h3>Raihan Alwi</h3>
                </div>
            </div>

            <div class="box">
                <div class="imgBx">
                <img src="<?=base_url()?>assets/css/images/testi2.jpg"/>
                </div>
                <div class="text">
                    <h3>Raudhi Achmad</h3>
                </div>
            </div>

            <div class="box">
                <div class="imgBx">
                <img src="<?=base_url()?>assets/css/images/testi2.jpg"/>
                </div>
                <div class="text">
                    <h3>Raka Nugraha</h3>
                </div>
            </div>

            <div class="box">
                <div class="imgBx">
                <img src="<?=base_url()?>assets/css/images/testi2.jpg"/>
                </div>
                <div class="text">
                    <h3>Romi Ari</h3>
                </div>
            </div> -->