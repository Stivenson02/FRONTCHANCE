<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Conect;

class ConsumoController extends Controller {

    function __construct() {
        $this->au_WS = new Conect();
    }

    public function userdate($id) {
        return view('showedit', ['people' => $id]);
    }

    public function consuluser(Request $reques) {

        $date = $this->au_WS->chance($reques->identity);
        if ($date == 1) {
            return "replica";
        } else {
            $json = json_decode($date);
            if (isset($json->code)) {
                if ($json->code == 200) {
                    return view('showedit', ['people' => $json->id]);
                } else {
                    return view('newuser', ['identity' => $reques->identity]);
                }
            } else {

                return redirect('/');
            }
        }
    }

    public function isert_user(Request $request) {
        $json = json_encode([
          'email' => $request->email,
          'identity' => $request->subject,
          'name' => $request->fname
        ]);
        $date = $this->au_WS->insert($json);
        $jsonpeople = json_decode($date);
        return view('showedit', ['people' => $jsonpeople]);
    }

    public function isert_chace(Request $param) {

        $json = json_encode([
          'id' => $param->id_user,
          'numero' => $param->juego,
          'pago' => $param->apuesta
        ]);
        $date = $this->au_WS->insertchance($json);

        $jsonpeople = json_decode($date);
        if ($jsonpeople->code == 200) {
            return redirect('/');
        }
    }

    public function todosusuario() {

        $date = $this->au_WS->allusers();
        $jsonpeople = json_decode($date);
        return view('allusers', ["alluser" => $jsonpeople]);
//        foreach ($jsonpeople as $value) {
//            return($value->name);
//        }
    }

}
