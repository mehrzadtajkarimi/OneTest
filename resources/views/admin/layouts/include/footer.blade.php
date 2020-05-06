<script src="{{ asset('/Admin/plugins/jquery/jquery.min.js')}}"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="{{ asset('/Admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="{{ asset('/Admin/plugins/morris/morris.min.js')}}"></script>
<script src="{{ asset('/Admin/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
<script src="{{ asset('/Admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{ asset('/Admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="{{ asset('/Admin/plugins/knob/jquery.knob.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="{{ asset('/Admin/plugins/daterangepicker/daterangepicker.js')}}"></script>
<script src="{{ asset('/Admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<script src="{{ asset('/Admin/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{ asset('/Admin/plugins/fastclick/fastclick.js')}}"></script>
<script src="{{ asset('/Admin/plugins/ionslider/ion.rangeSlider.min.js')}}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



<!-- AdminLTE App -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('js/admin.js') }}"></script>
<script src="{{ asset('/Admin/plugins/datepicker/persian-date.min.js')}}"></script>
<script src="{{ asset('/Admin/plugins/datepicker/persian-datepicker.min.js')}}"></script>
<!-- AdminLTE App -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- AdminLTE for demo purposes -->




<script type="text/javascript">
    $(document).ready(function() {
            $(".start_at").pDatepicker({
            "inline": false,
            // "format": "LLLL",
            "viewMode": "day",
            "initialValue": true,
            "minDate": null,
            "maxDate": null,
            "autoClose": true,
            "position": "auto",
            "altFormat": "X",
            "altField": "#start_at",
            "onlyTimePicker": false,
            "TimePicker": true,
            "onlySelectOnDate": true,
            "calendarType": "persian",
            "inputDelay": 800,
            "observer": true,
            "calendar": {
                "persian": {
                    "locale": "fa",
                    "showHint": true,
                    "leapYearMode": "algorithmic"
                },
                "gregorian": {
                    "locale": "en",
                    "showHint": true
                }
            },
            "navigator": {
                "enabled": true,
                "scroll": {
                    "enabled": true
                },
                "text": {
                    "btnNextText": "<",
                    "btnPrevText": ">"
                }
            },
            "toolbox": {
                "enabled": true,
                "calendarSwitch": {
                    "enabled": true,
                    "format": "HH:mm"
                },
                "todayButton": {
                    "enabled": true,
                    "text": {
                        "fa": "امروز",
                        "en": "Today"
                    }
                },
                "submitButton": {
                    "enabled": true,
                    "text": {
                        "fa": "تایید",
                        "en": "Submit"
                    }
                },
                "text": {
                    "btnToday": "امروز"
                }
            },
            "timePicker": {
                "enabled": true,
                "step": "1",
                "hour": {
                    "enabled": true,
                    "step": true
                },
                "minute": {
                    "enabled": true,
                    "step": null
                },
                "second": {
                    "enabled": false,
                    "step": null
                },
                "meridian": {
                    "enabled": null
                }
            },
            "dayPicker": {
                "enabled": true,
                "titleFormat": "YYYY MMMM"
            },
            "monthPicker": {
                "enabled": true,
                "titleFormat": "YYYY"
            },
            "yearPicker": {
                "enabled": true,
                "titleFormat": "YYYY"
            },
            "responsive": true
        });
            $(".finish_at").pDatepicker({
            "inline": false,
            // "format": "LLL",
            "viewMode": "day",
            "initialValue": true,
            "minDate": null,
            "maxDate": null,
            "autoClose": true,
            "position": "auto",
            "altFormat": "X",
            "altField": "#finish_at",
            "onlyTimePicker": false,
            "TimePicker": true,
            "onlySelectOnDate": true,
            "calendarType": "persian",
            "inputDelay": 800,
            "observer": true,
            "calendar": {
                "persian": {
                    "locale": "fa",
                    "showHint": true,
                    "leapYearMode": "algorithmic"
                },
                "gregorian": {
                    "locale": "en",
                    "showHint": true
                }
            },
            "navigator": {
                "enabled": true,
                "scroll": {
                    "enabled": true
                },
                "text": {
                    "btnNextText": "<",
                    "btnPrevText": ">"
                }
            },
            "toolbox": {
                "enabled": true,
                "calendarSwitch": {
                    "enabled": true,
                    "format": "HH:mm"
                },
                "todayButton": {
                    "enabled": true,
                    "text": {
                        "fa": "امروز",
                        "en": "Today"
                    }
                },
                "submitButton": {
                    "enabled": true,
                    "text": {
                        "fa": "تایید",
                        "en": "Submit"
                    }
                },
                "text": {
                    "btnToday": "امروز"
                }
            },
            "timePicker": {
                "enabled": true,
                "step": "1",
                "hour": {
                    "enabled": true,
                    "step": true
                },
                "minute": {
                    "enabled": true,
                    "step": null
                },
                "second": {
                    "enabled": false,
                    "step": null
                },
                "meridian": {
                    "enabled": null
                }
            },
            "dayPicker": {
                "enabled": true,
                "titleFormat": "YYYY MMMM"
            },
            "monthPicker": {
                "enabled": true,
                "titleFormat": "YYYY"
            },
            "yearPicker": {
                "enabled": true,
                "titleFormat": "YYYY"
            },
            "responsive": true
        });





        $(".js-range-slider").ionRangeSlider({
            skin: "round",
            grid: true,
            min: 0,
            max: 100,
            from: 21,
            max_postfix: "+",
            prefix: "Age: ",
            postfix: " years"
        });

    });
</script>
