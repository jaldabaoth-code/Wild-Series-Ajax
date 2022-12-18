document.getElementById('searchField').addEventListener('input', function(event) {
    // Get value of searchField (<input id="serchField">) that has been put by the user
    let query = event.target.value;
    // Get list (<ul id="autocomplete"></ul>) element to manipulate later
    let list = document.getElementById('autocomplete');
    // If query is not empty, do stuff
    if (query !== '') {
        // Fetch data from ProgramController::autocomplete()
        fetch('/programs/autocomplete?q=' + query, { method: 'GET' })
            // Get response body in json format
            .then(response => response.json())
            // Manipulate data as we wish
            .then(programs => {
                // Flush list at every request, so that suggestions don't pile up
                list.innerHTML = '';
                // ForEach is a method in JS, which is weird, but you get used to it
                programs.forEach(program => {
                    // For each program, create a link that points to the program's details page
                    let link = document.createElement('a');
                    link.href = '/programs/' + program.id;
                    link.innerHTML = program.title;
                    // For each program, create a <li> element, and put the previously created link as child of it 
                    let li = document.createElement('li');
                    li.appendChild(link);
                    // Add the <li> element at the end of the list
                    list.appendChild(li);
                });
            })
        ;
    } else {
        // If query is empty, flush the suggestions list
        list.innerHTML = '';
    }
});
