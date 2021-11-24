document.querySelector('button').addEventListener("click", function(e) {
    e.preventDefault();
    let rowValue = document.querySelector("#rows").value;
    let columnValue = document.querySelector("#columns").value;
    let mainDiv = document.querySelector("#mainDiv");
    mainDiv.innerHTML = "";
    if (rowValue && columnValue) {
        for (i = 1; i <= rowValue; i++) {
            let rowDiv = document.createElement('div');
            mainDiv.appendChild(rowDiv);
            for (j = 1; j <= columnValue; j++) {
                let columnDiv = document.createElement('div');
                columnDiv.className = "inline";
                columnDiv.textContent = i * j;
                rowDiv.appendChild(columnDiv); // we append the column div to the row div
            }
        }
    }
});

// Question 1. could i use a reset values type of thing instead of textcontent/innerhtml = ""
// Question 2. why does the main div need to be empty, also before starting the loop?  