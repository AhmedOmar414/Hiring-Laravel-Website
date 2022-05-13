<section class="banner-area relative" id="home" style="height:75vh;margin-top: -100px">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row fullscreen d-flex align-items-center justify-content-center">
            <div class="banner-content col-lg-12">
                <h1 class="text-white">
                    <span>Find</span> Your Ideal Job
                </h1>
            </div>
        </div>
    </div>
</section>

    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $("#category_list").on('change',function(){
                let id = $(this).val();
                $('#sub_cat').empty();
                $.ajax({
                    method:'Get',
                    url:'/jobcat/'+id,
                    success: function(response) {
                        $.each(response.data,function(key,val){
                            $('#sub_cat').append("<option value='"+val.id+"'>"+val.job_name+"</option>");
                        });

                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            });
        });
    </script>
