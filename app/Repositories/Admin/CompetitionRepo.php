<?php  namespace App\Repositories\Admin;

use App\Models\Bundle;
use Illuminate\Support\Facades\DB;

class CompetitionRepo
{
  public function all()
  {
    return DB::select('select b.id, b.title, b.description, b.start_date, b.end_date, b.entry_price, b.total_entries, b.total_cost, total_profit, GROUP_CONCAT(p.id) AS prizes, GROUP_CONCAT(p.title) AS titles
                        FROM bundles as b
                        JOIN bundleprizes as bp ON (b.id = bp.bundle_id)
                        JOIN prizes as p ON (bp.prize_id = p.id)
                        GROUP BY b.id', [1]);
  }

  public function checkDates($propertyID, $search)
  {
    return Booking::join('properties', 'bookings._fk_property', '=', 'properties.__pk' )
                  ->where('_fk_property', $propertyID)
                  ->whereNotBetween('bookings.start_date', array($search['check_in'], $search['check_out']))
                  ->whereNotBetween('bookings.end_date', array($search['check_in'], $search['check_out']))
                  ->get();
  }
}
