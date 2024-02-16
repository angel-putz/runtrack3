
document.getElementById('button').addEventListener('click', function() { 

    fetch('expression.txt')
        .then(response => response.text())
        .then(text => {
            document.getElementById('expression').innerHTML = text;
        })
});