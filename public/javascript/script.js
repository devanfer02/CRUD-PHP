$(function() {
    $('.viewModalChange').on('click', function() {
        $('#modalFormLabel').html('Update Student Data');
        $('.modal-footer button[type=submit]').html('Update Data');
        $('modal-body form').attr('action','http://localhost/basics/MVC-PHP/public/students/update')

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
                $('#name').val(data.name);
                $('#id').val(data.id);
            }
        })
    })
});