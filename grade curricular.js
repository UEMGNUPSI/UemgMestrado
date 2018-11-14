    $( function(e) {
        $('.ciencias').click(function(e){
                  $('html,body').animate({scrollTop:$('#CienciasAmbientais').offset().top},1000); 
                                                             
        });
    }); 

    function voltarTopo() {
        $('html,body').scrollTop(0);
    }

var $w = $(window);

$w.on("scroll", function(){
    if( $w.scrollTop() > 1800) {
        $('#top').css("display","block");
    }
});
$w.on("scroll", function(){
    if( $w.scrollTop() < 1800) {
        $('#top').css("display","none");
    }
});