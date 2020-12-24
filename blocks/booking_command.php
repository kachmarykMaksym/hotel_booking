$('#book_hotel').click(function() {
    var email_book = $('#email_book').val();
    var country_book = $('#country_book').val();
    var label_book = $('#label_book').val();
    var date_book = $('#date_book').val();
    $.ajax({
        url: './reg/add_booking.php',
        type: 'POST',
        cache: false,
        data: {'email_book': email_book, 'country_book': country_book, 'label_book': label_book, 'date_book': date_book},
        dataType: 'html',
        success: function(data) {
            if (data == 'Готово') {
            $('#booking.php').text('Все готово');
            document.location.reload(true);
            } 
        }
    });
});