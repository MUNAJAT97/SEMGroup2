<style>
* {
    box-sizing: border-box;
}

body {
    font-family: Arial, Helvetica, sans-serif;
    background-color: : #A9A9A9;
}

/* Style the header */
header {
    background-color: #ccc;
    padding: 10px;
    text-align: center;
    font-size: 25px;
    color: #8E44AD;
    font-family: 'Fjalla One', sans-serif;
}

/* Create two columns/boxes that floats next to each other */
nav {
     float: left;
    width: 100%;
    height: 100%; /* only for demonstration, should be removed */
    background: #ccc;
    padding: 5px;
    margin-top: 10px;
    margin-bottom: 10px; 
    /*display: inline-block;*/
}

/* Style the list inside the menu */
nav ul {
    list-style-type: none;
    padding: 0;
}

article {
    float: right;
    padding: 40px;
    width: 20%;
    background-color: #2980B9  ;
    height: 440px; /* only for demonstration, should be removed */
    margin-top: 10px;
    margin-bottom: 10px;
    text-align: center;
    padding-top: 10px;
    
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
    padding:0.5px;
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
    background-color:#58ACFA;
    border-radius: 10px;
    border: none;
    color: white;
    padding: 5px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 1px;
    cursor: pointer;
}
.button2 {background-color: white;
color:black

}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 200px;
    background-color: #f1f1f1;
}

li a {
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
}

/* Change the link color on hover */
li a:hover {
    background-color: #555;
    color: white;
}
</style>
