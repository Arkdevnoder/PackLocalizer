<?php

namespace App\Traits;

trait RoleDefiner
{
    public const USER = "user";
    
    public const MODERATOR = "moderator";
    
    public const ROLE_LOCALIZATION_NAMES = [
        "user" => "User",
        "moderator" => "Moderator",
    ];

    public static function getInvolvedRoles(): array{
        foreach(static::ROLE_LOCALIZATION_NAMES as $key => $role)
        {
            $result[] = ["name" => __($role), "code" => $key];
        }
        return $result;
    } 
}