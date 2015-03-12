<?php

/**
 * Aqui fica todos os metodos post que é chamado pelo app
 * @author Denisson Felipe Fernandes da Silva
 * @version 0.1
 * @return JSON
 */

require_once 'methodMobile.php';

$app->get('/','indexHome');

/**
 * @TODO Esse metodo Lista todos Food-Trucks
 */
$app->post('/foodTrucks','getfoodTrucks');

/**
 * @TODO Esse metodo Lista apenas um Food-Truck
 */
$app->post('/foodTruck','getfoodTruck');

/**
 * @TODO Esse metodo cadastra um food-truck
 */
$app->post('/register-food-truck','addFoodTruck');

$app->run();

