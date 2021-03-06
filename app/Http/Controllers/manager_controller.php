<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\manager_function;

class manager_controller extends Controller
{
    //

    public function index(){
      $data["message"]= "False";
      $temp = new manager_function();
      try{
        $result = $temp->fetching_all_data();
        if($result && sizeof($result) > 0){
          $data["data"] = $result;
          $message = "True";
        }else{
          $data["data"] = [];
        }
      }catch(Exception $e){
          $message = $e;
      }
      $data["message"]= $message;
      return $data;

    }

    public function getting_data_with_storeID($storeID){
      $message = "False";
      $data["message"]= $message;
      try{

        $data["parameter"]= "managers/store/<storeID>";
        $temp = new manager_function();
        $result = $temp->fetching_data_with_storeID($storeID);
        if($result && sizeof($result) > 0){
          $data["data"] = $result;
          $message = "True";
        }else{
          $data["data"] = [];
        }
      }catch(Exception $e){
          $message = $e;
      }
      $data["message"]= $message;
      return $data;

    }

    public function getting_data_with_employeeID($employeeID){
      $message = "False";
      $data["message"]= $message;
      try{
        $data["parameter"]= "manager/<employeeID>";
        $temp = new manager_function();
        $result = $temp->fetching_data_with_employeeID($employeeID);
        if($result && sizeof($result) > 0){
          $data["data"] = $result;
          $message = "True";
        }else{
          $data["data"] = [];
        }
      }catch(Exception $e){
          $message = $e;
      }
      $data["message"]= $message;
      return $data;

    }
}
