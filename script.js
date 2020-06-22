for (let i = 0; i < 100; i++) {
    let div = document.createElement('div');
    div.className  = 'item';
    div.innerHTML = i;
    let cont = document.getElementById("container").append(div);    
    }  
