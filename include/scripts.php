<?php
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
    $(document).ready(function(){
        $('.owl-carousel').owlCarousel({
            loop: true,     // Loop infinito
            margin: 20,     // Espaço entre os cards
            nav: false,     // Esconde as setas (nav)
            dots: true,     // Mostra os pontos (dots)
            responsive:{
                0:{           // Em telas pequenas (mobile)
                    items: 1    // Mostra 1 item
                },
                992:{         // Em telas 'lg' (desktop)
                    items: 2    // Mostra 2 itens, como no design
                }
            }
        });
    });
</script>

<!-- JavaScript Owl Carousel -->

