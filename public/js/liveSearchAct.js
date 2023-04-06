const input_act = document.getElementById("search_act");
const parent_act = document.getElementById("act_parent");

input_act.addEventListener("keyup", () => {
    if (input_act.value !== '') {
        parent_act.innerHTML = "<div class='content-box-2-5 dsp-flex fl-colm' style='transition: 0.2s;'><div class='content-box-subtitle'>Wait a second...</div><div class='box-log dummy'><div class='content-box-2-5 dsp-flex fl-row'><div class='content-box-2-5 dsp-flex fl-colm fl-X-center'><label></label></div></div><div class='content-box-2-5 for-msg-log padX-40 mX-t-20 dsp-flex fl-colm'><div class='list-log'><div class='message-log'></div><div class='time-log'></div></div><div class='list-log'><div class='message-log'></div><div class='time-log'></div></div><div class='list-log'><div class='message-log'></div><div class='time-log'></div></div></div></div><div class='box-log dummy'><div class='content-box-2-5 dsp-flex fl-row'><div class='content-box-2-5 dsp-flex fl-colm fl-X-center'><label></label></div></div><div class='content-box-2-5 for-msg-log padX-40 mX-t-20 dsp-flex fl-colm'><div class='list-log'><div class='message-log'></div><div class='time-log'></div></div><div class='list-log'><div class='message-log'></div><div class='time-log'></div></div><div class='list-log'><div class='message-log'></div><div class='time-log'></div></div></div></div><div class='box-log dummy'><div class='content-box-2-5 dsp-flex fl-row'><div class='content-box-2-5 dsp-flex fl-colm fl-X-center'><label></label></div></div><div class='content-box-2-5 for-msg-log padX-40 mX-t-20 dsp-flex fl-colm'><div class='list-log'><div class='message-log'></div><div class='time-log'></div></div><div class='list-log'><div class='message-log'></div><div class='time-log'></div></div><div class='list-log'><div class='message-log'></div><div class='time-log'></div></div></div></div></div>";

        $.ajax({
            url: ipaddress + "/manager/livesearchact",
            method: "post",
            data: {
                keyword: input_act.value
            },
            dataType: "json",
            success: function (response) {
                parent_act.innerHTML = '';
                console.log(response);
                parent_act.innerHTML = "<div class='box dsp-grid fl-center height-calc-200px'><div class='box-message'><div class='icon-message img-searchMore'></div><p>No result for this keyword :(</p></div></div>";
            }
        });
    }
});