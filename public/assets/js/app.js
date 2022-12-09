(function() {

    const menuToggle = document.querySelector(".menu-toggle");

    menuToggle.onclick = function (event) {
        const body = document.querySelector("body");
        body.classList.toggle("hide-sidebar");
    }

})()


function activateClock() {
    const activateClock = document.querySelector("[active-clock]");
    if (!activateClock) return

    function addOneSecond(hours, minutes, seconds) {
        const date = new Date();
        date.setHours(parseInt(hours));
        date.setMinutes(parseInt(minutes));
        date.setSeconds(parseInt(seconds) + 1);

        const h = `${date.getHours()}`.padStart(2, 0); 
        const m = `${date.getMinutes()}`.padStart(2, 0); 
        const s = `${date.getSeconds()}`.padStart(2, 0); 

        return `${h}:${m}:${s}`;
    }
    
    setInterval(function() {
        // "07:27:19" => ["07", "27", "19"]
        const parts = activateClock.innerHTML.split(":");
        activateClock.innerHTML = addOneSecond(...parts);
        // const [hours, minutes, seconds] = [parts[0], parts[1], parts[2]];
        // activateClock.innerHTML = addOneSecond(hours, minutes, seconds)
    }, 1000);
}

activateClock();