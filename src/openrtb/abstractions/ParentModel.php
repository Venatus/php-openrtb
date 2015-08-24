<?php
namespace openrtb\abstractions;

abstract class ParentModel extends \openrtb\abstractions\BaseModel {
  
  // public function hydrate($json){
  //   $data = @json_decode($json, true);
  //   if(is_array($data)){
  //     foreach($data as $k => $v){
  //
  //     }
  //   } else {
  //     throw new \openrtb\exceptions\ValidationException('Unable to parse json');
  //   }
  // }
  
}