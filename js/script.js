const consulte_1 = document.getElementById("consulte-A");
const consulte_2 = document.getElementById("consulte-B");
const consulte_3 = document.getElementById("consulte-C");
const constu1 = document.getElementById("activities1")
const constu2 = document.getElementById("activities2")
const constu3 = document.getElementById("activities3")

function Evnt(X) {

    if (X == 'consulte-A') {

        constu1.style.display = 'none';
        constu2.style.display = 'block';
        constu3.style.display = 'none';

    } else if (X == 'consulte-B') {

        constu1.style.display = 'block';
        constu2.style.display = 'none';
        constu3.style.display = 'none';

    } else if (X == 'consulte-C') {

        constu3.style.display = 'block';
        constu1.style.display = 'none';
        constu2.style.display = 'none';

    } else {
    }
    return
}
