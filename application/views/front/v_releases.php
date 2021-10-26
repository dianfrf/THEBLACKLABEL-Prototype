<div class="jumbotron artiskonten">
    <div class="container-fluid">
        <h1>RELEASES</h1>
        <div class="row rowalbum" id="loadreleases" style="margin-top:.7rem"></div>
        <div id="pesan"></div>
    </div>
</div>
<script>
    //Load more releases
    $(document).ready(function() {
        var limit = 8;
        var start = 0;
        var action = 'inactive';
        function load_release_data(limit, start) {
            $.ajax({
                url: "<?=base_url('TBLController/loadreleases')?>",
                method: "POST",
                data: {limit:limit, start:start},
                cache: false,
                success:function(data) {
                    $('#loadreleases').append(data);
                    if(data == '') {
                        action = 'active';
                        $("#pesan").html('<center><div class="loader" style="display:none !important"></div></center>');
                    } else {
                        action = 'inactive';
                        $("#pesan").html('<center><div class="loader"></div></center>');
                    }
                }
            });
        }
        if(action == 'inactive') {
            action = 'active';
            load_release_data(limit, start);
        }
        $(window).scroll(function() {
            if($(window).scrollTop() + $(window).height() > $("#loadreleases").height() && action == 'inactive') {
                action = 'active';
                start = start + limit;
                setTimeout(function() {
                    load_release_data(limit, start);
                }, 1000);
            }
        });
    });
</script>