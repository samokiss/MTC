<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 17/03/16
 * Time: 15:53
 */

namespace MTC\DB;


interface DBInterface
{
    public function fetchAll();
    public function insert();
    public function edit();
    public function remove();
}