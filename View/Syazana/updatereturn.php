<style>
* {
    box-sizing: border-box;
}

body {
    font-family: Arial, Helvetica, sans-serif;
}
/* Style the header */
header {
    background-color: #ccc;
    padding: 10px;
    text-align: center;
    font-size: 35px;
    color: #8E44AD;
    font-family: 'Fjalla One', sans-serif;
}
/* Create two columns/boxes that floats next to each other */
nav {
    float: left;
    width: 97%;
    height: 450px; /* only for demonstration, should be removed */
    background: #ccc;
    padding: 20px;
    margin-top: 10px;
    margin-bottom: 10px; 
}

/* Style the list inside the menu */
nav ul {
    list-style-type: none;
    padding: 0;
}

/* Clear floats after the columns */
section:after {

    content: "";
    display: table;
    clear: both;
    width: 70%;
    
}

/* Style the footer */
footer {
    background-color: #777;
    padding: 10px;
    text-align: center;
    color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
    nav, article {
        width: 100%;
        height: auto;
    }
}

.navbar {
    overflow: hidden;
    background-color: #566573;
    font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 135px;
    text-decoration: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 135px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: #2980B9;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #8E44AD;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}

.toplist {
    background-color: #2980B9;
}

.button {
    background-color: #F39C12  ;
    border: none;
    color: black;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    position:relative; 
    left: 1110px;
    top:-15px;

}
.button2 {
    background-color: #F39C12  ;
    border: none;
    color: black;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    position:relative; 
    left:1100px;
    top:-15px;

}

.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #ccc;
}
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}
table.table1 {
    border: 1px solid black;
    border-collapse: collapse;
    width: 90%;
    margin-top: 5px;
    margin-left: 50px;
}
table.table1, table.table1 td, table.table1 th {
    border: 1px solid black;
}

table.table2 {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
    margin-top: 2px;
    margin-left: 50px;
}

table.table2 td, table.table2 th {
    border: 1px solid black;
    padding: 3px;
}

table.table2 tr:nth-child(even) {
    background-color: #ccc;
}

</style>
