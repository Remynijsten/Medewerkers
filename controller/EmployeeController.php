<?php
require(ROOT . "model/EmployeeModel.php");


function index()
{
    //1. Haal alle medewerkers op uit de database (via de model) en sla deze op in een variable
    $employees = getAllEmployees();
    //2. Geef een view weer en geef de variable met medewerkers hieraan mee
    render('employee/index', $employees);
}

function create(){
    render('employee/create');
}

function store(){
    //1. Maak een nieuwe medewerker aan met de data uit het formulier en sla deze op in de database
    clean_input($_POST);
    createEmployee($_POST);

    //2. Bouw een url op en redirect hierheen
    header('Location: /MVC');
}

function edit($id){
    //1. Haal een medewerker op met een specifiek id en sla deze op in een variable
    $data = getEmployee($id);

    //2. Geef een view weer voor het updaten en geef de variable met medewerker hieraan mee
    render('employee/update', $data);
}

function update(){
    //1. Update een bestaand persoon met de data uit het formulier en sla deze op in de database
    clean_input($_POST);
    updateEmployee($_POST);

    //2. Bouw een url en redirect hierheen
    header('Location: /MVC');
}

function delete($id){
    //1. Haal een medewerker op met een specifiek id en sla deze op in een variable
    $data = getEmployee($id);
    //2. Geef een view weer voor het verwijderen en geef de variable met medewerker hieraan mee
    render('employee/delete', $data);
}

function destroy($id){
    //1. Delete een medewerker uit de database
    deleteEmployee($id);

	//2. Bouw een url en redirect hierheen
    header('Location: /MVC');
}

function clean_input($data){
    $data = array_map ( 'trim' , $data );
    $data = array_map ( 'stripslashes' , $data );
    $data = array_map ( 'htmlspecialchars' , $data );
    return $data;
}

?>