
$(document).ready(function(){
    
    $(document).on('click', '.register-popup', function(){
        $('#register-box').slideToggle();
        $('#login-box').hide();
    });

    $(document).on('change', '.rdoRegister', function(){
        $('#btnRegister').attr('data-url', $(this).val());
    });
    $('#btnRegister').attr('data-url', $('#rdoCons').val());

    $(document).on('click', '#btnRegister', function(){

        location.href = $('#btnRegister').data('url');
    });    
});

$(document).ready(function(){
    $(document).on('click', '.login-popup', function(){
        $('#login-box').slideToggle();
        $('#register-box').hide();
    });
});
