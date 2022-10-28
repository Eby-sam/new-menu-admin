
function resizer(element, cb) {

    element.addEventListener("pointerdown", onPointerDown);

    /**
     * @param {PointerEvent} e
     **/
    function onPointerDown(e) {
        e.preventDefault();
        document.addEventListener("pointermove", onPointerMove);
        document.addEventListener("pointerup", onPointerUp,{ once: true});

    }

    /**
     * @param {PointerEvent} e
     **/

    function onPointerUp (e) {
        document.removeEventListener("pointermove", onPointerMove);
    }

    /**
     * @param {PointerEvent} e
     **/
    function onPointerMove(e) {
        cb(e.pageX);
    }
}

/**
 *
 **/
resizer(document.querySelector(".sidebar"), function(x) {
    document.body.style.setProperty("--sidebar", x + "px");
});