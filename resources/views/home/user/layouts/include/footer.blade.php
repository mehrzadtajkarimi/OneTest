<!-- Main JS -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/all.js') }}"></script>
<script>
    new WOW().init();
    $("#TimeCircles").TimeCircles({
        "animation": "smooth",
        "bg_width": 1,
    "fg_width": 0.12333333333333334,
    "circle_bg_color": "#ccc",
    "time": {
        "Days": {
            "text": "Days",
            "color": "#FFCC66",
            "show": false
        },
        "Hours": {
            "text": "ساعت",
            "color": "#99CCFF",
            "show": true
        },
        "Minutes": {
            "text": "دقیقه",
            "color": "#BBFFBB",
            "show": true
        },
        "Seconds": {
            "text": "ثانیه",
            "color": "#FF9999",
            "show": true
        }
        },
        'count_past_zero': false
    }).addListener(countdownComplete);
    function countdownComplete(unit, value, total){
	if(total<=0){
            $(this).fadeOut(5000,function(){
                $('#formToStore').submit();
            });
        }
    };
    $(document).ready(function() {
        $('#example').DataTable({
            "language": {
                "sEmptyTable":     "هیچ داده‌ای در جدول وجود ندارد",
                "sInfo":           "نمایش _START_ تا _END_ از _TOTAL_ ردیف",
                "sInfoEmpty":      "نمایش 0 تا 0 از 0 ردیف",
                "sInfoFiltered":   "(فیلتر شده از _MAX_ ردیف)",
                "sInfoPostFix":    "",
                "sInfoThousands":  ",",
                "sLengthMenu":     "نمایش _MENU_ ردیف",
                "sLoadingRecords": "در حال بارگزاری...",
                "sProcessing":     "در حال پردازش...",
                "sSearch":         "جستجو:",
                "sZeroRecords":    "رکوردی با این مشخصات پیدا نشد",
                "oPaginate": {
                    "sFirst":    "برگه‌ی نخست",
                    "sLast":     "برگه‌ی آخر",
                    "sNext":     "بعدی",
                    "sPrevious": "قبلی"
                },
                "oAria": {
                    "sSortAscending":  ": فعال سازی نمایش به صورت صعودی",
                    "sSortDescending": ": فعال سازی نمایش به صورت نزولی"
                }
            }
        });
    } );
</script>
