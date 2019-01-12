$(document).ready(function () {

    //------------------Alert-----------------------

    $(".alert").fadeOut(3000);

    // -----------------token ----------------------

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });



    $('#ajaxDatetour').on('click', function (event) {
        event.preventDefault();
        ajaxLoad($(this).attr('href'));
    });


    function ajaxLoad(filename) {

        $.ajax({
            type: "GET",
            url: filename,
            contentType: false,
            success: function (data) {
                // $("#" + content).html(data);
                $("#content").html(data);

                $(document).on('click', 'button[data-id]', function (e) {

                    let id = $(this).data('id');

                    var form = $('form#frm');
                    var data = {
                        question: $('#question_d[data-id="' + id + '"]').val(),
                        answer: $('#answer_d[data-id="' + id + '"]').val(),
                        score: $('#score_d[data-id="' + id + '"]').val()
                    };
                    var url = "update?id=" + id;
                    // console.log(form,data, url);
                    $.ajax({
                        type: form.attr('method'),
                        url: url,
                        data: data,
                        cache: false,
                        success: function (data) {
                            if (data.fail) {
                                for (control in data.errors) {
                                    $('#error-' + control).html(data.errors[control]);
                                }
                            } else {
                                document.location.reload();
                            }
                        },
                        error: function (xhr, textStatus, errorThrown) {
                            console.log("Error: " + errorThrown + xhr + textStatus);
                            console.log(xhr);
                        }
                    });
                    return false;

                });

            },
            error: function (xhr, status, error) {
                alert(xhr.responseText);
            }
        });
    }


});
