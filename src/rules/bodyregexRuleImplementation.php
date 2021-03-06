<?php


namespace ALDIDigitalServices\pms\rules;


use ALDIDigitalServices\pms\ruleImplementationInterface;

class bodyregexRuleImplementation implements ruleImplementationInterface
{

    public static function check(\Symfony\Component\HttpFoundation\Request &$request, $rules)
    {
        foreach($rules as  $pattern){
            if(preg_match($pattern, $request->getContent()) < 1){
                return false;
            }
        }
        return true;
    }
}
