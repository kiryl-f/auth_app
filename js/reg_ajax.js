$(function () {
    $('form').on('submit', function (e) {
        e.preventDefault();

        var password = $('#password').val().trim();
        var confirm_password = $('#confirm_password').val().trim();
        if(password === confirm_password) {
            $.ajax({
                type: 'post',
                url: 'create_user.php',
                data: $('form').serialize(),
                success: function (response) {
                    if(response === 'login'){
                        alert('This login is taken');
                    } else if(response === 'email') {
                        alert('This email is taken');
                    } else {
                        location.href = 'index.php';
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    alert(errorThrown);
                }
            });
        } else {
            alert('Passwords do not match');
        }
    });
});
