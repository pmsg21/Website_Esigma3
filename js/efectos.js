//Loader del Site
$(window).on("load", function (e) 
    {
        $(".loading-css").fadeOut(500);
        $(".body-show").fadeIn(5000);
    });

//Slide Effect
$(document).ready(function() { 

			MultiScreen.init(); 


			$('#go-crazy').click(function () {

				// inception...
				MultiScreen.switch_screens(
					{target_id: 'bottomright-screen', enter_animation_command: 'bottomright', exit_animation_command: 'topleft', chain_animation_options: 
						{target_id: 'right-screen', enter_animation_command: 'top', exit_animation_command: 'bottom',
							chain_animation_options: 
							{target_id: 'topright-screen', enter_animation_command: 'top', exit_animation_command: 'bottom',
								chain_animation_options: 
								{target_id: 'top-screen', enter_animation_command: 'left', exit_animation_command: 'right',
									chain_animation_options: 
									{target_id: 'topleft-screen', enter_animation_command: 'left', exit_animation_command: 'right',
										chain_animation_options: 
										{target_id: 'left-screen', enter_animation_command: 'bottom', exit_animation_command: 'top',
											chain_animation_options: 
											{target_id: 'bottomleft-screen', enter_animation_command: 'bottom', exit_animation_command: 'top',chain_animation_options: 
												{target_id: 'bottom-screen', enter_animation_command: 'right', exit_animation_command: 'left',chain_animation_options: 
													{target_id: 'center-screen', enter_animation_command: 'top', exit_animation_command: 'bottom'}
												}
											}
										}
									}
								}
							}
						}
					});

			});

		});
//
$(document).ready(function(){
    $("#LinkEmpresa1").click(function(){
        $("#DropdownEmpresa1").slideToggle();
    });
});
//Sidenav
function openNav0() {
    document.getElementById("mySidenav0").style.width = "220px";
}

function closeNav0() {
    document.getElementById("mySidenav0").style.width = "0";
}
function openNav() {
    document.getElementById("mySidenav").style.width = "220px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
function openNav2() {
    document.getElementById("mySidenav2").style.width = "220px";
}

function closeNav2() {
    document.getElementById("mySidenav2").style.width = "0";
}
function openNav3() {
    document.getElementById("mySidenav3").style.width = "220px";
}

function closeNav3() {
    document.getElementById("mySidenav3").style.width = "0";
}
function openNav4() {
    document.getElementById("mySidenav4").style.width = "220px";
}

function closeNav4() {
    document.getElementById("mySidenav4").style.width = "0";
}
function openNav5() {
    document.getElementById("mySidenav5").style.width = "220px";
}

function closeNav5() {
    document.getElementById("mySidenav5").style.width = "0";
}
function showCaret(){
    document.getElementById("caret").style.opacity = "100";
}
function hideCaret(){
    document.getElementById("caret").style.opacity = "0";
}
function showCaret2(){
    document.getElementById("caret2").style.opacity = "100";
}
function hideCaret2(){
    document.getElementById("caret2").style.opacity = "0";
}
function showCaret3(){
    document.getElementById("caret3").style.opacity = "100";
}
function hideCaret3(){
    document.getElementById("caret3").style.opacity = "0";
}
function showCaret4(){
    document.getElementById("caret4").style.opacity = "100";
}
function hideCaret4(){
    document.getElementById("caret4").style.opacity = "0";
}
function showCaret5(){
    document.getElementById("caret5").style.opacity = "100";
}
function hideCaret5(){
    document.getElementById("caret5").style.opacity = "0";
}
function showCaret6(){
    document.getElementById("caret6").style.opacity = "100";
}
function hideCaret6(){
    document.getElementById("caret6").style.opacity = "0";
}
function showCaret7(){
    document.getElementById("caret7").style.opacity = "100";
}
function hideCaret7(){
    document.getElementById("caret7").style.opacity = "0";
}

//Slick Carousel
$(document).on('ready', function() {
      $(".regular").slick({
        dots: false,
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 4,
        autoplay: true,
        autoplaySpeed: 4000,
        responsive: 
        [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
      });
    });

function ShowProductos()
{
    document.getElementById("productos").style.visibility = "visible";
}