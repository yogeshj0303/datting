function openPage(pageName, elmnt, color) {
    // Hide all elements with class="tabcontent" by default */
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }

    // Remove the background color of all tablinks/buttons
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].style.backgroundColor = "";
      tablinks[i].style.color = "black";
    }

    // Show the specific tab content
    document.getElementById(pageName).style.display = "block";

    // Add the specific color to the button used to open the tab content
    elmnt.style.backgroundColor = color;
    elmnt.style.color = 'white';
    }

$(document).ready(function(){

    $(".mobile-menu").fadeOut();
    $(".hamburger").click(function(){
        $(".mobile-menu").fadeIn("slow");
    });
    $(".close-menu").click(function(){
        $(".mobile-menu").fadeOut("slow");
    });

    // ================= DATING ADVICE SLIDER
    $('.dating-advice-slider').slick({
        slidesToShow: 3,
        sidesToScroll: 1,
        arrows: true,
        autoplay: true,
        autoplaySpeed: 2000,
        infinite: true,
        dots:true,
        responsive: [
            {
                breakpoint:1050,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });


    // ================== SIGN UP FORM
    $("#form2").hide();
    $("#form3").hide();
    $("#form4").hide();
    $("#form5").hide();

    $("#next1").click(function(){
        $("#form1").hide(300);
        $("#form2").show(300);
        $("#form3").hide();
        $("#form4").hide();
        $("#form5").hide();
    });
    $("#next2").click(function(){
        $("#form1").hide();
        $("#form2").hide(300);
        $("#form3").show(300);
        $("#form4").hide();
        $("#form5").hide();
    });
    $("#next3").click(function(){
        $("#form1").hide();
        $("#form2").hide();
        $("#form3").hide(300);
        $("#form4").show(300);
        $("#form5").hide();
    });
    $("#next4").click(function(){
        $("#form1").hide();
        $("#form2").hide();
        $("#form3").hide();
        $("#form4").hide(300);
        $("#form5").show(300);
    });

    $("#back2").click(function(){
        $("#form1").show(300);
        $("#form2").hide(300);
        $("#form3").hide();
        $("#form4").hide();
        $("#form5").hide();
    });
    $("#back3").click(function(){
        $("#form1").hide();
        $("#form2").show(300);
        $("#form3").hide(300);
        $("#form4").hide();
        $("#form5").hide();
    });
    $("#back4").click(function(){
        $("#form1").hide();
        $("#form2").hide();
        $("#form3").show(300);
        $("#form4").hide(300);
        $("#form5").hide();
    });
    $("#back5").click(function(){
        $("#form1").hide();
        $("#form2").hide();
        $("#form3").hide();
        $("#form4").show(300);
        $("#form5").hide(300);
    });


    // ===================== PROFILE TABS
    $("#nav-profile-tab").click(function(){
        $("#profile").fadeIn("slow");
    });

    // ===================== LIKE BUTTONS
    $('button.like-btn i').click(function() {
        if ($(this).hasClass('fa-regular')){
            $(this).removeClass('fa-regular');
            $(this).addClass('fa-solid');
        }
        else{
            $(this).removeClass('fa-solid');
            $(this).addClass('fa-regular');
        }
    });

    // ===================== MESSAGES PAGE
    $(".back-btn").css("display","flex");
    $(".chat-main").css("display","none");
    $(".person").click(function(){
            $(".chat-inbox").css("display","none");
            $(".chat-main").css("display","grid");
    });
    $(".back-btn").click(function(){
        $(".chat-inbox").css("display","block");
        $(".chat-main").css("display","none");
    });

    $("#sent").css("display","none");
    $("#archieve").css("display","none");
    $("#filtered").css("display","none");
    $("#gold-member").css("display","none");
    $("#platinum-member").css("display","none");
    $("#diamond-member").css("display","none");
    $("#inbox-tab").click(function(){
        $("#inbox").css("display","block");
        $("#sent").css("display","none");
        $("#archieve").css("display","none");
        $("#filtered").css("display","none");
        $(".chat-main").css("display","none");
        $("#gold-member").css("display","none");
        $("#platinum-member").css("display","none");
        $("#diamond-member").css("display","none");
    });
    $("#sent-tab").click(function(){
        $("#inbox").css("display","none");
        $("#sent").css("display","block");
        $("#archieve").css("display","none");
        $("#filtered").css("display","none");
        $(".chat-main").css("display","none");
        $("#gold-member").css("display","none");
        $("#platinum-member").css("display","none");
        $("#diamond-member").css("display","none");
    });
    $("#archieve-tab").click(function(){
        $("#inbox").css("display","none");
        $("#sent").css("display","none");
        $("#archieve").css("display","block");
        $("#filtered").css("display","none");
        $(".chat-main").css("display","none");
        $("#gold-member").css("display","none");
        $("#platinum-member").css("display","none");
        $("#diamond-member").css("display","none");
    });
    $("#filtered-tab").click(function(){
        $("#inbox").css("display","none");
        $("#sent").css("display","none");
        $("#archieve").css("display","none");
        $("#filtered").css("display","block");
        $(".chat-main").css("display","none");
        $("#gold-member").css("display","none");
        $("#platinum-member").css("display","none");
        $("#diamond-member").css("display","none");
    });
    $("#gold-tab").click(function(){
        $("#inbox").css("display","none");
        $("#sent").css("display","none");
        $("#archieve").css("display","none");
        $("#filtered").css("display","none");
        $(".chat-main").css("display","none");
        $("#gold-member").css("display","block");
        $("#platinum-member").css("display","none");
        $("#diamond-member").css("display","none");
    });
    $("#platinum-tab").click(function(){
        $("#inbox").css("display","none");
        $("#sent").css("display","none");
        $("#archieve").css("display","none");
        $("#filtered").css("display","none");
        $(".chat-main").css("display","none");
        $("#gold-member").css("display","none");
        $("#platinum-member").css("display","block");
        $("#diamond-member").css("display","none");
    });
    $("#diamond-tab").click(function(){
        $("#inbox").css("display","none");
        $("#sent").css("display","none");
        $("#archieve").css("display","none");
        $("#filtered").css("display","none");
        $(".chat-main").css("display","none");
        $("#gold-member").css("display","none");
        $("#platinum-member").css("display","none");
        $("#diamond-member").css("display","block");
    });

    if($(window).width()<991){
        $(".show-grid-button").click(function(){
            $('.chat-grid-profile').show('slow');
            $('.chat-main').css("grid-template-columns","0px 100%");
            $('.chat-head').css("display","none");
            $('.chat-foot').css("display","none");
        });
        $(".hide-grid-button").click(function(){
            $('.chat-grid-profile').hide('slow');
            $('.chat-main').css("grid-template-columns","100% 0px");
            $('.chat-head').css("display","flex");
            $('.chat-foot').css("display","flex");
        });
    }
    else{
        $(".show-grid-button").click(function(){
            $('.chat-grid-profile').show('slow');
            $('.chat-main').css("grid-template-columns","auto 300px");
        });
        $(".hide-grid-button").click(function(){
            $('.chat-grid-profile').hide('slow');
            $('.chat-main').css("grid-template-columns","100% 0px");
        });
    }



    // ======================== SETTING TABS
    $("#notification").css("display","none");
    $("#account").css("display","none");
    $("#others").css("display","none");
    $(".activity-tab").click(function(){
        $("#activity").css("display","block");
        $("#notification").css("display","none");
        $("#account").css("display","none");
        $("#others").css("display","none");
    });
    $(".notification-tab").click(function(){
        $("#activity").css("display","none");
        $("#notification").css("display","block");
        $("#account").css("display","none");
        $("#others").css("display","none");
    });
    $(".account-tab").click(function(){
        $("#activity").css("display","none");
        $("#notification").css("display","none");
        $("#account").css("display","block");
        $("#others").css("display","none");
    });
    $(".others-tab").click(function(){
        $("#activity").css("display","none");
        $("#notification").css("display","none");
        $("#account").css("display","none");
        $("#others").css("display","block");
    });




    $(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });


    $("#defaultOpen").click();

    $(".event-grid").hide();
    $("#people-btn").css("background","rgb(179, 1, 1)");
    $("#people-btn").css("color","white");
    $("#people-btn").click(function(){
        $(".person-grid").fadeIn(200);
        $(".event-grid").fadeOut();
        $("#people-btn").css("background","rgb(179, 1, 1)");
        $("#people-btn").css("color","white");
        $("#event-btn").css("background","none");
        $("#event-btn").css("color","black");

    });
    $("#event-btn").click(function(){
        $(".event-grid").fadeIn(200);
        $(".person-grid").fadeOut();
        $("#event-btn").css("background","rgb(179, 1, 1)");
        $("#event-btn").css("color","white");
        $("#people-btn").css("background","none");
        $("#people-btn").css("color","black");
    });


    $(".event-popup").hide();
    $(".event-link").click(function(){
        $(".event-popup").fadeIn("slow");
    });

    $('.photo-grid').slick({
        // dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 2,
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
            }
          }
        ]
      });

      $("input#other").click(function(){
            $("input#other-location").css("display", "block");
      });

      $("input#delhi").click(function(){
        $("input#other-location").css("display", "none");
    });



});

    var elem = document.getElementsByClassName("toggle");
    var text = document.getElementsByClassName("toggle-text");
    function Animatedtoggle(){
        elem.classList.toggle("enable");
        if(elem.classList.contains("enable")){
            text.innerhtml = "Enabled";
        }
        else{
            text.innerhtml = "Disabled";
        }
    }

    // ======================= SEARCH DISTANCE FILTERS
    var slider = document.getElementById("myDist");
    var output = document.getElementById("Dist");
    output.innerHTML = slider.value;

    slider.oninput = function() {
        output.innerHTML = this.value;
    }
    var sliderl = document.getElementById("myDist-l");
    var outputl = document.getElementById("Dist-l");
    outputl.innerHTML = sliderl.value;

    sliderl.oninput = function() {
        outputl.innerHTML = this.value;
    }



    // Double Range Age Slider Dekstop View
    var ageRange1 = document.querySelector('input[name="ageRange1"]'),
		ageRange2 = document.querySelector('input[name="ageRange2"]'),
		ageOutput1 = document.querySelector('.ageOutput1'),
		ageOutput2 = document.querySelector('.ageOutput2'),
		ageInclRange = document.querySelector('.age-incl-range'),
		updateAge = function () {
			if (this.getAttribute('name') === 'ageRange1') {
				ageOutput1.innerHTML = this.value;
			} else {
				ageOutput2.innerHTML = this.value
			}
			if (parseInt(ageRange1.value) > parseInt(ageRange2.value)) {
				ageInclRange.style.width = (ageRange1.value - ageRange2.value) / 32 * 100 + '%';
				ageInclRange.style.left = ageRange2.value / this.getAttribute('max') * 100 + '%';
			} else {
				ageInclRange.style.width = (ageRange2.value - ageRange1.value) / 32 * 100 + '%';
				ageInclRange.style.left = (ageRange1.value-18) / ageRange2.value * 100 + '%';
			}
		};

	document.addEventListener('DOMContentLoaded', function () {
		updateAge.call(ageRange1);
		updateAge.call(ageRange2);
		$('.AgeRange').on('mouseup', function() {
			this.blur();
		}).on('mousedown input', function () {
			updateAge.call(this);
		});
	});

    // Double Range Height Slider Dekstop View
    var heiRange1 = document.querySelector('input[name="heiRange1"]'),
		heiRange2 = document.querySelector('input[name="heiRange2"]'),
		heiOutput1 = document.querySelector('.heiOutput1'),
		heiOutput2 = document.querySelector('.heiOutput2'),
		heiInclRange = document.querySelector('.hei-incl-range'),
		updateHei = function () {
			if (this.getAttribute('name') === 'heiRange1') {
				heiOutput1.innerHTML = this.value;
			} else {
				heiOutput2.innerHTML = this.value
			}
			if (parseInt(heiRange1.value) > parseInt(heiRange2.value)) {
				heiInclRange.style.width = (heiRange1.value - heiRange2.value) / this.getAttribute('max') * 100 + '%';
				heiInclRange.style.left = heiRange2.value / this.getAttribute('max') * 100 + '%';
			} else {
				heiInclRange.style.width = (heiRange2.value - heiRange1.value) / this.getAttribute('max') * 100 + '%';
				heiInclRange.style.left = heiRange1.value / this.getAttribute('max') * 100 + '%';
			}
		};

	document.addEventListener('DOMContentLoaded', function () {
		updateHei.call(heiRange1);
		updateHei.call(heiRange2);
		$('.HeightRange').on('mouseup', function() {
			this.blur();
		}).on('mousedown input', function () {
			updateHei.call(this);
		});
	});


    // Double Range Age Slider Mobile View
    var mageRange1 = document.querySelector('input[name="mageRange1"]'),
		mageRange2 = document.querySelector('input[name="mageRange2"]'),
		mageOutput1 = document.querySelector('.mageOutput1'),
		mageOutput2 = document.querySelector('.mageOutput2'),
		mageInclRange = document.querySelector('.mage-incl-range'),
		mupdateAge = function () {
			if (this.getAttribute('name') === 'mageRange1') {
				mageOutput1.innerHTML = this.value;
			} else {
				mageOutput2.innerHTML = this.value
			}
			if (parseInt(mageRange1.value) > parseInt(mageRange2.value)) {
				mageInclRange.style.width = (mageRange1.value - mageRange2.value) / this.getAttribute('max') * 100 + '%';
				mageInclRange.style.left = mageRange2.value / this.getAttribute('max') * 100 + '%';
			} else {
				mageInclRange.style.width = (mageRange2.value - mageRange1.value) / this.getAttribute('max') * 100 + '%';
				mageInclRange.style.left = mageRange1.value / this.getAttribute('max') * 100 + '%';
			}
		};

	document.addEventListener('DOMContentLoaded', function () {
		mupdateAge.call(mageRange1);
		mupdateAge.call(mageRange2);
		$('.mAgeRange').on('mouseup', function() {
			this.blur();

		}).on('mousedown input', function () {
			mupdateAge.call(this);
		});
	});

    // Double Range Height Slider Mobile View
    var mheiRange1 = document.querySelector('input[name="mheiRange1"]'),
		mheiRange2 = document.querySelector('input[name="mheiRange2"]'),
		mheiOutput1 = document.querySelector('.mheiOutput1'),
		mheiOutput2 = document.querySelector('.mheiOutput2'),
		mheiInclRange = document.querySelector('.mhei-incl-range'),
		mupdateHei = function () {
			if (this.getAttribute('name') === 'mheiRange1') {
				mheiOutput1.innerHTML = this.value;
			} else {
				mheiOutput2.innerHTML = this.value
			}
			if (parseInt(mheiRange1.value) > parseInt(mheiRange2.value)) {
				mheiInclRange.style.width = (mheiRange1.value - mheiRange2.value) / this.getAttribute('max') * 100 + '%';
				mheiInclRange.style.left = mheiRange2.value / this.getAttribute('max') * 100 + '%';
			} else {
				mheiInclRange.style.width = (mheiRange2.value - mheiRange1.value) / this.getAttribute('max') * 100 + '%';
				mheiInclRange.style.left = mheiRange1.value / this.getAttribute('max') * 100 + '%';
			}
		};

	document.addEventListener('DOMContentLoaded', function () {
		mupdateHei.call(mheiRange1);
		mupdateHei.call(mheiRange2);
		$('.mHeightRange').on('mouseup', function() {
			this.blur();
		}).on('mousedown input', function () {
			mupdateHei.call(this);
		});
	});






    function rate(value) {
        clearRates(); //vacia clase active
        addRates(value); //añade clase active
    }

    function clearRates() {
        for(var i=1; i<=5; i++) {
            document.getElementById("star" +i).classList.remove("active");
        }

        document.getElementById("text-area").innerHTML="Please, rate our service";
    }

    function addRates(value) {
        for(var i=1; i<=value; i++) {
            document.getElementById("star" +i).classList.add("active");
        }

        document.getElementById("text-area").innerHTML="Thank you!";
    }

    window.addEventListener("click", function(click) {
        if(!document.getElementById("rate").contains(click.target)) {
            clearRates();
        }
    })






