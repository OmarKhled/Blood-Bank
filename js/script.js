// // var navBar = document.getElementById("navbar");



// $(window).scroll(function () {
// 	var sc = $(window).scrollTop()
// 	if (sc > 150) {
// 		$("#navbar").addClass("navbar-scroll")
// 	} 
// 	else {
// 		$("#navbar").removeClass("navbar-scroll")
//     }
    
//     if (sc > 800) {
// 		$("#navbar").addClass("navbar-color")
// 	} 
// 	else {
// 		$("#navbar").removeClass("navbar-color")
// 	}
// });

// // $(window).scroll(function () {
// // 	var sc = $(window).scrollTop()
// // 	if (sc > 800) {
// // 		$("#navbar").addClass("navbar-color")
// // 	} 
// // 	else {
// // 		$("#navbar").removeClass("navbar-color")
// // 	}
// // });

// $(window).scroll(example);

// function example() {
//   var tempScrollTop = $(window).scrollTop();
//   console.log("Scroll from Top: " + tempScrollTop.toString());
// };
// var buttons = document.getElementById("hover1");
// buttons.forEach(btn => {
//     btn.addEventListener('click', function(b) {

//         let x = b.clientX - b.target.offsetLeft;
//         let y = b.clientY - b.target.offsetTop;

//     let bubbles = document.createElement('span');
//     // bubbles.setAttribute("class", "bubble-button");
//     bubbles.style.left = x + 'px' ;
//     bubbles.style.top = y + 'px' ;
//     this.appendChild(bubbles);
    
//     })
// })

var buttons = document.querySelectorAll(".hover");
buttons.forEach(btn => {
    btn.addEventListener('click', function(e) {

        let x = e.clientX - e.target.offsetLeft;
        let y = e.clientY - e.target.offsetTop;

        let ripples = document.createElement('span');
        ripples.setAttribute("class", "bubble-button");
        ripples.style.left = x + 'px';
        ripples.style.top = y + 'px';
        this.appendChild(ripples)

        setTimeout(() => {
            ripples.remove()
        },1000);
    });
});








        $(window).scroll(function () {
            var sc = $(window).scrollTop();
            if (sc > 200) {
                $(document).ready(function() {
                    $(".bld").animate({
                     top:"0",
                     opacity:"1"
                  }, 1500);
                });
                $(document).ready(function() {
                    $(".txt").animate({
                     bottom:"0",
                     opacity:"1"
                  }, 2000);
                });  
                    

            } 
            else {
                return 0;
            }
        });



        $(window).scroll(function () {
            var sc = $(window).scrollTop();
            if (sc > 900) {
                $(document).ready(function() {
                    $(".sec1").animate({
                     top:"0",
                     opacity:"1"
                  }, 1500);
                });
                
                $(document).ready(function() {
                    $(".sec2").animate({
                     top:"0",
                     opacity:"1"
                  }, 2000);
                });

                $(document).ready(function() {
                    $(".sec3").animate({
                     top:"0",
                     opacity:"1"
                  }, 2400);
                });
            } 
            else {
                return 0;
            }
    
        });










        





