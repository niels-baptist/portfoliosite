$(document).ready(function() {
    hideAll($('#accordion'));
    resetClass($('#BtnAbout'));
});

$(window).on('load', function () {
    $('select').addClass('p-2 rounded');
  });

$( "#BtnProjects" ).click(function() {
    hideAll($('#DivProjects'));
    resetClass($('#BtnProjects'));
});

$( "#BtnAbout" ).click(function() {
    hideAll($('#accordion'))
    resetClass($('#BtnAbout'));
});

$( "#BtnContact" ).click(function() {
    hideAll($('#DivContact'));
    resetClass($('#BtnContact'));
});

$( "#BtnContactA" ).click(function() {
    hideAll($('#DivContact'));
    resetClass($('#BtnContact'));
});

function hideAll(DivToShow) {
    $('#accordion').hide();
    $('#DivContact').hide();
    $('#DivProjects').hide();
    $(DivToShow).show();
}

function resetClass(LinkToGiveClass) {
    $('#BtnAbout').removeClass('text-white bg-info');
    $('#BtnProjects').removeClass('text-white bg-info');
    $('#BtnContact').removeClass('text-white bg-info');
    $(LinkToGiveClass).addClass('text-white bg-info');
}