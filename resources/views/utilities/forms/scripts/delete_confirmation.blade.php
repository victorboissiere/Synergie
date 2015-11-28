<script>
    $('.removeItem').click(function (event) {
        event.preventDefault();
        var url = $(this).prop('href');
        var id = $(this).data('id');
        var token = $('input[name="_token"]').val();
        if (confirm('Are you sure you want to delete this?')) {
            $.ajax({
                url: url,
                type: "DELETE",
                data: {
                    _token : token
                },
                success: function (data) {
                    $('.post-' + id).remove();
                },
                error: function(xhr, ajaxOptions, thrownError)
                {
                    var json = $.parseJSON(xhr.responseText);
                    alert('Error : ' + json['message']);
                }
            });
        }
    });
</script>