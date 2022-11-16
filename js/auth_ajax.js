$(function () {
    $('form').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            type: 'post',
            dataType: 'json',
            url: 'check_user.php',
            data: $('form').serialize(),
            success: function (response) {
                if(response['found'] === 'true') {
                    location.href = 'index.php';
                } else {
                    alert('Incorrect username or password, please try again');
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert(errorThrown);
            }
        });

    });
});