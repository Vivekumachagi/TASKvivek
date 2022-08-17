document.getElementById('btn').addEventListener('click', loadDoc);

function loadDoc() {
    let url = "https://api.dictionaryapi.dev/api/v2/entries/en/";
    let userinput = document.getElementById('txt').value;
    let senderl = url.concat(userinput);


    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            let obj = JSON.parse(this.responseText);
            if (obj[0].word == undefined) {
                document.getElementById("noun").innerHTML = "";
            } else {
                document.getElementById("noun").innerHTML = obj[0].word;
            }
            if (obj[0].phonetic == undefined) {
                document.getElementById("noun").innerHTML = "";
            } else {
                document.getElementById("pec").innerHTML = obj[0].phonetic;
            }
            if (obj[0].meanings[0].partOfSpeech == undefined) {
                document.getElementById("noun").innerHTML = "";
            } else {
                document.getElementById("pos").innerHTML = obj[0].meanings[0].partOfSpeech;
            }
            if (obj[0].meanings[0].definitions[0].definition == undefined) {
                document.getElementById("noun").innerHTML = "";
            } else {
                document.getElementById("para").innerHTML = obj[0].meanings[0].definitions[0].definition;
            }
            if (obj[0].meanings[0].definitions[0].example == undefined) {
                document.getElementById("noun").innerHTML = "";
            } else {
                document.getElementById("example").innerHTML = obj[0].meanings[0].definitions[0].example;
            }
            console.log(this.responseText);
        }
        // else {
        //     document.getElementById("noun").innerHTML = "";
        //     document.getElementById("pec").innerHTML = "";
        //     document.getElementById("pos").innerHTML = "";
        //     document.getElementById("para").innerHTML = "";
        //     document.getElementById("example").innerHTML = "";
        // }
    }

    xhttp.open("GET", senderl);
    xhttp.send();
}