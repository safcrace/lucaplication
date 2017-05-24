<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['name', 'license_server', 'user_sap', 'password_sap', 'database_sap', 'user_sql',
                            'password_sql', 'status', 'server_sql', 'sap_db_type'];
}
