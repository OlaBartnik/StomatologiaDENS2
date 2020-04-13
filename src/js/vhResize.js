// 100vh on mobile like  ios

//zabezpiecznie by resize nie wywoływał się zbyt często i nie wywoływło blokady
function vhResize() {
    function debounced(delay, fn) {
        let timerId;
        return function (...args) {
            if (timerId) {
                clearTimeout(timerId);
            }
            timerId = setTimeout(() => {
                fn(...args);
                timerId = null;
            }, delay);
        }
    }


    var hero = document.querySelector(".page_hero ");


    //po wejściu na stronę
    hero.style.height = window.innerHeight + "px";
    //




    //i po zmianie rozmiarów okna

    var windowWidth = window.innerWidth;

    function resizeContent() {

        // console.log(`Rozmiar okna: ${window.innerWidth} x ${window.innerHeight}`)
        hero.style.height = window.innerHeight + "px";

        if (window.innerWidth == windowWidth) {

            hero.style.transition = "height 1s";
        } else {
            hero.style.transition = "height 0s";
        }
        windowWidth = window.innerWidth;
    }


    window.addEventListener("resize", debounced(200, resizeContent));






}

export default vhResize;