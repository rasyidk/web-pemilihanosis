function passwordVisibility() {
    var passwd = document.getElementById("inputPassword");
    if (passwd.type === "password") {
        passwd.type = "text";
    } else {
        x.type = "password";
    }
}

$(document).ready(function () {
    $('ketua').click(function () {
        $('ketua').removeClass("activated");
        $(this).addClass("activated");
    });
});

function showChosen() {
    var chosenKetua = document.getElementsByClassName("ketua activated").url;
    var img;
    img.src = chosenKetua;
    $('chosenKandidat').html(img);
}

document.getElementsByClassName("btn-primary").onclick = function () {
    window.prompt("HAIIII");
}

function toggleSelected(selector) {
    var prevSelected = $(selector + '.selected');
    if (prevSelected) {
        prevSelected.removeClass('selected');
    }
    $(this).addClass('selected');
}

// Kandidat Selection
var map = {};
$(".ketua").click(function () {
    $(".ketua").removeClass("activated");
    $(this).addClass("activated")
    toggleSelected.call(this, '.ketua');
    enableSubmitButton();
    var elem = $(this)[0];
    map.ketua = elem.dataset.id;
});

$(".sekretaris").click(function () {
    $(".sekretaris").removeClass("activated");
    $(this).addClass("activated");
    toggleSelected.call(this);
    enableSubmitButton();
    var elem = $(this)[0];
    map.sekretaris = elem.dataset.id;
});

$(".bendahara").click(function () {
    $(".bendahara").removeClass("activated");
    $(this).addClass("activated")
    toggleSelected.call(this);
    enableSubmitButton();
    var elem = $(this)[0];
    map.bendahara = elem.dataset.id;
});
function checkIfKetuaSelected() {
    var homeActivated = document.querySelector('#home').querySelectorAll('.selected');
}

function checkISekretarisSelected() {
    var homeActivated = document.querySelector('#home').querySelectorAll('.selected');
    var menu1Activated = document.querySelector('#menu1').querySelectorAll('.selected');
}

function checkIfAllSelected() {
    var homeActivated = document.querySelector('#home').querySelectorAll('.selected');
    var menu1Activated = document.querySelector('#menu1').querySelectorAll('.selected');
    var menu2Activated = document.querySelector('#menu2').querySelectorAll('.selected');

    return (homeActivated.length && menu1Activated.length && menu2Activated.length);
}

function enableToSekretarisButton() {
    if (checkIfKetuaSelected()) {
        var toSekretarisBtn = document.getElementsByClassName("to-sekretaris");
        toSekretarisBtn[0].disabled = false;
    }
}

function enableSubmitButton() {
    
    if (checkIfAllSelected()) {
        var submitBtn = document.getElementsByClassName("kandidat-submit");
        submitBtn[0].disabled = false;
    }
}

$('.yakin').on('click', function(e) {
    var ketua = map.ketua;
    var sekretaris = map.sekretaris;
    var bendahara = map.bendahara;
    var nis_siswa = localStorage.getItem("NIS");

console.log(map);

    $.ajax({
        type: "POST",
        url: 'insertphoto.php',
        data: {
            ketua: ketua,
            sekretaris: sekretaris,
            bendahara: bendahara,
            nis_siswa: nis_siswa 
        },
        success: function(data){
            alert(data)
            
        }
    });
});