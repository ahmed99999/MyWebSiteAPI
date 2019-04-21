<?php namespace App\Http\Controllers;
use App\client;

class ClientsController extends Controller {

    const MODEL = "App\client";

    // use RESTActions;

    public function all (){
        $clients = new Client();
        return $clients->getClients();
    }

    public function get ( $id ){
        $client = new Client();
        return $client->getClient( $id );
    }

}
