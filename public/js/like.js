
                $(document).ready(function(){
                    const isLiked = $('#likebtn').data('liked');
                    if (isLiked === true) {
                        $('#like').hide();
                        $('#liked').show();
                        $('#likebtn').addClass('follow-btn_2')
                        $('#likebtn').removeClass('follow-btn')

                    } else {
                        $('#like').show();
                        $('#liked').hide();
                        $('#likebtn').removeClass('follow-btn_2')
                        $('#likebtn').addClass('follow-btn')
                    }
                    $('#likebtn').click(function(){
                        const postId = $(this).data('id');
                        const likeURL = `/like-post/${postId}`;

                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });

                        $.ajax({
                            url: likeURL,
                            type: 'post',
                            success: function(data) {
                                if (data.liked) {
                                    $(this).find('#like').hide();
                                    $(this).find('#liked').show();
                                    $(this).addClass('follow-btn_2');
                                    $(this).removeClass('follow-btn');
                                } else {
                                    $(this).find('#like').show();
                                    $(this).find('#liked').hide();
                                    $(this).removeClass('follow-btn_2');
                                    $(this).addClass('follow-btn');
                                }
                                console.log(data);
                                // Assuming the correct ID is 'likeCount'

                                $('#likeCount').load(location.href + ' #likeCount');
                            }.bind(this),
                            error: function(jqXHR, ajaxOptions, thrownError) {
                                console.log('server error');
                            }
                        });
                    });
                });
