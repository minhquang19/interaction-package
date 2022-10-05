$(document).on("click", ".wapper-like .create", function() {

    var status;
    if ($(this).hasClass('addDislike')) {
        status = 2
    }
    if ($(this).hasClass('addLike')) {
        status = 1
    }
    var $this = $(this);
    var html = $(this).parent();
    $.ajax({
        type: "GET",
        url: "/interaction",
        data: {
            resource_type: $(this).attr("resource"),
            resource_id: $(this).attr("resource_id"),
            user_id: $(this).attr("user_id"),
            status: status,
        },
        success: function(data) {
            html.html(data);
        },
        error: function(jqXHR, textStatus, errorThrown) {}
    });


});
$(document).on("click", ".wapper-like .remove", function() {

    var status;
    if ($(this).hasClass('addDislike')) {
        status = 2
    }
    if ($(this).hasClass('addLike')) {
        status = 1
    }
    var $this = $(this);
    var html = $(this).parent();
    $.ajax({
        type: "GET",
        url: "/interactionDelete",
        data: {
            id: $(this).attr("id"),
        },
        success: function(data) {
            html.html(data);
        },
        error: function(jqXHR, textStatus, errorThrown) {}
    });


});