/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var data;
var choice;
function displayStructure(object) {
    var staff = object[choice];
    var src = staff.img;
    if (staff.mandate === undefined) {
    } else {
        document.getElementById("mandate").innerHTML = staff.mandate;
    }
    document.getElementById("heading").innerHTML = "Director's Mandate";
    document.getElementsByTagName("img")[1].setAttribute('src', src);
}
getStructure = function () {
    var xmlhttp = new XMLHttpRequest();
    var url = "/res/files/structure.json";//works fine
    xmlhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            var myObj = JSON.parse(this.responseText);//converts the JSON Array to a Javascript Array
            data = myObj;
            displayStructure(myObj);
        }
    };

    xmlhttp.open("GET", url, true);
    xmlhttp.send();
};

make = function (text) {
    choice = text;
    getStructure();
};