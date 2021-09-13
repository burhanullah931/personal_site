@extends('layouts.site.app')
@section('styles')

@endsection
@section('content')

<section id="thanks" style="margin-top:0px">
    <div class="container">
        <div class="row">
            <div class="col-md-12 header-title text-center">
                <h1>you're all set!</h1><br>


                <p>You should receive a confirmation email shortly. If you do not receive the confirmation email in the
                    next few minutes, please check your spam folder.</p>
                <a role="button" class="btn btn-default" href="{{route('site.home')}}">Back To Home<i
                        class="fa fa-long-arrow-alt-right"></i></a>
            </div>
        </div>
    </div>
</section>
<section id="thanks_content">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="{{asset('/ps/asset/images/laptop.png')}}" class="img-responsive">
            </div>
            <div class="col-md-6">
                <h4>
                    Thank you for using PersonalSite for creating your personal brand </h4>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')

<script type="text/javascript">
    $(document).ready(function () {

        $(".fa-search").click(function () {
            $(".search, .input").toggleClass("active");
            $("input[type='text']").focus();
        });

    });

</script>
<script>
    (function ($) {
        $(document).ready(function () {

            $("#header").show();
            $(function () {
                $(window).scroll(function () {
                    if ($(this).scrollTop() > 50) {
                        $("#header").fadeOut();
                    } else {
                        $("#header").fadeIn();
                    }
                });
            });
        });

    }(jQuery));

</script>



@endsection
