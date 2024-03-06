<?php


use Illuminate\Support\Facades\Auth;


if (!function_exists('isAdmin')) {
    function isAdmin($role)
    {
        $user = Auth::user();
       
        if($user->role === $role){
            return true;
        }else{
            return false; 
        }
    }
}

if (!function_exists('isEmployee')) {
    function isEmployee($role)
    {
        $user = Auth::user();
       
        if($user->role === $role){
            return true;
        }else{
            return false; 
        }
    }
}

if (!function_exists('isUser')) {
    function isUser($role)
    {
        $user = Auth::user();
       
        if($user->role === $role){
            return true;
        }else{
            return false; 
        }
    }
}