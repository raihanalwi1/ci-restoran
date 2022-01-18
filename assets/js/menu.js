window.addEventListener('scroll', function(){
		   
    const header = document.querySelector('header');
    header.classList.toggle("sticky", window.scrollY > 0);
    
    });
    
    function toggleMenu() {
    
    const menuToggle = document.querySelector('.menuToggle');
    const navigation = document.querySelector('.navigation');
    menuToggle.classList.toggle('active');
    navigation.classList.toggle('active'); 
    
    }
    // const merupakan variabel block-scoped yaitu ia hanya dapat dipanggil oleh program dalam 1 blok yang sama, atau program di dalam tanda { } . ... Berbeda dengan let maupun var yang mana kita bisa mendeklarasikan variabel tanpa perlu menentukan nilainya terlebih dahulu.
