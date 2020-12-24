    $('#exit_btn').click(function() {
    $.ajax({
        url: '<?=$this_style?>',
        type: 'POST',
        cache: false,
        data: {},
        dataType: 'html',
        success: function(data) {
            document.location.replace('../index.php');
        }
    });
});