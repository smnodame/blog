<!-- include libraries(jQuery, bootstrap) -->
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>

<!-- include summernote css/js-->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.js"></script>

<style>
    .modal-backdrop, .modal-backdrop.in {
        display: none;
    }
</style>

<script>
    $(document).ready(function() {
        $('#summernote').summernote({
              height: 300,                 // set editor height
              minHeight: null,             // set minimum height of editor
              maxHeight: null,             // set maximum height of editor
              focus: true                  // set focus to editable area after initializing summernote
        })

        $( "#save-button" ).click(function() {
            const title = $("#title").val()
            const description = $("#description").val()
            const category = $("#category").val()
            const content = $('#summernote').summernote('code')
            let tags = []
            $( ".tag" ).each(function( index ) {
                tags.push($(this).text())
            })

            $.post("http://localhost/tutorial_mvc/post/add",
            {
                name: "Donald Duck",
                city: "Duckburg"
            },
            function(data, status){
                alert("Data: " + data + "\nStatus: " + status);
            })
        })

        $( "#add-tag" ).click(function() {
            const tag = $("#tag-input").val()
            $("#tag-input").val('')
            if(tag)
                $("#tags").append('<span class="tag is-light is-medium" style="margin-right: 5px">'+ tag +'<button class="remove-tag delete"></button></span>')
        })

        $('#tags').on('click', '.remove-tag', function() {
            $(this).parent('.tag').remove()
        });
    })
</script>
