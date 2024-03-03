
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    contentType: false,
    processData: false
});

$(document).ready(function () {
    comment()
    $('#addComment').submit(function (e) {
        e.preventDefault();

        const dataform = new FormData(this);
        const dataid = $('#fotoID').val();
        const urlComents = `/comments/${dataid}`;

        $.ajax({
            url: urlComents,
            type: 'post',   
            data: dataform,
            success: function (res) {
                comment()
                console.log(res);
            }
        });
    });
});

function comment() {
    const id = $('#fotoID').val();
    $.ajax({
        url: `/getComment/${id}`,
        type: 'get',
        success: function (res) {
            $('#commentContainer').html(res);

            // const commentCount = res.length;
            // $('#commentCountContainer').text(`${commentCount}`);
            $('#CommentCount').load(location.href + ' #CommentCount');
        }.bind(this),
        error: function (jqXHR, ajaxOptions, thrownError) {
            console.log('server error');
        }
    })
}
