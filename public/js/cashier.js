function dropdown(submenuId, arrowId){
    document.querySelector(`#${submenuId}`).classList.toggle('hidden');
    document.querySelector(`#${arrowId}`).classList.toggle('rotate-0');
}
dropdown()
function Open(){
    document.querySelector(".sidebar").classList.toggle('left-[-300px]');
}