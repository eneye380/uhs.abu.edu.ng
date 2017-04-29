/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * Author: Abdulmumin Eneye Abdulkarim - PTS028
 */

/*
 * The display function generates a grid arrangement of 
 * UHS admin staffs and displays them in the html element
 * with id value people101
 * 
 * @param {JSON Array} arr - list of Admin Staffs for UHS
 * @returns {undefined}
 */
function displayURLList(arr) {
    //alert(arr.length);
    var out = "";
    var i;
    var len = arr.length;
    for (i = 0; i < len; i++) {
        //out += '<li><a href="/pages/unit.php?q='+(i+1)+'">' + arr[i].unit + '</a></li>';
        out += '<li><a href="/'+arr[i].url+'">' + arr[i].unit + '</a></li>';
    }
    document.getElementById("dropdown-units").innerHTML = out;
}
pageLoad = function (object) {
    var xmlhttp = new XMLHttpRequest();
    var url = "/res/units.json";//works fine
    xmlhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            var myArr = JSON.parse(this.responseText);//converts the JSON Array to a Javascript Array
            displayURLList(myArr);
        }
    };

    xmlhttp.open("GET", url, true);
    xmlhttp.send();

};
pageLoad();//function is found in the unit.js script