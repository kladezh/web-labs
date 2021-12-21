$(document).ready(function () {
    $(".delete-item").click(function () {
        if (window.confirm("Удалить запись?")) {
            window.location.replace('?controller=' + $(this).attr("data-EntityName") + '&id=' + $(this).attr("data-itemid"));
        }
    });
});