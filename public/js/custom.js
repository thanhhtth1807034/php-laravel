// $(document).ready(function() {
//     $("#checkAll").click(function () {
//         $('input:checkbox').prop('checked', this.checked);
//     });
// });

$(document).ready(function () {
    $('.btn-delete').click(function () {
        if (confirm('Are you sure wanna delete this game ?')) {
            var deleteId = $(this).attr('id').replace('btn-delete-', '');
            var currentItem = $(this);

            $.ajax({
                url: '/game/' + deleteId,
                method: 'DELETE',
                data: {
                    '_token': $('meta[name= csrf-token]').attr('content')
                },
                success: function () {
                    alert('Success');
                    currentItem.closest("tr").remove();
                },
                error: function () {
                    alert('Error');
                }
            })
        }
    })
});

$(document).ready(function () {
    $("#search").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});

$(document).ready(function () {
    $('#checkAll').on('click', function (e) {
        if ($(this).is(':checked', true)) {
            $(".checkbox").prop('checked', true);
        } else {
            $(".checkbox").prop('checked', false);
        }
    });

    $('.checkbox').on('click', function () {
        if ($('.checkbox:checked').length == $('.checkbox').length) {
            $('#checkAll').prop('checked', true);
        } else {
            $('#checkAll').prop('cheked', false);
        }
    })

    $('.delete-all').on('click', function (e) {
        var idArr = [];
        $(".checkbox:checked").each(function () {
            idArr.push($(this).attr('data-id'));
        });

        if (idArr.length <= 0) {
            alert(" Please check at least one game to delete")
        } else {
            if (confirm("Are you sure wanna to delete the selected games ?")) {
                var strIds = idArr.join(",");

                $.ajax({
                    url: '/game/delete-multiple',
                    type: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        // '_token': $('meta[name= csrf-token]').attr('content'),
                        'ids =': +strIds,
                        success: function () {
                            $(".checkbox:checked").each(function () {
                                $(this).closest("tr").remove();
                            });
                            alert("Delete All Success with Ids :" + strIds)
                        },
                        // error: function () {
                        //     alert("Error");
                        // }
                    },

                })
            }
        }
    })
});
