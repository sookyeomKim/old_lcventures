/**
 * Created by ikks0 on 2016-12-28.
 */
(function ($) {
    $.ajaxSetup({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
    });

    getFisrtCob();

    getSecondCob();

    setTimePicker();

    setTag();

    setFormat();

    setImaText();

    $('#baidu_reg_button').click(function () {
        $(this).attr('disabled', 'disabled');
        baidu_reg_ajax(this);
    });

    function getFisrtCob() {
        $.ajax({
            type: 'get',
            url: $('#firstCob-url').val(),
            dataType: 'json'
        }).done(function (data) {
            $.each($.parseJSON(data), function (key, value) {
                var optionTag = $('<option value="' + value.cobName + '">' + value.cobName + '</option>');
                var cloneOptionTag = optionTag.clone(true);
                $('#c_first_cob').append(cloneOptionTag)
            });
        });
    }

    function getSecondCob() {
        $.ajax({
            type: 'get',
            url: $('#secondCob-url').val(),
            dataType: 'json'
        }).done(function (data) {
            $.each($.parseJSON(data), function (key, value) {
                var optionTag = $('<option value="' + value.cobName + '">' + value.cobName + '</option>');
                var cloneOptionTag = optionTag.clone(true);
                $('#c_second_cob').append(cloneOptionTag)
            });
        })
    }

    function setTimePicker() {
        $('#weekdays_times .time').timepicker({
            'showDuration': true,
            'timeFormat': 'g:ia',
            'noneOption': [
                {
                    'label': '영업 안 함',
                    'value': '영업 안 함'
                },
            ]
        });

        $('#weekdays_times').datepair();

        $('#weekend_times .time').timepicker({
            'showDuration': true,
            'timeFormat': 'g:ia',
            'noneOption': [
                {
                    'label': '영업 안 함',
                    'value': '영업 안 함'
                },
            ]
        });

        $('#weekend_times').datepair();

        $('#holiday_times .time').timepicker({
            'showDuration': true,
            'timeFormat': 'g:ia',
            'noneOption': [
                {
                    'label': '영업 안 함',
                    'value': '영업 안 함'
                },
            ]
        });

        $('#holiday_times').datepair();
    }

    function setTag() {
        $('#c_tag').tagEditor();
    }

    function setFormat() {
        var separator = '-';
        $('input.c_avg_price').keyup(function (event) {

            // 방향키 스킵
            if (event.which >= 37 && event.which <= 40) return;

            // 숫자 포맷팅
            // 숫자 의외의 다른 문자는 제거하고 3개의 숫자마다 콤마를 붙혀준다.
            $(this).val(function (index, value) {
                return value.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            });
        });

        $('input.c_crn').keyup(function (event) {
            if (event.which >= 37 && event.which <= 40) return;
            if ($(this).val().length < 12) {
                $(this).val(function (index, value) {
                    return value.replace(/\D/g, "").replace(/(\d{3})(\d{2})(\d{5})/, '$1' + separator + '$2' + separator + '$3');
                });
            } else {
                $(this).val($(this).val().substring(0, 12));
            }
        });
    }

    function baidu_reg_ajax(el) {
        $.ajax({
            url: $('#baidu-store-url').val(),
            data: new FormData($('#register-form')[0]),
            dataType: 'json',
            type: 'post',
            processData: false,
            contentType: false
        }).done(function (data) {
            alert('신청이 완료되었습니다.');
            window.location.href = '/';
        }).fail(function (data) {
            $(el).removeAttr('disabled');
            if (data.status === 422) {
                $.each(JSON.parse(data.responseText), function (key, value) {
                    $("#" + key).siblings('.error-message').text(value[0]).parent().addClass('has-error');
                });
                $('.error-message').click(function () {
                    $(this).text('').parent().removeClass('has-error').find('input').focus();
                });
            }
        })
    }

    function setImaText() {
        var split;
        $('.upload-button').change(function () {
            split = $(this).val().split('\\');
            $(this).closest('div').siblings().find('.upload-text').val(split.pop());
        })
    }
})(jQuery)