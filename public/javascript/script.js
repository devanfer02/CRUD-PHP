$(function() {
    $('.viewModalChange').on('click', function() {
        console.log("OK");
        $('#modalFormLabel').html('Update Student Data');
        $('.modal-footer button[type=submit]').html('Update Data');
        const id = $(this).data('id');
        
        
        $.ajax({
            url: 'http://localhost/basics/MVC-PHP/public/students/getStudent',
            data: {id: id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#name').val(data.name);
                $('#email').val(data.email);
                $('#nim').val(data.nim);
                $('#major').val(data.major);
                $('#university').val(data.university);
                $('#id').val(data.id);
            }
        })
    })
});

$('form').on('submit', function(e) {
    console.log('Form submitted!');
});