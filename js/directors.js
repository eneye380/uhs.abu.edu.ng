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
//alert('test!!!');
var personnel;
function displayPeople(arr) {
    //alert(arr.length);
    var out = "";
    var i;
    var len = arr.length;
    for (i = 0; i < len; i++) {
        if (i % 3 === 0) {
            out += '<div class="row">';
        }
        out += '<div class="col-md-4 text-center">';
        out += '<div class="thumbnail">';
        out += '<img src="' + arr[i].url + '" class="img-square img-responsive" alt="img" style="width:200px;height:200px">';
        out += '<div class="caption">';
        out += '<h4>' + arr[i].name + '<br>';
        out += '<small>' + arr[i].period + '</small>';
        out += '</h4>';
        out += '<!--ul class="list-inline">';
        out += '<li><a href="#"><i class="fa fa-2x fa-facebook-square"></i></a>';
        out += '</li>';
        out += '<li><a href="#"><i class="fa fa-2x fa-linkedin-square"></i></a>';
        out += '</li>';
        out += '<li><a href="#"><i class="fa fa-2x fa-twitter-square"></i></a>';
        out += '</li>';
        out += '</ul-->';
        out += '</div>';
        out += '</div>';
        out += '</div>';
        /** out += '<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">';
         out += '<a href="' + arr[i].url + '" class="thumbnail" target="new">';
         out += '<img src="' + arr[i].url + '" class="img-thumbnail img-circle img-responsive" alt="Image" style="width:200px;height:200px">';
         out += '<p class=""><span class="" style="color: grey">' + arr[i].name + '</span><br><span class="small" style="color: black">' + arr[i].position + '</span></p>';
         out += '</a></div>';*/

        if (i % 3 === 2) {
            out += '</div>';
        }
    }
    document.getElementById("people101").innerHTML = out;
}


getPersonnel = function () {
    var xmlhttp = new XMLHttpRequest();
//var url = "file:///C:/Users/eneye380/Documents/ABU Moodle/textread.txt";//does not work
//var url = "http://localhost:8000/res/files/people.json";//works fine
    var url = window.location.origin+"/res/directors.json";//works fine
    xmlhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            var myArr = JSON.parse(this.responseText);//converts the JSON Array to a Javascript Array
            personnel = myArr;
            displayPeople(myArr);
            displayUnitContact(myArr);
        }
    };

    xmlhttp.open("GET", url, true);
    xmlhttp.send();
};
getPersonnel();//function is found in the people.js script
//pageLoad();//function is found in the unit.js script