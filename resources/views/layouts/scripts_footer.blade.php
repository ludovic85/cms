<script src="{{ asset('public/frontend/js/custom.js') }}"></script>

@if($g_setting->sticky_header_status == 'Show')
<script>
    //StickyHeader
    function stickyHeader()
    {
        var stickyScrollPos = $('#stickymenu').next().offset().top;
        if ($('#stickymenu').length)
        {
            if ($(window).scrollTop() > stickyScrollPos)
            {
                $('#stickymenu').addClass('sticky');
            }
            else if ($(window).scrollTop() <= stickyScrollPos)
            {
                $('#stickymenu').removeClass('sticky');
            }
        };
    }
    $(window).on('scroll', function () {
        stickyHeader();
    });
</script>
@endif

<script>
    toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": true,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "3000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }

    // switch language feature

    function changeLanguage(locale){
	//	jQuery('#loader').show();
		$.ajax({
			url: '{{ URL::to("/language")}}',
			type: "POST",
			data: '&locale='+locale,
			//dataType:"json",

			success: function (res) {
				window.location.reload(true);
			},
		});

	};
	
	
	$(function() {

        $("#change_language")
		.iconselectmenu({
		  create: function (event, ui) {
			  var widget = $(this).iconselectmenu("widget");
			  $span = $('<span id="' + this.id + '_image" class="ui-selectmenu-image"> ').html("&nbsp;").appendTo(widget);
			  $span.attr("style", $(this).children(":selected").data("style"));

		  },
		  change: function (event, ui) {
			  $("#" + this.id + '_image').attr("style", ui.item.element.data("style"));
			  var locale = jQuery(this).val();
			  changeLanguage(locale);

		  }
		}).iconselectmenu("menuWidget").addClass("ui-menu-icons customicons");

    } );

</script>

@if ($errors->any())
    @php $err = '';  @endphp
    @foreach ($errors->all() as $error)
        <script>
            toastr.error('{{ $error }}');
        </script>
    @endforeach
@endif

@if(session()->get('error'))
    <script>
        toastr.error('{{ session()->get('error') }}');
    </script>
@endif

@if(session()->get('success'))
    <script>
        toastr.success('{{ session()->get('success') }}');
    </script>
@endif


@if($g_setting->tawk_live_chat_status == 'Show')
<!--Start of Tawk.to Script-->
{!! $g_setting->tawk_live_chat_code !!}
<!--End of Tawk.to Script-->
@endif
