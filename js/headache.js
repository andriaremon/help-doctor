

$(document).ready(function(){
    $('#one').click(function(){
        $("div.one").addClass("hidden");
            $("div.two").removeClass("hidden");
            $("div.two").show();
          
       
    });
});

$(document).ready(function(){
    $('#two').click(function(){
        $("div.two").addClass("hidden");
        $("div.six").removeClass("hidden");
        $("div.six").show();
    });
});

$(document).ready(function(){
    $('#four').click(function(){
        $("div.tree").addClass("hidden");
        $("div.eleven").removeClass("hidden");
    $("div.eleven").show();
       
    });
});

       

$(document).ready(function(){
    $('#five').click(function(){
        $("div.tree").addClass("hidden");
        $("div.twelve").removeClass("hidden");
    $("div.twelve").show();
       
    });
});

$(document).ready(function(){
    $('#tree').click(function(){
        $("div.two").hide()
    $("div.four").show();
       
    });
});
$(document).ready(function(){
    $('#six').click(function(){
        $("div.five").hide()
    $("div.ten").show();
       
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
    $("div.seven").show();
       
    });
});
$(document).ready(function(){
    $('#ten').click(function(){
        $("div.seven").hide()
    $("div.nine").show();
       
    });
});
$(document).ready(function(){
    $('#eleven').click(function(){
        $("div.seven").hide()
    $("div.five").show();
       
    });
});
$(document).ready(function(){
    $('#seven').click(function(){
        $("div.five").hide()
    $("div.eleven").show();
       
    });
});

//back

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
        $("div.six").hide()
    $("div.two").show();
       
    });
});
$(document).ready(function(){
    $('#btnBack3').click(function(){
        $("div.four").hide()
    $("div.two").show();
       
    });
});
$(document).ready(function(){
    $('#btnBack4').click(function(){
        $("div.ten").addClass("hidden");
        $("div.five").removeClass("hidden");
        $("div.five").show();
    });
});
$(document).ready(function(){
    $('#btnBack5').click(function(){
        $("div.seven").hide()
    $("div.four").show();
       
    });
});
$(document).ready(function(){
    $('#btnBack6').click(function(){
        $("div.eight").hide()
    $("div.four").show();
       
    });
});
$(document).ready(function(){
    $('#btnBack7').click(function(){
        $("div.nine").hide()
    $("div.seven").show();
       
    });
});
$(document).ready(function(){
    $('#btnBack8').click(function(){
        $("div.five").hide()
    $("div.seven").show();
       
    });
});
$(document).ready(function(){
    $('#btnBack9').click(function(){
        $("div.eleven").hide()
        $("div.five").removeClass("hidden");
    $("div.five").show();
       
    });
});




