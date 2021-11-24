// grab the div
let button = document.querySelector('button');
let rowInput = document.querySelector('#rows');
let columnInput = document.querySelector('#columns');

// click event listener
button.addEventListener('click', function(e) {
    e.preventDefault();
    console.log('clicked');

    // i need a way to store the value of what someone puts into the div
    let rowValue = rowInput.value;
    console.log(rowValue);
    let columnValue = columnInput.value;
    console.log(columnValue); 
    // I need to create a table, then add tds inside of the tr. Could also be divss
    for (let i = 0; i < rowValue.length; i++) {
        // I create a new div each time I click the button 
        let mainDiv = document.querySelector('#mainDiv');
        console.log(mainDiv);
        let newDiv = document.createElement('div');
        newDiv.className = "first";
        mainDiv.appendChild(newDiv);
        // newDiv.textContent = i++;
        for (let i = 0; i < columnValue.length; i++) {
        // I create a new div each time I click the button 
        let secondMainDiv = document.querySelector('#mainDiv');
        console.log(secondMainDiv);
        let secondNewDiv = document.createElement('div');
        secondNewDiv.className = "second";
        secondMainDiv.appendChild(secondNewDiv);
        }
    }

});

