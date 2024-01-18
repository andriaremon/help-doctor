

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
    $('#tree').click(function(){
        $("div.two").hide()
    $("div.four").show();
       
    });
});
$(document).ready(function(){
    $('#six').click(function(){
        $("div.five").hide()
    $("div.nine").show();
       
    });
});

$(document).ready(function(){
    $('#eight').click(function(){
        $("div.four").hide()
    $("div.five").show();
       
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
        $("div.twelve").removeClass("hidden");
    $("div.twelve").show();
       
    });
});
$(document).ready(function(){
    $('#eleven').click(function(){
        $("div.seven").hide()
    $("div.eight").show();
       
    });
});
$(document).ready(function(){
    $('#seven').click(function(){
        $("div.five").hide()
    $("div.ten").show();
       
    });
});

//back
$(document).ready(function(){
    $('#btnBack1').click(function(){
        $("div.two").addClass("hidden");
            $("div.one").removeClass("hidden");
            $("div.one").show();
          
       
    });
});
$(document).ready(function(){
    $('#btnBack2').click(function(){
        $("div.five").hide()
    $("div.four").show();
       
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
        $("div.six").addClass("hidden");
        $("div.two").removeClass("hidden");
        $("div.two").show();
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
        $("div.seven").hide()
    $("div.eight").show();
       
    });
});
$(document).ready(function(){
    $('#btnBack7').click(function(){
        $("div.nine").hide()
    $("div.five").show();
       
    });
});
$(document).ready(function(){
    $('#btnBack8').click(function(){
        $("div.ten").hide()
    $("div.five").show();
       
    });
});
$(document).ready(function(){
    $('#btnBack10').click(function(){
        $("div.twelve").hide()
        $("div.seven").removeClass("hidden");
    $("div.seven").show();
       
    });
});