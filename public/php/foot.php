<footer>
    <div id="footer-top">
        <a href=""><i class="fa-brands fa-youtube"></i></a>
        <a href=""><i class="fa-brands fa-twitter"></i></a>
        <a href=""><i class="fa-brands fa-facebook"></i></a>
        <a href=""><i class="fa-brands fa-instagram"></i></a>
        <a href=""><i class="fa-brands fa-reddit"></i></a>
        
    </div>
    <div id="cpr">TM & © 2022 Evan GRUCHOT Inc. Tous droits réservés. </div>
    <div id="footer-bot">
        <a href="">NOTICE DE CONFIDENTIALITÉ</a>
        <a href="">CONDITIONS D'UTILISATION</a>
        <a href="">POLITIQUE SUR LES COOKIES</a>
        <a href="">INFORMATIONS SUR LA SOCIÉTÉ</a>
        <a href="">PRÉFÉRENCES DE COOKIES</a>
    </div>

</footer>


<script>

    ScrollReveal().reveal('.article',{delay:200});
    ScrollReveal().reveal('#hero h1, h2');


    // toggle les filtres

    $('#filter').hide();
    $('#filter-btn2').hide();
    $('#filter-btn1').click(function() {
        $('#filter').slideToggle();
        $('#filter-btn2').show();
        $('#filter-btn1').hide();
    });

    $('#filter-btn2').click(function() {
        $('#filter').slideToggle();
        $('#filter-btn2').hide();
        $('#filter-btn1').show();
    });


    // toggle le bouton favoris

    const fav = document.querySelectorAll('.fav');
    fav.forEach(element =>
    element.onclick= function(){
        element.classList.toggle("fa-solid");
        element.classList.toggle("fa-regular");
    }
    );



    // afficher image dans le formulaire

    var input = document.querySelector('#invisible');
    var label = document.querySelector('.custom');
    var preview = document.querySelector('#preview');

    input.style.opacity = 0;

    input.addEventListener('change', updateImageDisplay);

    function updateImageDisplay() {
        while(preview.firstChild) {
            preview.removeChild(preview.firstChild);
        }

        var curFiles = input.files;
        if(curFiles.length === 0) {
            var para = document.createElement('p');
            para.textContent = '...';
            preview.appendChild(para);
        } else {
            preview.style.opacity = 1;

            for(var i = 0; i < curFiles.length; i++) {
                var para = document.createElement('p');
                
                para.textContent = curFiles[i].name;
                var image = document.createElement('img');
                image.src = window.URL.createObjectURL(curFiles[i]);

                preview.appendChild(image);
                preview.appendChild(para);
                console.log(para);
            }
        }
    }

</script>

</body>
</html>