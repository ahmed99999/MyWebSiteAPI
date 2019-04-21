<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Client extends Model {

    protected $fillable = [];

    protected $dates = [];

    protected $table = 'clients';

    public static $rules = [
        // Validation rules
    ];

    // Relationships

    public function getClients() {
        $clients = DB::table('clients')
                    ->select('name','surname','email')
                    ->get();
        return json_encode($clients);
    }

    public function getClient ( $id ){
        $client = DB::table('clients')
                    ->select('name','surname','email')
                    ->where('id' , '=' , $id)
                    ->first();
        return json_encode($client);
    }

}
