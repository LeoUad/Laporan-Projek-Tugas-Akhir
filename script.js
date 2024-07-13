const txtElement = ['UNIVERSITAS AHMAD DAHLAN'];
let count = 0;
let txtIndex = 0;
let currentTxt = '';
let words = '';

(function ngetik(){

    if(count == txtElement.length){
        count = 0;
    }

    currentTxt = txtElement[count];

    words = currentTxt.slice(0, ++txtIndex);
    document.querySelector('.efek-ngetik').textContent = words;

    if(words.length == currentTxt.length){
        count++;
        txtIndex = 1;
    }
    setTimeout(ngetik, 500);
    

})();