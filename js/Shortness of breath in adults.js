

$(document).ready(function(){
    $('#one').click(function(){
        $("div.one").addClass("hidden");
            $("div.two").removeClass("hidden");
            $("div.two").show();
          
       
    });
});
$(document).ready(function(){
    $('#zero').click(function(){
        $("div.one").addClass("hidden");
        $("div.one").hide()
            $("div.six").removeClass("hidden");
            $("div.six").show();
          
       
    });
});

$(document).ready(function(){
    $('#two').click(function(){
        $("div.two").addClass("hidden");
        $("div.two").hide()
        $("div.tree").removeClass("hidden");
        $("div.tree").show();
    });
});

$(document).ready(function(){
    $('#four').click(function(){
        $("div.tree").addClass("hidden");
        $("div.tree").hide()
        $("div.eleven").removeClass("hidden");
    $("div.eleven").show();
       
    });
});

       

$(document).ready(function(){
    $('#five').click(function(){
        $("div.tree").addClass("hidden");
        $("div.tree").hide()
        $("div.four").removeClass("hidden");
    $("div.four").show();
       
    });
});




$(document).ready(function(){
    $('#eight').click(function(){
        $("div.four").hide()
    $("div.eight").show();
       
    });
});
$(document).ready(function(){
    $('#nine').click(function(){
        $("div.four").hide()
    $("div.ten").show();
       
    });
});



//back
$(document).ready(function(){
    $('#btnBack0').click(function(){
        $("div.six").addClass("hidden");
        $("div.six").hide()
            $("div.one").removeClass("hidden");
            $("div.one").show();
          
       
    });
});
$(document).ready(function(){
    $('#btnBack1').click(function(){
        $("div.two").addClass("hidden");
        $("div.two").hide()
            $("div.one").removeClass("hidden");
            $("div.one").show();
          
       
    });
});
$(document).ready(function(){
    $('#btnBack2').click(function(){
        $("div.tree").addClass("hidden");
        $("div.tree").hide();
        $("div.two").removeClass("hidden");
    $("div.two").show();
       
    });
});
$(document).ready(function(){
    $('#btnBack3').click(function(){
        $("div.eleven").hide()
    $("div.tree").show();
       
    });
});


$(document).ready(function(){
    $('#btnBack4').click(function(){
        $("div.eight").hide()
    $("div.four").show();
       
    });
});

$(document).ready(function(){
    $('#btnBack5').click(function(){
        $("div.four").hide()
    $("div.tree").show();
       
    });
});
$(document).ready(function(){
    $('#btnBack6').click(function(){
        $("div.ten").hide()
    $("div.four").show();
       
    });
});

