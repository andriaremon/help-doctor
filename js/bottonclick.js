


function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
  }
  
  function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
  }
  
  function RemoveDDhighlight() {
    $('ul.list.hover li').each(function() {
        var $this = $(this);
        if (!$this.children('a').hasClass('js-dd-selected'))
            $this.removeClass("active");
    });
  }
  
  $(function() {
    //change avatar img src on hover
   
  
    //avatar img hover event
    
  
    //avatar gender button hover event
    $('.js-avatar-btn').hover(function(event) {
        var selector = $(this).attr('data-avatarimgid');
        hoverAvatar($('#' + selector), event);
    });
  
    //body part click event on a
    $('ul.list.hover li a').click(function(e) {
        var $this = $(this);
        var url = $this.data('href');
        var decodedUrl = $this.attr('href');
        var key = $this.data('id');
        //remove all selected from a
        $('.js-dd-selected').removeClass('js-dd-selected');
        //add selected to a
        $this.addClass('js-dd-selected');
        RemoveDDhighlight();
        e.preventDefault();
        AddGAPageView('/symptoms/' + decodedUrl, true, true);
        console.log('/symptoms/' + decodedUrl);
        GetSymptoms(url, decodedUrl, key);
    });
  
    //map area click event
  
  
  
    $(document).on('mouseenter mouseleave', 'ul.hover li a', function(e) {
        var selector = $(this).attr('data-id');
        var bodyPartImgSrc = $('#' + selector).attr('src');
        var avatar = $('#s-avatar');
        switch (e.type) {
            case 'mouseenter':
                avatar.attr('src', bodyPartImgSrc);
                break;
            case 'mouseleave':
                avatar.attr('src', avatar.attr('data-originalImg'));
                break;
        }
    });
  
    if (Settings.IsMobile) {
        $('#showSelectBodyPart').click(function(e) {
            $('#bodyPartsContainer').fadeOut(fadeDuration, function() {
                $('.part-select-text').hide().fadeIn(fadeDuration);
                $('#showSelectBodyPart').hide();
            });
            e.preventDefault();
        });
    }
  });
  $(document).ready(function(){
  $("#hide").click(function(){
    $("#bodyPartsContainer").toggle();
  });
  });
  $(document).ready(function(){
  $("#hide").click(function(){
    $("#hide").addClass("black");
    $("#neck,#back,#bel").removeClass("black");
      $("#body,#Container,#Par").hide();
  });
  })
  
  $(document).ready(function(){
    $("#neck").click(function(){
      $("#body").toggle();
     
    });
  });
  
  $(document).ready(function(){
    $("#neck").click(function(){
      $("#neck").addClass("black");
      $("#hide,#back,#bel").removeClass("black");
      $("#bodyPartsContainer,#Container,#Par").hide();
    });
  })
  $(document).ready(function(){
    $("#back").click(function(){
      $("#Container").toggle();
    
    });
  });
  $(document).ready(function(){
    $("#back").click(function(){
      $("#back").addClass("black");
      $("#hide,#neck,#bel").removeClass("black");
      $("#bodyPartsContainer,#body,#Par").hide();
    });
  })
  $(document).ready(function(){
    $("#bel").click(function(){
      $("#Par").toggle();
    
    });
  });
  $(document).ready(function(){
    $("#bel").click(function(){
      $("#bel").addClass("black");
      $("#hide,#neck,#back").removeClass("black");
      $("#bodyPartsContainer,#body,#Container").hide();
    });
  })
  
   
      
  