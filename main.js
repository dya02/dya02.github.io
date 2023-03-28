//FILTER JS
$(document).ready(function(){
    $(".filter-item")
    .click(function(){
        const value = $(this)
            .attr("data-filter");
        if(value == "all"){
            $(".post-box").show("1000");
        } else{
            $(".post-box")
                .not("." + value)
                .hide("1000");
            $(".post-box")
                .filter("." + value)
                .show("1000");
        }
    })

    //ADD ACTIVE TO BTN
    $(".filter-item").click(function(){
        $(this).addClass("active-filter")
            .siblings()
            .removeClass("active-filter");
    });
});

//HEADER BG CHANGE DURING SCROLL
let header = document.querySelector('header')

window.addEventListener('scroll', () => {
    header.classList.toggle('shadow', window.scrollY > 0);
});

        function myFnc(e){
            e.classList.toggle("show");

            var elem = document.getElementById("navID"),
            Style = window.getComputedStyle(elem),
            right = Style.getPropertyValue("right");

            if(right == "0px"){
                elem.style.right = "-260px";
            } else {
                elem.style.right = "0px";
            }

        }