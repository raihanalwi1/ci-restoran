
        <style>
            body{
                background-color: #baae91;
            }
        </style>

<section class="about" id="about">
        <div class="row">
          <div class="col50">
            <?php
            $no=1;
            foreach($result as $tt){
              echo'
              <h2 class="titleText"> '.$tt->judul.'</h2>
                <p class="aboutus"> '.$tt->isi.'</p>
              </div>
              <div class="col50">
                <div class="imgBx">
                  <img src="'.base_url().''.$tt->gambar.'"/>
                </div>
              </div>
              ';

              $no++;
            }
            ?>
            
        </div>      
      </section>