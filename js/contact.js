/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function displayUnitContact(arr) {
    var out = "";
    var i;
    var len = arr.length;
    for (i = 0; i < len; i++) {
        out += '<tr>';
        out += '<td>' + (i + 1) + '</td>';
        out += '<td>' + arr[i].position + '</td>';
        out += '<td>' + arr[i].name + '</td>';
        out += '<td>email@domain.com</td>';
        out += '<td>+xxx xxxxxxxxxxx</td>';
        out += '</tr>';
    }
    document.getElementById("unit-contact").innerHTML = out;
}
getContact = function () {
    var xmlhttp = new XMLHttpRequest();
//var url = "file:///C:/Users/eneye380/Documents/ABU Moodle/textread.txt";//does not work
//var url = "http://localhost:8000/res/files/people.json";//works fine
    var url = "/res/files/people.json";//works fine
    xmlhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            var myArr = JSON.parse(this.responseText);//converts the JSON Array to a Javascript Array
            personnel = myArr;
            displayUnitContact(myArr);
        }
    };

    xmlhttp.open("GET", url, true);
    xmlhttp.send();
};
getContact();//function is found in the people.js script
//pageLoad();//function is found in the unit.js script
