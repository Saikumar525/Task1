//Popoper
$(document).ready(function () {
    $('[data-toggle="popover"]').popover();
});

//Tooltips
$(document).ready(function () {
    $('[data-toggle="tooltip"]').tooltip();
});

//Loader
$(document).ready(function () {
    setTimeout(function () {
        var container = $("#myloader");
        container.hide();
    }, 3000)
});
//hide containers when loader loading
$(window).on("load", function (e) {
    var div1 = $("#header");
    var div2 = $("#contents");
    var div3 = $("#pagefooter");
    var div4 = $("#users");
    var div5 = $("#progressbar");
    var div6 = $("#months");
    var div7 = $("#paginations");
    var div8 = $("#mytable");
    div1.hide();
    div2.hide();
    div3.hide();
    div4.hide();
    div5.hide();
    div6.hide();
    div7.hide();
    div8.hide();
    setTimeout(function () {
        div1.show();
        div2.show();
        div3.show();
        div4.show();
        div5.show();
        div6.show();
        div7.show();
        div8.show();
    }, 3000)
})


/*width of the sidebar on click*/
function openNav() {
    document.getElementById("mySidebar").style.width = "175px";
    document.getElementById("main").style.marginLeft = "175px";
  }
  
/*width of the sidebar when close*/
  function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
  }

  $(document).ready(function () {
    $('#usertable').DataTable();
});


