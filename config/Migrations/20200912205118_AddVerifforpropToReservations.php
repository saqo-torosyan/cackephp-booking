<?php
use Migrations\AbstractMigration;

class AddVerifforpropToReservations extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('reservations');
        $table->addColumn('verif_for_prop', 'integer');
        $table->update();
    }
}
