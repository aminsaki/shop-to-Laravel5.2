
function Func(Shahrestanha) {
    var _Shahrestan = document.getElementById("Shahrestan");
    _Shahrestan.options.length = 0;
    if(Shahrestanha != "") {
        var arr = Shahrestanha.split(",");
        for(i = 0; i < arr.length; i++) {
            if(arr[i] != "") {
                _Shahrestan.options[_Shahrestan.options.length]=new Option(arr[i],arr[i]);
            }
        }
    }
}



