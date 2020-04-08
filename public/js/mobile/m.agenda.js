function clickedActivity($event) {

    this.selectedElement = $event;
    const fase = this.selectedElement.id;
    const faseName = fase.slice(0, 4);
    const activityNumber = fase.slice(4, 6);

    if (faseName === "hide") {
        document.getElementById(fase).setAttribute('id', 'show' + activityNumber);
        document.getElementById("details" + activityNumber).style.display = "block";
        document.getElementById("symbolActivity" + activityNumber).innerHTML = "<i class=\"fas fa-minus\"></i>"
    } else if (faseName === "show") {
        document.getElementById(fase).setAttribute('id', 'hide' + activityNumber);
        document.getElementById("details" + activityNumber).style.display = "none";
        document.getElementById("symbolActivity" + activityNumber).innerHTML = "<i class=\"fas fa-plus\"></i>"
    }
}
