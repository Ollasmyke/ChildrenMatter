$('#send').on('click', function(e) {
    e.preventDefault();

    var name = $("#name").val();
    var mail = $("#mail").val();

    $.ajax({
        type: "POST",
        url: "", // Sent URL to Controller
        data: { name: name, mail: mail }, // key to peer values in .json
        success: function(data) {
            // window.location.reload();
            // alert(data); 

        }
    })
})