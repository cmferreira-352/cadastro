(function(){
//    $('#remover-action').bind('mouseenter', function(){
//        var id = $(this).attr('rel');
//        console.log(id);
//        console.log('teste');
//    });

})(window)
    function passId(id, url) {
        var form = document.getElementById('remover-form');
        form.action = url + 'index.php/cliente/apagar/' + id;
    }