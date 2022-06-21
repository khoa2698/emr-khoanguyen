$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

// function countdown time
function startTimer(duration, display) {
    var timer = duration;
    setInterval(function () {
        seconds = parseInt(timer % 60, 10);

        display.textContent = seconds;

        if (--timer < 0) {
            timer = 0;
        }
    }, 1000);
}

function removeRow(id, url, page)
{
    $.ajax({
        type: 'DELETE',
        datatype: 'JSON',
        data: {id},
        url: url,
        success: function(result) {
            if(result.error == false) {
                // urlLoadAjax = 
                toastr.success('Xóa thành công')
                $('#rowId_' + id).remove();
                $('.loadAjax').load('/emr/account?page=' + page + ' .loadAjax');
                // display = document.querySelector('#time');
                // startTimer(2, display);
                // setTimeout(function(){
                //     window.location.reload()
                // }, 3000)
            } else {
                toastr.error('Xóa thất bại.')
            }
        },
    })
}
var base_url = window.location.origin;
$('#city_id').on('change', function(){
    let province_id = $('#city_id').val()
    let ward = '<option value="">Chọn Phường / Xã</option>';
    $.ajax({
        type: 'POST',
        data: {province_id},
        url: base_url + '/emr/patient/loadDistrict',
        success: function(result) {
            $('#district_id').html(result)
            $('#ward_id').html(ward)
        }
    })
})

$('#district_id').on('change', function(){
    let district_id = $('#district_id').val()
    if(district_id){
        $.ajax({
            type: 'POST',
            data: {district_id},
            url: base_url + '/emr/patient/loadWard',
            success: function(result) {
                $('#ward_id').html(result)
            }
        })
    }
})