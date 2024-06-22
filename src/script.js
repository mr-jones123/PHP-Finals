let previous = document.getElementById('previous');
let numberOfPeople = document.getElementById('count-people');
let count = 0;
function increment() {
    count = count + 1;
    numberOfPeople.textContent = count;
}
function save(){
    let previous_history = count + "- ";
    previous.textContent+= previous_history;    
}   