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
            timer = duration;
        }
    }, 1000);
}

function removeRow(id, url)
{
    $.ajax({
        type: 'DELETE',
        datatype: 'JSON',
        data: {id},
        url: url,
        success: function(result) {
            if(result.error == false) {
                toastr.success('Xóa thành công ' + '<div>Tải lại trang sau <b id="time">3</b>s!</div>')
                display = document.querySelector('#time');
                startTimer(2, display);
                setTimeout(function(){
                    window.location.reload()
                }, 3000)
            } else {
                toastr.error('Xóa thất bại.')
            }
        },
    })
}  