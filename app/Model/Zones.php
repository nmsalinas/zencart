<?php
/**
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version GIT: $Id: $
 */
namespace App\Model;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class Zones
 * @package ZenCart\Model
 */
class Zones extends Eloquent
{
    protected $table = TABLE_ZONES;
    protected $primaryKey = 'zone_id';

}
