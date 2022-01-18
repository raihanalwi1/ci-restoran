
   
      <!-- isi -->
      <section class="banner" id="banner">
	      <div class="content">
		     <h2>Good Apetite.</h2>
			 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
			 Cras porta est id posuere viverra. 
			 Nam iaculis dapibus massa, in dignissim nunc laoreet sed.
			 lesuada magna a, ultricies enim. </p>
			 <a href="<?=base_url()?>index.php/Menu" class="btn">Our Menu</a>
		  </div>
	   </section>
	   
      <section class="about" id="about">
        <div class="row">
          <div class="col50">
		  <?php
            $no=1;
            foreach($about as $tt){
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
      <!-- <section class="contact" id="contact">
		  <div class="title">
		     <h2 class="titleText"><span>C</span>ontact Us</h2>
			<p>Hello, Ola', Bonjour... </p>
		  </div>
		  <div class="contactForm">
		    <h3>Send Message To Us</h3>
			<div class="inputBox">
			  <input type="text" placeholder="Name"/>
			</div>
			<div class="inputBox">
			  <input type="text" placeholder="Email"/>
			</div>
			<div class="inputBox">
			  <textarea placeholder="Name"></textarea>
			</div>
			<div class="inputBox">
			  <input type="submit" value="Send"/>
			</div>
		  </div>
		</section> -->
		
